<?php
/* @var $this yii\web\View */
use yii\helpers\VarDumper;


echo "<h2> Авторы.</h2>";
foreach($model as $m){
    echo 'Автор - '.$m[0]['name'].'<br />';
}
?>
