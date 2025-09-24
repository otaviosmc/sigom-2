<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%atendente}}`.
 */
class m250923_234836_create_atendente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%atendente}}', [
            'id' => $this->primaryKey(),
            'ocorrencia_id' => $this->integer()->notNull(),
            'usuario_id' => $this->integer()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%atendente}}');
    }
}
