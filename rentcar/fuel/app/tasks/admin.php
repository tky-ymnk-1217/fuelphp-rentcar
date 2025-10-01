<?php

namespace Fuel\Tasks;

// php oil refine admin:create admin pass123 store 1

class Admin
{
    public static function create($username = 'store_mgr', $password = 'pass123', $role = 'store', $store_id = 1)
    {
        $a = \Model_Admin::forge([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role'     => $role,
            'store_id' => $store_id,
        ]);
        $a->save();
        echo "Admin user '{$username}' created.\n";
    }
}
