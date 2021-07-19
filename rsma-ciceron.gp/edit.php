<?php

// Include database file
include 'customers.php';

$customerObj = new Customers();

// Edit customer record
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $customerObj->displyaRecordById($editId);
}

// Update Record in customer table
if (isset($_POST['update'])) {
    $customerObj->updateRecord($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tableau de Bord MAXImini</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <div class="card text-center" style="padding:15px;">
        <h4>Tableau de Bord MAXImini</h4>
    </div><br>

    <div class="container">
        <form action="edit.php" method="POST">
            <div class="form-group">
                <label for="name">Date</label>
                <input type="date" class="form-control" name="uname" value="<?php echo $customer['name']; ?>"
                    required="">
            </div>
            <div class="form-group">
                <label for="email">Sites Web et URL:</label>
                <input type="text" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>"
                    required="">
            </div>
            <div class="form-group">
                <label for="username">Pays:</label>
                <input type="text" class="form-control" name="upname" value="<?php echo $customer['username']; ?>"
                    required="">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>