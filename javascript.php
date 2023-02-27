                    actualizar_datos();
                }
            }
            $('#form_alta').hide();
            $('#form_datos').show();

        })


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //// MODAL IDA Y VUELTA
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //EVENTO AL CERRAR EL MODAL VACIA TODOS LOS CAMPOS
        $('#modal_cerrar').off('click').on('click', function() {
            $('#tipo_trayecto').val('');
            $('#entrada_modal').val('');
            $('#origen_modal').val('');
            $('#zona_origen_modal').val('');
            reset_dias();
            borrado_masivo_puntos_encuentro();

        });


        // EVENTOS AL PULSAR BOTONES DE LOS PUNTOS INTERMEDIOS MODAL
        $('#btn_puntos_parada_ida_modal').off('click').on('click', function() {
            $('#wrap_datos_punto1_modal').show();
        })
        $('#btn_puntos_parada_vuelta_modal').off('click').on('click', function() {
            $('#wrap_datos_punto1_modal').show();
        })
        $('#annadir_punto2_modal').off('click').on('click', function() {
            $('#wrap_datos_punto2_modal').show();
        })
        $('#annadir_punto3_modal').off('click').on('click', function() {
            $('#wrap_datos_punto3_modal').show();
        })
        $('#annadir_punto4_modal').off('click').on('click', function() {
            $('#wrap_datos_punto4_modal').show();
        })
        $('#annadir_punto5_modal').off('click').on('click', function() {
            $('#wrap_datos_punto5_modal').show();
        })

        // VERIFICAR CAMPOS PUNTO DE ENCUENTRO NO ESTAN VACIOS MODAL
        $('.annadir_punto_modal').off('click').on('click', function() {
            id = $(this).attr('id');
            siguiente = id.slice(-1)
            numero = id.slice(-1) - 1
            punto = $('#punto' + numero + '_municipio_modal').val();
            zona = $('#punto' + numero + '_zona_modal').val();

            if (punto == '' || zona == '') {
                alert('Rellena los datos necesarios, por favor')
            } else {

                $('#wrap_datos_punto' + siguiente + '_modal').show();
                $('#wrap_annadir_punto' + siguiente + '_modal').hide();


            }
        });

        // EVENTO AL PULSAR BOTON BORRADO PUNTO DE ENCUENTRO MODAL
        $('.clase_borrar_punto_modal').off('click').on('click', function() {
            id = $(this).parent().attr('id');
            id_esconder = $(this).parent().parent().parent().parent().attr('id')
            numero = id.slice(-1)
            anterior = id.slice(-1) - 1
            punto = $('#punto' + numero + '_municipio_modal').val('');
            zona = $('#punto' + numero + '_zona_modal').val('');
            $('#' + id_esconder).hide();
            $('#wrap_quitar_punto' + anterior + '_modal').hide();
            if (numero < 5) {
                $('#wrap_annadir_punto' + numero + '_modal').show()
            }
            $('#wrap_quitar_punto' + anterior + '_modal').show()
        });

        // EVENTO AL AÑADIR ORIGEN MODAL
        $('#btn_puntos_parada_ida_modal').off('click').on('click', function() {
            restaurar_boton_punto_encuentro()
            origen = $('#origen_modal').val();
            zona_origen = $('#zona_origen_modal').val();
            if (origen == '' || zona_origen == '') {
                alert('Rellena los datos necesarios, por favor')
            } else {
                // $('#myCarousel').hide(500);
                $('#wrap_datos_punto1_modal').show(500);
            }
        });

        // ACCION QUE AL PERDER EL FOCO EL ORIGN O EL DESTINO DEL MODAL COMPRUEBA QUE ESTEN CLICADOS LOS DIAS DE LA SEMANA
        $('#origen_modal').focusout(function() {
            comprobar_dias_modal();

        });
        $('#destino_modal').focusout(function() {
            comprobar_dias_modal();

        });

        // ACCION QUE AL PERDER EL FOCO LA ZONA DE ORIGEN/DESTINO COMPRUEBE SI ESTA COMPLETADO PARA QUE APAREZCA EL BOTON GUARDAR
        $('#zona_origen_modal').focusout(function() {
            tipo_servicio = $('#tipo_servicio').val()
            if (tipo_servicio == 'ofrecer' && $('#zona_origen_modal').val() != '') {
                $('#wrap_btn_puntos_parada_origen_modal').show();
                $('#wrap_guardar_datos_modal').show();
            } else if (tipo_servicio == 'ofrecer' && $('#zona_origen_modal').val() == '') {
                $('#wrap_btn_puntos_parada_origen_modal').hide();
                $('#wrap_guardar_datos_modal').hide();
            } else if (tipo_servicio == 'solicitar' && $('#zona_origen_modal').val() != '') {
                $('#wrap_guardar_datos_modal').show();
            } else if (tipo_servicio == 'solicitar' && $('#zona_origen_modal').val() == '') {
                $('#wrap_guardar_datos_modal').hide();
            }
        })
        $('#zona_destino_modal').focusout(function() {
            tipo_servicio = $('#tipo_servicio').val()
            if (tipo_servicio == 'ofrecer' && $('#zona_destino_modal').val() != '') {
                $('#wrap_btn_puntos_parada_destino_modal').show();
                $('#wrap_guardar_datos_modal').show();
            } else if (tipo_servicio == 'ofrecer' && $('#zona_destino_modal').val() == '') {
                $('#wrap_btn_puntos_parada_destino_modal').hide();
                $('#wrap_guardar_datos_modal').hide();
            } else if (tipo_servicio == 'solicitar' && $('#zona_destino_modal').val() != '') {
                $('#wrap_guardar_datos_modal').show();
            } else if (tipo_servicio == 'solicitar' && $('#zona_destino_modal').val() == '') {
                $('#wrap_guardar_datos_modal').hide();
            }
        })


        $('#btn-guardar_modal').on('click', function() {

            if ($('#entrada_modal').val() != '') {

                almacenar_campos_modal();
                almacenar_dias_seleccionados_modal();
                guardar_datos_modal();
                reset_dias();
                borrado_masivo_puntos_encuentro();

                $('#entrada_modal').val('');
                $('#origen_modal').val('');
                $('#zona_origen_modal').val('');
                $('#wrap_guardar_datos_modal').hide();
                // alert('trayecto de vuelta');

                $('#titulo').text('Trayecto de vuelta a Casa');
                $('#wrap_salida_modal').show();
                $('#wrap_entrada_modal').hide();
                $('#wrap_datos_origen_modal').hide();
                $('#wrap_datos_destino_modal').show();
                query = '';

            }

            if ($('#salida_modal').val() != '') {
                almacenar_campos_modal();
                almacenar_dias_seleccionados_modal();
                guardar_datos_modal();
                reset_dias();
                borrado_masivo_puntos_encuentro();
                $('#salida_modal').val('');
                $('#destino_modal').val('');
                $('#zona_destino_modal').val('');
                $('#modal_cerrar').trigger('click');
                $('#form_alta').hide();
                $('#form_datos').show();

                cargar_datos();

            }


        });
     
        $('#btn_editar_datos_t1').on('click', function() {
           
            if ($('#datos_t1_entrada').val() != '') {
                editar_datos_t1();
            } else {

                recopilar_datos_alta_nueva();
                tipo_servicio = datos_vuelta['tipo_servicio'];
                $("#tipo_servicio > option[value='" + tipo_servicio + "']").prop("selected", true);
                $("#tipo_trayecto > option[value='ida']").prop("selected", true);

                $("#tipo_servicio").prop("disabled", true);
                $("#tipo_trayecto").prop("disabled", true);

               
               
                $("#wrap_entrada").show();
                $("#wrap_dias_semana").show();
                $("#wrap_origen_y_destino").show();
                $("#wrap_datos_origen").show();

                $("#wrap_origen").show();
                $("#wrap_zona_origen").show();
               
               
               if(tipo_servicio=='ofrecer'){
                $("#wrap_btn_puntos_parada_origen").show();
                $("#wrap_guardar_datos").show();
               }else{
                $("#wrap_guardar_datos").show();
               }
                                         
                $('#form_datos').hide();
                $('#form_alta').show();


            }


        })

     
        $('#btn_editar_datos_t2').on('click', function() {
           
            if ($('#datos_t2_salida').val() != '') {
                editar_datos_t2();
            } else {
                recopilar_datos_alta_nueva();
                tipo_servicio = datos_vuelta['tipo_servicio'];
                $("#tipo_servicio > option[value='" + tipo_servicio + "']").prop("selected", true);
                $("#tipo_trayecto > option[value='vuelta']").prop("selected", true);

                $("#tipo_servicio").prop("disabled", true);
                $("#tipo_trayecto").prop("disabled", true);


                   
               // $("#wrap_entrada").hide();
                $("#wrap_salida").show();

                $("#wrap_dias_semana").show();
                $("#wrap_origen_y_destino").show();
                $("#wrap_datos_destino").show();

                $("#wrap_destino").show();
                $("#wrap_zona_destino").show();
               
               
               if(tipo_servicio=='ofrecer'){
                $("#wrap_btn_puntos_parada_destino").show();
                $("#wrap_guardar_datos").show();
               }else{
                $("#wrap_guardar_datos").show();
               }
                                         
                $('#form_datos').hide();
                $('#form_alta').show();


            }


        })


        // ==============================================================================================================
        //    CARGA INICIAL
        // ==============================================================================================================
        function comprobar_usuario() {

            $.ajax({
                url: '<?= current_pagina() ?>/comprobar_usuario_',
                type: 'POST',
                data: {},
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {
                    data = JSON.parse(data);

                    existe_usuario = data;
                    if (existe_usuario == 'Si') {
                        cargar_datos();
                        $('#form_alta').hide();
                        $('#form_datos').show();
                    } else {
                        if (confirm('No tenemos tus datos en la aplicación\n¿Quieres darte de alta?')) {
                    recopilar_datos_alta_nueva();
                    $('#form_alta').show();
                    $('#form_datos').hide();
                    } else {
                        window.location('http://10.228.69.100/viki/index.php');
                     }

                     }

                }
            });

        }


        // ==============================================================================================================
        //    FUNCIONES
        // ==============================================================================================================
        function ocultar_destino() {
            $('#wrap_origen_y_destino').show();
            $('.datos_destino').hide();
            $('.datos_origen').show();
            $("#destino > option[value='BOLLULLOS DE LA MITACION']").prop("selected", true);
            $('#zona_destino').val('Konecta');
            $('#origen').val('');
            $('#zona_origen').val('');
        }

        function ocultar_origen() {
            $('#wrap_origen_y_destino').show();
            $('.datos_origen').hide();
            $('.datos_destino').show();
            $("#origen > option[value='BOLLULLOS DE LA MITACION']").prop("selected", true);
            $('#zona_origen').val('Konecta');
            $('#destino').val('');
            $('#zona_destino').val('');
        }

        function ocultar_origen_y_destino() {
            $('#wrap_origen_y_destino').hide();
            $('.datos_destino').hide();
            $('.datos_origen').hide();
            $("#destino").val('');
            $('#zona_destino').val('');
            $('#origen').val('');
            $('#zona_origen').val('');

        }

        function recopilar_datos_alta_nueva() {
            $('#usuario').val(usuario_logado);
            $('#meta4').val(meta4_logado);
            $('#departamento').val(departamento_logado);

        }

        function consultar_municipios() {

            $.ajax({
                url: '<?= current_pagina() ?>/consultar_municipios_',
                type: 'POST',
                data: {},
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {
                    data = JSON.parse(data);
                    select = '<option value="">Selecciona un Municipio</option>';
                    for (var k in data) {
                        select += '<option value="' + data[k]['MUNICIPIO'] + '">' + data[k]['MUNICIPIO'] + '</option>';
                    }
                    $('#origen').html(select);
                    $('#destino').html(select);
                    $('#punto1_municipio').html(select);
                    $('#punto2_municipio').html(select);
                    $('#punto3_municipio').html(select);
                    $('#punto4_municipio').html(select);
                    $('#punto5_municipio').html(select);
                    $('#origen_modal').html(select);
                    $('#destino_modal').html(select);
                    $('#punto1_municipio_modal').html(select);
                    $('#punto2_municipio_modal').html(select);
                    $('#punto3_municipio_modal').html(select);
                    $('#punto4_municipio_modal').html(select);
                    $('#punto5_municipio_modal').html(select);

                }
            });

        }

        function borrado_masivo_puntos_encuentro() {
            $('#puntos_de_encuentro input').each(function() {
                $(this).val('');
                $(this).parent().parent().parent().hide()
            })
            $('#puntos_de_encuentro select').each(function() {
                $(this).val('');
                $(this).parent().parent().parent().hide()
            })
            $('#puntos_de_encuentro_modal input').each(function() {
                $(this).val('');
                $(this).parent().parent().parent().hide()
            })
            $('#puntos_de_encuentro_modal select').each(function() {
                $(this).val('');
                $(this).parent().parent().parent().hide()
            })
        }

        function restaurar_boton_punto_encuentro() {
            $('.annadir_punto').each(function() {
                id_wrap = $(this).attr('id').slice(-1) - 1
                id_cambio = '#wrap_zona_punto' + id_wrap
                // if ($(id_cambio).hasClass('col-md-8')) {
                //     $(id_cambio).removeClass('col-md-8').addClass('col-md-6')
                //     $(this).show()
                // }
            })
        }

        function reset_dias() {
            $('input:checkbox:checked').each(function() {
                $(this).prop('checked', false)
            })
        }

        function comprobar_dias() {
            var chivato = 0
            $('.weekDays-selector input').each(function() {
                ($(this).prop('checked') == true ? chivato++ : chivato = chivato)

            })
            if (chivato == 0) {
                alert('Selecciona al menos un día')
            }
        }

        function almacenar_campos() {
            $('.input_guardar').each(function() {
                id_campo = $(this).attr('id');
                valor = $(this).val();
                if (valor != '' && valor != null) {
                    query += id_campo + "='" + valor + "',";
                }
            })
        }

        function vaciar_campos() {
            $('.input_guardar').each(function() {
                id_campo = $(this).attr('id');
                valor = $(this).val('');

            })
        }

        function almacenar_dias_seleccionados() {

            $('.weekDays-selector input:checkbox').each(function() {
                id_campo = $(this).attr('id');
                if ($(this).prop('checked') == true) {
                    valor = '1';
                }
                if ($(this).prop('checked') == false) {

                    valor = '0';
                }
                query += id_campo + '=' + valor + ',';

            })
            query = query.slice(0, -1);


        }

        function comprobar_dias_modal() {
            var chivato = 0
            $('.weekDays-selector_modal input').each(function() {

                ($(this).prop('checked') == true ? chivato++ : chivato = chivato)

            })
            if (chivato == 0) {
                alert('Selecciona al menos un día')
            }
        }

        function almacenar_campos_modal() {
            if ($('#entrada_modal').val() != '') {
                $('#tipo_trayecto').val('ida');

            } else if ($('#salida_modal').val() != '') {
                $('#tipo_trayecto').val('vuelta');

            }
            $('.input_guardar').each(function() {
                id_campo = $(this).attr('id');
                valor = $(this).val();

                if (valor != '' && valor != null) {
                    query += id_campo + "='" + valor + "',";
                }

            })
            $('.input_guardar_modal').each(function() {
                id_campo_modal = $(this).attr('id');
                id_campo = id_campo_modal.slice(0, -6);

                valor = $(this).val();
                if (valor != '' && valor != null) {
                    query += id_campo + "='" + valor + "',";
                }

            })

        }

        function vaciar_campos_modal() {
            $('.input_guardar_modal').each(function() {
                id_campo = $(this).attr('id');
                valor = $(this).val('');

            })
        }

        function almacenar_dias_seleccionados_modal() {

            $('.weekDays-selector_modal input:checkbox').each(function() {
                id_campo_modal = $(this).attr('id');
                id_campo = id_campo_modal.slice(0, -6);

                if ($(this).prop('checked') == true) {
                    valor = '1';
                }
                if ($(this).prop('checked') == false) {

                    valor = '0';
                }
                query += id_campo + '=' + valor + ',';

            })
            query = query.slice(0, -1);
           
        }

        function comprobar_hora_entrada() {

            if ($('#entrada').val() == '') {
                alert('Me falta la hora de entrada')
            }

        }

        function comprobar_hora_salida() {

            if ($('#salida').val() == '') {
                alert('Me falta la hora de salida')
            }

        }

        function comprobar_telefono() {
            var check_telefono = $('#telefono').prop('disabled');
            if (check_telefono == false && $('#telefono').val() == '') {
                alert('Introduce tu teléfono')
            }
        }

        // function verificar_hora() {
        //     if ($('#salida').val() <= $('#entrada').val() || $('#salida').val() == '' || $('#entrada').val() == '') {
        //         alert('Parece que hay un error en las horas de entrada y salida')
        //     }
        // }

        function guardar_datos() {
            $.ajax({
                url: '<?= current_pagina() ?>/guardar_datos_',
                type: 'POST',
                data: {
                    'query': query
                },
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {
                    data = JSON.parse(data);
                    alert(data);
                }
            });

            reset_dias();
            vaciar_campos();
            comprobar_usuario();


        }

        function actualizar_datos() {
            id_almacenada = $('#id').val();

            $.ajax({
                url: '<?= current_pagina() ?>/actualizar_datos_',
                type: 'POST',
                data: {
                    'id_almacenada': id_almacenada,
                    'query': query
                },
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {
                    data = JSON.parse(data);
                    alert(data);

                }
            });

        }

        function guardar_datos_modal() {
            $.ajax({
                url: '<?= current_pagina() ?>/guardar_datos_',
                type: 'POST',
                data: {
                    'query': query
                },
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {
                    data = JSON.parse(data);
                    alert(data);
                }
            });

        }

        function cargar_datos() {
            $('#form_alta').hide();
            $('#wrap_id_t1').hide();
            $('#wrap_id_t2').hide();
            $.ajax({
                url: '<?= current_pagina() ?>/cargar_datos_',
                type: 'POST',
                data: {},
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {

                    data = JSON.parse(data);
                    datos_ida = data['ida'][0];
                    datos_vuelta = data['vuelta'][0];
                    //CARGO LOS DATOS DEL TRAYECTO DE IDA EN EL PRIMER APARTADO Y LOS DE VUELTA EN EL SEGUNDO
                    for (k in datos_ida) {

                        if (datos_ida[k] != null) {
                            valor = datos_ida[k];
                            id = '#datos_t1_' + k;
                            $(id).val(valor);
                        }
                    }

                    for (k in datos_vuelta) {

                        if (datos_vuelta[k] != null) {
                            valor = datos_vuelta[k];
                            id = '#datos_t2_' + k;
                            $(id).val(valor);
                        }
                    }

                    //SI NO HAY TRAYECTO REGISTRADO EN UN DE LOS 2 CAMBIA EL BOTON
                    if ($('#datos_t1_origen').val() == '') {
                        $('#btn_editar_datos_t1').removeClass('btn btn-primary').addClass('btn btn-success');
                        $('#btn_editar_datos_t1').text('Agregar trayecto')


                    }else{
                        $('#btn_editar_datos_t1').removeClass('btn btn-success').addClass('btn btn-primary');
                        $('#btn_editar_datos_t1').text('Editar trayecto')
                        cargar_compatibles_t1(datos_ida);

                    }
                    if ($('#datos_t2_destino').val() == '') {
                        $('#btn_editar_datos_t2').removeClass('btn btn-primary').addClass('btn btn-success');
                        $('#btn_editar_datos_t2').text('Agregar trayecto')

                    }else{
                        $('#btn_editar_datos_t2').removeClass('btn btn-success').addClass('btn btn-primary');
                        $('#btn_editar_datos_t2').text('Editar trayecto')
                        cargar_compatibles_t2(datos_vuelta);
                    }
                }




               

            });

        }

        function editar_datos_t1() {
   
            for (k in datos_ida) {

                if (datos_ida != null) {
                    valor = datos_ida[k];
                    id = '#' + k;
                    $(id).val(valor);

                    $("#tipo_servicio").prop("disabled", true);
                    $("#tipo_trayecto").prop("disabled", true);
                    $("#wrap_dias_semana").show();


                    $("#origen > option[value='" + valor + "']").prop("selected", true);
                    $("#wrap_entrada").show();
                    $("#wrap_origen").show();
                    $("#wrap_zona_origen").show();

                }
                if (k == 'lunes' && valor == '1' || k == 'martes' && valor == '1' || k == 'miercoles' && valor == '1' || k == 'jueves' && valor == '1' || k == 'viernes' && valor == '1' || k == 'sabado' && valor == '1' || k == 'domingo' && valor == '1') {
                    $(id).prop('checked', true);

                }

            }

            if ($("#punto1_zona").val() != '') {
                $("#wrap_datos_punto1").show();

            }
            if ($("#punto2_zona").val() != '') {
                $("#wrap_datos_punto2").show();

            }
            if ($("#punto3_zona").val() != '') {
                $("#wrap_datos_punto3").show();

            }
            if ($("#punto4_zona").val() != '') {
                $("#wrap_datos_punto4").show();
            }
            if ($("#punto5_zona").val() != '') {
                $("#wrap_datos_punto5").show();
            }


            $("#wrap_origen_y_destino").show();
            $("#wrap_guardar_datos").show();
            $('#myCarousel').hide();
            $('#form_alta').show();
            $('#form_datos').hide();

        }

        function editar_datos_t2() {
 
            for (k in datos_vuelta) {

                if (datos_vuelta != null) {
                    valor = datos_vuelta[k];
                    id = '#' + k;
                    $(id).val(valor);

                    $("#tipo_servicio").prop("disabled", true);
                    $("#tipo_trayecto").prop("disabled", true);
                    $("#wrap_dias_semana").show();


                    $("#destino > option[value='" + valor + "']").prop("selected", true);
                    $("#wrap_salida").show();
                    $("#wrap_destino").show();
                    $("#wrap_zona_destino").show();

                }
                if (k == 'lunes' && valor == '1' || k == 'martes' && valor == '1' || k == 'miercoles' && valor == '1' || k == 'jueves' && valor == '1' || k == 'viernes' && valor == '1' || k == 'sabado' && valor == '1' || k == 'domingo' && valor == '1') {
                    $(id).prop('checked', true);

                }

            }

            if ($("#punto1_zona").val() != '') {
                $("#wrap_datos_punto1").show();

            }
            if ($("#punto2_zona").val() != '') {
                $("#wrap_datos_punto2").show();

            }
            if ($("#punto3_zona").val() != '') {
                $("#wrap_datos_punto3").show();

            }
            if ($("#punto4_zona").val() != '') {
                $("#wrap_datos_punto4").show();
            }
            if ($("#punto5_zona").val() != '') {
                $("#wrap_datos_punto5").show();
            }


            $("#wrap_origen_y_destino").show();
            $("#wrap_guardar_datos").show();
            $('#myCarousel').hide();
            $('#form_alta').show();
            $('#form_datos').hide();

        }

        function cargar_compatibles_t1(datos_ida) {
            $('#form_alta').hide();
            $('#wrap_id_t1').hide();
            $('#wrap_id_t2').hide();
            // RESETEO EL DATATABLE ANTES DE REESCRIBIRLO
               if ($.fn.dataTable.isDataTable('#tabla_compatibles_t1')) {
                $('#tabla_compatibles_t1').dataTable().fnDestroy();
                $('#tabla_compatibles_t1').html('');
                datatable = '';
            };

            $.ajax({
                url: '<?= current_pagina() ?>/cargar_compatibles_t1_',
                type: 'POST',
                data: {
                    'datos_ida': datos_ida,
            },
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {

                    data = JSON.parse(data);

                    // console.log(data);

                    if (data === '') {
                        alert('No hay personas compatibles');
                    } else {
                     
                        // CARGO EL DATATABLE
                        datatable = $('#tabla_compatibles_t1').DataTable({
                            'language': {
                                "decimal": "",
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Entradas",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscar:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                },
                            },
                            'data': data.datatable_data,
                            'columns': data.datatable_columns,
                            'columnDefs': data.datatable_columns_def,
                            'orderCellsTop': false,
                            'select': false,
                            'dom': 'Blftrip',
                            'pageLength': 10,
                            'order': [2],
                            'buttons': [],
                            'scrollX': false,
                            'rowCallback': function(row, data) {},

                        });
                     
                    }
                    //OCULTAMOS LAS PARTES DEL DATATABLE QUE NO NOS INTERESAN
                    $("#tabla_compatibles_t1_length").hide();
                    $("#tabla_compatibles_t1_filter").hide();
                    $("#tabla_compatibles_t1_info").hide();
                    $("#tabla_compatibles_t1_paginate").hide();
                    $(".loader_ajax").hide();


                }
            });



        }
        function cargar_compatibles_t2(datos_vuelta) {
            $('#form_alta').hide();
            $('#wrap_id_t1').hide();
            $('#wrap_id_t2').hide();
            // RESETEO EL DATATABLE ANTES DE REESCRIBIRLO
               if ($.fn.dataTable.isDataTable('#tabla_compatibles_t2')) {
                $('#tabla_compatibles_t2').dataTable().fnDestroy();
                $('#tabla_compatibles_t2').html('');
                datatable = '';
            };

            $.ajax({
                url: '<?= current_pagina() ?>/cargar_compatibles_t2_',
                type: 'POST',
                data: {
                    'datos_vuelta': datos_vuelta,
            },
                beforeSend: function() {
                    // $(".loader_ajax").show();
                },
                success: function(data) {

                    data = JSON.parse(data);

                    console.log(data);

                    if (data === '') {
                        alert('No hay personas compatibles');
                    } else {
                     
                        // CARGO EL DATATABLE
                        datatable = $('#tabla_compatibles_t2').DataTable({
                            'language': {
                                "decimal": "",
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Entradas",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscar:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                },
                            },
                            'data': data.datatable_data,
                            'columns': data.datatable_columns,
                            'columnDefs': data.datatable_columns_def,
                            'orderCellsTop': false,
                            'select': false,
                            'dom': 'Blftrip',
                            'pageLength': 10,
                            'order': [2],
                            'buttons': [],
                            'scrollX': false,
                            'rowCallback': function(row, data) {},

                        });
                     
                    }
                    //OCULTAMOS LAS PARTES DEL DATATABLE QUE NO NOS INTERESAN
                    $("#tabla_compatibles_t2_length").hide();
                    $("#tabla_compatibles_t2_filter").hide();
                    $("#tabla_compatibles_t2_info").hide();
                    $("#tabla_compatibles_t2_paginate").hide();
                    $(".loader_ajax").hide();


                }
            });



        }

    });
</script>
