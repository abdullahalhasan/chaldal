<?php
    session_start();
    if (isset($_POST['next_btn'])) {
        $q30 = $_POST['q30'];
        if ($q30 == "3") {
            header('Location: q37.php');
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

        <form action="q37.php" method="post">

            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label">31. কেন লোন নিয়েছিলেন?  </label>
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="maleRadio" value="1">
                            <label class="form-check-label" for="inlineRadio1">সবজির ব্যবসার জন্য</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">অন্য ব্যবসায় খাটানোর জন্য</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="femaleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio2">নিজের জন্য</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">চিকিৎসার জন্য</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="femaleRadio" value="5">
                            <label class="form-check-label" for="inlineRadio2">পড়াশোনার জন্য</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q31" id="femaleRadio" value="6">
                            <label class="form-check-label" for="inlineRadio2">পরিবারের জন্য (যেমন তাদের ব্যবসার জন্য, বিদেশ পাঠানোর জন্য, ইত্যাদি.)</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <label class="form-check-label" for="inlineRadio2">অন্যান্য- </label>
                            <input class="form-check-input" type="text" name="q31" id="femaleRadio">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label">32. কোথা থেকে লোন নিয়েছিলেন?  </label>
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q32" id="maleRadio" value="1">
                            <label class="form-check-label" for="inlineRadio1">পরিবার থেকে নিয়েছিলাম</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q32" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">মাহাজন থেকে নিয়েছিলাম</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q32" id="femaleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio2">কো–অপারেটিভ সোসাইটি থেকে নিয়েছিলাম</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q32" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">ফিনান্সিয়াল প্রতিষ্ঠান থেকে নিয়েছিলাম</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="center" class="col-md-4 col-form-label">33. কত টাকা নিয়েছিলেন?</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="q33" >
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label">34. লোন শোধের শর্ত কি ছিল?  </label>
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q34" id="maleRadio" value="1">
                            <label class="form-check-label" for="inlineRadio1">সাপ্তাহিক পরিশোধ</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">মাসিক পরিশোধ</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio2">একবারে সব পরিশোধ</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">২-৩ বারে সব পরিশোধ</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <label class="form-check-label" for="inlineRadio2">অন্যান্য- </label>
                            <input class="form-check-input" type="text" name="q34" id="femaleRadio">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="center" class="col-md-4 col-form-label">35. সুদের হার কত?</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="q35" >
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label">36. লোন শোধ করতে কি কোন সমস্যা হচ্ছে?  </label>
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="maleRadio" value="1">
                            <label class="form-check-label" for="inlineRadio1">সময় মত দিতে পারি নি</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="2">
                            <label class="form-check-label" for="inlineRadio2">অতিরিক্ত টাকা চায়</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="3">
                            <label class="form-check-label" for="inlineRadio2">খারাপ ব্যবহার করে</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="4">
                            <label class="form-check-label" for="inlineRadio2">চুক্তির আগেই টাকা চায়</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="5">
                            <label class="form-check-label" for="inlineRadio2">জামানত চায়</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="6">
                            <label class="form-check-label" for="inlineRadio2">অনেক কাগজপত্র চায়</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="7">
                            <label class="form-check-label" for="inlineRadio2">জামানত বাজেয়াপ্ত / সময় মত জামানত ফেরত দেয় না</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="8">
                            <label class="form-check-label" for="inlineRadio2">অনেক সময় নেয়</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="9">
                            <label class="form-check-label" for="inlineRadio2">কোন সমস্যা হয় নি</label>
                        </div>
                        <div class="form-check form-check-inline col-md-12">
                            <label class="form-check-label" for="inlineRadio2">অন্যান্য- </label>
                            <input class="form-check-input" type="text" name="q36" id="femaleRadio">

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
 * Date: 4/18/2019
 * Time: 11:49 AM
 */