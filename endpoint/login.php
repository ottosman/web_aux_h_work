<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // USNAME VE PASW KONTROL ETME
    if ($username === "benkayserilidegilim" && $password === "keskekadirabakadariyibiryazilimciolsam") {
        header("Location: http://localhost/gunluk/home.php");
        exit();
    } else {
        echo "
        <script>
            alert('Hop hemserim burayi gayseri zandin ellam. Yanlis bilgiler bunlar.');
            window.location.replace('http://localhost/gunluk/');
        </script>
        ";
    }
}
?>
