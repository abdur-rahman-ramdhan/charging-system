<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RoleModule;

/**
 * RoleModuleSearch represents the model behind the search form about `app\models\RoleModule`.
 */
class RoleModuleSearch extends RoleModule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role_id', 'module_id'], 'integer'],
            [['view', 'add', 'update', 'delete'], 'safe'],
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
        $query = RoleModule::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'role_id' => $this->role_id,
            'module_id' => $this->module_id,
        ]);

        $query->andFilterWhere(['like', 'view', $this->view])
            ->andFilterWhere(['like', 'add', $this->add])
            ->andFilterWhere(['like', 'update', $this->update])
            ->andFilterWhere(['like', 'delete', $this->delete]);

        return $dataProvider;
    }
}
