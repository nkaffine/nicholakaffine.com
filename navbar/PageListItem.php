<?php
    require_once(__DIR__ . "/INavbarItem.php");

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 12/17/17
     * Time: 8:21 PM
     */
    class PageListItem implements INavbarItem {
        private $title;
        private $link;
        private $isSelected;

        /**
         * PageListItem constructor.
         *
         * @param $title string the title of the page.
         * @param $link string the link to the page.
         */
        public function __construct($title, $link) {
            if ($title == null || $link == null) {
                throw new InvalidArgumentException("Title and Link cannot be null");
            }
            $this->title = $title;
            $this->link = $link;
            $this->isSelected = false;
        }

        /**
         * Gives the navbar item the active class.
         *
         * @return void
         */
        public function select() {
            $this->isSelected = true;
        }

        /**
         * Generates the html for the navbar item.
         *
         * @return string the formatted html.
         */
        public function generateHtml() {
            $html = "<li class='toPageLink";
            if ($this->isSelected) {
                $html .= " active'";
            }
            return $html . "'><a href=\"{$this->link}\">{$this->title}</a></li>";
        }
    }