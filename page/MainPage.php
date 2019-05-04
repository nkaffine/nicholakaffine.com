<?php
    require_once(__DIR__ . "/APage.php");

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 12:56 AM
     */
    class MainPage extends APage {

        /**
         * MainPage constructor.
         *
         * @param $title string the title of the page
         * @param $navbar INavbar the navbar for the page
         */
        public function __construct($title, $navbar) {
            parent::__construct($title, $navbar);
        }

        protected function initializeHtmlBody() {
            //Does nothing for now
        }
    }