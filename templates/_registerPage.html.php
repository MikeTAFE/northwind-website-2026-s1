<?php

  // References/includes
  // require_once __DIR__ . "/../includes/formHelpers.php";
  // require_once ROOT_DIR . "includes/formHelpers.php";
  require_once INCLUDES_DIR . "formHelpers.php";

?>

<h2>Register</h2>

<p>Fill out the registration form to receive great things.</p>

<?php include "_errorSummary.html.php" ?>

<form action="register.php" method="post" novalidate>
  <fieldset>
    <legend>Personal information</legend>

    <div class="form-row">
      <label for="firstName">First name*:</label>
      <input type="text" id="firstName" name="firstName" required <?= fieldValue("firstName") ?>>
    </div>

    <div class="form-row">
      <label for="lastName">Last name*:</label>
      <input type="text" id="lastName" name="lastName" required <?= fieldValue("lastName") ?>>
      <?php if (isset($errors["lastName"])): ?>
        <span class="error-message"><?= $errors["lastName"] ?></span>
      <?php endif ?>
    </div>

    <div class="form-row">
      <label for="email">Email*:</label>
      <input type="email" id="email" name="email" placeholder="name@email.com" required <?= fieldValue("email") ?>>
    </div>

    <div class="form-row">
      <label for="password1">Password*:</label>
      <input type="password" id="password1" name="password1" required <?= fieldValue("password1") ?>>
    </div>

    <div class="form-row">
      <label for="password2">Re-type password*:</label>
      <input type="password" id="password2" name="password2" required <?= fieldValue("password2") ?>>
    </div>

    <div class="form-row">
      <label for="course">Course*:</label>
      <select id="course" name="course">
        <option value="c4-web" <?= setSelected("course", "c4-web") ?>>Cert 4 Web Design</option>
        <option value="c4-prog" <?= setSelected("course", "c4-prog") ?>>Cert 4 Programming</option>
        <option value="dip-web" <?= setSelected("course", "dip-web") ?>>Diploma Web Development</option>
        <option value="dip-prog" <?= setSelected("course", "dip-prog") ?>>Diploma Advanced Programming</option>
      </select>
    </div>

    <div class="form-row">
      <p>Enrolment mode*:</p>
      <label>
        <input type="radio" name="enrolmentMode" value="ft" <?= setChecked("enrolmentMode", "ft") ?>>
        Full-time
      </label>
      <label>
        <input type="radio" name="enrolmentMode" value="pt" <?= setChecked("enrolmentMode", "pt") ?>>
        Part-time
      </label>
    </div>

    <div class="form-row">
      <label>
        <input type="checkbox" name="newsletter" value="yes" <?= setChecked("newsletter", "yes") ?>>
        Sign up to our newsletter?!
      </label>
    </div>

    <div class="form-row">
      <label for="comments">Any comments?:</label>
      <textarea id="comments" name="comments" cols="30" rows="4"><?= getEncodedValue("comments") ?></textarea>
    </div>

    <div class="form-row">
      <label>
        <input type="checkbox" name="terms" value="i-agree-to-all-things" required <?= setChecked("terms", "i-agree-to-all-things") ?>>
        Agree to terms &amp; conditions*
      </label>
    </div>

    <div class="form-row">
      <!-- <button type="submit" name="action" value="register">Register</button> -->
      <button type="submit" name="submitRegister">Register</button>
      <!-- if (isset($_POST['submitRegister'])) -->
    </div>
  </fieldset>
</form>
