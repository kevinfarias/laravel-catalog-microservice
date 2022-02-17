<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid as uuidGen;

trait Uuid
{
    public static function boot()
    {
        parent::boot();
        static::creating(function($obj) {
            $obj->id = uuidGen::uuid4();
        });
    }
}
