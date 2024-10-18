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

// insert table methods
public function insertHall( $HallNumber, $SeatsAmount){
  $this->connect();
  $query="INSERT INTO Hall(HallNumber,SeatsAmount)VALUES($HallNumber,$SeatsAmount);";
  $res= mysqli_query($this->conn,$query);
return $res;
}
public function insertMOVIE( $Title, $Genre,$Actor,$Director,$Language,$Age_restrictions,$Duration,$Description	){
    $this->connect();
    $query="INSERT INTO MOVIE(Title, Genre, Actor, Director, Language, Age_restrictions, Duration, Description	)VALUES('$Title','$Genre','$Actor','$Director','$Language',$Age_restrictions,$Duration,'$Description');";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function insertPAYMENT( $Amount, $Timestamp,$DiscountCode,$TransactionNum,$ReservationID,$PaymentMethod	){
    $this->connect();
    $query="INSERT INTO PAYMENT(Amount, Timestamp, DiscountCode, TransactionNum, ReservationID, PaymentMethod)VALUES($Amount,'$Timestamp','$DiscountCode',$TransactionNum,$ReservationID,'$PaymentMethod');";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function insertSEAT_RESERVATION($NumberOfSeats, $Paid,$Active	,$UserID){
    $this->connect();
    $query="INSERT INTO SEAT_RESERVATION(NumberOfSeats, Paid, Active, UserID)VALUES($NumberOfSeats,$Paid,$Active,$UserID);";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function insertSHOW($HallD, $Date,$Startime,$MovielD,$EndTime){
    $this->connect();
    $query="INSERT INTO SHOW(HallD, Date, Startime, MovielD, EndTime)VALUES($HallD,'$Date','$Startime',$MovielD,'$EndTime');";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function insertUSER($Name, $Passward,$Email,$Phone){
    $this->connect();
    $query="INSERT INTO USER(Name, Passward, Email, Phone)VALUES('$Name','$Passward','$Email','$Phone');";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }



// fetch all record methods
public function fetch_all_record_Hall(){
  $this->connect();
  $query="SELECT * FROM Hall";
  $res= mysqli_query($this->conn,$query);
  return $res;
}

public function fetch_all_record_MOVIE(){
    $this->connect();
    $query="SELECT * FROM MOVIE";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }

  public function fetch_all_record_PAYMENT(){
    $this->connect();
    $query="SELECT * FROM PAYMENT";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_all_record_SEAT_RESERVATION(){
    $this->connect();
    $query="SELECT * FROM SEAT_RESERVATION";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_all_record_SHOW(){
    $this->connect();
    $query="SELECT * FROM SHOW";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_all_record_USER(){
    $this->connect();
    $query="SELECT * FROM USER";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }



// delete record methods
public function delete_record_Hall($id){
  $this->connect();
  $query="DELETE FROM Hall WHERE HallD=$id";
  $res=mysqli_query($this->conn,$query);
  return $res;
}
public function delete_record_MOVIE($MovielD){
    $this->connect();
    $query="DELETE FROM MOVIE WHERE MovielD=$MovielD";
    $res=mysqli_query($this->conn,$query);
    return $res;
  }
  public function delete_record_PAYMENT($id){
    $this->connect();
    $query="DELETE FROM PAYMENT WHERE PaymentiD=$id";
    $res=mysqli_query($this->conn,$query);
    return $res;
  }
  public function delete_record_SEAT_RESERVATION($id){
    $this->connect();
    $query="DELETE FROM SEAT_RESERVATION WHERE ReservationID=$id";
    $res=mysqli_query($this->conn,$query);
    return $res;
  }
  public function delete_record_SHOW($id){
    $this->connect();
    $query="DELETE FROM SHOW WHERE ShawID=$id";
    $res=mysqli_query($this->conn,$query);
    return $res;
  }
  public function delete_record_USER($id){
    $this->connect();
    $query="DELETE FROM USER WHERE UserID=$id";
    $res=mysqli_query($this->conn,$query);
    return $res;
  }


// fetch sigle response methods
public function fetch_single_Hall($id){
  $this->connect();
  $query="SELECT * FROM Hall WHERE HallD=$id";
  $res= mysqli_query($this->conn,$query);
  return $res;
}

public function fetch_single_MOVIE($id){
    $this->connect();
    $query="SELECT * FROM MOVIE WHERE MovielD=$id";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_single_PAYMENT($id){
    $this->connect();
    $query="SELECT * FROM PAYMENT WHERE PaymentiD=$id";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_single_SEAT_RESERVATION($id){
    $this->connect();
    $query="SELECT * FROM SEAT_RESERVATION WHERE ReservationID=$id";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_single_SHOW($id){
    $this->connect();
    $query="SELECT * FROM SHOW WHERE ShawID=$id";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }
  public function fetch_single_USER($id){
    $this->connect();
    $query="SELECT * FROM USER WHERE UserID=$id";
    $res= mysqli_query($this->conn,$query);
    return $res;
  }


// update record methods
public function update_Hall($HallD, $HallNumber, $SeatsAmount){
  $this->connect();
  $query="UPDATE Hall SET HallNumber=$HallNumber, SeatsAmount=$SeatsAmount WHERE MovielD=$HallD;";
  $res= mysqli_query($this->conn,$query);
return $res;
}
public function update_MOVIE($Title, $Genre,$Actor,$Director,$Language,$Age_restrictions,$Duration,$Description,$MovielD){
    $this->connect();
    $query="UPDATE MOVIE SET Title=$Title, Actor=$Actor,Genre=$Genre, Director=$Director , Language=$Language , Age_restrictions=$Age_restrictions , Duration=$Duration , Description=$Description  WHERE MovielD=$MovielD;";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function updatePAYMENT( $Amount, $Timestamp,$DiscountCode,$TransactionNum,$ReservationID,$PaymentMethod,$PaymentiD	){
    $this->connect();
    $query="UPDATE PAYMENT SET Amount=$Amount, Timestamp=$Timestamp, DiscountCode=$DiscountCode, TransactionNum=$TransactionNum, ReservationID=$ReservationID, PaymentMethod=$PaymentMethod WHERE PaymentiD=$PaymentiD;";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function updateSEAT_RESERVATION($NumberOfSeats, $Paid,$Active,$UserID,$ReservationID){
    $this->connect();
    $query="UPDATE SEAT_RESERVATION SET NumberOfSeats=$NumberOfSeats, Paid=$Paid, Active=$Active, UserID=$UserID WHERE ReservationID=$ReservationID;";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }

  public function updateSHOW($HallD, $Date,$Startime,$MovielD,$EndTime,$ShawID){
    $this->connect();
    $query="UPDATE SHOW SET HallD=$HallD, Date=$Date, Startime=$Startime, MovielD=$MovielD, EndTime=$EndTime WHERE ShawID=$ShawID;";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }
  public function updateUSER($Name, $Passward,$Email,$Phone,$UserID){
    $this->connect();
    $query="UPDATE USER SET Name=$Name, Passward=$Passward, Email=$Email, Phone=$Phone WHERE UserID=$UserID;";
    $res= mysqli_query($this->conn,$query);
  return $res;
  }


}
?>