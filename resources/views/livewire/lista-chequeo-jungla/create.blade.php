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
                    <x-label for="chequeo_Uno_Jungla" class="mb-2">
                        {{ __('En el gabinete de potencia verifique antes de iniciar la revisión que el interruptor general este en posición de apagado, de estar encendido, des energice la atracción y proceda a cerrar de nuevo con llave el tablero, así evitara que involuntariamente energicen y accionen la atracción mientras es inspeccionada.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Jungla" id="chequeo_Uno_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Jungla) border-green-600 @else @error('chequeo_Uno_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Jungla)
                        @error('chequeo_Uno_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Jungla" class="mb-2">
                        {{ __('Verificar la ausencia de elementos extraños en la zona, escombros.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Jungla" id="chequeo_Dos_Jungla"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Jungla) border-green-600 @else @error('chequeo_Dos_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Jungla)
                        @error('chequeo_Dos_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Jungla" class="mb-2">
                        {{ __('Verificar que los enfiladeros y encerramientos estén anclados, firmes en su sitio, en buen estado, que no posean fisuras, superficies cortantes ni corrosión.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Jungla" id="chequeo_Tres_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Jungla) border-green-600 @else  @error('chequeo_Tres_Jungla') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Jungla)
                        @error('chequeo_Tres_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Jungla" class="mb-2">
                        {{ __(' Revisar estado de señalización de acuerdo a protocolos de bioseguridad ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Jungla" id="chequeo_Cuatro_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Jungla) border-green-600 @else  @error('chequeo_Cuatro_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Jungla)
                        @error('chequeo_Cuatro_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Jungla" class="mb-2">
                        {{ __('Verificar que las bases, perfiles estructurales y lásminas del puente no presenten oxidación ni fisuras en las soldaduras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Jungla" id="chequeo_Cinco_Jungla"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Jungla) border-green-600 @else  @error('chequeo_Cinco_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Jungla)
                        @error('chequeo_Cinco_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Jungla" class="mb-2">
                        {{ __('Verificar que las bases y perfiles estructurales no estén oxidados y no evidencien fisuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Jungla" id="chequeo_Seis_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Jungla) border-green-600 @else  @error('chequeo_Seis_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Jungla)
                        @error('chequeo_Seis_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Jungla" class="mb-2">
                        {{ __('Revisar el nivel del agua en el canal si el nivel sobrepasa la marca del máximo, sacar el exceso de agua con la bomba  de cascada') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Jungla" id="chequeo_Siete_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Jungla) border-green-600 @else  @error('chequeo_Siete_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Jungla)
                        @error('chequeo_Siete_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Jungla" class="mb-2">
                        {{ __('Verificar que las balsas no estén inundadas ni presenten fisuras en la fibra de vidrio') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Jungla" id="chequeo_Ocho_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Jungla) border-green-600 @else  @error('chequeo_Ocho_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Jungla)
                        @error('chequeo_Ocho_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Jungla" class="mb-2">
                        {{ __('Verificar  el estado de las bancas en las balsas, que estén bien fijadas a la balsa con la totalidad de sus tornillos y libres de fisuras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Jungla" id="chequeo_Nueve_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Jungla) border-green-600 @else  @error('chequeo_Nueve_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Jungla)
                        @error('chequeo_Nueve_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Jungla" class="mb-2">
                        {{ __('Verificar que  los soporte de los enganches no estén reventados, sin fisuras, sin corrosión y bien fijado a la balsa') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Jungla" id="chequeo_Diez_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Jungla) border-green-600 @else  @error('chequeo_Diez_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Jungla)
                        @error('chequeo_Diez_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Jungla" class="mb-2">
                        {{ __(' Verificar los enganches que estén en buen estado, los cauchos y orrines sin cortes y  los resortes sin deformación . Si el enganche no cumple con lo anterior se cambia por otro que cumpla') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Jungla" id="chequeo_Once_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Jungla) border-green-600 @else  @error('chequeo_Once_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Jungla)
                        @error('chequeo_Once_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>



                <div class="w-full group">
                    <x-label for="chequeo_Doce_Jungla" class="mb-2">
                        {{ __('Verificar el estado de las ruedas  traseras de las balsas que estén completas, en buen estado y que giren libremente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Jungla" id="chequeo_Doce_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Jungla) border-green-600 @else  @error('chequeo_Doce_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Jungla)
                        @error('chequeo_Doce_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Jungla" class="mb-2">
                        {{ __('Verificar el estado de las laminas del piso, estas deben estar  fijas al piso, sin superficies cortantes y libres de corrosión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Jungla" id="chequeo_Trece_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Jungla) border-green-600 @else  @error('chequeo_Trece_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Jungla)
                        @error('chequeo_Trece_Jungla')
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
                    <x-label for="chequeo_Catorce_Jungla" class="mb-2">
                        {{ __('Revisar que el motor esté debidamente fijado a su base, que estén bien alineado con el acople omega de la bomba hidráulica y que esté en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Jungla" id="chequeo_Catorce_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Jungla) border-green-600 @else  @error('chequeo_Catorce_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Jungla)
                        @error('chequeo_Catorce_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Jungla" class="mb-2">
                        {{ __(' Revisar que no hayan cables en corto y que el tablero se encuentre bien aclado al piso') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Jungla" id="chequeo_Quince_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Jungla) border-green-600 @else  @error('chequeo_Quince_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Jungla)
                        @error('chequeo_Quince_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Jungla" class="mb-2">
                        {{ __('Verificar el nivel  y estado del aceite del compresor de tornillo y ajustar si es necesario con lubricante Ingersollrand ultra coolant ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Jungla" id="chequeo_Dieciseis_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Jungla) border-green-600 @else  @error('chequeo_Dieciseis_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Jungla)
                        @error('chequeo_Dieciseis_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Jungla" class="mb-2">
                        {{ __('Se drena el deposito de aire, para que salga  el aire condensado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Jungla" id="chequeo_Diecisiete_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Jungla) border-green-600 @else  @error('chequeo_Diecisiete_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Jungla)
                        @error('chequeo_Diecisiete_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Jungla" class="mb-2">
                        {{ __('Verificar el nivel y estado del aceite en el tanque, ajustar si es necesario con aceite hidráulico ISO 68') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Jungla" id="chequeo_Dieciocho_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Jungla) border-green-600 @else  @error('chequeo_Dieciocho_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Jungla)
                        @error('chequeo_Dieciocho_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Jungla" class="mb-2">
                        {{ __('Verificar  el sistema de tensión, que las palancas estén bien fijadas ,sin fugas y estén en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Jungla" id="chequeo_Diecinueve_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Jungla) border-green-600 @else  @error('chequeo_Diecinueve_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Jungla)
                        @error('chequeo_Diecinueve_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Jungla" class="mb-2">
                        {{ __('Verificar el buen estado de la cadena, que esté bien ubicada en sus poleas y volante motriz. Verificar la tensión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Jungla" id="chequeo_Veinte_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Jungla) border-green-600 @else  @error('chequeo_Veinte_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Jungla)
                        @error('chequeo_Veinte_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Tableros de potencia</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">

                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Jungla" class="mb-2">
                        {{ __(' Verificar el buen estado de la chapa de seguridad y abra el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Jungla" id="chequeo_Ventiuno_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Jungla) border-green-600 @else  @error('chequeo_Ventiuno_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Jungla)
                        @error('chequeo_Ventiuno_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Jungla" class="mb-2">
                        {{ __('Verificar la ipermeabilidad de los tableros') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Jungla" id="chequeo_Ventidos_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Jungla) border-green-600 @else  @error('chequeo_Ventidos_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Jungla)
                        @error('chequeo_Ventidos_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Jungla" class="mb-2">
                        {{ __('Verificar que los tableros de potencia estén limpios y que no hayan elementos extraños y ajenos a su función, suciedad, insectos o desechos de estos en su interior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Jungla" id="chequeo_Ventitres_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Jungla) border-green-600 @else  @error('chequeo_Ventitres_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Jungla)
                        @error('chequeo_Ventitres_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Jungla" class="mb-2">
                        {{ __(' Verificar que los elementos eléctricos estén completos y en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Jungla" id="chequeo_Venticuatro_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Jungla) border-green-600 @else  @error('chequeo_Venticuatro_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Jungla)
                        @error('chequeo_Venticuatro_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Jungla" class="mb-2">
                        {{ __('Verificar que los cables estén conectados correctamente en sus respectivas borneras, ordenados y protegidos por canaletas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Jungla" id="chequeo_Venticinco_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Jungla) border-green-600 @else  @error('chequeo_Venticinco_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Jungla)
                        @error('chequeo_Venticinco_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

            </div>
        @endif

        {{-- FORM 3 --}}
        @if ($currentPage === 3)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full col-span-2 group">
                    <x-label for="chequeo_Ventiseis_Jungla" class="mb-2">
                        {{ __('Verificar que no haya evidencia de cortos, cintas aislantes sueltas, o indicios de recalentamiento en los componentes del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Jungla" id="chequeo_Ventiseis_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Jungla) border-green-600 @else  @error('chequeo_Ventiseis_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Jungla)
                        @error('chequeo_Ventiseis_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Tablero de control</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_Jungla" class="mb-2">
                        {{ __('Verificar que este firme en su sitio.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Jungla" id="chequeo_Ventisiete_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Jungla) border-green-600 @else  @error('chequeo_Ventisiete_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Jungla)
                        @error('chequeo_Ventisiete_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Jungla" class="mb-2">
                        {{ __('Verificar el correcto estado de los pulsadores y mandos del tablero') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Jungla" id="chequeo_Ventiocho_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Jungla) border-green-600 @else  @error('chequeo_Ventiocho_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Jungla)
                        @error('chequeo_Ventiocho_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventinueve_Jungla" class="mb-2">
                        {{ __('En el tablero de potencia Accione el interruptor  principal y ubíquelo en su posición ON, asegure con llave el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Jungla" id="chequeo_Ventinueve_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Jungla) border-green-600 @else  @error('chequeo_Ventinueve_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Jungla)
                        @error('chequeo_Ventinueve_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Jungla" class="mb-2">
                        {{ __('En el tablero de control gire la llave de swiche para activar el sistema de control y desactive botón de paro de emergencia.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Jungla" id="chequeo_Treinta_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Jungla) border-green-600 @else  @error('chequeo_Treinta_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Jungla)
                        @error('chequeo_Treinta_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Jungla" class="mb-2">
                        {{ __('Verificar el correcto funcionamiento de los pulsadores y swichets  dispuestos para el accionamiento de la atracción.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Jungla" id="chequeo_Treintauno_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Jungla) border-green-600 @else  @error('chequeo_Treintauno_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Jungla)
                        @error('chequeo_Treintauno_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Jungla" class="mb-2">
                        {{ __('Verificar que todas las luces  de la atracción enciendan.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Jungla" id="chequeo_Treintados_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Jungla) border-green-600 @else  @error('chequeo_Treintados_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Jungla)
                        @error('chequeo_Treintados_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Importante, antes de iniciar movimiento se debe verificar que la plataforma esté vacía.</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_Jungla" class="mb-2">
                        {{ __('Ponga en marcha la atracción haciendo uso del botón ARRANQUE (verde).') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_Jungla" id="chequeo_Treintatres_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_Jungla) border-green-600 @else  @error('chequeo_Treintatres_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_Jungla)
                        @error('chequeo_Treintatres_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacuatro_Jungla" class="mb-2">
                        {{ __('Se debe hacer al menos un ciclo completo, y verifique que no se presenten obstáculos en el canal, que la cadena este ubicada correctamente en todas las guías y verificar que al momento de pasar la balsa por todos los sensores en los animatrónicos funcione correctamente el sistema de sonido y movimiento en los dinosaurios') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacuatro_Jungla" id="chequeo_Treintacuatro_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacuatro_Jungla) border-green-600 @else  @error('chequeo_Treintacuatro_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacuatro_Jungla)
                        @error('chequeo_Treintacuatro_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacinco_Jungla" class="mb-2">
                        {{ __(' Revisar que cada uno de los animatrónicos esté operando y realizando los movimientos, que tengan sonido y que el estado de limpieza sea el adecuado. Revisar que no hayan partes dañadas en el recubrimiento de los dinosaurios') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacinco_Jungla" id="chequeo_Treintacinco_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacinco_Jungla) border-green-600 @else  @error('chequeo_Treintacinco_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacinco_Jungla)
                        @error('chequeo_Treintacinco_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaseis_Jungla" class="mb-2">
                        {{ __('Encender la bomba cascada y verificar que funcione correctamente, en caso de que no arranque proceder a cebar y limpiar los elementos del filtro de succión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaseis_Jungla" id="chequeo_Treintaseis_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaseis_Jungla) border-green-600 @else  @error('chequeo_Treintaseis_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaseis_Jungla)
                        @error('chequeo_Treintaseis_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintasiete_Jungla" class="mb-2">
                        {{ __('Poner en marcha de nuevo la atracción y una vez haya alcanzado velocidad accionar el botón de paro de emergencia. La atracción debe detenerse rápida y suavemente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintasiete_Jungla" id="chequeo_Treintasiete_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintasiete_Jungla) border-green-600 @else  @error('chequeo_Treintasiete_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintasiete_Jungla)
                        @error('chequeo_Treintasiete_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaocho_Jungla" class="mb-2">
                        {{ __('Deje accionado el botón de paro de emergencia, gire y retire la llave, no  desenergize los tableros, recuerde dejar los tableros de potencia asegurados y cerrados con llave.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaocho_Jungla" id="chequeo_Treintaocho_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaocho_Jungla) border-green-600 @else  @error('chequeo_Treintaocho_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaocho_Jungla)
                        @error('chequeo_Treintaocho_Jungla')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintanueve_Jungla" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <select wire:model="chequeo_Treintanueve_Jungla" id="chequeo_Treintanueve_Jungla"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintanueve_Jungla) border-green-600 @else  @error('chequeo_Treintanueve_Jungla') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintanueve_Jungla)
                        @error('chequeo_Treintanueve_Jungla')
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
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full @if ($hora_fin) border-green-600  @else @error('hora_fin') border-rose-600 @enderror @endif"
                        type="time" wire:model="hora_fin" :value="old('hora_fin')" />
                    @if (!$hora_fin)
                        @error('hora_fin')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
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
