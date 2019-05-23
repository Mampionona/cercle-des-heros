<?php
$address = get_theme_mod('cdh_address');
$email = get_theme_mod('cdh_email');
$telephone = get_theme_mod('cdh_telephone');
?>
<?php if ($address || $email || $telephone): ?>
  <address>
    <?php if ($address): ?>
      <p><?php echo nl2br($address); ?></p>
    <?php endif; ?>
    <?php if ($email): ?>
      <p>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
      </p>
    <?php endif; ?>
    <?php if ($telephone): ?>
      <p>
        <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
      </p>
    <?php endif; ?>
  </address>
<?php endif; ?>
