<?php
    session_start();
    session_unset();
    session_destroy();
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
        <div class="jumbotron">
            <h2 style="text-align: center">শুভ সকাল/ বিকাল/ সন্ধ্যা। আমার নাম "নাম বলুন", আমি মাইন্ডস্কেপ লিমিটেড নামক
                একটি মার্কেট রিসার্চ কম্পানী থেকে এসেছি। আমরা আপনার এই সবজী ব্যবসায়ের ব্যাপারে একটু কথা বলবো।
                এই সার্ভেটি করতে আমাদের ২০-৩০ মিনিট সময় লাগতে পারে। এই সময়ের মধ্যে আমরা আপনার ব্যবসা নিয়ে কিছু আলোচনা
                করবো। এই সার্ভেটি তে অংশগ্রহণের জন্য আমরা আপনার মোবাইলে ২০ টাকা রিচার্জ প্রদান করবো।
                আপনার তথ্য সম্পুর্ণ গোপন রাখা হবে এবং শুধুমাত্র গবেষণার কাজে ব্যবহার করা হবে।

            </h2>
        </div>
        <div>
            <a href="q1.php"><input type="submit" class="btn btn-success right-arrow" name="next" value="Next" style="float: right"></a>
        </div>
    </div>
    <br>

</body>
</html>
