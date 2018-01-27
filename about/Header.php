<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/27/18
     * Time: 12:49 AM
     */
    class Header {
        private $paragraphs;
        private $image;

        public function __construct($image, ...$paragraphs) {
            if($image === null) {
                throw new InvalidArgumentException("Image cannot be null");
            }
            if (is_array($paragraphs[0])) {
                $this->paragraphs = $paragraphs[0];
            } else {
                $this->paragraphs = $paragraphs;
            }
            $this->image = $image;
        }

        public function generateHTML() {
            $html = "<img id=\"mainimg\" src=\"/images/slider/IMG_0509.JPG\" class=\"img-rounded col-lg-offset-3 visible-lg col-lg-3 col-lg-push-3 no-pad\">";
            $html .= "<div class=\"panel col-lg-3 col-lg-pull-3 box visible-lg\" id=\"description\" style=\"overflow: scroll;\"><h1 class=\"title\">Nicholas Kaffine</h1>";
            $paragraphs = "";
            foreach($this->paragraphs as $paragraph) {
                $paragraphs .= "<p class=\"aboutme\">{$paragraph}</p>";
            }
            $html .= $paragraphs;
            $html .= "</div>";
            $html .= "<img id='mainimgmobile' src=\"/images/slider/IMG_0509.JPG\" class=\"img-rounded hidden-lg col-xs-12 col-xs-offset-0 no-pad\"><div class=\"panel hidden-lg box col-xs-12 \"><h1 class=\"title\">Nicholas Kaffine</h1>";
            $html .= $paragraphs;
            return $html . "</div>";
        }
    }