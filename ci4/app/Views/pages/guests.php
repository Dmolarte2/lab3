<!DOCTYPE html>
<html>
<body>

<div class="sidenav">
  <a href="index.php">Go Back to My Profile</a>
</div>

<div class="content">
  <h2>Applicants for Daniel's Dogs</h2>

<?php
  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT name, email, website, comment, gender FROM dmolarte2_MyGuestss";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br> Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website: " . $row["website"].
      " - Comment: " . $row["comment"]. " - Gender: " . $row["gender"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();  
?>

</div>


</body>
</html>
