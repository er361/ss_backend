<?php

use yii\db\Migration;

/**
 * Class m180325_195815_nav
 */
class m180325_195815_nav extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nav',[
           'id' => $this->primaryKey(),
            'about' => $this->string(),
            'services' => $this->string(),
            'portfolio' => $this->string(),
            'license' => $this->string(),
            'contact' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180325_195815_nav cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180325_195815_nav cannot be reverted.\n";

        return false;
    }
    */
}
