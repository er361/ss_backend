<?php

use yii\db\Migration;

/**
 * Class m180327_032604_header
 */
class m180327_032604_header extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('header',[
           'id' => $this->primaryKey(),
           'title' => $this->string()->notNull(),
           'muted' => $this->string()->notNull(),
           'img_path' => $this->string()->notNull(),
            'button_text' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('header');
       return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_032604_header cannot be reverted.\n";

        return false;
    }
    */
}
