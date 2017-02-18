<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $ID
 * @property integer $CategoryId
 * @property string $Subject
 * @property string $DatePosted
 */
class Blog extends \yii\db\ActiveRecord
{

    public function getCategory()
    {
        return $this->hasOne(Category::className(),['ID'=>'CategoryId']);
    }




    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryId', 'Subject'], 'required'],
            [['CategoryId'], 'integer'],
            [['DatePosted'], 'safe'],
            [['Subject'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CategoryId' => 'Category ID',
            'Subject' => 'Subject',
            'DatePosted' => 'Date Posted',
        ];
    }
}
