/*  
    * SUBIENDO LA FOTO DEL USUARIO
*/
$(".nuevaFoto").change(function() {

    var imagen = this.files[0];
    // console.log("imagen", imagen);

    /* VALIDAMOS EL FORMATO DE LA IMAGEN */
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {

        $(".nuevaFoto").val("");

        swal.fire({
            icon: "error",
            title: "¡Error al subir la imagen!",
            text: "Formatos permitidos: JPG o PNG",
            confirmButtonText: "Cerrar"
        });

    } else if(imagen["size"] > 2100000) {

        $(".nuevaFoto").val("");

        swal.fire({
            icon: "info",
            title: "El tamaño maximo permitido para la imagen es de 2MB",
            timer: 2200
        });

    } else {

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event) {

            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);

        });

    }

});