<?php
	function getAllTemplates() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.dudamobile.com/api/sites/multiscreen/templates');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //execute cURL call
        $output = curl_exec($ch);

        //check result for correct HTTP code
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            curl_close($ch);
            return $output;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Error getting templates details: '. $output . '<br/>');
        }
    }
?>