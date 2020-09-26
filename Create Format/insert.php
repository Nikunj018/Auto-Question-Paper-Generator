<?php

//insert.php

$connect = new PDO( "mysql:host=localhost;dbname=format", "root", "" );

$query = "
INSERT INTO format_1 (type,note,chepter,difficulty,marks) VALUES (:format_type, :note, :chepter, :difficulty, :marks) ";

for ( $count = 0; $count < count( $_POST[ 'hidden_format_type' ] ); $count++ ) {
	$data = array(
		':format_type' => $_POST[ 'hidden_format_type' ][ $count ],
		':note' => $_POST[ 'hidden_note' ][ $count ],
		':chepter' => $_POST[ 'hidden_chepter' ][ $count ],
		':difficulty' => $_POST[ 'hidden_difficulty' ][ $count ],
		':marks' => $_POST[ 'hidden_marks' ][ $count ]
	);
	$statement = $connect->prepare( $query );
	$statement->execute( $data );
}

?>