<?php

    /**
     * Created by PhpStorm.
     * User: Nick
     * Date: 1/26/18
     * Time: 9:39 PM
     */
    class AboutSubCategory {
        private $title;
        private $body;
        private $titleLink;

        public function __construct($title, $body, $titleLink) {
            if($title === null || $body === null) {
                throw new InvalidArgumentException("Title and body must not be null");
            }
            $this->title = $title;
            $this->body = $body;
            $this->titleLink = $titleLink;
        }

        public function generateHTML() {
            $html = "<h3>";
            if($this->titleLink !== null) {
                $html .= "<a class=\"headerlink\" href=\"{$this->titleLink}\" target=\"_blank\">{$this->title}</a>";
            } else {
                $html .= $this->title;
            }
            return $html . "</h3><p class=\"aboutme\">{$this->body}</p>";
        }
    }