<?php
    session_start();
    session_unset();
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incepta Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head><!--/head-->
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Survey Questionnaire</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <form method="post" action="index.php">
                    <li><button class="btn btn-danger" type="submit" name="end">End Survey</button></li>
                </form>
            </ul>
        </div>
    </nav>
    <!--/#main-slider-->
    <br>
    <!--Heading-->
    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align: center">Good morning/afternoon/evening Sir, My name is ____________ from Mindscape Limited, a market research company. We would like to know about your vegetable business.<br><br>
                I will take only 10-15 minutes. There are questions related to your business and your opinion on how to make your life easier. We are giving away 20 taka mobile recharge for participating in to our survey.<br><br>
                All your provided information will remain confidential and will only be used for research purpose. We will never disclose your contact details with any one.<br>
            </h2>
        </div>
        <div>
            <a href="q1.php"><input type="submit" class="btn btn-success right-arrow" name="next" value="Next" style="float: right"></a>
        </div>
    </div>
    <br>

</body>
</html>
