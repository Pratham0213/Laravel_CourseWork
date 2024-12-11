<!-- <h1>WRONG LINK</h1>

<a href="url">link</a>


<form action="/login" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    <a href="/forgot_password">Forgot Password?</a> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>

<body>
    <h1>My name is {{ $username }} and my age is {{ $age }}</h1>
</body>

</html>

?