<?php
//available search button and display retrieve all data from database
if(isset($_POST['search']))
{
    $valueSearch = $_POST['valueSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `membership` WHERE CONCAT(`id`, `firstname`, `lastname`, `datebirth`,`address1`, `address2`, `country`, `city`,
    `id`, `state`, `zipcode`, `email`,`code_phonenum`, `phonenum`, `use_library`, `sec_access`) 
    LIKE '%".$valueSearch."%'";
    $result = filter($query);
    
}
 else {
    $query = "SELECT * FROM `membership`";
    $result = filter($query);
}

// function to connect and execute the query
function filter($query)
{
    include "connect.php";
    $res = mysqli_query($con, $query);
    return $res;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="logo.png">
  <title>CSC574-Quiz 2-Retrieve-Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:8px;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    }
    p {
     font-size: 20px;
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
    <a   href="index.php">Registration</a>
    <a  class="active" href="member_view.php">List of Members</a>
  </div>


<center>
<h1>Successful Registration</h1></center><br>
<form style='margin-left:105px' action="" method="post">
    <input type="text" name="valueSearch" placeholder="Search">
    <input type="submit" name="search" value="Search"><br><br>
        <table>
            <tr>
              <th>No.</th>  
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date of Birth</th>
              <th colspan='2'>Address</th>
              <th>Country</th>
              <th>City</th>
              <th>State</th>
              <th>Zipcode</th>
              <th>Email</th>
              <th colspan='2'>Phone Number</th
              ><th>Use Library for</th>
              <th>Library Section</th>
            </tr>

      <!-- populate table from mysql database -->
      <?php $i=1; 
          while($row = mysqli_fetch_array($result)):?>
          <tr>
            <tr id="<?php echo $row['id']; ?>">
               <td><?php echo $i; ?></td>
               <td><?php echo $row['firstname']; ?></td>
               <td><?php echo $row['lastname']; ?></td>
               <td><?php echo $row['datebirth']; ?></td>
               <td><?php echo $row['address1']; ?></td>
               <td><?php echo $row['address2']; ?></td>
               <td><?php echo $row['country']; ?></td>
               <td><?php echo $row['city']; ?></td>
               <td><?php echo $row['state']; ?></td>
               <td><?php echo $row['zipcode']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['code_phonenum']; ?></td>
               <td><?php echo $row['phonenum']; ?></td>
               <td><?php echo $row['use_library']; ?></td>
               <td><?php echo $row['sec_access']; ?></td>
            </tr>
          <?php  $i++; endwhile;?>
      </table>
            
    </form>
  </body>
</html>