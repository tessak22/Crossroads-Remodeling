<?php if( have_rows('projects') ): ?>

	<?php while( have_rows('projects') ): the_row(); 

		// vars
		$image = get_sub_field('project_image');
		$name = get_sub_field('project_name');
		$description = get_sub_field('project_description');

		?>

		<div class="project-item col-lg-4 col-md-6">
			<div class="project-content">
				<img src="<?php echo $image; ?>" />
		    	<h4><?php echo $name; ?></h4>
		    </div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>