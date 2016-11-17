<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Persona".
 *
 * @property integer $Id
 * @property string $Nombre
 * @property integer $Ci
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'string'],
            [['Ci'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nombre' => 'Nombre',
            'Ci' => 'Cedula',
        ];
    }

    /**
     * @inheritdoc
     * @return PersonaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonaQuery(get_called_class());
    }
    
    /**
    * @return \yii\db\ActiveQuery
    */
    public function getFecha()
    {
        return $this->hasMany(Fecha::className(), ['Persona_Id' => 'Id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getEvento()
    {
        return $this->hasMany(Evento::className(), ['Fecha_Id' => 'Id'])->viaTable('Fecha', ['Persona_Id' => 'Id']);
    }
}
