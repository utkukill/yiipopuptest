<?php

class m200106_225425_create_popups_table extends CDbMigration
{
    public function safeUp()
    {
        $this->createTable('tbl_popups', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'vews' => 'int',
            'state' => 'int NOT NULL DEFAULT (1)',
        ));
    }
 
    public function safeDown()
    {
        $this->dropTable('tbl_popups');
    }

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}