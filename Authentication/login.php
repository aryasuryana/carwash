<!-- login -->
<?php
session_start();
$username = 'userlsp';
$password = 'smkn2bjm';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: ../dashboard.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    
<!-- desain login -->
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <link rel="shortcut icon" href="../assets/img/icon.jpg" type="image/png">
        <title>Login | CarWash</title>

        <!-- Bootstrap core CSS -->
        <link href="../assets/css/indexstyles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../assets/css/login.css" rel="stylesheet">
    </head>
    
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-signin" method="post" action="">  
            <div class="text-center mb-4">
                <img class="mb-4" src="../assets/img/icon.jpg" width="200">
                
                <p class="text-secondary">Silahkan masukan username dan password anda</p>
            </div>

            <div class="form-label-group">
                 <input type="text" placeholder="username" class="form-control" name="username" id="username" required>
                <label for="username" class="text-secondary shadow">username</label>
            </div>

            <div class="form-label-group">
                 <input type="password" placeholder="Password" class="form-control" name="password" id="password"  required>
                <label for="password" class="text-secondary shadow">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block fs-6 shadow" type="submit" name="submit" value="submit">Masuk</button>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </body>
</html>
    
<?php } ?>