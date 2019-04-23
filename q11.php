<?php
session_start();
    if (isset($_POST['next_btn'])) {
        //check if any item is selected


        //initializing default valuse;

        $piaz = 0;
        $tomato = 0;
        $alu = 0;
        $roshun = 0;
        $dhoniyapata = 0;
        $kachamorich = 0;
        $ada = 0;
        $gazor = 0;
        $lalshak = 0;
        $dherosh = 0;
        $kachapepe = 0;
        $shosha = 0;
        $palonkshak = 0;
        $potol = 0;
        $lebu = 0;
        $capsicum = 0;
        $shim = 0;
        $mistikumra = 0;
        $chichinga = 0;
        $begun = 0;
        $badhacopy = 0;
        $korolla = 0;
        $kachkola = 0;
        $lau = 0;
        $borboti = 0;
        $letucepata = 0;
        $kochurmukhi = 0;
        $mula = 0;
        $babycorn = 0;
        $jhinga = 0;
        $shajna = 0;

        //to run PHP script on submit
        $q10_option = $_POST['q10'];
        if (!empty($q10_option)) {


            foreach ($q10_option as $selected) {


                // Loop to store and display values of individual checked checkbox
                $q10_option=$selected;
                switch ($q10_option) {
                    case "পেঁয়াজ":
                        $piaz = 1;
                        break;
                    case "টমেটো":
                        $tomato = 1;
                        break;
                    case "আলু":
                        $alu = 1;
                        break;
                    case "রসুন":
                        $roshun = 1;
                        break;
                    case "ধনিয়া পাতা":
                        $dhoniyapata = 1;
                        break;
                    case "কাঁচা মরিচ":
                        $kachamorich = 1;
                        break;
                    case "আদা":
                        $ada = 1;
                        break;
                    case "গাজর":
                        $gazor = 1;
                        break;
                    case "লাল শাক":
                        $lalshak = 1;
                        break;
                    case "ঢেঁড়স":
                        $dherosh = 1;
                        break;
                    case "কাঁচা পেপে":
                        $kachapepe = 1;
                        break;
                    case "শশা":
                        $shosha = 1;
                        break;
                    case "পালং শাক":
                        $palonkshak = 1;
                        break;
                    case "পটল":
                        $potol = 1;
                        break;
                    case "লেবু":
                        $lebu = 1;
                        break;
                    case "ক্যাপসিকাম":
                        $capsicum = 1;
                        break;
                    case "শিম":
                        $shim = 1;
                        break;
                    case "মিষ্টি কুমড়া":
                        $mistikumra = 1;
                        break;
                    case "চিচিঙ্গা":
                        $chichinga = 1;
                        break;
                    case "বেগুন":
                        $begun = 1;
                        break;
                    case "বাধাকপি":
                        $badhacopy = 1;
                        break;
                    case "করলা":
                        $korolla = 1;
                        break;
                    case "কাঁচা কলা":
                        $kachkola = 1;
                        break;
                    case "লাউ":
                        $lau = 1;
                        break;
                    case "বরবটি":
                        $borboti = 1;
                        break;
                    case "লেটুস পাতা":
                        $letucepata = 1;
                        break;
                    case "কচুর মুখী":
                        $kochurmukhi = 1;
                        break;
                    case "মুলা":
                        $mula = 1;
                        break;
                    case "বেবি কর্ণ":
                        $babycorn = 1;
                        break;
                    case "ঝিঙ্গা":
                        $jhinga = 1;
                        break;
                    case "সাজনা":
                        $shajna = 1;
                        break;


                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
                $vegetable_list_array[] = $q10_option;


                $veg_values = array($piaz,
                    $tomato,
                    $alu,
                    $roshun,
                    $dhoniyapata,
                    $kachamorich,
                    $ada,
                    $gazor,
                    $lalshak,
                    $dherosh,
                    $kachapepe,
                    $shosha,
                    $palonkshak,
                    $potol,
                    $lebu,
                    $capsicum,
                    $shim,
                    $mistikumra,
                    $chichinga,
                    $begun,
                    $badhacopy,
                    $korolla,
                    $kachkola,
                    $lau,
                    $borboti,
                    $letucepata,
                    $kochurmukhi,
                    $mula,
                    $babycorn,
                    $jhinga,
                    $shajna);
                //echo "<br>".$q10_option;
            }

            $_SESSION['vegetable_list_array'] = $vegetable_list_array;
            $_SESSION['veg_value'] = $veg_values;
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

    <form action="q12.php" method="post">
        <div class="form-group row">

            <label for="center" class="col-md-4 col-form-label">11. "সবজির নাম উল্লেখ করুন" আপনি কোথা থেকে
                কিনেন?</label>
            <br>
        </div>
        <?php
        for ($i = 0; $i < sizeof($vegetable_list_array); $i++) {


        ?>
        <div class="form-group row">
            <label for="gender"
                   class="col-md-4 col-form-label"> <?php echo $vegetable_list_array[$i] . " "; ?>  </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11<?php echo $vegetable_list_array[$i]; ?>"
                           id="maleRadio" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">স্থানীয় চাষি/ উৎপাদনকারী</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11<?php echo $vegetable_list_array[$i]; ?>"
                           id="femaleRadio" value="2">
                    <label class="form-check-label" for="inlineRadio2">পাইকার ব্যবসায়ী</label>
                </div>
            </div>
        </div>
        <?php


            }
        ?>
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