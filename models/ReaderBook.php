<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reader_book".
 *
 * @property integer $readerid
 * @property integer $bookid
 * @property integer $id
 * @property integer $authid
 *
 * @property Reader $reader
 * @property Book $book
 */
class ReaderBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reader_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['readerid', 'bookid', 'authid'], 'required'],
            [['readerid', 'bookid', 'authid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'readerid' => 'Readerid',
            'bookid' => 'Bookid',
            'id' => 'ID',
            'authid' => 'Authid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReader()
    {
        return $this->hasOne(Reader::className(), ['readerid' => 'readerid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['bookid' => 'bookid']);
    }
}
