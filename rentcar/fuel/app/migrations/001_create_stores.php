<?php

namespace Fuel\Migrations;

class Create_stores
{
	public function up()
	{
		\DBUtil::create_table('stores', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'name' => array('constraint' => 255, 'null' => false, 'type' => 'varchar', '100' => true),
			'address' => array('constraint' => 255, 'null' => false, 'type' => 'varchar', '255' => true),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('stores');
	}
}