<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    
    <link rel="stylesheet" href="./assets/style.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="login-container">
                <h1>Cafer Osman YILDIZ -  donem odevi</h1>
                <h4>Giris</h4>
                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Internetteki takma adin:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Ahirete kadar koruman gereken sifren</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Giris</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
