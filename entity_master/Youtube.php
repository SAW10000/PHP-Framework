<?php
namespace entity_master;
    class Youtube{
        private $profile_id;
        private $video_link;
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

        public function getVideoLink()
        {
                return $this->video_link;
        }

        public function setVideoLink($video_link)
        {
                $this->video_link = $video_link;

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