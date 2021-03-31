<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Nueva Sugerencia
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Nueva Sugerencia
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Tema de la Sugerencia" />
                <x-jet-input wire:model.defer="tema" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido de la Sugerencia" />
                <textarea wire:model.defer="sugerencias" name="" class="form-control w-full" rows="6"></textarea>
            </div>

            <div class="mb-4">
                <x-jet-label value="¿Será Anónimo?" />
                <select name="" class="form-control w-full" wire:model.defer="estado">
                    <option value="none" selected >[Seleccionar]</option>
                    <option value="1">No</option>
                    <option value="0">Si</option>
                </select>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">
                Crear Sugerencia
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
