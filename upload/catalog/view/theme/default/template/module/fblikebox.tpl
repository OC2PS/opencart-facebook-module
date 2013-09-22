<?php if ($position == 'content_top'  or $position == 'content_bottom') { ?>
  <iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $fblikeboxcode; ?>&amp;width=<?php echo $fblikeboxconwid; ?>&amp;height=<?php echo $fblikeboxconhei; ?>&amp;colorscheme=light&amp;connections=<?php echo $fblikeboxconcon; ?>&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $fblikeboxconwid; ?>px; height:<?php echo $fblikeboxconhei; ?>px;" allowTransparency="true"></iframe>
<?php } else { ?>
  <iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $fblikeboxcode; ?>&amp;width=<?php echo $fblikeboxcolwid; ?>&amp;height=<?php echo $fblikeboxcolhei; ?>&amp;colorscheme=light&amp;connections=<?php echo $fblikeboxcolcon; ?>&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $fblikeboxcolwid; ?>px; height:<?php echo $fblikeboxcolhei; ?>px;" allowTransparency="true"></iframe>
<?php } ?>

