<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題011</title>

</head>

<body>
   <?php
   //キーと値を持つ連想配列を作成し、変数に代入
   $vegitable_data = ['名前' => '玉ねぎ', '値段'=> 200, '産地' => '北海道'];

   //foreach文とecho文を使いブラウザに要素それぞれのキーと値を出力
foreach($vegitable_data as $key => $value){
    echo "{$key} : {$value}<br>";
}
   ?>
</body>