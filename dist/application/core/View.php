<?php

class View{

    function generate($content_view, $template_view, $data = null){
        include_once dirname(__DIR__, 2).'/'.$template_view;
    }
}