<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果Table</title>
</head>

<body>
    <h1>参加者名簿</h1>
    <table border='1'>
        <tr>
            <th>名前</th>
            <th>性別</th>
            <th>出身</th>
            <th>年代</th>
        </tr>

        <?php
        // ファイルを開く
        $openFile = fopen('data/data.csv', 'r');

        // // ファイル内容を1行ずつ読み込んで出力
        // while ($str = fgetcsv($openFile)) {
        //     echo nl2br($str);
        // }

        // while (($array = fgetcsv($openFile)) !== FALSE) {
        //     //空行を取り除く
        //     if (!array_diff($array, array(''))) {
        //         continue;
        //     }

        //     while ($data = fgetcsv($openFile)) {
        //         echo "<tr>";
        //         echo '<td>' . $data[0] . '</td>';
        //         echo '<td>' . $data[1] . '</td>';
        //         echo '<td>' . $data[2] . '</td>';
        //         echo '<td>' . $data[3] . '</td>';
        //         echo '</tr>';
        //     }
        //     echo "</tr>";
        // };

        while (($array = fgetcsv($openFile)) !== FALSE) {
	
            //空行を取り除く
            if(!array_diff($array, array(''))){
                continue;
            }
            
            echo "<tr>";
            for($i = 0; $i < count($array); ++$i ){
                $elem = nl2br(mb_convert_encoding($array[$i], 'UTF-8', 'SJIS'));
                $elem = $elem === "" ?  "&nbsp;" : $elem;
                echo("<td>".$elem."</td>");
            }
            echo "</tr>";
            
        }
        // ファイルを閉じる
        fclose($openFile);
        ?>

    </table>

</body>

</html>