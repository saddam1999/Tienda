
<!-- Scripts Status-->
<script>
    $('#modal_status').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id3').val(id);
        $("#cambio_status").attr("action", '/cambio_status/' + id);
        var id = $(e.relatedTarget).data().status;
        $(e.currentTarget).find('#status3').val(id);
    });
</script>
<!-- Scripts Pago-->
<script>
    $('#modal_pago').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id').val(id);
        $("#agregarpago").attr("action", '/agregarpago/' + id);

        tasa = document.getElementById("iva").value;
        var presupuesto = $(e.relatedTarget).data().presupuesto; //pago a pagar
        var adelanto = $(e.relatedTarget).data().pago; //adelanto
        $(e.currentTarget).find('#adelanto4').val(adelanto);
        if (iva != 0) {
            var iva = (presupuesto * tasa) / 100;
            $("input[name=total_final]").val(parseInt(presupuesto) + parseInt(iva));
            $("input[name=presupuesto4]").val(parseInt(presupuesto) + parseInt(iva));
            pendiente = (presupuesto + iva) - adelanto;
            $("input[name=pendiente4]").val(pendiente);
            $('#final4').on('input', function(e) {
                iva = document.getElementById("iva").value;
                pago = document.getElementById("final4").value;
                var tasa = iva;
                var monto = $("input[name=total]").val();
                var anticipo = $("input[name=pendiente4]").val();
                if (anticipo != 0) {
                    cambio = pago - anticipo;
                } else {
                    cambio = pago - precio;
                }
                if (tasa == 0.0) {
                    $("input[name=subtotal]").val(parseInt(cambio));
                    //$("input[name=total_final]").val(parseInt(monto));
                } else {
                    var iva = (monto * tasa) / 100;
                    $("input[name=subtotal]").val(parseInt(cambio));
                    // $("input[name=total_final]").val(parseInt(monto) + parseInt(iva));
                }
                if (tasa == null) {
                    var monto = $("input[name=total]").val();
                    // document.getElementById("total_final").monto;
                    $("input[name=subtotal]").val(parseInt(cambio));
                }
            });
        } else if (iva == '' || iva == 0) {}
    });
</script>
<!-- Scripts Servisio-->
<script>
    $('#modal_servicio').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id5').val(id);
        $("#cambio_servicio").attr("action", '/cambio_servicio/' + id);
        var id = $(e.relatedTarget).data().id_servicio;
        $(e.currentTarget).find('#id_servicio5').val(id);
    });
</script>
<!-- Scripts Editar Usuario-->
<script>
    $('#modaleditar').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#modaledit").attr("action", '/editusuario/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().name;
        $(e.currentTarget).find('#name1').val(id);
        var id = $(e.relatedTarget).data().email;
        $(e.currentTarget).find('#email1').val(id);
        var id = $(e.relatedTarget).data().password;
        $(e.currentTarget).find('#password1').val(id);
        var id = $(e.relatedTarget).data().rol;
        $(e.currentTarget).find('#rol1').val(id);
        var id = $(e.relatedTarget).data().id_sucursal;
        $(e.currentTarget).find('#id_sucursal1').val(id);
    });
</script>
<!-- Scripr Editar Categoria-->
<script>
    $('#modal_editarcategoria').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarcategoria").attr("action", '/editarcategoria/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre_categoria;
        $(e.currentTarget).find('#nombre_categoria1').val(id);
    });
</script>
<!-- Scripts Editar sucursal-->
<script>
    ////////////////modal editar sucursal
    $('#modaleditarsucursal').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarsucursal").attr("action", '/editsucursal/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().email;
        $(e.currentTarget).find('#email1').val(id);
        var id = $(e.relatedTarget).data().telefono;
        $(e.currentTarget).find('#telefono1').val(id);
        var id = $(e.relatedTarget).data().whatsapp;
        $(e.currentTarget).find('#whatsapp1').val(id);
        var id = $(e.relatedTarget).data().telegram;
        $(e.currentTarget).find('#telegram1').val(id);
        var id = $(e.relatedTarget).data().direccion;
        $(e.currentTarget).find('#direccion1').val(id);
    });
