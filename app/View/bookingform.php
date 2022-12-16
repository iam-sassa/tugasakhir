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


        <form action="<?= OOP\App\Core\Router::url('insertbooking') ?>" method="post">



            <h2>Booking Program for <?= $_SESSION['username'] ?> </h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span class="text">Full name</span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="program" value=" <?= $data->name ?>">
                        <span class="line"></span>
                    </div>
                </div>
            </div>

               


            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span class="text">Payment Method</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            

            <div class="row100">
                <div class="col">
                    <input type="submit" name="" id="" value="book">
                </div>
            </div>

            </form>
       
        </div>
    </section>
    
</body>
</html>