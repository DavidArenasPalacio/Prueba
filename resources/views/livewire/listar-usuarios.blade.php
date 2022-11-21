<div class="bg-white w-full p-4 border border-gray-200 rounded" style="max-width:100% !important">
    <table id="example" class="stripe hover" style="width:100% !important; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr class="bg-slate-700 bg-opacity-100 text-white">
                <th data-priority="1">Nombre</th>
                <th data-priority="2">usuario</th>
                <th data-priority="3">documento</th>
                <th data-priority="4">cargo</th>
                <th data-priority="5">Acciones</th>
            </tr>
        </thead>
       

    </table>
</div>


@push('scripts')

    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true,
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
                    ajax: '{{route('datatable.user')}}',
                    "columns": [
                        {data: 'name'},
                        {data: 'usuario'},
                        {data: 'documento'},
                        {data: 'cargo'},
                        {data: 'acciones'}
                    ],
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
@endpush
