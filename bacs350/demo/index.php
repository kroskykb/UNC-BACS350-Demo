<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Mark's Demos";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350.
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="01">Demo #1 - PHP App Hosting</a>
            </li>
            <li>
                <a href="02">Demo #2 - Includes</a>
            </li>
            <li>
                <a href="03">Demo #3 - Header/Footer</a>
            </li>
            <li>
                <a href="04">Demo #4 - Page Template</a>
            </li>
            <li>
                <a href="05">Demo #5 - Render Page</a>
            </li>
            <li>
                <a href="06">Demo #6 - Setup Apache, MySQL, PHP</a>
            </li>
            <li>
                <a href="07">Demo #7 - Card View</a>
            </li>
            <li>
                <a href="08">Demo #8 - Reusable Page Template</a>
            </li>
            <li>
                <a href="09">Demo #9 - Display PHP Source Code</a>
            </li>
            <li>
                <a href="10">Demo #10 - Markdown</a>
            </li>
            <li>
                <a href="11">Demo #11 - Document Viewer</a>
            </li>
            <li>
                <a href="12">Demo #12 - Document Listing</a>
            </li>
            <li>
                <a href="13">Demo #13 - Document Selector</a>
            </li>
            <li>
                <a href="14">Demo #14 - Document Browser</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
