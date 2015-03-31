<?php
/* @var $this yii\web\View */
use yii\helpers\VarDumper;
echo "<h2> Список книг у которых 3 и более авторов.</h2>";
foreach($model as $m){
    echo ' Книга - '.$m[0]['name'].'<br />';
}
?>
