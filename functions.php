<?php
include "config.php";

// function getQuestion($level,$user_id) {
//     global $connection;
//     $level = intval($level);
//     $level = ceil($level / 3);
//     $question_query =   "SELECT DISTINCT `q`.`id` FROM `statistics` as `s` LEFT JOIN `questions` as `q` ON (`q`.`id` = `s`.`question_id`) WHERE `s`.`user_id` = $user_id";
//     $question_result = mysqli_query($connection, $question_query);
//     $id_result = [];

//     while($res = mysqli_fetch_assoc($question_result)){
//         $id_result[] = $res['id'];
//     }
//     if(count($id_result)>0){
//         $array = implode(",",$id_result);
//         $query = "SELECT `q`.`id`,`q`.`category`,`q`.`question`,`a`.`answer1`,`a`.`answer2`,`a`.`answer3`,`a`.`answer4`,`a`.`right_answer`
//         FROM `questions` as `q`
//         LEFT JOIN `answers` as `a` ON (`a`.`question_id` = `q`.`id`)
//         WHERE `q`.`id` NOT IN  ($array) AND `q`.`hard_level`=$level ORDER BY RAND() LIMIT 1";
//     }else{
//         $query = "SELECT `q`.`id`,`q`.`category`,`q`.`question`,`a`.`answer1`,`a`.`answer2`,`a`.`answer3`,`a`.`answer4`,`a`.`right_answer`
//         FROM `questions` as `q`
//         LEFT JOIN `answers` as `a` ON (`a`.`question_id` = `q`.`id`) WHERE `q`.`hard_level`=$level
//         ORDER BY RAND() LIMIT 1";
//     }
//     $result = mysqli_query($connection, $query);

//     if (!$result) {
//         die("Error: ".mysqli_error($connection));
//     }
//     $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

//     if(count($row) == 0){
//         $query = "SELECT `q`.`id`,`q`.`category`,`q`.`question`,`a`.`answer1`,`a`.`answer2`,`a`.`answer3`,`a`.`answer4`,`a`.`right_answer`
//         FROM `questions` as `q`
//         LEFT JOIN `answers` as `a` ON (`a`.`question_id` = `q`.`id`) WHERE `q`.`hard_level`=$level
//         ORDER BY RAND() LIMIT 1";
//         $result = mysqli_query($connection,$query);
//         $row = mysqli_fetch_all($result, MYSQLI_ASSOC);  
//         return json_encode($row);
//     }
//     return json_encode($row);
// }


// function setAnswer($user,$level, $question_id, $answer_id, $status, $game_played){
//     $user = intval($user);

//     $level = intval($level);
//     $question_id = intval($question_id);
//     $answer_id = intval($answer_id);
//     $game_played = intval($game_played);

//     global $connection;
//     $sql = "INSERT INTO `statistics`(`user_id`,`question_id`,`answer_id`,`status`,`levels_played`,`games_played`)
//      VALUES
//      ($user,$question_id,$answer_id,'$status',$level,$game_played)
//      ";
//     $result = mysqli_query($connection, $sql);

//     if (!$result) {
//     die("Error: " . mysqli_error($connection));
//     }else{
//         $status = array();
//         $status['status'] = true;
//         $status['msg'] = 'inserted';
//         return json_encode($status); 
//     }
// }

?>
