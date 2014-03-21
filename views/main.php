<!-- TODO: All this page, the landing page, needs a way to be easily translated into other languages. Note that we have to use the lang() funtion of CodeIgniter. -->

<?php $this->load->view('sections/head_scripts'); ?>
<?php $this->load->view('sections/head'); ?>

<!-- Alerts section -->
<div id="filter" class='deadblue relative line-bottom'>
	<!-- <img id="cogOne"class='sticker-bottom-left absolute' src="/img/cog.png" /> -->
	<div class='row'>
		<div class='large-8 large-centered columns text-center'>
			<h2>Find high-impact tech projects that will help real people</h2>
		</div>
	</div>
	<div class='row wide-90 text-center'>
		<div class='large-5 columns'>
			<h5>Search projects by scope</h5>
			
			<div class='row'>
				<div class='large-3 columns'>
					<li data-filter="all omni" class='filter active'>
						<a>
							<i class="fi-thumbnails size-100"></i>
							<p>All</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="health omni" class='filter'>
						<a>					
							<i class="fi-heart size-100"></i>
							<p>Health</p>
						</a>
					</li>
				</div>				
				<div class='large-3 columns'>
					<li data-filter="education omni" class='filter'>
						<a>					
							<i class="fi-book-bookmark size-100"></i>
							<p>Education</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="productivity omni" class='filter'>
						<a>					
							<i class="fi-wrench size-100"></i>
							<p>Productivity</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="gaming omni" class='filter'>
						<a>					
							<i class="fi-die-three size-100"></i>
							<p>Gaming</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="special_needs omni" class='filter'>
						<a>					
							<i class="fi-wheelchair size-100"></i>
							<p>Special needs</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
				</div>
				<div class='large-3 columns'>
				</div>
			</div>			
		</div>
		<div class='large-2 columns'>
			<!-- <h1 id='or_label'><em>or</em></h1> -->
		</div>
		<div class='large-5 columns'>
			<h5>Search by technology</h5>
			
			<div class='row'>
				<div class='large-3 columns'>
					<li data-filter="all omni" class='filter-button filter active'>
						<a>					
							<i class="fi-thumbnails size-100"></i>
							<p>All</p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="android omni" class='filter-button filter'>
						<a>					
							<div class='course' style="background-position:<?php echo 5 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="ios omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 7 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="html5 omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 22 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="css3 omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 23 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="titanium omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 11 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="net omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 1 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="aforge omni" class='filter-button filter'>
						<a>					
							<div class="course" style="background-position:<?php echo 3 * -100; ?>px 0px;"></div>
						</a>
					</li>
				</div>
			</div>			
		</div>
	</div>
</div>

<div class='gradient-gray'>
	<div class='spacer-height-small'></div>

	<div class='row'>
		<div class='large-12 large-centered text-center columns'>
			<h4>Here are some real projects that will help real people! Select one to know more about it</h4>
		</div>
	</div>

	<div class='spacer-height-small'></div>

	<div class='row'>
		<ul id='project-container'>
			<?php
				$data['project'] = 'sightsound';
				$this->load->view('project_card', $data);
			?>		
			<?php
				$data['project'] = 'eyeclick';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'facemouse';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'eyefollower';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'spherix';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'smartwindow';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'treetalk';
				$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'vostlink_trans';
				$this->load->view('project_card', $data);
			?>			
			<li class='relative mix mix_all all omni' style='display: inline-block;  opacity: 1;'>
				<a href="#" data-reveal-id="myModal" data-reveal>
					<img src='/img/new_idea.jpg'alt='Upload your idea!'>
					<div class='project-card-title gray sticker-bottom absolute make-wide text-center'>
						<h5>Upload your idea!</h5>
					</div>
				</a>
			</li>
			<li class="gap"></li> <!-- "gap" elements fill in the gaps in justified grid -->
		</ul>
	</div>
</div>

<!-- Modals -->
<div id="myModal" class="reveal-modal" data-reveal>
	<div class='row centered_text'>
		<h2 class="subheader">Would you like to see your idea here? You can upload it!</h2>
	</div>

	<form data-abide action="/page/newIdea" method='POST' class='custom'>
		<div class='row'>
			<div class='row'>
				<div class='large-3 columns'>
					<h5>Your name:</h5>
					<input type='text' name="username" required></input>
					<small class="error">Name is required and must be a string.</small>
				</div>				
				<div class="large-3 columns">
					<h5>Your E-mail:</h5>
					<input type='email' name='email' required>
					<small class="error">E-mail address invalid</small>
				</div>				
				<div class='large-6 left columns'>
					<h5>The name of the idea:</h5>
					<input type='text' name="ideaname" placeholder="Ultra-turbo-helper or Octo-mobile-organizer" required></input>
					<small class="error">Name is required and must be a string.</small>
				</div>
			</div>
			<div class='row'>
				<div class='large-12 columns'>
					<h5>What it does:</h5>
					<textarea name="description" placeholder="It helps people with ... allowing them to ..., so now they can perform the task ... easier." required></textarea>
					<small class="error">Name is required and must be a string.</small>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='text-center'>
				<button type='submit'>Submit</button>
			</div>
		</div>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>