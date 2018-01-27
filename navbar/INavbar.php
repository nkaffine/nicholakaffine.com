<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 12/17/17
     * Time: 8:06 PM
     */
    interface INavbar {
        /**
         * Generates the html for the navbar.
         *
         * @return string the html formatted navbar.
         */
        public function generateNavbar();

        /**
         * Adds a page list item to the right side of the navbar.
         *
         * @param $name string the name of the page.
         * @param $pageListItem INavbarItem the list item.
         */
        public function addToRightList($name, $pageListItem);

        /**
         * Adds a page list item to the left side of the navbar.
         *
         * @param $name string the name of the page.
         * @param $pageListItem INavbarItem the list item.
         */
        public function addToLeftList($name, $pageListItem);
    }