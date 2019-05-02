<?php

function show_members($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo "<br><h3> Members Table<h3> <br>";

	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Player ID".'</th>'.'<th>'."Team ID";
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
				echo "<td>" . $row["player_ID"]. "</td>";
        echo "<td>" . $row["team_ID"]. "</td>";

		echo '</tr>';
    }

	echo '</tbody>';
	echo '</table>';

    // output data of each row


} else {
    echo "0 results";
}
//$conn->close();
}
?>
