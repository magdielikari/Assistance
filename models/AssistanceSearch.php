<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Assistance;

/**
 * AssistanceSearch represents the model behind the search form about `app\models\Assistance`.
 */
class AssistanceSearch extends Assistance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Dia', 'Mes', 'Ano', 'Hora', 'Minuto', 'Segundo', 'STotal', 'CI'], 'integer'],
            [['Fecha', 'DiaS', 'Tiempo', 'Nombre', 'Dispositivo', 'Evento'], 'safe'],
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
        $query = Assistance::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Fecha' => $this->Fecha,
            'Dia' => $this->Dia,
            'Mes' => $this->Mes,
            'Ano' => $this->Ano,
            'Tiempo' => $this->Tiempo,
            'Hora' => $this->Hora,
            'Minuto' => $this->Minuto,
            'Segundo' => $this->Segundo,
            'STotal' => $this->STotal,
            'CI' => $this->CI,
        ]);

        $query->andFilterWhere(['like', 'DiaS', $this->DiaS])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Dispositivo', $this->Dispositivo])
            ->andFilterWhere(['like', 'Evento', $this->Evento]);

        return $dataProvider;
    }
}
