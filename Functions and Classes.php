<?php
class Database {
	 $username = 'jic5'; 
	 $password ='aaREdyDI';
	 $hostname ='sql2.njit.edu';
	 $database;
 public static $Database () {
  if $database = NUll;
		$database = new PDO($dsn, $username, $password);
		return $database;
  else;
   return $database;
 }
}
class User {
  <?php foreach ($accounts as accounts)?>
  private $id, $email, $fname, $lname, $phone, $birthday, $gender, $password;

  public function getid () {
   return this->id;;
  }
  public funtion setid ($value){
   return this->id = $value;
  }

   public function getemail () {
   return this->email;
  }
  public funtion setemail ($value){
   return this->email = $value;
  }

public function getfname () {
   return this->fname;
  }
  public funtion setfname ($value){
   return this->fname = $value;
  }

  public function getlname () {
   return this->lname;
  }
  public funtion setlname ($value){
   return this->lname = $value;
  }

public function getphone () {
   return this->phone
  }
  public funtion setphone ($value){
   return this->phone = $value
  }

  public function getbirthday () {
   return this->birthday
  }
  public funtion setbirthday ($value){
   return this->birthday = $value
  }

  public function getgender () {
   return this->gender
  }
  public funtion setgender ($value){
   return this->gender = $value
  }

 public function getpassword () {
   return this->password
  }
  public funtion setpassword ($value){
   return this->password = $value
  }

public function $userRow ($id, $email, $fname, $lname, $phone, $birthday, $gender, $password) {
	$row = $id, $email, $fname, $lname, $phone, $birthday, $gender, $password;
	return $row;
  }
}

class UserDatabase {
	public static $getUsers {
   return $row
  }
  
  public static $insertUser = "INSERT INTO accounts
  (id, email, fname, lname, phone, birthday, gender, password)
  VALUES (:id, :email, :fname, :lname, :phone, :birthday, :gender, :password);

  public static $updateUserPassword = "UPDATE accounts 
  SET password = :password WHERE id = :id";

  public static $deleteUser = "DELETE FROM accounts WHERE id = :id";
}

static
>