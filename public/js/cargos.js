function cerrarFormAgregarCargo(){
    let vntAddCargo = document.getElementById('vntAgregarCargo');
    vntAddCargo.classList.toggle('show');
    vntAddCargo.classList.toggle('hidden');
}

function formAgregarCargo(){
    let vntAddCargo = document.getElementById('vntAgregarCargo');
    vntAddCargo.classList.toggle('show');
    vntAddCargo.classList.toggle('hidden');
}

function enviarForm(){
    document.getElementById('cargosForm').submit();
}

function vefCargo(){
    selector = document.getElementById('cargo');
    inputDesc = document.getElementById('inputDesc');
    if(selector.value=="Taicho"){
        inputDesc.disabled = true;
    }else{
        inputDesc.disabled = false;
    }
}

function debounce(func, delay) {
    let timer;
    return function () {
        const context = this;
        const args = arguments;
        clearTimeout(timer);
        timer = setTimeout(() => func.apply(context, args), delay);
    };
}

$(document).ready(function () {
    var miembroId;
    // Capturar cuando el usuario escribe en el input
    $('#buscar').on('keyup', debounce(function () {
        var query = $(this).val();

        // Verificar si hay algo escrito
        if (query.length > 0) {
            // Llamada AJAX para obtener los usuarios
            $.ajax({
                url: buscarMiembrosURL,
                type: 'GET',
                data: { query: query },
                success: function (data) {
                    var listaUsuarios = $('#listaUsuarios ul');
                    listaUsuarios.empty(); // Limpiar las sugerencias anteriores

                    if (data.length > 0) {
                        // Mostrar la lista de usuarios sugeridos
                        $.each(data, function (index, miembro) {
                            listaUsuarios.append('<li data-id=' + miembro.id + '>' + " " + miembro.nombre + " " + miembro.ap_p + " " + miembro.ap_m + '</li>');
                        });
                        $('#listaUsuarios').show();
                    } else {
                        $('#listaUsuarios').hide();
                    }
                }
            });
        } else {
            // Si no hay texto, ocultar la lista de sugerencias
            $('#listaUsuarios').hide();
        }
    },500));

    // Cuando se selecciona un usuario de la lista de sugerencias
    $(document).on('click', '#listaUsuarios li', function () {
        var nombreSeleccionado = $(this).text();
        $('#buscar').val(nombreSeleccionado); // Colocar el nombre seleccionado en el input
        $('#miembroId').val($(this).data('id'));
        $('#listaUsuarios').hide(); // Ocultar las sugerencias
    });
});