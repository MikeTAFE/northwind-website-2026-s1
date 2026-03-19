<?php

  // Config
  $title = "Register";

  // Start output buffering (trap the output instead of displaying it)
  ob_start();

  // Check if form has been submitted
  if (isset($_POST['submitRegister'])) {

    // Form has been submitted - process data

    // Collection of all errors for this submission (empty by default)
    $errors = [];

    // TESTING - manually add errors
    // $errors["firstName"] = "First name is required";
    // $errors["lastName"] = "Last name is required";

    // Get form data ($_POST superglobal array)
    $firstName = $_POST["firstName"] ?? "";
    $lastName = $_POST["lastName"] ?? "";
    $email = $_POST["email"] ?? "";
    $password1 = $_POST["password1"] ?? "";
    $password2 = $_POST["password2"] ?? "";
    $course = $_POST["course"] ?? "";
    $enrolmentMode = $_POST["enrolmentMode"] ?? "";
    $comments = $_POST["comments"] ?? "";
    $newsletterChecked = isset($_POST["newsletter"]);
    $termsChecked = isset($_POST["terms"]);

    // TODO: Normalise/sanitise data
    $firstName = trim($firstName);

    // TODO: Validate fields...
    if ($firstName === "") {
      $errors["firstName"] = "First name is required";
    } else if (strlen($firstName) < 2) {
      $errors["firstName"] = "First name must be 2+ characters";
    }

    // Check for errors (invalid data)
    if (count($errors) > 0) {

      // Invalid - re-display form with errors
      include_once "templates/_registerPage.html.php";

    } else {

      // Valid - display confirmation (save to DB, send email, etc...)
      include_once "templates/_registerConfirmation.html.php";

    }

  } else {
    
    // Just display the form
    include_once "templates/_registerPage.html.php";

  }

  // Stop output buffering (store output in $content variable)
  $content = ob_get_clean();

  // Include the main layout template (with custom $content)
  include_once "templates/_layout.html.php";