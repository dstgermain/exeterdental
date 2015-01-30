<div class="row">
	<div class="col-sm-9 padding-top_30 padding-bottom_30">
		<?php the_content(); ?>
	</div>
	<div class="col-sm-3 aside"></div>
</div>

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
