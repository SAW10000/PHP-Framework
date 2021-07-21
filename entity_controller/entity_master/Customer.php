<?php
namespace entity_master;
    class Customer{
   
        private $username;
        private $email_id;
        private $password;
        private $created_at;
        private $modified_at;
        private $is_active;
    
        
        public function getUsername()
        {
                return $this->username;
        }

        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        public function getEmailId()
        {
                return $this->email_id;
        }

        public function setEmailId($email_id)
        {
                $this->email_id = $email_id;

                return $this;
        }

        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        public function getCreatedAt()
        {
                return $this->created_at;
        }

        public function setCreatedAt($created_at)
        {
                $this->created_at = $created_at;

                return $this;
        }

        public function getModifiedAt()
        {
                return $this->modified_at;
        }

        public function setModifiedAt($modified_at)
        {
                $this->modified_at = $modified_at;

                return $this;
        }

        public function getIsActive()
        {
                return $this->is_active;
        }

        public function setIsActive($is_active)
        {
                $this->is_active = $is_active;

                return $this;
        }
    }