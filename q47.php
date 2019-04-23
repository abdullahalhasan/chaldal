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

    <form action="q50.php" method="post">
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">47. এগুলোর মধ্যে কোনটি কি আপনার (নামে/মালিকানায়)
                আছে? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q47" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">ঢাকার মধ্যে কোন যায়গা (নিজের নামে); যেমন
                            দোকানের পজিশন, বাড়ি বা গোডাউন</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q47" value="2">
                        <label class="form-check-label" for="inlineRadio2">ট্রাক, মিনি ট্রাক, পিকাপ, কাভার্ড
                            ভ্যান</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q47" value="3">
                        <label class="form-check-label" for="inlineRadio2">রিকশা ভ্যান, রিকশা, ঠেলা গাড়ি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q47" value="4">
                        <label class="form-check-label" for="inlineRadio2">গ্রামে ভিটা বা চাষাবাদি জমি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q47" value="5">
                        <label class="form-check-label" for="inlineRadio2">কোনটি-ই নেই</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">48. আপনি কত টুকু লেখা-পড়ার সুযোগ পেয়েছেন? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">স্কুলে/ মাদ্রাসায় যাবার সুযোগ হয় নি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="2">
                        <label class="form-check-label" for="inlineRadio2">ক্লাস ৫ পর্যন্ত</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="3">
                        <label class="form-check-label" for="inlineRadio2">ক্লাস ৬ থেকে ক্লাস ১০ পর্যন্ত</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="4">
                        <label class="form-check-label" for="inlineRadio2">এসএসসি, দাখিল, ভোকেশনাল</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="5">
                        <label class="form-check-label" for="inlineRadio2">এইচএসসি, আলিম, ডিপ্লোমা</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q48" value="6">
                        <label class="form-check-label" for="inlineRadio2">স্নাতক, ফাজিল বা তার উপর</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">49. আপনি কোথায় বসবাস করেন? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q49" value="1">
                        <label class="form-check-label" for="inlineRadio1">নিজের বাড়ি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q49" value="2">
                        <label class="form-check-label" for="inlineRadio2">ভাড়া বাসায়</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q49" value="3">
                        <label class="form-check-label" for="inlineRadio2">পরিবার/ আত্মিয়ের বাসায়</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q49" value="4">
                        <label class="form-check-label" for="inlineRadio2">মেস</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q49" value="5">
                        <label class="form-check-label" for="inlineRadio2">দোকানের ভেতর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q49" id="femaleRadio">
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

