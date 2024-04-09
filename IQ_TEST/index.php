<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQ test</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class = "content">
    <h1>IQ 测试</h1>
    <div class = "maincontaint">
        <div>测试一下文字1232141245124213<br>
            第二行421412<br>
            第三行<br>
            第四行<br>
            点击下方按钮开始测试<br>
            <form action = "./index.php" method="post">
                <label>请随便输入一个名字</label>
                <input type = "text" name = "Name" >
                <button class="buttonSize">开始测试</button>
            </form>
        </div>
    </div>
</body>
</html>


<?php
    session_start();
    $uid = $_POST["Name"];
    $_SESSION['uid'] = $uid;
    $Score = 0;
    $Canswers = array('A','A','C','E','E','F','F','E','B','A','C','E','F','A','B');
    $_SESSION['Canswers'] = $Canswers;
    $_SESSION['Score'] = $Score;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";
    $sql = "INSERT INTO IQ_test (Name) VALUES ('$uid')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    header("Location: Q1.html");
    exit;
?>
