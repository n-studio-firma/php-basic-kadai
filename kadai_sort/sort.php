<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_sort</title>
</head>
<body>
  <p>
    <?php

    function sort_2way($order) {
      if ($order === true) {
       echo "昇順にソートします。<br>";

       // ソートする配列を宣言
    $nums = array(15, 4, 18, 23, 10 );
    sort($nums);

    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    }

      else{ 
      echo "降順にソートします。<br>";

          // ソートする配列を宣言
    $nums = array(15, 4, 18, 23, 10 );
    rsort($nums);

    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    }
    }

    // 関数の呼び出し
    sort_2way(true);
    sort_2way(false);

    
    ?>
  </p>
  
</body>
</html>