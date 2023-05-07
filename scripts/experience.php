<?php
$query = "SELECT * FROM experience ORDER BY experience_id DESC";
$experience = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($experience);

for ($i=1; $i <= $numRecords; $i++)
{
    $row = mysqli_fetch_array($experience, MYSQLI_ASSOC);
    $company = $row['company'];
    $title = $row['title'];
    $time = $row['time'];
    $description = $row['description'];
    $websiteUrl = $row['website_url'];
    $imageFilePath = $row['image_file_path'];

    echo "<div class=\"col-sm-4\">";
    echo "<a href=\"$websiteUrl\" target=\"_blank\">";
    echo "<img class=\"experience-logo\" src=\"$imageFilePath\" />";
    echo "</a>";
    echo "<h4 class=\"experience-title\">$title</h4>";
    echo "<h5>$time</h5>";
    echo "<p>$description</p>";
    echo "</div>";
}
?>