<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%imagem}}`.
 */
class m250923_234943_create_imagem_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%imagem}}', [
            'id' => $this->primaryKey(),
            'image' => $this->binary()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%imagem}}');
    }
}
