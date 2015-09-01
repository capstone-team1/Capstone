<?php //include_once("main_header.php"); ?>
<!-- header ends after opening body tag -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
<!-- JS file getting images from database -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="main_images.js"></script>

    <title>WTH YOU PORTFOLIO!</title>

</head>

<body>

    <a href="#" id="Images">Images</a>

<br><br><br>

<div id="thumbnails">

<?php require_once("/CMS Testing/database.php");

    $res = mysql_query("SELECT image_id, image, image_upload_date
                           FROM tattoos_by_amanda.images
                           ORDER BY image_upload_date");
//    $result = mysql_query($query) or die(mysql_error());

echo "<table>";
        while ($row = mysql_fetch_array($res)) {
            echo "<tr>";
                echo "<td>"; ?>  <img src="<?php echo $row['image'];?>" height='100' width='100'>  <?php echo "</td>";
                echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
        }

echo "</table>";
?>

</div>



</body>



</html>



<!-- footer starts before closing body tag -->
<?php //include_once("main_footer.php"); ?>
