<?php

namespace App\Http\Requests;

/**
 * @author Lingqi <Bemiou_lingqi@163.com>
 * @time 2022-05-24 13:42
 */
class Request
{
    public function allow($isAllow): bool
    {
        return $isAllow ?? true;
    }
}
