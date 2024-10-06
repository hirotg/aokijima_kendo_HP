<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>参加管理</title>
</head>



<body>
    <?php

    $user_pass = $_POST["pass"];

    


    

    if ($user_pass != "abcd1234") {
        print 'パスワードが一致しません。<br>';
        print "この画面へのアクセスは認められません";

    }else{

        print "ここに 大会の要項、選手、監督の情報を載せる";
        print '<table border="1">';

        print '<tr><td>2024/9/14(土)</td><td>保護者総会</td><td><a href="20240914_hogosya_soukai.pdf">保護者総会資料</a></td><td></td></tr>';
        print '<tr><td>2024/9/22(土)</td><td>長野市柔剣道大会</td><td></td><td>小学生団体</td></tr>';

        print '</table>';

    }

    ?>
</body>

</html>