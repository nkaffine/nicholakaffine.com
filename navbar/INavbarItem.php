<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 12/27/17
     * Time: 10:33 PM
     */
    interface INavbarItem {
        /**
         * Generates the html for the navbar item.
         *
         * @return string the formatted html.
         */
        public function generateHtml();

        /**
         * Gives the navbar item the active class.
         *
         * @return void
         */
        public function select();
    }