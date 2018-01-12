<!DOCTYPE html>

<html lang="en">

    <head>

<?php
    if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0")) 
        include '/includes/error2';
    if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0")) 
        include '/includes/error2';

    echo "语言："
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
    if (preg_match("/zh-c/i", $lang)) 
    echo "简体中文"; 
    else if (preg_match("/zh/i", $lang)) 
    echo "繁體中文"; 
    else if (preg_match("/en/i", $lang)) 
    echo "English"; 
    else if (preg_match("/fr/i", $lang)) 
    echo "French"; 
    else if (preg_match("/de/i", $lang)) 
    echo "German"; 
    else if (preg_match("/jp/i", $lang)) 
    echo "Japanese"; 
    else if (preg_match("/ko/i", $lang)) 
    echo "Korean"; 
    else if (preg_match("/es/i", $lang)) 
    echo "Spanish"; 
    else if (preg_match("/sv/i", $lang)) 
    echo "Swedish"; 
    else echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; 
    
 
    
?>

    </head>

    <body>
    <div>Welcome</div>
    </body>

</html>
