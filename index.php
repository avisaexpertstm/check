<?php
// Ultra simple test
echo "WORKING - " . date('Y-m-d H:i:s');

// Try to create file
$result = file_put_contents('test.txt', date('Y-m-d H:i:s') . " - GitHub called this page\n", FILE_APPEND);

if ($result) {
    echo " - FILE CREATED";
} else {
    echo " - FILE FAILED";
}
?>
