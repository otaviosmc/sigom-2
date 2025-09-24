<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%situacao}}`.
 */
class m250923_234928_create_situacao_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%situacao}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%situacao}}');
    }
}
