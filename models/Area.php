<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string $nome
 * @property int $bloco_id
 *
 * @property Bloco $bloco
 * @property Ocorrencia[] $ocorrencias
 */
class Area extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'bloco_id'], 'required'],
            [['bloco_id'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['bloco_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bloco::className(), 'targetAttribute' => ['bloco_id' => 'id']],
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
            'bloco_id' => Yii::t('app', 'Bloco ID'),
        ];
    }

    /**
     * Gets query for [[Bloco]].
     *
     * @return \yii\db\ActiveQuery|BlocoQuery
     */
    public function getBloco()
    {
        return $this->hasOne(Bloco::className(), ['id' => 'bloco_id']);
    }

    /**
     * Gets query for [[Ocorrencias]].
     *
     * @return \yii\db\ActiveQuery|OcorrenciaQuery
     */
    public function getOcorrencias()
    {
        return $this->hasMany(Ocorrencia::className(), ['area_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return AreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AreaQuery(get_called_class());
    }

}
