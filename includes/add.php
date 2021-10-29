<?php
include_once "config.php";
include_once "functions.php";

if (isset($_POST['link']) && !empty($_POST['link']) && !empty($_POST['user_id'])){
  if (add_link($_POST['user_id'],$_POST['link'])) {
    $_SESSION['success'] = "Ссылка успешно создана";
  } else {
    $_SESSION['error'] = "Ссылка безуспешно создана";
  }
}

header('Location: /profile.php');
die;