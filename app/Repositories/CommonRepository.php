<?php

namespace App\Repositories;

class CommonRepository
{
    public function getLoginUser()
    {
        return session("adminUser");
    }

    public function isLogin()
    {
        $user = $this->getLoginUser();
        if ($user && is_array($user)) {
            return true;
        }

        return false;
    }

    public function return_msg($code, $msg = '', $data = [])
    {
        /***** 组合数据 *****/
        $return_data['code'] = $code;
        $return_data['msg'] = $msg;
        $return_data['data'] = $data;
        /***** 返回信息并终止脚本 *****/
        return $return_data;
    }

    function getMd5Password($password) {
        return md5($password . '_singcms');
    }
}