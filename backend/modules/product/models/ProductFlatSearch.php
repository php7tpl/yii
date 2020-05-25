<?php

namespace backend\modules\product\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\product\models\ProductFlat;

/**
 * ProductFlatSearch represents the model behind the search form of `backend\modules\product\models\ProductFlat`.
 */
class ProductFlatSearch extends ProductFlat{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'block_id', 'room_count', 'price'], 'integer'],
            [['area'], 'number'],
            [['scheme_image'], 'safe'],
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
        $query = ProductFlat::find();

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
            'block_id' => $this->block_id,
            'area' => $this->area,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'room_count', $this->room_count])
            ->andFilterWhere(['like', 'scheme_image', $this->scheme_image]);

        return $dataProvider;
    }
}
