<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Evento".
 *
 * @property integer $Id
 * @property string $Tiempo
 * @property integer $Hora
 * @property integer $Minuto
 * @property integer $Segundo
 * @property integer $STotal
 * @property string $Evento
 * @property string $Dispositivo
 * @property integer $Fecha_Id
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tiempo', 'Fecha_Id'], 'safe'],
            [['Hora', 'Minuto', 'Segundo', 'STotal'], 'integer'],
            [['Evento', 'Dispositivo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Tiempo' => 'Tiempo',
            'Hora' => 'Hora',
            'Minuto' => 'Minuto',
            'Segundo' => 'Segundo',
            'STotal' => 'Stotal',
            'Evento' => 'Evento',
            'Dispositivo' => 'Dispositivo',
            'Fecha_Id' => 'Fecha  ID',
        ];
    }

    /**
     * @inheritdoc
     * @return EventoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventoQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFecha()
    {
        return $this->hasOne(Fecha::className(), ['Id' => 'Fecha_Id']);
    }

    public function getPersona()
    {
        return $this->hasOne(Persona::className(), ['Id' => 'Persona_Id'])->viaTable('Fecha', ['Id' => 'Fecha_Id']);
    }
}
