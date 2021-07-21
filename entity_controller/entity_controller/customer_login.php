<?php
    require 'entity_master/Customer.php';
    use entity_master\Customer;
    
    require 'database/database.php';
    $database = new Database();
    $conn = $database->getConnection();
    
    $customer = new Customer();
    
    // print_r($_POST);
    
    $email=$password="";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
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
            
            // date_default_timezone_set('Asia/Kolkata');
            // $today=date("Y-m-d H:i:s");
            // $customer->setCreatedAt($today);
            
            
            $query = "CALL login_Customer(:email_id,:password)";
                $stmt = $conn->prepare($query);
                
                $email = $customer->getEmailId();
                $password = $customer->getPassword();
             // bind values 
                $stmt->bindParam(":email_id", $email);
                $stmt->bindParam(":password", $password);
                
            
            if($stmt->execute()){
                    $success = "Login Successfully";
                }else{
                    $success = "Login Failed";
                }
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
     

?>