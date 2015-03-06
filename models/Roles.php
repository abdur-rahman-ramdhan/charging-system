<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property integer $id
 * @property string $role_kode
 * @property string $role_name
 * @property string $active
 *
 * @property RoleModule[] $roleModules
 * @property UserRole[] $userRoles
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_kode', 'role_name', 'active'], 'required'],
            [['active'], 'string'],
            [['role_kode'], 'string', 'max' => 2],
            [['role_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_kode' => 'Kode Role',
            'role_name' => 'Nama Role',
            'active' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoleModules()
    {
        return $this->hasMany(RoleModule::className(), ['role_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRoles()
    {
        return $this->hasMany(UserRole::className(), ['role_id' => 'id']);
    }
}
