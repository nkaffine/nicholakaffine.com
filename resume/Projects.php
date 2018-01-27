<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 2:02 AM
     */
    class Projects {
        private $experiences;

        public function __construct($experiences) {
            if ($experiences === null) {
                throw new InvalidArgumentException("Experiences cannot be null");
            }
            if (is_array($experiences)) {
                $this->experiences = $experiences;
            } else {
                $this->experiences = array();
                array_push($this->experiences, $experiences);
            }
        }

        public function generateHTML() {
            $html = "<div class=\"col-xs-12 gap\" id=\"projects\"></div><div class=\"col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0 panel\">
    <h1>Projects</h1>";
            foreach ($this->experiences as $experience) {
                $html .= $experience->generateHTML();
            }
            return $html . "</div>";
        }
    }