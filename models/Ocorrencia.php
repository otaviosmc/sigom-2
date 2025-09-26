<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ocorrencia".
 *
 * @property int $id
 * @property int $usuario_id
 * @property int $bloco_id
 * @property int $area_id
 * @property int $situacao_id
 * @property string $descricao
 *
 * @property Area $area
 * @property Atendente[] $atendentes
 * @property Bloco $bloco
 * @property Situacao $situacao
 */
class Ocorrencia extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ocorrencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'bloco_id', 'area_id', 'situacao_id', 'descricao'], 'required'],
            [['usuario_id', 'bloco_id', 'area_id', 'situacao_id'], 'integer'],
            [['descricao'], 'string', 'max' => 255],
            [['area_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::className(), 'targetAttribute' => ['area_id' => 'id']],
            [['bloco_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bloco::className(), 'targetAttribute' => ['bloco_id' => 'id']],
            [['situacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Situacao::className(), 'targetAttribute' => ['situacao_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'usuario_id' => Yii::t('app', 'Usuario ID'),
            'bloco_id' => Yii::t('app', 'Bloco ID'),
            'area_id' => Yii::t('app', 'Area ID'),
            'situacao_id' => Yii::t('app', 'Situacao ID'),
            'descricao' => Yii::t('app', 'Descricao'),
        ];
    }

    /**
     * Gets query for [[Area]].
     *
     * @return \yii\db\ActiveQuery|AreaQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'area_id']);
    }

    /**
     * Gets query for [[Atendentes]].
     *
     * @return \yii\db\ActiveQuery|AtendenteQuery
     */
    public function getAtendentes()
    {
        return $this->hasMany(Atendente::className(), ['ocorrencia_id' => 'id']);
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
     * Gets query for [[Situacao]].
     *
     * @return \yii\db\ActiveQuery|SituacaoQuery
     */
    public function getSituacao()
    {
        return $this->hasOne(Situacao::className(), ['id' => 'situacao_id']);
    }

    /**
     * {@inheritdoc}
     * @return OcorrenciaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OcorrenciaQuery(get_called_class());
    }

}
