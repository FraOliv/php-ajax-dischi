<?php







?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ex-dischi-musicali</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/style.css?v=<?php echo time(); ?>">


</head>

<body>



    <header>
        <div class="container">
            <img src="./dist/img/logo.png" alt="logo" />
        </div>
    </header>


    <div class="main_container" id="root">
        <div class="cards container">
            <div class="card" v-for=" album in listaCD">
                <img :src="album.poster" :alt="album.title" />
                <h3>{{album.title}}</h3>
                <p class="author">{{album.author}}</p>
                <p class="year">{{album.year}}</p>
            </div>

        </div>

    </div>

   




    
  
    <script type="text/javascript" src="./dist/main.js">
    </script>
    <!-- /JS script -->


</body>

</html>