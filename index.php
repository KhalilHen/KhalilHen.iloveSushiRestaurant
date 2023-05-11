<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="CSS/homepage.css">
</head>

<body>
    <header>
        <div class="headercontainer">



            <a href="index.php"><img class="Logo"
                    src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg" alt="Logo" />
            </a>



            <a href="">tel: 024-2120123</a>

            <a href="contact"></a>


            <span> I Love Sushi Nijmegen - Molenweg 66542 PW Nijmegen</span>
            <a href="createaccount.php">Create account</a>
            <a href="login.php">Login</a>


        </div>

    </header>
    <video playsinline width='100%' muted autoplay loop
        src="https://ilovesushi.nl/app/uploads/2019/12/I_Love_Sushi_Logo_Animatie.mp4" type="video/mp4"></video>

    <div class="SushiContainer">


        <div class="SushiBlock">
            <div class="SushiHeader">
                <h4>box 6</h4>
            </div>
            <img
                src="https://mynober-api-public.s3.eu-central-1.amazonaws.com/articles/541/vkwdmrqvIzCpSbBxqR1q5bQy4QUp4tDlHMzztD7X.png">
            <div class="SushiFooter">€ 7,49
                </img>

            </div>
        </div>

        <!-- </div> -->





        <?php
        include 'conn.php';
        ?>

</body>

</html>