<?php

use yii\db\Migration;

/**
 * Handles the creation of table `zayavka`.
 */
class m180405_051843_create_zayavka_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('zayavka', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'e_mail' => $this->string(),
            'area' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('zayavka');
    }
}
