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
                    <x-label for="chequeo_Uno_Avion" class="mb-2">
                        {{ __('En el gabinete eléctrico verifique que deben estar encendidos los breakers general, hidráulico, tomas y aire') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Uno_Avion" id="chequeo_Uno_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Uno_Avion) border-green-600 @else @error('chequeo_Uno_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Uno_Avion)
                        @error('chequeo_Uno_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Dos_Avion" class="mb-2">
                        {{ __('Verificar y remover elementos extraños en la zona como escombros y basuras.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dos_Avion" id="chequeo_Dos_Avion"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l  @if ($chequeo_Dos_Avion) border-green-600 @else @error('chequeo_Dos_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dos_Avion)
                        @error('chequeo_Dos_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Tres_Avion" class="mb-2">
                        {{ __('Verificar que el enfiladero esté anclado, firme, en buen estado, que no posean fisuras, corrosión ni superficies cortantes') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Tres_Avion" id="chequeo_Tres_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full    @if ($chequeo_Tres_Avion) border-green-600 @else  @error('chequeo_Tres_Avion') border-rose-600 @enderror @endif ">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Tres_Avion)
                        @error('chequeo_Tres_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Cuatro_Avion" class="mb-2">
                        {{ __('Revisar que los reflectores  del piso estén bien ancladas y no posean la guarda quebrada, verificar que se en cuenten las dos cámaras  ubicadas en cada ala y que estén en su posición correcta. Revisar que los bombillos de las alas estén ajustados. ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cuatro_Avion" id="chequeo_Cuatro_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Cuatro_Avion) border-green-600 @else  @error('chequeo_Cuatro_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cuatro_Avion)
                        @error('chequeo_Cuatro_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Cinco_Avion" class="mb-2">
                        {{ __('Verificar que las escalas de entrada  y salida estén bien ancladas,  firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión y que el material o  cintas antideslizantes estén en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Cinco_Avion" id="chequeo_Cinco_Avion"
                        class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @if ($chequeo_Cinco_Avion) border-green-600 @else  @error('chequeo_Cinco_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Cinco_Avion)
                        @error('chequeo_Cinco_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Seis_Avion" class="mb-2">
                        {{ __('Verificar visualmente el estado de las alas, los trenes de aterrizaje y el cuerpo del avión. Validar que no hayan elementos fisurados ni con presencia de corrosión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Seis_Avion" id="chequeo_Seis_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Seis_Avion) border-green-600 @else  @error('chequeo_Seis_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>

                    @if (!$chequeo_Seis_Avion)
                        @error('chequeo_Seis_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Sistema hidráulico</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Siete_Avion" class="mb-2">
                        {{ __('Revisar que no hayan fugas de aceite en depósito de aceite y conexiones de manguera. Verificar en la mirilla del tanque que el nivel sea el indicado, que  las  mangueras no estén dobladas o presionadas con otros elementos.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Siete_Avion" id="chequeo_Siete_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Siete_Avion) border-green-600 @else  @error('chequeo_Siete_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Siete_Avion)
                        @error('chequeo_Siete_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class="w-full group">
                    <x-label for="chequeo_Ocho_Avion" class="mb-2">
                        {{ __('Revisar que los cables de conexión de válvulas y motor estén conectados y organizados, verificar que el motor posea la guarda del ventilador y gire sin problemas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ocho_Avion" id="chequeo_Ocho_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Ocho_Avion) border-green-600 @else  @error('chequeo_Ocho_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ocho_Avion)
                        @error('chequeo_Ocho_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Revisión interior</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class=" w-full group">
                    <x-label for="chequeo_Nueve_Avion" class="mb-2">
                        {{ __('Abrir puerta de la cabina y encender iluminación  interna lateral y central') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Nueve_Avion" id="chequeo_Nueve_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Nueve_Avion) border-green-600 @else  @error('chequeo_Nueve_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Nueve_Avion)
                        @error('chequeo_Nueve_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diez_Avion" class="mb-2">
                        {{ __('Sillas: están bien fijadas a la base, poseen las dos guardas  de  aluminio inferiores , las mesas están fijas a las sillas, poseen el tapizado y espumas en buen estado, verificar que cada una posea el cinturón de seguridad completo que este bien fijo  a la silla y que  funcione correctamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diez_Avion" id="chequeo_Diez_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diez_Avion) border-green-600 @else  @error('chequeo_Diez_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diez_Avion)
                        @error('chequeo_Diez_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>

                <div class=" w-full group">
                    <x-label for="chequeo_Once_Avion" class="mb-2">
                        {{ __('Verificar que las bases de las sillas se encuentren ancladas al piso que no posean fisuras o corrosión, que posean las seis ruedas por base tipo polea y que giren libremente, que estén  acopladas al eje del sistema de movimiento, que la silla se encuentre bien posicionada sobre las ruedas tipo polea. (las únicas sillas que no tienen base acoplada al sistema de movimiento  son las ultimas del primer pasillo)') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Once_Avion" id="chequeo_Once_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Once_Avion) border-green-600 @else  @error('chequeo_Once_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Once_Avion)
                        @error('chequeo_Once_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>



                <div class="w-full group">
                    <x-label for="chequeo_Doce_Avion" class="mb-2">
                        {{ __('Revisar que el tapete no se encuentre despegado o roto y que no haya presencia de hundimientos en el piso') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Doce_Avion" id="chequeo_Doce_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Doce_Avion) border-green-600 @else  @error('chequeo_Doce_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Doce_Avion)
                        @error('chequeo_Doce_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Trece_Avion" class="mb-2">
                        {{ __('Revisar que todas los reflectores del piso ,luces de las alas, lámparas  internas laterales y centrales y luces cabina funcionen correctamente') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Trece_Avion" id="chequeo_Trece_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @if ($chequeo_Trece_Avion) border-green-600 @else  @error('chequeo_Trece_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Trece_Avion)
                        @error('chequeo_Trece_Avion')
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
                    <x-label for="chequeo_Catorce_Avion" class="mb-2">
                        {{ __('Revisar que las dos bases de los actuadores hidráulicos estén bien anclados a la estructura del avión, que no posean fisuras ni corrosión, que los pasadores de cada actuador no se encuentren torcidos o deformes, que los actuadores no presenten fugas en la entrada de las mangueras o en sus retenedores.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Catorce_Avion" id="chequeo_Catorce_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Catorce_Avion) border-green-600 @else  @error('chequeo_Catorce_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Catorce_Avion)
                        @error('chequeo_Catorce_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Quince_Avion" class="mb-2">
                        {{ __('Verificar que las puertas de entrada y salida no se encuentre pegadas ni presenten ruido al moverla  y no posea corrosión') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Quince_Avion" id="chequeo_Quince_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Quince_Avion) border-green-600 @else  @error('chequeo_Quince_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Quince_Avion)
                        @error('chequeo_Quince_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciseis_Avion" class="mb-2">
                        {{ __(' Revisar que no hayan señal  de humedad o gotas en el interior ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciseis_Avion" id="chequeo_Dieciseis_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciseis_Avion) border-green-600 @else  @error('chequeo_Dieciseis_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciseis_Avion)
                        @error('chequeo_Dieciseis_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Diecisiete_Avion" class="mb-2">
                        {{ __('Revisar sujeción de guardas del sistema motriz') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecisiete_Avion" id="chequeo_Diecisiete_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecisiete_Avion) border-green-600 @else  @error('chequeo_Diecisiete_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecisiete_Avion)
                        @error('chequeo_Diecisiete_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Dieciocho_Avion" class="mb-2">
                        {{ __('Verificar que en los 4 aires acondicionados no hayan fugas de aire, verificar anclaje y conexiones eléctricas en cada uno. Encender y estar atento a que enfríen los sistemas de refrigeración') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Dieciocho_Avion" id="chequeo_Dieciocho_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Dieciocho_Avion) border-green-600 @else  @error('chequeo_Dieciocho_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Dieciocho_Avion)
                        @error('chequeo_Dieciocho_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
            </div>
            <div
                class="rounded-md mt-5 mb-5 border-gray-300 font-bold h-20 flex items-center justify-center text-2xl text-black  bg-slate-200 col-span-2 text-center">
                <p>Sistemas de potencia, audio y video</p>
            </div>
            <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
                <div class="w-full group">
                    <x-label for="chequeo_Diecinueve_Avion" class="mb-2">
                        {{ __('Verifique que  los tres amplificadores de audio estén funcionando') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Diecinueve_Avion" id="chequeo_Diecinueve_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Diecinueve_Avion) border-green-600 @else  @error('chequeo_Diecinueve_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Diecinueve_Avion)
                        @error('chequeo_Diecinueve_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Veinte_Avion" class="mb-2">
                        {{ __('Revisar que los dos productores de audio y video tengan incrustada la memoria y que posean las tres  conexiones de control y poder') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Veinte_Avion" id="chequeo_Veinte_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Veinte_Avion) border-green-600 @else  @error('chequeo_Veinte_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Veinte_Avion)
                        @error('chequeo_Veinte_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiuno_Avion" class="mb-2">
                        {{ __('Verifique que los 2 tableros de potencia y control estén limpios y que no hayan elementos extraños, suciedad, insectos o desechos de estos en su interior.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiuno_Avion" id="chequeo_Ventiuno_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiuno_Avion) border-green-600 @else  @error('chequeo_Ventiuno_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiuno_Avion)
                        @error('chequeo_Ventiuno_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Avion" class="mb-2">
                        {{ __('Verifique que los elementos eléctricos estén completos y en buen estado.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventidos_Avion" id="chequeo_Ventidos_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventidos_Avion) border-green-600 @else  @error('chequeo_Ventidos_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventidos_Avion)
                        @error('chequeo_Ventidos_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventidos_Avion" class="mb-2">
                        {{ __('Verifique que los cables estén conectados correctamente en sus respectivas borneras, ordenados y protegidos por canaletas.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventitres_Avion" id="chequeo_Ventitres_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventitres_Avion) border-green-600 @else  @error('chequeo_Ventitres_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventitres_Avion)
                        @error('chequeo_Ventitres_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticuatro_Avion" class="mb-2">
                        {{ __(' Verifique que no haya evidencia de cortos, cintas aislantes sueltas, o indicios de recalentamiento en los componentes del tablero.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticuatro_Avion" id="chequeo_Venticuatro_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticuatro_Avion) border-green-600 @else  @error('chequeo_Venticuatro_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticuatro_Avion)
                        @error('chequeo_Venticuatro_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Venticinco_Avion" class="mb-2">
                        {{ __('Verificar que los amplificadores estén prendidos,  revisar que todas las pantallas  estén prendidas y se visualice  el exterior del avión según la posición de las dos cámaras, de lo contrario configurar las  pantallas que se necesiten  con el control remoto.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Venticinco_Avion" id="chequeo_Venticinco_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Venticinco_Avion) border-green-600 @else  @error('chequeo_Venticinco_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Venticinco_Avion)
                        @error('chequeo_Venticinco_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiseis_Avion" class="mb-2">
                        {{ __(' Se debe accionar el pulsador de “Reset”, ( botón rojo ubicado al frente de los amplificadores de audio y video) que indica que el sistema está listo para operar.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiseis_Avion" id="chequeo_Ventiseis_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiseis_Avion) border-green-600 @else  @error('chequeo_Ventiseis_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiseis_Avion)
                        @error('chequeo_Ventiseis_Avion')
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
                    <x-label for="chequeo_Ventisiete_Avion" class="mb-2">
                        {{ __('Simultáneamente, debe arrancar los reproductores y comenzar el sistema audio  a dar la introducción e indicaciones a sequir a los usuarios, verifique que todos los bafles y subwoofer funcionen y que el sonido sea de alta fidelidad') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventisiete_Avion" id="chequeo_Ventisiete_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventisiete_Avion) border-green-600 @else  @error('chequeo_Ventisiete_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventisiete_Avion)
                        @error('chequeo_Ventisiete_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventiocho_Avion" class="mb-2">
                        {{ __(' Cuando en el sonido se  indique el despeque del avión, verificar que se haga en   todas las pantallas  el cambio de video de al de el reproductor y que la imagen sea nítida.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventiocho_Avion" id="chequeo_Ventiocho_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventiocho_Avion) border-green-600 @else  @error('chequeo_Ventiocho_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventiocho_Avion)
                        @error('chequeo_Ventiocho_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Ventinueve_Avion" class="mb-2">
                        {{ __('Verificar que el movimiento de las sillas esté sincronizado con el audio y video') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Ventinueve_Avion" id="chequeo_Ventinueve_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Ventinueve_Avion) border-green-600 @else  @error('chequeo_Ventinueve_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Ventinueve_Avion)
                        @error('chequeo_Ventinueve_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treinta_Avion" class="mb-2">
                        {{ __('  Verificar que no se presenten ruidos extraños en el sistema hidráulico, y demás partes móviles de la atracción, este atento a vibraciones fuertes durante su funcionamiento.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treinta_Avion" id="chequeo_Treinta_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treinta_Avion) border-green-600 @else  @error('chequeo_Treinta_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treinta_Avion)
                        @error('chequeo_Treinta_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintauno_Avion" class="mb-2">
                        {{ __(' Cuando se termine la reproducción,  automáticamente se deben parar  las sillas, apagar el sonido y el video hacer el cambio al de visualizar la parte de afuera.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintauno_Avion" id="chequeo_Treintauno_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintauno_Avion) border-green-600 @else  @error('chequeo_Treintauno_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintauno_Avion)
                        @error('chequeo_Treintauno_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintados_Avion" class="mb-2">
                        {{ __('Apagar el sistema hidráulico del pulsador rojo y  todas las luces
                                                ') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintados_Avion" id="chequeo_Treintados_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintados_Avion) border-green-600 @else  @error('chequeo_Treintados_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintados_Avion)
                        @error('chequeo_Treintados_Avion')
                            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
                        @enderror
                    @endif
                </div>
                <div class="w-full group">
                    <x-label for="chequeo_Treintatres_Avion" class="mb-2">
                        {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado,registrar: Fecha y hora de la inspección, estado del equipo. (si puede o no abrir al público), Nombre legible, Firma y Cedula.') }}
                        <span class="text-red-500">*</span>
                    </x-label>

                    <select wire:model="chequeo_Treintatres_Avion" id="chequeo_Treintatres_Avion"
                        class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full   @if ($chequeo_Treintatres_Avion) border-green-600 @else  @error('chequeo_Treintatres_Avion') border-rose-600 @enderror @endif">
                        <option value="" default selected>-- Seleccione --</option>

                        @foreach ($calificaciones as $calificacion)
                            <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}
                            </option>
                        @endforeach
                    </select>
                    @if (!$chequeo_Treintatres_Avion)
                        @error('chequeo_Treintatres_Avion')
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
