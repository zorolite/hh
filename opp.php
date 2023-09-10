<?php
// Check the referer (origin) of the request
$referer = $_SERVER['HTTP_REFERER'];

// Verify that the referer matches your allowed domain
if ($referer === "https://amusedgruesomeprogramminglanguages.legendmemes.repl.co/") {
    // Get the "cid" parameter from the query string
    $cid = isset($_GET['cid']) ? $_GET['cid'] : '';

    if (!empty($cid)) {
        // Construct the remote URL with the "cid" parameter
        $remoteUrl = "https://newsinfo.club/test.php?cid=$cid";

        // Make an HTTP request to the remote URL
        $response = file_get_contents($remoteUrl);

        if ($response !== false) {
            // You can set the appropriate Content-Type header based on the content type of the response
            header('Content-Type: application/json'); // Assuming it's JSON

            // Output the response to the browser
            echo $response;
        } else {
            header('HTTP/1.1 500 Internal Server Error');
            echo 'Failed to fetch the remote content.';
        }
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo 'Missing "cid" parameter in the URL.';
    }
} else {
    header('HTTP/1.1 403 Forbidden');
    echo 'Access denied. You are not authorized to access this resource.';
}
?>
