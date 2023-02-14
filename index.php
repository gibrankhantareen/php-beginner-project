<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutorial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1> Blood Donation Camp </h1> <body bgcolor="FBB917">
        <div><h2>Registration Form</h2></div>
        <form action= 'connect.php' method="POST">
            <label for="user">Name: </label><br>
            <input type="text" name='name' id="name" required/> <br> <br>

            <label for="email">Email: </label> <br>
            <input type="email" name="email" id="email" required/> <br> <br>

            <label for="phone">Phone: </label> <br>
            <input type='text' name='phone' id="phone" required/> <br> <br>

            <label for="bloodg">Blood Group: </label> <br>
            <input type='text' name='bloodg' id="bloodg" required/> <br> <br>

            <input type="submit" name="submit" id="submit"/>
        </form>

    </body>
</html>