
<form  wire:submit.prevent='crearUsuario'>
   
    <div class="mb-5">
        <x-label for="name" >{{__("Nombre")}} <span class="text-red-500">*</span> </x-label>

        <x-input id="name" class="input w-full border mt-2 flex-1" type="text" wire:model="name" :value="old('name')"
            placeholder="Nombre del empleado" />
        @error('name')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="usuario">{{__("Usuario")}} <span class="text-red-500">*</span>  </x-label>

        <x-input id="usuario" class="block mt-1 w-full" type="text" wire:model="usuario" :value="old('usuario')"
            placeholder="Nombre de usuario" />
        @error('usuario')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="documento">{{__("Documento")}} <span class="text-red-500">*</span>  </x-label>

        <x-input id="documento" class="block mt-1 w-full" type="text" wire:model="documento" :value="old('documento')"
            placeholder="Documento del empleado" />
        @error('documento')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="cargo"  >{{__("Cargo")}} <span class="text-red-500">*</span> </x-label>
        <select wire:model="cargo" id="cargo"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option default selected>-- Cargo --</option>
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
            @endforeach
        </select>
        @error('cargo')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="password" >{{__("Contraseña")}} <span class="text-red-500">*</span> </x-label>

        <x-input id="password" class="block mt-1 w-full" type="password" wire:model="password"  autocomplete="on"
            placeholder="Contraseña del empleado" />
        @error('password')
           <span class="text-red-700 font-bold uppercase p-2  text-xs">EL CAMPO CONTRASEÑA ES REQUERIDO.</span>
        @enderror
    </div>
    <div class="modal-footer flex justify-end border-t border-gray-200 px-5 py-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      
        <x-button type="submit" id="guardar">Guardar </x-button>
       {{--  <button type="submit" class="btn bg-blue-800 text-white" wire:target='store' wire:loading.attr='disabled'>Guardar</button> --}}
 
     
    </div> <!-- END: Modal Footer -->
</form>
