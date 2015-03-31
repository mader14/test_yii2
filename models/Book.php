<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $bookid
 * @property string $name
 * @property integer $date
 * @property integer $date_changes
 *
 * @property AuthorBook[] $authorBooks
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'date_changes'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookid' => 'Bookid',
            'name' => 'Name',
            'date' => 'Date',
            'date_changes' => 'Date Changes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorBooks()
    {
        return $this->hasMany(AuthorBook::className(), ['bookid' => 'bookid']);
    }
}
