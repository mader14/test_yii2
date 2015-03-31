<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author_book".
 *
 * @property integer $authid
 * @property integer $bookid
 *
 * @property Book $book
 * @property Author $auth
 */
class Authorbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['authid', 'bookid'], 'required'],
            [['authid', 'bookid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'authid' => 'Authid',
            'bookid' => 'Bookid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['bookid' => 'bookid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuth()
    {
        return $this->hasOne(Author::className(), ['authorid' => 'authid']);
    }
}
