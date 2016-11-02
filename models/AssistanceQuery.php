<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Assistance]].
 *
 * @see Assistance
 */
class AssistanceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Assistance[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Assistance|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
