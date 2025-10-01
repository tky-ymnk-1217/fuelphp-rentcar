<?php
class Controller_Admin_Login extends Controller
{
    public function action_index()
    {
        if (Input::method() === 'POST') {
            $username = Input::post('username');
            $password = Input::post('password');

            $admin = Model_Admin::query()->where('username', $username)->get_one();
            if ($admin && $admin->verify_password($password)) {
                Session::set('admin_id', $admin->id);
                Session::set('role', $admin->role);
                Session::set('store_id', $admin->store_id);
                Response::redirect('admin/dashboard');
            } else {
                $data['error'] = 'ユーザ名またはパスワードが違います';
            }
        }
        return Response::forge(View::forge('admin/login/index', $data ?? []));
    }

    public function action_logout()
    {
        Session::destroy();
        Response::redirect('login');
    }
}
