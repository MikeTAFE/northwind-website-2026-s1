<h2>Our services</h2>

<p>Here is some information about some of our services that are on offer.</p>

<?php if (empty($services)): ?>

  <p>Sorry, no services available.</p>

<?php else: ?>

  <dl class="service-list">
  <?php foreach($services as $serviceName => $serviceDesc): ?>
    <dt><?= htmlspecialchars($serviceName) ?></dt>
    <dd><?= htmlspecialchars($serviceDesc) ?></dd>
  <?php endforeach ?>
  </dl>

<?php endif ?>