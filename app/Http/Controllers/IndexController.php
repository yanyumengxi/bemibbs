<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetWebSrcCode;
use App\Models\Partition;
use App\Models\Plate;
use App\Models\User;
use App\Models\UserGroupList;
use App\Models\UUID;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * @author Lingqi <Bemiou_lingqi@163.com>
 * @time 2022-05-21 16:52
 */
class IndexController extends Controller
{
    public function index(): Factory|View|Application
    {
        // 总用户
        $users_obj = User::all();
        // 总用户数量
        $users_count = $users_obj->count();
        // 最新会员信息
        $newUser = User::all()->where('id', $users_count);
        // 所有在线用户
        $onlineUsers = User::all()->where('user_status', 1);
        // 所有在线管理员
        $administratorGroupUsers = UserGroupList::getOnlineAdministratorGroupUser();
        // 普通用户组所有用户
        $ordinaryGroupUsers = UserGroupList::getOnlineDefaultGroupUsers();
        // VIP用户组所有用户
        $lifelongVipGroupUsers = UserGroupList::all()->where('user_group_name', '===', 'lifelong_vip');

        return view('index', [
            // 论坛标题
            'title'  =>  __('messages.title'),
            // 论坛副标题
            'subtitle'  =>  __('messages.subtitle'),
            // 论坛简介
            'description'  =>  __('messages.description'),
            // 论坛邮箱地址
            'mail_address'  =>  'bemiou_lingqi@163.com',
            // 随机一言数据
            'yiyan'  =>  GetWebSrcCode::get("https://api.1o.pw/api/yan/"),
            // 所有在线管理员
            'online_administrator_group_user'  =>  $administratorGroupUsers,
            // 所有在线会员
            'online_user'  =>  $ordinaryGroupUsers,
            // 所有在线会员数量
            'online_user_count'  =>  $onlineUsers->count(),
            // 所有正常会员
            'online_default_user_count'  =>  User::all()->where('user_level', 1)->count(),
            // 所有VIP会员
            'online_super_user_count'  =>  User::all()->where('user_level', 1)->count(),
            // 所有会员, 包含被封禁的会员
            'user_count'  =>  $users_count,
            // 所有分区
            'partitions'  =>  Partition::all(),
            // 所有板块
            'plates'  =>  Plate::all(),
            // 最新会员
            'new_user'  =>  $newUser,
        ]);
    }

    public function addUserGroup($name, $users = [])
    {
        return UserGroupList::firstOrCreate(
            ['user_group_name'  =>  $name],
            ['user_group_ugid'  =>  strtoupper(md5(UUID::spawn())),
            'user_group_users'  =>  serialize($users)]);
    }

    public function updateUserGroup($name, $group, $users = [])
    {
        $users = unserialize(UserGroupList::all()->where('user_group_name','===',$group)->pluck('user_group_users'));
        $users[] = $name;
        UserGroupList::where('user_group_name');
    }
}
