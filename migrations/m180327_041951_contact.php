<?php

use yii\db\Migration;

/**
 * Class m180327_041951_contact
 */
class m180327_041951_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact',[
           'id' => $this->primaryKey(),
           'title' => $this->string()->notNull(),
           'text' => $this->string()->notNull(),
           'phone' => $this->string()->notNull(),
           'e-mail' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180327_041951_contact cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_041951_contact cannot be reverted.\n";

        return false;
    }
    */
}
