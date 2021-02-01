<html>
<head>
<link rel="icon" href="logo.png">
  <title>CSC574-Quiz 2-Edit-Exit</title>
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
    lable{
    font-size: 16px;
    }
    .required {
    color: red;
    }
    form{
        margin:40px;
    }
    .top-container {
    background-color: #5fa7bc;
    padding: 10px;
    text-align: center;
    }
    .topnav {
    overflow: hidden;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande','Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-color: #5fa7bc;
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
    background-color: #5fa7bc;
    color: white;
    }
 </style>
</head>
<body>
<div class="topnav" id="myNav">
    <a href="home.html">Home</a>
    <a href="member_update.php">Back</a>
</div>
<?php
    include "connect.php";
//select database to retrieve the specific data by using GETs
$table=mysqli_query($con,"SELECT * from membership where id='".$_GET['userid']."'");
$row=mysqli_fetch_array($table);

extract($_POST);
if(isset($update))
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
	
    mysqli_query($con,"UPDATE membership set firstname='$firstname',lastname='$lastname',datebirth='$datebirth',address1='$address1',address2='$address2',
    country='$country',city='$city',state='$state',zipcode='$zipcode',email='$email',code_phonenum='$code_phonenum',phonenum='$phonenum',
    use_library='$use',sec_access='$sec' where id='".$_GET['userid']."'");
    //message to notify the user that data updated successfully
    echo '<br><p style="font-family: Arial, Helvetica, sans-serif;color:blue;text-align:center;"><b>Data Updated Successfully. <a href="member_update.php">Exit</a></b></p>';
    
	
}
?>

<form enctype="multipart/form-data" method="post" action="">
<center>
<h1>Update</h1>
<p>Library Membership Registration</p>
</center>
</div>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<br>
<p>Name</p>
    <table>
    <tr>
<td><input type="text" name="firstname" size="50" class="form-control" id="firstname" value="<?php echo $row['firstname']; ?>"><lable>First Name</lable></td><td style="opacity: 0;">__</td>
<td><input type="text" name="lastname" size="50" class="form-control" id="lastname" value="<?php echo $row['lastname']; ?>"><lable>Last Name</lable></td>
    </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td><p>Date of Birth<span class="required">*</span></p><lable>DD-MMM-YYYY</lable></td><td style="opacity: 0;">fdsiufwinrebrhrthrinc</td>
            <td><input type="text" name="datebirth" size="69" class="form-control" id="datebirth" value="<?php echo $row['datebirth']; ?>"></td>
        </tr>
    </table>
<p>Address</p>
    <input type="text" name="address1" size="60" class="form-control" id="address1" value="<?php echo $row['address1']; ?>"></td>
    <center><lable>Address1</lable></center>
    <input type="text" name="address2" size="60" class="form-control" id="address2" value="<?php echo $row['address2']; ?>"></td>
    <center><lable>Address2</lable></center>
<select class="form-control" name="country" id="country">
    <option value="<?php echo $row['country']; ?>"><?php echo $row['country']; ?></option>
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
        <input type="text" name="city" size="50" class="form-control" id="city" value="<?php echo $row['state']; ?>">
        <center><lable>City</lable></center></td><td style="opacity: 0;">thrinc</td>
        <td><input type="text" name="state" size="10" class="form-control" id="state" value="<?php echo $row['state']; ?>">
        <center><lable>State</lable></center></td><td style="opacity: 0;">thrinc</td>
        <td><input type="text" name="zipcode" size="23" class="form-control" id="zipcode" value="<?php echo $row['zipcode']; ?>">
        <center><lable>Zip Code</lable></center>
    </td>
    </tr>
    </table>
    <br>
    <table>
    <tr>
        <td><p>Email</p></td><td style="opacity: 0;">fdsiufwincwurebrtnbrhrthrinc</td>
        <td><input type="text" placeholder="user@example.com" name="email" size="71" class="form-control" id="email" value="<?php echo $row['email']; ?>"></td>
    </tr>
    </table>
    <br>
    <table>
        <tr>
            <td><p>Phone Number</p></td><td style="opacity: 0;">ftnddddsdsdrinc</td>
            <td><input type="text" name="code_phonenum" size="5" class="form-control" id="code_phonenum" value="<?php echo $row['code_phonenum']; ?>"></td>
            <td style="opacity: 0;">c</td>
            <td><input type="text" name="phonenum" size="58" class="form-control" id="phonenum" value="<?php echo $row['phonenum']; ?>" ></td>
        </tr>
    </table><br>
    <p>What would you use the library for?</p>
    <?php 
		$chkbox=$row['use_library'];
	 	$arr=explode(",",$chkbox);			
	?>
    <label><input <?php if(in_array("reference",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="reference"> Reference</label>
    <br><label><input <?php if(in_array("in-house reading",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="in-house reading"> In-house reading</label>
    <br><label><input <?php if(in_array("borrowing",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="borrowing"> Borrowing</label>
    <br>
    <br><br>
    <p>Which sections of the library would you like access to?</p>
    <?php 
		$chkbox=$row['sec_access'];
	 	$arr1=explode(",",$chkbox);			
	?>
    <label><input type="checkbox" name="sec_access" value="all"> All</label>
    <br><label><input <?php if(in_array("magazine",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="magazine"> Magazine</label>
    <br><label><input <?php if(in_array("fiction",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="fiction"> Fiction</label>
    <br><label><input <?php if(in_array("non-fiction",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="non-fiction"> Non-fiction</label>
    <br><label><input <?php if(in_array("electronic",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="electronic"> Electronic</label>
    <br><label><input <?php if(in_array("research & reference",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="research&reference"> Research & Reference</label>
    <br><label><input <?php if(in_array("terror",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="terror"> Terror</label>
    <br><label><input <?php if(in_array("education",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="education"> Education</label>
    <br><label><input <?php if(in_array("science fiction",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="science fiction"> Science fiction</label>
    <br><label><input <?php if(in_array("poetry",$arr1)){echo "checked";}?> type="checkbox" name="arr1[]" value="poetry"> Poetry</label>
    <br><br><br>
    <input type="submit" name="update" value="Update" class="buttom">
</form>
</body>
</html>