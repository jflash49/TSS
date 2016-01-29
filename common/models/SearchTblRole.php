<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblRole;

/**
 * SearchTblRole represents the model behind the search form about `common\models\TblRole`.
 */
class SearchTblRole extends TblRole
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description'], 'integer'],
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
        $query = TblRole::find();

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
            'title' => $this->title,
            'description' => $this->description,
        ]);

        return $dataProvider;
    }
}
