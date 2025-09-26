<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Bloco]].
 *
 * @see Bloco
 */
class BlocoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Bloco[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Bloco|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
