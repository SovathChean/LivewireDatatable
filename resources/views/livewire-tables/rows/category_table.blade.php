<x-livewire-tables::table.cell>
    <p>{{$row->id}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <p>{{$row->name}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <p>{{$row->created_at->diffForHumans()}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <p>{{$row->updated_at->diffForHumans();}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <div class="d-flex">
        <a href="{{ route('category.show', $row) }}">
            <button  class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2" >
                View
            </button>
        </a>
        <a href="{{ route('category.edit', $row) }}">
            <button wire.click="edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Edit
            </button>
        </a>
        <button wire:click="deleteConfirm({{ $row->id }})" class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" >
            Delete
        </button>
    </div>

</x-livewire-tables::table.cell>

