<?php

namespace App\Http\Controllers;

use App\Mail\SendConfirmationEmail;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;

class PayPalCardController extends Controller
{
    private $client;
    private $clientId;
    private $secret;

    public function __construct()
    {
        $this->client = new Client([
            // 'base_uri' => 'https://api-m.paypal.com'
            'base_uri' => 'https://api-m.sandbox.paypal.com'
        ]);

        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken()
    {
        $response = $this->client->request('POST', '/v1/oauth2/token', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => 'grant_type=client_credentials',
                'auth' => [
                    $this->clientId, $this->secret, 'basic'
                ]
            ]
        );

        $data = json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    public function process($orderId, Request $request)
    {
        $accessToken = $this->getAccessToken();

        $requestUrl = "/v2/checkout/orders/$orderId/capture";

        $response = $this->client->request('POST', $requestUrl, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        //dd($data);

        if ($data['status'] === 'COMPLETED') {
            // TODO: Dar una respuesta de éxito si todo salió bien
            Mail::to('edesce_peru@gmail.com')
                ->cc(['joryes1894@gmail.com'])
                ->send(new SendConfirmationEmail($data));
            return [
                'success' => true,
                'message' => "Pago realizado con éxito.",
            ];
        }

        // Dar una respuesta de error si el status no es COMPLETED
        return $this->responseFailure($data);
    }

    public function responseFailure($data)
    {
        return [
            'success' => false,
            'message' => "El pago a fallado, inténtelo nuevamente.",
        ];
    }
}
