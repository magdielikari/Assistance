<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assistance".
 *
 * @property integer $id
 * @property string $Fecha
 * @property string $DiaS
 * @property integer $Dia
 * @property integer $Mes
 * @property integer $Ano
 * @property string $Tiempo
 * @property integer $Hora
 * @property integer $Minuto
 * @property integer $Segundo
 * @property integer $STotal
 * @property integer $CI
 * @property string $Nombre
 * @property string $Dispositivo
 * @property string $Evento
 */
class Assistance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assistance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'Tiempo'], 'safe'],
            [['DiaS', 'Nombre', 'Dispositivo', 'Evento'], 'string'],
            [['Dia', 'Mes', 'Ano', 'Hora', 'Minuto', 'Segundo', 'STotal', 'CI'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Fecha' => 'Fecha',
            'DiaS' => 'Dia S',
            'Dia' => 'Dia',
            'Mes' => 'Mes',
            'Ano' => 'Ano',
            'Tiempo' => 'Tiempo',
            'Hora' => 'Hora',
            'Minuto' => 'Minuto',
            'Segundo' => 'Segundo',
            'STotal' => 'Stotal',
            'CI' => 'Ci',
            'Nombre' => 'Nombre',
            'Dispositivo' => 'Dispositivo',
            'Evento' => 'Evento',
        ];
    }

    /**
     * @inheritdoc
     * @return AssistanceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AssistanceQuery(get_called_class());
    }
}
