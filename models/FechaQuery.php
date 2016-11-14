<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Fecha]].
 *
 * @see Fecha
 */
class FechaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Fecha[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Fecha|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
