
<h1>Collect Images from /media</h1>
<?php 

if ($handle = opendir('media')) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<img src='media/" . $entry . "'><br/>";
        }
    }
}

echo "<br/>";
echo "<br/>";

echo "<hr />";
echo "<center><img src=\"smile.jpg\"></center>";
echo "<center><img src=\"images.jpeg\"></center>";
echo "<center><img src=\"dubblesicon.jpg\"></center>";
echo "<h1>"; 
echo "testen";
echo "</h1>";
echo "bla";
?>