</script>
<!-- Scripts Editar Servicio-->
<script>
    $('#modaleditarservicio').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarservicio").attr("action", '/editservicio/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().descripcion;
        $(e.currentTarget).find('#descripcion1').val(id);
        var id = $(e.relatedTarget).data().precio;
        $(e.currentTarget).find('#precio1').val(id);
        var id = $(e.relatedTarget).data().tiempo;
        $(e.currentTarget).find('#tiempo1').val(id);
    });
</script>
<!-- Script editar articulo -->
<script>
    $('#modaleditararticulo').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editararticulo").attr("action", '/editararticulo/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().descripcion;
        $(e.currentTarget).find('#descripcion1').val(id);
        var id = $(e.relatedTarget).data().precio;
        $(e.currentTarget).find('#precio1').val(id);
        var id = $(e.relatedTarget).data().descuento;
        $(e.currentTarget).find('#descuento1').val(id);
        var id = $(e.relatedTarget).data().IDlocal;
        $(e.currentTarget).find('#IDlocal1').val(id);
        var id = $(e.relatedTarget).data().categoria;
        $(e.currentTarget).find('#categoria1').val(id);
        var id = $(e.relatedTarget).data().talla;
        $(e.currentTarget).find('#talla1').val(id);
        if (id == 0) {
            $("#precio1").prop("disabled", false);
        } else {
            $("#precio1").prop("disabled", true);
        }
        var id = $(e.relatedTarget).data().id_marca;
        $(e.currentTarget).find('#id_marca1').val(id);
        var id = $(e.relatedTarget).data().calificacion;
        $(e.currentTarget).find('#calificacion1').val(id);
        var id = $(e.relatedTarget).data().existencia;
        $(e.currentTarget).find('#existencia1').val(id);
    });
