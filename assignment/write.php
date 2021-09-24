<?php


// // ファイルに書き込み
// $sex = $_POST['sex'];
// $origin = $_POST['origin'];
// $age = $_POST['age'];

// //文字作成
// $str = $name . '/' . $bp . "\n";

// $file = fopen('data/data.txt', 'a');
// fwrite($file, $str);
// fclose($file);

?>
<?php


echo "選択された値 ：";
if (isset($_POST['name'])) {
    //送信ボタンがクリックされた場合
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    echo $name. ',';
  }

if (isset($_POST['sex'])) {
    //$_POST['sex']がすでに定義されている（値が送信されている）場合
    $sex_selected = $_POST['sex'];
    echo $sex_selected . ', ';
    
    // if (is_array($sex_selected)) {  //配列かどうかのチェック
    //     foreach ($sex_selected as  $value) {
    //         if (ctype_digit($value)) {  //入力値（配列の要素）は数字のみかを検証
    //             if ($value >= 1 && $value <= 2) {  //値の妥当性の検証（1以上3以下）
    //                 switch ($value) {
    //                     case 1:
    //                         echo 'Male, ';
    //                         break;
    //                     case 2:
    //                         echo 'Female, ';
    //                         break;
    //                 }
    //             }
    //         }
    //     }
    // }
}

if (isset($_POST['origin'])) {
    //$_POST['places']がすでに定義されている（値が送信されている）場合
    $origin_selected = $_POST['origin'];
    echo $origin_selected . ', ';
    // if (is_array($origin_selected)) {  //配列かどうかのチェック
    //     foreach ($origin_selected as  $value) {
    //         if (ctype_digit($value)) {  //入力値（配列の要素）は数字のみかを検証
    //             if ($value >= 1 && $value <= 2) {  //値の妥当性の検証（1以上3以下）
    //                 switch ($value) {
    //                     case 1:
    //                         echo 'Japan, ';
    //                         break;
    //                     case 2:
    //                         echo 'Abroad, ';
    //                         break;
    //                 }
    //             }
    //         }
    //     }
    // }
}

if (isset($_POST['age'])) {
    //$_POST['places']がすでに定義されている（値が送信されている）場合
    $age_selected = $_POST['age'];
    echo $age_selected . ', ';
    // if (is_array($age_selected)) {  //配列かどうかのチェック
    //     foreach ($age_selected as  $value) {
    //         if (ctype_digit($value)) {  //入力値（配列の要素）は数字のみかを検証
    //             if ($value >= 1 && $value <= 5) {  //値の妥当性の検証（1以上3以下）
    //                 switch ($value) {
    //                     case 1:
    //                         echo 'Teens ';
    //                         break;
    //                     case 2:
    //                         echo 'Twenties ';
    //                         break;
    //                     case 3:
    //                         echo 'Thirties ';
    //                         break;
    //                     case 4:
    //                         echo 'Forties ';
    //                         break;
    //                     case 5:
    //                         echo 'Over Fifty ';
    //                         break;
    //                 }
    //             }
    //         }
    //     }
    // }
}

$ar = array($name, $sex_selected, $origin_selected, $age_selected);
// var_dump($ar);

$file = fopen('data/data.csv', 'a');
$line = implode(',', $ar);
fwrite($file, $line . "\n");

fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>記載ありがとうございました。</h1>

    <ul>
        <li><a href="input.php">再提出</a></li>
    </ul>
</body>

</html>