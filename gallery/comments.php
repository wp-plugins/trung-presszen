 		<div id="commentblock">
			<?php $showhide = "<a href=\"#comments\" id=\"showcomments\"><img src=\"".$_zp_themeroot."/img/btn_show.gif\" width=\"35\" height=\"11\" alt=\"SHOW\" /></a> <a href=\"#content\" id=\"hidecomments\"><img src=\"".$_zp_themeroot."/img/btn_hide.gif\" width=\"35\" height=\"11\" alt=\"HIDE\" /></a>"; $num = getCommentCount(); if ($num == 0) echo "<h2>No comments yet</h2>"; if ($num == 1) echo "<h2>1 comment so far $showhide</h2>"; if ($num > 1) echo "<h2>$num comments so far $showhide</h2>"; ?>
			 <div <?php $num = getCommentCount(); if ($num > 0) echo "id=\"comments\""; ?>>
				<dl class="commentlist">
					<?php while (next_comment()):  ?>
					<dt>
					<a class="postno"> </a>
					<em>On <?php echo getCommentDate();?>, <?php printCommentAuthorLink(); ?> wrote:</em>
    				</dt>
    				<dd>
					<p><?php echo getCommentBody();?><?php printEditCommentLink('Edit', ' (', ')'); ?></p>
					</dd>
    				<?php endwhile; ?>
    			</dl>
			<?php if (isset($error)) { ?><p><div class="error">There was an error submitting your comment. Name, a valid e-mail address, and a comment are required.</div></p><?php } ?>
    			<p class="mainbutton" id="addcommentbutton"><a href="#addcomment" class="btn"><img src="<?php echo  $_zp_themeroot ?>/img/btn_add_a_comment.gif" alt="" /></a></p>
    			<div id="addcomment">
				<h2>Add a comment</h2>
				<!-- If comments are on for this image AND album... -->
					<form id="comments-form" action="#" method="post">
					<input type="hidden" name="comment" value="1" />
	          		<input type="hidden" name="remember" value="1" />
					<table border="0">
					<tr valign="top" align="left" id="row-name">
									<th><label for="name">name:</label></td>
									<td><input type="text" id="name" name="name" class="text" value="<?php echo $stored[0];?>" class="inputbox" />
									</td>
								</tr>
								<tr valign="top" align="left" id="row-email">
									<th><label for="email">email:</label></td>
									<td><input type="text" id="email" name="email" class="text" value="<?php echo $stored[1];?>" class="inputbox" /> <em>(not displayed)</em>
									</td>
								</tr>
								<tr valign="top" align="left">
									<th><label for="website">url:</label></td>
									<td><input type="text" id="website" name="website" class="text" value="<?php echo $stored[2];?>" class="inputbox" /></td>
								</tr>
								<tr valign="top" align="left">
									<th><label for="c-text">comment:</label></th>
									<td><textarea name="comment" rows="10" cols="40"></textarea></td>
								</tr>
								<tr valign="top" align="left">
								    <th class="buttons">&nbsp;</th>
    								<td class="buttons"><input type="submit" value="Add comment" class="pushbutton" id="btn-preview" /><p>Fill in "name", "email" and "comment".</p></td>
    								</tr>
							</table>
						</form>
			</div>
		</div>
