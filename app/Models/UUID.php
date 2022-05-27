<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UUID extends Model
{
    public static function spawn($prefix = ""): string
    {
        $char = md5(uniqid(mt_rand(), true));
        $uuid = substr($char, 0, 8) . '-'
            . substr($char, 8, 4) . '-'
            . substr($char, 12, 4) . '-'
            . substr($char, 16, 4) . '-'
            . substr($char, 20, 12);
        return $prefix . $uuid;
    }
}
