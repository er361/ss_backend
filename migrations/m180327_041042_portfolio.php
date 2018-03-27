<?php

use yii\db\Migration;

/**
 * Class m180327_041042_portfolio
 */
class m180327_041042_portfolio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('portfolio',[
            'id' => $this->primaryKey(),
            'thumb_img_path' => $this->string()->notNull(),
            'full_img_path' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180327_041042_portfolio cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180327_041042_portfolio cannot be reverted.\n";

        return false;
    }
    */
}
