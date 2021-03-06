<?php

namespace App\Repositories;

use App\Models\AmlMakerChecker;
use App\Repositories\BaseRepository;

/**
 * Class AmlMakerCheckerRepository
 * @package App\Repositories
 * @version April 8, 2020, 1:18 pm UTC
*/

class AmlMakerCheckerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date_time_added',
        'added_by',
        'date_time_modified',
        'modified_by',
        'source_ip',
        'latest_ip',
        'partner_id',
        'customer_idnumber',
        'transaction_number',
        'customer_name',
        'mobile_number',
        'blacklist_status',
        'response',
        'blacklist_source',
        'remarks',
        'blacklisted',
        'blacklist_version'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AmlMakerChecker::class;
    }
}
