<?php
    
    // Bring in rendering functions
    require_once 'views.php';


    // Display the page content
    $demo = '<p>' . render_button('Other Demos', '..') . '</p>';

    $skills   = render_card("Skills", render_skills());
    $projects = render_card("Projects", render_projects());

    $content = "$demo $skills";


    // Create main part of page content
    $settings = array(
        "site_title" => "UNC BACS 350",
        "page_title" => "Demo 27 - Component Templates", 
        "logo"       => "Bear.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
