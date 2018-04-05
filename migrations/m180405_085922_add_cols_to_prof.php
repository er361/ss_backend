<?php

use yii\db\Migration;

/**
 * Class m180405_085922_add_cols_to_prof
 */
class m180405_085922_add_cols_to_prof extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio','category','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180405_085922_add_cols_to_prof cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180405_085922_add_cols_to_prof cannot be reverted.\n";

        return false;
    }
    */
}
