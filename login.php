    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //username: admin, password: 1
        if ($username == 'admin' && $password == '1') {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location:index.php?url=list-product");
            die;
        } else {
            $err = "Thông tin đăng nhập không đúng!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center mt-2 mb-3">Đăng nhập</h3>
        <form action="" method="post" class="w-50 mx-auto" >
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control mb-3" name="username" placeholder="Username" required>
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required> 
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>
            <div class="text-danger text-center"><?php echo $err ?? '' ?></div>
        </form>
        </div>
    </body>
    </html>