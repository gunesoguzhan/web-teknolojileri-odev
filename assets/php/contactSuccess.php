<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş Yap | Oğuzhan GÜNEŞ</title>
    
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        <!--Custom Styles-->
        <link rel="stylesheet" href="../css/style.css">
    
        <!--Thank you Pexels for free wallpapers
            sources:
            https://www.pexels.com/tr-tr/fotograf/bulaniklik-dizustu-bilgisayar-fluluk-html-2653362/
        -->
    </head>
<body>
    <nav class="container-fluid">
        <div class="row">
            <div class="col-4 logo">
                <a href="../../index.html">
                    <p>Oğuzhan Güneş</p>
                </a>
            </div>
            <div class="col-6 nav-links">
                <ul>
                    <li><a href="login.html">Giriş</a></li>
                    <li><a href="hometown.html">Memleket</a></li>
                    <li><a href="cv.html">Özgeçmiş</a></li>
                    <li><a href="../../index.html">Hakkımda</a></li>
                </ul>
            </div>
            <div class="burger col-2">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </nav>
    <main class="container-fluid main-form success">
        <div class="row">
            <div class="col-12">  
                <div>
                    <p class="text-center">Mesajınız başarılı bir şekilde gönderildi.<br> Mesaj önizlemesi;</p>
                    <p>İsim: <?php echo $_POST['name'];?></p>
                    <p>Soyisim: <?php echo $_POST['surname'];?></p>
                    <p>E-posta: <?php echo $_POST['email'];?></p>
                    <p>Konu: 
                        <?php 
                        if($_POST['select'] == 'suggest'){
                            echo 'Görüş ve öneri';
                        }else if($_POST['select'] == 'bug'){
                            echo 'Hata bildirimi';
                        }else{
                            echo 'Telif hakkı ihlali';
                        }
                            ?>
                        </p>
                    <p>Mesaj: <?php echo $_POST['message'];?></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="../../index.html">Hakkımda</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="../html/cv.html">Özgeçmiş</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="../html/contact.html">İletişim</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="../html/hometown.html">Memleket</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>2020 Oğuzhan GÜNEŞ</p>
            </div>
        </div>
    </footer>

    <script src="../js/scripts.js"></script>
</body>
</html>