<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_category_id', 'product_group_id', 'view_count', 'sort_order', 'active', 'quantity_current'], 'integer'],
            [['name', 'title', 'h1', 'meta_description', 'content', 'announce'], 'safe'],
            [['price', 'old_price'], 'number'],
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('product_category');   
        $query->joinWith('product_group');
        $query->andFilterWhere([
            'product_id' => $this->product_id,
            'product_category_id' => $this->product_category_id,
            'product_group_id' => $this->product_group_id,            
            'view_count' => $this->view_count,
            'sort_order' => $this->sort_order,
            'active' => $this->active,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'quantity_current' => $this->quantity_current,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'h1', $this->h1])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'announce', $this->announce]);
        
        return $dataProvider;
    }
}
