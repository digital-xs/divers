<?php require_once('src/Domain/register.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/Infra/css/starter-template.css">
    <title>Vehicle fleet parking management</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Vehicle fleet parking management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="park.php">Park</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <main role="main" class="container">
        <h1>Register a vehicle</h1>
        <br />
        <?php 
            if (isset($alert)) {
                echo $alert;
            }
            if (isset($registerOk)) {
                echo $registerOk;
            }
        ?>
        <form method="post" action="#">
            <div class="form-group">
                <label for="formNumberplate">Numberplate</label>
                <input type="text" class="form-control" id="formNumberplate" name="formNumberplate" required>
            </div>
            <div class="form-group">
                <label for="formBrand">Brand</label>
                <select class="form-control" id="formBrand" name="formBrand">
                    <option value="Audi">Audi</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Renault">Renault</option>
                    <option value="Volkswagen">Volkswagen</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formFleet">Fleet</label>
                <select class="form-control" id="formFleet" name="formFleet">
                    <option value="1">Fleet 1</option>
                    <option value="2">Fleet 2</option>
                    <option value="3">Fleet 3</option>
                    <option value="4">Fleet 4</option>
                    <option value="5">Fleet 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formCommentaires">Commentaires</label>
                <textarea class="form-control" id="formCommentaires" name="formCommentaires" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
