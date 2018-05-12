<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dev test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="form-block">
    <form id="form" method="post" action="saveform.php">
        <div class="form-item">
            <label for="name">Your name:</label>
            <input id="name" name="name" type="text" class="form-text" value="" placeholder="Please leave your name here">
        </div>
        <h3>What are your major life goals</h3>
        <div class="form-item">
            <label for="goal1">Goal #1:</label>
            <input id="goal1" name="goal1" type="text" class="form-text" value="" placeholder="Put your goal #1 here">
        </div>
        <div class="form-item">
            <label for="goal2">Goal #2:</label>
            <input id="goal2" name="goal2" type="text" class="form-text" value="" placeholder="Put your goal #2 here">
        </div>
        <div class="form-item">
            <label for="goal3">Goal #3:</label>
            <input id="goal3" name="goal3" type="text" class="form-text" value="" placeholder="Put your goal #3 here">
        </div>
        <input type="button" class="submit" value="Submit">
        <span class="error"></span>
    </form>
    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <p>Thanks for your answers</p>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
