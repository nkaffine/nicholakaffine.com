<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 9:39 PM
     */
    class AboutCategory {
        private $title;
        private $subcategories;

        public function __construct($title, ...$subcategories) {
            if($title === null || $subcategories === null) {
                throw new InvalidArgumentException("Title and subcategories must not be null");
            }
            $this->title = $title;
            if(is_array($subcategories[0])) {
                $this->subcategories = $subcategories[0];
            } else {
                $this->subcategories = $subcategories;
            }
        }

        public function generateHTML() {
            $html = "<h2>{$this->title}</h2>";
            foreach ($this->subcategories as $subcategory) {
                $html .= $subcategory->generateHTML();
            }
            return $html;
        }
    }