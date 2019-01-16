<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
    </head>
    <body>
        <header class="ob">
            <div class="atas">
                <div id="logo"><img style="width: 127px;margin-left: 40px; float: left;"
                src="<?=base_url()?>assets/love.png" alt=""></div>
                <nav>
                    <ul>
                        <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/galery">Galery</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1 class="welkam">Selamat Datang <?=$nama_lengkap?>
    <br> Berperilakulah seperti <?= $jenis_kelamin?></h1>
    <h3>"Keep calm and keep your girly, ladies!"</h3>

    <p style="font-size: 10px; margin-left: 56px; margin-top: 39px;"></p>
    <img style="width: 823px; margin-left: 510px; margin-top: -312px;" src="<?=base_url()?>assets/back" alt="">
    </body>
</html>