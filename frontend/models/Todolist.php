<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "todolist".
 *
 * @property integer $id
 * @property string $name
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Todolistdesc $todolistdesc
 */
class Todolist extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'todolist';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'updated_at' => 'Время редактирования',
            'created_at' => 'Время создания',
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTodolistdesc() {
        return $this->hasOne(Todolistdesc::className(), ['id' => 'id']);
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert))
        {
            if ($this->isNewRecord)
                $this->created_at = $this->updated_at = new Expression('NOW()');
            else
                $this->updated_at = new Expression('NOW()');
            return true;
        }
    }

}
