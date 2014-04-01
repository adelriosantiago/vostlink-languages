<?php $this->load->view('sections/head_scripts'); ?>
<?php $this->load->view('sections/head'); ?>

<div id='project-page' class='deadblue'>
	<div class='spacer-height-big'></div>
		
	<div class='row'>
	
		<div class='row text-center'>
			<h2 class=''><?php echo lang($project, 'title'); ?></h2>
			<h5 class='subheader'><?php echo lang($project, 'value_proposition'); ?></h5>						
		</div>
		<div class='spacer-height-small'></div>
		
		<div class='panel radius background-white'>
			<div class='row'>
				<div class='large-9 columns'>
					<div class='row'>
						<div class='large-12 columns'>
							<?php
								/* $result = lang($project, 'screenshots');
								if (count($result) == 1)
								{
										$image_info = explode('|', $result[0]);
										$image_path = $image_info[0];
										$image_description = $image_info[1];
										echo "<img src='/img/$image_path'/>";
								} else
								{
									echo "<ul data-orbit 
											data-options='timer:false;
											animation_speed:100;
											navigation_arrows:true;
											bullets:true;
											next_on_click:true;'>";
									foreach ($result as $value)
									{
										$image_info = explode('|', $value);
										$image_path = $image_info[0];
										$image_description = $image_info[1];
										echo "<li>";
										echo "<img style='display: block; margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;' src='/img/$image_path'/>";
										echo "<div class='orbit-caption'>$image_description</div>";
										echo "</li>";
									}
									echo "</ul>";
								} */
							?>
							<h2 class='gray-white'><?php echo lang('sketches'); ?></h2>
								<?php
									$screenshots = lang($project, 'screenshots');
									$elements = count($screenshots);
									if ($elements > 1)
									{
										if (($elements % 2) == 0)
										{
											$elements = 2;
										} else
										{
											$elements = 3;
										}
									}				
									
									echo "<ul id='project-image-container' class='large-block-grid-$elements'>";
										foreach ($screenshots as $image)
										{
											$parse = explode('|', $image);
											$image_path = $parse[0];
											$image_description = $parse[1];
											
											echo "<li class='project-image'>";
												echo "<a href='/img/$image_path' data-lightbox='sketches' title='$image_description'>";
													echo "<img class='rounded-image' src='/img/$image_path'/>";
												echo "</a>";
											echo "</li>";
										}
									echo "</ul>";
								?>
						</div>
					</div>
					<div class='row'>
						<div class='large-12 columns'>
							<div>
								<h2 class='gray-white'><?php echo lang('description'); ?></h2>
								<p><?php echo lang($project, 'long_description'); ?></p>
							</div>
						</div>
					</div>

					<div class='row'>
						<div class='large-12 columns'>
							<h2 class='gray-white'><?php echo lang('how_collaborate'); ?></h2>
							<div id='collaborate-buttons' class='row text-center'>
								<div class='large-6 columns line-right'>
									<a class='' data-reveal-id="modal-advertise" data-reveal>
										<i class="step fi-megaphone size-72"></i>
										<h4><?php echo lang('advertise'); ?></h4>
										<p class='black'><?php echo lang('advertise_text'); ?></p>
									</a>
								</div>
								<div class='large-6 columns'>
									<a class='' data-reveal-id="modal-learn" data-reveal>
										<i class="step fi-puzzle size-72"></i>
										<h4><?php echo lang('learn'); ?></h4>
										<p class='black'><?php echo lang('learn_text'); ?></p>
									</a>
								</div>
				
								<!-- <div class='large-12 columns'>
									<h4>Tech savvy? You can also <a class='' data-reveal-id="contribute_modal" data-reveal><i class="nobreak step fi-torso-business size-24"></i><h4 class='nobreak black'>volunteer and guide learners</h4></a> or <a class='' data-reveal-id="workshop_modal" data-reveal><i class="nobreak step fi-wrench size-24 disabled"></i><h4 class='nobreak gray-white'>start developing</h4></a></h4>
								</div> -->									
									
								<!--
								<div class='large-6 columns'>
									<h4 style='color: gray;'>Tech savvy? You can do more:</h4>
								</div>
								<div class='large-6 columns'>
									<div class='row'>
										
										<div class='large-12 columns'>
											<a class='' data-reveal-id="contribute_modal" data-reveal>
												<i class="nobreak step fi-torso-business size-24"></i>
												
												<h4 class='nobreak black'>Volunteer and guide learners</h4>
											</a>
										</div>
										<div class='large-12 columns'>
											<a class='' data-reveal-id="workshop_modal" data-reveal>
												<i class="nobreak step fi-wrench size-24 disabled"></i>
												
												<h4 class='nobreak gray-white'>Start developing</h4>
											</a>								
										</div>
									</div>
								</div> -->
								
								<!-- <div class='large-12 columns'>
									<dl class="accordion" data-accordion>
										<dd>
											<br/>
											<a href="#techsavvy">
												<h6>You are tech savvy? Click here to know how can you do more.</h6>
											</a>
											<div id="techsavvy" class="content">
												<div class='row'>
													<div class='large-6 columns line-right'>
														<a class='' data-reveal-id="contribute_modal" data-reveal>
															<i class="step fi-torso-business size-72"></i>
															<h4>Guide</h4>
															<p class='black'>Become a mentor, volunteer and help those who want to learn how to code.</p>
														</a>
													</div>
													<div class='large-6 columns'>
														<a class='' data-reveal-id="workshop_modal" data-reveal>
															<i class="step fi-wrench size-72 disabled"></i>
															<h4 class='gray-white' >Develop</h4>
															<p class='gray-white'>Start developing, fixing bugs and adding features.</p>
														</a>								
													</div>
												</div>
											</div>
										</dd>
									</dl>
								</div> -->
								
								<!-- <a class='' data-reveal-id="contribute_modal" data-reveal>
									<div class='large-4 columns line-right'>
										<i class="step fi-clipboard-notes size-72"></i>
										<h2>Join project</h2>
										<p class='black'>Jump right into the challenges, learn, collaborate and earn badges while you complete them!</p>
									</div>
								</a> -->
								<!-- <a class='' data-reveal-id="peek_modal" data-reveal>
									<div class='large-4 columns line-right'>
										<i class="step fi-comments size-72"></i>
										<h2>Take a peek</h2>
										<p class='black'>Take a look at the challenges that others are doing. Click to see the Trello board.</p>
									</div>
								</a> -->
								<!-- <a class='black'>
									<div class='large-3 columns line-right'>
										<i class="step fi-social-skillshare size-48"></i>
										<h3>Online classroom</h3>
										<p class='black'>Start getting skills to contribute to this project while you earn badges. Start from knowing nothing.</p>
									</div>
								</a> -->
								<!-- <a class='' data-reveal-id="workshop_modal" data-reveal>
									<div class='large-3 columns'>
										<i class="step fi-wrench size-72 disabled"></i>
										<h2 class='gray-white' >The workshop</h2>
										<p class='gray-white'>See the app source code and make realtime changes, start coding and collaborating!</p>
									</div>
								</a> -->
							</div>
						</div>
					</div>
					
					<div class='row'>
						<div class='large-12 columns'>
							<?php
								$trello_path = lang($project, 'trello');
								if ($trello_path != '')
								{
									echo "<h4><a href='$trello_path' target='_blank' class='gray-black' style='border-bottom: 1px dotted;'>" . lang('see_trello') . "</a></h4>";
								}
							?>
						</div>
					</div>
					
					<div class='row'>
						<div class='large-12 columns'>
							<div class='float-left'>
								<!-- <h5 class='text-right'>Platforms</h5> -->
								<?php
									$result = explode('|', lang($project, 'platforms'));
									foreach ($result as $row)
									{
										echo "<i href='#' class='$row icon-disabled size-72'></i>";
									}
								?>
							</div>
						</div>
					</div>					
				</div>
				
				<div class='large-3 columns'>
					<div class='text-center'>
						<div class='row'>
							<div class='large-12 columns'>
								<h5><?php echo lang('scope'); ?></h5>
								<?php
									$result = explode('|', lang($project, 'scope'));
									foreach ($result as $row)
									{
										$icon_class = lang($row, 'icon');
										$title = lang($row, 'title');;
										
										echo "<div class='large-6 columns'>";
											echo "<i data-tooltip class='$icon_class size-100 icon-tooltip has-tip tip-top' title='$title'></i>";
											//echo "<div class='scope' style='background-position:" . $offset . "px 0px;'></div>";
										echo "</div>";										
									}
								?>
							</div>
						</div>
						
						<div class='spacer-height-small'></div>

						<div class='row'>
							<div class='large-12 columns'>
								<h5><?php echo lang('technologies'); ?></h5>
								<?php
									$result = explode('|', lang($project, 'techs'));
									foreach ($result as $row)
									{
										$image_id = lang($row, 'image_id');
										$offset = $image_id * -100;
										echo "<div class='large-6 columns'>";
											echo "<div class='test_1'>";
												echo "<div class='courses' style='background-position:" . $offset . "px 0px; border: none;'></div>";
											echo "</div>";
										echo "</div>";
									}								
								?>
							</div>
						</div>
						
						<div class='spacer-height-small line-bottom'></div>
						<div class='spacer-height-small'></div>
						
						<div class='row'>
							<div class='large-12 columns'>
								<h5><?php echo lang('progress'); ?></h5>
								<div class="radius progress progress-style">
								  <span style="width: <?php echo lang($project, 'progress'); ?>%" class="meter"></span>
								</div>
							</div>
						</div>
					
						<div class='spacer-height-small'></div>
						
						<div class='row'>
							<div class='large-12 columns'>
								<h5><?php echo lang('backers'); ?></h5>
								
								<?php
									$backers = lang($project, 'backers');
									if ($backers != '')
									{
										echo $backers;
									}
								?>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								<!-- <p>Helping this project is only one Tweet away:</p> -->
								<p><?php echo lang('show_your_interest'); ?></p>
								<a href="https://twitter.com/intent/tweet?screen_name=vostlink&text=I'm%20backing%20this%20project%3A%20http%3A%2F%2Fvostlink.com%2Fpage%2Fproject%2F<?php echo $project; ?>%20I%20would%20like%20to%20see%20it%20come%20true!" class="twitter-mention-button" data-size="large" data-related="vostlink">Tweet to @vostlink</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div id='peek_modal' class='reveal-modal' data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='row'>
		<div class='large-12 columns text-center'>
			<h2>We can take you from knowing nothing to start collaborating on this project along with other students. This is how the challenges board looks like:</h2>
			<div class='row'>
				<div class='large-8 large-centered columns'>
					<img src='/img/trello.jpg'></img>					
				</div>				
			</div>
			<br/>
			<p>Show button or not here</p>
		</div>
	</div>
