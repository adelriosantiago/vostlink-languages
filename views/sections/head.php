<?php
	if (!empty($msg))
	{
		echo "<div data-alert class='alert-box success custom white_text'>";
			echo "<h3>$msg</h3>";
			echo "<a href='#' class='close'>&times;</a>";
		echo "</div>";
	}
?>

<div class='background-gradient'>
	<div class='spacer-height-small'></div>
	
	<div class='row wide line-bottom'>
		<div class='large-8 columns'>
			<a href='/'>
				<img id='logo' class='relative' src='/img/vostlink-logo-big.png' />
				<!-- <h5 id='slogan'>Find projects to skill-donate</h5> -->
				<h5 id='slogan'><?php echo lang('slogan'); ?></h5>
			</a>
		</div>
		<div class='large-4 columns'>
			<div class='row text-center'>
				<!-- <p><a href='/page/switchLanguage/english'>English</a><span class='gray-white'> | </span><a href='/page/switchLanguage/spanish'>Español</a></p> -->
				<!-- <p><a href='/page/switchLanguage/english'>English</a><span class='gray-white'> | </span><a href='/page/switchLanguage/spanish'>Español</a><span class='gray-white'> | </span><a href='/page/switchLanguage/german'>Deutsch</a></p> -->
				<p><a href='/page/switchLanguage/english'>English</a><span class='gray-white'> | </span><span class='subheader'>More languages soon...</span></p>
			</div>
			<div class='row'>
				<div class='large-12 large-centered columns'>
					<div class='large-3 columns text-center'>
						<a href='/'>
							<i class="fi-thumbnails size-48"></i>
							<p><?php echo lang('view_projects'); ?></p>
						</a>
					</div>
					<div class='large-3 columns text-center'>
						<a href='/page/how_it_works'>
							<i class="fi-layout size-48"></i>
							<p><?php echo lang('how_it_works'); ?></p>
						</a>
					</div>			
					<div class='large-3 columns text-center'>
						<a href='/page/blog'>
							<i class="fi-megaphone size-48"></i>
							<p><?php echo lang('blog'); ?></p>
						</a>
					</div>
					<div class='large-3 columns text-center'>
						<a href='/page/about_us'>
							<i class="fi-info size-48"></i>
							<p><?php echo lang('about_us'); ?></p>
						</a>
					</div>
					<!-- <div class='large-4 columns text-center'>
						<a href='#'>
							<i class="fi-home size-48"></i>
							<p>FAQ</p>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>