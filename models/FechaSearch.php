<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fecha;

/**
 * FechaSearch represents the model behind the search form about `app\models\Fecha`.
 */
class FechaSearch extends Fecha
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Dia', 'Mes', 'Ano', ], 'integer'],
            [['Fecha', 'DiaS', 'Persona_Id'], 'safe'],
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
        $query = Fecha::find();

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
        $query->joinWith('persona');

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'Fecha' => $this->Fecha,
            'Dia' => $this->Dia,
            'Mes' => $this->Mes,
            'Ano' => $this->Ano,
        ]);

        $query->andFilterWhere(['like', 'DiaS', $this->DiaS])
              ->andFilterWhere(['like', 'persona.Nombre', $this->Persona_Id]);

        return $dataProvider;
    }
}
