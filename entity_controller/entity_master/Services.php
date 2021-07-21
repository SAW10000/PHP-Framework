<?php
namespace entity_master;
    class Services{
        private $profile_id;
        private $service_name;
        private $service_image;
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

        public function getServiceName()
        {
                return $this->service_name;
        }

        public function setServiceName($service_name)
        {
                $this->service_name = $service_name;

                return $this;
        }

        public function getServiceImage()
        {
                return $this->service_image;
        }

        public function setServiceImage($service_image)
        {
                $this->service_image = $service_image;

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