<?php
require("subroutines.php");
set_up_navigation_tabs("contact");
set_up_lhs();
?>
<b>Forums</b><br>
- <A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16974";				?>"> open		</A><br>
- <A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16975";				?>"> help		</A><br>
- <A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16976";				?>"> developer		</A><br>
<br>
<b>Other</b><br>
- <A HREF="<?php print "$sf_url/survey/survey.php?group_id=$gri_group_id&amp;survey_id=10761";	?>"> survey		</a><br>
- <A HREF="<?php print "$sf_url/tracker/?group_id=$gri_group_id&amp;atid=355511";		?>"> feature request	</a><br>
- <A HREF="<?php print "$sf_url/tracker/?atid=30$gri_group_id&amp;group_id=$gri_group_id&amp;func=browse"; ?>">Patch submissions</A><br>
<?php set_up_rhs(); ?>


<h1>Discussion Forums</h1>

<p>
Most Gri users should subscribe to the 
<A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16974"; ?>">
open</A> forum
and the
<A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16975";?>">
help</A>
forum.  If you're interested in where Gri is going (as an observer or as a helper),
you should visit the
<A HREF="<?php print "$sf_url/forum/forum.php?forum_id=16976";?>">
developer</A> forum from time to time.
</p>

<h1>Survey</h1>

<p>
Please take the Gri 
<A HREF="<?php print "$sf_url/survey/survey.php?group_id=$gri_group_id&amp;survey_id=10761";?>">
survey</a> so the author will have a better idea of how Gri should evolve.
</p>

<h1>Requests</h1>

<p>
You may request a new Gri feature 
<A HREF="<?php print "$sf_url/tracker/?group_id=$gri_group_id&amp;atid=355511";?>">
here</A>.  (Assign it to 'dankelley' if it relates to gri itself, or to
'psg' if it relates to the Emacs mode.)
If it is really important, you may also want to email
the <a href="developers.php">developers</a>, in case we are not monitoring
the site.  You may request 
Gri
<A HREF="<?php print "$sf_url/tracker/?group_id=$gri_group_id&amp;atid=20$gri_group_id";?>">
support</a>,
although it is better to report a bug, or to post on the help forum.
</p>

<p>
If you'd like to contribute to Gri, and have modified the source code in a useful way,
please submit a <A HREF="<?php print "$sf_url/tracker/?atid=30$gri_group_id&amp;group_id=$gri_group_id&amp;func=browse";?>">patch</A>
so that other users can benefit from your work and generosity.
</p>

<?php
footer();
?>
