<div>
    <form wire:submit.prevent='store'>
        {{--  form == 1 --}}
        @if ($currentPage == 1)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="hora_inicio" class="mb-2">{{ __('Hora de inicio') }} <span
                            class="text-red-500">*</span>
                    </x-label>
                    <input id="hora_inicio"
                        class=" rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full @if ($hora_inicio) border-green-600  @else @error('hora_inicio') border-rose-600 @enderror @endif"
                        type="datetime-local" wire:model="hora_inicio" />
                    @if (!$hora_inicio)
                        @error('hora_inicio')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif

                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Uno_Urbano" class="mb-2">
                        {{ __('Revisar que el equipo se encuentre apagado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Urbano" id="chequeo_Uno_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Urbano) border-green-600 @else @error('chequeo_Uno_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Urbano)
                        @error('chequeo_Uno_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Urbano" class="mb-2">
                        {{ __('Verificar la ausencia de elementos extraños en la zona como escombros') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Urbano" id="chequeo_Dos_Urbano"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Urbano) border-green-600 @else @error('chequeo_Dos_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Urbano)
                        @error('chequeo_Dos_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Urbano" class="mb-2">
                        {{ __('Verificar que los enfiladeros estén anclados, firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Urbano" id="chequeo_Tres_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Urbano) border-green-600 @else  @error('chequeo_Tres_Urbano') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Urbano)
                        @error('chequeo_Tres_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Urbano" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Urbano" id="chequeo_Cuatro_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Urbano) border-green-600 @else  @error('chequeo_Cuatro_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Urbano)
                        @error('chequeo_Cuatro_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Urbano" class="mb-2">
                        {{ __('Verifique el piso de los alrededores en busca de pines o elementos que puedan pertenecer al equipo, si encuentra alguno, cerciórese que no pertenezca al equipo e informe inmediatamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Urbano" id="chequeo_Cinco_Urbano"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Urbano) border-green-600 @else  @error('chequeo_Cinco_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Urbano)
                        @error('chequeo_Cinco_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Urbano" class="mb-2">
                        {{ __('Verificar que los Pasadores de la estructura de soporte están completos y  tengan sus respectivos pines. Deben poseer ganchos de sujeción.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Urbano" id="chequeo_Seis_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Urbano) border-green-600 @else  @error('chequeo_Seis_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Urbano)
                        @error('chequeo_Seis_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Urbano" class="mb-2">
                        {{ __('Verificar que las láminas de piso se encuentran fijas y remachadas en su sitio, no se levantanen y no presenten superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Urbano" id="chequeo_Siete_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Urbano) border-green-600 @else  @error('chequeo_Siete_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Urbano)
                        @error('chequeo_Siete_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Urbano" class="mb-2">
                        {{ __('Inspeccionar las columnas de soporte, deben estar ancladas firmes en su sitio y contar con sus respectivas cubiertas correctamente posicionadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Urbano" id="chequeo_Ocho_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Urbano) border-green-600 @else  @error('chequeo_Ocho_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Urbano)
                        @error('chequeo_Ocho_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Urbano" class="mb-2">
                        {{ __('Recorrer la plataforma en busca de desnivieles y partes faltas de apoyo, todo debe esta correctamente soportado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Urbano" id="chequeo_Nueve_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Urbano) border-green-600 @else  @error('chequeo_Nueve_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Urbano)
                        @error('chequeo_Nueve_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Urbano" class="mb-2">
                        {{ __('Inspeccionar las estructura de soporte de cada vehiculo y constate que todos los pasadores y pines estan en su sitio y estén en buenas condiciones, asi como que las estructuras soldadas no posean fisuras ni partes sueltas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Urbano" id="chequeo_Diez_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Urbano) border-green-600 @else  @error('chequeo_Diez_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Urbano)
                        @error('chequeo_Diez_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Urbano" class="mb-2">
                        {{ __('Inspeccionar que no falten remaches o pernos en las láminas del piso y que estas esten bien posicionadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Urbano" id="chequeo_Once_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Urbano) border-green-600 @else  @error('chequeo_Once_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Urbano)
                        @error('chequeo_Once_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Doce_Urbano" class="mb-2">
                        {{ __('Verificar que las laminas de la cubierta del techo estén en su sitio, amarradas correctamente, que no se observen luces o espacios por donde se pueda filtrar agua.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Urbano" id="chequeo_Doce_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Urbano) border-green-600 @else  @error('chequeo_Doce_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Urbano)
                        @error('chequeo_Doce_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Urbano" class="mb-2">
                        {{ __('Verificar que los cinturones de seguridad de cada vehículo estén en buen estado,  no deben poseer deshilachados, descocidos y debe estar bien anclado a la fibra de vidrio y la chapa asegura correctamente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Urbano" id="chequeo_Trece_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Urbano) border-green-600 @else  @error('chequeo_Trece_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Urbano)
                        @error('chequeo_Trece_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif

                </div>
            </div>
        @endif


        {{--  form 2 --}}
        @if ($currentPage === 2)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Catorce_Urbano" class="mb-2">
                        {{ __('Verificar que la fibra de vidrio de cada vehiculo se concerve en buen estado, no debe poseer fisuras ni superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Urbano" id="chequeo_Catorce_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Urbano) border-green-600 @else  @error('chequeo_Catorce_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Urbano)
                        @error('chequeo_Catorce_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Urbano" class="mb-2">
                        {{ __('Verificar el buen estado de rejas decorativas y la tematizacion de cada vehiculo, estas deben estar en buen estado estetico y operativo.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Urbano" id="chequeo_Quince_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Urbano) border-green-600 @else  @error('chequeo_Quince_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Urbano)
                        @error('chequeo_Quince_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Urbano" class="mb-2">
                        {{ __('Verificar que cada vehiculo este anclado correctamente a la plataforma que no posea fisuras en las bases, debe tener completos sus dispositivos de sujecion.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Urbano" id="chequeo_Dieciseis_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Urbano) border-green-600 @else  @error('chequeo_Dieciseis_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Urbano)
                        @error('chequeo_Dieciseis_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Urbano" class="mb-2">
                        {{ __('Verificar el buen estado de la tapiceria y fibra de vidrio de las sillas de cada vehiculo. Revisar el ajuste de las volantes de cada vehículo') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Urbano" id="chequeo_Diecisiete_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Urbano) border-green-600 @else  @error('chequeo_Diecisiete_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Urbano)
                        @error('chequeo_Diecisiete_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Urbano" class="mb-2">
                        {{ __('Verificar que las acometidas eléctricas al motor estén correctamente ubicadas y aisladas, no encender el equipo si encuentra cables zafados o sin recubrimiento, no encienda el equipo hasta que haya sido corregida la novedad.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Urbano" id="chequeo_Dieciocho_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Urbano) border-green-600 @else  @error('chequeo_Dieciocho_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Urbano)
                        @error('chequeo_Dieciocho_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Urbano" class="mb-2">
                        {{ __('Verificar la tensión,  el buen estado de las  Bandas en v, no estén deshilachadas, o desgastadas en exceso.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Urbano" id="chequeo_Diecinueve_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Urbano) border-green-600 @else  @error('chequeo_Diecinueve_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Urbano)
                        @error('chequeo_Diecinueve_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Tableros de potencia</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Urbano" class="mb-2">
                        {{ __('Verificar el buen estado de la chapa de seguridad y abra el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Urbano" id="chequeo_Veinte_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Urbano) border-green-600 @else  @error('chequeo_Veinte_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Urbano)
                        @error('chequeo_Veinte_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Urbano" class="mb-2">
                        {{ __('Verificar la impermeabilidad del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Urbano" id="chequeo_Ventiuno_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Urbano) border-green-600 @else  @error('chequeo_Ventiuno_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Urbano)
                        @error('chequeo_Ventiuno_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Urbano" class="mb-2">
                        {{ __(' Verificar que los tableros de potencia estén limpios y que no hayan elementos extraños y ajenos a su función, suciedad, insectos o desechos de estos en su interior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Urbano" id="chequeo_Ventidos_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Urbano) border-green-600 @else  @error('chequeo_Ventidos_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Urbano)
                        @error('chequeo_Ventidos_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_Urbano" class="mb-2">
                        {{ __('Verificar que los elementos eléctricos estén completos y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Urbano" id="chequeo_Ventitres_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Urbano) border-green-600 @else  @error('chequeo_Ventitres_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Urbano)
                        @error('chequeo_Ventitres_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Urbano" class="mb-2">
                        {{ __('Verificar que no haya evidencia de cortos, cintas aislantes sueltas, o indicios de recalentamiento en los componentes del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Urbano" id="chequeo_Venticuatro_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Urbano) border-green-600 @else  @error('chequeo_Venticuatro_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Urbano)
                        @error('chequeo_Venticuatro_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Tablero de control</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Urbano" class="mb-2">
                        {{ __('Verifique que este firme en su sitio') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Urbano" id="chequeo_Venticinco_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Urbano) border-green-600 @else  @error('chequeo_Venticinco_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Urbano)
                        @error('chequeo_Venticinco_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiseis_Urbano" class="mb-2">
                        {{ __('Verifique el correcto estado de los pulsadores y mandos del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Urbano" id="chequeo_Ventiseis_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Urbano) border-green-600 @else  @error('chequeo_Ventiseis_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Urbano)
                        @error('chequeo_Ventiseis_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_Urbano" class="mb-2">
                        {{ __('En el tablero de potencia revisar que el interruptor  principal esté en posicion ON, asegurese que el tablero quede cerrado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Urbano" id="chequeo_Ventisiete_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Urbano) border-green-600 @else  @error('chequeo_Ventisiete_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Urbano)
                        @error('chequeo_Ventisiete_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        {{-- FORM 3 --}}

        @if ($currentPage === 3)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Urbano" class="mb-2">
                        {{ __('Haciendo uso del selector de fase verifique el voltaje de cada una de ellas con respecto a la neutra') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Urbano" id="chequeo_Ventiocho_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Urbano) border-green-600 @else  @error('chequeo_Ventiocho_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Urbano)
                        @error('chequeo_Ventiocho_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventinueve_Urbano" class="mb-2">
                        {{ __('En el tablero de control gire la el swiche de llave para activar el sistema de control y desenclave el boton de paro de emergencia') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Urbano" id="chequeo_Ventinueve_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Urbano) border-green-600 @else  @error('chequeo_Ventinueve_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Urbano)
                        @error('chequeo_Ventinueve_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Urbano" class="mb-2">
                        {{ __('despues de 20 segundos digite la clave de acceso  3123 y verifique que el indicador amarillo ACCESO encienda.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Urbano" id="chequeo_Treinta_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Urbano) border-green-600 @else  @error('chequeo_Treinta_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Urbano)
                        @error('chequeo_Treinta_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Urbano" class="mb-2">
                        {{ __('Verificar el correcto funcionamiento de los pulsadores y swichets  dispuestos para el accionamiento de la atracción.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Urbano" id="chequeo_Treintauno_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Urbano) border-green-600 @else  @error('chequeo_Treintauno_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Urbano)
                        @error('chequeo_Treintauno_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Urbano" class="mb-2">
                        {{ __('Verificar que todas las lucen  de la atracción enciendan.
                                                ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Urbano" id="chequeo_Treintados_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Urbano) border-green-600 @else  @error('chequeo_Treintados_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Urbano)
                        @error('chequeo_Treintados_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_Urbano" class="mb-2">
                        {{ __('Ponga en marcha la atraccion haciendo uso del boton ARRANQUE (verde). Verifique que no haya presencia de herramientas o personas antes de pulsar el botón') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_Urbano" id="chequeo_Treintatres_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_Urbano) border-green-600 @else  @error('chequeo_Treintatres_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_Urbano)
                        @error('chequeo_Treintatres_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacuatro_Urbano" class="mb-2">
                        {{ __('Se debe hacer al menos un ciclo completo, y verifique que no se presenten ruidos extraños en los  motores, y demas partes moviles de la atraccion, este atento a vibraciones fuertes durante su funcionamiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacuatro_Urbano" id="chequeo_Treintacuatro_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacuatro_Urbano) border-green-600 @else  @error('chequeo_Treintacuatro_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacuatro_Urbano)
                        @error('chequeo_Treintacuatro_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacinco_Urbano" class="mb-2">
                        {{ __('Verifique que la plataforma este nivelada y que no se presenten sobresalto ni ruidos extraños.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacinco_Urbano" id="chequeo_Treintacinco_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacinco_Urbano) border-green-600 @else  @error('chequeo_Treintacinco_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacinco_Urbano)
                        @error('chequeo_Treintacinco_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaseis_Urbano" class="mb-2">
                        {{ __(' Poner en marcha de nuevo la atracción y una vez haya alcanzado velocidad accionar el botón de paro de emergencia. La atracción debe detenerse rápida y suavemente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaseis_Urbano" id="chequeo_Treintaseis_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaseis_Urbano) border-green-600 @else  @error('chequeo_Treintaseis_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaseis_Urbano)
                        @error('chequeo_Treintaseis_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintasiete_Urbano" class="mb-2">
                        {{ __('Deje accionado el botón de paro de emergencia, gire y retire la llave, no  desenergize los tableros, recuerde dejar los tableros de potencia asegurados y cerrados con llave.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintasiete_Urbano" id="chequeo_Treintasiete_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintasiete_Urbano) border-green-600 @else  @error('chequeo_Treintasiete_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintasiete_Urbano)
                        @error('chequeo_Treintasiete_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaocho_Urbano" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaocho_Urbano" id="chequeo_Treintaocho_Urbano"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaocho_Urbano) border-green-600 @else  @error('chequeo_Treintaocho_Urbano') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaocho_Urbano)
                        @error('chequeo_Treintaocho_Urbano')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="observaciones" class="mb-2">
                        {{ __('Observaciones o comentarios durante la revisión') }}
                    </x-label>

                    <textarea wire:model="observaciones" id="observaciones"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full max-h-14  @error('observaciones') border-rose-600 @enderror @if ($observaciones) border-green-600 @endif"></textarea>
                    @error('observaciones')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                </div>

                <div class="w-full group">
                    <x-label for="imagen" :value="__('Mostrar novedad de alta criticidad encontrada en la revisión')" />

                    <input type="file" wire:model="imagen"
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        accept="image/*" />
                </div>

                <div class="w-full group">
                    <x-label for="hora_fin" class="mb-2">{{ __('Hora de finalización') }} <span
                            class="text-red-500">*</span>
                    </x-label>
                    <input id="hora_fin"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full @error('hora_inicio') border-rose-600 @enderror @if ($hora_fin) border-green-600 @endif"
                        type="time" wire:model="hora_fin" :value="old('hora_fin')" />
                    @error('hora_fin')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                </div>
            </div>
        @endif


        <div class="w-full group flex justify-end gap-2">
            @if ($currentPage === 1)
                <div></div>
            @endif

            @if ($currentPage > 1 && $currentPage <= 3)
                <button type="button" wire:click="goToPreviousPage()"
                    class="inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Atrás</button>
            @endif

            @if ($currentPage >= 1 && $currentPage <= 2)
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5"
                    wire:click="goToNextPage()">Siguiente</button>
            @endif

            @if ($currentPage === 3)
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Enviar</button>
            @endif

        </div>
    </form>
</div>
