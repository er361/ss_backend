<?php

use yii\db\Migration;

/**
 * Class m180327_040227_services
 */
class m180327_040227_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services',[
           'id' => $this->primaryKey(),
           'title' => $this->string()->notNull(),
            'text' => $this->string()->notNull(),
            'code' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('services');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_040227_services cannot be reverted.\n";

        return false;
    }
    */
}
