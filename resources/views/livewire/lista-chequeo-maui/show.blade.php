<div class="container-fluid px-8 bg-white  p-10 border border-gray-200 rounded ">
    <table id="example" class="stripe hover " style="padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr class="bg-slate-700 bg-opacity-100 text-white">
                <th data-priority="1">NOMBRE DE QUIEN REVISA</th>
                <th data-priority="2">HORA INICIO</th>
                <th data-priority="3">HORA FIN</th>
                <th data-priority="4">DURACIÓN</th>
                <th data-priority="5">Verificar antes de iniciar la revisión que el interruptor general este en posición
                    de apagado.
                </th>
                <th data-priority="6">
                    Verificar que los enfiladeros y cerramientos estén en buen estado, no posean fisuras ni corrosión
                </th>
                <th data-priority="7">
                    Verificar el piso de los alrededores en busca de elementos que puedan pertenecer al equipo.</th>
                <th data-priority="8"> Revisar estado de señalización de acuerdo a protocolos de bioseguridad
                </th>
                <th data-priority="9">
                    Verifique el nivel de aceite de los motorreductores debe estar como minimo a 1/2 de la mirilla de
                    inspección, revise que no hayan fugas de aceite en los reductores.
                </th>
                <th data-priority="10">
                    Realiza inspección de las juntas soldadas de bases, perfiles estructurales, brazos, contrapesos y
                    unidad de pasajeros, estas no deben tener fisuras ni corrosión. </th>
                <th data-priority="11">
                    Verifique que las acometidas eléctricas al motor estén correctamente ubicadas y aisladas, verifique
                    las bandas del motor, que esten en buen estado y tensionadas.
                </th>
                <th data-priority="12">
                    4 Verifique el estado de la cadena, piñones, cardan y sprockets principales, que se encuentren bien
                    acoplados, tensioados y lubricados.
                </th>
                <th data-priority="13">
                    Verifique la parte inferior del cargador que tenga la totalidad de sus tornillos, que se encuentren
                    bien apretados y no hayan fisuras en los paneles de tematización.</th>
                <th data-priority="14">
                    Verifique que cada chaleco este en buen estado y conserve una buena apariencia estetica, verifique
                    el correcto funcionamiento de los mecanismo de accionamiento de seguros, que los gas spring
                    sostengan el chaleco arriba y que los tubos donde se soportan los chalecos no esten fisurados.
                </th>
                <th data-priority="15">
                    Verifique el correcto funcionamiento del mecanismo de accionamiento de los seguros, estos deben
                    estar suaves, lubricados y anclar el chaleco en la posición deseada.
                </th>
                <th data-priority="16">
                    Verifique el buen estado de la fibra de vidrio de asientos y el recubrimiento en caucho, verifique
                    que no hayan superficies cortantes o puntiagudas.</th>
                <th data-priority="17">
                    Inspecciones las barras de seguridad y verifique que no posean superficies cortantes, que sus
                    pasadores aseguren correctamente y que los gas spring de soporte actúen correctamente cuando están
                    posicionadas arriba, la barra debe ser soportada por los gatos de forma que no caiga y lesione a los
                    usuarios u operarios.</th>
                <th data-priority="18">
                    Verifique los tableros y elementos electricos, esten completos y en buen estado, que los cables
                    esten conectados correctamente en su bornera y que no haya evidencia de cortos ni recalentamientos.
                </th>
                <th data-priority="19">
                    Verifique que el tablero de control este firme en su sitio, y el correcto estado de pulsadores y
                    mandos de control.</th>
                <th data-priority="20">
                    Se dirige al tablero acciona breaker principal,2 de control,campo y ventilacion.
                </th>
                <th data-priority="21">
                    en el tablero de control se abre el interruptor tipo llave, se gira el boton de paro de emergencia
                </th>
                <th data-priority="22">
                    se verifica que el potenciometro este en su minimo y se apreta el boton reset
                </th>
                <th data-priority="23">
                    Intentar poner en marcha la atracción con las barras de seguridad arriba (esta no debe arrancar si
                    los microswiches estan abiertos), presione el boton de encendido, espere un momento para asegurarse
                    que la atracción no se mueve posteriormente presione el boton de apagado.</th>
                <th data-priority="24">
                    Cierre las barras de seguridad y cerciórese que los chalecos esten cerrados. Nuevamente presione el
                    boton de encendido.</th>
                <th data-priority="25">
                    Ponga en marcha la atracción girando el potenciometro de izquierda a derecha, realice tres giros,
                    luego cambie el sentido de giro con el swiche muletilla, de nuevamente tres giros.</th>
                <th data-priority="26">
                    Verificar que no se presenten ruidos en los reductores, motor y demas partes moviles de la
                    atracción, este atento a vibraciones fuertes durante su funcionamiento.</th>
                <th data-priority="27">
                    Poner el potenciometro en el mínimo dejando la plataforma en posicion de reposo, pare la atracción
                    con el botón de apagado, presione el paro de emergencia y retire la llave.
                </th>
                <th data-priority="28">
                    se dirige al tablero y apague los breaker principal, 2 de control, campo y ventilacion.</th>
                <th data-priority="29">
                    Realizar la anotacion en la bitacora de la atraccion, anote las anomalias encontradas y ponga la
                    siguiente informacion: Fecha, estado operacional del equipo (si esta o no apta para operar) nombre
                    legible del revisor, cedula, hora. </th>
                <th data-priority="30">
                    Observaciones o comentarios durante la revisión</th>
                <th data-priority="31">
                    Imagen</th>
            </tr>
        </thead>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="imagen" alt="Imagen">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPTS --}}
    @push('scripts')
        <script src="https://kit.fontawesome.com/244e77d4c2.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                    "processing": true,
                        language: {
                            "decimal": "",
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
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
                            }
                        },
                        ajax: '{{ route('datatable.listaChequeoMaui') }}',
                        "columns": [{
                                data: 'nombre',
                            },
                            {
                                data: 'hora_Inicio'
                            },
                            {
                                data: 'hora_Fin'
                            },
                            {
                                data: 'duracion'
                            },
                            {
                                data: 'chequeo_Uno_Maui'
                            },
                            {
                                data: 'chequeo_Dos_Maui'
                            },
                            {
                                data: 'chequeo_Tres_Maui'
                            },
                            {
                                data: 'chequeo_Cuatro_Maui'
                            },
                            {
                                data: 'chequeo_Cinco_Maui'
                            },
                            {
                                data: 'chequeo_Seis_Maui'
                            },
                            {
                                data: 'chequeo_Siete_Maui'
                            },
                            {
                                data: 'chequeo_Ocho_Maui'
                            },
                            {
                                data: 'chequeo_Nueve_Maui'
                            },
                            {
                                data: 'chequeo_Diez_Maui'
                            },
                            {
                                data: 'chequeo_Once_Maui'
                            },
                            {
                                data: 'chequeo_Doce_Maui'
                            },
                            {
                                data: 'chequeo_Trece_Maui'
                            },
                            {
                                data: 'chequeo_Catorce_Maui'
                            },
                            {
                                data: 'chequeo_Quince_Maui'
                            },
                            {
                                data: 'chequeo_Dieciseis_Maui'
                            },
                            {
                                data: 'chequeo_Diecisiete_Maui'
                            },
                            {
                                data: 'chequeo_Dieciocho_Maui'
                            },
                            {
                                data: 'chequeo_Diecinueve_Maui'
                            },
                            {
                                data: 'chequeo_Veinte_Maui'
                            },
                            {
                                data: 'chequeo_Ventiuno_Maui'
                            },
                            {
                                data: 'chequeo_Ventidos_Maui'
                            },
                            {
                                data: 'chequeo_Ventitres_Maui'
                            },
                            {
                                data: 'chequeo_Venticuatro_Maui'
                            },
                            {
                                data: 'chequeo_Venticinco_Maui'
                            },
                            {
                                data: 'observaciones'
                            },
                            {
                                data: 'imagen'
                            }
                        ],
                        scrollX: true,
                        rowCallback: function(row, data,
                            index
                        ) { //Esta función nos sirve para establecer el color de fondo según las codiciones indicadas
                            $('td', row).each(function(indice, element) {

                                if ($('td', row)[indice].textContent === "B") {
                                    $('td', row).eq(indice).css('background-color',
                                        'rgb(34 197 94)');

                                } else if ($('td', row)[indice].textContent === "R") {
                                    $('td', row).eq(indice).css('background-color',
                                        'rgb(250 204 21)');
                                } else if ($('td', row)[indice].textContent === "M") {
                                    $('td', row).eq(indice).css('background-color',
                                        'rgb(220 38 38)');
                                }

                                $('td', row).eq(indice).css('text-align', 'center')
                                $('td', row).eq(indice).css('color', '#000')
                                $('td', row).eq(indice).css('height',
                                    '30px');
                            })
                        },
                        columnDefs: [{
                                width: "150px",
                                targets: 0
                            },
                            {
                                width: "200px",
                                className: "text-center",
                                targets: 1
                            },
                            {
                                width: "100px",
                                "className": "text-center",
                                targets: 2
                            },
                            {
                                width: "200px",
                                "className": "text-center",
                                targets: 3
                            },
                            {
                                width: "500px",
                                targets: 4
                            },
                            {
                                width: "450px",
                                targets: 5
                            },
                            {
                                width: "450px",
                                targets: 6
                            },
                            {
                                width: "450px",
                                targets: 7
                            },
                            {
                                width: "450px",
                                targets: 8
                            },
                            {
                                width: "450px",
                                targets: 9
                            },
                            {
                                width: "450px",
                                targets: 10
                            },
                            {
                                width: "450px",
                                targets: 11
                            },
                            {
                                width: "450px",
                                targets: 12
                            },
                            {
                                width: "450px",
                                targets: 13
                            },
                            {
                                width: "450px",
                                targets: 14
                            },
                            {
                                width: "450px",
                                targets: 15
                            },
                            {
                                width: "450px",
                                targets: 16
                            },
                            {
                                width: "450px",
                                targets: 17
                            },
                            {
                                width: "450px",
                                targets: 18
                            },
                            {
                                width: "450px",
                                targets: 19
                            },
                            {
                                width: "450px",
                                targets: 20
                            },
                            {
                                width: "450px",
                                targets: 21
                            },
                            {
                                width: "450px",
                                targets: 22
                            },
                            {
                                width: "450px",
                                targets: 23
                            }, {
                                width: "450px",
                                targets: 24
                            },
                            {
                                width: "450px",
                                targets: 25
                            },
                            {
                                width: "450px",
                                targets: 26
                            },
                            {
                                width: "450px",
                                targets: 27
                            },
                            {
                                width: "450px",
                                targets: 28
                            }, {
                                width: "500px",
                                "className": "text-center",
                                targets: 29
                            },
                        ],
                        dom: "B<'row'<'col-sm-12  col-md-6'l><'col-sm-12 col-md-6'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: {
                            dom: {
                                buttom: {
                                    className: 'btn'
                                }
                            },
                            buttons: [{
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
                                        18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29
                                    ]
                                },

                                extend: "excel",
                                text: "<i class='fas fa-file-excel'></i>",
                                className: "mb-5 w-10 btn btn-success",

                                customize: function(
                                    xlsx
                                ) { //Esta función nos sirve cuando descargamos excel y queremos personzaliar estilos de las columnas
                                    //Esta variable sirve para crear estilos y utilizarlo para personalizar el excel
                                    var new_style =
                                        '<?xml version="1.0" encoding="UTF-8"?><styleSheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" mc:Ignorable="x14ac" xmlns:x14ac="https://schemas.microsoft.com/office/spreadsheetml/2009/9/ac"><numFmts count="2"><numFmt numFmtId="171" formatCode="d/mm/yyyy;@"/><numFmt numFmtId="172" formatCode="m/d/yyyy;@"/></numFmts><fonts count="10" x14ac:knownFonts="1"><font><sz val="11"/><color theme="1"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color theme="1"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><b/><sz val="11"/><color theme="1"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color theme="0"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><i/><sz val="11"/><color theme="1"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color rgb="FFC00000"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color rgb="FF006600"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color rgb="FF990033"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><sz val="11"/><color rgb="FF663300"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font><font><b/><sz val="11"/><color rgb="FFC00000"/><name val="Calibri"/><family val="2"/><scheme val="minor"/></font></fonts><fills count="16"><fill><patternFill patternType="none"/></fill><fill><patternFill patternType="gray125"/></fill><fill><patternFill patternType="solid"><fgColor rgb="FFC00000"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFFF0000"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFFFC000"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFFFFF00"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF92D050"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF00B050"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF00B0F0"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF0070C0"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF002060"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF7030A0"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor theme="1"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FF99CC00"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFFF9999"/><bgColor indexed="64"/></patternFill></fill><fill><patternFill patternType="solid"><fgColor rgb="FFFFCC00"/><bgColor indexed="64"/></patternFill></fill></fills><borders count="2"><border><left/><right/><top/><bottom/><diagonal/></border><border><left style="thin"><color indexed="64"/></left><right style="thin"><color indexed="64"/></right><top style="thin"><color indexed="64"/></top><bottom style="thin"><color indexed="64"/></bottom><diagonal/></border></borders><cellStyleXfs count="2"><xf numFmtId="0" fontId="0" fillId="0" borderId="0"/><xf numFmtId="9" fontId="1" fillId="0" borderId="0" applyFont="0" applyFill="0" applyBorder="0" applyAlignment="0" applyProtection="0"/></cellStyleXfs><cellXfs count="70"><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0"/><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="2" fillId="0" borderId="0" xfId="0" applyFont="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="4" fillId="0" borderId="0" xfId="0" applyFont="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="4" fillId="0" borderId="0" xfId="0" applyFont="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="4" fillId="0" borderId="0" xfId="0" applyFont="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyAlignment="1"><alignment vertical="top" wrapText="1"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment vertical="top" wrapText="1"/></xf><xf numFmtId="0" fontId="3" fillId="2" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="3" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="4" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="5" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="6" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="7" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="8" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="9" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="10" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="11" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="12" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="2" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="3" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="4" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="5" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="6" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="7" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="8" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="9" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="10" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="11" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="12" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="2" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="3" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="4" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="5" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="6" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="7" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="8" borderId="0" xfId="0" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="9" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="10" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="11" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="3" fillId="12" borderId="0" xfId="0" applyFont="1" applyFill="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top" textRotation="90"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" textRotation="255"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyBorder="1" applyAlignment="1"><alignment textRotation="45"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="0" fontId="5" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="right" vertical="top"/></xf><xf numFmtId="0" fontId="6" fillId="13" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="6" fillId="13" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="7" fillId="14" borderId="0" xfId="1" applyNumberFormat="1" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="7" fillId="14" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="8" fillId="15" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyFill="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="8" fillId="15" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0" applyBorder="1" applyAlignment="1"><alignment vertical="top"/></xf><xf numFmtId="171" fontId="0" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="172" fontId="0" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="171" fontId="0" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="172" fontId="0" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="171" fontId="9" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="172" fontId="9" fillId="0" borderId="1" xfId="0" applyNumberFormat="1" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="171" fontId="9" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf><xf numFmtId="172" fontId="9" fillId="0" borderId="0" xfId="0" applyNumberFormat="1" applyFont="1" applyAlignment="1"><alignment horizontal="center" vertical="top"/></xf></cellXfs><cellStyles count="2"><cellStyle name="Procent" xfId="1" builtinId="5"/><cellStyle name="Standaard" xfId="0" builtinId="0"/></cellStyles><dxfs count="0"/><tableStyles count="0" defaultTableStyle="TableStyleMedium2" defaultPivotStyle="PivotStyleLight16"/><colors><mruColors><color rgb="FF663300"/><color rgb="FFFFCC00"/><color rgb="FF990033"/><color rgb="FF006600"/><color rgb="FFFF9999"/><color rgb="FF99CC00"/></mruColors></colors><extLst><ext uri="{EB79DEF2-80B8-43e5-95BD-54CBDDF9020C}" xmlns:x14="https://schemas.microsoft.com/office/spreadsheetml/2009/9/main"><x14:slicerStyles defaultSlicerStyle="SlicerStyleLight1"/></ext></extLst></styleSheet>';
                                    xlsx.xl['styles.xml'] = $.parseXML(new_style);
                                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                    // Map used to map column index to Excel index
                                    let excelMap = {
                                        0: 'E',
                                        1: 'F',
                                        2: 'G',
                                        3: 'H',
                                        4: 'I',
                                        5: 'J',
                                        6: 'K',
                                        7: 'L',
                                        8: 'M',
                                        9: 'N',
                                        10: 'O',
                                        11: 'P',
                                        12: 'Q',
                                        13: 'R',
                                        14: 'S',
                                        15: 'T',
                                        16: 'U',
                                        17: 'V',
                                        18: 'W',
                                        19: 'X',
                                        20: 'Y',
                                        21: 'Z',
                                        22: 'AA',
                                        23: 'AB',
                                        24: 'AC'
                                    };

                                    $('row c', sheet).attr('s', '1');
                                    $('row:nth-child(2) c', sheet).attr('s', '2');

                                    let count = 0;
                                    let skippedHeader = false;
                                    $('row', sheet).each(function() {
                                        var row = this;
                                        if (skippedHeader) {
                                            // Primera fila de salida
                                            /* if (count === 0) {
                                                console.log(this);
                                            } */
                                            console.log(this);

                                            for (let td = 0; td < 25; td++) {
                                                //Condicines para agregar el color de fondo a la columna en excel según la condición indicada                            
                                                if ($('c[r^="' + excelMap[td] +
                                                        '"]', row).text() === "B") {
                                                    $('c[r^="' + excelMap[td] +
                                                        '"]', row).attr('s',
                                                        '18');
                                                } else if ($('c[r^="' + excelMap[
                                                            td] +
                                                        '"]', row).text() === "R") {
                                                    $('c[r^="' + excelMap[td] +
                                                        '"]', row).attr(
                                                        's', '15');
                                                } else if ($('c[r^="' + excelMap[
                                                            td] +
                                                        '"]', row).text() === "M") {
                                                    $('c[r^="' + excelMap[td] +
                                                        '"]', row).attr(
                                                        's', '13');
                                                }
                                            }
                                            count++;
                                        } else {
                                            skippedHeader = true;
                                        }
                                    });
                                }
                            }]
                        }
                    })
                    .columns.adjust()
                    .responsive.recalc();
            })
        </script>

        <script>
            function mostrarImagen(imagen) {
                $.ajax({
                    url: `/listaChequeoMaui/imagenes/${imagen}`,
                    type: 'GET',
                    success: function(res) {
                        const imagen = '/imagenesInspeccion/' + res;
                        $("#imagen").attr("src", imagen);
                    }
                })
            }
        </script>
    @endpush
</div>
