

<div id="main">
	

	
	<?php foreach($row as $r) : ?>
				
			<h2 class='feature date'><?php echo $r->day.' '.$r->month.' '.$r->year; ?></h2>
		
			<img class='feature' src="<?php echo base_url().$r->image_url; ?>" alt="$r->font" />
		
			<h2 class='feature title'><?php echo anchor("posts/$r->id", $r->title, 'class="title"') ; ?></h2>
			
			<div class="summary">
		
			<p class='feature content'><?php echo $r->content; ?></p>
		
			<p class='feature font'>Font: <?php echo $r->font; ?></p>
			
			</div><!-- Summary -->
			
			<?php 

				$tags = $r->tags;
				$tags = explode(",", $tags);
				foreach($tags as $tag) {
					echo "<a class='tag'>$tag</a>";
				}
			 ?>
			
	<?php endforeach; ?>
	

						
			<?php if($comments) : ?>
				
				<hr />
				
				<h2>Comments:</h2>

				<div class="comments">
				
					<?php foreach($comments as $comment) : ?>
				
						<h2 class="post"><?php echo $comment->name; ?></h2>
				
						<!--<p class="post">Posted: <?php echo $comment->posted_datetime; ?></p>-->
				
						<p class="post"><?php echo $comment->comment; ?></p>
			
					<?php endforeach; ?>
				
				<?php endif; ?>
				
			</div>
			
			<hr />
			
			<?php echo form_open('posts/new_comment', 'class="commentform"'); ?>
			<h2>Leave a comment:</h2>
			<?php echo form_hidden('post_id', "$r->id"); ?>
			
			<p><label for="name">Name</label>
			<?php echo form_input('name'); ?></p>
			
			<p><label for="email_address">Email Address</label>
			<?php echo form_input('email_address'); ?></p>
			<p><label for="website">Website URL (if you have one)</label>
			<?php echo form_input('website'); ?></p>
			<p><label for="comment">Comment</label>
			<?php echo form_textarea('comment'); ?></p>
			<p><?php echo form_submit('submit_comment', 'Post Comment', 'id="button"'); ?></p>
			<?php  echo form_close(); ?>
			<p class="confirm" style="display:none">Comment posted, thanks for your contribution!</p>		
			<script type="text/javascript">
			
			$('.commentform input').bind('click', function() {
				$(this).val('');
			})
				
			$("#button").click( function() {
				var post_id = $("input[name='post_id']").val();
				var name = $("input[name='name']").val();	
				var comment = $("textarea[name='comment']").val();	
				var dataString = 'post_id=' + post_id + '&name=' + name + '&comment=' + comment;
				$.ajax({
					type:"POST",
					url: "<?php echo base_url(); ?>/index.php/posts/new_comment",
					data: dataString,
					success: function(html) {
						$('.comments').prepend(html);
					}
				});
				$('.commentform').hide();
				$('.confirm').fadeIn();
				return false;
				});

			</script>
				
</div>









