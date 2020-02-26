<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example1</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>
  <div>
    <?=service('validation')->listErrors()?>
	<form action="<?=base_url() . '/try'?>" method="POST">
	  <label>testInput:</label><input type="text" name="testInput" />
	  <input type="submit" value="submit" />
	  <input type="hidden" name="<?=service('security')->getCSRFTokenName()?>" value="<?=service('security')->getCSRFHash()?>"/>
	</form>
  </div>
</body>
</html>
