<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container my-5 bg-info p-5">
            <h1 class="py-2">
                FORM LOGIN
            </h1>
            <form action="validasi.php" method="post">
                <div class="my3 form-floating">
                    <input type="text" class="form-control" placeholder="User" name="USER">
                    <label for="user">Username</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control" placeholder="Password" name="PASS">    
                    <label for="pwd">Password</label>
                </div>
                <button type="submit" class="my-2 btn btn-primary">Login</button>
            </form>
        </div>
    <script src="../../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>