<?php

class m150205_174942_add_some_stuff extends CDbMigration
{
	public function up()
	{
		Yii::app()->db->createCommand('CREATE TABLE `emails` (
										 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
										 `email` varchar(50) NOT NULL,
										 PRIMARY KEY (`id`),
										 UNIQUE KEY `email` (`email`)
										) ENGINE=InnoDB DEFAULT CHARSET=utf8')->query();
	}

	public function down()
	{
		echo "m150205_174942_add_some_stuff does not support migration down.\n";
		return false;
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