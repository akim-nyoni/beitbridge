<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head();?>

</head>

<body>
  <body>
    <header class="header-area">
      <div class="navbar-area navbar-area-bg">
        <div class="mobile-responsive-nav">
          <div class="container">
            <div class="mobile-responsive-menu">
              <div class="logo">
                <a href="<?php echo site_url('/') ?>">
                  <img src="<?php bloginfo('template_directory');?>/images/favicon.png" alt="logo">
                </a>
              </div>

              <div class="others-options-for-mobile-devices">
                <ul>
                  <li><a href="<?php echo site_url('/online-services/submit-your-proof-of-payment')?>" class="default-btn">Submit Your POP</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="desktop-nav">
          <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="<?php echo site_url('/') ?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="logo" width="200" height="300">
              </a>
              <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item"><a href="<?php echo site_url('/')?>" class="nav-link">Home</a></li>

                  <li class="nav-item"><a href="<?php echo site_url('/about-us')?>" class="nav-link">About Us</a></li>

                  <li class="nav-item">
                    <a href="<?php echo site_url('/online-services')?>" class="nav-link">Online Services</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a href="<?php echo site_url('/online-services/check-your-balance-online')?>" class="nav-link">Check Your Balance Online</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/online-services/pay-your-rates-online')?>" class="nav-link">Pay Your Rates Online</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/online-services/submit-your-proof-of-payment')?>" class="nav-link">Submit Your Proof Of Payment</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo site_url('/online-services')?>" class="nav-link">Business Opportunities</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a href="<?php echo site_url('/doing-business-in-beitbridge/business-registrations')?>" class="nav-link">Business Registrations</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/doing-business-in-beitbridge/economic-overview')?>" class="nav-link">Economic Overview</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/doing-business-in-beitbridge/special-economic-zone')?>" class="nav-link">Special Economic Zone</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo site_url('/online-services')?>" class="nav-link">Resources</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a href="<?php echo site_url('/resources/careers')?>" class="nav-link">Careers</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/resources/tenders')?>" class="nav-link">Tenders</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/resources/rfqs')?>" class="nav-link">RFQs</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/resources/events-calendar')?>" class="nav-link">Events Calendar</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/resources/news-and-notices')?>" class="nav-link">News And Notices</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('/resources/frequently-asked-questions')?>" class="nav-link">Frequently Asked Questions</a></li>
                    </ul>
                  </li>

                  <li class="nav-item"><a href="<?php echo site_url('/contact-us')?>" class="nav-link">Contact Us</a></li>
                </ul>
                
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>