     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="new.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <p>Gender:</p>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female"><br>

        <p>Languages Known:</p>
        <label for="java">Java</label>
        <input type="checkbox" id="java" name="languages" value="Java">
        <label for="python">Python</label>
        <input type="checkbox" id="python" name="languages" value="Python">
        <label for="c">C</label>
        <input type="checkbox" id="c" name="languages" value="C"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>







your name is:<?php echo $_POST["name"];?>
<br>
<br>
your password is:<?php echo $_POST["password"];?>
<br>
<br>
your email is:<?php echo $_POST["email"];?>
<br>
<br>
gender:<?php echo $_POST["gender"];?>
<br>
<br>
language:<?php echo $_POST["languages"];?>
