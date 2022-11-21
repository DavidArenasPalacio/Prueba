<div class="container-fluid px-8 bg-white  p-10 border border-gray-200 rounded ">
    <table id="example" class="stripe hover " style="padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr class="bg-slate-700 bg-opacity-100 text-white">
                <th data-priority="1">NOMBRE DE QUIEN REVISA</th>
                <th data-priority="2">HORA INICIO</th>
                <th data-priority="3">HORA FIN</th>
                <th data-priority="4">DURACIÓN</th>
                <th data-priority="5">Verificar y remover elementos extraños en la zona como escombros y basuras.
                </th>
                <th data-priority="6">
                    Verificar que en el piso no hayan elementos que puedan pertenecer al equipo e informar de inmediato
                    cualquier novedad
                </th>
                <th data-priority="7">
                    Verificar el estado de los perfiles estructurales de los vagones, verifique que no esten corroidos y
                    que no presenten fisuras.</th>
                <th data-priority="8">Verificar el estado de los enganches, su buena sujecion asi como la presencia y
                    estado de los pines y pasadores de seguridad.
                </th>
                <th data-priority="9">
                    Verificar que los tubos de soporte de la fibra de vidrio de los vagones, esten anclados en su sitio
                    y no se evidencien oxidacion ni superficies cortantes.
                </th>
                <th data-priority="10">
                    Inspeccionar el chasis del tractor, esté atento a indicios de corrosion, fisuras u otros signos de
                    deterioro.</th>
                <th data-priority="11">
                    Verifique que los vagones estén mecánicamente enganchados, para esto verifique mediante la
                    aplicación de fuerza que el enganche este sujeto a la rotula de union y el pin pasador esté anclado
                    en su lugar.
                </th>
                <th data-priority="12">
                    Revisar cada seguro lateral tanto de acceso como de cerramiento del cargador verificando el buen
                    estado de los anclajes y pasadores de seguridad.
                </th>
                <th data-priority="13">
                    Verificar que la fibra de vidrio de cada cargador se conserve en buen estado, no debe poseer fisuras
                    ni superficies cortantes.</th>
                <th data-priority="14">
                    Verificar el estado de la madera del piso, esta debe estar remachada, fija al piso y sin evidencia
                    de deformación o daño.
                </th>
                <th data-priority="15">
                    Verificar presion del aire manual y visualmente en las llantas. Verificar ajuste de tornillos en
                    bocines de cada vagón</th>
                <th data-priority="16">
                    Verificar la presion del aire de una manera manual</th>
                <th data-priority="17">
                    Verificar la presion del aire y la fijacion pernada de las llantas de direccion del tractor de una
                    forma manual</th>
                <th data-priority="18">
                    Verificar el nivel de aceite del motor</th>
                <th data-priority="19">
                    Revisar nivel de aceite en la transmisión y el sistema hidráulico</th>
                <th data-priority="20">
                    Revisar que las abrazaderas del sistema de admisión de aire estén apretadas y que las mangueras
                    estén en buen estado sin hendiduras</th>
                <th data-priority="21">
                    Verificar el nivel del refrigerante, el cual apagado debe estar en COLD FULL</th>
                <th data-priority="22">
                    Verificar sujeción y ajuste en bornes en la batería.</th>
                <th data-priority="23">
                    Verifique que la palanca de cambios este en posicion neutral, palanca de freno asegurada y gire la
                    llave dando arranque al motor.</th>
                <th data-priority="24">
                    Quitar la palanca de freno y cambiarla de posición de marcha, oprima el embrague y verifique la
                    posición de las palancas de cambios en 3-B y posición de arranque en avance.</th>
                <th data-priority="25">
                    De una vuelta al parque y durante el recorrido este pendiente de movimientos extraños de los vagones
                    o sonidos fuertes.</th>
                <th data-priority="26">
                    Durante el recorrido se debe accionar el freno y verificar que funcione correctamente</th>
                <th data-priority="27">
                    Verificar que el tope de velocidad este operativo acelerando a fondo las RPM del motor no deben
                    subir de 1500 rpm. </th>
                <th data-priority="28">
                    Anotar las horas de operación que hay en el display del tablero</th>
                <th data-priority="29">
                    Verificar el correcto funcionamiento de los pulsadores y swichets dispuestos para el accionamiento
                    de la atracción. </th>
                <th data-priority="30">
                    Verificar el correcto funcionamiento del pito y demás mandos</th>
                <th data-priority="31">
                    Haciendo uso del accionador del apagador, apague la atraccion, recuerde dejar puesta la palanca de
                    freno y posición neutra en palanca de avance.</th>
                <th data-priority="32">
                    Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose que quede
                    registrada la siguiente información: Fecha y hora de la inspección, Estado operacional del equipo.
                    (si puede o no abrirse al público), Nombre legible, Firma , Cedula </th>
                <th data-priority="33">
                    Observaciones o comentarios durante la revisión</th>
                <th data-priority="34">
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
                        ajax: '{{ route('datatable.listaChequeoTrenIguana') }}',
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
                                data: 'chequeo_Uno_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Dos_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Tres_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Cuatro_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Cinco_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Seis_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Siete_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ocho_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Nueve_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Diez_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Once_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Doce_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Trece_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Catorce_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Quince_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Dieciseis_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Diecisiete_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Dieciocho_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Diecinueve_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Veinte_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ventiuno_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ventidos_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ventitres_Tren_Iguana'
                            },
                            {
                                data: 'hora_operacion_tablero'
                            },
                            {
                                data: 'chequeo_Venticuatro_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Venticinco_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ventiseis_Tren_Iguana'
                            },
                            {
                                data: 'chequeo_Ventisiete_Tren_Iguana'
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
                                width: "400px",
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
                                width: "450px",
                                targets: 29
                            },
                            {
                                width: "450px",
                                targets: 30
                            },
                            {
                                width: "450px",
                                targets: 31
                            },
                            {
                                width: "450px",
                                targets: 32
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
                                        18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32
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
                                        23: 'AC',
                                        24: 'AD',
                                        25: 'AE',
                                        26: 'AF',
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

                                            for (let td = 0; td < 27; td++) {
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
                        },
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>
        <script>
            function mostrarImagen(imagen) {

                $.ajax({
                    url: `/listaChequeoVCT/imagenes/${imagen}`,
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
