
	
	<div id="main">
		
		<div id="col-1">
		
		<?php foreach($row as $r) : ?>
			
			<?php if ($r->columnID == 1) : ?>
					
			<div class="article">
			
				<h2 class='post date'><?php echo $r->day.' '.$r->month.' '.$r->year; ?></h2>
				
				<h2 class='post title'><?php echo anchor("posts/$r->id", $r->title, 'class="title"') ; ?></h2>
			
				<img class='post' src="<?php echo base_url().$r->image_url; ?>" alt="Trade Gothic Bold" />
				
				<div class="summary">
			
				<p class='post content'><?php echo $r->content; ?></p>
			
				<p class='post font'>Font: <?php echo $r->font; ?></p>
				
				</div><!-- Summary -->
				
				<?php 

					$tags = $r->tags;
					$tags = explode(",", $tags);
					foreach($tags as $tag) {
						echo "<a class='tag'>$tag</a>";
					}
				 ?>
						
				<hr />
			
			</div>
			
			<?php endif; ?>
			
		<?php endforeach; ?>
		
		</div>
		
		<div id="col-2">
		
		<?php foreach($row as $r) : ?>
			
			<?php if ($r->columnID == 2) : ?>
					
			<div class="article">
			
				<h2 class='post date'><?php echo $r->day.' '.$r->month.' '.$r->year; ?></h2>
				
				<h2 class='post title'><?php echo anchor("posts/$r->id", $r->title, 'class="title"') ; ?></h2>
			
				<img class='post' src="<?php echo base_url().$r->image_url; ?>" alt="Trade Gothic Bold" />
				
				<div class="summary">
			
				<p class='post content'><?php echo $r->content; ?></p>
			
				<p class='post font'>Font: <?php echo $r->font; ?></p>
				
				</div><!-- Summary -->
				
				<?php 

					$tags = $r->tags;
					$tags = explode(",", $tags);
					foreach($tags as $tag) {
						echo "<a class='tag'>$tag</a>";
					}
				 ?>
						
				<hr />
			
			</div>
			
			<?php endif; ?>
			
		<?php endforeach; ?>
		
		</div>
		
		<div id="col-2">
		
		<?php foreach($row as $r) : ?>
			
			<?php if ($r->columnID == 3) : ?>
					
			<div class="article">
			
				<h2 class='post date'><?php echo $r->day.' '.$r->month.' '.$r->year; ?></h2>
				
				<h2 class='post title'><?php echo anchor("posts/$r->id", $r->title, 'class="title"') ; ?></h2>
			
				<img class='post' src="<?php echo base_url().$r->image_url; ?>" alt="Trade Gothic Bold" />
				
				<div class="summary">
			
				<p class='post content'><?php echo $r->content; ?></p>
			
				<p class='post font'>Font: <?php echo $r->font; ?></p>
				
				</div><!-- Summary -->
				
				<?php 

					$tags = $r->tags;
					$tags = explode(",", $tags);
					foreach($tags as $tag) {
						echo "<a class='tag'>$tag</a>";
					}
				 ?>
						
				<hr />
			
			</div>
			
			<?php endif; ?>
			
		<?php endforeach; ?>
		
		</div>
		
	</div>
	








