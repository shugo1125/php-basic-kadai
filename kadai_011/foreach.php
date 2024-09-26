<?php
$personal_data = ['id' => '1', '名前' => '侍太郎', '年齢' => '30'];

// 連想配列$personal_dataのキーと値を1つずつ順番に出力する
foreach ($personal_data as $key => $value) {
  echo "{$key}:{$value}<br>";
}
