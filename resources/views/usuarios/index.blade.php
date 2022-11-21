@extends('layouts.app')


@section('contenido')
    <div class="mt-5 pt-8">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Registrar  empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <livewire:crear-usuario />
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="EditarEmpleado" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar  empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <livewire:editar-usuario />
                </div>
            </div>
            </div>
        </div>
        <div class="flex md:justify-between  mb-5">
            <h1 class="text-4xl font-bold text-dark">Gestión de empleados</h1>

           {{--  <a class="inline-flex items-center px-4 py-2 bg-indigo-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview"">Crear empleado</a> --}}

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Crear empleado
                  </button>
        </div>
    
        <livewire:listar-usuarios /> 
    </div>
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/244e77d4c2.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let boton = document.querySelector('#guardar');
        let botonEditar = document.querySelector('#editar');
        let inputPasswordEdit = document.querySelector('#passwordEdit');

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

            //Boton crear - Agregar las propiedades del boton y hacer click automaticamente para que se  quite el modal
            boton.setAttribute('data-dismiss', 'modal');
            boton.type = "button";
            boton.click();
            boton.type = "submit";
            boton.removeAttribute('data-dismiss');

            //Boton editar
            botonEditar.setAttribute('data-dismiss', 'modal');
            botonEditar.type = "button";
            botonEditar.click();
            botonEditar.type = "submit";
            botonEditar.removeAttribute('data-dismiss');

            Toast.fire({
                icon: 'success',
                title: event.detail.message
            });
        });

        /******* Evento para ver si se produjo un error al editar o crear empleado ********/
        window.addEventListener('error', event => {
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
                icon: 'error',
                title: event.detail.message
            });

            /******* Boton crear - Agregar las propiedades del boton y hacer click automaticamente para que se le quite el modal *********/
            boton.setAttribute('data-dismiss', 'modal');
            boton.type = "button";
            boton.click();
            boton.type = "submit";
            boton.removeAttribute('data-dismiss');

            //Boton editar
            botonEditar.setAttribute('data-dismiss', 'modal');
            botonEditar.type = "button";
            botonEditar.click();
            botonEditar.type = "submit";
            botonEditar.removeAttribute('data-dismiss');
        });

        /******* Evento pra eliminar el empleado ********/
        window.addEventListener('alertUsuario', event => {
            Swal.fire({
                title: '¿Eliminar Empleado?',
                text: "Un empleado eliminado no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Eliminar la vacante 
                    Livewire.emit('eliminarEmpleado', event.detail);
                    /*  Swal.fire(
                         'Se elimino el empleado!',
                         'Eliminado correctamente.',
                         'success'
                     ) */

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
                        title: 'Se elimino el empleado correctamente!',
                    });
                }
            })
        });
    </script>
@endpush
