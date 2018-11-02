jQuery(document).on("click", "#agregar_datos", function(){

    name = $('#name').val();


    if (name == '') {
        alert('* EL CAMPO NOMBRE ES OBLIGATORIO...');
        return false;
    }

    var form= new FormData($("#registerForm")[0]);
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: 'nombre_votos',
        type: 'POST',
        dataType: 'json',
        data: form,
        processData: false,
        contentType: false,
        success: function (data) {
            if(data > 0)
            {
                alert('REGISTRO FUE GUARDADO CON EXITO');
            }
            else
            {
                alert('NO SE PUDO GUARDAR EL REGISTRO');
                console.log(data);
            }
        },
        error: function(data) {
            alert('* Error de Red...<br>* Contactese con el Administrador...');
            console.log(data);
        }
    });
})