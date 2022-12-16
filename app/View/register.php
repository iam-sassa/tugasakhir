<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="../public/assets/regis.css">
</head>
<body>

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Register Form</h2>
                    <form action="<?= OOP\App\Core\Router::url('insertclient') ?>" method="POST">
                        <div class="inputBox">
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" placeholder="phone">
                        </div>
                        <div class="inputBox">
                            <input type="text" name="address" placeholder="address">
                        </div>
                        <div class="inputBox">
                            <input type="submit"  value="Register">
                        </div>
                       <p class="forget">Already have account ?<a href="<?= OOP\App\Core\Router::url('login') ?>">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>