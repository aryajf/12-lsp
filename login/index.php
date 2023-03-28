<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <div class="kotak">
        <form action="proses.php" method="post">
            <label for="username">Username</label><br/>
            <input type="text" name="username" id="username"><br/><br/>
            
            <label for="password">Password</label><br/>
            <input type="password" name="password" id="password"><br/><br/>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>