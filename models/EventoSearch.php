<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Evento;

/**
 * EventoSearch represents the model behind the search form about `app\models\Evento`.
 */
class EventoSearch extends Evento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Hora', 'Minuto', 'Segundo', 'STotal'], 'integer'],
            [['Tiempo', 'Evento', 'Dispositivo', 'Fecha_Id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Evento::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // Query for name in Persona 
//        $query->joinWith('persona');

        // Query for name in Persona 
        $query->joinWith('fecha');

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'Tiempo' => $this->Tiempo,
            'Hora' => $this->Hora,
            'Minuto' => $this->Minuto,
            'Segundo' => $this->Segundo,
            'STotal' => $this->STotal,
        ]);

        $query->andFilterWhere(['like', 'Evento', $this->Evento])
            ->andFilterWhere(['like', 'Dispositivo', $this->Dispositivo])
            ->andFilterWhere(['like', 'fecha.Fecha', $this->Fecha_Id]);
//            ->andFilterWhere(['like', 'persona.Nombre', $this->Persona_Id]);

        return $dataProvider;
    }
}
