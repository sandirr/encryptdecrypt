<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Encrypt Decrypt</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .col-4 {
            float: left;
            width: 30%;
            align: center;
            justify-content: center;
            display: flex;
            margin-left: 3%;
        }

        button {
            background: blue;
            color: white;
            width: 34%;
            height: 35px;
            border-radius: 20%;
        }

        h1 {
            margin-top: 3%;
            margin-left: 3%;

        }

        .footer {
            position: fixed;
            bottom: 0px;
            right: 0px;
            left: 0px;
            height: 7%;
            color: whitesmoke;
            background: blue;
            text-align: center;
            font-size: 20px;
            line-height: 45px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Kelompok 10</h1>
    <br>
    <div class="col-4">

        <form action="" method="post">
            <h2>Base64 + AES-356-cbc</h2>
            <textarea name="oritext" id="" cols="30" rows="10">
            <?php
            if (isset($_POST['enc'])) {
                echo $_POST['oritext'];
            }
            ?>
            </textarea>
            <br>
            <center>
                <button type="submit" name="enc">Encrypt</button>
                <button type="submit" name="dec">Decrypt</button>
            </center>

            <br>
            <textarea name="converttext" id="" cols="30" rows="10">
        <?php
        if (isset($_POST['enc'])) {
            $ori = $_POST['oritext'];

            $password = 'KunciRahasia';
            $method = 'aes-256-cbc';
            // Must be exact 32 chars (256 bit)
            $password = substr(hash('sha256', $password, true), 0, 32);
            // echo "Password:" . $password . "\n";
            // IV must be exact 16 chars (128 bit)
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
            $encrypted = base64_encode(openssl_encrypt($ori, $method, $password, OPENSSL_RAW_DATA, $iv));


            // base 64
            $enc = base64_encode($encrypted);
            echo trim($enc);
        }

        if (isset($_POST['dec'])) {
            $ori = $_POST['oritext'];

            $password = 'KunciRahasia';
            $method = 'aes-256-cbc';
            // Must be exact 32 chars (256 bit)
            $password = substr(hash('sha256', $password, true), 0, 32);
            // echo "Password:" . $password . "\n";
            // IV must be exact 16 chars (128 bit)
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
            $dec = base64_decode($ori);
            $decrypted = openssl_decrypt(base64_decode($dec), $method, $password, OPENSSL_RAW_DATA, $iv);


            // base64

            echo trim($decrypted);
        }
        ?>
       </textarea>

        </form>

    </div>


    <div class="col-4">

        <form action="" method="post">
            <h2>Base64</h2>
            <textarea name="oritext1" id="" cols="30" rows="10">
            <?php
            if (isset($_POST['enc1'])) {
                echo $_POST['oritext1'];
            }
            ?>
            </textarea>
            <br>
            <center>
                <button type="submit" name="enc1">Encrypt</button>
                <button type="submit" name="dec1">Decrypt</button>
            </center>

            <br>
            <textarea name="converttext1" id="" cols="30" rows="10">
        <?php
        if (isset($_POST['enc1'])) {
            $ori = $_POST['oritext1'];
            $enc = base64_encode($ori);
            echo trim($enc);
        }

        if (isset($_POST['dec1'])) {
            $ori = $_POST['oritext1'];
            $dec = base64_decode($ori);
            echo trim($dec);
        }
        ?>
       </textarea>

        </form>
    </div>
    <div class="col-4">

        <form action="" method="post">
            <h2>AES-356-cbc</h2>
            <textarea name="oritext2" id="" cols="30" rows="10">
            <?php
            if (isset($_POST['enc2'])) {
                echo $_POST['oritext2'];
            }
            ?>
            </textarea>
            <br>
            <center>
                <button type="submit" name="enc2">Encrypt</button>
                <button type="submit" name="dec2">Decrypt</button>
            </center>

            <br>
            <textarea name="converttext2" id="" cols="30" rows="10">
        <?php
        if (isset($_POST['enc2'])) {
            $ori = $_POST['oritext2'];

            $password = 'KunciRahasia';
            $method = 'aes-256-cbc';
            // Must be exact 32 chars (256 bit)
            $password = substr(hash('sha256', $password, true), 0, 32);
            // echo "Password:" . $password . "\n";
            // IV must be exact 16 chars (128 bit)
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
            $encrypted = base64_encode(openssl_encrypt($ori, $method, $password, OPENSSL_RAW_DATA, $iv));
            echo trim($encrypted);
        }

        if (isset($_POST['dec2'])) {
            $ori = $_POST['oritext2'];

            $password = 'KunciRahasia';
            $method = 'aes-256-cbc';
            // Must be exact 32 chars (256 bit)
            $password = substr(hash('sha256', $password, true), 0, 32);
            // echo "Password:" . $password . "\n";
            // IV must be exact 16 chars (128 bit)
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=

            $decrypted = openssl_decrypt(base64_decode($ori), $method, $password, OPENSSL_RAW_DATA, $iv);
            echo trim($decrypted);
        }
        ?>
       </textarea>

        </form>
    </div>
    <div class="footer">Andi Irsandi "60200117040" - Ahmad Al-Mas'ud ZD "60200117061" - Risaldi Mardiansya "60200117081"</div>
</body>

</html>