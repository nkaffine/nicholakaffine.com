<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/navbar/INavbar.php");

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 12/17/17
     * Time: 8:07 PM
     */
    abstract class ANavbar implements INavbar {
        /**
         * @var INavbarItem[]
         */
        protected $left;
        /**
         * @var INavbarItem[]
         */
        protected $right;

        /**
         * Generates the html for the navbar.
         *
         * @return string the html formatted navbar.
         */
        public function generateNavbar() {
            $html =
                "<nav class=\"navbar navbar-inverse navbar-fixed-top\"><div class=\"container-fluid\"><div class=\"navbar-header\">";
            $html .= "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>" .
                "<span class='icon-bar'></span>" .
                "<span class='icon-bar'></span>" .
                "<span class='icon-bar'></span>" .
                "</button>";
            $html .= $this->getHeader();
            $html .= "</div><div class='collapse navbar-collapse' id='myNavbar'><ul class=\"nav navbar-nav\">";
            $html .= $this->getLeftList();
            $html .= "</ul><ul class=\"nav navbar-nav navbar-right\">";
            $html .= $this->getRightList();
            $html .= "</ul></div></div></nav>";
            return $html;
        }

        /**
         * Gets the navbar header for the navbar.
         *
         * @return string the header for the navbar.
         */
        protected function getHeader() {
            return "<a class=\"navbar-brand\" href=\"/\">Nicholas Kaffine</a>";
        }

        /**
         * Gets the list of pages for the header.
         *
         * @return string the list of pages for the navbar.
         */
        protected function getLeftList() {
            $html = "";
            foreach ($this->left as &$page) {
                $html .= $page->generateHtml();
            }
            return $html;
        }

        /**
         * Gets the list of right elements for the header.
         *
         * @return string the list of right elements for the navbar.
         */
        protected function getRightList() {
            if ($this->right === null) {
                return "";
            } else {
                $html = "";
                foreach ($this->right as $right) {
                    $html .= $right->generateHtml();
                }
                return $html;
            }
        }

        /**
         * Adds a page list item to the right side of the navbar.
         *
         * @param $name string the name of the page.
         * @param $pageListItem INavbarItem the list item.
         */
        public function addToRightList($name, $pageListItem) {
            if ($this->right[$name] !== null) {
                throw new InvalidArgumentException("Item with that name already exists");
            }
            $this->right[$name] = $pageListItem;
        }

        /**
         * Adds a page list item to the left side of the navbar.
         *
         * @param $name string the name of the page.
         * @param $pageListItem INavbarItem the list item.
         */
        public function addToLeftList($name, $pageListItem) {
            if ($this->left[$name] !== null) {
                throw new InvalidArgumentException("Item with that name already exists");
            }
            $this->left[$name] = $pageListItem;
        }
    }