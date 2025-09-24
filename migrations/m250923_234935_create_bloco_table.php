<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bloco}}`.
 */
class m250923_234935_create_bloco_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bloco}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bloco}}');
    }
}
