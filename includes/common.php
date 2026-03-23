<?php

  // Common includes for main PHP pages (controllers)

  // Define constants that point to directories within the project to help when including files
  // ROOT_DIR will point to the "northwind-website/" folder
  // TEMPLATES_DIR will point to the "northwind-website/templates/" folder
  // INCLUDES_DIR will point to the "northwind-website/includes/" folder
  define("ROOT_DIR", __DIR__ . "/../");
  define("INCLUDES_DIR", ROOT_DIR . "includes/");
  define("TEMPLATES_DIR", ROOT_DIR . "templates/");

  // Example includes:
  // include_once ROOT_DIR . "services.php";
  // include_once TEMPLATES_DIR . "_servicesPage.html.php";
  // include_once INCLUDES_DIR . "formHelpers.php";


