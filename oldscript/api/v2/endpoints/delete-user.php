<?php
// +------------------------------------------------------------------------+
// | @author Monjur Munna (Monjur Munna)
// | @author_url 1: https://imean.xyz   
// +------------------------------------------------------------------------+
// | iMean - Social Networking Platform
// | Copyright (c) 2019 iMean. All rights reserved.
// +------------------------------------------------------------------------+
$response_data = array(
    'api_status' => 400
);
if (empty($_POST['password'])) {
    $error_code    = 4;
    $error_message = 'password (POST) is missing';
}
if (empty($error_code)) {
    $delete     = Wo_DeleteUser($wo['user']['user_id']);
    if ($delete) {
        $response_data = array(
            'api_status' => 200,
            'message' => "User successfully deleted."
        );
    }
}