<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <h1>参加者アンケート</h1>
    <p>ご参加希望の方は、選択の上で送信を押してください。</p>

    <!-- <form action="write.php" method="post">
        性別: <select name="sex">
            <option value="man">男性</option>
            <option value="female">女性</option>
        </select>
        <br>
        出身: <select name="origin">
            <option value="japan">日本</option>
            <option value="abroad">海外</option>
        </select>
        <br>
        年代: <select name="age">
            <option value="under20">20才未満</option>
            <option value="twenties">20代</option>
            <option value="thirties">30代</option>
            <option value="forties">40代</option>
            <option value="over">50代以上</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form> -->

    <form method="post" action="write.php">
        <p>名前</p>
        <input type="text" name="name">
        <br>
        <p>性別</p>
        <select name="sex" size="2" multiple>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <p>出身</p>
        <select name="origin" size="2" multiple>
            <option value="Japan">Japan</option>
            <option value="Abroad">Abroad</option>
        </select>
        <br>
        <p>年代</p>
        <select name="age" size="5" multiple>
            <option value="Teens">Teens</option>
            <option value="Twenties">Twenties</option>
            <option value="Thirties">Thirties</option>
            <option value="Forties">Forties</option>
            <option value="Over">Over Fifty</option>
        </select>
        <input type="submit" value="送信">
    </form>
</body>

</html>