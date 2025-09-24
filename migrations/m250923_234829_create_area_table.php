<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area}}`.
 */
class m250923_234829_create_area_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(50)->notNull(),
            'bloco_id' => $this->integer()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%area}}');
    }
}
