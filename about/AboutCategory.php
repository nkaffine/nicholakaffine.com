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

        /**
         * AboutCategory constructor.
         *
         * @param $title string the title of the about category.
         * @param ...$subcategories string[] the subcategories of the about category.
         */
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

        /**
         * Generates the formatted html for this about category on the page.
         *
         * @return string the formatted html for this about category.
         */
        public function generateHTML() {
            $html = "<h2>{$this->title}</h2>";
            foreach ($this->subcategories as $subcategory) {
                $html .= $subcategory->generateHTML();
            }
            return $html;
        }
    }