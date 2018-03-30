<?php

use yii\db\Migration;

/**
 * Class m180329_153543_create_services_title_talbe
 */
class m180329_153543_create_services_title_talbe extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('service')
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180329_153543_create_services_title_talbe cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_153543_create_services_title_talbe cannot be reverted.\n";

        return false;
    }
    */
}