</script>
<!-- Script Camara Taller Equipo -->
<script>
    $(document).ready(function() {
        //$('#smartcart').smartCart();
        $('#modal_foto').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data().id;
            $(e.currentTarget).find('#id_equipo1').val(id);
            const tieneSoporteUserMedia = () =>
                !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
            const _getUserMedia = (...arguments) =>
                (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(
                    navigator, arguments);
            // Declaramos elementos del DOM
            const $video = document.querySelector("#video1"),
                $canvas = document.querySelector("#canvas1"),
                $estado = document.querySelector("#estado1"),
                $boton = document.querySelector("#boton1"),
                $listaDeDispositivos = document.querySelector("#listaDeDispositivos1");
            const limpiarSelect = () => {
                for (let x = $listaDeDispositivos.options.length - 1; x >= 0; x--)
                    $listaDeDispositivos.remove(x);
            };
            const obtenerDispositivos = () => navigator
                .mediaDevices
                .enumerateDevices();
            // La funciÃ³n que es llamada despuÃ©s de que ya se dieron los permisos
            // Lo que hace es llenar el select con los dispositivos obtenidos
            const llenarSelectConDispositivosDisponibles = () => {
                    limpiarSelect();
                    obtenerDispositivos()
                        .then(dispositivos => {
                            const dispositivosDeVideo = [];
                            dispositivos.forEach(dispositivo => {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            if (dispositivosDeVideo.length > 0) {
                                // Llenar el select
                                dispositivosDeVideo.forEach(dispositivo => {
                                    const option = document.createElement('option');
                                    option.value = dispositivo.deviceId;
                                    option.text = dispositivo.label;
                                    $listaDeDispositivos.appendChild(option);
                                });
                            }
                        });
                }
                (function() {
                    // Comenzamos viendo si tiene soporte, si no, nos detenemos
                    if (!tieneSoporteUserMedia()) {
                        alert("Lo siento. Tu navegador no soporta esta caracterÃ­stica");
                        $estado.innerHTML =
                            "Parece que tu navegador no soporta esta caracterÃ­stica. Intenta actualizarlo.";
                        return;
                    }
                    //AquÃ­ guardaremos el stream globalmente
                    let stream;
                    // Comenzamos pidiendo los dispositivos
                    obtenerDispositivos()
                        .then(dispositivos => {
                            // Vamos a filtrarlos y guardar aquÃ­ los de vÃ­deo
                            const dispositivosDeVideo = [];
                            // Recorrer y filtrar
                            dispositivos.forEach(function(dispositivo) {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            // y le pasamos el id de dispositivo
                            if (dispositivosDeVideo.length > 0) {
                                // Mostrar stream con el ID del primer dispositivo, luego el usuario puede cambiar
                                mostrarStream(dispositivosDeVideo[0].deviceId);
                            }
                        });
                    const mostrarStream = idDeDispositivo => {
                        _getUserMedia({
                                video: {
                                    // Justo aquÃ­ indicamos cuÃ¡l dispositivo usar
                                    deviceId: idDeDispositivo,
                                }
                            },
                            (streamObtenido) => {
                                // AquÃ­ ya tenemos permisos, ahora sÃ­ llenamos el select,
                                // pues si no, no nos darÃ­a el nombre de los dispositivos
                                llenarSelectConDispositivosDisponibles();
                                // Escuchar cuando seleccionen otra opciÃ³n y entonces llamar a esta funciÃ³n
                                $listaDeDispositivos.onchange = () => {
                                    // Detener el stream
                                    if (stream) {
                                        stream.getTracks().forEach(function(track) {
                                            track.stop();
                                        });
                                    }
                                    // Mostrar el nuevo stream con el dispositivo seleccionado
                                    mostrarStream($listaDeDispositivos.value);
                                }
                                // Simple asignaciÃ³n
                                stream = streamObtenido;
                                // Mandamos el stream de la cÃ¡mara al elemento de vÃ­deo
                                $video.srcObject = stream;
                                $video.play();
                                //Escuchar el click del botÃ³n para tomar la foto
                                //Escuchar el click del botÃ³n para tomar la foto
                                $boton.addEventListener("click", function() {
                                    //Pausar reproducciÃ³n
                                    $video.pause();
                                    //Obtener contexto del canvas y dibujar sobre Ã©l
                                    let contexto = $canvas.getContext("2d");
                                    $canvas.width = $video.videoWidth;
                                    $canvas.height = $video.videoHeight;
                                    contexto.drawImage($video, 0, 0, $canvas.width,
                                        $canvas.height);
                                    let foto = $canvas
                                        .toDataURL(); //Esta es la foto, en base 64
                                    $estado.innerHTML =
                                        "Enviando foto. Por favor, espera...";
                                    fetch("./fotos/foto.php", {
                                            method: "POST",
                                            body: encodeURIComponent(foto),
                                            headers: {
                                                "Content-type": "application/x-www-form-urlencoded",
                                            }
                                        })
                                        .then(resultado => {
                                            // A los datos los decodificamos como texto plano
                                            return resultado.text()
                                        })
                                        .then(nombreDeLaFoto => {
                                            $('#id_captura1').attr('value',
                                                nombreDeLaFoto);
                                            // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
                                            console.log(
                                                "La foto fue enviada correctamente"
                                            );
                                            $estado.innerHTML =
                                                `Foto guardada con Exito. Puedes verla <a target='_blank' href='./foto/${nombreDeLaFoto}'> aquÃ­</a>`;
                                        })
                                    //Reanudar reproducciÃ³n
                                    $video.play();
                                });
                            }, (error) => {
                                console.log("Permiso denegado o error: ", error);
                                $estado.innerHTML =
                                    "No se puede acceder a la cÃ¡mara, o no diste permiso.";
                            });
                    }
                })();
        });
        $('#modaltaller').on('show.bs.modal', function(e) {
            const tieneSoporteUserMedia = () =>
                !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
            const _getUserMedia = (...arguments) =>
                (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(
                    navigator, arguments);
            // Declaramos elementos del DOM
            const $video = document.querySelector("#video"),
                $canvas = document.querySelector("#canvas"),
                $estado = document.querySelector("#estado"),
                $boton = document.querySelector("#boton"),
                $listaDeDispositivos = document.querySelector("#listaDeDispositivos");
            const limpiarSelect = () => {
                for (let x = $listaDeDispositivos.options.length - 1; x >= 0; x--)
                    $listaDeDispositivos.remove(x);
            };
            const obtenerDispositivos = () => navigator
                .mediaDevices
                .enumerateDevices();
            // La funciÃ³n que es llamada despuÃ©s de que ya se dieron los permisos
            // Lo que hace es llenar el select con los dispositivos obtenidos
            const llenarSelectConDispositivosDisponibles = () => {
                    limpiarSelect();
                    obtenerDispositivos()
                        .then(dispositivos => {
                            const dispositivosDeVideo = [];
                            dispositivos.forEach(dispositivo => {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            if (dispositivosDeVideo.length > 0) {
                                // Llenar el select
                                dispositivosDeVideo.forEach(dispositivo => {
                                    const option = document.createElement('option');
                                    option.value = dispositivo.deviceId;
                                    option.text = dispositivo.label;
                                    $listaDeDispositivos.appendChild(option);
                                });
                            }
                        });
                }
                (function() {
                    // Comenzamos viendo si tiene soporte, si no, nos detenemos
                    if (!tieneSoporteUserMedia()) {
                        alert("Lo siento. Tu navegador no soporta esta caracterÃ­stica");
                        $estado.innerHTML =
                            "Parece que tu navegador no soporta esta caracterÃ­stica. Intenta actualizarlo.";
                        return;
                    }
                    //AquÃ­ guardaremos el stream globalmente
                    let stream;
                    // Comenzamos pidiendo los dispositivos
                    obtenerDispositivos()
                        .then(dispositivos => {
                            // Vamos a filtrarlos y guardar aquÃ­ los de vÃ­deo
                            const dispositivosDeVideo = [];
                            // Recorrer y filtrar
                            dispositivos.forEach(function(dispositivo) {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            // y le pasamos el id de dispositivo
                            if (dispositivosDeVideo.length > 0) {
                                // Mostrar stream con el ID del primer dispositivo, luego el usuario puede cambiar
                                mostrarStream(dispositivosDeVideo[0].deviceId);
                            }
                        });
                    const mostrarStream = idDeDispositivo => {
                        _getUserMedia({
                                video: {
                                    // Justo aquÃ­ indicamos cuÃ¡l dispositivo usar
                                    deviceId: idDeDispositivo,
                                }
                            },
                            (streamObtenido) => {
                                // AquÃ­ ya tenemos permisos, ahora sÃ­ llenamos el select,
                                // pues si no, no nos darÃ­a el nombre de los dispositivos
                                llenarSelectConDispositivosDisponibles();
                                // Escuchar cuando seleccionen otra opciÃ³n y entonces llamar a esta funciÃ³n
                                $listaDeDispositivos.onchange = () => {
                                    // Detener el stream
                                    if (stream) {
                                        stream.getTracks().forEach(function(track) {
                                            track.stop();
                                        });
                                    }
                                    // Mostrar el nuevo stream con el dispositivo seleccionado
                                    mostrarStream($listaDeDispositivos.value);
                                }
                                // Simple asignaciÃ³n
                                stream = streamObtenido;
                                // Mandamos el stream de la cÃ¡mara al elemento de vÃ­deo
                                $video.srcObject = stream;
                                $video.play();
                                //Escuchar el click del botÃ³n para tomar la foto
                                //Escuchar el click del botÃ³n para tomar la foto
                                $boton.addEventListener("click", function() {
                                    //Pausar reproducciÃ³n
                                    $video.pause();
                                    //Obtener contexto del canvas y dibujar sobre Ã©l
                                    let contexto = $canvas.getContext("2d");
                                    $canvas.width = $video.videoWidth;
                                    $canvas.height = $video.videoHeight;
                                    contexto.drawImage($video, 0, 0, $canvas.width,
                                        $canvas.height);
                                    let foto = $canvas
                                        .toDataURL(); //Esta es la foto, en base 64
                                    $estado.innerHTML =
                                        "Enviando foto. Por favor, espera...";
                                    fetch("./fotos/foto.php", {
                                            method: "POST",
                                            body: encodeURIComponent(foto),
                                            headers: {
                                                "Content-type": "application/x-www-form-urlencoded",
                                            }
                                        })
                                        .then(resultado => {
                                            // A los datos los decodificamos como texto plano
                                            return resultado.text()
                                        })
                                        .then(nombreDeLaFoto => {
                                            $('#id_captura').attr('value',
                                                nombreDeLaFoto);
                                            // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
                                            console.log(
                                                "La foto fue enviada correctamente"
                                            );
                                            $estado.innerHTML =
                                                `Foto guardada con Exito. Puedes verla <a target='_blank' href='./foto/${nombreDeLaFoto}'> aquÃ­</a>`;
                                        })
                                    //Reanudar reproducciÃ³n
                                    $video.play();
                                });
                            }, (error) => {
                                console.log("Permiso denegado o error: ", error);
                                $estado.innerHTML =
                                    "No se puede acceder a la cÃ¡mara, o no diste permiso.";
                            });
                    }
                })();
        });
    });
</script>

<!-- Scripts Editar Equipo Taller-->
<script>
    $('#modaledittaller').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editequipo").attr("action", '/editequipo/' + id);
        var id = $(e.relatedTarget).data().id_user;
        $(e.currentTarget).find('#id_user2').val(id);
        var id = $(e.relatedTarget).data().id_sucursal;
        $(e.currentTarget).find('#id_sucursal2').val(id);
        var id = $(e.relatedTarget).data().id_servicio;
        $(e.currentTarget).find('#id_servicio2').val(id);
        var id = $(e.relatedTarget).data().pago;
        $(e.currentTarget).find('#pago2').val(id);
        var id = $(e.relatedTarget).data().modelo;
        $(e.currentTarget).find('#modelo2').val(id);

        var id = $(e.relatedTarget).data().anticipo;
        $(e.currentTarget).find('#anticipo2').val(id);
        var id = $(e.relatedTarget).data().presupuesto;
        $(e.currentTarget).find('#presupuesto2').val(id);
        var id = $(e.relatedTarget).data().inversion;
        $(e.currentTarget).find('#inversion2').val(id);
        var id = $(e.relatedTarget).data().id_cliente;
        $(e.currentTarget).find('#id_cliente2').val(id);
        var id = $(e.relatedTarget).data().serial;
        $(e.currentTarget).find('#serial2').val(id);
        var id = $(e.relatedTarget).data().imei;
        $(e.currentTarget).find('#imei2').val(id);
        var id = $(e.relatedTarget).data().id_captura;
        $(e.currentTarget).find('#id_captura2').val(id);
        var id = $(e.relatedTarget).data().id_comentario;
        $(e.currentTarget).find('#descripcion2').val(id);
        var id = $(e.relatedTarget).data().fecha_recibido;
        $(e.currentTarget).find('#fecha_recibido2').val(id);
        var id = $(e.relatedTarget).data().fecha_entrega;
        $(e.currentTarget).find('#fecha_entrega2').val(id);
        var id = $(e.relatedTarget).data().status;
        $(e.currentTarget).find('#status2').val(id);
        var id = $(e.relatedTarget).data().tiene_camara;
        $(e.currentTarget).find('Tiene_Camara2').val(id);
        if (id == 'Tiene_Camara') {
            document.getElementById("Tiene_Camara2").checked = true;
        }
        var id = $(e.relatedTarget).data().centro_carga;
        $(e.currentTarget).find('Centro_Carga2').val(id);
        if (id == 'Centro_Carga') {
            document.getElementById("Centro_Carga2").checked = true;
        }
        var id = $(e.relatedTarget).data().señal;
        $(e.currentTarget).find('Señal2').val(id);
        if (id == 'Señal') {
            document.getElementById("Señal2").checked = true;
        }
        var id = $(e.relatedTarget).data().lectorsd;
        $(e.currentTarget).find('LectorSD2').val(id);
        if (id == 'LectorSD') {
            document.getElementById("LectorSD2").checked = true;
        }
        var id = $(e.relatedTarget).data().altavoz;
        $(e.currentTarget).find('AltaVoz2').val(id);
        if (id == 'AltaVoz') {
            document.getElementById("AltaVoz2").checked = true;
        }
        var id = $(e.relatedTarget).data().botonhome;
        $(e.currentTarget).find('BotonHome2').val(id);
        if (id == 'BotonHome') {
            document.getElementById("BotonHome2").checked = true;
        }
        var id = $(e.relatedTarget).data().microfono;
        $(e.currentTarget).find('Microfono2').val(id);
        if (id == 'Microfono') {
            document.getElementById("Microfono2").checked = true;
        }
        var id = $(e.relatedTarget).data().lector_sim;
        $(e.currentTarget).find('Lector_SIM2').val(id);
        if (id == 'Lector_SIM') {
            document.getElementById("Lector_SIM2").checked = true;
        }
        var id = $(e.relatedTarget).data().volumenplus;
        $(e.currentTarget).find('Volumenplus2').val(id);
        if (id == 'volumenplus') {
            document.getElementById("Volumenplus2").checked = true;
        }
        var id = $(e.relatedTarget).data().volumenless;
        $(e.currentTarget).find('Volumenless2').val(id);
        if (id == 'Volumenless') {
            document.getElementById("Volumenless2").checked = true;
        }
        var id = $(e.relatedTarget).data().encendido;
        $(e.currentTarget).find('Encendido2').val(id);
        if (id == 'Encendido') {
            document.getElementById("Encendido2").checked = true;
        }
        var id = $(e.relatedTarget).data().auricular;
        $(e.currentTarget).find('Auricular2').val(id);
        if (id == 'Auricular') {
            document.getElementById("Auricular2").checked = true;
        }
        var id = $(e.relatedTarget).data().touch;
        $(e.currentTarget).find('Touch2').val(id);
        if (id == 'Touch') {
            document.getElementById("Touch2").checked = true;
        }
        var id = $(e.relatedTarget).data().bateria;
        $(e.currentTarget).find('Bateria2').val(id);
        if (id == 'Bateria') {
            document.getElementById("Bateria2").checked = true;
        }
        var id = $(e.relatedTarget).data().enciende;
        $(e.currentTarget).find('Enciende2').val(id);
        if (id == 'Enciende') {
            document.getElementById("Enciende2").checked = true;
        }
        var id = $(e.relatedTarget).data().memoria;
        $(e.currentTarget).find('Memoria2').val(id);
        if (id == 'Memoria') {
            document.getElementById("Memoria2").checked = true;
        }
        var id = $(e.relatedTarget).data().sim;
        $(e.currentTarget).find('SIM2').val(id);
        if (id == 'SIM') {
            document.getElementById("SIM2").checked = true;
        }
        var id = $(e.relatedTarget).data().golpes;
        $(e.currentTarget).find('Golpes2').val(id);
        if (id == "Golpes") {
            document.getElementById("Golpes2").checked = true;
        }
        var id = $(e.relatedTarget).data().tiene_bateria;
        $(e.currentTarget).find('Tiene_Bateria2').val(id);
        if (id == "Tiene_Bateria") {
            document.getElementById("Tiene_Bateria2").checked = true;
        }
    });
</script>
<!-- Script Tabs -->
<script>
    $(document).ready(function() {
        // Initialize the leaveStep event
        $("#smartcart").on("cartEmpty", function(e) {
            // alert("Cart is empty");
        });
        // Initialize Smart Cart
        $('#smartcart').smartCart();

        function flash(e) {
            $('.flash')
                .show()
                .animate({
                    opacity: 0.5
                }, 300)
                .fadeOut(300)
                .css({
                    'opacity': 1
                });
        }
        $(document).ready(function() {
            $('.flash').hide();
            $(document).mouseup(function(e) {
                flash(e);
            });
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
        });
    });
</script>
<!-- Script Notificaciones -->
@if(session('success'))
<script>
    $('#modal_notificacion').modal('show');
</script>
@elseif(session('warning'))
<script>
    $('#modal_warning').modal('show');
</script>
@endif

@if($Sucursal->isEmpty()||$Caja->isEmpty()||$Settings->isEmpty()||$Caja->isEmpty())
<script>
    $('#modal_configurar').modal('show');
</script>
@endif

<script>
    $('#modal-taller-galleria').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id_equipo1').val(id);
        $('#galeria').attr('src', 'galleria/' + id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'galleria/' + id,
            data: {
                'id': id,
                '_method': 'POST',
            },
            type: 'POST',
            success: function(response) {
                //alert(response);
                //location.reload();
            },
            statusCode: {
                404: function() {
                    //alert('web not found');
                }
            },
            error: function(x, xs, xt) {
                //window.open(JSON.stringify(x));
                //  alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
            }
        });
    });
</script>
<!--carga -->

<script>
    $(document).ready(function() {
        $(".se-pre-con").fadeOut("slow");

    });
</script>

<script>
//    $('.toast').toast('show');
</script>

<!--tablas -->
<script>
$(document).ready(function(){
  $('#tableventas').dataTable();
  $('#tablemovimientos').dataTable();
  $('#tabletaller').dataTable();
  $('#tablecategoria').dataTable();
  $('#tablesucursal').dataTable();
  $('#tableservicios').dataTable();
  $('#tableusuarios').dataTable();
  $('#tablemarcas').dataTable();
  $('#tablearticulos').dataTable();
  $('#tablecajas').dataTable();
  $('#tabla_productos').dataTable();

});

</script>




<!--modal paypal -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function paypal1(selectObj) {
        var selectIndex = selectObj.selectedIndex;
        var selectValue = selectObj.options[selectIndex].text;
        var link = $('#creditos1').val();
        paypal.Buttons({
            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: link
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    alert('Transaction completed by ' + details.payer.name.given_name);
                    //$("#paypal").attr("action", '/credito_usuario/' + id);
                    //we will send data and recive data fom our AjaxController
                    //alert("im just clicked click me");
                    id = 1; 
                    $.ajax({
                        url: 'creditos/' + id,
                        data: {
                            'count': link,
                            '_method': 'POST',
                        },
                        type: 'POST',
                        success: function(response) {
                             alert(response);
                            location.reload();
                        },
                        statusCode: {
                            404: function() {
                                 alert('web not found');
                            }
                        },
                        error: function(x, xs, xt) {
                               window.open(JSON.stringify(x));
                            alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                        }
                    });
                });
            }
        }).render('#paypal-button-container');
    }
    //This function displays Smart Payment Buttons on your web page.
