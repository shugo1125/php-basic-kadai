<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($array, $order)
    {
      if ($order) {
        echo '昇順にソートします' . "<br>";

        sort($array); // 昇順にソート

        // 値を縦に出力
        foreach ($array as $ar) {
          echo $ar . "<br>";
        }
      } else {
        echo '降順にソートします' . "<br>";

        rsort($array); // 昇順にソート

        // 値を縦に出力
        foreach ($array as $ar) {
          echo $ar . "<br>";
        }
      }
    }


    // 関数を呼び出し、引数として購入金額と送料を渡す
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
  </p>
</body>

</html>