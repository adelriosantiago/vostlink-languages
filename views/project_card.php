<?php
	$scopes = lang($project, 'scope');
	$scopes = str_replace('|', ' ', $scopes);
?>

<?php
	$techs = lang($project, 'techs');
	$techs = str_replace('|', ' ', $techs);
?>

<li class='relative mix mix_all all <?php echo $scopes; ?> <?php echo $techs; ?>' style='display: inline-block;  opacity: 1;'>
	<a href='/page/project/<?php echo $project; ?>'>
		<?php
			$image_path = lang($project, 'thumbnail');
			echo "<img src='/img/$image_path' alt='No project image yet!' class='rounded-image'/>";
		?>		
		<div class='project-card-title gray sticker-bottom absolute make-wide text-center'>
			<h5><?php echo lang($project, 'title'); ?></h5>
		</div>
		<div class='project-card-description sticker-top absolute make-wide text-center'>
			<p><?php echo lang($project, "description"); ?></p>
			<div class="radius progress progress-style success">
			  <span style="width: <?php echo lang($project, 'progress'); ?>%" class="meter"></span>
			</div>
			<p class='float-left'><small>By: <?php echo lang($project, 'author-name'); ?></small></p>
			<p class='float-right'><small><?php echo lang($project, 'progress'); ?>% progress</small></p>
		</div>
	</a>
</li>