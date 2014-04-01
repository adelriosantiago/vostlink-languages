<?php $this->load->view('sections/head_scripts'); ?>
<?php $this->load->view('sections/head'); ?>

<div class='row'>
	<div class='large-6 columns'>
		<div class='row'>
			<h2><?php echo lang('about_us'); ?></h2>
			<p><?php echo lang('startup_about_us'); ?></p>
			<!-- <p>Vostlink is a non-profit organization that wants you to learn coding while you work on real, high impact tech projects that will change people's lives.</p> -->
			<!-- <p>Vostlink is a non-profit organization that connects people/organizations with a technological need with the people that has the skill or want the learn this technology.</p> -->
		</div>
		<div class='row'>
			<?php echo lang('our_values'); ?>
			<!-- <h5 class='subheader'>1.- Service</h5>
			<p>We believe that being serviciable is the way to enrich others people's lives. We will walk the extra mile in order to know how to improve our surroundings.</p>
			<h5 class='subheader'>2.- Friendliness</h5>
			<p>We are reachable people, your opinion is important for us, feel free contact us, make suggestions or questions. We will always answer the questions made by the users. </p> -->
		</div>				
	</div>
	
	<div class='large-6 columns'>
		<div id='team-container' class='row'>
			<h2><?php echo lang('the_team'); ?></h2>
			<!-- <div class='large-6 columns'>
				<img src='http://placehold.it/150x150'/>
				<p>Vostboy <span class='subheader'>The Vostlink mascot</span></p>
				<ul>
					<li class='nobreak'>
						<a href='https://www.facebook.com/a.delrio.santiago'><i class="fi-social-facebook size-24"></i></a>
					</li>
					<li class='nobreak'>
						<a href='https://twitter.com/adelriosantiago'><i class="fi-social-twitter size-24"></i></a>
					</li>
				</ul>
			</div> -->
			<div class='large-4 columns'>
				<img src='/img/alex.jpg' class='rounded-image'>
				<?php echo lang('member_alex'); ?>
				<ul>
					<li class='nobreak'>
						<a href='https://www.facebook.com/a.delrio.santiago'><i class="fi-social-facebook size-24"></i></a>
					</li>
					<li class='nobreak'>
						<a href='https://twitter.com/adelriosantiago'><i class="fi-social-twitter size-24"></i></a>
					</li>
				</ul>
			</div>
			<div class='large-4 columns'>
				<img src='/img/juan.jpg' class='rounded-image'/>
				<?php echo lang('member_charlie'); ?>
				<ul>
					<li class='nobreak'>
						<a href='https://www.facebook.com/juancarlos.perezcastellanos'><i class="fi-social-facebook size-24"></i></a>
					</li>
					<li class='nobreak'>
						<a href='https://twitter.com/cuyopc'><i class="fi-social-twitter size-24"></i></a>
					</li>
				</ul>
			</div>
			<div class='large-4 columns'>
				<img src='/img/gerardo.jpg' class='rounded-image'/>
				<?php echo lang('member_gera'); ?>
				<ul>
					<li class='nobreak'>
						<a href='https://www.facebook.com/gerardo.delgadoglez'><i class="fi-social-facebook size-24"></i></a>
					</li>
					<li class='nobreak'>
						<a href='https://twitter.com/GerardoDG93'><i class="fi-social-twitter size-24"></i></a>
					</li>
					<!-- <li class='nobreak'>
						<a href='http://linkd.in/1nHq51F'><i class="size-24"></i></a>
					</li> -->
				</ul>
			</div>				
			<!-- <div class='large-6 columns'>
				<img src='http://placehold.it/150x150'/>
				<p>Gerardo Delgado <span class='subheader'>Co-founder</span></p>
				<ul>
					<li class='nobreak'>
						<a href='https://www.facebook.com/a.delrio.santiago'><i class="fi-social-facebook size-24"></i></a>
					</li>
					<li class='nobreak'>
						<a href='https://twitter.com/adelriosantiago'><i class="fi-social-twitter size-24"></i></a>
					</li>
				</ul>				
			</div> -->
			<!-- <div class='large-6 columns'>
				<img src='/img/unknown.jpg'/>
				<p>You? <span class='subheader'>The next member?</span></p>
				<ul>
					<li class='nobreak'>
						<a><i class="fi-mail size-24"></i></a>
					</li>
				</ul>				
			</div> -->
		</div>
		<div class='row'>
			<?php echo lang('our_internal_values'); ?>
		</div>
	</div>
</div>

<!-- <div id="join_founders_modal" class="reveal-modal" data-reveal>
	<h2>Please fill the following</h2>
	<a class="close-reveal-modal">&#215;</a>

	<form data-abide action="/page/joinFounders" method='POST' class='custom'>
		<div class='row'>
			<div class="name-field large-6 columns">
				<h5>Your name (required)</h5>
				<input name='username' type="text" required pattern="[a-zA-Z]+">
				<small class="error">Name is required and must be a string.</small>
			</div>
			<div class="email-field large-6 columns">
				<h5>Email (required)</h5>
				<input name='email' type="email" required>
				<small class="error">An email address is required.</small>
			</div>
		</div>
		<div class='row'>
			<div class='large-12 columns'>
				<h5 for="remarks">Any comments? (optional)</h5>
				<textarea placeholder="I want to collaborate because..." name="remarks" id="remarks"></textarea>
			</div>
		</div>
		<div class='row text-center'>
			<button type='submit'>Submit</button>
		</div>		
	</form>
</div> -->

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>