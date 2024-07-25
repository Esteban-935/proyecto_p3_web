<?php session_start(); 
  if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
  }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://www.zarla.com/images/zarla-e-1x1-2400x2400-20211115-bbtryd3dpx898dk6yfgb.png?crop=1:1,smart&width=250&dpr=2" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/menu.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="stylesheet" href="../public/librerias/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../public/librerias/datatables/datatables.css">
    
    <title>Sistema De Eventos </title>
  </head>
  <body style="background-color: #f8f9fa;">