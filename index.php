<!DOCTYPE html>
<html>
  <!--Registration form and Add button and can notify the customer succesful registration after register-->
<head>
<link rel="icon" href="logo.png">
  <title>CSC574-Quiz 2-Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    p {
     font-size: 20px;
    }
    form{
        margin:40px;
    }
    .required {
  color: red;
}
    lable{
     font-size: 16px;
    }
    .top-container {
  background-color: #5fa7bc;
  padding: 10px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  background-color:#CD3E53;
}

.topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  color: black;
}

.topnav a.active {
  color: black;
}
</style>
</head>
<body>
<div class="topnav" id="myNav">
    <a  href="home.html">Home</a>
    <a  class="active" href="index.php">Registration</a>
    <a  href="member_view.php">List of Members</a>
  </div><br>

<?php
    include "connect.php";
    extract($_POST);
    if(isset($save))
    {
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $datebirth=$_POST["datebirth"];
        $address1=$_POST["address1"];
        $address2=$_POST["address2"];
        $country=$_POST["country"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $zipcode=$_POST["zipcode"];
        $email=$_POST["email"];
        $code_phonenum=$_POST["code_phonenum"];
        $phonenum=$_POST["phonenum"];
        $use=implode(",",$arr);
        $sec=implode(",",$arr1);
        $sql="INSERT INTO membership (firstname,lastname,datebirth,address1,address2,country,city,state,zipcode,email,code_phonenum,phonenum,use_library,sec_access) 
        VALUES ('$firstname','$lastname','$datebirth','$address1','$address2','$country','$city','$state','$zipcode','$email','$code_phonenum','$phonenum','$use','$sec')";
        mysqli_query($con,$sql);
        //message to notify the user that your form has been submitted
      echo '<p style="font-family: Arial, Helvetica, sans-serif;color:green;text-align:center;"><b>Your form has been submitted. Thank you for participating!</b></p>';
    
    } 
?>
<br>
    <center> 
        <h1>Library Membership Registration</h1>
        <p>Register today for a free membership!</p>
    </center>
    <form action="" method ="post" enctype="multipart/form-data">
    <p>Name</p>
    <table>
    <tr>
        <td><input type="text" name="firstname" size="50" class="form-control" id="firstname"><lable>First Name</lable></td><td style="opacity: 0;">__</td>
        <td><input type="text" name="lastname" size="50" class="form-control" id="lastname"><lable>Last Name</lable></td>
    </tr>
    </table>
    <br><br>
    
    <br><br><table>
        <tr>
            <td><p>Date of Birth<span class="required">*</span></p><lable>DD-MMM-YYYY</lable></td><td style="opacity: 0;">fdsiufwinrebrhrthrinc</td>
            <td><input type="text" name="datebirth" size="69" class="form-control" id="datebirth"></td>
        </tr>
    </table>
    <p>Address</p>
    <input type="text" name="address1" size="60" class="form-control" id="address1"></td>
    <center><lable>Address1</lable></center>
    <input type="text" name="address2" size="60" class="form-control" id="address2"></td>
    <center><lable>Address2</lable></center>
    <select class="form-control" name="country" id="country">
        <option>Select Country</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Algeria">Algeria</option>
        <option value="Australia">Australia</option>
        <option value="Belgium">Belgium</option>
        <option value="Brazil">Brazil</option>
        <option value="Brunei">Brunei</option>
        <option value="Canada">Canada</option>
        <option value="China">China</option>
        <option value="Egypt">Egypt</option>
        <option value="Germany">Germany</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iraq">Iraq</option>
        <option value="Italy">Italy</option>
        <option value="Japan">Japan</option>
        <option value="Malaysia">Malaysia</option>
        <option value="New Zealand">New Zealand</option>
    </select>
    <center><lable>Country</lable></center>
    <table>
    <tr>
    <td>
        <input type="text" name="city" size="50" class="form-control" id="city">
        <center><lable>City</lable></center></td><td style="opacity: 0;">thrinc</td>
        <td><input type="text" name="state" size="10" class="form-control" id="state">
        <center><lable>State</lable></center></td><td style="opacity: 0;">thrinc</td>
        <td><input type="text" name="zipcode" size="23" class="form-control" id="zipcode">
        <center><lable>Zip Code</lable></center>
    </td>
    </tr>
    </table>
    <br>
    <table>
        <tr>
            <td><p>Email</p></td><td style="opacity: 0;">fdsiufwincwurebrtnbrhrthrinc</td>
            <td><input type="text" placeholder="user@example.com" name="email" size="71" class="form-control" id="email"></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td><p>Phone Number</p></td><td style="opacity: 0;">ftnddddsdsdrinc</td>
            <td><input type="text" name="code_phonenum" size="5" class="form-control" id="code_phonenum"></td>
            <td style="opacity: 0;">c</td>
            <td><input type="text" name="phonenum" size="58" class="form-control" id="phonenum"></td>
        </tr>
    </table><br>
    <p>What would you use the library for</p>
    <label><input type="checkbox" name="arr[]" value="reference"> Reference</label>
    <br><label><input type="checkbox" name="arr[ ]" value="in-house reading"> In-house reading</label>
    <br><label><input type="checkbox" name="arr[ ]" value="borrowing"> Borrowing</label>
    <br><br>
    <p>Which sections of the library would you like access to?</p>
    <label><input type="checkbox" name="arr1[ ]" value="all"> All</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="magazine"> Magazine</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="fiction"> Fiction</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="non-fiction"> Non-fiction</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="electronic"> Electronic</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="research&reference"> Research & Reference</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="terror"> Terror</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="education"> Education</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="science fiction"> Science fiction</label>
    <br><label><input type="checkbox" name="arr1[ ]" value="poetry"> Poetry</label>
    <br>
    <br><input type="submit" class="btn btn-default" name="save"  value="Add"> <input class="btn btn-default" type="reset" value="Reset">
    </form>
</body></html>
