<?php
class Controller_Admin_Dashboard extends Controller_Admin_Base
{
    public function action_index()
    {
        return $this->render('admin/dashboard/index', [
            'title' => 'ダッシュボード'
        ]);
    }
}
