<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        function sort_2way($array, $order){
           
         //変数$numsは昇順か降順か？

        if ($order) {
            echo '昇順にソートします。<br>';
            sort($array);
           
        }
        else {
            echo '降順にソートします。<br>';
            rsort($array);
        }

        foreach ($array as $num){
            echo $num . '<br>';
        }
        }

        

        //配列の定義
        $nums = [15, 4, 18, 23, 10];

        //ソート関数の呼び出し
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        
        ?>
    </p>
</body>

</html>
