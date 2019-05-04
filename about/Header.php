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
            $html = "<a href='https://nkaffine.bandcamp.com/album/the-archives'><img id=\"mainimg\" src=\"images/TheArchivesCover.png\" class=\"img-rounded col-lg-offset-3 visible-lg col-lg-3 no-pad\"></a>";
            $playerLink = "https://bandcamp.com/EmbeddedPlayer/track=1837953795/size=large/bgcol=333333/linkcol=ffffff/minimal=true/transparent=true/";
            $otherLink = "http://nkaffine.bandcamp.com/track/december";
            $title = "December by Nick Kaffine";
//            $html = "<iframe id='mainimg' style='border: 0; width: 350px; height: 350px;' class='img-rounded col-lg-offset-3 visible-lg col-lg-3 no-pad'
//                src='{$playerLink}' seamless><a href='{$otherLink}'>{$title}</a></iframe>";
            $html .= "<div class=\"panel col-lg-3 box visible-lg\" id=\"description\" style=\"overflow: scroll;\"><h1 class=\"title\">Nicholas Kaffine</h1>";
            $paragraphs = "";
            foreach($this->paragraphs as $paragraph) {
                $paragraphs .= "<p class=\"aboutme\">{$paragraph}</p>";
            }
            $html .= $paragraphs;
            $html .= "</div>";
            $html .= "<a href='https://nkaffine.bandcamp.com/album/the-archives'><img id='mainimgmobile' src=\"images/TheArchivesCover.png\" class=\"img-rounded hidden-lg col-xs-12 col-xs-offset-0 no-pad\"><div class=\"panel hidden-lg box col-xs-12 \"><h1 class=\"title\">Nicholas Kaffine</h1></a>";
//            $html .= "<iframe id='mainimgmobile' style='border: 0; width: 100%; height: 350px;' class='img-rounded hidden-lg col-xs-12 col-xs-offset-0 no-pad'
//                src='{$playerLink}' seamless><a href='{$otherLink}'>{$title}</a></iframe>";
            $html .= $paragraphs;
            return $html . "</div>";
        }
    }