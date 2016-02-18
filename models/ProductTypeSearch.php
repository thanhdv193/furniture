<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductType;

/**
 * ProductTypeSearch represents the model behind the search form about `app\models\ProductType`.
 */
class ProductTypeSearch extends ProductType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'z_index', 'is_menu', 'create_date', 'active'], 'integer'],
            [['title', 'description', 'link', 'olink'], 'safe'],
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
        $query = ProductType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'z_index' => $this->z_index,
            'is_menu' => $this->is_menu,
            'create_date' => $this->create_date,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'olink', $this->olink]);

        return $dataProvider;
    }
}
