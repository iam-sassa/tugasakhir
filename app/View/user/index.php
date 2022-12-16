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
            <li><a href="#program">Programs</a></li>
            <li><a href="#">Invoice</a></li>
        </ul>
        <ul>
            <li>
                <h1><?= $_SESSION['username'] ?></h1>
                <a href="<?= OOP\App\Core\Router::url('logout') ?>" class="in">Log out</a>
            </li>
        </ul>
    </header>
 
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
                        <a href="<?= OOP\App\Core\Router::url("booking/$row->id") ?>">Choose</a>
    
                    </div>
                </div>
            </div>
            <?php } ?>
           

        </div>
    </section>


    <footer>

        <h2>Copyright </h2>

    </footer>
    
</body>
</html>