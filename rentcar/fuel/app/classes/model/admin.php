<?php

class Model_Admin extends Orm\Model
{
    protected static $_table_name = 'admins';
    protected static $_properties = [
        'id', 'username', 'password', 'role', 'store_id', 'created_at', 'updated_at',
    ];

    public static function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify_password($password)
    {
        return password_verify($password, $this->password);
    }
}
