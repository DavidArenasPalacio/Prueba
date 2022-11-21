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
                    <x-label for="chequeo_Uno_Simulador_Extremo" class="mb-2">
                        {{ __('Perimetro: verificar que no haya fisuras, roturas en la paredes, reja del compresor sin daños y cerrada con candado, cerramiento debidamente ubicado de los aires acondicionados.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Simulador_Extremo" id="chequeo_Uno_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Simulador_Extremo) border-green-600 @else @error('chequeo_Uno_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Simulador_Extremo)
                        @error('chequeo_Uno_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Simulador_Extremo" class="mb-2">
                        {{ __('Enfiladeros: verificar que los postes esten firmes, tornilleria completa, soldadura y pintura en buen estado') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Simulador_Extremo" id="chequeo_Dos_Simulador_Extremo"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Simulador_Extremo) border-green-600 @else @error('chequeo_Dos_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Simulador_Extremo)
                        @error('chequeo_Dos_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar la ausencia de elementos extraños en la zona, escombros, basuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Simulador_Extremo" id="chequeo_Tres_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Simulador_Extremo) border-green-600 @else  @error('chequeo_Tres_Simulador_Extremo') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Simulador_Extremo)
                        @error('chequeo_Tres_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar que las láminas se encuentran ajustadas con sus respectivos dispositivos de sujeción y están correctamente ubicadas. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Simulador_Extremo" id="chequeo_Cuatro_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Simulador_Extremo) border-green-600 @else  @error('chequeo_Cuatro_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Simulador_Extremo)
                        @error('chequeo_Cuatro_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar las puertas y seguros funcionando ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Simulador_Extremo" id="chequeo_Cinco_Simulador_Extremo"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Simulador_Extremo) border-green-600 @else  @error('chequeo_Cinco_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Simulador_Extremo)
                        @error('chequeo_Cinco_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Simulador_Extremo" class="mb-2">
                        {{ __('Revise que los avisos están bien colocados en su lugar (entrada y salida)') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Simulador_Extremo" id="chequeo_Seis_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Simulador_Extremo) border-green-600 @else  @error('chequeo_Seis_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Simulador_Extremo)
                        @error('chequeo_Seis_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Simulador_Extremo" class="mb-2">
                        {{ __(' Verificar que las paredes de la estructura estén correctamente ancladas, firmes y completas en su sitio, sin agujeros ni fisuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Simulador_Extremo" id="chequeo_Siete_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Simulador_Extremo) border-green-600 @else  @error('chequeo_Siete_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Simulador_Extremo)
                        @error('chequeo_Siete_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>




                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar que no halla ingreso de agua desde el techo o desde el piso.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Simulador_Extremo" id="chequeo_Ocho_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ocho_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Simulador_Extremo)
                        @error('chequeo_Ocho_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Simulador_Extremo" class="mb-2">
                        {{ __('Inspeccionar buen estado de las juntas soldadas en platinas y las horquillas de soporte en los actuadores, las cuales no deben tener fisuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Simulador_Extremo" id="chequeo_Nueve_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Simulador_Extremo) border-green-600 @else  @error('chequeo_Nueve_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Simulador_Extremo)
                        @error('chequeo_Nueve_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar buen estado estructural de la silla y el ajuste de los tornillos en platina y horquillas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Simulador_Extremo" id="chequeo_Diez_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Simulador_Extremo) border-green-600 @else  @error('chequeo_Diez_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Simulador_Extremo)
                        @error('chequeo_Diez_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar costuras y las salidas de agua y aire se encuentren sin obstrucción o filos. que cada cinturon este en buen estado y ejecute su funcionamiento adecuado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Simulador_Extremo" id="chequeo_Once_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Simulador_Extremo) border-green-600 @else  @error('chequeo_Once_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Simulador_Extremo)
                        @error('chequeo_Once_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>



                <div class="w-full group">
                    <x-label for="chequeo_Doce_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar que el tanque de agua se encuentra lleno y a nivel.
                                                                                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Simulador_Extremo" id="chequeo_Doce_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Simulador_Extremo) border-green-600 @else  @error('chequeo_Doce_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Simulador_Extremo)
                        @error('chequeo_Doce_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar que las mangueras se encuentren posicionadas de manera adecauda
                                                                                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Simulador_Extremo" id="chequeo_Trece_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Simulador_Extremo) border-green-600 @else  @error('chequeo_Trece_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Simulador_Extremo)
                        @error('chequeo_Trece_Simulador_Extremo')
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
                    <x-label for="chequeo_Catorce_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar que las sillas tengan en buen estado la cojinería y los cinturones') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Simulador_Extremo" id="chequeo_Catorce_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Simulador_Extremo) border-green-600 @else  @error('chequeo_Catorce_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Simulador_Extremo)
                        @error('chequeo_Catorce_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar el compresor, que no tenga obstrucción en la succión y la salida de aire y desactivar el paro de emergencia, verificar presiones a 8Bar.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Simulador_Extremo" id="chequeo_Quince_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Simulador_Extremo) border-green-600 @else  @error('chequeo_Quince_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Simulador_Extremo)
                        @error('chequeo_Quince_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="horas_operacion_compresor" class="mb-2">
                        {{ __('Anotar las horas de operación del compresor: ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <input type="text" wire:model="horas_operacion_compresor"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($horas_operacion_compresor) border-green-600 @else  @error('horas_operacion_compresor') border-rose-600 @enderror @endif"
                    placeholder="Anotar las horas de operación del compresor">
                    @if (!$horas_operacion_compresor)
                        @error('horas_operacion_compresor')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar que cada actuador este bien sujeto a cada silla y al piso, racores y manquegras instaladas, que el vástago del piston no presente fisuras y/o deformaciones.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Simulador_Extremo"
                    id="chequeo_Dieciseis_Simulador_Extremo"
                    class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Simulador_Extremo) border-green-600 @else  @error('chequeo_Dieciseis_Simulador_Extremo') border-rose-600 @enderror @endif">
                    <option value="" default selected>-- Seleccione --</option>

                    @foreach ($calificaciones as $calificacion)
                        <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                        </option>
                    @endforeach
                </select>
                    @if (!$chequeo_Dieciseis_Simulador_Extremo)
                        @error('chequeo_Dieciseis_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar nivel de aceite del compresor, en caso de adicionar usar aceite Ingersollrand Ultra Coolant.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Simulador_Extremo"
                        id="chequeo_Diecisiete_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Simulador_Extremo) border-green-600 @else  @error('chequeo_Diecisiete_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Simulador_Extremo)
                        @error('chequeo_Diecisiete_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar la impermeabilidad del Rack, que no halla objetos extraños.
                        ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Simulador_Extremo"
                        id="chequeo_Dieciocho_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Simulador_Extremo) border-green-600 @else  @error('chequeo_Dieciocho_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Simulador_Extremo)
                        @error('chequeo_Dieciocho_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar que los elementos eléctricos estén completos y conectados en sus respectivas borneras y cajas electricas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Simulador_Extremo"
                        id="chequeo_Diecinueve_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Simulador_Extremo) border-green-600 @else  @error('chequeo_Diecinueve_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Simulador_Extremo)
                        @error('chequeo_Diecinueve_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Simulador_Extremo" class="mb-2">
                        {{ __(' Verificar que no haya evidencia de cortos, cintas aislantes sueltas, o indicios de recalentamiento en los componentes del Rack etablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Simulador_Extremo" id="chequeo_Veinte_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Simulador_Extremo) border-green-600 @else  @error('chequeo_Veinte_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Simulador_Extremo)
                        @error('chequeo_Veinte_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar que el computador esté apagado, no presente humedades al regulador o al Rack.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Simulador_Extremo" id="chequeo_Ventiuno_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventiuno_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Simulador_Extremo)
                        @error('chequeo_Ventiuno_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Simulador_Extremo" class="mb-2">
                        {{ __('Verifique buen estado del teclado, pantalla y del mouse') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Simulador_Extremo" id="chequeo_Ventidos_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventidos_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Simulador_Extremo)
                        @error('chequeo_Ventidos_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventitres_Simulador_Extremo" class="mb-2">
                        {{ __('Verificar que los accesorios de simulación (maquina de burbujas, maquina de humo, aires acondicionados) estén bien conectados, con los liquidos correspondientes a nivel.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Simulador_Extremo"
                        id="chequeo_Ventitres_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventitres_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Simulador_Extremo)
                        @error('chequeo_Ventitres_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Simulador_Extremo" class="mb-2">
                        {{ __('Poner el swiche principal en ON y los breakets de control.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Simulador_Extremo"
                        id="chequeo_Venticuatro_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Simulador_Extremo) border-green-600 @else  @error('chequeo_Venticuatro_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Simulador_Extremo)
                        @error('chequeo_Venticuatro_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Simulador_Extremo" class="mb-2">
                        {{ __(' Ir al compresor  verificando que el pulsador de paro de emergencia esté desactivado y resetearlo en 0, contar 3 segundos y presionar ON en I, debe llegar a presión 120 psi') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Simulador_Extremo"
                        id="chequeo_Venticinco_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Simulador_Extremo) border-green-600 @else  @error('chequeo_Venticinco_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Simulador_Extremo)
                        @error('chequeo_Venticinco_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiseis_Simulador_Extremo" class="mb-2">
                        {{ __('Revisar funcionamiento de maquinas de simulación (maquina de burbujas, maquina de humo, aires acondicionados)') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Simulador_Extremo"
                        id="chequeo_Ventiseis_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventiseis_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Simulador_Extremo)
                        @error('chequeo_Ventiseis_Simulador_Extremo')
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
                    <x-label for="chequeo_Ventisiete_Simulador_Extremo" class="mb-2">
                        {{ __('Ponga en marcha la atracción haciendo uso de la pantalla el teclado y el mouse si este lo presenta.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Simulador_Extremo"
                        id="chequeo_Ventisiete_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventisiete_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Simulador_Extremo)
                        @error('chequeo_Ventisiete_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Simulador_Extremo" class="mb-2">
                        {{ __('Se debe hacer al menos un ciclo completo e ir verificando que los movimientos de las sillas concuerden con la simulación, al igual que cada accesorio de simulación en conjunto con la adecuada visión en 3D de la pelicula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Simulador_Extremo" id="chequeo_Ventiocho_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventiocho_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Simulador_Extremo)
                        @error('chequeo_Ventiocho_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                 <div class="w-full group">
                    <x-label for="chequeo_Ventinueve_Simulador_Extremo" class="mb-2">
                        {{ __(' Verifique que no haya presencia de ruidos extraños en partes móviles y vibraciones fuertes durante su funcionamiento o exceso de movimiento en las sillas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Simulador_Extremo" id="chequeo_Ventinueve_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Simulador_Extremo) border-green-600 @else  @error('chequeo_Ventinueve_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Simulador_Extremo)
                        @error('chequeo_Ventinueve_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Simulador_Extremo" class="mb-2">
                        {{ __('Reiniciar un ciclo y accionar el botón de paro de emergencia (INVIO) en el teclado. La atracción debe detenerse rápida y suavemente, luego desactive el paro e ingrese a estado manual para llevar todo a punto cero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Simulador_Extremo" id="chequeo_Treinta_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Simulador_Extremo) border-green-600 @else  @error('chequeo_Treinta_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Simulador_Extremo)
                        @error('chequeo_Treinta_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Simulador_Extremo" class="mb-2">
                        {{ __('Accione paro de emergencia y apague el computador y apague el breaker general y el compresor.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Simulador_Extremo" id="chequeo_Treintauno_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Simulador_Extremo) border-green-600 @else  @error('chequeo_Treintauno_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Simulador_Extremo)
                        @error('chequeo_Treintauno_Simulador_Extremo')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Simulador_Extremo" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado,registrar: Fecha y hora de la inspección, estado del equipo. (si puede o no abrir al público), Nombre legible, Firma y Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Simulador_Extremo" id="chequeo_Treintados_Simulador_Extremo"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Simulador_Extremo) border-green-600 @else  @error('chequeo_Treintados_Simulador_Extremo') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Simulador_Extremo)
                        @error('chequeo_Treintados_Simulador_Extremo')
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
