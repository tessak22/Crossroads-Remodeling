<?php if( have_rows('projects') ): ?>

	<?php while( have_rows('projects') ): the_row(); 

		// vars
		$id = get_sub_field('project_id');
		$image = get_sub_field('project_image');
		$name = get_sub_field('project_name');
		$description = get_sub_field('project_description');
		$image2 = get_sub_field('project_image2'); 
		$image3 = get_sub_field('project_image3');
		$image4 = get_sub_field('project_image4');
		$image5 = get_sub_field('project_image5');

		?>

		<div class="project-item col-lg-4 col-md-6">
			<div class="project-content" data-toggle="modal" data-target="#<?php echo htmlspecialchars($id); ?>">
				<img src="<?php echo $image; ?>" />
		    	<h4><?php echo $name; ?></h4>
		    </div>
		</div>

		<!-- Modal Content-->
		<div class="modal fade" id="<?php echo htmlspecialchars($id); ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><?php echo $name; ?></h4>
					</div>
					<div class="modal-body">
		    			<?php echo $description; ?>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<?php if( $image2 ): ?>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<?php endif; ?>
								<?php if( $image3 ): ?>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<?php endif; ?>
								<?php if( $image4 ): ?>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								<?php endif; ?>
								<?php if( $image5 ): ?>
									<li data-target="#carousel-example-generic" data-slide-to="4"></li>
								<?php endif; ?>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php echo $image; ?>">
								</div>
								<?php if( $image2 ): ?>
									<div class="item">
										<img src="<?php echo $image2; ?>" >
									</div>
								<?php endif; ?>
								<?php if( $image3 ): ?>
									<div class="item">
										<img src="<?php echo $image3; ?>" >
									</div>
								<?php endif; ?>
								<?php if( $image4 ): ?>
									<div class="item">
										<img src="<?php echo $image4; ?>" >
									</div>
								<?php endif; ?>
								<?php if( $image5 ): ?>
									<div class="item">
										<img src="<?php echo $image2; ?>" >
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>