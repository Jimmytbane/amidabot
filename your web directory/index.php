<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mew.li | Bot</title>
    <meta name="description" content="Welcome to Mew.li's (Amida's) Discord BOT">
    <meta name="author" content="Amida">
    <link rel='shortcut icon' type='image/x-icon' href='img/ico.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
  </head>
  <body>
       <div class="row">
<div class="six columns">
  <h2>Command List</h2>
  <p><code>a~</code> is the bot's prefix
  <br><br><code>a~help</code> Lists all commands
  <br><code>a~ping [url]</code> Ping pong response or ping url
  <br><code>a~8ball</code> Classic 8-Ball
  <br><code>a~webresponse</code> Returns webservers input
  <br><code>a~dice [number]</code> Rolls random number between set number
  <br><code>a~whoami</code> Lists details about the bot
  </p>
</div>
      <div class="six columns" id="webresponse">
		<h2>a~webresponse</h2>
		<?php
			$webResponse = file_get_contents('stored.txt');
	echo "Current Web Response: <b>" . $webResponse . "</b>"; 
		?>
				<form action="discordbot.php" method="post">
			Input text: <input required class="u-full-width" name="webresponse" type="text" />
			<br>
			<input type='submit' />
		</form>
      </div>
	  </div>
   <hr>
        <div class="row">
      <div class="twelve columns">
	<div class="footer"><a href="https://mew.li">Mew.li Home</a> | <a href="https://twitter.com/ffsamida">@ffsamida</a></div>
      </div>
   </div>
  </body>
</html>
