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
  
</head>

<body>



    <header>
        <div class="container">
            <img src="./dist/img/logo.png" alt="logo" />
        </div>
    </header>

            <?php foreach ($Albums as $cd) { ?>


                <div class="cd">
                    <img src="<?php echo $cd['poster']; ?>" alt="">
                    <h2><?php echo $cd['title']; ?></h2>
                    <h3><?php echo $cd['author']; ?></h3>
                    <h4><?php echo $cd['genre']; ?></h4>
                    <h4><?php echo $cd['year']; ?></h4>
                </div>



            <?php } ?>
   



    </div>



    </div>





    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script type="text/javascript" src="./dist/main.js">
    </script>
    <!-- /JS script -->


</body>

</html>