/**
 * Created by JGONZALES on 15/07/2017.
 */
jQuery(function (){

    modalRegister  = $('#modalRegister');
    modalScore = $('#modalScore');
    modalPdf      = $('#modalPdf');
    modalDelete    = $('#modalDelete');
    $(document).on("click", "[data-inscription]", showModalInscription);
    //$('[data-inscription]').on('click',showModalInscription);
    $('[data-score]').on('click',showModalScore);
    $('[data-pdf]').on('click',showModalPdf);
    $('[data-delete]').on('click',showModalDelete);

    $('#formRegister').on('submit',inscription);
    $('#formScore').on('submit',inscription);
    $('#formPdf').on('submit',inscription_pdf);
    $('#formDelete').on('submit',inscription_delete);
});

var modalRegister;
var modalScore;
var modalPdf;
var modalDelete;

function showModalInscription()
{
    var name = $(this).data('name');
    var surname = $(this).data('surname');
    var id = $(this).data('inscription');
    modalRegister.find('[name=name]').val(name+" "+surname);
    modalRegister.find('[name=id]').val(id);
    modalRegister.modal('show');
}

function showModalScore()
{
    var id = $(this).data('score');
    var subject = $(this).data('subject');
    modalScore.find('[name=id]').val(id);
    modalScore.find('[name=id_subject]').val(subject);

    modalScore.modal('show');
}

function showModalPdf()
{
    var id = $(this).data('pdf');
    var subject = $(this).data('subject');

    modalPdf.find('[name=id]').val(id);

    modalPdf.find('[name=id_subject]').val(subject);

    modalPdf.modal('show');
}

function showModalDelete()
{
    var id = $(this).data('delete');
    var subject = $(this).data('subject');

    modalDelete.find('[name=id_subject]').val(subject);

    modalDelete.find('[name=id]').val(id);
    modalDelete.modal('show');
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

function inscription_pdf()
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
                $('#message_pdf').html(error);
            }else{
                var mensaje = '<div class="alert alert-success">'+
                    '<button type="button" class="close" data-dismiss="alert">×</button>'+
                    '<span><strong>Éxito: </strong>'+response.message+'</span><br/>'+
                    '<span>Recargando la página en 4 seg.</span>'+
                    '</div>';
                $('#message_pdf').html(mensaje);
                setTimeout(function(){
                    location.reload();
                }, 4000);
            }
        });
}

function inscription_delete()
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
                $('#message_delete').html(error);
            }else{
                var mensaje = '<div class="alert alert-success">'+
                    '<button type="button" class="close" data-dismiss="alert">×</button>'+
                    '<span><strong>Éxito: </strong>'+response.message+'</span><br/>'+
                    '<span>Recargando la página en 4 seg.</span>'+
                    '</div>';
                $('#message_delete').html(mensaje);
                setTimeout(function(){
                    location.reload();
                }, 4000);
            }
        });
}

