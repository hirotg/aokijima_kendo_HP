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

    }

    ?>
</body>

</html>