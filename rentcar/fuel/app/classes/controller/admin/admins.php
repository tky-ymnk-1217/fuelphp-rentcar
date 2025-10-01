<?php
class Controller_Admin_Admins extends Controller_Admin_Base
{
    // 管理者一覧
    public function action_index()
    {
        $this->require_role(['system']); // systemのみ
        $admins = Model_Admin::find('all');
        return $this->render('admin/admins/index', ['admins' => $admins, 'title'=>'管理者一覧']);
    }

    // 新規作成
    public function action_create()
    {
        $this->require_role(['system']);
        if (Input::method() === 'POST') {
            $admin = Model_Admin::forge([
                'username' => Input::post('username'),
                'password' => Model_Admin::hash_password(Input::post('password')),
                'role'     => Input::post('role'),
                'store_id' => Input::post('store_id') ?: null,
            ]);
            $admin->save();
            Response::redirect('admin/admins');
        }
        return $this->render('admin/admins/create', [
            'title'=>'管理者作成'
        ]);
    }

    // 削除
    public function action_delete($id)
    {
        $this->require_role(['system']);
        if ($admin = Model_Admin::find($id)) {
            $admin->delete();
        }
        Response::redirect('admin/admins');
    }
}
