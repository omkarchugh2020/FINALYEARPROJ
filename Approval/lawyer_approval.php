<?php require("../assets/database/sql.php");?>
<html lang="en">
<head>
<style>
#lawyer {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
width:100%;
 
}
#lawyer td, #lawyer th {
  border: 1px solid #ddd;
  padding: 8px;
}
#lawyer tr:nth-child(even){
    background-color: #f2f2f2;
    }

#lawyer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #eb6363;
  color: white;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="icon" type="image/png" href="../assets/logo.png"/>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/images/fav-icon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />

</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
        
        <a style="float:right;margin-top:33px;padding-right:40px;color:white"class="name" href="../assets/database/Lawyer_logout.php"> Logout</a>
            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h1>lawyer</h1>
                        </div>
                        <div class="menu-toggle"></div>
                        <div class="my-nav">
                            <div class="menu">
                              <ul>
                              <li stype="float: left;"class="logo"><a href="index.html">RSA Lawyer</a></li>
                              <li><a href="../enquiry.php">Enquires</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ===============================*****End Header*****=============================== -->

    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Approval</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Approval </span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<center>Leave license Agreement </center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>FirstPartyName</th>
                <th>SecondPartyName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `leave_and_license_agreement`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $email=$row['firstPartyName']; ?></td>
                <td><?php echo $email=$row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="../Lawyer-Print/L and L print.php?ID=<?php echo $row['ID']; ?>">Preview</a></td>
  
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>

    <br>
    <center>Paying Guest</center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>FirstPartyName</th>
                <th>SecondPartyName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `pga`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $email=$row['firstPartyName']; ?></td>
                <td><?php echo $email=$row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="../Lawyer-Print/PGA_print.php?ID=<?php echo $row['ID']; ?>">Preview</a></td>
  
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>

    <br>
    <center>Conducting Agreement</center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>FirstPartyName</th>
                <th>SecondPartyName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `ca`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $email=$row['firstPartyName']; ?></td>
                <td><?php echo $email=$row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="../Lawyer-Print/CA_print.php?ID=<?php echo $row['ID']; ?>">Preview</a></td>
  
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>

    <br>
    <center>Promisory Note</center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>FirstPartyName</th>
                <th>SecondPartyName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `promisory_note`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $email=$row['firstPartyName']; ?></td>
                <td><?php echo $email=$row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="../Lawyer-Print/Promisory_note_print.php?ID=<?php echo $row['ID']; ?>">Preview</a></td>
  
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>

<br>
    <center>Property Registration</center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>FirstPartyName</th>
                <th>SecondPartyName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `property_transfer`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $email=$row['firstPartyName']; ?></td>
                <td><?php echo $email=$row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="../lawyer-Print/Property_print.php?ID=<?php echo $row['ID']; ?>">Preview</a></td>
  
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
   </body>
</html>