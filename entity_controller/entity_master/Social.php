<?php
namespace entity_master;
    class Social{
        private $profile_id;
        private $youtube_link;
        private $facebook_link;
        private $linkedin_link;
        private $instagram_link;
        private $twitter_link;
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

        public function getYoutubeLink()
        {
                return $this->youtube_link;
        }

        public function setYoutubeLink($youtube_link)
        {
                $this->youtube_link = $youtube_link;

                return $this;
        }

        public function getFacebookLink()
        {
                return $this->facebook_link;
        }

        public function setFacebookLink($facebook_link)
        {
                $this->facebook_link = $facebook_link;

                return $this;
        }

        public function getLinkedinLink()
        {
                return $this->linkedin_link;
        }

        public function setLinkedinLink($linkedin_link)
        {
                $this->linkedin_link = $linkedin_link;

                return $this;
        }

        public function getInstagramLink()
        {
                return $this->instagram_link;
        }

        public function setInstagramLink($instagram_link)
        {
                $this->instagram_link = $instagram_link;

                return $this;
        }

        public function getTwitterLink()
        {
                return $this->twitter_link;
        }

        public function setTwitterLink($twitter_link)
        {
                $this->twitter_link = $twitter_link;

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