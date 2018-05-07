<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Repositories\AdminRepository;

class AdminController extends CommonController
{
    protected $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
//        parent::__construct();
        $this->adminRepository = $adminRepository;
    }

    /**
     * 登录页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('behind.login');
    }


    public function signin(Request $request)
    {
        //dd(md5('123456_singcms'));
        $rules = [
            'username' => 'required|between:3,5',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            $result = $this->adminRepository->getAdminByUsername($request->username);
            if ($result) {
                $password = $this->adminRepository->getMd5Password($request->password);
                if ($password == $result->password) {
                    return $this->adminRepository->return_msg(200, '登录成功');
                }
                return $this->adminRepository->return_msg(400, '密码错误，请重新输入!');
            }
            return $this->adminRepository->return_msg(400, '抱歉，没有此用户！');
        }
        $errors = $validator->errors();
        return $this->adminRepository->return_msg(400, $errors->first());
    }

    public function index()
    {
        return view('behind.index');
    }
}
