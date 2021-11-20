<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CategoryTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('name')
                ->sortable()
                ->searchable(),
        ];
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
}
