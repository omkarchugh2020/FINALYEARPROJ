<?php 
require("../assets/database/sql.php");
 $email1= $_SESSION['email'];
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Approval</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../assets/logo.png"/>
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
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

#lawyer tr:nth-child(even){background-color: #f2f2f2;}

#lawyer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #eb6363;
  color: white;
}

</style>
<!-- <style>
 a:active,a:visited,a:link{
        color:white;
    }
    </style> -->
</head>
<body >
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">

        <div style="float:right;margin-top: 33px;padding-right:10px; color:white"class="name"><a style="color:white"href="../assets/database/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div>

        <div style="float:right;margin-top:33px;padding-right:20px;color:white"class="name">Welcome <?php echo $_SESSION['email']; ?></div>

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
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="../about-us.php">About Us</a></li>
                                <li><a href="../services.php">Services</a></li>
                                <!-- <li><a href="blog.php">Blog</a></li> -->
                                <li><a href="../contact-us.php">Contact Us</a></li>
                                <li><a href="user_approval.php">Approval</a></li>
                             
                         
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
                        <h2>Approval </h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Approval</span></p>
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
                <th>Reason</th>
                
            </tr>
        </thead>
        <tbody>
            
            <?php          
            $sql = "SELECT * FROM `leave_and_license_agreement` where email='$email1'";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['firstPartyName']; ?></td>
                <td><?php echo $row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><script>var status="<?php echo $row['approval']; ?>";
                if(status=="Approved")
                {
                    document.write(" <a href='../User-print/L and L print.php?ID=<?php echo $row['ID']; ?>'><i class='fa fa-print' aria-hidden='true'></i> Print</a>");
                    } 
                    else if(status=="Declined")
                    {
                        document.write("Declined");
                        } 
                        else
                        {
                            document.write("Pending");
                            }</script>
                           </td>
                           <td><?php echo $Reason=$row['Reason']; ?></td>
               
  
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
                <th>Reason</th>
           
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `PGA`where email='$email1'";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['firstPartyName']; ?></td>
                <td><?php echo $row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><script>var status="<?php echo $row['approval']; ?>";if(status=="Approved"){ document.write(" <a href='../User-print/PGA_print.php?ID=<?php echo $row['ID']; ?>'><i class='fa fa-print' aria-hidden='true'></i> Print </a>");} else if(status=="Declined"){document.write("Declined")} else{document.write("Pending")}</script></td>
                <td><?php echo $Reason=$row['Reason']; ?></td>
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
                <th>Reason</th>

               
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `ca` where email='$email1'";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['firstPartyName']; ?></td>
                <td><?php echo $row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><script>var status="<?php echo $row['approval']; ?>";
                if(status=="Approved"){
                    document.write(" <a href='../User-print/CA_print.php?ID=<?php echo $row['ID']; ?>'> <i class='fa fa-print' aria-hidden='true'></i> Print</a>");
                    } 
                    else if(status=="Declined"){
                        document.write("Declined");
                        } else{
                            document.write("Pending");
                        }

                        </script>
                        </td>
                        <td><?php echo $Reason=$row['Reason']; ?></td>
                        
  
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
                <th>Reason</th>                
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `promisory_note`where email='$email1'";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['firstPartyName']; ?></td>
                <td><?php echo $row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><script>var status="<?php echo $row['approval']; ?>";if(status=="Approved"){ document.write(" <a href='../User-print/Promisory_note_print.php?ID=<?php echo $row['ID']; ?>'> <i class='fa fa-print' aria-hidden='true'></i> Print</a>");} else if(status=="Declined"){document.write("Declined")} else{document.write("Pending")}</script></td>
                <td><?php echo $Reason=$row['Reason']; ?></td>
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
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `property_transfer` where email='$email1'";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['firstPartyName']; ?></td>
                <td><?php echo $row['secondPartyName']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><script>var status="<?php echo $row['approval']; ?>";if(status=="Approved"){document.write("<a href='../User-print/Property_print.php?ID=<?php echo $row['ID']; ?>'> <i class='fa fa-print' aria-hidden='true'></i> Print</a>");} else if(status=="Declined"){document.write("Declined")} else{document.write("Pending")}</script></td>
                <td><?php echo $Reason=$row['Reason']; ?></td>
  
            </tr>
            <?php
            }
            ?>
             
        </tbody>
    </table>
  
           
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>


 <script>

      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });
    </script>
   </body>
</html>