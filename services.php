<?php

  // Common includes for main PHP pages (controllers)
  require_once "includes/common.php";

  // Config
  $title = "Services";

  // Get list of services (e.g. from a database)
  $services = [
    // "name" => "description",
    "Synergistic Cargo Alignment" => "Our consultants ensure every crate, pallet, and shipping manifest is fully aligned with your strategic vision. If your vision is unclear, we'll schedule three workshops and a PowerPoint to discover it together.",
    "Executive Produce Optimisation" => "Premium advisory service where our analysts determine the most boardroom-appropriate fruit-to-vegetable ratios for corporate gifting, leadership retreats, and suspiciously expensive wellness programmes.",
    "Global Supply Chain Enlightenment" => "A transformative logistics experience where Northwind specialists map your supply chain, add arrows to a diagram, and declare the entire system 'leveraged for global synergy.'",
    "Artisanal Spreadsheet Engineering" => "Hand-crafted Excel solutions designed by spreadsheet sommeliers. Expect pivot tables aged to perfection and macros that only one employee understands.",
    "Strategic Refrigeration Consulting" => "Because chilled goods deserve warm business strategy. We analyse your cold storage infrastructure and deliver a 47-page report confirming that keeping fish cold is, in fact, beneficial.",
    "Enterprise-Grade Fish Logistics" => "An end-to-end seafood delivery framework optimised for scalability, traceability, and occasional confused looks from the finance department.",
    "Legacy Crate Modernisation Programme" => "We help organisations migrate from traditional wooden crates to next-generation 'crate-as-a-service' platforms with quarterly upgrade cycles.",
    "Holistic Import-Export Mindfulness" => "A cross-functional service aligning procurement, logistics, and inner peace. Includes guided breathing exercises while reviewing customs documentation.",
    "Premium Meeting Facilitation as a Service" => "Northwind professionals attend your meetings, nod thoughtfully, and say things like 'let's take that offline' to ensure maximum corporate authenticity."
  ];

  // Start output buffering (trap the output instead of displaying it)
  ob_start();

  // Include the page-specific template/content
  include_once "templates/_servicesPage.html.php";

  // Stop output buffering (store output in $content variable)
  $content = ob_get_clean();

  // Include the main layout template (with custom $content)
  include_once "templates/_layout.html.php";