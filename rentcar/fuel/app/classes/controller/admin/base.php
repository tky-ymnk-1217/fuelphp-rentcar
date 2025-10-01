<?php
class Controller_Admin_Base extends Controller
{
    public function before()
    {
        parent::before();

        // ログインチェック
        if (!Session::get('admin_id')) {
            Response::redirect('login');
        }
    }

    // 権限チェック
    protected function require_role($roles = [])
    {
        $role = Session::get('role');
        if (!in_array($role, (array)$roles)) {
            die('権限がありません');
        }
    }

    // レイアウトレンダリング
    protected function render($view, $data = [])
    {
        $data['session_role'] = Session::get('role');
        $data['session_store'] = Session::get('store_id');
        return Response::forge(View::forge('admin/layouts/header', $data) .
                               View::forge($view, $data) .
                               View::forge('admin/layouts/footer', $data));
    }
}
