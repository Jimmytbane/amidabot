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
    <div class="container">
      <div class="row">
      <div class="six columns" style="margin-top: 5%">
        <p><h1>Amida Bot</h1></p>
        <p><h3>Amida's lil <i>PHP</i> boi</h3></p>
	<p><a href="https://discordapp.com/oauth2/authorize?&client_id=306835087138357248&scope=bot&permissions=76806"><button class="button-primary">Get my Discord BOT</button></a></p>
        <p>
		The only PHP to exist and to have working commands! &#128521;
		A feat that no-one has done before. 
		Amida Bot shall stay online, but will no longer be in development. 
		Unless DiscordPHP gets their library rewritten.</p>
		<p><img src="img/kek.png"></p>
      </div>
	  <div class="six columns" style="margin-top: 5%">
	<p><center><iframe src="https://discordapp.com/widget?id=200279911439532032&theme=light" width="350" height="500" allowtransparency="true" frameborder="0"></iframe></center></p>
      </div>
   </div>
   <hr>
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
