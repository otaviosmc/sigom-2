<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atendente".
 *
 * @property int $id
 * @property int $ocorrencia_id
 * @property int $usuario_id
 *
 * @property Ocorrencia $ocorrencia
 */
class Atendente extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atendente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ocorrencia_id', 'usuario_id'], 'required'],
            [['ocorrencia_id', 'usuario_id'], 'integer'],
            [['ocorrencia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ocorrencia::className(), 'targetAttribute' => ['ocorrencia_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ocorrencia_id' => Yii::t('app', 'Ocorrencia ID'),
            'usuario_id' => Yii::t('app', 'Usuario ID'),
        ];
    }

    /**
     * Gets query for [[Ocorrencia]].
     *
     * @return \yii\db\ActiveQuery|OcorrenciaQuery
     */
    public function getOcorrencia()
    {
        return $this->hasOne(Ocorrencia::className(), ['id' => 'ocorrencia_id']);
    }

    /**
     * {@inheritdoc}
     * @return AtendenteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AtendenteQuery(get_called_class());
    }

}
