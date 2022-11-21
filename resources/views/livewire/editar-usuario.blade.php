
<form  wire:submit.prevent='update'>
  
    <div class="mb-5">
        <x-label for="nameEdit" >{{__("Nombre")}} <span class="text-red-500">*</span> </x-label>

        <x-input id="nameEdit" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')"
            placeholder="Nombre del empleado" />
        @error('name')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="usuarioEdit">{{__("Usuario")}} <span class="text-red-500">*</span>  </x-label>

        <x-input id="usuarioEdit" class="block mt-1 w-full" type="text" wire:model="usuario" :value="old('usuario')"
            placeholder="Nombre de usuario" />
        @error('usuario')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="documentoEdit">{{__("Documento")}} <span class="text-red-500">*</span>  </x-label>

        <x-input id="documentoEdit" class="block mt-1 w-full" type="text" wire:model="documento" :value="old('documento')"
            placeholder="Documento del empleado" />
        @error('documento')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>
    <div class="mb-5">
        <x-label for="cargoEdit"  >{{__("Cargo")}} <span class="text-red-500">*</span> </x-label>
        <select wire:model="cargo" id="cargoEdit"
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
        <x-label for="passwordEdit" >{{__("Contraseña")}}</x-label>

        <x-input id="passwordEdit" class="block mt-1 w-full" type="password" wire:model="password"  autocomplete="on"
            placeholder="Contraseña del usuario"/>
        @error('password')
            <livewire:mostrar-error :message="$message" />
        @enderror
    </div>

    <div class="modal-footer">
        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button>
      
        <x-button type="submit" id="editar">Guardar cambios</x-button>
       {{--  <button type="submit" class="btn bg-blue-800 text-white" wire:target='store' wire:loading.attr='disabled'>Guardar</button> --}}
 
    </div> <!-- END: Modal Footer -->
</form>


