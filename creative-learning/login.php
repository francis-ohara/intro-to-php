<h1 style="text-align: center">--The Creative Learning--</h1>
<h2 style="text-align: center">SIGN IN</h2>
<form action="" method="post">
    <fieldset>
        <legend>Login</legend>
        <label>Username: <input type="text" id="username" name="username"
                                value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
                                placeholder="Enter Username" required></label>
        <br>
        <label>Password: <input type="password" id="password" name="password"
                                value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
                                placeholder="Enter Password" required></label>
        <br>
        <button type="submit" name="login">Log In</button>
        <button type="submit" name="signup" formaction="signup.php">Sign Up</button>
        <br>
        <?php if (count($_POST) > 0) authorize($_POST["username"], $_POST["password"]);?>
    </fieldset>
</form>

<?php


function authorize($username, $password)
{
    $conn = new mysqli("localhost", "root", "password", "creative_learning");
    $query = "SELECT * FROM Employees WHERE Username='" . $username . "';";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["Username"] === $username && $row["Password"] === $password) {
            echo "<strong>Welcome!</strong>";
            Header("Location: main-employee.php?username=" . $username);
        }
        else echo "<strong>Invalid Username and/or Password!</strong>";
    } else echo "<strong>Invalid Username and/or Password!</strong>";
}

?>