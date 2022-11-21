<form wire:submit.prevent='store'>
    <div class="grid 2xl:grid-cols-2  md:gap-4 gap-6">
        <div class="w-full group">
            <x-label for="hora_inicio" class="mb-2">{{ __('Hora de inicio') }} <span class="text-red-500">*</span>
            </x-label>
            <input id="hora_inicio"
                class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full @error('hora_inicio') border-rose-600 @enderror @if ($hora_inicio) border-green-600 @endif"
                type="datetime-local" wire:model="hora_inicio" :value="old('hora_inicio')" />
            @error('hora_inicio')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="chequeo_Uno_ZigZag" class="mb-2">
                {{ __('Verificar la ausencia de elementos extraños en la zona como escombros') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Uno_ZigZag" id="chequeo_Uno_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @error('chequeo_Uno_ZigZag') border-rose-600 @enderror  @if ($chequeo_Uno_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Uno_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>

        <div class="w-full group">
            <x-label for="chequeo_Dos_ZigZag" class="mb-2">
                {{ __('Verificar que los enfiladeros estén   anclados, firmes en su sitio, en buen estado, que no posean fisuras ni superficies cortantes ni corrosión.') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Dos_ZigZag" id="chequeo_Dos_ZigZag"
                class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full l @error('chequeo_Dos_ZigZag') border-rose-600 @enderror  @if ($chequeo_Dos_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Dos_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>

        <div class="w-full group">
            <x-label for="chequeo_Tres_ZigZag" class="mb-2">
                {{ __('Verificar que el cerramiento de madera y malla esté bien anclado al suelo') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Tres_ZigZag" id="chequeo_Tres_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Tres_ZigZag') border-rose-600 @enderror  @if ($chequeo_Tres_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Tres_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>

        <div class="w-full group">
            <x-label for="chequeo_Cuatro_ZigZag" class="mb-2">
                {{ __('Verificar que la malla este en buen estado, reventados ni descolgados.
                ') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Cuatro_ZigZag" id="chequeo_Cuatro_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Cuatro_ZigZag') border-rose-600 @enderror @if ($chequeo_Cuatro_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Cuatro_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="chequeo_Cinco_ZigZag" class="mb-2">
                {{ __('Verificar que el árbol central no posea ramas o frutos que puedan desprenderse y lesionar a los usuarios.') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Cinco_ZigZag" id="chequeo_Cinco_ZigZag"
                class="rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @error('chequeo_Cinco_ZigZag') border-rose-600 @enderror @if ($chequeo_Cinco_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Cinco_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>

        <div class="w-full group">
            <x-label for="chequeo_Seis_ZigZag" class="mb-2">
                {{ __(' Verificar que la pasta de sillín no esté reventada ni presente superficies cortantes.') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Seis_ZigZag" id="chequeo_Seis_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @error('chequeo_Seis_ZigZag') border-rose-600 @enderror @if ($chequeo_Seis_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Seis_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="chequeo_Siete_ZigZag" class="mb-2">
                {{ __('Verificar que las platinas de soporte de ruedas no estén reventadas.
                ') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Siete_ZigZag" id="chequeo_Siete_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Siete_ZigZag') border-rose-600 @enderror @if ($chequeo_Siete_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Siete_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="chequeo_Ocho_ZigZag" class="mb-2">
                {{ __('Verificar que el timon gire libremente en su pibote, que cuente con sus separadores y la tuerca presente el ajuste adecuado, (debe mantener armado el conjunto pero conservar la holgura suficiente para permitir el giro).') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Ocho_ZigZag" id="chequeo_Ocho_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full @error('chequeo_Ocho_ZigZag') border-rose-600 @enderror   @if($chequeo_Ocho_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Ocho_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class=" w-full group">
            <x-label for="chequeo_Nueve_ZigZag" class="mb-2">
                {{ __(' Verificar que el manubrio no presente oxidacion ni superficies cortantes.') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Nueve_ZigZag" id="chequeo_Nueve_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Nueve_ZigZag') border-rose-600 @enderror    @if ($chequeo_Nueve_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Nueve_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="chequeo_Diez_ZigZag" class="mb-2">
                {{ __('Verificar que las ruedas giren libremente, y no posean desgaste excesivo
                                                                                                ') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Diez_ZigZag" id="chequeo_Diez_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Diez_ZigZag') border-rose-600 @enderror   @if ($chequeo_Diez_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Diez_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>

        <div class=" w-full group">
            <x-label for="chequeo_Once_ZigZag" class="mb-2">
                {{ __('Revisar estado de señalización de acuerdo a protocolos de bioseguridad
                ') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Once_ZigZag" id="chequeo_Once_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Once_ZigZag') border-rose-600 @enderror   @if($chequeo_Once_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Once_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class=" w-full group">
            <x-label for="chequeo_Doce_ZigZag" class="mb-2">
                {{ __('Realizar la anotación pertinente en la bitácora del equipo revisado, asegurándose  que quede registrada la siguiente información:  Fecha y hora de la inspección,   Estado operacional del equipo. (si puede o no abrirse al público),   Nombre legible,   Firma ,     Cedula.') }}
                <span class="text-red-500">*</span>
            </x-label>

            <select wire:model="chequeo_Doce_ZigZag" id="chequeo_Doce_ZigZag"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full  @error('chequeo_Doce_ZigZag') border-rose-600 @enderror  @if($chequeo_Doce_ZigZag) border-green-600 @endif">
                <option value="" default selected>-- Seleccione --</option>

                @foreach ($calificaciones as $calificacion)
                    <option value="{{ $calificacion->calificacion }}">{{ $calificacion->calificacion }}</option>
                @endforeach
            </select>
            @error('chequeo_Doce_ZigZag')
                <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
        </div>
        <div class="w-full group">
            <x-label for="observaciones" class="mb-2">
                {{ __('Observaciones') }}
                <span class="text-red-500">*</span>
            </x-label>

            <textarea wire:model="observaciones" id="observaciones"
                class="rounded-md  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full max-h-14  @error('observaciones') border-rose-600 @enderror @if($observaciones) border-green-600 @endif"></textarea>
            @error('observaciones')
            <span class="text-red-700 font-bold uppercase p-2   text-xs">Este campo es obligatorio</span>
            @enderror
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
         <div class="w-full group">
        <x-label for="imagen" :value="__('Imagen')" />
    
         <input type="file" wire:model="imagen" class="file:border file:border-solid"  accept="image/*" />
   
         </div>
        <div class="w-full group flex justify-end gap-2">
            <a href="{{route('listaChequeoZigZag.index')}}"
                class="inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Cancelar</a>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-5">Guardar</button>
        </div>
    </div>
</form>

  