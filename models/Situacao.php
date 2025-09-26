<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "situacao".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Ocorrencia[] $ocorrencias
 */
class Situacao extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'situacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * Gets query for [[Ocorrencias]].
     *
     * @return \yii\db\ActiveQuery|OcorrenciaQuery
     */
    public function getOcorrencias()
    {
        return $this->hasMany(Ocorrencia::className(), ['situacao_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return SituacaoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SituacaoQuery(get_called_class());
    }

}
