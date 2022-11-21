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
                    <x-label for="chequeo_Uno_VCT" class="mb-2">
                        {{ __('En el gabinete de potencia verifique antes de iniciar la revisión que el interruptor general este en posición de apagado, de estar encendido, verifique si el personal de la atracción se encuentra aspirando el foso principal, si no se esta realizando esta tarea des energice totalmente la atracción así evitara que involuntariamente energicen y accionen la atracción mientras es inspeccionada.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_VCT" id="chequeo_Uno_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_VCT) border-green-600 @else @error('chequeo_Uno_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_VCT)
                        @error('chequeo_Uno_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_VCT" class="mb-2">
                        {{ __('Verificar que el enfiladero esté anclado, firme, en buen estado, que no posean fisuras, corrosión ni superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_VCT" id="chequeo_Dos_VCT"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_VCT) border-green-600 @else @error('chequeo_Dos_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_VCT)
                        @error('chequeo_Dos_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_VCT" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión, que la malla se encuentre en buen estado sin rotos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_VCT" id="chequeo_Tres_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_VCT) border-green-600 @else  @error('chequeo_Tres_VCT') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_VCT)
                        @error('chequeo_Tres_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_VCT" class="mb-2">
                        {{ __(' Verificar el piso de los alrededores en busca de pines o elementos que puedan pertenecer al equipo, si encuentra alguno, cerciórese que no pertenezca al equipo e informe a los revisores de equipos próximos para descartar que no falte en uno de ellos. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_VCT" id="chequeo_Cuatro_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_VCT) border-green-600 @else  @error('chequeo_Cuatro_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_VCT)
                        @error('chequeo_Cuatro_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_VCT" class="mb-2">
                        {{ __('Revisar estado de señalización de acuerdo a protocolos de bioseguridad') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_VCT" id="chequeo_Cinco_VCT"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_VCT) border-green-600 @else  @error('chequeo_Cinco_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_VCT)
                        @error('chequeo_Cinco_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_VCT" class="mb-2">
                        {{ __(' Verificar que toda la pasarela del muelle este en buen estado, este completa, no tenga desniveles y esté bien firme. Revisar que las placas plásticas no presenten hundimiento') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_VCT" id="chequeo_Seis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_VCT) border-green-600 @else  @error('chequeo_Seis_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_VCT)
                        @error('chequeo_Seis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_VCT" class="mb-2">
                        {{ __(' Revisar nivel de aceite depósito bomba hidráulica') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_VCT" id="chequeo_Siete_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_VCT) border-green-600 @else  @error('chequeo_Siete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_VCT)
                        @error('chequeo_Siete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ocho_VCT" class="mb-2">
                        {{ __('Verificar los dos motores hidráulicos que estén bien fijados y no tengan fugas de aceite en los acoples o en los retenedores.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_VCT" id="chequeo_Ocho_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_VCT) border-green-600 @else  @error('chequeo_Ocho_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_VCT)
                        @error('chequeo_Ocho_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_VCT" class="mb-2">
                        {{ __(' Verificar el estado de las mangueras, que estén en buen estado y que no tengan fugas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_VCT" id="chequeo_Nueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_VCT) border-green-600 @else  @error('chequeo_Nueve_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_VCT)
                        @error('chequeo_Nueve_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_VCT" class="mb-2">
                        {{ __(' Inspeccionar que no hayan fisuras en las juntas soldadas de los soportes de los motores hidráulicos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_VCT" id="chequeo_Diez_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_VCT) border-green-600 @else  @error('chequeo_Diez_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_VCT)
                        @error('chequeo_Diez_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_VCT" class="mb-2">
                        {{ __(' Inspeccionar el estado de las cadenas y los sprocket, los cuales deben estar bien acoplados, lubricados, con buena tensión y alineación. Los sprocket deben tener los dientes en un estado que garantice el correcto agarre de la cadena') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_VCT" id="chequeo_Once_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_VCT) border-green-600 @else  @error('chequeo_Once_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_VCT)
                        @error('chequeo_Once_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Doce_VCT" class="mb-2">
                        {{ __('Revisar que los controles estén fijos, dentro del sistema de control de las bandas de entrada y salida revisar que no hayan fugas de aceite en mangueras, conexiones y que los manómetros funcionen adecuadamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_VCT" id="chequeo_Doce_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_VCT) border-green-600 @else  @error('chequeo_Doce_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_VCT)
                        @error('chequeo_Doce_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_VCT" class="mb-2">
                        {{ __('Revisar que las uñas de deslizamiento estén correctamente fijadas a la estructura soporte.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_VCT" id="chequeo_Trece_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_VCT) border-green-600 @else  @error('chequeo_Trece_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_VCT)
                        @error('chequeo_Trece_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif

                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Catorce_VCT" class="mb-2">
                        {{ __(' Revisar que las que no hayan fisuras en las juntas soldadas de los soportes del muelle.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_VCT" id="chequeo_Catorce_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_VCT) border-green-600 @else  @error('chequeo_Catorce_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_VCT)
                        @error('chequeo_Catorce_VCT')
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
                    <x-label for="chequeo_Quince_VCT" class="mb-2">
                        {{ __('  Verifique que las rejillas estén: completas, fijadas firmemente, no estén corroídas y estén libres de superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_VCT" id="chequeo_Quince_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_VCT) border-green-600 @else  @error('chequeo_Quince_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_VCT)
                        @error('chequeo_Quince_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_VCT" class="mb-2">
                        {{ __(' Verificar que los rodillos de carga estén completos, que tengan sus rodamientos en buen estado y sin corrosión.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_VCT" id="chequeo_Dieciseis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_VCT) border-green-600 @else  @error('chequeo_Dieciseis_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_VCT)
                        @error('chequeo_Dieciseis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_VCT" class="mb-2">
                        {{ __('  Verificar el estado de las chumaceras que estén en buen estado, bien fijadas y bien lubricados.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_VCT" id="chequeo_Diecisiete_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_VCT) border-green-600 @else  @error('chequeo_Diecisiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_VCT)
                        @error('chequeo_Diecisiete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_VCT" class="mb-2">
                        {{ __('Verificar que cada góndola esté en buen estado, no posea fisuras, sin superficies cortantes y debe conservar una buena apariencia estética') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_VCT" id="chequeo_Dieciocho_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_VCT) border-green-600 @else  @error('chequeo_Dieciocho_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_VCT)
                        @error('chequeo_Dieciocho_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_VCT" class="mb-2">
                        {{ __('Verificar en los cinturones que la riata y la hebilla estén en perfecto estado. Revisar además que los tubos de soporte estén fijos a la base') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_VCT" id="chequeo_Diecinueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_VCT) border-green-600 @else  @error('chequeo_Diecinueve_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_VCT)
                        @error('chequeo_Diecinueve_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_VCT" class="mb-2">
                        {{ __('Verificar el estado de llantas que estén en buen estado, y sin desgaste excesivo.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_VCT" id="chequeo_Veinte_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_VCT) border-green-600 @else  @error('chequeo_Veinte_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_VCT)
                        @error('chequeo_Veinte_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_VCT" class="mb-2">
                        {{ __('Inspeccionar el estado de los ejes tanto los de las bases como los ejes de deslizamientos que estén buen estado y que tengan todos sus pines en estado adecuado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_VCT" id="chequeo_Ventiuno_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_VCT) border-green-600 @else  @error('chequeo_Ventiuno_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_VCT)
                        @error('chequeo_Ventiuno_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_VCT" class="mb-2">
                        {{ __('Verificar los trinquetes que estén en buen estado, con el taco de caucho completo y el resorte en buenas condiciones de ajuste y elongacióno') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_VCT" id="chequeo_Ventidos_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_VCT) border-green-600 @else  @error('chequeo_Ventidos_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_VCT)
                        @error('chequeo_Ventidos_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Estructura Torre 2</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_VCT" class="mb-2">
                        {{ __('Revisar el estado de las bombas de cascada que estén bien fijadas, que el filtro no tenga  basuras ni escombros, y que la granada este limpia . Luego de verificar lo anterior llenar la tubería y el filtro hasta el tope con agua.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_VCT" id="chequeo_Ventitres_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_VCT) border-green-600 @else  @error('chequeo_Ventitres_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_VCT)
                        @error('chequeo_Ventitres_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_VCT" class="mb-2">
                        {{ __('Verificar que las tablas de ascenso y descenso estén completas, bien fijadas a la estructura , que no estén fracturadas y con los tornillos fijados correctamente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_VCT" id="chequeo_Venticuatro_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_VCT) border-green-600 @else  @error('chequeo_Venticuatro_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_VCT)
                        @error('chequeo_Venticuatro_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_VCT" class="mb-2">
                        {{ __('Verificar que los rodillos de carga estén completos, que estén en buen estado y sin corrosión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_VCT" id="chequeo_Venticinco_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_VCT) border-green-600 @else  @error('chequeo_Venticinco_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_VCT)
                        @error('chequeo_Venticinco_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiseis_VCT" class="mb-2">
                        {{ __('Verificar que la cremallera de la torre  este bien fijada, con la totalidad de su tornillos y sin fisuras. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_VCT" id="chequeo_Ventiseis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_VCT) border-green-600 @else  @error('chequeo_Ventiseis_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_VCT)
                        @error('chequeo_Ventiseis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_VCT" class="mb-2">
                        {{ __(' Verificar el estado de las chumaceras en los tambores metálicos que estén en buen estado, bien fijadas y lubricadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_VCT" id="chequeo_Ventisiete_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_VCT) border-green-600 @else  @error('chequeo_Ventisiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_VCT)
                        @error('chequeo_Ventisiete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_VCT" class="mb-2">
                        {{ __('Verificar que el motor del rodillo  motriz este bien fijado con la totalidad de sus tornillos y bien alineado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_VCT" id="chequeo_Ventiocho_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_VCT) border-green-600 @else  @error('chequeo_Ventiocho_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_VCT)
                        @error('chequeo_Ventiocho_VCT')
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
                    <x-label for="chequeo_Ventinueve_VCT" class="mb-2">
                        {{ __(' Verifique que la cadena y los sprockets  principales estén bien alineados, estén lubricados y su aceite no esté degradado o contaminado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_VCT" id="chequeo_Ventinueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_VCT) border-green-600 @else  @error('chequeo_Ventinueve_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_VCT)
                        @error('chequeo_Ventinueve_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_VCT" class="mb-2">
                        {{ __('  Revisar tablero de control, que se encuentre con todos sus pulsadores, se verifican los sensores se seguridad de las torres que estén bien fijados y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_VCT" id="chequeo_Treinta_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_VCT) border-green-600 @else  @error('chequeo_Treinta_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_VCT)
                        @error('chequeo_Treinta_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_VCT" class="mb-2">
                        {{ __(' Revisar estructura y caída del splash que no tengan fisuras o pernos flojos y que ningún objeto obstruya el paso libre de las góndolas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_VCT" id="chequeo_Treintauno_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_VCT) border-green-600 @else  @error('chequeo_Treintauno_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_VCT)
                        @error('chequeo_Treintauno_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_VCT" class="mb-2">
                        {{ __('Verificar que los soportes de tablas de ascenso y descenso se encuentren en buen estado, no debe haber corrosión ni desprendimiento de material') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_VCT" id="chequeo_Treintados_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_VCT) border-green-600 @else  @error('chequeo_Treintados_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_VCT)
                        @error('chequeo_Treintados_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_VCT" class="mb-2">
                        {{ __('Verificar el estado de la banda, la cual debe estar alineada y validar el desgaste presentado en la lona.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_VCT" id="chequeo_Treintatres_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_VCT) border-green-600 @else  @error('chequeo_Treintatres_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_VCT)
                        @error('chequeo_Treintatres_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacuatro_VCT" class="mb-2">
                        {{ __(' Revisar que la fibra de la estructura se encuentre en buen estado y sin fisuras o desprendimientos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacuatro_VCT" id="chequeo_Treintacuatro_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacuatro_VCT) border-green-600 @else  @error('chequeo_Treintacuatro_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacuatro_VCT)
                        @error('chequeo_Treintacuatro_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacinco_VCT" class="mb-2">
                        {{ __('Revisar que los soportes del splash se encuentren en buen estado y fijos en la estructura') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacinco_VCT" id="chequeo_Treintacinco_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacinco_VCT) border-green-600 @else  @error('chequeo_Treintacinco_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacinco_VCT)
                        @error('chequeo_Treintacinco_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Estructura Torre 1</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintaseis_VCT" class="mb-2">
                        {{ __('Revisar el estado de las bombas de cascada que estén bien fijadas, que el filtro no tenga  basuras ni escombros, y que la granada este limpia . Luego de verificar lo anterior llenar la tubería y el filtro hasta el tope con agua.  ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaseis_VCT" id="chequeo_Treintaseis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaseis_VCT) border-green-600 @else  @error('chequeo_Treintaseis_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaseis_VCT)
                        @error('chequeo_Treintaseis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintasiete_VCT" class="mb-2">
                        {{ __('Verificar que las tablas de ascenso y descenso estén completas, bien fijadas a la estructura , que no estén fracturadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintasiete_VCT" id="chequeo_Treintasiete_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintasiete_VCT) border-green-600 @else  @error('chequeo_Treintasiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintasiete_VCT)
                        @error('chequeo_Treintasiete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaocho_VCT" class="mb-2">
                        {{ __(' Verificar que los rodillos de carga estén completos, que estén en buen estado y sin corrosión.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaocho_VCT" id="chequeo_Treintaocho_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaocho_VCT) border-green-600 @else  @error('chequeo_Treintaocho_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaocho_VCT)
                        @error('chequeo_Treintaocho_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintanueve_VCT" class="mb-2">
                        {{ __('Verificar que la cremallera de la torre  este bien fijada, con la totalidad de su tornillos y sin fisuras.    ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintanueve_VCT" id="chequeo_Treintanueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintanueve_VCT) border-green-600 @else  @error('chequeo_Treintanueve_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintanueve_VCT)
                        @error('chequeo_Treintanueve_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarenta_VCT" class="mb-2">
                        {{ __(' Verificar el estado de las chumaceras en los tambores metálicos que estén en buen estado, bien fijadas y lubricadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarenta_VCT" id="chequeo_Cuarenta_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarenta_VCT) border-green-600 @else  @error('chequeo_Cuarenta_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarenta_VCT)
                        @error('chequeo_Cuarenta_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        {{--  form 4 --}}

        @if ($currentPage === 4)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentauno_VCT" class="mb-2">
                        {{ __('Verificar que el motor del rodillo  motriz este bien fijado con la totalidad de sus tornillos y bien alineado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentauno_VCT" id="chequeo_Cuarentauno_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentauno_VCT) border-green-600 @else  @error('chequeo_Cuarentauno_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentauno_VCT)
                        @error('chequeo_Cuarentauno_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentados_VCT" class="mb-2">
                        {{ __('Verificar que la cadena y los sprockets  principales estén bien alineados, estén lubricados y su aceite no esté degradado o contaminado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentados_VCT" id="chequeo_Cuarentados_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentados_VCT) border-green-600 @else  @error('chequeo_Cuarentados_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentados_VCT)
                        @error('chequeo_Cuarentados_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentatres_VCT" class="mb-2">
                        {{ __(' Revisar tablero de control, que se encuentre con todos sus pulsadores, se verifican los sensores se seguridad de las torres que estén bien fijados y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentatres_VCT" id="chequeo_Cuarentatres_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentatres_VCT) border-green-600 @else  @error('chequeo_Cuarentatres_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentatres_VCT)
                        @error('chequeo_Cuarentatres_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentacuatro_VCT" class="mb-2">
                        {{ __('Revisar estructura y caída del splash que no tengan fisuras o pernos flojos y que ningún objeto obstruya el paso libre de las góndolas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentacuatro_VCT" id="chequeo_Cuarentacuatro_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentacuatro_VCT) border-green-600 @else  @error('chequeo_Cuarentacuatro_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentacuatro_VCT)
                        @error('chequeo_Cuarentacuatro_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentacinco_VCT" class="mb-2">
                        {{ __('Verificar que los parales de soporte de tablas de ascenso y descenso se encuentren en buen estado, no debe haber corrosión ni desprendimiento de material.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentacinco_VCT" id="chequeo_Cuarentacinco_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentacinco_VCT) border-green-600 @else  @error('chequeo_Cuarentacinco_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentacinco_VCT)
                        @error('chequeo_Cuarentacinco_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentaseis_VCT" class="mb-2">
                        {{ __('Verificar el estado de la banda, la cual debe estar alineada y validar el desgaste presentado en la lona.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentaseis_VCT" id="chequeo_Cuarentaseis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentaseis_VCT) border-green-600 @else  @error('chequeo_Cuarentaseis_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentaseis_VCT)
                        @error('chequeo_Cuarentaseis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentasiete_VCT" class="mb-2">
                        {{ __('Revisar que la fibra de la estructura se encuentre en buen estado y sin fisuras o desprendimientos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentasiete_VCT" id="chequeo_Cuarentasiete_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentasiete_VCT) border-green-600 @else  @error('chequeo_Cuarentasiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentasiete_VCT)
                        @error('chequeo_Cuarentasiete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentaocho_VCT" class="mb-2">
                        {{ __('Revisar que los soportes del splash se encuentren en buen estado y fijos en la estructura') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentaocho_VCT" id="chequeo_Cuarentaocho_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentaocho_VCT) border-green-600 @else  @error('chequeo_Cuarentaocho_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentaocho_VCT)
                        @error('chequeo_Cuarentaocho_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Revisión canal de agua</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentanueve_VCT" class="mb-2">
                        {{ __('Revisar que el canal en su recorrido la ausencia de elementos extraños en la zona, escombros y  no tenga fisuras , ni desmoronamientos en el material, tanto en el piso como en las juntas') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentanueve_VCT" id="chequeo_Cuarentanueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentanueve_VCT) border-green-600 @else  @error('chequeo_Cuarentanueve_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentanueve_VCT)
                        @error('chequeo_Cuarentanueve_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuenta_VCT" class="mb-2">
                        {{ __('Revisar el recorrido y verificar  que todos los equipos de iluminación estén bien ubicados, anclados al suelo y que funcionen correctamente.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuenta_VCT" id="chequeo_Cincuenta_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuenta_VCT) border-green-600 @else  @error('chequeo_Cincuenta_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuenta_VCT)
                        @error('chequeo_Cincuenta_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Foso principal y motor bomba de agua</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentauno_VCT" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión, Y que el piso de la pasarela este completo y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentauno_VCT" id="chequeo_Cincuentauno_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentauno_VCT) border-green-600 @else  @error('chequeo_Cincuentauno_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentauno_VCT)
                        @error('chequeo_Cincuentauno_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentados_VCT" class="mb-2">
                        {{ __('Verificar que el motorreductor principal esté bien anclado a la estructura y la lineabilidad del eje impulsor de la bomba.  ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentados_VCT" id="chequeo_Cincuentados_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentados_VCT) border-green-600 @else  @error('chequeo_Cincuentados_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentados_VCT)
                        @error('chequeo_Cincuentados_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentatres_VCT" class="mb-2">
                        {{ __('Verificar que el motorreductor principal de la bomba no tenga fugas de aceite y se encuentre en buen estado la prensa estopa, revisar lineabilidad del eje de la bomba') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentatres_VCT" id="chequeo_Cincuentatres_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentatres_VCT) border-green-600 @else  @error('chequeo_Cincuentatres_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentatres_VCT)
                        @error('chequeo_Cincuentatres_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        {{--  form 4 --}}

        @if ($currentPage === 5)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentacuatro_VCT" class="mb-2">
                        {{ __('Revisar que haya una buena lineabilidad del eje de la bomba y no hayan ruidos extraños o altas vibraciones en el conjunto motriz.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentacuatro_VCT" id="chequeo_Cincuentacuatro_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cincuentacuatro_VCT) border-green-600 @else @error('chequeo_Cincuentacuatro_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentacuatro_VCT)
                        @error('chequeo_Cincuentacuatro_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cincuentacinco_VCT" class="mb-2">
                        {{ __('Verificar los voltajes entre fases haciendo uso del selector dispuesto para tal fin.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentacinco_VCT" id="chequeo_Cincuentacinco_VCT"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Cincuentasiete_VCT) border-green-600 @else @error('chequeo_Cincuentasiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentacinco_VCT)
                        @error('chequeo_Cincuentacinco_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cincuentaseis_VCT" class="mb-2">
                        {{ __(' En el tablero de control se abre el interruptor de emergencia (ubicado en el muelle).') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentaseis_VCT" id="chequeo_Cincuentaseis_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Cincuentaseis_VCT) border-green-600 @else  @error('chequeo_Cincuentaseis_VCT') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentaseis_VCT)
                        @error('chequeo_Cincuentaseis_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cincuentasiete_VCT" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público), Nombre legible, Firma , Cedula. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentasiete_VCT" id="chequeo_Cincuentanueve_VCT"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cincuentasiete_VCT) border-green-600 @else  @error('chequeo_Cincuentasiete_VCT') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentasiete_VCT)
                        @error('chequeo_Cincuentasiete_VCT')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
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

                    <input type="file" wire:model="imagen" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
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

            @if ($currentPage > 1 && $currentPage <= 5)
                <button type="button" wire:click="goToPreviousPage()"
                    class="inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Atrás</button>
            @endif

            @if ($currentPage >= 1 && $currentPage <= 4)
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5"
                    wire:click="goToNextPage()">Siguiente</button>
            @endif

            @if ($currentPage === 5)
            <button type="submit"
            class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Enviar</button>
            @endif

        </div>
    </form>
</div>
