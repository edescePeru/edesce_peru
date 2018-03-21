$(document).ready(function() {

    $('#contact-form').on('submit', sendEmail);

    modalProfile  = $('#modalProfile');

    $('[data-profile]').on('click',showModalProfile);

});

var modalProfile;

function sendEmail() {
    event.preventDefault();
    var url = $(this).attr('action');
    console.log(url);
    $.ajax({
            url: url,
            data: $(this).serializeArray(),
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'POST'
        })
        .done(function( response ) {
            if(response.error){
                alert(response.message);
            }
            else{
                alert(response.message);
                setTimeout(function(){
                    location.reload();
                }, 100);
            }
        });
}

function showModalProfile()
{
    var code = $('#code').val();

    if( code == "" ) {
        alert('Lo sentimos ingrese un código para consultar.');
    }
    else {
        $.get('/profile/data/'+code, function (data) {
            console.log(data[0].student);
            if (data) {
                modalProfile.find('[id=inscription_code]').val(data[0].inscription_code);
                modalProfile.find('[id=student]').val(data[0].student);
                modalProfile.find('[id=student]').val(data[0].student);
                modalProfile.find('[id=student_code]').val(data[0].student_code);
                modalProfile.find('[id=subject]').val(data[0].subject);
                modalProfile.find('[id=date]').val(data[0].date);
                modalProfile.find('[id=modality]').val(data[0].inscription_modality);
                modalProfile.find('[id=score]').val(data[0].score);
                if (data[0].file_pdf!=null){
                    modalProfile.find('[id=pdf-file]').attr("href","assets/certificados/"+data[0].file_pdf);
                }
                if (data[0].file_pdf2!=null){
                    modalProfile.find('[id=pdf-file2]').attr("href","assets/certificados2/"+data[0].file_pdf2);
                }

                modalProfile.modal('show');
            } else {
                var error = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <span><strong>Advertencia: No hay datos de esta inscripción</strong> {{ $error }}</span> </div>'
                $('#error').html(error);
            }
        });
    }


}

function inscription()
{
    event.preventDefault();
    $.ajax({
            url: $(this).attr("action"),
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'POST'
        })
        .done(function( response ) {
            if(response.error){
                var error = '<div class="alert alert-danger">'+
                    '<button type="button" class="close" data-dismiss="alert">×</button>'+
                    '<span><strong>Advertencia: </strong>'+response.message+'</span>'+
                    '</div>';
                $('#message').html(error);
            }else{
                var mensaje = '<div class="alert alert-success">'+
                    '<button type="button" class="close" data-dismiss="alert">×</button>'+
                '<span><strong>Éxito: </strong>'+response.message+'</span><br/>'+
                '<span>Recargando la página en 4 seg.</span>'+
                '</div>';
                $('#message').html(mensaje);
                setTimeout(function(){
                    location.reload();
                }, 4000);
            }
        });
}

