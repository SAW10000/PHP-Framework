<?php
namespace entity_master;
    class Profile{
        private $customer_id;
        private $first_name;
        private $middle_name;
        private $last_name;
        private $call_number;
        private $wa_number;
        private $personal_email;
        private $address;
        private $about_us;
        private $created_at;
        private $modified_at;
        private $modified_by;
        private $is_active;

        public function getCustomerId()
        {
                return $this->customer_id;
        }

        public function setCustomerId($customer_id)
        {
                $this->customer_id = $customer_id;

                return $this;
        }

        public function getFirstName()
        {
                return $this->first_name;
        }

        public function setFirstName($first_name)
        {
                $this->first_name = $first_name;

                return $this;
        }

        public function getMiddleName()
        {
                return $this->middle_name;
        }

        public function setMiddleName($middle_name)
        {
                $this->middle_name = $middle_name;

                return $this;
        }

        public function getLastName()
        {
                return $this->last_name;
        }

        public function setLastName($last_name)
        {
                $this->last_name = $last_name;

                return $this;
        }

        public function getCallNumber()
        {
                return $this->call_number;
        }

        public function setCallNumber($call_number)
        {
                $this->call_number = $call_number;

                return $this;
        }

        public function getWaNumber()
        {
                return $this->wa_number;
        }

        public function setWaNumber($wa_number)
        {
                $this->wa_number = $wa_number;

                return $this;
        }

        public function getPersonalEmail()
        {
                return $this->personal_email;
        }

        public function setPersonalEmail($personal_email)
        {
                $this->personal_email = $personal_email;

                return $this;
        }

        public function getAddress()
        {
                return $this->address;
        }

        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        public function getAboutUs()
        {
                return $this->about_us;
        }

        public function setAboutUs($about_us)
        {
                $this->about_us = $about_us;

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

        public function getModifiedBy()
        {
                return $this->modified_by;
        }

        public function setModifiedBy($modified_by)
        {
                $this->modified_by = $modified_by;

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