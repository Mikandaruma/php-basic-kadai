<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題005</title>

</head>

<body>
    <p>
        <?php

        //変数に値を代入する
        $score1 = '80';
        $score2 = '60';
        $score3 = '55';
        $score4 = '40';
        $score5 = '100';
        $score6 = '25';
        $score7 = '80';
        $score8 = '95';
        $score9 = '30';
        $score10 = '60';

        //四則演算を使って合計点を計算する
       $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 +$score10;

       //四則演算を使って平均点を出力する
       echo $total_score / 10;

     ?>
    
    </p>

</body>

</html>