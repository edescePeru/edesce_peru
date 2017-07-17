/**
 * Created by JGONZALES on 15/07/2017.
 */
jQuery(function (){

    modalRegister  = $('#modalRegister');
    modalShowImage = $('#modalShowImage');
    modalEdit      = $('#modalEdit');
    modalDelete    = $('#modalDelete');
    $('[data-register]').on('click',showModalRegister);
    $('[data-show]').on('click',showModalImage);
    $('[data-edit]').on('click',showModalEdit);
    $('[data-delete]').on('click',showModalDelete);

    $('#formRegister').on('submit',ponent);
    $('#formEdit').on('submit',ponent);
    $('#formDelete').on('submit',ponent);
});

var modalRegister;
var modalShowImage;
var modalEdit;
var modalDelete;

function showModalRegister()
{
    modalRegister.modal('show');
}

function showModalImage()
{
    var name = $(this).data('name');
    var image = $(this).data('image');
    var path = $('#path').attr('data-path');
    modalShowImage.find('[name=name]').val(name);
    var src = path+'assets/images/'+image;
    $('#image').attr('src',src);

    modalShowImage.modal('show');
}

function showModalEdit()
{
    var id = $(this).data('edit');
    var name = $(this).data('name');
    var email = $(this).data('email');
    var profile = $(this).data('profile');
    var company = $(this).data('company');
    var position = $(this).data('position');
    var description = $(this).data('description');

    modalEdit.find('[name=id]').val(id);
    modalEdit.find('[name=name]').val(name);
    modalEdit.find('[name=email]').val(email);
    modalEdit.find('[name=company]').val(company);
    modalEdit.find('[name=profile]').val(profile);
    modalEdit.find('[name=position]').val(position);
    modalEdit.find('[name=description]').val(description);

    modalEdit.modal('show');
}

function showModalDelete()
{
    var id = $(this).data('delete');
    var name = $(this).data('name');

    modalDelete.find('[name=id]').val(id);
    modalDelete.find('[name=name]').val(name);

    modalDelete.modal('show');
}

function ponent()
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

