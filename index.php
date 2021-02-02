<?php

@require "./dist/data.php"





?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ex-dischi-musicali</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style.css">

</head>

<body>



    <header>
        <div class="container">
            <img src="./dist/img/logo.png" alt="logo" />
        </div>
    </header>

 
    <div id="main_container">
        <div class="cards container">
            <?php foreach ($Albums as $cd) { ?>
                <div class="card">
                    <img src="<?php echo $cd['poster'] ?>">
                    <h3><?php echo $cd['title'] ?></h3>
                    <p><?php echo $cd['author'] ?></p>
                    <p><?php echo $cd['genre'] ?></p>
                    <p><?php echo $cd['year'] ?></p>
                </div>
            <?php  } ?>
        </div>

    </div>




    </div>



    </div>





    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script type="text/javascript" src="./dist/main.js">
    </script>
    <!-- /JS script -->


</body>

</html>