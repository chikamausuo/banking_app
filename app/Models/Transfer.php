<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_trf',
        'acct_num',
        'acct_name',
        'bk_name',
        'swf_code',
        'iban',
        'recpt_name',
        'recpt_address',
        'amount',
        'description',
        'narrative',
        'user_id',
        'status',
    ];
}
