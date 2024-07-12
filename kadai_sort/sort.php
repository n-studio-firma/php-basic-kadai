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

    function sort_2way($order,$nums) {
      if ($order === true) {
       echo "昇順にソートします。<br>";

    sort($nums);

    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    }

    else{ 
    echo "降順にソートします。<br>";

    rsort($nums);

    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    }
    }

  // ソートする配列を宣言
  $nums = array(15, 4, 18, 23, 10 );

    // 関数の呼び出し
    sort_2way(true, $nums);
    sort_2way(false, $nums);

    
    ?>
  </p>
  
</body>
</html>
