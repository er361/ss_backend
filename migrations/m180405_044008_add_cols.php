<?php

use yii\db\Migration;

/**
 * Class m180405_044008_add_cols
 */
class m180405_044008_add_cols extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('license','position','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180405_044008_add_cols cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180405_044008_add_cols cannot be reverted.\n";

        return false;
    }
    */
}
