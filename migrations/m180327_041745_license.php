<?php

use yii\db\Migration;

/**
 * Class m180327_041745_license
 */
class m180327_041745_license extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('license',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'img_path' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180327_041745_license cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_041745_license cannot be reverted.\n";

        return false;
    }
    */
}
