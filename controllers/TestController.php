<?php

namespace app\controllers;

use app\models\Authorbook;
use app\models\Book;
use app\models\Author;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Authorbook::findBySql('select bookid,count(*) from author_book GROUP by bookid HAVING count(*)>2')
            ->asArray()
            ->all();

        foreach($model as $mod)
        $m[$mod['bookid']]=Book::find()->where(['bookid'=>$mod['bookid']])->asArray()->all();
       // $model->Book;

        return $this->render('index',['model'=>$m]);
    }


    public function actionAuth()
    {
        $model = Authorbook::findBySql('select authid,count(*) from reader_book GROUP by authid HAVING count(*)>2')
            ->asArray()
            ->all();
        foreach($model as $mod)
            $m[$mod['authid']]=Author::find()->where(['authorid'=>$mod['authid']])->asArray()->all();
        return $this->render('auth',['model'=>$m]);
    }

    public function actionRand()
    {
        $model = Authorbook::findBySql("select * from book order by rand() limit 5")
            ->asArray()
            ->all();
        return $this->render('rand',['model'=>$model]);
    }
}
