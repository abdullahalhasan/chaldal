<?php
    session_start();

    if (isset($_POST['next_btn'])) {

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Survey</title>
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

    <form action="q7.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label for="gender" class="col-md-6 col-form-label">6. বয়সের সীমা ?    </label>
                    <div class="col-md-6">

                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="q6" id="maleRadio" value="1">
                            <label class="form-check-label" for="inlineRadio1">১৫ বছরের নিচে</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q6" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">১৫-১৭ বছর</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="maleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio1">১৮ - ২৪ বছর </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">২৫ - ৩৪ বছর </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="maleRadio" value="5">
                            <label class="form-check-label" for="inlineRadio1">৩৫ - ৪০ বছর </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="femaleRadio" value="6">
                            <label class="form-check-label" for="inlineRadio2">৪৫ - ৫৪ বছর </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="maleRadio" value="7">
                            <label class="form-check-label" for="inlineRadio1">৫৫ - ৬০ বছর </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q6" id="femaleRadio" value="8">
                            <label class="form-check-label" for="inlineRadio2">৬০ এর বেশি </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- next button-->
        <div>
            <button type="submit" class="btn btn-success" name="next_btn">Next</button>
            <!--<a href="q.php"><input type="submit" class="btn btn-success right-arrow" name="next" value="Next"></a>-->
        </div>

    </form>

</div>
<br>

</body>
</html>

