<?php

class Config{
    private $HOST="localhost";
    private $USERNAME="root";
    private $PASSWRD="root";
    private $DB_NAME="php_exam";
 public $conn;
public function connect(){
  $this->conn=  mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWRD,$this->DB_NAME);
  return $this->conn;

}
public function insertHall( $HallNumber, $SeatsAmount){
  $this->connect();
  $query="INSERT INTO Hall(HallNumber,SeatsAmount)VALUES($HallNumber,'$SeatsAmount');";
  $res= mysqli_query($this->conn,$query);
return $res;
}

public function fetch_all_record_Hall(){
  $this->connect();
  $query="SELECT * FROM Hall";
  $res= mysqli_query($this->conn,$query);
  return $res;
}

public function delete_record_($id){
  $this->connect();
  $query="DELETE FROM Hall WHERE id=$id";
  $res=mysqli_query($this->conn,$query);
  return $res;
}

public function fetch_single_Hall($id){
  $this->connect();
  $query="SELECT * FROM Hall WHERE id=$id";
  $res= mysqli_query($this->conn,$query);
  return $res;
}

public function update_Hall($HallD, $HallNumber, $SeatsAmount){
  $this->connect();
  $query="UPDATE Hall SET HallNumber=$HallNumber, SeatsAmount=$SeatsAmount WHERE HallD=$HallD;";
  $res= mysqli_query($this->conn,$query);
return $res;
}

}

?>