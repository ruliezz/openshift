
<?php 

if ($handle = opendir('media')) {
    echo "Directory handle: $handle\n";
   

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<img src='" . $entry . "'><br/>";
        }
    }
}



echo "<hr />";
echo "<center><img src=\"smile.jpg\"></center>";
echo "<center><img src=\"images.jpeg\"></center>";
echo "<center><img src=\"dubblesicon.jpg\"></center>";
echo "<h1>"; 
echo "testen";
echo "</h1>";
?>
