<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "auto_question_paper");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$subject = $_POST["subject"];
$marks= $_POST["marks"];
$difficulty = $_POST["difficulty"];
// Attempt select query execution
$sql = "SELECT * FROM question_info WHERE  marks='$marks' AND difficulty='$difficulty' ORDER BY RAND() LIMIT 0,2";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>question</th>";
                echo "<th>marks</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['question'] . "</td>";
                echo "<td>" . $row['marks'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
        header('Refresh:2; url=Create_questionpaper.html');
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
