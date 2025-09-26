<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagem".
 *
 * @property int $id
 * @property resource $image
 */
class Imagem extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ImagemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImagemQuery(get_called_class());
    }

}
