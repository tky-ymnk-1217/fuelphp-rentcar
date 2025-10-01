<?php

namespace Fuel\Migrations;

class Create_admins
{
	public function up()
	{
		\DBUtil::create_table('admins', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'username' => array('constraint' => 255, 'null' => false, 'type' => 'varchar', '50' => true),
			'password' => array('constraint' => 255, 'null' => false, 'type' => 'varchar', '255' => true),
			'role' => array('constraint' => 255, 'null' => false, 'type' => 'varchar', '20' => true),
			'store_id' => array('constraint' => 11, 'null' => false, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('admins');
	}
}