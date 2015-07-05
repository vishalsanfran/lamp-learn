<?php
class Page_Data {
    public $title = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";

    public function addCSS($href) {
    	$this->css .= "<link href='$href' rel='stylesheet' />";
    }
}