<?php
    require 'entity_master/Customer.php';
    use entity_master\Customer;
    
    require 'database/database.php';
    $database = new Database();
    $conn = $database->getConnection();
    
    $customer = new Customer();
    
    // print_r($_POST);
    
    $username=$email=$password=$cpassword="";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                $usernameErr = "Name is required";
            } else {
                $username = test_input($_POST["username"]);
                $customer->setUsername($username);
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                $customer->setEmailId($email);
                
            }
            
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
            }
            
            if (empty($_POST["cpassword"])) {
                $cpasswordErr = "Confirm Password is required";
            } else {
                $cpassword = test_input($_POST["cpassword"]);
                if($password==$cpassword){
                    $customer->setPassword($cpassword);
                    
                }
                else{
                    $cpasswordErr = "Password mismatch!";
                }
            }
            
            date_default_timezone_set('Asia/Kolkata');
            $today=date("Y-m-d H:i:s");
            $customer->setCreatedAt($today);
            
            
            $query = "CALL in_Customer(:username,:email,:password,:created_at)";
                $stmt = $conn->prepare($query);
                
                $username = $customer->getUsername();
                $email = $customer->getEmailId();
                $password = $customer->getPassword();
                $created_at = $customer->getCreatedAt();
             // bind values 
                $stmt->bindParam(":username", $username);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":password", $password);
                $stmt->bindParam(":created_at", $created_at);
                // CALL in_Customer('kiran','kdarunte@gmail.com','Kiran@123','2016-12-21 00:00:00.000');
            
            if($stmt->execute()){
                    $success = "Successfully Inserted";
                }else{
                    $success = "Successfully Failed";
                }
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
     

?>