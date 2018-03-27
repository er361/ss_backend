<?php

use yii\db\Migration;

/**
 * Class m180327_035438_about
 */
class m180327_035438_about extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->string()->notNull(),
            'button-text' => $this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180327_035438_about cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_035438_about cannot be reverted.\n";

        return false;
    }
    */
}
