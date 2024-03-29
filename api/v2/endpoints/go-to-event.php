<?php
// +------------------------------------------------------------------------+
// | @author Monjur Munna
// | @author_url 1: https://imean.xyz
// | @author_url 2: https://worldum.com
// | @author_email: imeansocial@gmail.com
// +------------------------------------------------------------------------+
// | imean - Social Network Website
// | Copyright (c) 2018 imean. All rights reserved.
// +------------------------------------------------------------------------+
$response_data = array(
    'api_status' => 400,
);
if (empty($_POST['event_id'])) {
    $error_code    = 3;
    $error_message = 'event_id (POST) is missing';
}
if (empty($error_code)) {
    $event_id   = Wo_Secure($_POST['event_id']);
    $event_data = Wo_EventData($event_id);
    if (empty($event_data)) {
        $error_code    = 6;
        $error_message = 'event not found';
    } else {
    	$go_message = 'invalid';
        if (Wo_EventGoingExists($event_id) === true) {
            if (Wo_UnsetEventGoingUsers($event_id)) {
                $go_message = 'not-going';
            }
        } else {
            if (Wo_AddEventGoingUsers($event_id)) {
                $go_message = 'going';
            }
        }
        $response_data = array(
		    'api_status' => 200,
		    'go_status' => $go_message
		);
    }
}