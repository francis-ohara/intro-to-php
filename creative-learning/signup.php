<?php ?>
<h2 style="text-align: center"> CREATE AN ACCOUNT</h2>
<form action="" method="post">
    <fieldset>
        <legend>Create</legend>
        <label>Username: <input type="text" id="username" name="username"
                                value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
                                placeholder="Enter Username" required></label>
        <br>
        <label>Password: <input type="password" id="password" name="password"
                                value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
                                placeholder="Enter Password" required></label>
        <br>
        <button type="submit" name="signup" formaction="login.php">Create</button>
        <br>
    </fieldset>
</form>