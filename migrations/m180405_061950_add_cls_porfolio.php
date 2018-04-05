<?php

use yii\db\Migration;

/**
 * Class m180405_061950_add_cls_porfolio
 */
class m180405_061950_add_cls_porfolio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio','pos','int');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180405_061950_add_cls_porfolio cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180405_061950_add_cls_porfolio cannot be reverted.\n";

        return false;
    }
    */
}
