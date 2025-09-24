<?php

use yii\db\Migration;

class m250924_001310_create_fkeys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            '{{%fk-bloco_id-ocorrencia_id}}',
            '{{%ocorrencia}}',
            'bloco_id',
            '{{%bloco}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk-area_id-area_id}}',
            '{{%ocorrencia}}',
            'area_id',
            '{{%area}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk-situacao_id-situacaod_id}}',
            '{{%ocorrencia}}',
            'situacao_id',
            '{{%situacao}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk-bloco_id-bloco_id}}',
            '{{%area}}',
            'bloco_id',
            '{{%bloco}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk-ocorrencia_id-ocorrencia_id}}',
            '{{%atendente}}',
            'ocorrencia_id',
            '{{%ocorrencia}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250924_001310_create_fkeys cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250924_001310_create_fkeys cannot be reverted.\n";

        return false;
    }
    */
}
