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
                <x-label for="chequeo_Uno_Polar" class="mb-2">
                    {{ __('Verificar la ausencia de elementos extraños en la zona, escombros, basuras.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Uno_Polar" id="chequeo_Uno_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Polar) border-green-600 @else @error('chequeo_Uno_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>

                @if (!$chequeo_Uno_Polar)
                    @error('chequeo_Uno_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Dos_Polar" class="mb-2">
                    {{ __('Verificar que los enfiladeros estén anclados, firmes en su sitio, en buen estado, que no posean fisuras, ni superficies cortantes, ni corrosión.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Dos_Polar" id="chequeo_Dos_Polar"
                    class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Polar) border-green-600 @else @error('chequeo_Dos_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>
                @if (!$chequeo_Dos_Polar)
                    @error('chequeo_Dos_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Tres_Polar" class="mb-2">
                    {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Tres_Polar" id="chequeo_Tres_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Polar) border-green-600 @else  @error('chequeo_Tres_Polar') border-rose-600 @enderror @endif ">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                    @endforeach
                </select>
                @if (!$chequeo_Tres_Polar)
                    @error('chequeo_Tres_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Cuatro_Polar" class="mb-2">
                    {{ __('Verifique que el soporte de los costales este fijo y anclado firme en su sitio') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Cuatro_Polar" id="chequeo_Cuatro_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Polar) border-green-600 @else  @error('chequeo_Cuatro_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Cuatro_Polar)
                    @error('chequeo_Cuatro_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Cinco_Polar" class="mb-2">
                    {{ __('Verifique que la banda antideslizante este en buen estado, fija al piso y sin irregularidades que puedan generar tropiezos.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Cinco_Polar" id="chequeo_Cinco_Polar"
                    class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Polar) border-green-600 @else  @error('chequeo_Cinco_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Cinco_Polar)
                    @error('chequeo_Cinco_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class="w-full group">
                <x-label for="chequeo_Seis_Polar" class="mb-2">
                    {{ __('Verifique las laminas del piso de la rampa, estas debe estar completas y en buen estado, con todos sus remaches y firme a la estructura') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Seis_Polar" id="chequeo_Seis_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Polar) border-green-600 @else  @error('chequeo_Seis_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>

                @if (!$chequeo_Seis_Polar)
                    @error('chequeo_Seis_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Siete_Polar" class="mb-2">
                    {{ __('Inspeccionar el buen estado de los pasamanos, deben estar firmes en su sitio y no deben tener superficies cortantes.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Siete_Polar" id="chequeo_Siete_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Polar) border-green-600 @else  @error('chequeo_Siete_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Siete_Polar)
                    @error('chequeo_Siete_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Ocho_Polar" class="mb-2">
                    {{ __(' Revisar que la estructura de soporte del letrero de la atracción este correctamente anclada, firme en su sitio y libre de corrosión.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Ocho_Polar" id="chequeo_Ocho_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Polar) border-green-600 @else  @error('chequeo_Ocho_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Ocho_Polar)
                    @error('chequeo_Ocho_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class=" w-full group">
                <x-label for="chequeo_Nueve_Polar" class="mb-2">
                    {{ __('Verificar que los pasadores tipo Beta estén ubicados correctamente en los pines de la estructura') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Nueve_Polar" id="chequeo_Nueve_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Polar) border-green-600 @else  @error('chequeo_Nueve_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Nueve_Polar)
                    @error('chequeo_Nueve_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Diez_Polar" class="mb-2">
                    {{ __(' Verificar que los bloques de madera de apoyo en los marcos estén en buenas condiciones') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Diez_Polar" id="chequeo_Diez_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Polar) border-green-600 @else  @error('chequeo_Diez_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Diez_Polar)
                    @error('chequeo_Diez_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>

            <div class=" w-full group">
                <x-label for="chequeo_Once_Polar" class="mb-2">
                    {{ __('Verificar que los pines estén ajustados a la estructura y no tengan corrosión') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Once_Polar" id="chequeo_Once_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Polar) border-green-600 @else  @error('chequeo_Once_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Once_Polar)
                    @error('chequeo_Once_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Doce_Polar" class="mb-2">
                    {{ __('Verificar que las superficies de los deslizaderos estén completas, sin fisuras o superficies corto pulsantes.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Doce_Polar" id="chequeo_Doce_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Polar) border-green-600 @else  @error('chequeo_Doce_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Doce_Polar)
                    @error('chequeo_Doce_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Trece_Polar" class="mb-2">
                    {{ __('Revisar que la pintura se conserve en buen estado, la atracción debe conservar una buena apariencia estética.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Trece_Polar" id="chequeo_Trece_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Polar) border-green-600 @else  @error('chequeo_Trece_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Trece_Polar)
                    @error('chequeo_Trece_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif

            </div>
            <div class="w-full group">
                <x-label for="chequeo_Catorce_Polar" class="mb-2">
                    {{ __(' Revisar estado de las juntas  y uniones de la fibra de vidrio, garantizando la ausencia de fisuras o defectos en la superficie que generen un riesgo para el usuario') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Catorce_Polar" id="chequeo_Catorce_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Polar) border-green-600 @else  @error('chequeo_Catorce_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Catorce_Polar)
                    @error('chequeo_Catorce_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Quince_Polar" class="mb-2">
                    {{ __('Revisar estado de la pintura y estructura en la plataforma de llegada, donde no deben haber fisuras ni desprendimientos de pintura') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Quince_Polar" id="chequeo_Quince_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Polar) border-green-600 @else  @error('chequeo_Quince_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Quince_Polar)
                    @error('chequeo_Quince_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Dieciseis_Polar" class="mb-2">
                    {{ __(' Revisar el estado de la fibra del tobogán por debajo de la estructura, la cual no debe tener presencia de humedad ni debe haber desgaste') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Dieciseis_Polar" id="chequeo_Dieciseis_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Polar) border-green-600 @else  @error('chequeo_Dieciseis_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Dieciseis_Polar)
                    @error('chequeo_Dieciseis_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Diecisiete_Polar" class="mb-2">
                    {{ __('Revisar que la colchoneta se encuentre en buen estado') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Diecisiete_Polar" id="chequeo_Diecisiete_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Polar) border-green-600 @else  @error('chequeo_Diecisiete_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Diecisiete_Polar)
                    @error('chequeo_Diecisiete_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Dieciocho_Polar" class="mb-2">
                    {{ __('Verificar que todos los reflectores de la atracción enciendan.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Dieciocho_Polar" id="chequeo_Dieciocho_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Polar) border-green-600 @else  @error('chequeo_Dieciocho_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Dieciocho_Polar)
                    @error('chequeo_Dieciocho_Polar')
                        <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                    @enderror
                @endif
            </div>
            <div class="w-full group">
                <x-label for="chequeo_Diecinueve_Polar" class="mb-2">
                    {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                    <span class="text-red-500">*</span>
                </x-label>

                <select wire:model="chequeo_Diecinueve_Polar" id="chequeo_Diecinueve_Polar"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Polar) border-green-600 @else  @error('chequeo_Diecinueve_Polar') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                @if (!$chequeo_Diecinueve_Polar)
                    @error('chequeo_Diecinueve_Polar')
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
