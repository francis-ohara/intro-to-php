<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login to Creative Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
<h2 style="text-align: center">SIGN IN</h2>


<form action="" method="post">
    <fieldset>
        <legend>Login</legend>
        <label>Username: <input type="text" id="username" name="username"
                                value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
                                placeholder="Enter Username" required></label>
        <br><br>
        <label>Password: <input type="password" id="password" name="password"
                                value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
                                placeholder="Enter Password" required></label>
        <br> <br>
        <label>Employee<input type="radio" id="employee" checked name="account-type" value="employee" required></label>
        <label>Manager<input type="radio" id="manager" name="account-type" value="manager"></label>
        <br>
        <br>
        <button class="btn btn-primary" type="submit" name="login">Log In</button>
        <button class="btn btn-primary" type="submit" name="signup" formaction="signup.php">Sign Up</button>
        <br><br>

        <?php if (isset($_POST["login"])) authorize($_POST["username"], $_POST["password"]); ?>
        <br>
    </fieldset>
    <div style="text-align: right">No account? <a href="signup.php">Sign up</a></div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
function authorize($username, $password)
{
    // connect to creative learning database
    $conn = new mysqli("localhost", "root", "password", "creative_learning");

    $main_page = $_POST['account-type'] == "employee" ? "main-employee.php" : "main-manager.php";
    $table = $_POST['account-type'] == "employee" ? "Employees" : "Managers";

    $query = "SELECT * FROM " . $table . " WHERE Username='" . $username . "';";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["Username"] === $username && $row["Password"] === $password) {
            echo "<strong>Welcome!</strong>";
            $conn->close();
            Header("Location: " . $main_page . "?username=" . $username);
        } else echo "<strong>Invalid Username and/or Password!</strong>";
    } else echo "<strong>Invalid Username and/or Password!</strong>";
}

?>