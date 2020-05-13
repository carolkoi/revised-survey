<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transactions;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {

    return [
        'date_time_added' => $faker->randomDigitNotNull,
        'added_by' => $faker->randomDigitNotNull,
        'date_time_modified' => $faker->randomDigitNotNull,
        'modified_by' => $faker->randomDigitNotNull,
        'source_ip' => $faker->word,
        'latest_ip' => $faker->word,
        'prev_iso_id' => $faker->randomDigitNotNull,
        'company_id' => $faker->randomDigitNotNull,
        'need_sync' => $faker->word,
        'synced' => $faker->word,
        'iso_source' => $faker->word,
        'iso_type' => $faker->word,
        'request_type' => $faker->word,
        'iso_status' => $faker->word,
        'iso_version' => $faker->randomDigitNotNull,
        'req_mti' => $faker->word,
        'req_field1' => $faker->word,
        'req_field2' => $faker->word,
        'req_field3' => $faker->word,
        'req_field4' => $faker->word,
        'req_field5' => $faker->word,
        'req_field6' => $faker->word,
        'req_field7' => $faker->word,
        'req_field8' => $faker->word,
        'req_field9' => $faker->word,
        'req_field10' => $faker->word,
        'req_field11' => $faker->word,
        'req_field12' => $faker->word,
        'req_field13' => $faker->word,
        'req_field14' => $faker->word,
        'req_field15' => $faker->word,
        'req_field16' => $faker->word,
        'req_field17' => $faker->word,
        'req_field18' => $faker->word,
        'req_field19' => $faker->word,
        'req_field20' => $faker->word,
        'req_field21' => $faker->word,
        'req_field22' => $faker->word,
        'req_field23' => $faker->word,
        'req_field24' => $faker->word,
        'req_field25' => $faker->word,
        'req_field26' => $faker->word,
        'req_field27' => $faker->word,
        'req_field28' => $faker->word,
        'req_field29' => $faker->word,
        'req_field30' => $faker->word,
        'req_field31' => $faker->word,
        'req_field32' => $faker->word,
        'req_field33' => $faker->word,
        'req_field34' => $faker->word,
        'req_field35' => $faker->word,
        'req_field36' => $faker->word,
        'req_field37' => $faker->word,
        'req_field38' => $faker->word,
        'req_field39' => $faker->word,
        'req_field40' => $faker->word,
        'req_field41' => $faker->word,
        'req_field42' => $faker->word,
        'req_field43' => $faker->word,
        'req_field44' => $faker->word,
        'req_field45' => $faker->word,
        'req_field46' => $faker->word,
        'req_field47' => $faker->word,
        'req_field48' => $faker->word,
        'req_field49' => $faker->word,
        'req_field50' => $faker->word,
        'req_field51' => $faker->word,
        'req_field52' => $faker->word,
        'req_field53' => $faker->word,
        'req_field54' => $faker->word,
        'req_field55' => $faker->word,
        'req_field56' => $faker->word,
        'req_field57' => $faker->word,
        'req_field58' => $faker->word,
        'req_field59' => $faker->word,
        'req_field60' => $faker->word,
        'req_field61' => $faker->word,
        'req_field62' => $faker->word,
        'req_field63' => $faker->word,
        'req_field64' => $faker->word,
        'req_field65' => $faker->word,
        'req_field66' => $faker->word,
        'req_field67' => $faker->word,
        'req_field68' => $faker->word,
        'req_field69' => $faker->word,
        'req_field70' => $faker->word,
        'req_field71' => $faker->word,
        'req_field72' => $faker->word,
        'req_field73' => $faker->word,
        'req_field74' => $faker->word,
        'req_field75' => $faker->word,
        'req_field76' => $faker->word,
        'req_field77' => $faker->word,
        'req_field78' => $faker->word,
        'req_field79' => $faker->word,
        'req_field80' => $faker->word,
        'req_field81' => $faker->word,
        'req_field82' => $faker->word,
        'req_field83' => $faker->word,
        'req_field84' => $faker->word,
        'req_field85' => $faker->word,
        'req_field86' => $faker->word,
        'req_field87' => $faker->word,
        'req_field88' => $faker->word,
        'req_field89' => $faker->word,
        'req_field90' => $faker->word,
        'req_field91' => $faker->word,
        'req_field92' => $faker->word,
        'req_field93' => $faker->word,
        'req_field94' => $faker->word,
        'req_field95' => $faker->word,
        'req_field96' => $faker->word,
        'req_field97' => $faker->word,
        'req_field98' => $faker->word,
        'req_field99' => $faker->word,
        'req_field100' => $faker->word,
        'req_field101' => $faker->word,
        'req_field102' => $faker->word,
        'req_field103' => $faker->word,
        'req_field104' => $faker->word,
        'req_field105' => $faker->word,
        'req_field106' => $faker->word,
        'req_field107' => $faker->word,
        'req_field108' => $faker->word,
        'req_field109' => $faker->word,
        'req_field110' => $faker->word,
        'req_field111' => $faker->word,
        'req_field112' => $faker->word,
        'req_field113' => $faker->word,
        'req_field114' => $faker->word,
        'req_field115' => $faker->word,
        'req_field116' => $faker->word,
        'req_field117' => $faker->word,
        'req_field118' => $faker->word,
        'req_field119' => $faker->word,
        'req_field120' => $faker->word,
        'req_field121' => $faker->word,
        'req_field122' => $faker->word,
        'req_field123' => $faker->word,
        'req_field124' => $faker->word,
        'req_field125' => $faker->word,
        'req_field126' => $faker->word,
        'req_field127' => $faker->word,
        'req_field128' => $faker->word,
        'res_mti' => $faker->word,
        'res_field1' => $faker->word,
        'res_field2' => $faker->word,
        'res_field3' => $faker->word,
        'res_field4' => $faker->word,
        'res_field5' => $faker->word,
        'res_field6' => $faker->word,
        'res_field7' => $faker->word,
        'res_field8' => $faker->word,
        'res_field9' => $faker->word,
        'res_field10' => $faker->word,
        'res_field11' => $faker->word,
        'res_field12' => $faker->word,
        'res_field13' => $faker->word,
        'res_field14' => $faker->word,
        'res_field15' => $faker->word,
        'res_field16' => $faker->word,
        'res_field17' => $faker->word,
        'res_field18' => $faker->word,
        'res_field19' => $faker->word,
        'res_field20' => $faker->word,
        'res_field21' => $faker->word,
        'res_field22' => $faker->word,
        'res_field23' => $faker->word,
        'res_field24' => $faker->word,
        'res_field25' => $faker->word,
        'res_field26' => $faker->word,
        'res_field27' => $faker->word,
        'res_field28' => $faker->word,
        'res_field29' => $faker->word,
        'res_field30' => $faker->word,
        'res_field31' => $faker->word,
        'res_field32' => $faker->word,
        'res_field33' => $faker->word,
        'res_field34' => $faker->word,
        'res_field35' => $faker->word,
        'res_field36' => $faker->word,
        'res_field37' => $faker->word,
        'res_field38' => $faker->word,
        'res_field39' => $faker->word,
        'res_field40' => $faker->word,
        'res_field41' => $faker->word,
        'res_field42' => $faker->word,
        'res_field43' => $faker->word,
        'res_field44' => $faker->word,
        'res_field45' => $faker->word,
        'res_field46' => $faker->word,
        'res_field47' => $faker->word,
        'res_field48' => $faker->word,
        'res_field49' => $faker->word,
        'res_field50' => $faker->word,
        'res_field51' => $faker->word,
        'res_field52' => $faker->word,
        'res_field53' => $faker->word,
        'res_field54' => $faker->word,
        'res_field55' => $faker->word,
        'res_field56' => $faker->word,
        'res_field57' => $faker->word,
        'res_field58' => $faker->word,
        'res_field59' => $faker->word,
        'res_field60' => $faker->word,
        'res_field61' => $faker->word,
        'res_field62' => $faker->word,
        'res_field63' => $faker->word,
        'res_field64' => $faker->word,
        'res_field65' => $faker->word,
        'res_field66' => $faker->word,
        'res_field67' => $faker->word,
        'res_field68' => $faker->word,
        'res_field69' => $faker->word,
        'res_field70' => $faker->word,
        'res_field71' => $faker->word,
        'res_field72' => $faker->word,
        'res_field73' => $faker->word,
        'res_field74' => $faker->word,
        'res_field75' => $faker->word,
        'res_field76' => $faker->word,
        'res_field77' => $faker->word,
        'res_field78' => $faker->word,
        'res_field79' => $faker->word,
        'res_field80' => $faker->word,
        'res_field81' => $faker->word,
        'res_field82' => $faker->word,
        'res_field83' => $faker->word,
        'res_field84' => $faker->word,
        'res_field85' => $faker->word,
        'res_field86' => $faker->word,
        'res_field87' => $faker->word,
        'res_field88' => $faker->word,
        'res_field89' => $faker->word,
        'res_field90' => $faker->word,
        'res_field91' => $faker->word,
        'res_field92' => $faker->word,
        'res_field93' => $faker->word,
        'res_field94' => $faker->word,
        'res_field95' => $faker->word,
        'res_field96' => $faker->word,
        'res_field97' => $faker->word,
        'res_field98' => $faker->word,
        'res_field99' => $faker->word,
        'res_field100' => $faker->word,
        'res_field101' => $faker->word,
        'res_field102' => $faker->word,
        'res_field103' => $faker->word,
        'res_field104' => $faker->word,
        'res_field105' => $faker->word,
        'res_field106' => $faker->word,
        'res_field107' => $faker->word,
        'res_field108' => $faker->word,
        'res_field109' => $faker->word,
        'res_field110' => $faker->word,
        'res_field111' => $faker->word,
        'res_field112' => $faker->word,
        'res_field113' => $faker->word,
        'res_field114' => $faker->word,
        'res_field115' => $faker->word,
        'res_field116' => $faker->word,
        'res_field117' => $faker->word,
        'res_field118' => $faker->word,
        'res_field119' => $faker->word,
        'res_field120' => $faker->word,
        'res_field121' => $faker->word,
        'res_field122' => $faker->word,
        'res_field123' => $faker->word,
        'res_field124' => $faker->word,
        'res_field125' => $faker->word,
        'res_field126' => $faker->word,
        'res_field127' => $faker->word,
        'res_field128' => $faker->word,
        'request' => $faker->word,
        'response' => $faker->word,
        'extra_data' => $faker->word,
        'sync_message' => $faker->word,
        'need_sending' => $faker->word,
        'sent' => $faker->word,
        'received' => $faker->word,
        'aml_check' => $faker->word,
        'aml_check_sent' => $faker->word,
        'aml_check_retries' => $faker->randomDigitNotNull,
        'aml_listed' => $faker->word,
        'posted' => $faker->word,
        'created_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
