<?php require("assets/database/sql.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link rel="stylesheet" href="assets/css/duration_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="assets/logo.png"/>

    <title>Conducting Aggreemnt</title>
    <style>
        body{
            /* background-image: url("assets/images/L and L/main.jpg");  */
        }
    </style>


</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
        <div style="float:right;margin-top:33px;padding-right:20px;color:white"class="email">Welcome <?php echo $_SESSION['email']; ?></div>

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
                              <li stype="float: left;"class="logo"><a href="index.html">Ghatte Lawyer</a></li>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <!-- <li><a href="blog.php">Blog</a></li> -->
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="Approval/user_approval.php">Approval</a></li>
                              
                           
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
                        <h2>Conducting Aggreemnt</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Conducting Aggreemnt</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if(!empty($_POST['firstPartyName'])&&!empty($_POST['firstPartyAddress'])&&!empty($_POST['secondPartyName'])&&!empty($_POST['secondPartyAddress'])&&!empty($_POST['ContractLength'])&&!empty($_POST['LiveDate'])&&!empty($_POST['EndDate'])&&!empty($_POST['premises'])&&!empty($_POST['terms']))
    {       
            $email = $_SESSION['email']; 
            $approval="Pending";
            $firstPartyName = secure($_POST['firstPartyName']);
            $firstPartyAddress = secure($_POST['firstPartyAddress']);
            $secondPartyName = secure($_POST['secondPartyName']);
            $secondPartyAddress = secure($_POST['secondPartyAddress']);
            $ContractLength = secure($_POST['ContractLength']);
            $LiveDate = secure($_POST['LiveDate']);
            $EndDate = secure($_POST['EndDate']);
            $premises = secure($_POST['premises']);
            $terms = secure($_POST['terms']);
           
        $sql = "INSERT INTO `ca`(`email`,`approval`,`firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `noOfMonths`, `startDate`, `endDate`, `premises`, `terms`) VALUES ('$email','$approval','$firstPartyName','$firstPartyAddress','$secondPartyName','$secondPartyAddress','$ContractLength','$LiveDate','$EndDate','$premises','$terms')";
        $mysqli->query($sql);
        header("location:CA.php");
        
    }
    ?>
    <p align="right">
<input type="button" onclick="window.open('assets/database/logout.php')" value="logout"></p>
<form method="POST">
    <div class="table_form">
  <table class="center">
      <tr>
              <td></td>
              <td colspan="2">Conducting Aggreemnt</td>
             
      </tr>

      <tr>
            <td> <img src="assets/images/L and L/first_part_img.png" class="img"></td>
            <td>
            First Party Name<br>
                <select>
                <option value="MR."> MR. </option>
                <option value="MRS."> MRS. </option>
            </select>
                <input type="text" id="first_party" class="name" name="firstPartyName">
                <textarea name="firstPartyAddress"></textarea>
            </td>
        
    </tr>

    <tr>
            <td><img src="assets/images/L and L/second_party_img.png"class="img"></td>
            <td> 
            Second Party Name<br>
                <select>
                <option value="MR."> MR. </option>
                <option value="MRS."> MRS. </option>
            </select>
            
            <input type="text"id="second_party" name="secondPartyName" class="name"><br>
            <textarea name="secondPartyAddress"></textarea>
            </td>
       
    </tr>

    <tr>
            <td><img src="assets/images/L and L/duration.jpg"class="img"></td>
            <td>
            <table>
            <tr>
                <td>Months</td>
                <td><input  id="ContractLength" name="ContractLength" type="number" value="5" />
                </td>
                
            </tr>

            <tr>
                <td>From</td>
                <td> <input type="text" Value="30/01/2020" class="datepicker" id="LiveDate" name="LiveDate"  /> 
                </td>
                
            </tr>
            <tr>
                <td>Till</td>
                <td><input type="text" Value="30/10/2020" class="datepicker"  id="EndDate" name="EndDate" />  
                </td> 
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><img src="assets/images/L and L/dollor_icon.jpg"class="img"></td>
        <td>
           <label>Premises: </label>&nbsp; &nbsp;&nbsp; <textarea class="numberic" name="premises"></textarea><br>
           <label>Terms Agreed between both parties:  </label>&nbsp;&nbsp;&nbsp; <textarea  name="terms"></textarea><br>
          
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2">
        <input type="submit" value="Create Agreement">
       
        </td>
    </tr>
  </table>  
</form>
</div>
<br>
<script>
$('#LiveDate, #ContractLength').change(function () {
    var stVal = $("#LiveDate").val()
    var d = new Date(stVal.split("/").reverse().join("-"));
    var month = parseInt($("#ContractLength").val());
    d.setMonth(d.getMonth() + month);
    var dd = d.getDate();
    var mm = d.getMonth()+1;
    var yy = d.getFullYear();
    var newdate = dd + "/" + mm + "/" + yy;
    $("#EndDate").val(newdate);

});
</script>
    <script src="assets/js/numberToWords.js"></script>
    <script src="assets/js/number store.js"></script>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
</html>