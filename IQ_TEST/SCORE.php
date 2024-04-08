<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
    session_start();
    $result = $_SESSION['Score'];
?>


<body class = "content">
    
    <h1>IQ 测试</h1>
    <h1><?php echo $result ?></h1>
    <div class = "maincontaint">
        这是最后一页
    </div>
</body>
</html>