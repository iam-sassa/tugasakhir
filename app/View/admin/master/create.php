    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/admin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form-control{
            height: 30vh;
            width: 30vh;
        }
    </style>
</head>
<body>
    <main>
        <section class="glass">

            <div class="table" style="padding: 50px; align-items: center">
                <div class="title">
                    <h1>Add Client</h1>
                    <input type="text">
                </div>

                <div class="wrapper" style="background-color: white; display: flex; align-items: center; justify-content: center; padding: 20px; width: 50%">
                <form action="<?= OOP\App\Core\Router::url('clientinsert') ?>" method="POST" style="text-align: center;">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                        <label for="created_at">Created</label>
				        <input type="datetime-local" name="created_at" required title="required"/>
                    </div>

                   
                    <button type="submit" name="submit" class="button" value="submit" style="border-radius: 20px;">Save</button>
                </form>
                </div>
                       
            </div>

        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
