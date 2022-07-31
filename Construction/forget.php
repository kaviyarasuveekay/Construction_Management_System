<?php include('email.php') ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form method="post" action="email.php" id="register_form">
  	<h1>Retrive Password</h1>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<button type="submit" name="register" id="reg_btn">Submit</button>
  	</div>
  </form>
</body>
</html>