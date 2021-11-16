<?php

class HtmlString
{
    private $string;

    public function __construct($str)
    {
        $this->string = $str;
    }

    public function set_string($str)
    {
        $this->string = $str;
    }

    public function get_string()
    {
        return $this->string;
    }

    public function get_bold_string()
    {
        return '<strong>' . $this->string . '</strong>';
    }

    public function get_italic_string()
    {
        return '<i>' . $this->string . '</i>';
    }

    public function get_italicbold_string()
    {
        return '<strong>' . $this->get_italic_string() . '</strong>';
    }
}
