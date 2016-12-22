<?php if( have_rows('projects') ): ?>

	<?php while( have_rows('projects') ): the_row(); 

		// vars
		$image = get_sub_field('project_image');
		$name = get_sub_field('project_name');

		?>

		<div class="project-item">
			<img src="<?php echo $image; ?>" />
		    <h4><?php echo $name; ?></h4>
		</div>

	<?php endwhile; ?>

<?php endif; ?>