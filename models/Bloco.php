<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloco".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Area[] $areas
 * @property Ocorrencia[] $ocorrencias
 */
class Bloco extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bloco';
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
     * Gets query for [[Areas]].
     *
     * @return \yii\db\ActiveQuery|AreaQuery
     */
    public function getAreas()
    {
        return $this->hasMany(Area::className(), ['bloco_id' => 'id']);
    }

    /**
     * Gets query for [[Ocorrencias]].
     *
     * @return \yii\db\ActiveQuery|OcorrenciaQuery
     */
    public function getOcorrencias()
    {
        return $this->hasMany(Ocorrencia::className(), ['bloco_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return BlocoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlocoQuery(get_called_class());
    }

}
