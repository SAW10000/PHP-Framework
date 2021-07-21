<?php
namespace entity_master;
    class Payment{
        private $profile_id;
        private $paytm;
        private $google_pay;
        private $account_holder_name;
        private $account_number;
        private $ifsc_code;
        private $bank_name;
        private $gst_number;
        private $created_at;
        private $modified_at;
        private $modified_by;
        private $is_active;

        public function getProfileId()
        {
                return $this->profile_id;
        }

        public function setProfileId($profile_id)
        {
                $this->profile_id = $profile_id;

                return $this;
        }

        public function getPaytm()
        {
                return $this->paytm;
        }

        public function setPaytm($paytm)
        {
                $this->paytm = $paytm;

                return $this;
        }

        public function getGooglePay()
        {
                return $this->google_pay;
        }

        public function setGooglePay($google_pay)
        {
                $this->google_pay = $google_pay;

                return $this;
        }

        public function getAccountHolderName()
        {
                return $this->account_holder_name;
        }

        public function setAccountHolderName($account_holder_name)
        {
                $this->account_holder_name = $account_holder_name;

                return $this;
        }

        public function getAccountNumber()
        {
                return $this->account_number;
        }

        public function setAccountNumber($account_number)
        {
                $this->account_number = $account_number;

                return $this;
        }

        public function getIfscCode()
        {
                return $this->ifsc_code;
        }

        public function setIfscCode($ifsc_code)
        {
                $this->ifsc_code = $ifsc_code;

                return $this;
        }

        public function getBankName()
        {
                return $this->bank_name;
        }

        public function setBankName($bank_name)
        {
                $this->bank_name = $bank_name;

                return $this;
        }

        public function getGstNumber()
        {
                return $this->gst_number;
        }

        public function setGstNumber($gst_number)
        {
                $this->gst_number = $gst_number;

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