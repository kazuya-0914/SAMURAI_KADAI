<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // 関数の実行
    $nums = [15, 4, 18, 23, 10 ];
    sort_2way($nums, true);
    sort_2way($nums, false);
    
    // ここからソート関数
    function sort_2way($array, $order) {
      if($order) :
        echo '昇順にソートします。<br>';
        sort($array);
      else :
        echo '降順にソートします。<br>';
        rsort($array);
      endif;

      // ソートの出力
      foreach($array as $num) :
        echo $num . '<br>';
      endforeach;
    }
    ?>
  </p>
</body>
</html>