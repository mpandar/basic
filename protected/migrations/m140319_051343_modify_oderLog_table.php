<?php

class m140319_051343_modify_oderLog_table extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//
//	}


	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->alterColumn('order_log','order_id','bigint');
	}

	public function safeDown()
	{
	    echo "m140319_051343_modify_oderLog_table does not support migration down.\n";
		return false;
	}

}