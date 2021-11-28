<x-livewire-tables::table.cell>
    <p>{{$row->id}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <p>{{$row->name}}</p>
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <div class="d-flex">
        <button wire.click="editView()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
        </button>
        <button class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
        </button>
    </div>

</x-livewire-tables::table.cell>