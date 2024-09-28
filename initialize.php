<?php

    //3.1
    const PAGES = ['home', 'vars', 'strings', 'arrays', 'about'];

    //3.2
    $current_page = 0;
    if(array_key_exists('p', $_GET))
    {
        $current_page = $_GET['p'];
    }

    //3.3
    function getMenuHTML()
    {
        global $current_page;
        $html = "<ul>";
        for ($i=0; $i < count(PAGES); $i++) 
        { 
            if($current_page == $i)
            {
                $html.= "<li>".PAGES[$i]."</li>";
            }
            else
            {
                $html.= "<li><a href='./?p=$i'>".PAGES[$i]."</a></li>";
            }
        }
        $html.= "</ul>";

        return $html;
    }

    //3.4
    function getPageName()
    {
        global $current_page;
        return PAGES[$current_page];
    }

