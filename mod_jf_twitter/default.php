<?php
/* @author		JOOFORGE.com
 * @copyright	Copyright(C) 2010 Jooforge
 * @licence		GNU/GPL http://www.gnu.org/copyleft/gpl.html */
 
defined('_JEXEC') or die('Restricted access');

?>

<h3>Latest <span class="purple">Tweets</span></h3>

<div class="mod_twitter">
	<div class="tweets">
		<? foreach ($tweets as $i=>$tweet): ?>
		<div class="tw_tweet">
			<p class="tw_text"><?php echo $twitter->parseText($tweet->text); ?><br/>
			<span class="tw_date purple"><?php echo $twitter->timeSince($tweet->created_at); ?></span></p>
		</div>
		<? endforeach; ?>
	</div>
</div>