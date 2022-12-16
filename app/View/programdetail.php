<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="../assets/form.css">
</head>
<body>

    <section>
        <div class="container">



            <h2><?= $data->name ?></h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <span class="text">Branch : <?= $data->branch ?></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <span class="text">Category : <?= $data->category ?></span>
                    </div>
                </div>
           
                <div class="col">
                    <div class="inputBox">
                        <span class="text">Price : <?= $data->price ?></span>
                    </div>
                </div>

            <div class="col">
                    <div class="inputBox">
                        <span class="text">Start date : <?= $data->issue_date ?></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <span class="text">End date : <?= $data->due_date ?></span>
                    </div>
                </div>

            </div>


               


            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <span class="text">Location : <?= $data->location ?></span>
                    </div>
                </div>
            </div>
            

            <div class="row100">
                <div class="col">
                   <a href="<?= OOP\App\Core\Router::url('') ?>"> <input type="submit" name="" id="" value="back"></a>
                   <a href="<?= OOP\App\Core\Router::url('register') ?>"> <input type="submit" name="" id="" value="book"></a>

                </div>
            </div>
       
        </div>
    </section>
    
</body>
</html>