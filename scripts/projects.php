<?php
$query = "SELECT * FROM projects";
$projects = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($projects);

for ($i=1; $i <= $numRecords; $i++)
{
    $row = mysqli_fetch_array($projects, MYSQLI_ASSOC);
    $title = $row['title'];
    $description = $row['description'];
    $imageFilePath = $row['image_file_path'];

    echo "<div class=\"col-xl-4 project-item\">";
    echo "<h4 class=\"experience-title\">$title</h4>";
    echo "<div>";
    echo "<img class=\"images project-image\" src=\"$imageFilePath\" />";
    echo "<p class=\"project-description\">$description</p>";
    echo "</div>";
    echo "</div>";
}
?>