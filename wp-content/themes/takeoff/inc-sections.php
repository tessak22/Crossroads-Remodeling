<div class="about-sections">
<?php if( have_rows('about_section') ): ?>

	<?php while( have_rows('about_section') ): the_row(); 

		// vars
		$name = get_sub_field('section_name');
		$description = get_sub_field('section_description');
		$image = get_sub_field('section_image');

		?>

		<div class="col-lg-6">
			<h3><?php echo $name; ?></h3>
			<img src="<?php echo $image; ?>" />
		    <?php echo $description; ?>
		</div>

	<?php endwhile; ?>

<?php endif; ?>
</div>