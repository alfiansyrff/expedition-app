<?php

namespace App\DataTables;

use App\Models\Pengiriman;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PengirimanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->setRowId('id')
            ->addColumn('waktu_dibuat', function ($row) {
                setlocale(LC_TIME, 'id_ID');
                \Carbon\Carbon::setLocale('id');
                $formattedDate = \Carbon\Carbon::parse($row->created_at)->isoFormat('LLL');
                return $formattedDate . ' WIB';
            })
            ->addColumn('last_active', function ($row) {
                if ($row->updated_at == $row->created_at) {
                    return "Belum ada aktivitas";
                }
                setlocale(LC_TIME, 'id_ID');
                \Carbon\Carbon::setLocale('id');
                $formattedDate = \Carbon\Carbon::parse($row->updated_at)->isoFormat('LLLL');
                return $formattedDate . ' WIB';
            })
            ->addColumn('action', function ($row) {
                $action = view('components.actions.pengiriman-act', [
                    'row' => $row,
                ]);
                return $action;
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Pengiriman $model): QueryBuilder
    {
        if ($this->is_user) {
            return $model->newQuery()->where('pengirim_id', auth()->id());
        }
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('pengiriman-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('print'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('subjek'),
            Column::make('nomor_resi'),
            Column::make('nama_pengirim'),
            Column::make('alamat_pengirim'),
            Column::make('nama_penerima'),
            Column::make('alamat_penerima'),
            Column::make('berat'),
            Column::make('status'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Pengiriman_' . date('YmdHis');
    }
}
