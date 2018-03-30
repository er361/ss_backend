<?php

use yii\db\Migration;

/**
 * Class m180329_080630_add_cols_to_header
 */
class m180329_080630_add_cols_to_header extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('header','video_path','string');
        $this->addColumn('header','background_type','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('header','video_path');
        $this->dropColumn('header','background_type');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_080630_add_cols_to_header cannot be reverted.\n";

        return false;
    }
    */
}
