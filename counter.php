<?php
$file = "viewcount.txt";  // Store the view count in a file

// Check if the file exists, and if not, create it with an initial count of 0
if (file_exists($file)) {
    $count = file_get_contents($file);
} else {
    $count = 0;
    file_put_contents($file, $count);
}

// Increment the count and save it back to the file
$count++;
file_put_contents($file, $count);

echo "Website Views: " . $count;
?>