</script>
<!--modal info -->
<script>
    $('#modal_info').on('show.bs.modal', function(e) {

    var id = $(e.relatedTarget).data().id;
    $(e.currentTarget).find('#info_id').text(id);
    var id = $(e.relatedTarget).data().id_captura;
    $(e.currentTarget).find('#info_imagen').val(id);
    $("#info_imagen").attr("src", './fotos/' + id);
    var id = $(e.relatedTarget).data().serial;
    $(e.currentTarget).find('#info_serial').text(id);
    var id = $(e.relatedTarget).data().uniqueid;
    $(e.currentTarget).find('#uniqueid').text(id);
    var id = $(e.relatedTarget).data().imei;
    $(e.currentTarget).find('#info_imei').text(id);
    var id = $(e.relatedTarget).data().id_comentario;
    $(e.currentTarget).find('#info_comentario').val(id);
        });
</script>

<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
     <script>
        $(document).ready(function(){
                // Toggle the blurred class
                function sidebar() {
                    var trigger = $('#trigger, #close'),
                        menu = $('.sidebar');
                    trigger.on('click', function() {
                        $(this).toggleClass('active');
                        menu.toggleClass('closed');
                        $('#blurrMe').toggleClass('blurred'); // just here
                    });
                }

                function deploy() {
                    sidebar();
                }
                deploy();
            });
        </script>
@section('scripts')
