<?php
echo $language['misc']['language'];

foreach($languages as $language_name) {
	echo ' <a href="index.php?language=' . $language_name . '">' . $language_name . '</a> &nbsp;&nbsp; ';
}

?>

<br />

<a href="terms-of-service"><?php echo $language['misc']['terms-of-service']?></a> - <a href="privacy-policy"><?php echo $language['misc']['privacy-policy']?></a> - <a href="contact"><?php echo $language['misc']['contact']?></a>

<br />

<?php echo 'Copyright &copy; ' . date("Y") . ' ' . $settings->title . '. All rights reserved. Powered by <a href="https://github.com/Flajakay/minecraftserverlistphp/" target="_blank">Flajakay</a>. Chinese Translation by <a href="https://github.com/SpookyKipper/zhtw-PHPMinecraftServerList" target="_blank">Spooky Kipper</a> and <a href="https://github.com/ASAllenShih/MinecraftServerListPHP-zh_TW" target="_blank">ASAllenShih</a>.<br> Disclaimer: We are not affiliated with Minecraft or Mojang AB.'; ?>
