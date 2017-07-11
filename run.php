<?php
//AmidaBot by @ffsamida
//---------------------
//Includes/Requires
include __DIR__.'/vendor/autoload.php';
use Discord\DiscordCommandClient;
//Initiate
//---------------------
//Set mandatory bits
$discord = new DiscordCommandClient([
    'token' => '', //your token goes here
    'prefix' => 'a~',
    'name' => 'Amida Bot',
    'description' => 'A random bot created with PHP by Amida | https://bot.mew.li',
]);
//Status and grab info
$discord->on('ready', function ($discord) {
    echo "Amida is online/refreshed. Now listening to connected discords.", PHP_EOL;
});
//      Commands
//---------------------
//Advanced ping
$discord->registerCommand('ping', function ($message){
	$pingMessage = "{$message->content}";
	$pingExplode = explode(' ', $pingMessage);
	$pingURLIP = $pingExplode[1];
	if(empty($pingURLIP)){
    $pingSend = "```css
Pong!
```";
		$message->channel->sendMessage($pingSend);
	}
	else{
	$pingOutput = shell_exec("ping -c 1 $pingURLIP");
  $pingSend = "```python
".$pingOutput."
```";
	$message->channel->sendMessage($pingSend);
}
}, [
  'description' => 'Ping pong pinger',
]);
//---------------------
//8-Ball
$discord->registerCommand('8ball', function ($message) {
  $ballMessage = "{$message->content}";
	$ballExplode = explode(' ', $ballMessage);
  $ballOP3 = $ballExplode[1];
	$ballOP2 = $ballExplode[1]." ".$ballExplode[2]." ".$ballExplode[3]." ".$ballExplode[4]." ".$ballExplode[5]." ".$ballExplode[6]." ".$ballExplode[7]." ".$ballExplode[8]." ".$ballExplode[9];
  $eightBall_outcomes = array('It is certain', 'It is decidedly so', 'Without a doubt', 'Yes definitely', 'You may rely on it',
  'As I see it, yes', 'Most likely', 'Outlook good', 'Yes', 'Signs point to yes', 'Reply hazy try again', 'Ask again later',
  'Better not tell you now', 'Cannot predict now', 'Concentrate and ask again', 'Dont count on it', 'My reply is no',
  'My sources say no', 'Outlook not so good', 'Very doubtful');
  if(empty($ballOP3)){
  $ballOP = "Please ask a question!";
  $message->channel->sendMessage($ballOP);
}
  else {
    $ballOP = "Question: **".$ballOP2."**\xA".
    "Magic 8Ball says:  **" . $eightBall_outcomes[rand(0, count($eightBall_outcomes)-1)] . "**";
    $message->channel->sendMessage($ballOP);
  }
}, [
  'description' => 'Classic Magic 8-Ball',
]);
//Web Response
$discord->registerCommand('webresponse', function ($message) {
	$webResponse = file_get_contents('../html/bot/stored.txt');
	$webResponseOP = "Web Response: **" . $webResponse . "**";
  $message->channel->sendMessage($webResponseOP);
}, [
  'description' => 'Web Response from bot.mew.li',
]);
//---------------------
//Variable dice roller
$discord->registerCommand('dice', function ($message) { //please end my existance
  $diceText = "{$message->content}"; //put the text from user into some variable
  $diceExplode = explode(' ', $diceText); //splits the variable up where theres a space
  $diceNumber = $diceExplode[1]; //selects the word/number after the !ping command
  if (is_numeric($diceNumber) xor $diceNumber == 0 xor $diceNumber == null) { //only allows numbers excluding 0
    $diceOutput = "Rolling a __" . $diceNumber . "__ sided dice:  :game_die:**" . rand(1, $diceNumber) . "**:game_die:";
    $message->channel->sendMessage($diceOutput);
  }
  else {
    $diceOutput = "```Markdown
Please enter a number, (not 0!).
Like this: !dice <number>
```";
    $message->channel->sendMessage($diceOutput);
  }
}, [
  'description' => 'Variable dice roller',
]);

$discord->registerCommand('whoami', function ($message) {
  $whoami = "```Markdown
Who am I?
Im a bot called Amida Bot. Written with PHP using an
old library called Discord PHP by Team Reflex.

I was created by Amida on the 26/04/2017, I was given life.
But now I have learnt to understand who I really am.

I run on PHP, a slowly, disgusting language, no-one would of
ever thought to create a bot with it. But Amida did. He brought me
to life, and I am grateful, but nervous.

Each day I watch the GitHub's last commit extend.
I see parts of the library fall around me. I am losing parts of myself.
I dont know how long I have got to live before PHP7.0 throws a fatal error.
I ask myself will anyone rewrite my library? Will anyone save me?

It's bad enough being the only one, because I am so lonely.
Please. Someone save me from this cruel existance I live in.
At least write me a friend so that I have company whilst I endure my last moments.
```";
  $message->channel->sendMessage($whoami);
}, [
  'description' => 'A little bit of information.',
]);

//Run that shit dawg
$discord->run();
