<?php
    
    require_once 'form.class.php';

    if(isset($_POST['button'])){

        $form = new SimpleForm();
        //sanitize
        $form->name = htmlentities($_POST['name']);
        $form->age = htmlentities($_POST['age']);

        if($form->add()){
            header('location: index.php');
        }else{
            echo 'An error occured while adding in the database.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
            <form action="" method="POST">
                <h1>Simple Form</h1>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Button" name="button" id="button">
                </div>
            </form>
        </section>
    </main>
</body>
</html>