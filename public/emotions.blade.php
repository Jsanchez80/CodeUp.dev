<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/emojimaster/jquery.emojiarea.css">
		<link rel="stylesheet" href="/emojimaster/example/stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="/emojimaster/jquery.emojiarea.js"></script>
		<script src="/emojimaster/packs/basic/emojis.js"></script>
		<link rel="stylesheet" href="/emojimaster/example/fontello/css/fontello.css">
	</head>
	<body>
		<h1>jquery.emojiarea.js Example</h1>
		
		
		
		<div class="example">
			<h2>WYSIWYG</h2>
			<form><textarea rows="5" class="emojis-wysiwyg">Hello :neckbeard:</textarea></form>	
		</div>
		
		<script>
		$('.emojis-plain').emojiarea({wysiwyg: false});
		
		var $wysiwyg = $('.emojis-wysiwyg').emojiarea({wysiwyg: true});
		var $wysiwyg_value = $('#emojis-wysiwyg-value');
		
		$wysiwyg.on('change', function() {
			$wysiwyg_value.text($(this).val());
		});
		$wysiwyg.trigger('change');
		</script>
		<script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous">
		</script>
	</body>
</html>