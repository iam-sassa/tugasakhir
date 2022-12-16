<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../public/assets/page.css">
</head>
<body>

    <header>
        <a href="#hero" class="logo">Savoirfaire
        </a>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#program">Our Programs</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul>
            <li>
                <a href="<?= OOP\App\Core\Router::url('login') ?>" class="in">Login</a>
            </li>
            <li>
                <a href="<?= OOP\App\Core\Router::url('register') ?>" class="in">Register</a>
            </li>
        </ul>
    </header>
    <section id="hero">
        <div class="container">

            <div id="hero" class="content">
                <h2>Welcome To Savoir Faire</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Tempora praesentium provident animi quo quos accusantium, 
                    dolore fugiat dignissimos soluta fuga, voluptatibus maiores quas dolores sunt doloribus officiis, 
                    voluptates veniam aperiam.</p>
                    <a href="#">Read More</a>
            </div>
            <div class="box">
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:4;"></div>
            </div>

            <div class="imgBox">
                <img src="" alt="">
            </div>

            <ul class="sci">
            </ul>
        </div>
    </section>

    <section class="about" id="about">

        <div class="container">
           

            <div class="content-2">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Tempora praesentium provident animi quo quos accusantium, 
                    dolore fugiat dignissimos soluta fuga, voluptatibus maiores quas dolores sunt doloribus officiis, 
                    voluptates veniam aperiam.</p>
                    <a href="#">Read More</a>
            </div>

        </div>
    </section>

    <section id="program">

        <div class="container">
            <div class="content">
                <h2>Our programs</h2>
            </div>
            <?php $no =1; foreach($data as $row){?>
            <div class="card">
                <div class="imgBox">
                    <img src="../public/assets/icons/sketch.png" alt="" height="50" width="50">
                </div>
                <div class="content">
                    <div>
                        <h3> <?= $row->category?> </h3>
                        <p>Name : <?= $row->name?></p>
                        <p>Branch : <?= $row->branch?></p>
                        <p>Location : <?= $row->location?></p>
                        <a href="<?= OOP\App\Core\Router::url("programdetail/$row->id") ?>">See details</a>
    
                    </div>
                </div>
            </div>
            <?php } ?>
           

        </div>
    </section>

    <section id="contact">

        <div class="container">
           

            <div class="content-2">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Tempora praesentium provident animi quo quos accusantium, 
                    dolore fugiat dignissimos soluta fuga, voluptatibus maiores quas dolores sunt doloribus officiis, 
                    voluptates veniam aperiam.</p>
                    <a href="#">Read More</a>
            </div>

        </div>
    </section>

    <footer>

        <h2>Copyright </h2>

    </footer>
    
</body>
</html>