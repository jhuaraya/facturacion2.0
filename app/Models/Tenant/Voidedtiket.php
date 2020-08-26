<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class Voidedtiket extends ModelTenant
{
    protected $fillable = [
        'document_id',
        'motivo',
    ];
}
