<?php

include_once "DB_connection.php";

/* WARNING: This script fetches the tournament info and compiles an extensive JSON object
            This object goes as follows:
            Tournament: Rounds: Matches: Teams.

            This is a long, awful looking system.

            TODO: Find someone to help with this.
*/

//TODO: This should be set via the Axios function, so a user can display tournament X.
$tournament_id = 0;


//Get all of our 'rounds' for this tournament
$result = pg_query($db_connection,"SELECT * FROM tournaments WHERE id = ". $tournament_id."");
$tournament_row = pg_fetch_assoc($result);
//Convert the PSQL string into a PHP array, seperated via ','.
$tournament_rounds_stripped_string = str_replace(["{","}"], "", $tournament_row['rounds']);
$tournament_rounds = explode(',', $tournament_rounds_stripped_string);

//Create the tournament object and add to it as PHP completes it's queries of PSQL.
$tournament_details = (object) [
    'tournament_name' => $tournament_row['tournament_name'],
    'tournament_rounds' => $tournament_rounds,
    'tournament_rounds_data' => []
];


//For each round, find the match info, and add it to an object
for ($x = 0; $x <= count($tournament_rounds) -1; $x++) {
    // For each round, do a DB call and get the matches inside that round
    $result = pg_query($db_connection,"SELECT * FROM matches WHERE id = ". (int)$tournament_rounds[$x] ."");
    $match_data = pg_fetch_assoc($result);

    //Create an object to hold all information about the matches in this round.
    $tournament_rounds_object = (object) [
      'round_id' => $match_data['id'],
      'round_name' => $match_data['name'],
      'round_teams' => $match_data['teams']
    ];

    $tournament_details->tournament_rounds_data[$x] = $tournament_rounds_object;

}


var_dump($tournament_details);


//Create and encode our JSON object
//$tournament_details = (object) [
//    'tournament_name' => $tournament_row['name'],
//    'tournament_rounds' => $tournament_row['rounds']
//];


//Send our compiled JSON back to the component that called it.
//echo json_encode($tournament_details);

?>
