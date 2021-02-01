<?php
include "connect.php";
if(isset($_GET['delete_id']))
{
 $query="DELETE FROM membership WHERE id=".$_GET['delete_id'];
 mysqli_query($con,$query);
 header("Location: member_update.php");
}
?>

<!DOCTYPE html>
<html>
<!--delete button and update button in action row table -->
<head>
<link rel="icon" href="logo.png">
  <title>CSC574-Quiz 2-Delete-Edit</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding:8px;
  }
    p {
    font-size: 20px;
    }
    lable{
    font-size: 16px;
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
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 
    'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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

<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Are you sure you want to delete this data?'))
     {
        window.location.href='member_update.php?delete_id='+id;
        alert("Data Deleted Successfully");
     }
}
</script>

</head>
<body>
<div class="topnav" id="myNav">
    <a href="home.html">Home</a>
</div><br>
<center><h2>Library Membership Registration Details</h2></center>    
  <br>   
  <center>
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
      <th>Action</th>
      </tr>
      <?php
       include "connect.php";
      $i=1;
          $table  = mysqli_query($con,'SELECT * FROM membership');
          while($row  = mysqli_fetch_array($table)){ ?>
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
                <td>
                <a href="javascript:delete_id(<?php echo $row['id']; ?>)"><img src="trash.png" alt="Delete" style="width:35px;height:35px;" /> </a>
                <a href="update.php?userid=<?php echo $row['id']; ?>"><img src="update.png" alt="Update" style="width:35px;height:35px;"/> </a>
                </td>
              </tr>
         <?php 
         $i++;
        }
        ?>
  </table>
  </center>
</body>
</html>