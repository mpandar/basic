<?php

class m140320_011404_modify_post_table extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//		echo "m140320_011404_modify_post_table does not support migration down.\n";
//		return false;
//	}


	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->addColumn('post','pic_url','varchar(150)');
	}

	public function safeDown()
	{
	    echo "m140320_011404_modify_post_table does not support migration down.\n";
		return false;
	}

}