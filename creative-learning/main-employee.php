<h1>Welcome to the Main Employee Page!</h1>
<div class="header">
    <a href="login.php">Log Out</a>
</div>
<?php if (isset($_POST["upload"])) {
    uploader();
    update_database();
    echo "<p><strong>Memo Uploaded Successfully!<br> Log out or Upload New Memo!</strong></p>";
} ?>
<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <p>Upload Your Sales Memo Here:</p>
        <label>

            <input type="file" name="memo" id="memo" accept=".docx,.doc" required>
        </label>
        <br><br>
        <button type="submit" name="upload">Upload File</button>
    </fieldset>

</form>

<?php
function uploader()
{
    $temp = $_FILES["memo"]["tmp_name"];
    $actual = $_FILES["memo"]["name"];
    move_uploaded_file($temp, "./memos/{$actual}");
    $zip = new ZipArchive();
    $zip->open("./memos/{$actual}", ZipArchive::CREATE);
    $xml = $zip->getFromName("word/document.xml");
    $xml_handle = new DOMDocument();
    $xml_handle->loadXML($xml);
    $xml_handle->save("./xml-files/{$actual}.xml");

}

function update_database(){

}
?>