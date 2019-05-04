<?php
    require_once(__DIR__ . "/ANavbar.php");

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 1:01 AM
     */
    class MainNav extends ANavbar {
        public function __construct() {
            $this->left = array();
            $this->right = array();
        }

        /**
         * Sets the page with the given name to active.
         *
         * @param $pagename string the name of the active page.
         */
        public function setActive($pagename) {
            if ($this->left[$pagename] === null) {
                throw new InvalidArgumentException("No page with that name exists");
            }
            $this->left[$pagename]->select();
        }
    }