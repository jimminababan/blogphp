<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $ID
 * @property integer $BlogId
 * @property string $Name
 * @property string $Comment
 * @property string $DatePosted
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BlogId', 'Name', 'Comment', 'DatePosted'], 'required'],
            [['BlogId'], 'integer'],
            [['Comment'], 'string'],
            [['DatePosted'], 'safe'],
            [['Name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'BlogId' => 'Blog ID',
            'Name' => 'Name',
            'Comment' => 'Comment',
            'DatePosted' => 'Date Posted',
        ];
    }
}
