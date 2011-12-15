<?php
/**
/* Template Name: Maker Faire Home Page */
?>		
		<div id="content-main">
		
			<div class="newsies">
		
				<h2>News</h2>
			
					<?php function shorten($string, $length)
					{
					    // By default, an ellipsis will be appended to the end of the text.
					    $suffix = '&hellip;';
 
					    // Convert 'smart' punctuation to 'dumb' punctuation, strip the HTML tags,
					    // and convert all tabs and line-break characters to single spaces.
					    $short_desc = trim(str_replace(array("\r","\n", "\t"), ' ', strip_tags($string)));
 
					    // Cut the string to the requested length, and strip any extraneous spaces 
					    // from the beginning and end.
					    $desc = trim(substr($short_desc, 0, $length));
 
					    // Find out what the last displayed character is in the shortened string
					    $lastchar = substr($desc, -1, 1);
 
					    // If the last character is a period, an exclamation point, or a question 
					    // mark, clear out the appended text.
					    if ($lastchar == '.' || $lastchar == '!' || $lastchar == '?') $suffix='';
 
					    // Append the text.
					    $desc .= $suffix;
 
					    // Send the new description back to the page.
					    return $desc;
					}
?>
				<?php function js_dashboard_widget() {
				// Display whatever it is you want to show
				include_once(ABSPATH . WPINC . '/feed.php');
				$rss = fetch_feed('http://daily.makerfaire.com/rss.xml');
				$rss_items = $rss->get_items( 0, $rss->get_item_quantity(3) );
				if ( !$rss_items ) {
					echo 'no items';
				} else {
					//echo '<h4>Recent Posts</h4>';
					echo '<div class="news post">';
					foreach ( $rss_items as $item ) {
						echo '<h3><a class="rsswidget" href="' . $item->get_permalink() . '">' . $item->get_title() . '</a>';
						echo ' <span>' . $item->get_date(($date_format = '(j F Y, g:i a)')) . '</span>';
						echo '</h3>';
						echo '<p>' . shorten($item->get_description(), 140). '</p>';
						if ($author = $item->get_author())
							{
								echo '<cite>' .$author->get_name(). '</cite></li>';
							}
						}
			
					}
					echo '</div>';
					echo '<div class="clear"></div>';
				}
				
				?>
				


				
				<?php js_dashboard_widget(); ?>

					
					<div id="daily"><p>Get more news on things happening around Maker Faire at <a href="http://daily.makerfaire.com">daily.makerfaire.com</a></p></div>
				
				</div>

			<div class="youtube">

				<!--to be displayed on Friday from 5pm PT to 7pm PT 
					<h2><a href="http://makezine.com/live">Make: Live - Maker Faire Bay Area Preview</a></h2>
					
					<object width="480" height="296" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
					<param name="flashvars" value="cid=6783644&amp;autoplay=false"/>
					<param name="allowfullscreen" value="true"/>
					<param name="allowscriptaccess" value="always"/>
					<param name="src" value="http://www.ustream.tv/flash/viewer.swf"/>
					<embed flashvars="cid=6783644&amp;autoplay=false" width="480" height="296" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/viewer.swf" type="application/x-shockwave-flash"></embed>
					</object>
				-->
				<h2><a href="http://blog.makezine.com/archive/2011/05/streaming-demos-live-from-maker-faire-bay-area-2011.html">Maker Faire Livestreaming</a></h2>
				
				<object width="480" height="296" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
  				<param name="flashvars" value="cid=8299593&amp;autoplay=false"/>
  				<param name="allowfullscreen" value="true"/>
  				<param name="allowscriptaccess" value="always"/>
  				<param name="src" value="http://www.ustream.tv/flash/viewer.swf"/>
  				<embed flashvars="cid=8299593&amp;autoplay=false" width="480" height="296" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/viewer.swf" type="application/x-shockwave-flash"></embed>
  				</object>

				
			</div>

				
			<div class="youtube">
			
				<h2>Meet the Makers</h2>
				
				<object width="480" height="385"><param name="movie" value="http://www.youtube.com/p/60F0A7E4EA35A0F5?hl=en_US&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/p/60F0A7E4EA35A0F5?hl=en_US&fs=1" type="application/x-shockwave-flash" width="480" height="385" allowscriptaccess="always" allowfullscreen="true"></embed></object>
				
			</div>
			
