<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class ProductTable extends DataTableComponent
{
    protected $listeners  = ['delete'];
    public function columns(): array
    {
        return [
            Column::make('ID'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Category'),
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
