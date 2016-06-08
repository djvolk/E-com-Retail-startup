<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todolistdesc".
 *
 * @property integer $id
 * @property string $description
 *
 * @property Todolist $id0
 */
class Todolistdesc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todolistdesc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['description'], 'required'],
            [['description'], 'string'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Todolist::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Todolist::className(), ['id' => 'id']);
    }
}
