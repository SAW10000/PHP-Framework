<?php
    require '../entity_master/Customer.php';
    use entity_master\Customer;
    $customer = new Customer();
    $customer->setUsername("Kartik");
    echo $customer->getUsername();
?>