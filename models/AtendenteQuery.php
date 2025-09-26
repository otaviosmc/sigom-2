<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Atendente]].
 *
 * @see Atendente
 */
class AtendenteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Atendente[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Atendente|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
