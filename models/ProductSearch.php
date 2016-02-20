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
    public $productType;
    public $productGroup;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_group_id', 'product_type_id', 'product_category_id', 'is_hethang', 'is_new', 'is_top', 'is_active', 'time_left', 'z_index', 'quantity_current', 'view_count'], 'integer'],
            [['productGroup','productType','title', 'link', 'olink', 'olink2', 'description', 'content', 'seo_title', 'seo_keyword', 'seo_description', 'seo_photo_alt', 'create_date', 'discount_bonus', 'code_product', 'size', 'origin', 'tags'], 'safe'],
            [['discount', 'price', 'old_price'], 'number'],
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
            $query->joinWith(['product_type','product_group']);            
            return $dataProvider;
        }
        
        //$this->addCondition($query, 'product_type_id');
        //$query->joinWith('product_group');
        if($this->productType != null)
        {
            $query->joinWith(['product_type' => function ($q) {
                $q->where('product_type.title LIKE "%' . $this->productType . '%"');
            }]);
        }
        
        if($this->productGroup != null)
        {
            $query->joinWith(['product_group' => function ($q) {
                $q->where('product_group.title LIKE "%' . $this->productGroup . '%"');
            }]);            
        }
       
        $query->andFilterWhere([
            'id' => $this->id,
            'product_group_id' => $this->product_group_id,
            'product_type_id' => $this->product_type_id,
            'product_category_id' => $this->product_category_id,
            'is_hethang' => $this->is_hethang,
            'is_new' => $this->is_new,
            'is_top' => $this->is_top,
            'create_date' => $this->create_date,
            'is_active' => $this->is_active,
            'discount' => $this->discount,
            'price' => $this->price,
            'time_left' => $this->time_left,
            'z_index' => $this->z_index,
            'old_price' => $this->old_price,
            'quantity_current' => $this->quantity_current,
            'view_count' => $this->view_count,
        ]);

        $query->andFilterWhere(['like', 'product.title', $this->title])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'olink', $this->olink])
            ->andFilterWhere(['like', 'olink2', $this->olink2])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keyword', $this->seo_keyword])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description])
            ->andFilterWhere(['like', 'seo_photo_alt', $this->seo_photo_alt])
            ->andFilterWhere(['like', 'discount_bonus', $this->discount_bonus])
            ->andFilterWhere(['like', 'code_product', $this->code_product])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'tags', $this->tags]);
        
        return $dataProvider;
    }
}
