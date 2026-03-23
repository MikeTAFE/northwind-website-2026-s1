<h2>Register</h2>

<p>Fill out the registration form to receive great things.</p>

<?php include "_errorSummary.html.php" ?>

<form action="register.php" method="post" novalidate>
  <fieldset>
    <legend>Personal information</legend>

    <div class="form-row">
      <label for="firstName">First name*:</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>

    <div class="form-row">
      <label for="lastName">Last name*:</label>
      <input type="text" id="lastName" name="lastName" required>
      <?php if (isset($errors["lastName"])): ?>
        <span class="error-message"><?= $errors["lastName"] ?></span>
      <?php endif ?>
    </div>

    <div class="form-row">
      <label for="email">Email*:</label>
      <input type="email" id="email" name="email" placeholder="name@email.com" required>
    </div>

    <div class="form-row">
      <label for="password1">Password*:</label>
      <input type="password" id="password1" name="password1" required>
    </div>

    <div class="form-row">
      <label for="password2">Re-type password*:</label>
      <input type="password" id="password2" name="password2" required>
    </div>

    <div class="form-row">
      <label for="course">Course*:</label>
      <select id="course" name="course">
        <option value="c4-web">Cert 4 Web Design</option>
        <option value="c4-prog">Cert 4 Programming</option>
        <option value="dip-web">Diploma Web Development</option>
        <option value="dip-prog">Diploma Advanced Programming</option>
      </select>
    </div>

    <div class="form-row">
      <p>Enrolment mode*:</p>
      <label>
        <input type="radio" name="enrolmentMode" value="ft">
        Full-time
      </label>
      <label>
        <input type="radio" name="enrolmentMode" value="pt">
        Part-time
      </label>
    </div>

    <div class="form-row">
      <label>
        <input type="checkbox" name="newsletter" value="monkeyslovemebecauseismelllikebananas">
        Sign up to our newsletter?!
      </label>
    </div>

    <div class="form-row">
      <label for="comments">Any comments?:</label>
      <textarea id="comments" name="comments" cols="30" rows="4"></textarea>
    </div>

    <div class="form-row">
      <label>
        <input type="checkbox" name="terms" value="i-agree-to-all-things" required>
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
