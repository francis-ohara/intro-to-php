<?php
    if (count($_POST)>0) {
        $answer = sum($_POST['value1'], $_POST["value2"]);
        echo '
    <!DOCTYPE html>
    <html lang="en">
    <body>
    <form method="POST"> 
      <fieldset>
        <legend>Calculate SUM</legend>
        <label for="value1"> Value1:</label>
        <input type="text" id="value1" name="value1" value="'.$_POST["value1"].'">
        <br>
        <label for="value2"> Value2:</label>
        <input type="text" id="value2" name="value2" value="'.$_POST["value2"].'">
        <br>
        <label for="answer"> Answer:</label>
        <input type="text" id="answer" name="answer" placeholder="'.$answer.'">
        <br>
        <button type="submit">SUM</button>
      </fieldset>

    </form>
    </body>
    </html>
            ';
    }
    else {
        echo '
    <!DOCTYPE html>
    <html lang="en">
    <body>
    <form action="2-task.php" method="POST">
      <fieldset>
        <legend>Calculate SUM</legend>
        <label for="value1"> Value1:</label>
        <input type="text" id="value1" name="value1">
        <br>
        <label for="value2"> Value2:</label>
        <input type="text" id="value2" name="value2">
        <br>
        <label for="answer"> Answer:</label>
        <input type="text" id="answer" name="answer">
        <br>
        <button type="submit">SUM</button>
      </fieldset>

    </form>
    </body>
    </html>
            ';
    }

