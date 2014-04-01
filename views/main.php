<!-- TODO: All this page, the landing page, needs a way to be easily translated into other languages. Note that we have to use the lang() funtion of CodeIgniter... -->

<?php $this->load->view('sections/head_scripts'); ?>
<?php $this->load->view('sections/head'); ?>

<!-- Alerts section -->
<div id="filter" class='deadblue relative line-bottom'>
	<!-- <img id="cogOne"class='sticker-bottom-left absolute' src="/img/cog.png" /> -->
	<div class='row'>
		<div class='large-8 large-centered columns text-center'>
			<h2><?php echo lang('value_proposition'); ?></h2>
		</div>
	</div>
	<div class='row wide-90 text-center'>
		<div class='large-5 columns'>
			<h5><?php echo lang('search_by_scope'); ?></h5>
			
			<div class='row'>
				<div class='large-3 columns'>
					<li data-filter="all omni" class='filter active'>
						<a>
							<div class='scopes' style="background-position:<?php echo 6 * -78; ?>px 0px;"></div>
							<p><?php echo lang('all'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="health omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 3 * -78; ?>px 0px;"></div>
							<p><?php echo lang('health', 'title'); ?></p>
						</a>
					</li>
				</div>				
				<div class='large-3 columns'>
					<li data-filter="education omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 1 * -78; ?>px 0px;"></div>
							<p><?php echo lang('education', 'title'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="productivity omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 5 * -78; ?>px 0px;"></div>
							<p><?php echo lang('productivity', 'title'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="gaming omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 4 * -78; ?>px 0px;"></div>
							<p><?php echo lang('gaming', 'title'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="special_needs omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 0 * -78; ?>px 0px;"></div>
							<p><?php echo lang('special_needs', 'title'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="entrepreneurship omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 7 * -78; ?>px 0px;"></div>
							<p><?php echo lang('entrepreneurship', 'title'); ?></p>
						</a>
					</li>				
				</div>
				<div class='large-3 columns'>
					<li data-filter="other omni" class='filter'>
						<a>					
							<div class='scopes' style="background-position:<?php echo 9 * -78; ?>px 0px;"></div>
							<p><?php echo lang('other', 'title'); ?></p>
						</a>
					</li>					
				</div>
			</div>			
		</div>
		<div class='large-2 columns'>
			<!-- <h1 id='or_label'><em>or</em></h1> -->
		</div>
		<div class='large-5 columns'>
			<h5><?php echo lang('search_by_tech'); ?></h5>
			
			<div class='row'>
				<div class='large-3 columns'>
					<li data-filter="all omni" class='filter-button filter active'>
						<a>					
							<div class='courses' style="background-position:<?php echo 27 * -78; ?>px 0px;"></div>
							<p><?php echo lang('all'); ?></p>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="android omni" class='filter-button filter'>
						<a>
							<div class='courses' style="background-position:<?php echo 5 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="ios omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 7 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="html omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 22 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="css omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 23 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="titanium omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 11 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="net omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 1 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
				<div class='large-3 columns'>
					<li data-filter="aforge omni" class='filter-button filter'>
						<a>					
							<div class="courses" style="background-position:<?php echo 3 * -78; ?>px 0px;"></div>
						</a>
					</li>
				</div>
			</div>			
		</div>
	</div>
</div>

<div class='background-gradient'>
	<div class='spacer-height-small'></div>

	<div class='row'>
		<div class='large-12 large-centered text-center columns'>
			<h4><?php echo lang('here_are'); ?></h4>
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
				//Too difficult for Vostlink maybe?
				//$data['project'] = 'eyefollower';
				//$this->load->view('project_card', $data);
			?>
			<?php
				$data['project'] = 'kosas';
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
			<?php
				$data['project'] = 'vihas';
				$this->load->view('project_card', $data);
			?>
			<li class='relative mix mix_all all omni' style='display: inline-block;  opacity: 1;'>
				<a href="#" data-reveal-id="myModal" data-reveal>
					<img src='/img/new_idea.jpg'alt='<?php echo lang('new_idea_card'); ?>'>
					<div class='project-card-title gray sticker-bottom absolute make-wide text-center'>
						<h5><?php echo lang('new_idea_card'); ?></h5>
					</div>
				</a>
			</li>
			<li class="gap"></li> <!-- "gap" elements fill in the gaps in justified grid -->
		</ul>
	</div>
</div>

<!-- <div class='gray'>
	<h2>We are on:</h2>
	<p>text</p>
	<p>text</p>
	<p>text</p>
	<p>text</p>
</div> -->

<!-- Modals -->
<div id="myModal" class="reveal-modal" data-reveal>
	<div class='row centered_text'>
		<h2 class="subheader"><?php echo lang('new_idea_title'); ?></h2>
	</div>

	<form data-abide action="/page/newIdea" method='POST' class='custom'>
		<div class='row'>
			<div class='row'>
				<div class='large-3 columns'>
					<h5><?php echo lang('modals', 'name'); ?></h5>
					<input type='text' name="username" required></input>
					<small class="error"><?php echo lang('modals', 'required_string_error'); ?></small>
				</div>				
				<div class="large-3 columns">
					<h5><?php echo lang('modals', 'email'); ?></h5>
					<input type='email' name='email' required>
					<small class="error"><?php echo lang('modals', 'required_string_error'); ?></small>
				</div>				
				<div class='large-6 left columns'>
					<h5><?php echo lang('modals', 'idea_name'); ?></h5>
					<input type='text' name="ideaname" placeholder="Ultra-turbo-helper or Octo-mobile-organizer" required></input>
					<small class="error"><?php echo lang('modals', 'required_string_error'); ?></small>
				</div>
			</div>
			<div class='row'>
				<div class='large-12 columns'>
					<h5><?php echo lang('modals', 'what_it_does'); ?></h5>
					<textarea name="description" placeholder="It helps people with ... allowing them to ..., so now they can perform the task ... easier." required></textarea>
					<small class="error"><?php echo lang('modals', 'required_string_error'); ?></small>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='text-center'>
				<button type='submit'><?php echo lang('modals', 'submit'); ?></button>
			</div>
		</div>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>