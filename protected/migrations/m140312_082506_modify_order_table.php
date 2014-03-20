<?php

class m140312_082506_modify_order_table extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//		echo "m140312_082506_modify_order_table does not support migration down.\n";
//		return false;
//	}


	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
          $this->addColumn('order','order_ship_id','bigint');
//        $this->dropForeignKey('item_id','order_item');
	}

	public function safeDown()
	{
        echo "m140312_082506_modify_order_table does not support migration down.\n";
		return false;
    }
}