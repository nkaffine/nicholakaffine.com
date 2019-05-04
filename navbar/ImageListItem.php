<?php
    require_once(__DIR__ . "/INavbarItem.php");

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 1:12 AM
     */
    class ImageListItem implements INavbarItem {
        private $src;
        private $class;
        private $id;
        private $link;

        /**
         * ImageListItem constructor.
         *
         * @param $src string the path to the image.
         * @param $link string the link where the image should direct users.
         * @param $class string the html class for the image (if any).
         * @param $id string the html id for the image (if any).
         */
        public function __construct($src, $link, $class, $id) {
            if ($src === null) {
                throw new InvalidArgumentException("Image must have source");
            }
            $this->src = $src;
            $this->id = $id;
            $this->class = $class;
            $this->link = $link;
        }

        /**
         * Generates the html for the navbar item.
         *
         * @return string the formatted html.
         */
        public function generateHtml() {
            $html = "<li>";
            if ($this->link !== null) {
                $html .= "<a style='padding:0;' target='_blank' href='{$this->link}'>";
            }
            $html .= "<img ";
            if ($this->id !== null) {
                $html .= "id='{$this->id}' ";
            }
            if ($this->class !== null) {
                $html .= "class='{$this->class}' ";
            }
            $html .= "src='{$this->src}'>";
            if ($this->link !== null) {
                $html .= "</a>";
            }
            return $html;
        }

        /**
         * Gives the navbar item the active class.
         *
         * @return void
         */
        public function select() {
            //Does Nothing
        }
    }