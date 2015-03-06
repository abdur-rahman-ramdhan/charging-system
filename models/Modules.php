<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modules".
 *
 * @property integer $id
 * @property string $module_kode
 * @property string $module_name
 * @property string $active
 *
 * @property RoleModule[] $roleModules
 */
class Modules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module_kode', 'module_name', 'active'], 'required'],
            [['active'], 'string'],
            [['module_kode', 'module_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'module_kode' => 'Kode Module',
            'module_name' => 'Nama Module',
            'active' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoleModules()
    {
        return $this->hasMany(RoleModule::className(), ['module_id' => 'id']);
    }
}
