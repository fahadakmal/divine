<?php
// +------------------------------------------------------------------------+
// | @author Monjur Munna (Monjur Munna)
// | @author_url 1: https://imean.xyz   
// +------------------------------------------------------------------------+
// | iMean - Social Networking Platform
// | Copyright (c) 2019 iMean. All rights reserved.
// +------------------------------------------------------------------------+
$stories = array();

$options['offset'] = (!empty($_POST['offset']) && is_numeric($_POST['offset']) && $_POST['offset'] > 0 ? Wo_Secure($_POST['offset']) : 0);
$options['limit'] = (!empty($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0 && $_POST['limit'] <= 50 ? Wo_Secure($_POST['limit']) : 20);
$options['api'] = false;

$get_all_stories = Wo_GetFriendsStatusAPI($options);
$data_array = array();
foreach ($get_all_stories as $key => $one_story) {
    $user_data = $one_story['user_data'];
    foreach ($non_allowed as $key => $value) {
       unset($user_data[$value]);
    }
    $user_data['stories'] = array();
     $get_stories = Wo_GetStroies(array('user' => $one_story['user_id']));
	foreach ($get_stories as $key => $story) {
        foreach ($non_allowed as $key => $value) {
           unset($story['user_data'][$value]);
        }
        if (!empty($story['thumb']['filename'])) {
            $story['thumbnail'] = $story['thumb']['filename'];
            unset($story['thumb']);
        } else {
            $story['thumbnail'] = $story['user_data']['avatar'];
        }
        $story['time_text'] = Wo_Time_Elapsed_String($story['posted']);
        $story['view_count'] = $db->where('story_id',$story['id'])->where('user_id',$story['user_id'],'!=')->getValue(T_STORY_SEEN,'COUNT(*)');
        $user_data['stories'][] = $story;
    }
    $data_array[] = $user_data;
}

$response_data = array(
    'api_status' => 200,
    'stories' => $data_array
);