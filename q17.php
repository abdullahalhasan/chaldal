<?php
session_start();
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/16/2019
 * Time: 10:09 PM
 */
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

    <form action="q20.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label for="gender" class="col-md-4 col-form-label">17. আপনার দোকানে কোন কর্মচারী আছে? </label>
                    <div class="col-md-8">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q17" id="yesRadio" value="1" required
                                   onclick="empChk()">
                            <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q17" id="noRadio" value="2"
                                   onclick="empChk()">
                            <label class="form-check-label" for="inlineRadio2">না</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group" id="employee" style="display: none">
            <div class="row">
                <div class="col-md-12">
                    <label for="center" class="col-md-4 col-form-label">18. কত জন কর্মচারী?</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="q18">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label for="gender" class="col-md-4 col-form-label">19. কত ঘন ঘন আপনার দোকান চলা অবস্থায় সবজীর মজুত
                        ফুরিয়ে যায়?? </label>
                    <div class="col-md-8">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q19" id="maleRadio" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">প্রতিদিন</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q19" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">প্রায়শই (প্রতি ২-৩ দিনে একবার)</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q19" id="femaleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio2">শুক্র/শনিবার হলে / ছুটির দিন
                                গুলোতে</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q19" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">সচরাচর হয় না</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q19" id="femaleRadio" value="5">
                            <label class="form-check-label" for="inlineRadio2">কখনই হয় না</label>
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

<script language="JavaScript">
    function empChk() {
        //married_check
        var mar = document.getElementById("yesRadio");
        var unMar = document.getElementById("noRadio");
        var married_div = document.getElementById("employee");
        if (unMar.checked) {
            married_div.style.display = "none";
        }
        if (mar.checked) {
            married_div.style.display = "block";
        }
    }
</script>