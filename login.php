<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "Azam" && $pass == "123") {
    $_SESSION['login'] = $user;
    echo "<script>
		alert('Anda Berhasil Login!!');
		document.location.href = 'book-store.php';
		</script>";
    }
    else{
        echo "<script>
		alert('Username/Password Salah!');
		document.location.href = 'login.php';
		</script>";
    }
} else {
?>
<html>
    <head>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Login here...</title>
    </head>
    <body>
    <div class="col-sm-12">
    <div class="page-header"><h1 align="center">Login</h1><br></div>
        <form action="" method="post">
        
        <center>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2>Login Here...</h2>
                    Username : <input type="text" name="user"><br>
                    Password : <input type="password" name="pass"><br>
                    <input type="submit" name="Login" value="Log In">
                </div>
            </div>
        </center>
        </form>
    </div>
    </body>
</html>
<?php } ?>