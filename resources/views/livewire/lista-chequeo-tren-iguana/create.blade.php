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
                    <x-label for="chequeo_Uno_Tren_Iguana" class="mb-2">
                        {{ __('Verificar y remover elementos extraños en la zona como escombros y basuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Tren_Iguana" id="chequeo_Uno_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Tren_Iguana) border-green-600 @else @error('chequeo_Uno_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Tren_Iguana)
                        @error('chequeo_Uno_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Tren_Iguana" class="mb-2">
                        {{ __('Verificar que en el piso no hayan elementos que puedan pertenecer al equipo e informar de inmediato cualquier novedad') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Tren_Iguana" id="chequeo_Dos_Tren_Iguana"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Tren_Iguana) border-green-600 @else @error('chequeo_Dos_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Tren_Iguana)
                        @error('chequeo_Dos_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el estado de los perfiles estructurales de los vagones, verifique que no esten corroidos y que no presenten fisuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Tren_Iguana" id="chequeo_Tres_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Tren_Iguana) border-green-600 @else  @error('chequeo_Tres_Tren_Iguana') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Tren_Iguana)
                        @error('chequeo_Tres_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el estado de los enganches, su buena sujecion asi como la presencia y estado de los pines y pasadores de seguridad. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Tren_Iguana" id="chequeo_Cuatro_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Tren_Iguana) border-green-600 @else  @error('chequeo_Cuatro_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Tren_Iguana)
                        @error('chequeo_Cuatro_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Tren_Iguana" class="mb-2">
                        {{ __('Verificar que los tubos de soporte de la fibra de vidrio de los vagones, esten anclados en su sitio y no se evidencien oxidacion ni superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Tren_Iguana" id="chequeo_Cinco_Tren_Iguana"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Tren_Iguana) border-green-600 @else  @error('chequeo_Cinco_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Tren_Iguana)
                        @error('chequeo_Cinco_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Tren_Iguana" class="mb-2">
                        {{ __('Inspeccionar el chasis del tractor, esté atento a indicios de corrosion, fisuras u otros signos de deterioro.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Tren_Iguana" id="chequeo_Seis_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Tren_Iguana) border-green-600 @else  @error('chequeo_Seis_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Tren_Iguana)
                        @error('chequeo_Seis_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Tren_Iguana" class="mb-2">
                        {{ __(' Verifique que los vagones estén mecánicamente enganchados, para esto verifique mediante la aplicación de fuerza que el enganche este sujeto a la rotula de union y el pin pasador esté anclado en su lugar.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Tren_Iguana" id="chequeo_Siete_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Tren_Iguana) border-green-600 @else  @error('chequeo_Siete_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Tren_Iguana)
                        @error('chequeo_Siete_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

            </div>

            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Vagones</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Tren_Iguana" class="mb-2">
                        {{ __('Revisar cada seguro lateral tanto  de acceso como de cerramiento del cargador verificando el buen estado de los anclajes  y pasadores de seguridad.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Tren_Iguana" id="chequeo_Ocho_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Tren_Iguana) border-green-600 @else  @error('chequeo_Ocho_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Tren_Iguana)
                        @error('chequeo_Ocho_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Tren_Iguana" class="mb-2">
                        {{ __('Verificar que la fibra de vidrio de cada cargador se conserve en buen estado, no debe poseer fisuras ni superficies cortantes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Tren_Iguana" id="chequeo_Nueve_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Tren_Iguana) border-green-600 @else  @error('chequeo_Nueve_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Tren_Iguana)
                        @error('chequeo_Nueve_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el estado de la madera del piso, esta debe estar remachada, fija al piso y sin evidencia de deformación o daño.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Tren_Iguana" id="chequeo_Diez_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Tren_Iguana) border-green-600 @else  @error('chequeo_Diez_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Tren_Iguana)
                        @error('chequeo_Diez_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Tren_Iguana" class="mb-2">
                        {{ __('Verificar presion del aire manual y visualmente en las llantas. Verificar ajuste de tornillos en bocines de cada vagón') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Tren_Iguana" id="chequeo_Once_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Tren_Iguana) border-green-600 @else  @error('chequeo_Once_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Tren_Iguana)
                        @error('chequeo_Once_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Tractor</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Doce_Tren_Iguana" class="mb-2">
                        {{ __('Verificar la presion del aire de una manera manual') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Tren_Iguana" id="chequeo_Doce_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Tren_Iguana) border-green-600 @else  @error('chequeo_Doce_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Tren_Iguana)
                        @error('chequeo_Doce_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Tren_Iguana" class="mb-2">
                        {{ __(' Verificar la presion del aire y la fijacion pernada de  las llantas de direccion del tractor de una forma manual') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Tren_Iguana" id="chequeo_Trece_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Tren_Iguana) border-green-600 @else  @error('chequeo_Trece_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Tren_Iguana)
                        @error('chequeo_Trece_Tren_Iguana')
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
                    <x-label for="chequeo_Catorce_Tren_Iguana" class="mb-2">
                        {{ __(' Verificar el nivel de aceite del motor
                                                                                                ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Tren_Iguana" id="chequeo_Catorce_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Tren_Iguana) border-green-600 @else  @error('chequeo_Catorce_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Tren_Iguana)
                        @error('chequeo_Catorce_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Tren_Iguana" class="mb-2">
                        {{ __('Revisar nivel de aceite en la transmisión y el sistema hidráulico') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Tren_Iguana" id="chequeo_Quince_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Tren_Iguana) border-green-600 @else  @error('chequeo_Quince_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Tren_Iguana)
                        @error('chequeo_Quince_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Tren_Iguana" class="mb-2">
                        {{ __('Revisar que las abrazaderas del sistema de admisión de aire estén apretadas y que las mangueras estén en buen estado sin hendiduras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Tren_Iguana" id="chequeo_Dieciseis_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Tren_Iguana) border-green-600 @else  @error('chequeo_Dieciseis_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Tren_Iguana)
                        @error('chequeo_Dieciseis_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el nivel del refrigerante, el cual apagado debe estar en COLD FULL') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Tren_Iguana" id="chequeo_Diecisiete_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Tren_Iguana) border-green-600 @else  @error('chequeo_Diecisiete_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Tren_Iguana)
                        @error('chequeo_Diecisiete_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Tren_Iguana" class="mb-2">
                        {{ __('Verificar sujeción y ajuste en bornes en la batería.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Tren_Iguana" id="chequeo_Dieciocho_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Tren_Iguana) border-green-600 @else  @error('chequeo_Dieciocho_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Tren_Iguana)
                        @error('chequeo_Dieciocho_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Tren_Iguana" class="mb-2">
                        {{ __('Verifique que la palanca de cambios este en posicion neutral, palanca de freno asegurada y gire la llave dando arranque al motor.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Tren_Iguana" id="chequeo_Diecinueve_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Tren_Iguana) border-green-600 @else  @error('chequeo_Diecinueve_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Tren_Iguana)
                        @error('chequeo_Diecinueve_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Tren_Iguana" class="mb-2">
                        {{ __('Quitar la palanca de freno y cambiarla de posición de marcha, oprima el embrague y verifique la posición de las palancas de cambios en 3-B y posición de arranque en avance.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Tren_Iguana" id="chequeo_Veinte_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Tren_Iguana) border-green-600 @else  @error('chequeo_Veinte_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Tren_Iguana)
                        @error('chequeo_Veinte_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Tren_Iguana" class="mb-2">
                        {{ __('De una vuelta al parque y durante el recorrido este pendiente de movimientos extraños  de los vagones o sonidos fuertes.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Tren_Iguana" id="chequeo_Ventiuno_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Tren_Iguana) border-green-600 @else  @error('chequeo_Ventiuno_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Tren_Iguana)
                        @error('chequeo_Ventiuno_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Tren_Iguana" class="mb-2">
                        {{ __('Durante el recorrido se debe accionar el freno y verificar que funcione correctamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Tren_Iguana" id="chequeo_Ventidos_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Tren_Iguana) border-green-600 @else  @error('chequeo_Ventidos_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Tren_Iguana)
                        @error('chequeo_Ventidos_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_Tren_Iguana" class="mb-2">
                        {{ __('Verificar que el tope de velocidad este operativo acelerando a fondo las RPM del motor no deben subir de 1500 rpm.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Tren_Iguana" id="chequeo_Ventitres_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Tren_Iguana) border-green-600 @else  @error('chequeo_Ventitres_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Tren_Iguana)
                        @error('chequeo_Ventitres_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="hora_operacion_tablero" class="mb-2">
                        {{ __('Anotar las horas de operación que hay en el display del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <input type="text" wire:model="hora_operacion_tablero"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($hora_operacion_tablero) border-green-600 @else  @error('hora_operacion_tablero') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">

                    @if (!$hora_operacion_tablero)
                        @error('hora_operacion_tablero')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el correcto funcionamiento de los pulsadores y swichets  dispuestos para el accionamiento de la atracción') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Tren_Iguana" id="chequeo_Venticuatro_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Tren_Iguana) border-green-600 @else  @error('chequeo_Venticuatro_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Tren_Iguana)
                        @error('chequeo_Venticuatro_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Tren_Iguana" class="mb-2">
                        {{ __('Verificar el correcto funcionamiento del pito y demás mandos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Tren_Iguana" id="chequeo_Venticinco_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Tren_Iguana) border-green-600 @else  @error('chequeo_Venticinco_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Tren_Iguana)
                        @error('chequeo_Venticinco_Tren_Iguana')
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
                    <x-label for="chequeo_Ventiseis_Tren_Iguana" class="mb-2">
                        {{ __('Haciendo uso del accionador del apagador, apague la atraccion, recuerde dejar puesta la palanca de freno y posición neutra en palanca de avance.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Tren_Iguana" id="chequeo_Ventiseis_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Tren_Iguana) border-green-600 @else  @error('chequeo_Ventiseis_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Tren_Iguana)
                        @error('chequeo_Ventiseis_Tren_Iguana')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_Tren_Iguana" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Tren_Iguana" id="chequeo_Ventisiete_Tren_Iguana"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Tren_Iguana) border-green-600 @else  @error('chequeo_Ventisiete_Tren_Iguana') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Tren_Iguana)
                        @error('chequeo_Ventisiete_Tren_Iguana')
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
