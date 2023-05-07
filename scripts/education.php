<?php
$query = "SELECT * FROM education";
$education = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($education);

for ($i=1; $i <= $numRecords; $i++)
{
    $row = mysqli_fetch_array($education, MYSQLI_ASSOC);
    $name = $row['name'];
    $years = $row['years'];
    $award = $row['award'];
    $imageFilePath = $row['image_file_path'];

    echo "<div class=\"col-sm-4\">";
    echo "<img class=\"education-image\" src=\"$imageFilePath\" />";
    echo "<h3>$name</h3>";
    echo "<h5>$year</h5>";
    echo "<h4>$award</h4>";
    echo "</div>";
}
?>