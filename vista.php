                        <input type="checkbox" id="jueves" class="weekday" />
                        <label for="jueves">Jueves</label>
                        <input type="checkbox" id="viernes" class="weekday" />
                        <label for="viernes">Viernes</label>
                        <input type="checkbox" id="sabado" class="weekday" />
                        <label for="sabado">Sábado</label>
                        <input type="checkbox" id="domingo" class="weekday" />
                        <label for="domingo">Domingo</label>
                    </div>
                </div>
            </div>

            <!-- BLOQUE ORIGEN Y DESTINO -->
            <div id="wrap_origen_y_destino" class="col-md-12">

                <!-- DATOS ORIGEN -->
                <div id="wrap_datos_origen" class="col-md-12">

                    <div id="wrap_origen" class="col-md-3 datos_origen">
                        <div class="form-group">
                            <label for="origen"><b>Origen</b></label>
                            <select id="origen" class="form-control input_guardar">
                            </select>
                        </div>
                    </div>


                    <div id="wrap_zona_origen" class="col-md-6 datos_origen">
                        <div class="form-group">
                            <label for="zona_origen"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                            <input type="textarea" id="zona_origen" class="form-control input_guardar" rows="2">
                        </div>
                    </div>

                    <div id="wrap_btn_puntos_parada_origen" class="col-md-3 datos_origen">
                        <div class="form-group">
                            <label for="puntos_parada_ida"><b>Pulsa aqui para añadir puntos donde recoger a otros compis</b></label>
                            <button type="button" id="btn_puntos_parada_ida" class="btn-primary form-control"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>

                </div>

                <!-- DATOS DESTINO -->
                <div id="wrap_datos_destino" class="col-md-12">

                    <div id="wrap_destino" class="col-md-3 datos_destino">
                        <div class="form-group">
                            <label for="destino"><b>Destino</b></label>
                            <select id="destino" class="form-control input_guardar">

                            </select>
                        </div>
                    </div>


                    <div id="wrap_zona_destino" class="col-md-6 datos_destino">
                        <div class="form-group">
                            <label for="zona_destino"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                            <input type="textarea" id="zona_destino" class="form-control input_guardar" rows="2">
                        </div>
                    </div>

                    <div id="wrap_btn_puntos_parada_destino" class="col-md-3 datos_destino">
                        <div class="form-group">
                            <label for="puntos_parada_vuelta"><b>Pulsa aqui para añadir puntos donde dejar a otros compis</b></label>
                            <button type="button" id="btn_puntos_parada_vuelta" class="btn-primary form-control "><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <!-- DATOS PUNTOS DE ENCUENTRO -->
                <div id="puntos_de_encuentro" class="col-md-12">
                    <!-- DATOS PUNTO 1 -->
                    <div id="wrap_datos_punto1" class="col-md-12">
                        <div id="wrap_punto1" class="col-md-3 datos_punto1">
                            <div class="form-group">
                                <label for="punto1_municipio"><b>Punto 1</b></label>
                                <select id="punto1_municipio" class="form-control input_guardar">
                                </select>
                            </div>
                        </div>



                        <div id="wrap_zona_punto1" class="col-md-8 datos_punto1">
                            <div class="form-group" id="botonera_punto1">
                                <label for="punto1_zona"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                <input type="textarea" id="punto1_zona" class="form-control input_guardar" rows="2">
                            </div>
                        </div>


                        <div id="wrap_botonera_1" class="col-md-1 datos_punto1">
                            <div class="form-group col-md-12" id="botonera_punto1">
                                <div id="wrap_annadir_punto2" class="col-md-6 annadir_punto">
                                    <i id="annadir_punto2" class="fa fa-check btn clase_annadir_punto"></i>
                                </div>
                                <div id="wrap_quitar_punto1" class="col-md-6 datos_punto1">
                                    <i class="fa fa-close btn clase_borrar_punto btn-parada"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- DATOS PUNTO 2 -->
                    <div id="wrap_datos_punto2" class="col-md-12">
                        <div id="wrap_punto2" class="col-md-3 datos_punto2">
                            <div class="form-group">
                                <label for="punto2_municipio"><b>Punto 2</b></label>
                                <select id="punto2_municipio" class="form-control input_guardar">
                                </select>
                            </div>
                        </div>



                        <div id="wrap_zona_punto2" class="col-md-8 datos_punto2">
                            <div class="form-group">
                                <label for="punto2_zona"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                <input type="textarea" id="punto2_zona" class="form-control input_guardar" rows="2">
                            </div>
                        </div>

                        <div id="wrap_botonera_2" class="col-md-1 datos_punto2">
                            <div class="form-group col-md-12" id="botonera_punto2 ">
                                <div id="wrap_annadir_punto3" class="col-md-6 annadir_punto">
                                    <i id="annadir_punto3" class="fa fa-check btn clase_annadir_punto"></i>
                                </div>
                                <div id="wrap_quitar_punto2" class="col-md-6 datos_punto2">
                                    <i class="fa fa-close btn clase_borrar_punto btn-parada"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- DATOS PUNTO 3 -->
                    <div id="wrap_datos_punto3" class="col-md-12">
                        <div id="wrap_punto3" class="col-md-3 datos_punto3">
                            <div class="form-group">
                                <label for="punto3_municipio"><b>Punto 3</b></label>
                                <select id="punto3_municipio" class="form-control input_guardar">
                                </select>
                            </div>
                        </div>


                        <div id="wrap_zona_punto3" class="col-md-8 datos_punto3">
                            <div class="form-group">
                                <label for="punto3_zona"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                <input type="textarea" id="punto3_zona" class="form-control input_guardar" rows="2">
                            </div>
                        </div>

                        <div id="wrap_botonera_3" class="col-md-1 datos_punto3">
                            <div class="form-group col-md-12" id="botonera_punto3">
                                <div id="wrap_annadir_punto4" class="col-md-6 annadir_punto">
                                    <i id="annadir_punto4" class="fa fa-check btn clase_annadir_punto"></i>
                                </div>
                                <div id="wrap_quitar_punto3" class="col-md-6 datos_punto3">
                                    <i class="fa fa-close btn clase_borrar_punto btn-parada"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- DATOS PUNTO 4 -->
                    <div id="wrap_datos_punto4" class="col-md-12">
                        <div id="wrap_punto4" class="col-md-3 datos_punto4">
                            <div class="form-group">
                                <label for="punto4_municipio"><b>Punto 4</b></label>
                                <select id="punto4_municipio" class="form-control input_guardar">
                                </select>
                            </div>
                        </div>



                        <div id="wrap_zona_punto4" class="col-md-8 datos_punto4">
                            <div class="form-group">
                                <label for="punto4_zona"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                <input type="textarea" id="punto4_zona" class="form-control input_guardar" rows="2">
                            </div>
                        </div>

                        <div id="wrap_botonera_4" class="col-md-1 datos_punto4">
                            <div class="form-group col-md-12" id="botonera_punto4">
                                <div id="wrap_annadir_punto5" class="col-md-6 annadir_punto">
                                    <i id="annadir_punto5" class="fa fa-check btn clase_annadir_punto"></i>
                                </div>
                                <div id="wrap_quitar_punto4" class="col-md-6 datos_punto4">
                                    <i class="fa fa-close btn clase_borrar_punto btn-parada"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- DATOS PUNTO 5 -->
                    <div id="wrap_datos_punto5" class="col-md-12">
                        <div id="wrap_punto5" class="col-md-3 datos_punto5">
                            <div class="form-group">
                                <label for="punto5_municipio"><b>Punto 5</b></label>
                                <select id="punto5_municipio" class="form-control input_guardar">
                                </select>
                            </div>
                        </div>

                        <div id="wrap_zona_punto5" class="col-md-8 datos_punto5">
                            <div class="form-group">
                                <label for="punto5_zona"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                <input type="textarea" id="punto5_zona" class="form-control input_guardar" rows="2">
                            </div>
                        </div>

                        <div id="wrap_botonera_5" class="col-md-1 datos_punto5">
                            <div class="form-group col-md-12" id="botonera_punto5">

                                <div id="wrap_quitar_punto5" class="col-md-6 datos_punto5">
                                    <i class="fa fa-close btn clase_borrar_punto btn-parada"></i>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-10"></div>

                    <div id="wrap_guardar_datos" class="col-md-2">
                        <div class="form-group">
                            <div id="wrap_guardar">
                                <button class="btn btn-success fa fa-save form-control" id="btn-guardar"> Guardar</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="form_datos" class="col-md-12">

            <!-- IDA ALMACENADA -->
                     <div id="wrap_datos_t1_horario" class="col-md-12">
     
                <div id="wrap_datos_t1_entrada" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t1_entrada"><b>Hora de entrada</b></label>
                        <input type="time" id="datos_t1_entrada" class="form-control" disabled>
                    </div>
                </div>
           
         
                <div id="wrap_datos_t1_tipo_trayecto" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t1_tipo_trayecto"><b>Trayecto de...</b></label>
                        <input type="text" id="datos_t1_tipo_trayecto" class="form-control" disabled>
                    </div>
                </div>

                <div id="wrap_datos_t1_origen" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t1_origen"><b>Origen</b></label>
                        <input type="text" id="datos_t1_origen" class="form-control" disabled>
                    </div>
                </div>

                <div id="wrap_datos_t1_zona_origen" class="col-md-2">
                    <div class="form-group">
                        <label for="_datos_t1_zona_origen"><b>Zona origen</b></label>
                        <input type="text" id="datos_t1_zona_origen" class="form-control" disabled>
                    </div>
                </div>

                <div id="wrap_editar_datos" class="col-md-2">
                    <label for="datos_origen_y_destino" style="color: transparent;"><b>btn</b></label>
                    <button type="button " id="btn_editar_datos_t1" class="btn btn-primary  form-control">
                        <i class="fa fa-gear"></i>  Editar trayecto
                    </button>
                </div>

                           </div>

            <!--VUELTA ALMACENADA -->
               <div id="wrap_datos_t2_horario" class="col-md-12">
       
                <div id="wrap_datos_t2_salida" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t2_salida"><b>Hora de salida</b></label>
                        <input type="time" id="datos_t2_salida" class="form-control" disabled>
                    </div>
                </div>

                <div id="wrap_datos_t2_tipo_trayecto" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t2_tipo_trayecto"><b>Trayecto de...</b></label>
                        <input type="text" id="datos_t2_tipo_trayecto" class="form-control" disabled>
                    </div>
                </div>

         
             
                <div id="wrap_datos_t2_destino" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t2_destino"><b>Destino</b></label>
                        <input type="text" id="datos_t2_destino" class="form-control" disabled>
                    </div>
                </div>

                <div id="wrap_datos_t2_zona_destino" class="col-md-2">
                    <div class="form-group">
                        <label for="datos_t2_zona_destino"><b>Zona destino</b></label>
                        <input type="text" id="datos_t2_zona_destino" class="form-control" disabled>
                    </div>
                </div>
                <!-- <div class="col-md-10"></div> -->
                <div id="wrap_editar_datos" class="col-md-2">
                    <label for="datos_origen_y_destino" style="color: transparent;"><b>btn</b></label>
                    <button type="button " id="btn_editar_datos_t2" class="btn btn-primary  form-control">
                        <i class="fa fa-gear"></i>  Editar trayecto
                    </button>
                </div>
            </div>


            <div id="wrap_compatibles_t1" class="col-md-12">
                <center><label style="font-weight:bold;font-size:16px">Matches Ida</label></center>
                <table id="tabla_compatibles_t1" class="table"></table>
            </div>
            <div id="wrap_compatibles_t2" class="col-md-12" style="overflow-x: scroll;">

                <center><label style="font-weight:bold;font-size:16px">Matches Vuelta</label></center>
                <table id="tabla_compatibles_t2" class="table"></table>
            </div>
        </div>


    </div>

