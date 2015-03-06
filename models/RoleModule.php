<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role_module".
 *
 * @property integer $id
 * @property integer $role_id
 * @property integer $module_id
 * @property string $view
 * @property string $add
 * @property string $update
 * @property string $delete
 *
 * @property Roles $role
 * @property Modules $module
 */
class RoleModule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role_module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'module_id', 'view', 'add', 'update', 'delete'], 'required'],
            [['role_id', 'module_id'], 'integer'],
            [['view', 'add', 'update', 'delete'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_id' => 'Role',
            'module_id' => 'Module',
            'view' => 'View',
            'add' => 'Add',
            'update' => 'Update',
            'delete' => 'Delete',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id' => 'role_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(Modules::className(), ['id' => 'module_id']);
    }
}
