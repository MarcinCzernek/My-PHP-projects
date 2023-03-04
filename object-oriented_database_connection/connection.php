<?php
class Database{
  private $host;
  private $db_user;
  private $db_password;
  private $db_name;

  public function connect(){
    $this->host = "localhost";
    $this->db_user = "root";
    $this->db_password = "";
    $this->db_name = "object";

    try{
      $connection = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);

      if($connection->connect_errno != 0){
        throw new Exception(mysqli_connect_errno());
      }
      else{
        return $connection;
      }
    }
    catch(Exception $e){
      header('Location: index.php?error=Connection');
      exit();
    }
  }

  public function query($conn, $query){
    if($reply = mysqli_query($conn, $query)){
      return $reply;
    }
    else{
      header('Location: index.php?error=Query');
      exit();
    }
  }

  public function close($conn){
    $conn->close();
  }
}
?>
