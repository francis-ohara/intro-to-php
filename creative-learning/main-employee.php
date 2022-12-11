<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Employee Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body class="container">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<?php

function uploader()
{
    if (!is_dir("./memos")) mkdir("./memos");
    if (!is_dir("./xml-files")) mkdir("./xml-files");

    $temp = $_FILES["memo"]["tmp_name"];
    $actual = $_FILES["memo"]["name"];
    move_uploaded_file($temp, "./memos/$actual");
    $zip = new ZipArchive();
    $zip->open("./memos/$actual", ZipArchive::CREATE);
    $xml = $zip->getFromName("word/document.xml");
    $xml_handle = new DOMDocument();
    $xml_handle->loadXML($xml);
    $xml_handle->save("./xml-files/$actual.xml");

}

function update_database(){
    $conn = new mysqli("localhost", "root", "password", "creative_learning");
    $username = $_GET["username"];
    $query = "SELECT Id,StoreOfEmployment from Employees WHERE Username = '$username'";
    $result = $conn->query($query);
    $result = $result->fetch_assoc();
    $uploader = $result["Id"];
    $store_of_uploader = $result["StoreOfEmployment"];
    $filename = $_FILES["memo"]["name"];
    $filesize = $_FILES["memo"]["size"];
    $path_to_doc = "./memos/$filename";
    $path_to_xml = "./xml-files/$filename.xml";
    $date_uploaded = filemtime($path_to_doc);
    echo "hello world!";
    $query2 = "INSERT INTO Memos(FileName, FileSize, DateUploaded, Uploader,StoreOfUploader, PathToDoc, PathToXML)
                VALUES ('$filename', '$filesize', FROM_UNIXTIME('$date_uploaded'), '$uploader','$store_of_uploader' ,'$path_to_doc', '$path_to_xml' )";
    $conn->query($query2);
    $conn->close();
}

?>