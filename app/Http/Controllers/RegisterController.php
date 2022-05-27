<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * @author Lingqi <Bemiou_lingqi@163.com>
 * @time 2022-05-27 12:02
 */
class RegisterController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('index');
    }
}
