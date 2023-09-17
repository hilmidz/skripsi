<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>SIAK biMBA</title>
</head>
<body>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      
    </ol>

  </nav>
  <h1><?php echo $greeting; ?>, <?=$this->session->userdata('nama_petugas')?> !</h1>
</div><!-- End Page Title -->
    
</body>
</html>