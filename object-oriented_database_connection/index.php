<html>
<head>
  <title>Dane</title>
</head>
<body>
  <form method="post" action="add.php">
    <input type="text" name="name" placeholder="Name" /><br/>
    <input type="number" name="value" placeholder="Value" /><br/>
    <input type="submit" value="Add" />
  </form>
  <hr/>
  <style type="text/css">
    table{
      border: 1px solid black;
    }
    td{
      border: 1px solid black;
    }
  </style>
  <?php
  include "connection.php";

  $database = new Database();
  $connection = $database->connect();
  $reply = $database->query($connection, sprintf("SELECT * FROM data"));
  echo '<table>
          <tr>
            <th>Name</th>
            <th>Value</th>
          </tr>
  ';
  while($row = $reply->fetch_assoc()){
    echo '
      <tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['value'].'</td>
      </tr>
    ';
  }
  echo '</table>';
  $database->close($connection);
  ?>
</body>
</html>
