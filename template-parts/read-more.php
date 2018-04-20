<!-- read more button for homepage intro section -->
<a href="<?php
if (in_category('Tweet'))
{
	echo $twitterURL;
}
else
{
	echo the_permalink();
}
?>" class="button read-more">Read More</a>
