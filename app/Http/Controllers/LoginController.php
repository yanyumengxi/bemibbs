<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * @author Lingqi <Bemiou_lingqi@163.com>
 * @time 2022-05-27 12:01
 */
class LoginController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('user.login', [
            'title'  =>  __('messages.title'),
            'subtitle'  =>  __('messages.subtitle'),
            'description'  =>  __('messages.description'),
            'mail_address'  =>  'bemiou_lingqi@163.com',
            'qq'  =>  true,
            'github'  =>  true,
            'gitee'  =>  true,
            'baidu'  =>  true,
        ]);
    }
}
