<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf8" />
	<title>N.A.Y.'s blog</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="content">
		<div class="row">
			<div class="span2"></div>
			<div class="span8">
			<?php
			foreach($outdata as $val) {
?>
				<div class="row">
					<div class="span8">
						<div><?php echo date("Y.m.d H:i", $val[0]) ?></div>
						<div><?php echo $val[1] ?></div>
					</div>
				</div>
				<div class="row">
					<div class="span6 comments">
					</div>
				</div>
<?php
			}
			?>
			</div>
			<div class="span2">
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
					<div>
						<input type="text" name="login" value="" placeholder="Enter your login..." />
						<input type="password" name="password" value="" placeholder="Enter your password..." />
					</div>
					<div>
						<textarea style="min-height: 300px;" class="span12" name="text"></textarea>
					</div>
					<div>
						<input type="submit" class="btn btn-primary" value="Post" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
