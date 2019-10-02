<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "My Projects";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            Projects in BACS 350.
        </p>
        
        <ul>
            <li>
                <a href="/">Project #1 - Setup Web Hosting - WordPress Blog</a>
            </li>
            <li>
                <a href="..">Project #2 - Page Template - Home Page</a>
            </li>
            <li>
                <a href="../superhero">Project #3 - Render Page - Superhero Gallery</a>
            </li>
            <li>
                <a href="../planner">Project #4 - Markdown Docs - Project Planner</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
