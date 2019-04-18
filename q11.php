<?php
session_start();
    if (isset($_POST['next_btn'])) {
        //to run PHP script on submit
        $q10_option = $_POST['q10'];
        if (!empty($q10_option)) {

            foreach ($q10_option as $selected) {
                // Loop to store and display values of individual checked checkbox
                $q10_option=$selected;

                $vegetable_list_array[] = $q10_option;
                //echo "<br>".$q10_option;
            }

            $_SESSION['vegetable_list_array'] = $vegetable_list_array;
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

            <label for="center" class="col-md-4 col-form-label">11. আপনি কোথা থেকে সবজি কেনেন?</label>
            <br>
        </div>
        <?php
        for ($i = 0; $i < sizeof($vegetable_list_array); $i++) {


        ?>
        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label"> <?php echo $vegetable_list_array[$i]." "; echo array_search($vegetable_list_array[$i],$vegetable_list_array); ?>  </label>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="maleRadio" value="1">
                    <label class="form-check-label" for="inlineRadio1">লোকাল সাপ্লায়ার</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q11" id="femaleRadio" value="2">
                    <label class="form-check-label" for="inlineRadio2">হোলসেলার</label>
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