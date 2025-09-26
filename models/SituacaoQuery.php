<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Situacao]].
 *
 * @see Situacao
 */
class SituacaoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Situacao[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Situacao|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
