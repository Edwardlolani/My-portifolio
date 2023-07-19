
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>my-portifolio</title>
  </head>
  <body>
   <?php

include ('connect.php');

$query = "SELECT * FROM `skills`" ;

$skills = mysqli_query($conn,$query);

if(mysqli_num_rows($skills)>0)

echo "<table border-collapse:collapse>";
 echo "<tr><th>Skill</th><th>Tool</th><th>Technology</th></tr>";

while($row = mysqli_fetch_assoc($skills)){
$skill = $row['skill'];
$tool = $row['tools'];
$technology = $row['technogies'];

echo "<tr>";
          echo "<td>$skill</td>";
           echo "<td>$tool</td>";
            echo "<td>$technology</td>";
echo "</tr>";
     }
echo "</table>";
?>
</body>
</html>