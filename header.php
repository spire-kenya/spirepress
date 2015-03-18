<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Spirepress
 * @since Spirepress 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600,700,800|Open+Sans:100,200,300,400,600,700,800|Raleway:100,200,300,400,600,700,800|Roboto:100,200,300,400,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <?php image_tag("logo.png"); ?>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="main-menu">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Career Accelerator Programme (NGO)</a></li>
          <li><a href="#">The Spire Team</a></li>
          <li><a href="#">Jobs At Spire</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="splash splash-home">
    <div class="container">
      <h2>LATEST: New programme focused on careers in NGO launching in April</h2>
      <button type="button" class="btn btn-primary btn-lg">Find Out More</button>
    </div>
  </div>

  <div class="companies">
    <?php image_tag("companies.jpg"); ?>
  </div>

  <div class="what-is-spire">
    <div class="container">
      <h1>What is Spire?</h1>
      <p>Spire is a Kenyan company that provides short professional courses (3-6 weeks) in Nairobi.</p>

      <h4>A LEARNING PARTNER.</h4>
      <p>Our world-class programmes are designed to give you the right training at the right time. You will receive constant feedback to help you at every step.</p>
      
      <h4>A WINNING APPROACH.</h4>
      <p>Our classrooms use practical training with personal attention. The curriculum focuses on developing the skills you need with the mindset to make them work for you.</p>

      <h4>A TEAM WITH EXPERIENCE.</h4>
      <p>Our passionate team of coaches and curriculum designers draw on experience at companies like McKinsey and decades of experience in Kenya. Most of all, they are driven by a sense of fun and a desire to see you succeed!</p>
    </div>
  </div>
