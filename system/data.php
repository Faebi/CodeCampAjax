<?php

function get_db_connection()
{
  $db = mysqli_connect('127.0.0.1', 'root', '', 'music')
    or die('Fehler beim Verbinden mit dem Datenbank-Server.');
  mysqli_set_charset($db, "utf8");
  return $db;
}

function get_result($sql)
{
  $db = get_db_connection();
  //echo $sql;
  $result = mysqli_query($db, $sql);
  mysqli_close($db);
  return $result;
}

function get_id_result($sql)
{
  $db = get_db_connection();
  // echo $sql;
  mysqli_query($db, $sql);
  $result = mysqli_insert_id($db);
  mysqli_close($db);
  return $result;
}

function get_genre()
{
  $sql = "SELECT DISTINCT(genre) FROM tracks";
  return get_result($sql);
}

 ?>
