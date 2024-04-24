<?php

namespace App\DataTables;

use App\Models\FooterSocialLink;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FooterSocialLinkDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function ($query) {
            $editBtn = "<a href='" . route('admin.footer-social.edit', $query->id) . "' class='btn btn-primary'><i class='far fa-edit'></i></a>";
            $deleteBtn = "<a href='" . route('admin.footer-social.destroy', $query->id) . "' class='btn btn-danger ml-2 delete-item'><i class='fas fa-trash-alt'></i></a>";
            return $editBtn . $deleteBtn;
        })
        ->addColumn('icon', function ($query) {
            return '<i class="' . ($query->icon) . '" style="font-size: 35px"></i>';
        })
        ->rawColumns(['action', 'icon'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(FooterSocialLink $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('footersociallink-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('icon')->title('Ikon')->width('250'),
            Column::make('url')->title('Link'),
            Column::computed('action')->title('Műveletek')
            ->exportable(false)
            ->printable(false)
            ->width(200)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'FooterSocialLink_' . date('YmdHis');
    }
}