</div> -->

<div id='modal-advertise' class='reveal-modal' data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='row'>
		<div class='large-12 columns text-center'>
			<h2><?php echo lang('modals', 'give_tweet'); ?></h2>
			<a href="https://twitter.com/intent/tweet?screen_name=vostlink&text=I'm%20backing%20this%20project%3A%20http%3A%2F%2Fvostlink.com%2Fpage%2Fproject%2F<?php echo $project; ?>%20I%20would%20like%20to%20see%20it%20come%20true!" class="twitter-mention-button" data-size="large" data-related="vostlink">Tweet to @vostlink</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
	</div>
</div>

<div id="modal-learn" class="reveal-modal" data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='text-center'>
		<h2><?php echo lang('modals', 'we_can'); ?></h2>
	</div>

	<form data-abide action="/page/joinProject" method='POST' class='custom'>
		<div class='row'>
			<div class="name-field large-6 columns">
				<h5><?php echo lang('modals', 'name'); ?></h5>
				<input name='username' type="text" required pattern="[a-zA-Z]+">
				<small class="error"><?php echo lang('modals', 'required_string_error'); ?></small>
			</div>
			<div class="email-field large-6 columns">
				<h5><?php echo lang('modals', 'email'); ?></h5>
				<input name='email' type="email" required>
				<small class="error"><?php echo lang('modals', 'required_email_error'); ?></small>
			</div>
		</div>
		<div class='row'>
			<div class='large-10 large-centered columns text-center'>
				<h5><?php echo lang('modals', 'select_level'); ?></h5>
				<div class='row'>
					<div class='large-3 columns'>
						<!-- NOTE: the id and for field allow the button to be clicked properly -->
						<input id='easy' type="radio" name='easy' checked><label for='easy'><?php echo lang('modals', 'easy'); ?></label></input>
						<i class="step fi-crown size-100 disabled"></i>
						<p class='gray-black'><?php echo lang('modals', 'easy_text'); ?></p>
					</div>
					<div class='large-3 columns'>
						<input id='medium' type="radio" name='medium'><label for='medium'><?php echo lang('modals', 'challenge'); ?></label></input>
						<i class="step fi-puzzle size-100 disabled"></i>
						<p class='gray-black'><?php echo lang('modals', 'challenge_text'); ?></p>
					</div>
					<div class='large-3 columns'>
						<input id='hard' type="radio" name='hard'><label for='hard'><?php echo lang('modals', 'hard'); ?></label></input>
						<i class="step fi-sheriff-badge size-100 disabled"></i>
						<p class='gray-black'><?php echo lang('modals', 'hard_text'); ?></p>
					</div>
					<div class='large-3 columns'>
						<input id='mentor' type="radio" name='mentor'><label for='mentor'><?php echo lang('modals', 'mentor'); ?></label></input>
						<i class="step fi-torsos-all size-100 disabled"></i>
						<p class='gray-black'><?php echo lang('modals', 'mentor_text'); ?></p>
					</div>					
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='large-12 columns'>
				<h5 for="remarks"><?php echo lang('modals', 'comments'); ?></h5>
				<textarea placeholder="<?php echo lang('modals', 'i_want_to_collaborate'); ?>" name="remarks" id="remarks"></textarea>
			</div>
		</div>
		<div class='row text-center'>
			<button type='submit'><?php echo lang('modals', 'submit'); ?></button>
		</div>		
	</form>
</div>

<!-- <div id='workshop_modal' class='reveal-modal' data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='row'>
		<div class='large-12 columns text-center'>
			<h2>Soon on Vostlink, a real-time collaborative coding workshop:</h2>
			<img src='/img/workshop.jpg'></img>
		</div>
	</div>
</div> -->

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>