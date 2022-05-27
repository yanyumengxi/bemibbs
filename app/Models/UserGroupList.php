<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserGroupList extends Model
{
    protected $table = "user_group_list";
    protected $dateFormat = 'up';
    public $timestamps = false;
    protected $fillable = [
        'user_group_name',
        'user_group_ugid',
        'user_group_users',
    ];

    /**
     * 获取所有管理员用户
     */
    public static function getAllAdministratorGroupUser(): Collection
    {
        return self::all()->where('user_group_name', '===', 'administrator');
    }

    /**
     * 获取在线管理员用户
     */
    public static function getOnlineAdministratorGroupUser(): string
    {
        $users = self::getAllAdministratorGroupUser();
        $administrator_users = unserialize($users[0]['user_group_users']);
        $user_names = "";
        if (sizeof($administrator_users) !== 0) {
            return self::handlerOnlineUserNameLinkString($administrator_users, $user_names);
        } else {
            return "";
        }
    }

    /**
     * 获取所有普通用户
     */
    public static function getAllDefaultGroupUsers(): Collection
    {
        return self::all()->where('user_group_name', '===', 'default');
    }

    /**
     * 获取所有在线的普通用户
     */
    public static function getOnlineDefaultGroupUsers(): string
    {
        $users = self::getAllDefaultGroupUsers();
        $default_users = unserialize($users['1']['user_group_users']);
        $user_names = "";
        return self::handlerOnlineUserNameLinkString($default_users, $user_names);
    }

    /**
     * 处理在线用户数据为html代码
     * @param mixed $default_users
     * @param string $user_names
     * @return string
     */
    protected static function handlerOnlineUserNameLinkString(mixed $default_users, string $user_names): string
    {
        foreach ($default_users as $user) {
            $user_info = User::all()->where('user_uid', $user);
            $user_status = str_replace(']', '', str_replace('[', '', $user_info->pluck('user_status')));
            if ($user_status == 1) {
                $user_username = trim(str_replace(']', '', str_replace('[', '', $user_info->pluck('user_username'))), '"');
                $user_nickname = trim(str_replace(']', '', str_replace('[', '', $user_info->pluck('user_nickname'))), '"');
                $user_names .= '<a href="/account/' . $user_username . '">' . $user_nickname . '</a>、';
            }
        }
        return trim($user_names, '、');
    }
}
