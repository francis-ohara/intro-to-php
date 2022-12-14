<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
<h1>Welcome to the Main Manager Page!</h1>

<div class="header">
    <a href="login.php">Log Out</a>
</div>

<h3>Available Memos</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Memo No.</th>
        <th scope="col">Title</th>
        <th scope="col">Employee ID</th>
        <th scope="col">Store</th>
        <th scope="col">Date</th>
        <th scope="col">Download Link</th>
        <th scope="col">Opened</th>
    </tr>
    </thead>
    <tbody>
    <?php
    update_database();
    fetch_memos();
    ?>
    </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>
</html>

<?php
function fetch_memos()
{
    //foreach record in the memos table ordered by date modified,
    //generate th, td.
    $conn = new mysqli("localhost", "root", "password", "creative_learning");
    $query = "SELECT Id, FileName, Uploader, StoreOfUploader, DateUploaded , PathToFile, DownloadedByManager FROM memos
                    ORDER BY DateUploaded DESC";
    $result = $conn->query($query);

    foreach ($result as $array) {
        $opened_btn = $array['DownloadedByManager'] == false ? "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
  <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/>
</svg>" : "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
  <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
</svg>";
        $store = ["store_1" => "Store A", 'store_2' => "Store B", 'store_3' => "Store C", 'store_4' => "Store D", 'store_5' => "Store E", 'store_6' => "Store F"];
        $title = $array['FileName'];
        echo "
                <tr>
                
                <th scope='row'>{$array['Id']}</th>
                <td> $title </td>
                <td>{$array['Uploader']}</td>
                <td>{$store[$array['StoreOfUploader']]}</td>
                <td>{$array['DateUploaded']}</td>
                <td> 
                    <form action method='post'>
                    <button type='submit' name='download' value='{$array['Id']}' class='btn btn-primary'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down-square-fill' viewBox='0 0 16 16'>
  <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z'/>
</svg>Download</button>                   
                    </form>
                </td>
                <td>$opened_btn</td>
                </tr>
            
            ";

    }
}
?>
<?php

// update DownloadedByManager value if memo is downloaded
   function update_database() {
    if (isset($_POST['download'])) {
        $memo_no = $_POST['download'];
        $conn = new mysqli('localhost', 'root', 'password', 'creative_learning');
        $query1 = "UPDATE Memos    SET DownloadedByManager = TRUE WHERE Id = {$memo_no}";
        $conn->query($query1);

        $query2 = "SELECT PathToFile FROM Memos WHERE Id='{$_POST['download']}'";
        $result = $conn->query($query2);
        $link = $result->fetch_assoc()["PathToFile"];

        header("location: $link");
        $conn->close();
        unset($_POST['download']);
    }
    }
?>

