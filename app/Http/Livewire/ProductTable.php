<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProductTable extends DataTableComponent
{
    protected $listeners  = ['delete'];
    public function columns(): array
    {
        return [
            Column::make('ID')
                ->sortable()
                ->searchable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Category')
                ->sortable()
                ->searchable(),
            Column::make('Created_at'),
            Column::make('Updated_at'),
            Column::make('Action')
        ];
    }

    public function query(): Builder
    {
        return Product::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.product_table';
    }
    public function deleteConfirm($productId)
    {
        $this->dispatchBrowserEvent("delete-confirm", ['id' => $productId]);
    }
    public function delete($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
    }
}
