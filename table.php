<?php
require_once 'tableconnect.php';
$query = 'Select * from annual_report_table';
$sql = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC DAVV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/table.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
  <header class="header">
    <a href="#home" class="logo"><img src="image/logo1.png" alt=""> IQAC DAVV</a>

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#members">Members</a>
      <a href="#frequently">Notice</a>
      <a href="#review">Downloads</a>
      <a href="#contact">Contact</a>
      <a href="http://localhost/login/register_form.php" class="appoinmentbtn">Login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </header>
  <content>
    <center>
      <h1 class="heading">-</h1>
    </center>
    <center>
      <h1 class="heading">Annual <span>Report</span></h1>
    </center>
    <table class="table basicTable table-bordered">
      <thead>
        <tr>
          <th scope="col">S no.</th>
          <th scope="col">Year</th>
          <th scope="col">Download</th>
          <!-- <th scope="col">Handle</th> -->
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        while ($row = mysqli_fetch_assoc($sql)) {
        ?>
            <th  scope="row" style="font-size:2rem"><?php echo $row['serial_no'] ?></th>
            <td  style="font-size:2rem"><?php echo $row['about'] ?></td>
            <td  style="font-size:2rem"><a href="<?php echo $row['link']?>"><img src="file.png" style="width:20px; height:20px;"></a></td>
          </tr>
        <?php
        }

        ?>
      </tbody>
    </table>
  </content>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>