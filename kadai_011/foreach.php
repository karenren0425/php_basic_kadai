<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $goods_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($goods_data as $key => $data) {
      echo "{$key}:{$data} <br>";
    }
    ?>
    </p>
</body>

</html>