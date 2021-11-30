<?php

namespace App\Http\Livewire;

use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CategoryTable extends DataTableComponent
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
            Column::make('Created_at'),
            Column::make('Updated_at'),
            Column::make('Action')
        ];
    }
    public function editView()
    {
        return view('category.add');
    }

    public function filters(): array
    {
        return [
            'type' => Filter::make('User Type')
                ->select([
                    '' => 'Any'
                ])
        ];
    }
    public function query(): Builder
    {
        return Category::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.category_table';
    }
    public function deleteConfirm($categoryId)
    {
        $this->dispatchBrowserEvent("delete-confirm", ['id' => $categoryId]);
    }
    public function delete($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
    }

}

