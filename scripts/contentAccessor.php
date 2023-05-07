<?php
function loadProjects() {

}

function loadEducation() {
    echo "$db";
    echo "<p>TEST 3</p>";
    $query = "SELECT * FROM education";
    $education = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($education);
    echo
    "<div class=\"col-sm-4\">";
    for ($i=1; $i <= $numRecords; $i++)
    {
        $row = mysqli_fetch_array($categories, MYSQLI_ASSOC);
        $name = $row['name'];
        echo "<h3>$name</h3>";
    }
    echo
    "</div>";
    mysqli_close($db);
}

function loadExperience() {
    
}
?>