<?php

namespace App\DataTables;

use App\Models\Trans;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class TransDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'trans.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Trans $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Trans $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'date_time_added',
            'added_by',
            'date_time_modified',
            'modified_by',
            'source_ip',
            'latest_ip',
            'prev_iso_id',
            'company_id',
            'need_sync',
            'synced',
            'iso_source',
            'iso_type',
            'request_type',
            'iso_status',
            'iso_version',
            'req_mti',
            'req_field1',
            'req_field2',
            'req_field3',
            'req_field4',
            'req_field5',
            'req_field6',
            'req_field7',
            'req_field8',
            'req_field9',
            'req_field10',
            'req_field11',
            'req_field12',
            'req_field13',
            'req_field14',
            'req_field15',
            'req_field16',
            'req_field17',
            'req_field18',
            'req_field19',
            'req_field20',
            'req_field21',
            'req_field22',
            'req_field23',
            'req_field24',
            'req_field25',
            'req_field26',
            'req_field27',
            'req_field28',
            'req_field29',
            'req_field30',
            'req_field31',
            'req_field32',
            'req_field33',
            'req_field34',
            'req_field35',
            'req_field36',
            'req_field37',
            'req_field38',
            'req_field39',
            'req_field40',
            'req_field41',
            'req_field42',
            'req_field43',
            'req_field44',
            'req_field45',
            'req_field46',
            'req_field47',
            'req_field48',
            'req_field49',
            'req_field50',
            'req_field51',
            'req_field52',
            'req_field53',
            'req_field54',
            'req_field55',
            'req_field56',
            'req_field57',
            'req_field58',
            'req_field59',
            'req_field60',
            'req_field61',
            'req_field62',
            'req_field63',
            'req_field64',
            'req_field65',
            'req_field66',
            'req_field67',
            'req_field68',
            'req_field69',
            'req_field70',
            'req_field71',
            'req_field72',
            'req_field73',
            'req_field74',
            'req_field75',
            'req_field76',
            'req_field77',
            'req_field78',
            'req_field79',
            'req_field80',
            'req_field81',
            'req_field82',
            'req_field83',
            'req_field84',
            'req_field85',
            'req_field86',
            'req_field87',
            'req_field88',
            'req_field89',
            'req_field90',
            'req_field91',
            'req_field92',
            'req_field93',
            'req_field94',
            'req_field95',
            'req_field96',
            'req_field97',
            'req_field98',
            'req_field99',
            'req_field100',
            'req_field101',
            'req_field102',
            'req_field103',
            'req_field104',
            'req_field105',
            'req_field106',
            'req_field107',
            'req_field108',
            'req_field109',
            'req_field110',
            'req_field111',
            'req_field112',
            'req_field113',
            'req_field114',
            'req_field115',
            'req_field116',
            'req_field117',
            'req_field118',
            'req_field119',
            'req_field120',
            'req_field121',
            'req_field122',
            'req_field123',
            'req_field124',
            'req_field125',
            'req_field126',
            'req_field127',
            'req_field128',
            'res_mti',
            'res_field1',
            'res_field2',
            'res_field3',
            'res_field4',
            'res_field5',
            'res_field6',
            'res_field7',
            'res_field8',
            'res_field9',
            'res_field10',
            'res_field11',
            'res_field12',
            'res_field13',
            'res_field14',
            'res_field15',
            'res_field16',
            'res_field17',
            'res_field18',
            'res_field19',
            'res_field20',
            'res_field21',
            'res_field22',
            'res_field23',
            'res_field24',
            'res_field25',
            'res_field26',
            'res_field27',
            'res_field28',
            'res_field29',
            'res_field30',
            'res_field31',
            'res_field32',
            'res_field33',
            'res_field34',
            'res_field35',
            'res_field36',
            'res_field37',
            'res_field38',
            'res_field39',
            'res_field40',
            'res_field41',
            'res_field42',
            'res_field43',
            'res_field44',
            'res_field45',
            'res_field46',
            'res_field47',
            'res_field48',
            'res_field49',
            'res_field50',
            'res_field51',
            'res_field52',
            'res_field53',
            'res_field54',
            'res_field55',
            'res_field56',
            'res_field57',
            'res_field58',
            'res_field59',
            'res_field60',
            'res_field61',
            'res_field62',
            'res_field63',
            'res_field64',
            'res_field65',
            'res_field66',
            'res_field67',
            'res_field68',
            'res_field69',
            'res_field70',
            'res_field71',
            'res_field72',
            'res_field73',
            'res_field74',
            'res_field75',
            'res_field76',
            'res_field77',
            'res_field78',
            'res_field79',
            'res_field80',
            'res_field81',
            'res_field82',
            'res_field83',
            'res_field84',
            'res_field85',
            'res_field86',
            'res_field87',
            'res_field88',
            'res_field89',
            'res_field90',
            'res_field91',
            'res_field92',
            'res_field93',
            'res_field94',
            'res_field95',
            'res_field96',
            'res_field97',
            'res_field98',
            'res_field99',
            'res_field100',
            'res_field101',
            'res_field102',
            'res_field103',
            'res_field104',
            'res_field105',
            'res_field106',
            'res_field107',
            'res_field108',
            'res_field109',
            'res_field110',
            'res_field111',
            'res_field112',
            'res_field113',
            'res_field114',
            'res_field115',
            'res_field116',
            'res_field117',
            'res_field118',
            'res_field119',
            'res_field120',
            'res_field121',
            'res_field122',
            'res_field123',
            'res_field124',
            'res_field125',
            'res_field126',
            'res_field127',
            'res_field128',
            'request',
            'response',
            'extra_data',
            'sync_message',
            'need_sending',
            'sent',
            'received',
            'aml_check',
            'aml_check_sent',
            'aml_check_retries',
            'aml_listed',
            'posted'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'transdatatable_' . time();
    }
}
