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

    <form action="q6.php" method="post">
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">1. এরিয়া / বাজারের নাম [ইন্টারভিউয়ার ফিলাপ করবেন]</label>
            <div class="col-sm-3">
                <select class="form-control" name="q1" required>
                    <option value="">সিলেক্ট করুন</option>
                    <option value="1">Adabor আদাবর</option>
                    <option value="2">Airport এয়ারপোর্ট</option>
                    <option value="3">Badda বাড্ডা</option>
                    <option value="4">Bangshal বংশাল</option>
                    <option value="5">Cantonment ক্যান্টনমেন্ট</option>
                    <option value="6">Chalkbazar চকবাজার</option>
                    <option value="7">Darussalam দারুস সালাম</option>
                    <option value="8">Demra ডেমরা</option>
                    <option value="9">Dhanmondi ধানমন্ডি</option>
                    <option value="10">Dohar দোহার</option>
                    <option value="11">Dokkhinkhan দক্ষিনখান</option>
                    <option value="12">Gulshan গুলশান</option>
                    <option value="13 ">Hazaribagh হাজারিবাগ</option>
                    <option value="14">Jatrabari যাত্রাবাড়ী</option>
                    <option value="15">Kadamtoli কদমতলি</option>
                    <option value="16">Kafrul কাফরুল</option>
                    <option value="17">Kala Bagan কলাবাগান</option>
                    <option value="18">Kamrangirchar কামরাংগীর চর</option>
                    <option value="19">Keraniganj কিরানিগঞ্জ</option>
                    <option value="20">Khilgaon খিলগাও</option>
                    <option value="21">Khilkhet খিলক্ষেত</option>
                    <option value="22">Kotwali Dhaka কোতোয়ালী ঢাকা</option>
                    <option value="23">Lalbagh লালবাগ</option>
                    <option value="24">Mirpur মীরপুর</option>
                    <option value="25">Mohammadpur মোহাম্মাদপুর</option>
                    <option value="26">>Motijheel মতিঝিল</option>
                    <option value="27">Mugda মুগদা</option>
                    <option value="28">Nawabganj Dhk. নবাবগঞ্জ ঢাকা</option>
                    <option value="29 ">New Market নিউমার্কেট</option>
                    <option value="30">Pallabi পল্লবী</option>
                    <option value="31">Ramna রমনা</option>
                    <option value="32 ">Rampura রামপুরা</option>
                    <option value="33">Rupnagar রুপনগর</option>
                    <option value="34">Sabujbagh সবুজবাগ</option>
                    <option value="35">Shah ali শাহ আলী</option>
                    <option value="36">Shahbagh শাহবাগ</option>
                    <option value="37">Sher E Bangla Nagar শের-ই-বাংলানগর</option>
                    <option value="38">Shyampur শ্যামপুর</option>
                    <option value="39">Sutrapur সুত্রাপুর</option>
                    <option value="40">Turag তুরাগ</option>
                    <option value="41">Uttara উত্তরা</option>
                    <option value="42">Uttarkhan উত্তরখান</option>
                    <option value="43">Vasantake ভাসানটেক</option>
                    <option value="44">Vatara ভাটারা</option>
                    <option value="45 ">Wari ওয়ারি</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">2. ব্যবসায়ীর নাম</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="q2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">3. লিঙ্গ </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="maleRadio" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">পুরুষ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q3" id="femaleRadio" value="2">
                    <label class="form-check-label" for="inlineRadio2">মহিলা</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-md-4 col-form-label">4. মোবাইল নাম্বার </label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="q3" maxlength="11" min="1100000000" max="1999999999"
                       required>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label">5. কানেকশন টাইপ  </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="maleRadio" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">প্রিপেইড</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q5" id="femaleRadio" value="2">
                    <label class="form-check-label" for="inlineRadio2">পোস্টপেইড</label>
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

