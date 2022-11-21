<div>
    <form wire:submit.prevent='store'>
        <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
            <div class="w-full group">
                <x-label for="hora_inicio" class="mb-2">{{ __('Hora de inicio') }} <span class="text-red-500">*</span>
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
                <x-label for="chequeo_Uno_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar el estado de los enfiladeros, estos deben estar anclados, firmes en su sitio y en buen estado estético y funcional.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Uno_Espacio_Infinito" id="chequeo_Uno_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Espacio_Infinito) border-green-600 @else @error('chequeo_Uno_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>

                @if (!$chequeo_Uno_Espacio_Infinito)
                    @error('chequeo_Uno_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Dos_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar que el aviso publicitario de la atracción y su reflector estén correctamente posicionados y asegurados.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Dos_Espacio_Infinito" id="chequeo_Dos_Espacio_Infinito"
                    class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Espacio_Infinito) border-green-600 @else @error('chequeo_Dos_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>
                @if (!$chequeo_Dos_Espacio_Infinito)
                    @error('chequeo_Dos_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Tres_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar que las fachadas ( 2 ) frontal y trasera  en vidrio estén completas y que las chapas de las puertas corredizas en vidrio estén cerradas.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Tres_Espacio_Infinito" id="chequeo_Tres_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Espacio_Infinito) border-green-600 @else  @error('chequeo_Tres_Espacio_Infinito') border-rose-600 @enderror @endif ">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>
                @if (!$chequeo_Tres_Espacio_Infinito)
                    @error('chequeo_Tres_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Cuatro_Espacio_Infinito" class="mb-2">
                    {{ __('Abra las puertas ( 2 frontal y trasera)haciendo uso de la llave y verifique que estén operativa, estas deben deslizarse suavemente y abrir completas') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Cuatro_Espacio_Infinito" id="chequeo_Cuatro_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Espacio_Infinito) border-green-600 @else  @error('chequeo_Cuatro_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Cuatro_Espacio_Infinito)
                    @error('chequeo_Cuatro_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Cinco_Espacio_Infinito" class="mb-2">
                    {{ __('Revisar estado de señalización de acuerdo a protocolos de bioseguridad') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Cinco_Espacio_Infinito" id="chequeo_Cinco_Espacio_Infinito"
                    class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Espacio_Infinito) border-green-600 @else  @error('chequeo_Cinco_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Cinco_Espacio_Infinito)
                    @error('chequeo_Cinco_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Seis_Espacio_Infinito" class="mb-2">
                    {{ __('Proceda a energizar la atracción para estos siga los paso que a continuación se enumeran, los equipos relacionados están tras el bastidor de la atracción:                                                                                   a. Posicione hacia arriba el interruptor del extractor. b. Posicione hacia la izquierda (alejándose de usted) ambos interruptores de iluminación.    ') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Seis_Espacio_Infinito" id="chequeo_Seis_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Espacio_Infinito) border-green-600 @else  @error('chequeo_Seis_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Seis_Espacio_Infinito)
                    @error('chequeo_Seis_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Siete_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar que la  puerta interna, este fija en su sitio, su manija esta firme al igual que sus bisagras e imanes de cierre.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Siete_Espacio_Infinito" id="chequeo_Siete_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Espacio_Infinito) border-green-600 @else  @error('chequeo_Siete_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Siete_Espacio_Infinito)
                    @error('chequeo_Siete_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Ocho_Espacio_Infinito" class="mb-2">
                    {{ __('Ingresar al laberinto y recórralo, este atento a:  Luces fundidas.                                                                             Espejos despicados o quebrados.  Luces de led con secuencias anómalas.                                      Strobers averiados. Pisos en mal estado con discontinuidades o desniveles que puedan generar tropiezos. Verifique el correcto funcionamiento del extractor de aire.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Ocho_Espacio_Infinito" id="chequeo_Ocho_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Espacio_Infinito) border-green-600 @else  @error('chequeo_Ocho_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Ocho_Espacio_Infinito)
                    @error('chequeo_Ocho_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class=" w-full group">
                <x-label for="chequeo_Nueve_Espacio_Infinito" class="mb-2">
                    {{ __(' Puerta auxiliar. Esta puerta tiene dentro de sus funciones ser la salida de emergencia por  lo cual debe se inspeccionada diariamente.                                                                                Verifique que la  puerta auxiliar interna, este fija en su sitio, su manija esta firme al igual que sus bisagras e imanes de cierre.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Nueve_Espacio_Infinito" id="chequeo_Nueve_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Espacio_Infinito) border-green-600 @else  @error('chequeo_Nueve_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Nueve_Espacio_Infinito)
                    @error('chequeo_Nueve_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Diez_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar que no se encuentren objetos que interfieran con la apertura de la puerta y la ágil circulación de los usuarios en caso de una evacuación.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Diez_Espacio_Infinito" id="chequeo_Diez_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Espacio_Infinito) border-green-600 @else  @error('chequeo_Diez_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Diez_Espacio_Infinito)
                    @error('chequeo_Diez_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class=" w-full group">
                <x-label for="chequeo_Once_Espacio_Infinito" class="mb-2">
                    {{ __('Verificar el correcto estado de pulsadores y mandos de control.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Once_Espacio_Infinito" id="chequeo_Once_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Espacio_Infinito) border-green-600 @else  @error('chequeo_Once_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Once_Espacio_Infinito)
                    @error('chequeo_Once_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Doce_Espacio_Infinito" class="mb-2">
                    {{ __('Se deben apagar los equipos encendidos para la revisión  y se deben dejar cerradas con llave las puertas de acceso externo de la atracción.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Doce_Espacio_Infinito" id="chequeo_Doce_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Espacio_Infinito) border-green-600 @else  @error('chequeo_Doce_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Doce_Espacio_Infinito)
                    @error('chequeo_Doce_Espacio_Infinito')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Trece_Espacio_Infinito" class="mb-2">
                    {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Trece_Espacio_Infinito" id="chequeo_Trece_Espacio_Infinito"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Espacio_Infinito) border-green-600 @else  @error('chequeo_Trece_Espacio_Infinito') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Trece_Espacio_Infinito)
                    @error('chequeo_Trece_Espacio_Infinito')
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

        <div class="w-full group flex justify-end gap-2">

            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Enviar</button>

        </div>
    </form>
</div>
