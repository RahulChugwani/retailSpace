<?php 
$con = new mysqli("localhost","root","","shop_inventory");
$email = $_POST['owner_email'];
$password = $_POST['owner_password'];

$password = md5($password);
$query = "SELECT * FROM shop_owner WHERE owner_email = '$email' AND owner_password='$password'";
$result = $con->query($query);

if($result->num_rows == 1){

	session_start();
	$data = $result->fetch_assoc();
	$_SESSION['sess_id'] = session_id() ;
	$_SESSION['owner_id'] = $data['owner_id'];

	echo("<script language='JavaScript'>
    window.location.href= 'home.php';
    window.alert('redirect to home page');
    </script>");

}
else{
	echo ("<script language='JavaScript'>
    window.location.href= 'index.php';
    window.alert('Password or Email is incorrect.');
    </script>");
}
?>

<!-- <?php
class check_auth{
 
    // database connection and table name
    private $conn;
    private $table_name = "shop_owner";
 
    // object properties
    public $owner_id;
    public $owner_name;
    public $owner_email;
    public $owner_password;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    owner_name=:username, owner_password=:password, owner_email=:owner_email";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `id`, `username`, `password`, `created`
                FROM
                    " . $this->table_name . " 
                WHERE
                    username='".$this->username."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                username='".$this->username."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

  }

  ?> -->