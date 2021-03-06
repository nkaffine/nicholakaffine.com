<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 2:02 AM
     */
    class WorkExperience {
        /**
         * WorkExperience constructor.
         *
         * @param $experiences Experience[] the experiences for the work experience of the page.
         */
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

        /**
         * Generates the html for the work experience section of the page.
         *
         * @return string the formatted html for the work experiences section of the page.
         */
        public function generateHTML() {
            $html =
                "<div class=\"col-xs-12 gap\" id=\"work\"></div><div class=\"col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0 panel\"><h1>Work Experience</h1>";
            foreach ($this->experiences as $experience) {
                $html .= $experience->generateHTML();
            }
            return $html . "</div>";
        }
    }