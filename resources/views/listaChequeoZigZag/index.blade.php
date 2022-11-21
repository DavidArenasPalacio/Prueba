@extends('layouts.app')
@section('contenido')
    <div class="px-8 mt-5 pt-8 ">

        <div class="flex justify-between  flex-col gap-2 md:flex-row  mb-5">
            <h1 class="text-4xl font-bold text-dark">Gestión de lista de inspección Zig Zag</h1>

            <a class="btn btn-primary " role="button" href="{{ route('listaChequeoZigZag.create') }}">Crear inspección Zig Zag</a>

        </div>

        @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm"
                x-data="{ open: true }" x-init="setTimeout(() => { open = false }, 5000)" x-show="open"
                x-transition:enter="transition duration-500 transform ease-out" x-transition:enter-start="opacity-1"
                x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0">
                {{ session('mensaje') }}
            </div>
        @endif

        <div class="container-fluid bg-white  p-10 border border-gray-200 rounded ">
            <table id="example" class="stripe hover " style="padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr class="bg-slate-700 bg-opacity-100 text-white">
                        <th data-priority="1">NOMBRE DE QUIEN REVISA</th>
                        <th data-priority="2">HORA INICIO</th>
                        <th data-priority="3">HORA FIN</th>
                        <th data-priority="4" data-toggle="tooltip" data-placement="top"
                            title="Verificar la ausencia de elementos extraños en la zona como escombros">Verificar la
                            ausencia de elementos extraños en la zona como escombros
                        </th>
                        <th data-priority="5" data-toggle="tooltip" data-placement="top"
                            title="Verificar que los enfiladeros estén   anclados, firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión">
                            Verificar que los enfiladeros estén anclados, firmes en su sitio, en buen estado, que no posean
                            fisuras ni superficies cortantes ni corrosión
                        </th>
                        <th data-priority="6" data-toggle="tooltip" data-placement="top"
                            title="Verificar que el cerramiento de madera y malla esté bien anclado al suelo">
                            Verificar que el cerramiento de madera y malla esté bien anclado al suelo</th>
                        <th data-priority="7" data-toggle="tooltip" data-placement="top"
                            title="Verificar que la malla este en buen estado, reventados ni descolgados.">Verificar que la
                            malla este en buen estado, reventados ni descolgados
                        </th>
                        <th data-priority="8" data-toggle="tooltip" data-placement="top"
                            title="Verificar que el árbol central no posea ramas o frutos que puedan desprenderse y lesionar a los usuarios.">
                            Verificar que el árbol central no posea ramas o frutos que puedan desprenderse y lesionar a los
                            usuarios.
                        </th>
                        <th data-priority="9" data-toggle="tooltip" data-placement="top"
                            title="Verificar que la pasta de sillín no esté reventada ni presente superficies cortantes.">
                            Verificar que la pasta de sillín no esté reventada ni presente superficies cortantes.</th>
                        <th data-priority="10" data-toggle="tooltip" data-placement="top"
                            title="Verificar que las platinas de soporte de ruedas no estén reventadas.">
                            Verificar que las platinas de soporte de ruedas no estén reventadas.</th>
                        <th data-priority="11" data-toggle="tooltip" data-placement="top"
                            title="Verificar que el timon gire libremente en su pibote, que cuente con sus separadores y la tuerca presente el ajuste adecuado, (debe mantener armado el conjunto pero conservar la holgura suficiente para permitir el giro).">
                            Verificar que el timon gire libremente en su pibote, que cuente con sus separadores y la tuerca
                            presente el ajuste adecuado, (debe mantener armado el conjunto pero conservar la holgura
                            suficiente para permitir el giro).
                        </th>
                        <th data-priority="12" data-toggle="tooltip" data-placement="top"
                            title="Verificar que el manubrio no presente oxidacion ni superficies cortantes.">
                            Verificar que el manubrio no presente oxidacion ni superficies cortantes.</th>
                        <th data-priority="13" data-toggle="tooltip" data-placement="top"
                            title="Verificar que las ruedas giren libremente, y no posean desgaste excesivo.">
                            Verificar que las ruedas giren libremente, y no posean desgaste excesivo.
                        </th>
                        <th data-priority="14" data-toggle="tooltip" data-placement="top"
                            title="Revisar estado de señalización de acuerdo a protocolos de bioseguridad.">
                            Revisar estado de señalización de acuerdo a protocolos de bioseguridad.</th>
                        <th data-priority="15" data-toggle="tooltip" data-placement="top"
                            title="Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose que quede registrada la siguiente información: Fecha y hora de la inspección, Estado operacional del equipo. (si puede o no abrirse al público), Nombre legible, Firma , Cedula.">
                            Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose que quede
                            registrada la siguiente información: Fecha y hora de la inspección, Estado operacional del
                            equipo. (si puede o no abrirse al público), Nombre legible, Firma , Cedula.</th>
                        <th data-priority="16">OBSERVACIONES</th>
                        <th data-priority="17">Imagen</th>
                    </tr>
                </thead>


            </table>
        </div>

    </div>

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
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/244e77d4c2.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        /****** Evento para ver si se creo el empleado o se edito ********/
        window.addEventListener('alert', event => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'success',
                title: event.detail.message
            });
        });

        /*    const calificacion = document.querySelectorAll('.calificacion > td > span > div');

           calificacion.forEach((element) => {
               if (element.textContent.trim() === "R") {
                   element.parentElement.parentElement.classList.add('bg', 'bg-yellow-500', 'text-center');
                   return;
               } else if (element.textContent.trim() === "B") {
                   element.parentElement.parentElement.classList.add('bg', 'bg-green-500', 'text-center');
               } else if (element.textContent.trim() === "M") {
                   element.parentElement.parentElement.classList.add('bg', 'bg-red-500', 'text-center');
               }
           }); */
    </script>

    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
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
                    ajax: '{{ route('datatable.chequeoZigZag') }}',
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
                            data: 'chequeo_Uno_ZigZag'
                        },
                        {
                            data: 'chequeo_Dos_ZigZag'
                        },
                        {
                            data: 'chequeo_Tres_ZigZag'
                        },
                        {
                            data: 'chequeo_Cuatro_ZigZag'
                        },
                        {
                            data: 'chequeo_Cinco_ZigZag'
                        },
                        {
                            data: 'chequeo_Seis_ZigZag'
                        },
                        {
                            data: 'chequeo_Siete_ZigZag'
                        },
                        {
                            data: 'chequeo_Ocho_ZigZag'
                        },
                        {
                            data: 'chequeo_Nueve_ZigZag'
                        },
                        {
                            data: 'chequeo_Diez_ZigZag'
                        },
                        {
                            data: 'chequeo_Once_ZigZag'
                        },
                        {
                            data: 'chequeo_Doce_ZigZag'
                        },
                        {
                            data: 'observaciones'
                        },
                    
                        {
                            data: 'imagen'
                        }
                    ],
                    scrollX: true,
                    /*  scrollY: 500,  */
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
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
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
                                    0: 'D',
                                    1: 'E',
                                    2: 'F',
                                    3: 'G',
                                    4: 'H',
                                    5: 'I',
                                    6: 'J',
                                    7: 'K',
                                    8: 'L',
                                    9: 'M',
                                    10: 'N',
                                    11: 'O'
                                };


                                let count = 0;
                                let skippedHeader = false;
                                $('row', sheet).each(function() {
                                    var row = this;

                                    if (skippedHeader) {
                                        // Primera fila de salida
                                        /* if (count === 0) {
                                            console.log(this);
                                        } */

                                        for (let td = 0; td < 12; td++) {

                                            if (count ===
                                                0
                                            ) { //Esta condicion optine la primera fila 
                                                //Condiciones para cambiar el texto a las columnas
                                                if ($('c[r^="' + excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "D2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"]  is  t', row)
                                                        .text(
                                                            'Verificar la ausencia de elementos extraños en la zona como escombros'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "E2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que los enfiladeros estén   anclados, firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "F2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que el cerramiento de madera y malla esté bien anclado al suelo.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "G2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que la malla este en buen estado, reventados ni descolgados.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "H2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que el árbol central no posea ramas o frutos que puedan desprenderse y lesionar a los usuarios.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "I2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que la pasta de sillín no esté reventada ni presente superficies cortantes.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "J2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que las platinas de soporte de ruedas no estén reventadas.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "K2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que el timon gire libremente en su pibote, que cuente con sus separadores y la tuerca presente el ajuste adecuado, (debe mantener armado el conjunto pero conservar la holgura suficiente para permitir el giro).'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "L2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que el manubrio no presente oxidacion ni superficies cortantes.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "M2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Verificar que las ruedas giren libremente, y no posean desgaste excesivo.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "N2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Revisar estado de señalización de acuerdo a protocolos de bioseguridad.'
                                                        );
                                                } else if ($('c[r^="' +
                                                        excelMap[td] +
                                                        '"]',
                                                        row).attr('r') ===
                                                    "O2") {
                                                    $('c[r^="' + excelMap[td] +
                                                            '"] is t', row)
                                                        .text(
                                                            'Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose que quede registrada la siguiente información: Fecha y hora de la inspección, Estado operacional del equipo. (si puede o no abrirse al público), Nombre legible, Firma , Cedula.'
                                                        );
                                                }
                                            }

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
                            width: "450px",
                            height: "50px",
                            targets: 3
                        },
                        {
                            width: "450px",
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
                            width: "500px",
                            targets: 14
                        },
                        {
                            width: "350px",
                            "className": "text-center",
                            targets: 15
                        },

                    ]
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    <script>
        function mostrarImgen(imagen) {
            $.ajax({
                url: `/listaChequeoZigzag/imagenes/${imagen}`,
                type: 'GET',
                success: function(res) {
                    const imagen = '/imagenesInpeccion/' + res;
                    $("#imagen").attr("src", imagen);
                }
            })
        }
    </script>
@endpush
