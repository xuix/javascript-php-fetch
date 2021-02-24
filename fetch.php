<?php
  // Save this to json.php ------------------------------------------------------------------------
  $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

  if ($contentType === "application/json") {
    $content = trim(file_get_contents("php://input"));

    $decoded = json_decode($content, true);

    $decoded['bar'] = "Hello World AGAIN!";    // Add some data to be returned.

    $reply = json_encode($decoded);
  }  

  header("Content-Type: application/json; charset=UTF-8");
  echo $reply;
  // ----------------------------------------------------------------------------------------------
?>