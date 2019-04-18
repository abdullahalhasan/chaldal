<?php
    session_start();
    if (isset($_POST['next_btn'])) {
        $q9 = $_POST['q9'];
        if ($q9 == "5") {
            header('Location: end.php');
        }
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

        <!--<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">-->

        <!--<link href="style.css" rel="stylesheet" />-->
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

        <form action="q11.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="gender" class="col-md-4 col-form-label">10. আপনার দোকানে যে যে আইটেম গুলো আছে সেগুলো সিলেক্ট করুন?  </label>
                        <div class="col-md-8">

                            <div class=" form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="পেঁয়াজ">
                                <label class="form-check-label" for="inlineRadio1">পেঁয়াজ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="টমেটো">
                                <label class="form-check-label" for="inlineRadio2">টমেটো</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="আলু">
                                <label class="form-check-label" for="inlineRadio1">আলু </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="রসুন">
                                <label class="form-check-label" for="inlineRadio2">রসুন </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="ধনিয়া পাতা">
                                <label class="form-check-label" for="inlineRadio1">ধনিয়া পাতা </label>
                            </div>
                            <div class=" form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="কাঁচা মরিচ">
                                <label class="form-check-label" for="inlineRadio1">কাঁচা মরিচ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="আদা">
                                <label class="form-check-label" for="inlineRadio2">আদা</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="গাজর">
                                <label class="form-check-label" for="inlineRadio1">গাজর </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="লাল শাক">
                                <label class="form-check-label" for="inlineRadio2">লাল শাক </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="ঢেঁড়স">
                                <label class="form-check-label" for="inlineRadio1">ঢেঁড়স </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="কাঁচা পেপে">
                                <label class="form-check-label" for="inlineRadio2">কাঁচা পেপে </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="শশা">
                                <label class="form-check-label" for="inlineRadio1">শশা </label>
                            </div>
                            <div class=" form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="পালং শাক">
                                <label class="form-check-label" for="inlineRadio1">পালং শাক</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="পটল">
                                <label class="form-check-label" for="inlineRadio2">পটল</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="লেবু">
                                <label class="form-check-label" for="inlineRadio1">লেবু </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="ক্যাপসিকাম">
                                <label class="form-check-label" for="inlineRadio2">ক্যাপসিকাম </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="শিম">
                                <label class="form-check-label" for="inlineRadio1">শিম </label>
                            </div>
                            <div class=" form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="মিষ্টি কুমড়া">
                                <label class="form-check-label" for="inlineRadio1">মিষ্টি কুমড়া</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="চিচিঙ্গা">
                                <label class="form-check-label" for="inlineRadio2">চিচিঙ্গা</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="বেগুন">
                                <label class="form-check-label" for="inlineRadio1">বেগুন </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="বাধাকপি">
                                <label class="form-check-label" for="inlineRadio2">বাধাকপি </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="করলা">
                                <label class="form-check-label" for="inlineRadio1">করলা </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="কাঁচা কলা">
                                <label class="form-check-label" for="inlineRadio2">কাঁচা কলা</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="লাউ">
                                <label class="form-check-label" for="inlineRadio1">লাউ </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="বরবটি">
                                <label class="form-check-label" for="inlineRadio2">বরবটি </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="লেটুস পাতা">
                                <label class="form-check-label" for="inlineRadio1">লেটুস পাতা </label>
                            </div>
                            <div class=" form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="কচুর মুখী">
                                <label class="form-check-label" for="inlineRadio1">কচুর মুখী</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="মুলা">
                                <label class="form-check-label" for="inlineRadio2">মুলা</label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="বেবি কর্ণ">
                                <label class="form-check-label" for="inlineRadio1">বেবি কর্ণ </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="femaleRadio" value="ঝিঙ্গা">
                                <label class="form-check-label" for="inlineRadio2">ঝিঙ্গা </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="q10[]" id="maleRadio" value="সাজনা">
                                <label class="form-check-label" for="inlineRadio1">সাজনা </label>
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

<?php
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/17/2019
 * Time: 2:06 PM
 */