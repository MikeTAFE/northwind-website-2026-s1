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



  // Load Composer's autoloader (created by Composer, not us or Resend)
  require_once ROOT_DIR . 'vendor/autoload.php';

  // Include "secrets" that are not tracked by Git
  require_once INCLUDES_DIR . 'secrets.php';


  /**
   * Escape a value for safe usage in HTML. (Wrapper for htmlspecialchars().)
   *
   * @param string|integer $valueToEscape The value to escape.
   * @return string An HTML-encoded value.
   */
  function esc(string|int $valueToEscape): string
  {
    return htmlspecialchars($valueToEscape, ENT_QUOTES, "UTF-8");
  }