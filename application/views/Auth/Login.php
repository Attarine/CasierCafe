<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
    <title>Document</title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title">

                </div>
            </div>
            <form method="post" class="form" action="">
                <label for="user-email" style="padding-top: 13px;">&nbsp;Email</label>
                <input type="text" id="user-email" class="form-content" name="email" autocomplete="off" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 13px;">&nbsp;Password</label>
                <input type="Password" id="user-password" class="form-content" name="password" autocomplete="off" required />
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Lupa Password !</legend>
                </a>
                <input type="submit" id="submit-btn" name="submit" value="LOGIN">
                <a href="#" id="signup">Belum Punya Akun ?</a>
            </form>
        </div>
    </div>
</body>

</html>