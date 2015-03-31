<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reader".
 *
 * @property integer $readerid
 * @property string $name
 * @property integer $date
 * @property integer $date_change
 *
 * @property ReaderBook[] $readerBooks
 */
class Reader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reader';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'date_change'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'readerid' => 'Readerid',
            'name' => 'Name',
            'date' => 'Date',
            'date_change' => 'Date Change',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReaderBooks()
    {
        return $this->hasMany(ReaderBook::className(), ['readerid' => 'readerid']);
    }
}
