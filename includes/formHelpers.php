<?php

  //TODO: Add functions to handle textarea, select, checkbox, radio

  /**
   * Set an HTML-safe `value` attribute of a form field from $_POST data.
   *
   * @param string $fieldName The name of the field to display.
   * @return string The HTML entity-encoded output for the form field's `value` attribute.
   */
  function fieldValue(string $fieldName): string
  {
    // Get field value from POST data
    $fieldValue = $_POST[$fieldName] ?? "";

    // Check if no value (return empty string)
    if ($fieldValue === "") return "";

    // Safely encode the value for HTML output
    $fieldValue = htmlspecialchars($fieldValue);

    // Generate HTML output
    return " value='$fieldValue'";
  }