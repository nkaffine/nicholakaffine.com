<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 1:51 AM
     */
    class Experience {
        private $title;
        private $titleLink;
        private $location;
        private $date;
        private $jobtitle;
        private $accomplishments;

        public function __construct($title, $location, $date, $jobtitle, $accomplishments, $titleLink) {
            if ($title === null || $date === null || $jobtitle === null) {
                throw new InvalidArgumentException("Only title link can be null");
            }
            $this->title = $title;
            $this->location = $location;
            $this->date = $date;
            $this->jobtitle = $jobtitle;
            $this->titleLink = $titleLink;
            if ($accomplishments === null) {
                $this->accomplishments = array();
            } else if (is_array($accomplishments)) {
                $this->accomplishments = $accomplishments;
            } else {
                $this->accomplishments = array();
                array_push($this->accomplishments, $accomplishments);
            }
        }

        public function generateHTML() {
            $html = "<div class=\"col-lg-12 no-pad\"><h3 class=\"col-lg-6 experience no-pad\">";
            if ($this->titleLink !== null) {
                $html .= "<a class=\"headerlink\" href=\"{$this->titleLink}\" target=\"_blank\">{$this->title}</a>";
            } else {
                $html .= $this->title;
            }
            $html .= " <span class=\"jobinfo\">{$this->location}</span></h3><p class=\"experienceDate text-right col-lg-6 no-pad jobinfo\">{$this->date}</p><p class=\"col-lg-12 no-pad jobtitle\">{$this->jobtitle}</p><ul class=\"list-group col-lg-12\">";
            foreach ($this->accomplishments as $accomplishment) {
                $html .= "<li class=\"list-group-item\">{$accomplishment}</li>";
            }
            $html .= "</uL></div>";
            return $html;
        }
    }