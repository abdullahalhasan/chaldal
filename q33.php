<?php
session_start();
if (isset($_POST['next_btn'])) {
    $q32 = $_POST['q32'];
    if ($q32 == "3") {
        header('Location: q43.php');
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

    <form action="q43.php" method="post">

        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">33. কি কারনে লোন নিয়েছিলেন? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="maleRadio" value="1">
                        <label class="form-check-label" for="inlineRadio1">এই সবজী ব্যবসার জন্য</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="femaleRadio" value="2">
                        <label class="form-check-label" for="inlineRadio2">অন্য ব্যবসায়ে বিনিয়োগ করার জন্য</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="femaleRadio" value="3">
                        <label class="form-check-label" for="inlineRadio2">ব্যাক্তিগত প্রয়োজনে (বাসা-বাড়ির কোন
                            প্রয়োজনে)</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="femaleRadio" value="4">
                        <label class="form-check-label" for="inlineRadio2">চিকিৎসার জন্য</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="femaleRadio" value="5">
                        <label class="form-check-label" for="inlineRadio2">পড়ালেখার খরচ বাবদ</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q33" id="femaleRadio" value="6">
                        <label class="form-check-label" for="inlineRadio2">পরিবারের কোন সদস্যের প্রয়োজনে (ব্যবসা শুরু
                            করা, বিদেশ যাওয়া, ইত্যাদি)</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q33" id="femaleRadio">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">34. কোথা থেকে লোন নিয়েছিলেন? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q34" id="maleRadio" value="1">
                        <label class="form-check-label" for="inlineRadio1">পরিবারের কোন সদস্যের কাছ থেকে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="2">
                        <label class="form-check-label" for="inlineRadio2">মহাজন/ টাকা ধার দেয় এমন কারো কাছ থেকে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="3">
                        <label class="form-check-label" for="inlineRadio2">কো–অপারেটিভ সোসাইটি থেকে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q34" id="femaleRadio" value="4">
                        <label class="form-check-label" for="inlineRadio2">ব্যাংক/ লিজিং কম্পানী থেকে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q34" id="femaleRadio">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">35. কত টাকা লোন নিয়েছিলেন?</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="q35" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">36. ফেরত দেবার মেয়াদ কত দিন ছিলো? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="maleRadio" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">০-৫ মাস</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="2">
                        <label class="form-check-label" for="inlineRadio2">৬-১২ মাস</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="3">
                        <label class="form-check-label" for="inlineRadio2">১-২ বছর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="4">
                        <label class="form-check-label" for="inlineRadio2">২-৪ বছর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="5">
                        <label class="form-check-label" for="inlineRadio2">৪-৫ বছর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q36" id="femaleRadio" value="6">
                        <label class="form-check-label" for="inlineRadio2">৫ বছরের বেশি</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">37. লোন এর কিস্তি কত দিন পর পর দেয়া লাগে
                (লাগতো)? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="maleRadio" value="1">
                        <label class="form-check-label" for="inlineRadio1">প্রতি সপ্তাহে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="femaleRadio" value="2">
                        <label class="form-check-label" for="inlineRadio2">প্রতি মাসে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="femaleRadio" value="3">
                        <label class="form-check-label" for="inlineRadio2">২ মাস পরপর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="femaleRadio" value="4">
                        <label class="form-check-label" for="inlineRadio2">৩ মাস পরপর</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="femaleRadio" value="5">
                        <label class="form-check-label" for="inlineRadio2">লোনের মেয়াদ শেষে একবারে পরিশোধ</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q37" id="femaleRadio" value="6">
                        <label class="form-check-label" for="inlineRadio2">২-৩ কিস্তি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q37" id="femaleRadio">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">38. প্রতি কিস্তি কত টাকা করে পরিশোধ করতে হয়
                (হতো)?</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="q38" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">39. লোনটির সুদের হার কতো (ছিল)?</label>
            <div class="col-sm-3">
                <input type="number" max="100" class="form-control" name="q39" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">40. লোনটির জন্য কি কিছু বন্ধক রাখতে হয়েছিল? </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q40" id="maleRadio" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q40" id="femaleRadio" value="2">
                    <label class="form-check-label" for="inlineRadio2">না</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">41. লোনটি নেবার সময় বা টাকা পরিশোধের সময় কোন সমস্যার
                সম্মুখীন হতে হয়েছিল? </label>
            <div class="col-md-8">
                <div class="row">
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="maleRadio" value="1">
                        <label class="form-check-label" for="inlineRadio1">সময় মত কিস্তি প্রদান করতে সমস্যা
                            হয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="2">
                        <label class="form-check-label" for="inlineRadio2">অতিরিক্ত টাকা প্রদান করতে হয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="3">
                        <label class="form-check-label" for="inlineRadio2">খারাপ ব্যবহার পেয়েছি</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="4">
                        <label class="form-check-label" for="inlineRadio2">সময়ের আগেই টাকা ফেরত চেয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="5">
                        <label class="form-check-label" for="inlineRadio2">বন্ধক চেয়েছে/ রাখতে হয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="6">
                        <label class="form-check-label" for="inlineRadio2">অনেক কাগজপত্র চেয়েছে/ জমা দিতে হয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="7">
                        <label class="form-check-label" for="inlineRadio2">বন্ধক বাজেয়াপ্ত করেছে/ করার চেষ্টা
                            করেছে </label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="8">
                        <label class="form-check-label" for="inlineRadio2">অনেক সময় লাগিয়েছে</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <input class="form-check-input" type="radio" name="q41" id="femaleRadio" value="9">
                        <label class="form-check-label" for="inlineRadio2">কোন সমস্যার সম্মুখীন হতে হয় নাই</label>
                    </div>
                    <div class="form-check form-check-inline col-md-12">
                        <label class="form-check-label" for="inlineRadio2">অন্য কিছু- </label>
                        <input class="form-check-input" type="text" name="q41" id="femaleRadio">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">42. কিস্তির টাকা সময় মত পরিশোধ করতে না পারার কারনে কি
                আপনাকে কখনো জরিমানা দিতে হয়েছে? </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q42" id="yesRadio" value="1" required
                           onclick="empChk()">
                    <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q42" id="noRadio" value="2" onclick="empChk()"
                    <label class="form-check-label" for="inlineRadio2">না</label>
                </div>
            </div>
        </div>
        <div class="form-group row" id="employee" style="display: none">

            <label for="center" class="col-md-4 col-form-label">42(a). প্রতি কিস্তিতে দেরীতে টাকা জমার জন্য কত টাকা
                জরিমানা দিতে হয়েছে?</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="q42a">
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