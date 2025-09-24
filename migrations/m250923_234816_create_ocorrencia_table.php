<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ocorrencia}}`.
 */
class m250923_234816_create_ocorrencia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ocorrencia}}', [
            'id' => $this->primaryKey(),
            'usuario_id' => $this->integer()->notNull(),
            'bloco_id' => $this->integer()->notNull(),
            'area_id' => $this->integer()->notNull(),
            'situacao_id' => $this->integer()->notNull(),
            'descricao' => $this->string()->notNull(),
        ]);

    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ocorrencia}}');
    }
}
