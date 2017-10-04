<?php

  // $errors;
  $show_name = "";


  function getRequest($get) {
    global $show_name;
    global $names;
    $index = $get["name"];
    $show_name = $names[$index];
  }

  function postRequest($post) {
    global $show_name;
    global $names;
    $new_name = $post["name"];
    array_push($names, $new_name);
    $index = count($names) - 1;
    $show_name = $names[$index];
  }


  function redirecTo($url = "index.php", $status_code = false) {
    header("Location:$url", true, $status_code ? $status_code : 301);
    die();
  }

  function dump($value) {
    echo "<pre>";
    var_dump($value);
    echo "<br />";
    print_r($value);
    echo "</pre>";
  }
?>