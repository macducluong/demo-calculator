
<html>
<head>
    <title></title>
    <body>
        <form action="function.php" method="POST">
            firstname
            <input type="number" name="firstname" value=""><br>
            operator:
            <select name="operator">
                <option value="+">phep cong(+)</option>
                <option value="-">phep tru(-)</option>
                <option value="*">phep nhan(*)</option>
                <option value="/">phep chia(/)</option>
            </select><br>
            secondname
            <input type="number" name="secondname" value=""><br>
            <input type="submit" name="calculator" value="ketqua">
            result:
        </form>
    </body>
</head>
</html>