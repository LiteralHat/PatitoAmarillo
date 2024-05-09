<?php
    $referrer = $_SERVER['HTTP_REFERER'];
    $parsed_url = parse_url($referrer);
    
    if (isset($parsed_url['query'])) {

        parse_str($parsed_url['query'], $query_params);

        unset($query_params['page']);

        $new_query_string = http_build_query($query_params);

        $cleaned_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];
        if (!empty($new_query_string)) {
            $cleaned_url .= '?' . $new_query_string;
        }
        if (isset($parsed_url['fragment'])) {
            $cleaned_url .= '#' . $parsed_url['fragment'];
        }
    
        header("Location: " .  $cleaned_url . "?page=1#top");
    } else {
        header("Location: " .  $_SERVER['HTTP_REFERER'] . "?page=1#top");
    }
    exit();


    ?>