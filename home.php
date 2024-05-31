<?php include ('./conn/conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunluk</title>

    
    <link rel="stylesheet" href="./assets/style.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #575347;">
            <a class="navbar-brand ml-4" href="#"><i class="fa-solid fa-book"></i>&nbsp; Hayat Cok Zor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/gunluk/index.php">Ben cikmak istiyorum</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <div class="title-container">
                <h1>Hosgeldiniz</h1>
                <h3>Ne yapmak istersiniz?</h3>
            </div>

            <div class="select-container">

                <div class="write-diary" >
                    <img src="./assets/images/write.jpg" alt="">
                    <h4>Gunluk tut</h4>
                    <h6>Herkes ustume geliyor. Hayat zor.</h6>
                </div>

                <div class="read-diary" >
                    <img src="./assets/images/read.jpg" alt="">
                    <h4>Gecmis gunlugunu oku (bence okuma hatirlamak daha da yakar canini)</h4>
                    <h6>gecmis gunluklere goz at.</h6>
                      
                </div>

            </div>
        </div>

    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    
    <script src="./assets/script.js"></script>
</body>
</html>