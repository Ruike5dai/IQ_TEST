<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple IQ test</title>
    <link rel="stylesheet" href="../IQ_TEST/statics/css/styles.css">
</head>

<body class = "content">
    <h1>Fluid IQ TEST</h1>
    <div class = "maincontent">
        <div>
            <p>Welcome to the Fluid Intelligence Test! This test is designed to assess your cognitive abilities in solving novel problems, identifying patterns, and logical reasoning.</p>
            <p>We are particularly interested in how factors such as age, educational background, and other variables may influence your problem-solving strategies and efficiency.<p>
            <p>The test consists of a series of questions, each with a time limit. Your response time and accuracy will be recorded for research purposes only.</p>
            <p>All data collected will be anonymized and used solely for academic research.</p>
            <p>Your privacy will be strictly protected. Participation is voluntary, and you may withdraw at any time.</p>

            <form action = "./Q1.php" method="post">
                <label>Name(or Nick name)</label>
                <input type = "text" name = "Name" >
                <br></br>
                <label>Age</label>
                <input type = "text" name = "Age" >
                <br></br>
                <label>Education Level</label>
                <input type = "text" name = "Education" >
                <br></br>
                <button class="buttonSize">Start</button>
            </form>
        </div>
    </div>
</body>
</html>
