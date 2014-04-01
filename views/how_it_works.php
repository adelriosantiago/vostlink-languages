<?php $this->load->view('sections/head_scripts'); ?>
<?php $this->load->view('sections/head'); ?>

<!-- How it works section --->

<div id='how_it_works' class='background-sky'>
	<div class='spacer-height-big'></div>
	<div class='row text-center'>
		<a name="build"></a>
		<h2><?php echo lang('how_it_works'); ?></h2>
	</div>
	<!-- 1 -->
	<div class='row pitch'>
		<div class='large-6 columns'>
			<img src='/img/how_1.png' />
		</div>
		<div class='large-6 columns'>
			<?php echo lang('slide_1'); ?>
		</div>
	</div>
	<!-- 2 -->
	<div class='row pitch'>
		<div class='large-6 columns'>
			<?php echo lang('slide_2'); ?>
		</div>
		<div class='large-6 columns'>
			<img src='/img/how_2.png' />
		</div>
	</div>
	<!-- 3 -->
	<div class='row pitch'>
		<div class='large-6 columns'>
			<img src='/img/how_3.png' />
		</div>
		<div class='large-6 columns'>
			<?php echo lang('slide_3'); ?>
		</div>
	</div>
	<!-- 4 -->
	<div class='row pitch'>
		<div class='large-6 columns'>
			<?php echo lang('slide_4'); ?>
		</div>
		<div class='large-6 columns'>
			<img src='/img/how_4.png' />
		</div>
	</div>
	<!-- 5 -->
	<div class='row pitch'>
		<div class='large-6 columns'>
			<img src='/img/how_5.png' />
		</div>
		<div class='large-6 columns'>
			<?php echo lang('slide_5'); ?>
		</div>
	</div>
	<div class='spacer-height-big'></div>
</div>

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>