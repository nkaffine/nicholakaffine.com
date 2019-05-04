<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 9:39 PM
     */
    class AboutMe {
        private $categories;

        public function __construct(...$categories) {
            if ($categories === null) {
                throw new InvalidArgumentException("Categories cannot be null");
            }
            if (is_array($categories[0])) {
                $this->categories = $categories[0];
            } else {
                $this->categories = $categories;
            }
        }

        public function generateHTML() {
            $html = "<div class=\"col-xs-12 gap\" id=\"about\"></div><div class=\"col-lg-6 col-lg-offset-3 panel col-xs-12 col-xs-offset-0\"><h1>About Me</h1><div class=\"col-lg-12 no-pad\">";
            foreach ($this->categories as $category) {
                $html .= $category->generateHTML();
            }
            return $html . "</div>";
        }
    }