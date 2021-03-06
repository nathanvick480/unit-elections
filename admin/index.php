<?php

include '../unitelections-info.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=X-UA-Compatible content="IE=Edge,chrome=1" />
    <meta name=viewport content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />

    <title>Dashboard | Unit Elections Administration | Tulpe Lodge - Order of the Arrow, BSA</title>

    <link rel="stylesheet" href="../libraries/bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libraries/fontawesome-free-5.12.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">

</head>

<body id="dashboard">
  <div class="wrapper">
    <?php include 'navbar.php'; ?>

    <main class="container-fluid">
        <section class="row">
            <div class="col-12">
                <h2>Unit Elections Dashboard</h2>
            </div>
        </section>

        <?php
          $getUnitElectionsQuery = $conn->prepare("SELECT * from unitElections");
          $getUnitElectionsQuery->execute();
          $getUnitElectionsQ = $getUnitElectionsQuery->get_result();
          if ($getUnitElectionsQ->num_rows > 0) {
            //print election info
            ?>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Scheduled Unit Elections</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Unit Number</th>
                        <th scope="col">Unit Community</th>
                        <th scope="col">Chapter</th>
                        <th scope="col">Date of Election</th>
                        <th scope="col">accessKey</th>
                        <th scope="col">View Results</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($getUnitElections = $getUnitElectionsQ->fetch_assoc()){
                        ?><tr>
                          <td><?php echo $getUnitElections['unitNumber']; ?></td>
                          <td><?php echo $getUnitElections['unitCommunity']; ?></td>
                          <td><?php echo $getUnitElections['chapter']; ?></td>
                          <td><?php echo date("m-d-Y", strtotime($getUnitElections['dateOfElection'])); ?></td>
                          <td><?php echo $getUnitElections['accessKey']; ?></td>
                          <td><a href="results.php?accessKey=<?php echo $getUnitElections['accessKey']; ?>">view</a></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <?php
          } else {
            ?>
            <div class="alert alert-danger" role="alert">
              There are no elections in the database.
            </div>
            <?php
          }
        ?>

    </main>
  </div>
    <?php include "../footer.php"; ?>

    <script src="../libraries/jquery-3.4.1.min.js"></script>
    <script src="../libraries/popper-1.16.0.min.js"></script>
    <script src="../libraries/bootstrap-4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
