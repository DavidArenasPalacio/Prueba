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
                    <x-label for="chequeo_Uno_Mini_Crash" class="mb-2">
                        {{ __('En el gabinete de potencia verifique antes de iniciar la revisión que el interruptor general este en posición de apagado. Luego encienda la atracción para operar los vehículos') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Mini_Crash" id="chequeo_Uno_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Mini_Crash) border-green-600 @else @error('chequeo_Uno_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Mini_Crash)
                        @error('chequeo_Uno_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Mini_Crash" class="mb-2">
                        {{ __('Verificar la ausencia de elementos extraños en la zona, escombros.
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Mini_Crash" id="chequeo_Dos_Mini_Crash"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Mini_Crash) border-green-600 @else @error('chequeo_Dos_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Mini_Crash)
                        @error('chequeo_Dos_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los enfiladeros estén anclados, firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Mini_Crash" id="chequeo_Tres_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Mini_Crash) border-green-600 @else  @error('chequeo_Tres_Mini_Crash') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Mini_Crash)
                        @error('chequeo_Tres_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los cerramientos estén correctamente ubicados, firmes en su sitio y que no posean superficies cortante ni corrosión. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Mini_Crash" id="chequeo_Cuatro_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Mini_Crash) border-green-600 @else  @error('chequeo_Cuatro_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Mini_Crash)
                        @error('chequeo_Cuatro_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Mini_Crash" class="mb-2">
                        {{ __('Verificar el piso de los alrededores en busca de pines o elementos que puedan pertenecer al equipo, si encuentra alguno, cerciórese que no pertenezca al equipo e informe a los revisores de equipos próximos para descartar que no falte en uno de ellos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Mini_Crash" id="chequeo_Cinco_Mini_Crash"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Mini_Crash) border-green-600 @else  @error('chequeo_Cinco_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Mini_Crash)
                        @error('chequeo_Cinco_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Mini_Crash" class="mb-2">
                        {{ __('Realizar inspección en la estructura del techo y la cenefa la cual no puede tener oxidación ni deformación') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Mini_Crash" id="chequeo_Seis_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Mini_Crash) border-green-600 @else  @error('chequeo_Seis_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Mini_Crash)
                        @error('chequeo_Seis_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Mini_Crash" class="mb-2">
                        {{ __('Verificar que la malla se encuentre tensionada correctamente y con los tensores completos ubicados de manera adecuada') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Mini_Crash" id="chequeo_Siete_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Mini_Crash) border-green-600 @else  @error('chequeo_Siete_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Mini_Crash)
                        @error('chequeo_Siete_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los pines de la estructura cuenten con los pasadores que se debe usar por norma y que la ubicación de estos sea la correcta') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Mini_Crash" id="chequeo_Ocho_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Mini_Crash) border-green-600 @else  @error('chequeo_Ocho_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Mini_Crash)
                        @error('chequeo_Ocho_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Mini_Crash" class="mb-2">
                        {{ __('Inspeccionar que la estructura de la cenefa se encuentre bien posicionada y la pintura en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Mini_Crash" id="chequeo_Nueve_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Mini_Crash) border-green-600 @else  @error('chequeo_Nueve_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Mini_Crash)
                        @error('chequeo_Nueve_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Mini_Crash" class="mb-2">
                        {{ __(' Verificar que la cubierta del techo en la atracción esté en buen estado, no presente luces o aberturas que puedan generar filtraciones de agua.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Mini_Crash" id="chequeo_Diez_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Mini_Crash) border-green-600 @else  @error('chequeo_Diez_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Mini_Crash)
                        @error('chequeo_Diez_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                
            </div>

            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Pista</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class=" w-full group">
                    <x-label for="chequeo_Once_Mini_Crash" class="mb-2">
                        {{ __(' Revise que esté correctamente fijada a la estructura soporte.
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Mini_Crash" id="chequeo_Once_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Mini_Crash) border-green-600 @else  @error('chequeo_Once_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Mini_Crash)
                        @error('chequeo_Once_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Doce_Mini_Crash" class="mb-2">
                        {{ __('Las láminas del piso deben estar niveladas, no poseer grietas por desgaste y sus juntas no presentan una apertura superior a 5 mm.  ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Mini_Crash" id="chequeo_Doce_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Mini_Crash) border-green-600 @else  @error('chequeo_Doce_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Mini_Crash)
                        @error('chequeo_Doce_Mini_Crash')
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
                    <x-label for="chequeo_Trece_Mini_Crash" class="mb-2">
                        {{ __('Verifique que las cubiertas de las columnas de soporte estén fijados firmemente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Mini_Crash" id="chequeo_Trece_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Mini_Crash) border-green-600 @else  @error('chequeo_Trece_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Mini_Crash)
                        @error('chequeo_Trece_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif

                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Catorce_Mini_Crash" class="mb-2">
                        {{ __('Verifique que los parachoques perimetrales de la pista estén bien posicionados y ajustados , en buen estado tanto físico como estético') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Mini_Crash" id="chequeo_Catorce_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Mini_Crash) border-green-600 @else  @error('chequeo_Catorce_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Mini_Crash)
                        @error('chequeo_Catorce_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Mini_Crash" class="mb-2">
                        {{ __(' Verificar que la pista no posea sustancias que impidan la conductividad eléctrica con la rueda metálica del carro') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Mini_Crash" id="chequeo_Quince_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Mini_Crash) border-green-600 @else  @error('chequeo_Quince_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Mini_Crash)
                        @error('chequeo_Quince_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Mini_Crash" class="mb-2">
                        {{ __('Verificar que en la entrada y salida de la pista haya cinta antideslizante que evite incidentes al terminar cada turno') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Mini_Crash" id="chequeo_Dieciseis_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Mini_Crash) border-green-600 @else  @error('chequeo_Dieciseis_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Mini_Crash)
                        @error('chequeo_Dieciseis_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
               
            </div>

            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Vehículos</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Mini_Crash" class="mb-2">
                        {{ __('Verificar  la presión de aire en el parachoques. El parachoques debe estar en buen estado, sin desgastes excesivos en su superficie.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Mini_Crash" id="chequeo_Diecisiete_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Mini_Crash) border-green-600 @else  @error('chequeo_Diecisiete_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Mini_Crash)
                        @error('chequeo_Diecisiete_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Mini_Crash" class="mb-2">
                        {{ __('Verificar el correcto estado de los cinturones de seguridad 2 por cada carro y sus protectores') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Mini_Crash" id="chequeo_Dieciocho_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Mini_Crash) border-green-600 @else  @error('chequeo_Dieciocho_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Mini_Crash)
                        @error('chequeo_Dieciocho_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Mini_Crash" class="mb-2">
                        {{ __('Verificar el buen estado de las láminas de acrílico y las luces
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Mini_Crash" id="chequeo_Diecinueve_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Mini_Crash) border-green-600 @else  @error('chequeo_Diecinueve_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Mini_Crash)
                        @error('chequeo_Diecinueve_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Mini_Crash" class="mb-2">
                        {{ __('Verificar que el conjunto de tubo y trole estén en buen estado, además que la varilla chipa no esté desgastada. El resorte debe garantizar el contacto trole-malla, y no debe estar deformado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Mini_Crash" id="chequeo_Veinte_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Mini_Crash) border-green-600 @else  @error('chequeo_Veinte_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Mini_Crash)
                        @error('chequeo_Veinte_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Mini_Crash" class="mb-2">
                        {{ __('Verificar que la espuma y tapizado de los asientos se encuentre en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Mini_Crash" id="chequeo_Ventiuno_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Mini_Crash) border-green-600 @else  @error('chequeo_Ventiuno_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Mini_Crash)
                        @error('chequeo_Ventiuno_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Mini_Crash" class="mb-2">
                        {{ __('Verificar que no se encuentren cables sueltos al interior de los carros ni elementos extraños') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Mini_Crash" id="chequeo_Ventidos_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Mini_Crash) border-green-600 @else  @error('chequeo_Ventidos_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Mini_Crash)
                        @error('chequeo_Ventidos_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Tablero de potencia</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_Mini_Crash" class="mb-2">
                        {{ __('Verificar el buen estado de la chapa de seguridad y abra los tablero') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Mini_Crash" id="chequeo_Ventitres_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Mini_Crash) border-green-600 @else  @error('chequeo_Ventitres_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Mini_Crash)
                        @error('chequeo_Ventitres_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Mini_Crash" class="mb-2">
                        {{ __('Verificar la impermeabilidad de los tableros.
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Mini_Crash" id="chequeo_Venticuatro_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Mini_Crash) border-green-600 @else  @error('chequeo_Venticuatro_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Mini_Crash)
                        @error('chequeo_Venticuatro_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los tableros de potencia estén limpios y que no hayan elementos extraños, suciedad, insectos o desechos de estos en su interior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Mini_Crash" id="chequeo_Venticinco_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Mini_Crash) border-green-600 @else  @error('chequeo_Venticinco_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Mini_Crash)
                        @error('chequeo_Venticinco_Mini_Crash')
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
                    <x-label for="chequeo_Ventiseis_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los elementos eléctricos estén completos y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Mini_Crash" id="chequeo_Ventiseis_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Mini_Crash) border-green-600 @else  @error('chequeo_Ventiseis_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Mini_Crash)
                        @error('chequeo_Ventiseis_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventisiete_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los cables estén conectados correctamente en sus respectivas borneras, ordenados y protegidos por canaletas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Mini_Crash" id="chequeo_Ventisiete_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Mini_Crash) border-green-600 @else  @error('chequeo_Ventisiete_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Mini_Crash)
                        @error('chequeo_Ventisiete_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Mini_Crash" class="mb-2">
                        {{ __('Verificar que no haya evidencia de cortos, cintas aislantes sueltas, o indicios de recalentamiento en los componentes del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Mini_Crash" id="chequeo_Ventiocho_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Mini_Crash) border-green-600 @else  @error('chequeo_Ventiocho_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Mini_Crash)
                        @error('chequeo_Ventiocho_Mini_Crash')
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
                    <x-label for="chequeo_Ventinueve_Mini_Crash" class="mb-2">
                        {{ __('Verificar que esté firme en su sitio.
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Mini_Crash" id="chequeo_Ventinueve_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Mini_Crash) border-green-600 @else  @error('chequeo_Ventinueve_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Mini_Crash)
                        @error('chequeo_Ventinueve_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Mini_Crash" class="mb-2">
                        {{ __('Verificar el correcto estado de los pulsadores y mandos del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Mini_Crash" id="chequeo_Treinta_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Mini_Crash) border-green-600 @else  @error('chequeo_Treinta_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Mini_Crash)
                        @error('chequeo_Treinta_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Energizar la atracción</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Mini_Crash" class="mb-2">
                        {{ __('Se dirige al tablero de Potencia, acciona   el interruptor principal y los breakers restantes de control e iluminación.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Mini_Crash" id="chequeo_Treintauno_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Mini_Crash) border-green-600 @else  @error('chequeo_Treintauno_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Mini_Crash)
                        @error('chequeo_Treintauno_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Mini_Crash" class="mb-2">
                        {{ __('Verificar los voltajes entre fases haciendo uso del selector dispuesto para tal fin. Con esto se identifica que las tres fases necesarias para el funcionamiento de la atracción, estén disponibles en el tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Mini_Crash" id="chequeo_Treintados_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Mini_Crash) border-green-600 @else  @error('chequeo_Treintados_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Mini_Crash)
                        @error('chequeo_Treintados_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="VRN" class="mb-2">
                        {{ __('V RN:') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <input type="text" wire:model="VRN"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($VRN) border-green-600 @else  @error('VRN') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">
                    @if (!$VRN)
                        @error('VRN')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="VTR" class="mb-2">
                        {{ __('V TR:') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <input type="text" wire:model="VTR"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($VTR) border-green-600 @else  @error('VTR') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">
                    @if (!$VTR)
                        @error('VTR')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="VRS" class="mb-2">
                        {{ __('VRS:') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <input type="text" wire:model="VRS"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($VRS) border-green-600 @else  @error('VRS') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">
                    @if (!$VRS)
                        @error('VRS')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="VST" class="mb-2">
                        {{ __('VST:') }}
                        <span class="text-red-500">*</span>
                    </x-label>
                    <input type="text" wire:model="VST"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($VST) border-green-600 @else  @error('VST') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">
                    @if (!$VST)
                        @error('VST')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_Mini_Crash" class="mb-2">
                        {{ __('Verificar que los ventiladores del tablero de potencia estén  funcionando; especialmente  el ventilador del rectificador.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_Mini_Crash" id="chequeo_Treintatres_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_Mini_Crash) border-green-600 @else  @error('chequeo_Treintatres_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_Mini_Crash)
                        @error('chequeo_Treintatres_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacuatro_Mini_Crash" class="mb-2">
                        {{ __(' En el tablero de control se abre el interruptor  tipo llave y se desactiva la emergencia.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacuatro_Mini_Crash" id="chequeo_Treintacuatro_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacuatro_Mini_Crash) border-green-600 @else  @error('chequeo_Treintacuatro_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacuatro_Mini_Crash)
                        @error('chequeo_Treintacuatro_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintacinco_Mini_Crash" class="mb-2">
                        {{ __('En el tablero de control, verificar el correcto funcionamiento de los pulsadores y codillos dispuestos para el accionamiento de la atracción.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintacinco_Mini_Crash" id="chequeo_Treintacinco_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintacinco_Mini_Crash) border-green-600 @else  @error('chequeo_Treintacinco_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintacinco_Mini_Crash)
                        @error('chequeo_Treintacinco_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaseis_Mini_Crash" class="mb-2">
                        {{ __(' Verificar que todas las luces  de la atracción enciendan, incluyendo luces piloto, techo, columnas, luces delanteras y traseras de cada vehículo y manguera exterior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaseis_Mini_Crash" id="chequeo_Treintaseis_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaseis_Mini_Crash) border-green-600 @else  @error('chequeo_Treintaseis_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaseis_Mini_Crash)
                        @error('chequeo_Treintaseis_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
        @endif

        {{--  form 4 --}}
        @if ($currentPage === 4)
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Realizar prueba en vacío</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Treintasiete_Mini_Crash" class="mb-2">
                        {{ __('Verificar que el temporizador este en 3 minutos y que se apague cumplido el tiempo.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintasiete_Mini_Crash" id="chequeo_Treintasiete_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintasiete_Mini_Crash) border-green-600 @else  @error('chequeo_Treintasiete_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintasiete_Mini_Crash)
                        @error('chequeo_Treintasiete_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintaocho_Mini_Crash" class="mb-2">
                        {{ __(' Dar  encendido a la pista del pulsador verde, verificar si las  luces de los carros se accionaron y que no hayan  carros directos') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintaocho_Mini_Crash" id="chequeo_Treintaocho_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintaocho_Mini_Crash) border-green-600 @else  @error('chequeo_Treintaocho_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintaocho_Mini_Crash)
                        @error('chequeo_Treintaocho_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="tablero_potencia_voltaje" class="mb-2">
                        {{ __(' En el tablero de potencia verifique el medidor de voltaje de salida, este debe marcar 75 voltios con los vehículos en reposo. Registre el voltaje observado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <input type="text" wire:model="tablero_potencia_voltaje"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($tablero_potencia_voltaje) border-green-600 @else  @error('tablero_potencia_voltaje') border-rose-600 @enderror @endif"
                        placeholder="Ingrese las horas de operación que hay en el display del tablero. ">
                    @if (!$tablero_potencia_voltaje)
                        @error('tablero_potencia_voltaje')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintanueve_Mini_Crash" class="mb-2">
                        {{ __('Pruebe cada carro, Verifique que el pedal funcione correctamente y al accionarlo el carro se ponga en movimiento  que no se presenten ruidos extraños , este atento a vibraciones fuertes durante su funcionamiento y que la volante sea suave y maniobrable,  la velocidad real debe corresponder con la ajustada en el gabinete de potencia. En caso de encontrar ruido o mal funcionamiento voltear carro y revisar anormalidad para programar correctivo inmediato') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintanueve_Mini_Crash" id="chequeo_Treintanueve_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintanueve_Mini_Crash) border-green-600 @else  @error('chequeo_Treintanueve_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintanueve_Mini_Crash)
                        @error('chequeo_Treintanueve_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es
                                obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarenta_Mini_Crash" class="mb-2">
                        {{ __('Verificar que al accionar la emergencia se desactive la pista y paren todos los carros.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarenta_Mini_Crash" id="chequeo_Cuarenta_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarenta_Mini_Crash) border-green-600 @else  @error('chequeo_Cuarenta_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarenta_Mini_Crash)
                        @error('chequeo_Cuarenta_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentauno_Mini_Crash" class="mb-2">
                        {{ __(' Pare la atracción haciendo uso del pulsador rojo (paro), deje accionado el botón de emergencia, gire y retire la llave, no  desenergize los tableros, recuerde dejar los tableros de potencia asegurados y cerrados con llave.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentauno_Mini_Crash" id="chequeo_Cuarentauno_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentauno_Mini_Crash) border-green-600 @else  @error('chequeo_Cuarentauno_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentauno_Mini_Crash)
                        @error('chequeo_Cuarentauno_Mini_Crash')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cuarentados_Mini_Crash" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuarentados_Mini_Crash" id="chequeo_Cuarentados_Mini_Crash"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Cuarentados_Mini_Crash) border-green-600 @else  @error('chequeo_Cuarentados_Mini_Crash') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Cuarentados_Mini_Crash)
                        @error('chequeo_Cuarentados_Mini_Crash')
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

            @if ($currentPage > 1 && $currentPage <= 4)
                <button type="button" wire:click="goToPreviousPage()"
                    class="inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Atrás</button>
            @endif

            @if ($currentPage >= 1 && $currentPage <= 3)
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5"
                    wire:click="goToNextPage()">Siguiente</button>
            @endif

            @if ($currentPage === 4)
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Enviar</button>
            @endif

        </div>
    </form>
</div>
