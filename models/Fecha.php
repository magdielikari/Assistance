<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Fecha".
 *
 * @property integer $Id
 * @property string $Fecha
 * @property string $DiaS
 * @property integer $Dia
 * @property integer $Mes
 * @property integer $Ano
 * @property integer $Persona_Id
 */
class Fecha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Fecha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha'], 'safe'],
            [['DiaS'], 'string'],
            [['Dia', 'Mes', 'Ano', 'Persona_Id'], 'integer'],
            [['Persona_Id'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Fecha' => 'Fecha',
            'DiaS' => 'Dia S',
            'Dia' => 'Dia',
            'Mes' => 'Mes',
            'Ano' => 'Ano',
            'Persona_Id' => 'Persona  ID',
        ];
    }

    /**
     * @inheritdoc
     * @return FechaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FechaQuery(get_called_class());
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getPersona()
    {
        return $this->hasOne(Persona::className(), ['Id' => 'Persona_Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvento()
    {
        return $this->hasMany(Evento::className(), ['Fecha_Id' => 'Id']);
    }
}
