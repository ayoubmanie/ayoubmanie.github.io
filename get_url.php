<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="spacetoon_style.css">
    </head>
    
<body>
    <span>
        
  
    </span>
</body>
    
    <script>
        var text = `<?php
    
/*
    $url_1 = 'https://spacetoon.com/broadcast?&day=1&zone=+1';
    $content = file_get_contents($url_1);
    
    // create the DOMDocument object, and load HTML from a string
    $dochtml = new DOMDocument();
    libxml_use_internal_errors(true);
    $dochtml->loadHTML($content);
    libxml_clear_errors();
    
    // get the element with id="sp-watch"
    $elm = $dochtml->getElementById('sp-watch')
                    ->getElementsByTagName('tbody')
                    ->item(0)
                    ->getElementsByTagName('tr');
    // elm : all shows
    
    $now = time();
    $current = TRUE;
    
    for ($i = 0; $elm; $i++) {
        $date_elm = $elm->item($i);
        if ($date_elm == null) break;
        $date_elmnt = $date_elm->getElementsByTagName('td')
                             ->item(1);
        $date = $date_elmnt->nodeValue;
        
        $year  = substr($date, 0, 4);
        $month = substr($date, 5, 2);
        $day   = substr($date, 8, 2);
        $time  = substr($date, 11, 5);
        
        if( $now <= strtotime($date) ){
            
            // current show
            if ($current){
                $date_current = $elm->item(($i-1))
                                   ->getElementsByTagName('td')
                                   ->item(1);
                echo DOMinnerHTML($date_current).' : ';
                
                $show_name    = $elm->item(($i-1))
                                   ->getElementsByTagName('td')
                                   ->item(0);
                echo DOMinnerHTML($show_name)."\n";

            }
            
            // coming shows
            $show_name = $date_elm->getElementsByTagName('td')
                                  ->item(0);   
            echo DOMinnerHTML($date_elmnt).' : ';
            echo DOMinnerHTML($show_name)."\n";
        }
    }
*/
    $url_2 = 'https://spacetoon.com/broadcast?&day=1&zone=+1';
    $content = file_get_contents($url_2);
    
    // create the DOMDocument object, and load HTML from a string
    $dochtml = new DOMDocument();
    libxml_use_internal_errors(true);
    $dochtml->loadHTML($content);
    libxml_clear_errors();
    
    // get the element with id="sp-watch"
    $elm = $dochtml->getElementById('sp-watch')
                    ->getElementsByTagName('tbody')
                    ->item(0)
                    ->getElementsByTagName('tr');
    // elm : all shows

    $now = time();
    $current = TRUE;
        
    $text = "";
    
    for ($i = 0; $elm; $i++) {
        $date_elm = $elm->item($i);
        if ($date_elm == null) break;
        $date_elmnt = $date_elm->getElementsByTagName('td')
                             ->item(1);
        $date = $date_elmnt->nodeValue;
        
        $year  = substr($date, 0, 4);
        $month = substr($date, 5, 2);
        $day   = substr($date, 8, 2);
        $time  = substr($date, 11, 5);
        
        if( $now <= strtotime($date) ){
            
            // current show
            if ($current){
                
                $date_current = $elm->item(($i-1))
                                   ->getElementsByTagName('td')
                                   ->item(1);
                    $text .= '<div class="show now">
                <span class="show_time ">'.$time.'</span>
                <span class="show_name">';
                
                $show_name    = $elm->item(($i-1))
                                   ->getElementsByTagName('td')
                                   ->item(0);
                $text .= $show_name->nodeValue.'</span>
            </div>';
                
                $current = FALSE;
            }
            
            // coming shows
            $show_name = $date_elm->getElementsByTagName('td')
                                  ->item(0);
            $text .= '<div class="show">
                <span class="show_time">';
            $text .= $time.'</span>
                <span class="show_name">';
            $text .= $show_name->nodeValue.'</span>
            </div>';

            
        }
    }
    echo $text;
   ?>`;
        
        var div = document.createElement("div");
        div.setAttribute("id", "container");
        div.innerHTML=text;
        var span_element= document.getElementsByTagName("body")[0];
        span_element.appendChild(div);
        
    </script>
    
</html>
