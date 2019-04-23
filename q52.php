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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>

</head><!--/head-->
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Survey Questionnaire</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <form method="post" action="index.php">
                <li>
                    <button class="btn btn-danger" type="submit" name="end">End Survey</button>
                </li>
            </form>
        </ul>
    </div>
</nav>
<!--/#main-slider-->
<br>
<!--Heading-->
<div class="container">

    <form action="q57.php" method="post">

        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">52. এই সব খাতে মাসে আনুমানিক আপনার কত টাকা খরচ
                হয়? </label>
            <div class="col-md-8">

                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">বাসা ভাড়া (বিল সহ) -</label>
                        <input class="form-check-input" type="number" name="q52a">

                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">খাবার -</label>
                        <input class="form-check-input" type="number" name="q52b" placeholder="%">
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">কাপড় চোপড় -</label>
                        <input class="form-check-input" type="number" name="q52c" placeholder="%">

                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">পড়ালেখার খরচ -</label>
                        <input class="form-check-input" type="number" name="q52d">
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">যাতায়াত -</label>
                        <input class="form-check-input" type="number" name="q52e">

                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">চিকিৎসা -</label>
                        <input class="form-check-input" type="number" name="q52f">
                    </div>

                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">বিনোদন -</label>
                        <input class="form-check-input" type="number" name="q52g">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">53. আপনি কি এই ব্যবসায়ের আগে অন্য কোথাও কাজ
                করতেন? </label>
            <div class="col-md-4">

                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="q53" id="yesRadio" value="1" required
                           onclick="empChk()">
                    <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="q53" id="noRadio" value="2" onclick="empChk()">
                    <label class="form-check-label" for="inlineRadio2">না</label>
                </div>

            </div>
        </div>
        <div class="form-group row" id="employee" style="display: none">
            <label for="gender" class="col-md-4 col-form-label">54. কি ধরনের কাজ তা সিলেক্ট করুন </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="1">
                        <label class="form-check-label" for="inlineRadio1">সবজীর ব্যবসায় কর্মচারী হিসেবে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="2">
                        <label class="form-check-label" for="inlineRadio2">অন্য কোন দোকানে কর্মচারী হিসেবে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="3">
                        <label class="form-check-label" for="inlineRadio2">দিন মজুর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="4">
                        <label class="form-check-label" for="inlineRadio2">পরিবহন কর্মচারী</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="5">
                        <label class="form-check-label" for="inlineRadio2">গার্মেন্টস বা কোন ফ্যাক্টরি তে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="6">
                        <label class="form-check-label" for="inlineRadio2">নিজের-ই অন্য ব্যবসা ছিলো</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="7">
                        <label class="form-check-label" for="inlineRadio2">বাসা-বাড়ি তে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q54" value="8">
                        <label class="form-check-label" for="inlineRadio2">কোন অফিসে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q54" id="femaleRadio">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">55. লাস্ট কবে আপনি এই ব্যবসা ছাড়া অন্য খানে কাজ
                করেছেন? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q55" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">গত ৩ মাসের মধ্যে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q55" value="2">
                        <label class="form-check-label" for="inlineRadio2">৪-৬ মাসের মধ্যে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q55" value="3">
                        <label class="form-check-label" for="inlineRadio2">৭-১২ মাসের মধ্যে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q55" value="4">
                        <label class="form-check-label" for="inlineRadio2">১-২ বছরের মধ্যে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q55" value="5">
                        <label class="form-check-label" for="inlineRadio2">২ বছরের আগে</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">56. আপনি কি এই ব্যবসার পাশা পাশি অন্য কোন ব্যবসা করেন?
                [উত্তর হ্যাঁ হলে কি ধরনের ব্যবসা করেন তা লিখুন]</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="q56" required>
            </div>
        </div>

        <!-- next button-->
        <div>
            <button type="submit" class="btn btn-success" name="next_btn">Next</button>
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