<?php

namespace App\Http\Requests;

/**
 * @author Lingqi <Bemiou_lingqi@163.com>
 * @time 2022-05-24 13:44
 */
class GetWebSrcCode extends Request
{
    public static function get($url)
    {
        return str_replace("\n", "", file_get_contents($url));
    }
}
