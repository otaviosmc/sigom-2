<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ocorrencia]].
 *
 * @see Ocorrencia
 */
class OcorrenciaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Ocorrencia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Ocorrencia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