</div>

<!-- MODAL ALMACENAR DATOS DE IDA Y VUELTA  -->

<button id="btn_modal_idayvuelta" data-toggle="modal" data-target="#modal_idayvuelta" hidden></button>

<div class="modal fade" id="modal_idayvuelta" role="dialog" aria-labelledby="modal_idayvuelta_label" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 75%;">
        <div class="modal-content" id="modal_iyv" style="min-height: 85vh;">

            <div class="modal-header">

                <p> <label id="titulo"></label><i id="modal_cerrar" class="fa fa-close fa-lg pull-right cerrar_modal" data-dismiss="modal" aria-label="Close" style="color: #a21212; cursor: pointer; font-size: 20px;"></i></p>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div id="wrap_id_modal" class="col-md-3">
                        <div class="form-group">
                            <label id="label_id_modal" for="id_modal"><b>ID</b></label>
                            <input type="text" id="id_modal" class="form-control input_guardar_modal" disabled>
                        </div>
                    </div>

                    <div id="wrap_trayecto_modal" class="col-md-3">
                        <div class="form-group">
                            <label id="label_trayecto_modal" for="trayecto_modal"><b>Trayecto</b></label>
                            <input type="text" id="trayecto_modal" class="form-control input_guardar_modal" disabled>
                        </div>
                    </div>
                    <div id="wrap_entrada_modal" class="col-md-12">
                        <div class="form-group">
                            <label for="entrada_modal"><b>Hora de entrada</b></label>
                            <input type="time" id="entrada_modal" class="form-control input_guardar_modal">
                        </div>
                    </div>
                    <div id="wrap_salida_modal" class="col-md-12">
                        <div class="form-group">
                            <label for="salida_modal"><b>Hora de salida</b></label>
                            <input type="time" id="salida_modal" class="form-control input_guardar_modal">
                        </div>
                    </div>

                    <!-- DIAS DE LA SEMANA -->
                    <div id="wrap_dias_semana_modal" class="col-md-12">
                        <label for="dias_semana_modal"><b>Selecciona los dias para compartir:</b></label>
                        <div class="weekDays-selector_modal">
                            <input type="checkbox" id="lunes_modal" class="weekday" />
                            <label for="lunes_modal">Lunes</label>
                            <input type="checkbox" id="martes_modal" class="weekday" />
                            <label for="martes_modal">Martes</label>
                            <input type="checkbox" id="miercoles_modal" class="weekday" />
                            <label for="miercoles_modal">Miércoles</label>
                            <input type="checkbox" id="jueves_modal" class="weekday" />
                            <label for="jueves_modal">Jueves</label>
                            <input type="checkbox" id="viernes_modal" class="weekday" />
                            <label for="viernes_modal">Viernes</label>
                            <input type="checkbox" id="sabado_modal" class="weekday" />
                            <label for="sabado_modal">Sábado</label>
                            <input type="checkbox" id="domingo_modal" class="weekday" />
                            <label for="domingo_modal">Domingo</label>
                        </div>
                    </div>

                    <!-- BLOQUE ORIGEN Y DESTINO -->
                    <div id="wrap_origen_y_destino_modal" class="col-md-12">

                        <!-- DATOS ORIGEN -->
                        <div id="wrap_datos_origen_modal" class="col-md-12">

                            <div id="wrap_origen_modal" class="col-md-3 datos_origen_modal">
                                <div class="form-group">
                                    <label for="origen_modal"><b>Origen</b></label>
                                    <select id="origen_modal" class="form-control input_guardar_modal">
                                    </select>
                                </div>
                            </div>

                            <div id="wrap_zona_origen_modal" class="col-md-6 datos_origen_modal">
                                <div class="form-group">
                                    <label for="zona_origen_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                    <input type="textarea" id="zona_origen_modal" class="form-control input_guardar_modal" rows="2">
                                </div>
                            </div>

                            <div id="wrap_btn_puntos_parada_origen_modal" class="col-md-3 datos_origen_modal">
                                <div class="form-group">
                                    <label for="puntos_parada_ida_modal"><b>Pulsa aqui para añadir puntos donde recoger a otros compis</b></label>
                                    <button type="button" id="btn_puntos_parada_ida_modal" class="btn-primary form-control"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>

                        </div>
                        <!-- DATOS DESTINO-->
                        <div id="wrap_datos_destino_modal" class="col-md-12">

                            <div id="wrap_destino_modal" class="col-md-3 datos_destino_modal">
                                <div class="form-group">
                                    <label for="destino_modal"><b>Destino</b></label>
                                    <select id="destino_modal" class="form-control input_guardar_modal">
                                    </select>
                                </div>
                            </div>

                            <div id="wrap_zona_destino_modal" class="col-md-6 datos_destino_modal">
                                <div class="form-group">
                                    <label for="zona_destino_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                    <input type="textarea" id="zona_destino_modal" class="form-control input_guardar_modal" rows="2">
                                </div>
                            </div>

                            <div id="wrap_btn_puntos_parada_destino_modal" class="col-md-3 datos_destino_modal">
                                <div class="form-group">
                                    <label for="puntos_parada_ida_modal"><b>Pulsa aqui para añadir puntos donde recoger a otros compis</b></label>
                                    <button type="button" id="btn_puntos_parada_vuelta_modal" class="btn-primary form-control"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>

                        </div>






                        <div id="puntos_de_encuentro" class="col-md-12">
                            <!-- DATOS PUNTO 1 -->
                            <div id="wrap_datos_punto1_modal" class="col-md-12">
                                <div id="wrap_punto1_modal" class="col-md-3 datos_punto1_modal">
                                    <div class="form-group">
                                        <label for="punto1_municipio_modal"><b>Punto 1</b></label>
                                        <select id="punto1_municipio_modal" class="form-control input_guardar_modal">
                                        </select>
                                    </div>
                                </div>

                                <div id="wrap_zona_punto1_modal" class="col-md-8 datos_punto1_modal">
                                    <div class="form-group" id="botonera_punto1">
                                        <label for="punto1_zona_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                        <input type="textarea" id="punto1_zona_modal" class="form-control input_guardar_modal" rows="2">
                                    </div>
                                </div>

                                <div id="wrap_botonera_1_modal" class="col-md-1 datos_punto1_modal">
                                    <div class="form-group" id="botonera_punto1_modal">
                                        <div id="wrap_annadir_punto2_modal" class="col-md-6 annadir_punto_modal">
                                            <i id="annadir_punto2_modal" class="fa fa-check btn clase_annadir_punto_modal"></i>
                                        </div>
                                        <div id="wrap_quitar_punto1_modal" class="col-md-6 datos_punto1_modal">
                                            <i class="fa fa-close btn clase_borrar_punto_modal btn-parada"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- DATOS PUNTO 2 -->
                            <div id="wrap_datos_punto2_modal" class="col-md-12">
                                <div id="wrap_punto2_modal" class="col-md-3 datos_punto2_modal">
                                    <div class="form-group">
                                        <label for="punto2_municipio_modal"><b>Punto 2</b></label>
                                        <select id="punto2_municipio_modal" class="form-control input_guardar_modal">
                                        </select>
                                    </div>
                                </div>

                                <div id="wrap_zona_punto2_modal" class="col-md-8 datos_punto2_modal">
                                    <div class="form-group" id="botonera_punto2">
                                        <label for="punto2_zona_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                        <input type="textarea" id="punto2_zona_modal" class="form-control input_guardar_modal" rows="2">
                                    </div>
                                </div>

                                <div id="wrap_botonera_2_modal" class="col-md-1 datos_punto2_modal">
                                    <div class="form-group" id="botonera_punto2_modal">
                                        <div id="wrap_annadir_punto3_modal" class="col-md-6 annadir_punto_modal">
                                            <i id="annadir_punto3_modal" class="fa fa-check btn clase_annadir_punto_modal"></i>
                                        </div>
                                        <div id="wrap_quitar_punto2_modal" class="col-md-6 datos_punto2_modal">
                                            <i class="fa fa-close btn clase_borrar_punto_modal btn-parada"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DATOS PUNTO 3 -->
                            <div id="wrap_datos_punto3_modal" class="col-md-12">
                                <div id="wrap_punto3_modal" class="col-md-3 datos_punto3_modal">
                                    <div class="form-group">
                                        <label for="punto3_municipio_modal"><b>Punto 3</b></label>
                                        <select id="punto3_municipio_modal" class="form-control input_guardar_modal">
                                        </select>
                                    </div>
                                </div>


                                <div id="wrap_zona_punto3_modal" class="col-md-8 datos_punto3">
                                    <div class="form-group">
                                        <label for="punto3_zona_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                        <input type="textarea" id="punto3_zona_modal" class="form-control input_guardar_modal" rows="2">
                                    </div>
                                </div>

                                <div id="wrap_botonera_3_modal" class="col-md-1 datos_punto3_modal">
                                    <div class="form-group" id="botonera_punto3_modal">
                                        <div id="wrap_annadir_punto4_modal" class="col-md-6 annadir_punto_modal">
                                            <i id="annadir_punto4_modal" class="fa fa-check btn clase_annadir_punto_modal"></i>
                                        </div>
                                        <div id="wrap_quitar_punto3_modal" class="col-md-6 datos_punto3_modal">
                                            <i class="fa fa-close btn clase_borrar_punto_modal btn-parada"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- DATOS PUNTO 4 -->
                            <div id="wrap_datos_punto4_modal" class="col-md-12">
                                <div id="wrap_punto4_modal" class="col-md-3 datos_punto4_modal">
                                    <div class="form-group">
                                        <label for="punto4_municipio_modal"><b>Punto 4</b></label>
                                        <select id="punto4_municipio_modal" class="form-control input_guardar_modal">
                                        </select>
                                    </div>
                                </div>



                                <div id="wrap_zona_punto4_modal" class="col-md-8 datos_punto4">
                                    <div class="form-group">
                                        <label for="punto4_zona_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                        <input type="textarea" id="punto4_zona_modal" class="form-control input_guardar_modal" rows="2">
                                    </div>
                                </div>

                                <div id="wrap_botonera_4_modal" class="col-md-1 datos_punto4_modal">
                                    <div class="form-group" id="botonera_punto4_modal">
                                        <div id="wrap_annadir_punto5_modal" class="col-md-6 annadir_punto_modal">
                                            <i id="annadir_punto5_modal" class="fa fa-check btn clase_annadir_punto_modal"></i>
                                        </div>
                                        <div id="wrap_quitar_punto4_modal" class="col-md-6 datos_punto4_modal">
                                            <i class="fa fa-close btn clase_borrar_punto_modal btn-parada"></i>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- DATOS PUNTO 5 -->
                            <div id="wrap_datos_punto5_modal" class="col-md-12">
                                <div id="wrap_punto5_modal" class="col-md-3 datos_punto5_modal">
                                    <div class="form-group">
                                        <label for="punto5_municipio_modal"><b>Punto 5</b></label>
                                        <select id="punto5_municipio_modal" class="form-control input_guardar_modal">
                                        </select>
                                    </div>
                                </div>

                                <div id="wrap_zona_punto5_modal" class="col-md-8 datos_punto5_modal">
                                    <div class="form-group">
                                        <label for="punto5_zona_modal"><b>Zona (Barrio, rotonda, esquina...)</b></label>
                                        <input type="textarea" id="punto5_zona_modal" class="form-control input_guardar_modal" rows="2">
                                    </div>
                                </div>

                                <div id="wrap_botonera_5_modal" class="col-md-1 datos_punto5_modal">
                                    <div class="form-group" id="botonera_punto5_modal">
                                        <div id="wrap_quitar_punto5_modal" class="col-md-6 datos_punto5_modal">
                                            <i class="fa fa-close btn clase_borrar_punto_modal btn-parada"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-9"></div>
                        <div id="wrap_guardar_datos_modal" class="col-md-3">
                            <div class="form-group">
                                <div id="wrap_guardar_modal">
                                    <button class="btn btn-success fa fa-save form-control" id="btn-guardar_modal"> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- MODAL POLITICA DE DATOS -->
        <div class="modal fade" id="ppd_modal" role="dialog" aria-labelledby="ppd_modal" aria-hidden="true">
            <div class="modal-dialog" role="document" style="width: 80%;">
                <div class="modal-content" style="min-height: 80vh;">

                    <div class="modal-header">

                        <label>
                            <h1>PROTECCION DE DATOS PERSONALES</h1>
                        </label><i class="fa fa-close fa-lg pull-right cerrar_modal" data-dismiss="modal" aria-label="Close" id="cruz_cerrar"></i>
                    </div>

                    <div class="modal-body informe">

                        <div class="row">
                            <div class="col-md-12 form-group">

                                <h3 id="texto_legal"></h3>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6"></div>
                                <div id="wrap_btn_aceptar_datos" class="col-md-3">
                                    <label for="aceptar_datos"></label>
                                    <button type="button " id="btn_aceptar_datos" class="btn btn-primary form-control"><i class="fa fa-check"></i> OK, estoy de acuerdo</button>
                                </div>

                                <div id="wrap_btn_rechazar_datos" class="col-md-3">
                                    <label for="rechazar_datos"></label>
                                    <button id="btn_rechazar_datos" class="btn btn-danger form-control "><i class="fa fa-close"></i> No estoy de acuerdo</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- MENSAJE DE CARGA -->
        <div class="loader_ajax" style="display: none;"></div>
