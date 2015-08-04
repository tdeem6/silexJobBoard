<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        <title>Job Application</title>
        </head>
        <body>
         <h1>Apply for your prospective job!</h1>
         <div class='container'>
          <form action='/job'>
            <div class='form-group'>
              <label for='title'>Job title:</label>
              <input id='title' name='title' class='form-control' type='text'>
            </div>
            <div class='form-group'>
              <label for='descrip'>Job description:</label>
              <input id='descrip' name='descrip' class='form-control' type='text'>
            </div>
            <div class='form-group'>
              <label for='contact'>Contact name:</label>
              <input id='contact' name='contact' class='form-control' type='text'>
            </div>
            <button type='submit' class='btn-danger'>Post IT!</button>
          </form>
        </div>
      </body>
      </html>
      ";
    });

    return $app;
?>
