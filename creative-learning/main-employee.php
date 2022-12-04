
<h1>Welcome to the Main Employee Page!</h1>

<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <p>Upload Your Sales Memo Here:</p>
        <label>

            <input type="file" name="memo" id="memo" accept=".docx,.doc">
        </label>
        <br><br>
    <button type="submit" name="upload">Upload File</button>
    </fieldset>

</form>
<?php
if (isset($_POST["upload"])){
    $temp = $_FILES["memo"]["tmp_name"];
    $actual = $_FILES["memo"]["name"];
    move_uploaded_file($temp, "./memos/{$actual}.docx");
}
?>