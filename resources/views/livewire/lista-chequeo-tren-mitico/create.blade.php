<div>
    <form wire:submit.prevent='store'>
        {{--  form == 1 --}}
        @if ($currentPage === 1)
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
                    <x-label for="chequeo_Uno_Tren_Mitico" class="mb-2">
                        {{ __(' Revisar que el tren se encuentre apagado antes de iniciar las operaciones de inspección diarias.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Tren_Mitico" id="chequeo_Uno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Tren_Mitico) border-green-600 @else @error('chequeo_Uno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Tren_Mitico)
                        @error('chequeo_Uno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dos_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el enfiladero esté anclado, firme, en buen estado, que no posean fisuras, corrosión ni superficies cortantes') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Tren_Mitico" id="chequeo_Dos_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Dos_Tren_Mitico) border-green-600 @else @error('chequeo_Dos_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Dos_Tren_Mitico)
                        @error('chequeo_Dos_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Tres_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión, que la malla se encuentre en buen estado sin rotos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Tren_Mitico" id="chequeo_Tres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Tres_Tren_Mitico) border-green-600 @else @error('chequeo_Tres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Tres_Tren_Mitico)
                        @error('chequeo_Tres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Tren_Mitico" id="chequeo_Cuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Tren_Mitico)
                        @error('chequeo_Cuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Tren_Mitico" class="mb-2">
                        {{ __('Verificar la zona cercana al tren que no hayan elementos ajenos que puedan pertenecer a la atracción y en caso de encontrar algo notificarlo de inmediato.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Tren_Mitico" id="chequeo_Cinco_Tren_Mitico"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Cinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Tren_Mitico)
                        @error('chequeo_Cinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Seis_Tren_Mitico" class="mb-2">
                        {{ __('Revisar estado de señalización de acuerdo a protocolos de bioseguridad') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Tren_Mitico" id="chequeo_Seis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Tren_Mitico) border-green-600 @else  @error('chequeo_Seis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Tren_Mitico)
                        @error('chequeo_Seis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Tablero de potencia</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado de la chapa de seguridad y abra el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Tren_Mitico" id="chequeo_Siete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Tren_Mitico) border-green-600 @else  @error('chequeo_Siete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Tren_Mitico)
                        @error('chequeo_Siete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar la impermeabilidad del tablero. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Tren_Mitico" id="chequeo_Ocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Ocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Tren_Mitico)
                        @error('chequeo_Ocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que los tableros de potencia estén limpios y que no hayan elementos extraños y ajenos a su función, suciedad, insectos o desechos de estos en su interior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Tren_Mitico" id="chequeo_Nueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Nueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Tren_Mitico)
                        @error('chequeo_Nueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que los elementos eléctricos estén completos y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Tren_Mitico" id="chequeo_Diez_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Tren_Mitico) border-green-600 @else  @error('chequeo_Diez_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Tren_Mitico)
                        @error('chequeo_Diez_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Tren_Mitico" class="mb-2">
                        {{ __(' Verificar que los cables estén conectados correctamente en sus respectivas borneras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Tren_Mitico" id="chequeo_Once_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Tren_Mitico) border-green-600 @else  @error('chequeo_Once_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Tren_Mitico)
                        @error('chequeo_Once_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Doce_Tren_Mitico" class="mb-2">
                        {{ __('En el tablero de potencia Accione el interruptor  principal y ubiquelo en su posicion ON, asegure con llave el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Tren_Mitico" id="chequeo_Doce_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Tren_Mitico) border-green-600 @else  @error('chequeo_Doce_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Tren_Mitico)
                        @error('chequeo_Doce_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Tren_Mitico" class="mb-2">
                        {{ __('Revisar la estructura del edificio estación, columnas, paredes y techo no presentan grietas, puertas de acceso estan en buen estado, pasadores, candados y cadena en estado de aseguramiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Tren_Mitico" id="chequeo_Trece_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Tren_Mitico) border-green-600 @else  @error('chequeo_Trece_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Tren_Mitico)
                        @error('chequeo_Trece_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif

                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Catorce_Tren_Mitico" class="mb-2">
                        {{ __('Pisos de plataforma de abordaje limpios, libre de aceites y objetos que obstruyan el paso de los pasajeros.') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <select wire:model="chequeo_Catorce_Tren_Mitico" id="chequeo_Catorce_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Tren_Mitico) border-green-600 @else  @error('chequeo_Catorce_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Tren_Mitico)
                        @error('chequeo_Catorce_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Tren_Mitico" class="mb-2">
                        {{ __('Realice un recorrido por la vía, Verificar que no este obstruida, el estado de los clavos que sujetan los rieles, los durmientes deben estar firmes en la vía; si nota que hay varios flojos y consecutivos es demostración de inestabilidad de la banca, anuncielo a su supervior. (Mientras realiza el recorrido proceda a realizar el chequeo de los animatronicos ubicados en el recorrido ITEM 6). Revisar que no hayan fisuras en el riel de la vía y que no haya presencia de elementos que puedan generar un descarrillamiento del tren.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Tren_Mitico" id="chequeo_Quince_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Tren_Mitico) border-green-600 @else  @error('chequeo_Quince_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Tren_Mitico)
                        @error('chequeo_Quince_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 2)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Tren_Mitico" class="mb-2">
                        {{ __('La vegetación debe estar a unos minimos aproximados de la via: 2 metros en ambos lados y 4 metros de altura.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Tren_Mitico" id="chequeo_Dieciseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Dieciseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Tren_Mitico)
                        @error('chequeo_Dieciseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Tren_Mitico" class="mb-2">
                        {{ __('Revisar la posición del cambia vias definiendo  su dirección de ruta, Verificar el estado de las diferentes animaciones, despeje los sensores y la iluminación de ser necesario, realice un proceso de función de cada una verficando su funcionalidad, retire los escombros de la via si los hay.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Tren_Mitico" id="chequeo_Diecisiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Diecisiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Tren_Mitico)
                        @error('chequeo_Diecisiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Bruja</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que al pasar la locomotora, haya sonido y movimiento en la bruja ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Tren_Mitico" id="chequeo_Dieciocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Dieciocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Tren_Mitico)
                        @error('chequeo_Dieciocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que esteticamente se encuentre bien el traje y la pintura de la bruja') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Tren_Mitico" id="chequeo_Diecinueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Diecinueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Tren_Mitico)
                        @error('chequeo_Diecinueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Tren_Mitico" class="mb-2">
                        {{ __('Revisar que estén bien anclada y la caneca en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Tren_Mitico" id="chequeo_Veinte_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Tren_Mitico) border-green-600 @else  @error('chequeo_Veinte_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Tren_Mitico)
                        @error('chequeo_Veinte_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Jinete sin cabeza</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero eléctrico, el cual debe estar aseado y seco.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Tren_Mitico" id="chequeo_Ventiuno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventiuno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Tren_Mitico)
                        @error('chequeo_Ventiuno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el jinete y el caballo estén correctamente anclados en la estructura') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Tren_Mitico" id="chequeo_Ventidos_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventidos_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Tren_Mitico)
                        @error('chequeo_Ventidos_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_Tren_Mitico" class="mb-2">
                        {{ __('Activar  el sensor durante el paso de la locomotora y Revisar que funcione el sonido y los movimientos correctamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Tren_Mitico" id="chequeo_Ventitres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventitres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Tren_Mitico)
                        @error('chequeo_Ventitres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que las luces  enciendan.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Tren_Mitico" id="chequeo_Venticuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Venticuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Tren_Mitico)
                        @error('chequeo_Venticuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Anima</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero eléctrico, el cual debe estar aseado y seco.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Tren_Mitico" id="chequeo_Venticinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Venticinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Tren_Mitico)
                        @error('chequeo_Venticinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiseis_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el anima este anclada firmemente al piso') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Tren_Mitico" id="chequeo_Ventiseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventiseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Tren_Mitico)
                        @error('chequeo_Ventiseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_Tren_Mitico" class="mb-2">
                        {{ __('Activar el sensor y Verificar el correcto funcionamiento del anima.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Tren_Mitico" id="chequeo_Ventisiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventisiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Tren_Mitico)
                        @error('chequeo_Ventisiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que las luces  enciendan.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Tren_Mitico" id="chequeo_Ventiocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventiocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Tren_Mitico)
                        @error('chequeo_Ventiocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventinueve_Tren_Mitico" class="mb-2">
                        {{ __('Revisar que la pintura y el traje estén en buen estado ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Tren_Mitico" id="chequeo_Ventinueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Ventinueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Tren_Mitico)
                        @error('chequeo_Ventinueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Tren_Mitico" class="mb-2">
                        {{ __('Inspeccionar que las lapidas en tierra se encuentren ancladas al piso y que el reflector encienda.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Tren_Mitico" id="chequeo_Treinta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Tren_Mitico) border-green-600 @else  @error('chequeo_Treinta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Tren_Mitico)
                        @error('chequeo_Treinta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 3)
            <x-div>
                <p>Calavera</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Tren_Mitico" class="mb-2">
                        {{ __('Revisar que la calavera se encuentre correctamente fijada y estéticamente se vea bien') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Tren_Mitico" id="chequeo_Treintauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Tren_Mitico)
                        @error('chequeo_Treintauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Tren_Mitico" class="mb-2">
                        {{ __('Verificar estado de pintura de la calavera y del cubículo donde se encuentra') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Tren_Mitico" id="chequeo_Treintados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Tren_Mitico)
                        @error('chequeo_Treintados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_Tren_Mitico" class="mb-2">
                        {{ __('Accionar el sensor durante el paso del Tren y validar que funcione el sonido y los movimientos') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_Tren_Mitico" id="chequeo_Treintatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_Tren_Mitico)
                        @error('chequeo_Treintatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Madremonte</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero electrico el cual debe estar aseado y seco.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacuatro_Tren_Mitico" id="chequeo_Treintacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacuatro_Tren_Mitico)
                        @error('chequeo_Treintacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacinco_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la madremonte este anclada firmemente al piso') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacinco_Tren_Mitico" id="chequeo_Treintacinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacinco_Tren_Mitico)
                        @error('chequeo_Treintacinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaseis_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la imagen se conserve esteticamente bien, su pintura y demas aspectos esten en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaseis_Tren_Mitico" id="chequeo_Treintaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintaseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaseis_Tren_Mitico)
                        @error('chequeo_Treintaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintasiete_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que todas  las luces enciendan.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintasiete_Tren_Mitico" id="chequeo_Treintasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintasiete_Tren_Mitico)
                        @error('chequeo_Treintasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Bracamonte</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintaocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero eléctrico debe estar aseado y seco. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaocho_Tren_Mitico" id="chequeo_Treintaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaocho_Tren_Mitico)
                        @error('chequeo_Treintaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintanueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la estructura se conserve en buen estado y este anclada firmemente al piso') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintanueve_Tren_Mitico" id="chequeo_Treintanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Treintanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintanueve_Tren_Mitico)
                        @error('chequeo_Treintanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarenta_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la imagen se conserve esteticamente bien, su pintura y demas aspectos esten en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarenta_Tren_Mitico" id="chequeo_Cuarenta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarenta_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarenta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarenta_Tren_Mitico)
                        @error('chequeo_Cuarenta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentauno_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el mecanismo de funcionamiento del bracamonte este lubricado y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentauno_Tren_Mitico" id="chequeo_Cuarentauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentauno_Tren_Mitico)
                        @error('chequeo_Cuarentauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentados_Tren_Mitico" class="mb-2">
                        {{ __(' Active  el sensor y verificar el correcto funcionamiento del bracamonte.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentados_Tren_Mitico" id="chequeo_Cuarentados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentados_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentados_Tren_Mitico)
                        @error('chequeo_Cuarentados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 4)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentatres_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que todas  las luces enciendan. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentatres_Tren_Mitico" id="chequeo_Cuarentatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentatres_Tren_Mitico)
                        @error('chequeo_Cuarentatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Mohán</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero electrico debe estar aseado y seco.
                                                                                                                                                                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentacuatro_Tren_Mitico" id="chequeo_Cuarentacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentacuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentacuatro_Tren_Mitico)
                        @error('chequeo_Cuarentacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentacinco_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la imagen se conserve esteticamente bien, su pintura y demas aspectos esten en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentacinco_Tren_Mitico" id="chequeo_Cuarentacinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentacinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentacinco_Tren_Mitico)
                        @error('chequeo_Cuarentacinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentaseis_Tren_Mitico" class="mb-2">
                        {{ __('Accionar el sensor y revisar que haya sonido y movimiento en el perro') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentaseis_Tren_Mitico" id="chequeo_Cuarentaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentaseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentaseis_Tren_Mitico)
                        @error('chequeo_Cuarentaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentasiete_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que todas  las luces enciendan.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentasiete_Tren_Mitico" id="chequeo_Cuarentasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentasiete_Tren_Mitico)
                        @error('chequeo_Cuarentasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentaocho_Tren_Mitico" class="mb-2">
                        {{ __('Revisar anclaje del Mohán al piso.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentaocho_Tren_Mitico" id="chequeo_Cuarentaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentaocho_Tren_Mitico)
                        @error('chequeo_Cuarentaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Túnel 1</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentanueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero electrico debe estar aseado y seco.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentanueve_Tren_Mitico" id="chequeo_Cuarentanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Cuarentanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentanueve_Tren_Mitico)
                        @error('chequeo_Cuarentanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuenta_Tren_Mitico" class="mb-2">
                        {{ __('Verificar la fijacion de las placas de superboard, todas deben estar correctamente fijadas y sin agujeros o fisuras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuenta_Tren_Mitico" id="chequeo_Cincuenta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuenta_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuenta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuenta_Tren_Mitico)
                        @error('chequeo_Cincuenta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentauno_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la maleza no genere ningún problema en la estructura del túnel, revisar la estructura de soporte del túnel') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentauno_Tren_Mitico" id="chequeo_Cincuentauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentauno_Tren_Mitico)
                        @error('chequeo_Cincuentauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Túnel 2</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentados_Tren_Mitico" class="mb-2">
                        {{ __('Verificar la fijacion de las placas de superboard, todas deben estar correctamente fijadas y sin agujeros o fisuras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentados_Tren_Mitico" id="chequeo_Cincuentados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentados_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentados_Tren_Mitico)
                        @error('chequeo_Cincuentados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentatres_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el estado de la estructura metálica, la cual se debe encontrar en buenas condiciones.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentatres_Tren_Mitico" id="chequeo_Cincuentatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cincuentatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentatres_Tren_Mitico)
                        @error('chequeo_Cincuentatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la maleza no genere ningún problema en la estructura del túnel') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentacuatro_Tren_Mitico" id="chequeo_Cincuentacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cincuentacuatro_Tren_Mitico) border-green-600 @else @error('chequeo_Cincuentacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentacuatro_Tren_Mitico)
                        @error('chequeo_Cincuentacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Sombrerón</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentacinco_Tren_Mitico" class="mb-2">
                        {{ __('Drene al condensado de la unidad de mantenimiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentacinco_Tren_Mitico" id="chequeo_Cincuentacinco_Tren_Mitico"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Cincuentacinco_Tren_Mitico) border-green-600 @else @error('chequeo_Cincuentacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentacinco_Tren_Mitico)
                        @error('chequeo_Cincuentacinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 5)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentaseis_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la imagen se conserve esteticamente bien, su pintura y demas aspectos esten en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentaseis_Tren_Mitico" id="chequeo_Cincuentaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Cincuentaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentaseis_Tren_Mitico') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cincuentaseis_Tren_Mitico)
                        @error('chequeo_Cincuentaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentasiete_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el mecanismo de funcionamiento del sombrerón este en buen estado y correctamente lubricados. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentasiete_Tren_Mitico" id="chequeo_Cincuentasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cincuentasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentasiete_Tren_Mitico)
                        @error('chequeo_Cincuentasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentaocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el cuarto del compresor este limpio, retire cualquier tipo de suciedad.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentaocho_Tren_Mitico" id="chequeo_Cincuentaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cincuentaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentaocho_Tren_Mitico)
                        @error('chequeo_Cincuentaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cincuentanueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el nivel de aceite del compresor') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cincuentanueve_Tren_Mitico" id="chequeo_Cincuentanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cincuentanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Cincuentanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cincuentanueve_Tren_Mitico)
                        @error('chequeo_Cincuentanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesenta_Tren_Mitico" class="mb-2">
                        {{ __('Encienda el compresor y drene el condensado del tanque. Haciendo uso de la valvula inferior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesenta_Tren_Mitico" id="chequeo_Sesenta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesenta_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesenta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesenta_Tren_Mitico)
                        @error('chequeo_Sesenta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Llorona</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Sesentauno_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el buen estado del tablero electrico el cual debe estar aseado y seco.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentauno_Tren_Mitico" id="chequeo_Sesentauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentauno_Tren_Mitico)
                        @error('chequeo_Sesentauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentados_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la llorona este anclada firmemente al piso.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentados_Tren_Mitico" id="chequeo_Sesentados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentados_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentados_Tren_Mitico)
                        @error('chequeo_Sesentados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentados_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que el estado estético y la pintura estén en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentatres_Tren_Mitico" id="chequeo_Sesentatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentatres_Tren_Mitico)
                        @error('chequeo_Sesentatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Accionar el sensor y revisar que haya movimiento y sonido de la llorona al pasar el tren') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentacuatro_Tren_Mitico" id="chequeo_Sesentacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentacuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentacuatro_Tren_Mitico)
                        @error('chequeo_Sesentacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentacinco_Tren_Mitico" class="mb-2">
                        {{ __('Revisar las ruedas de cada vagón, si ve desgaste en exceso, notifiquelo de inmediato para iniciar correctivos, Revisar la lubricación y el estado de las chumaceras, Revisar las piezas que aseguran las ruedas al eje, si faltan o están flojas, asegúrelas o reemplace de ser necesario.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentacinco_Tren_Mitico" id="chequeo_Sesentacinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentacinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentacinco_Tren_Mitico)
                        @error('chequeo_Sesentacinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentaseis_Tren_Mitico" class="mb-2">
                        {{ __(' Revisar el estado de los acoples entre vagones, que esten completos, Revisar el pasador, la tuerca y el pin en ambos extremos de cada barra de acople, asegure o reemplace si es necesario.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentaseis_Tren_Mitico" id="chequeo_Sesentaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentaseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentaseis_Tren_Mitico)
                        @error('chequeo_Sesentaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentasiete_Tren_Mitico" class="mb-2">
                        {{ __(' Revisar el estado de la estructura de cada vagón, que esté fija a la plataforma, los asientos sin fisuras ni superficies cortantes y fijos a la plataforma del vagón') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentasiete_Tren_Mitico" id="chequeo_Sesentasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentasiete_Tren_Mitico)
                        @error('chequeo_Sesentasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Sesentaocho_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la tuerca de anclaje del los carretones al vagon este ajustada, 2 por cada vagon, para esto debe retirar la tapa de madera detro del vagon en cada carreton.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentaocho_Tren_Mitico" id="chequeo_Sesentaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentaocho_Tren_Mitico)
                        @error('chequeo_Sesentaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 6)
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Sesentanueve_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el estado de la madera del piso de los vagones, no debe presentar agujeros ni evidencia de degradacion.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Sesentanueve_Tren_Mitico" id="chequeo_Sesentanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Sesentanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Sesentanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Sesentanueve_Tren_Mitico)
                        @error('chequeo_Sesentanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setenta_Tren_Mitico" class="mb-2">
                        {{ __('Revisar estructura de soporte del techo y el estado de la fibra en vagón y en techo') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setenta_Tren_Mitico" id="chequeo_Setenta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setenta_Tren_Mitico) border-green-600 @else  @error('chequeo_Setenta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setenta_Tren_Mitico)
                        @error('chequeo_Setenta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <x-div>
                <p>Locomotora</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Setentauno_Tren_Mitico" class="mb-2">
                        {{ __('Revisar las ruedas, si nota desgaste excesivo anuncielo de inmediato para su corrección, Verificar la lubricación en los ejes y chumaceras') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentauno_Tren_Mitico" id="chequeo_Setentauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentauno_Tren_Mitico)
                        @error('chequeo_Setentauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentados_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el chasis que este firme en la carrocería, no debe poseer fisuras ni corrosion. Además validar que no rocen las ruedas metálicas con la estructura') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentados_Tren_Mitico" id="chequeo_Setentados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentados_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentados_Tren_Mitico)
                        @error('chequeo_Setentados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentatres_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el motor y sus equipos complementarios, si falta alguno no proceda a la prueba de vacio e informe de inmediato') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentatres_Tren_Mitico" id="chequeo_Setentatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentatres_Tren_Mitico)
                        @error('chequeo_Setentatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el nivel del agua en el radiador, si esta bajo proceda adicionar la cantidad necesaria para que llegue a tope.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentacuatro_Tren_Mitico" id="chequeo_Setentacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentacuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentacuatro_Tren_Mitico)
                        @error('chequeo_Setentacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentacinco_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el nivel de combustible en el tanque, si esta bajo proceda a realizar la anotacion pertinente en la bitacora e informe al operario para que proceda a tanquear.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentacinco_Tren_Mitico" id="chequeo_Setentacinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentacinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentacinco_Tren_Mitico)
                        @error('chequeo_Setentacinco_Tren_Miticos')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentaseis_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el nivel y estado del aceite del motor, esta verificacion se realiza por medio de la varilla medidora dispuesta al lado derecho del motor.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentaseis_Tren_Mitico" id="chequeo_Setentaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentaseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentaseis_Tren_Mitico)
                        @error('chequeo_Setentaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentasiete_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el nivel y estado del aceite de la transmision, esta verificacion se realiza por medio de la varilla medidora dispuesta en la cabina de operacion.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentasiete_Tren_Mitico" id="chequeo_Setentasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentasiete_Tren_Mitico)
                        @error('chequeo_Setentasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentaocho_Tren_Mitico" class="mb-2">
                        {{ __('Revisar los filtros de aceite y combustible, que no se presenten fugas de aceite ni de ACPM, en caso de encontrar se debe notificar de inmediato') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentaocho_Tren_Mitico" id="chequeo_Setentaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentaocho_Tren_Mitico)
                        @error('chequeo_Setentaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Setentanueve_Tren_Mitico" class="mb-2">
                        {{ __('Revisar los controles y palancas de mando, que esten firmes y operables.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Setentanueve_Tren_Mitico" id="chequeo_Setentanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Setentanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Setentanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Setentanueve_Tren_Mitico)
                        @error('chequeo_Setentanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochenta_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el estado y conexión de la BATERIA, sus bornes limpios y libre de sulfatos, los cables principales bien sujetos a los bornes, Verificar la ruta y destino de cada uno.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochenta_Tren_Mitico" id="chequeo_Ochenta_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochenta_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochenta_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochenta_Tren_Mitico)
                        @error('chequeo_Ochenta_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentauno_Tren_Mitico" class="mb-2">
                        {{ __('Revisar el encendido de las luces de tablero y frontal, que esten firmes al chasis') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentauno_Tren_Mitico" id="chequeo_Ochentauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentauno_Tren_Mitico)
                        @error('chequeo_Ochentauno_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentados_Tren_Mitico" class="mb-2">
                        {{ __('Verificar el acople de locomotora al vagon carbonero y de este a los vagones, completo y debidamente asegurado, el vagon carbonero debe estar  firme al tren de rodamiento, sus laminas del piso fijas y remachadas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentados_Tren_Mitico" id="chequeo_Ochentados_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentados_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentados_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentados_Tren_Mitico)
                        @error('chequeo_Ochentados_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        @if ($currentPage === 7)
            <x-div>
                <p>Importante, antes de iniciar movimiento se debe verificar:
                    a. La plataforma,vagones y via deben estar
                    completamente vacíos. 
                    b. La palanca de cambios debe estar en posicion NEUTRA</p>
            </x-div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ochentatres_Tren_Mitico" class="mb-2">
                        {{ __('Introduzca la llave en el switche de encendido, gire un paso para encendido de luces y control, dos pasos para encendido de motor, un intento no debería durar mas de dos segundos, despues de tres intentos, el motor no responde, Revisar la carga de la batería') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentatres_Tren_Mitico" id="chequeo_Ochentatres_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentatres_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentatres_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentatres_Tren_Mitico)
                        @error('chequeo_Ochentatres_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentacuatro_Tren_Mitico" class="mb-2">
                        {{ __('Haga uso del embrague manual halandolo hacia atrás, consérvelo en esta posicion y ubique la palanca de cambios en primera, suavemente suelte el embraque, el vehiculo iniciará movimiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentacuatro_Tren_Mitico" id="chequeo_Ochentacuatro_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentacuatro_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentacuatro_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentacuatro_Tren_Mitico)
                        @error('chequeo_Ochentacuatro_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentacinco_Tren_Mitico" class="mb-2">
                        {{ __('Se debe hacer al menos un ciclo completo, y Verificar que no se presenten ruidos extraños en el  motor, y demas partes moviles del tren, este atento a vibraciones fuertes durante su funcionamiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentacinco_Tren_Mitico" id="chequeo_Ochentacinco_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentacinco_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentacinco_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentacinco_Tren_Mitico)
                        @error('chequeo_Ochentacinco_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentaseis_Tren_Mitico" class="mb-2">
                        {{ __('Este atento al correcto funcionamiento de lo animatronicos, estos deben activarse al paso del tren.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentaseis_Tren_Mitico" id="chequeo_Ochentaseis_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentaseis_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentaseis_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentaseis_Tren_Mitico)
                        @error('chequeo_Ochentaseis_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentasiete_Tren_Mitico" class="mb-2">
                        {{ __('Verificar que la vía este nivelada y que no se presenten sobresaltos o pasos brucos en la vía') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentasiete_Tren_Mitico" id="chequeo_Ochentasiete_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentasiete_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentasiete_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentasiete_Tren_Mitico)
                        @error('chequeo_Ochentasiete_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentaocho_Tren_Mitico" class="mb-2">
                        {{ __('La prueba de sonido se debe realizar en presencia de el operador ya que ellos guardan parte del equipo (microfono), antes de la llegada del operario Verificar el correcto estado de las conexiones entre coches, los altavoces de cada uno de ellos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentaocho_Tren_Mitico" id="chequeo_Ochentaocho_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentaocho_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentaocho_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentaocho_Tren_Mitico)
                        @error('chequeo_Ochentaocho_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ochentanueve_Tren_Mitico" class="mb-2">
                        {{ __('Este tren no posee frenado rapido, solo en caso de real emergencia, coloque los cambios en primera y apague el motor, espere hasta que el tren se detenga y proceda a la evacuación si es necesario.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ochentanueve_Tren_Mitico" id="chequeo_Ochentanueve_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ochentanueve_Tren_Mitico) border-green-600 @else  @error('chequeo_Ochentanueve_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Ochentanueve_Tren_Mitico)
                        @error('chequeo_Ochentanueve_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Noventa_Tren_Mitico" class="mb-2">
                        {{ __('Deje el tren en posición de abordaje y retire la llave, no  desenergize los tableros, recuerde dejar los tableros de potencia asegurados y cerrados con llave.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Noventa_Tren_Mitico" id="chequeo_Noventa_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Noventa_Tren_Mitico) border-green-600 @else  @error('chequeo_Noventa_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Noventa_Tren_Mitico)
                        @error('chequeo_Noventa_Tren_Mitico')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Noventauno_Tren_Mitico" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Noventauno_Tren_Mitico" id="chequeo_Noventauno_Tren_Mitico"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Noventauno_Tren_Mitico) border-green-600 @else  @error('chequeo_Noventauno_Tren_Mitico') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Noventauno_Tren_Mitico)
                        @error('chequeo_Noventauno_Tren_Mitico')
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

            @if ($currentPage > 1 && $currentPage <= 7)
                <button type="button" wire:click="goToPreviousPage()"
                    class="inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Atrás</button>
            @endif

            @if ($currentPage >= 1 && $currentPage <= 6)
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5"
                    wire:click="goToNextPage()">Siguiente</button>
            @endif

            @if ($currentPage === 7)
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Enviar</button>
            @endif

        </div>
    </form>
</div>
