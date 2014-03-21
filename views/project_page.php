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
							<h2 class='gray-white'>Sketches:</h2>
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
													echo "<img src='/img/$image_path'/>";
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
								<h2 class='gray-white'>Description:</h2>
								<p><?php echo lang($project, 'long_description'); ?></p>
							</div>
						</div>
					</div>

					<div class='row'>
						<div class='large-12 columns'>
							<div id='collaborate-buttons' class='row text-center'>
								<a class='' data-reveal-id="contribute_modal" data-reveal>
									<div class='large-4 columns line-right'>
										<i class="step fi-clipboard-notes size-72"></i>
										<h2>Join project</h2>
										<p class='black'>Jump right into the challenges, learn, collaborate and earn badges while you complete them!</p>
									</div>
								</a>
								<a class='' data-reveal-id="peek_modal" data-reveal>
									<div class='large-4 columns line-right'>
										<i class="step fi-comments size-72"></i>
										<h2>Take a peek</h2>
										<p class='black'>Take a look at the challenges that others are doing. Click to see the Trello board.</p>
									</div>
								</a>
								<!-- <a class='black'>
									<div class='large-3 columns line-right'>
										<i class="step fi-social-skillshare size-48"></i>
										<h3>Online classroom</h3>
										<p class='black'>Start getting skills to contribute to this project while you earn badges. Start from knowing nothing.</p>
									</div>
								</a> -->
								<a class='' data-reveal-id="workshop_modal" data-reveal>
									<div class='large-4 columns'>
										<i class="step fi-wrench size-72 disabled"></i>
										<h2 class='gray-white' >The workshop</h2>
										<p class='gray-white'>See the app source code and make realtime changes, start coding and collaborating!</p>
									</div>
								</a>
							</div>
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
								<h5>Scope</h5>
								<?php
									$result = explode('|', lang($project, 'scope'));
									foreach ($result as $row)
									{
										$icon_class = lang($row, 'icon');
										$title = lang($row, 'title');;
										
										echo "<div class='large-6 columns'>";
											echo "<i data-tooltip class='$icon_class size-100 icon-tooltip has-tip tip-top' title='$title'></i>";
										echo "</div>";										
									}
								?>
							</div>
						</div>
						
						<div class='spacer-height-small'></div>

						<div class='row'>
							<div class='large-12 columns'>
								<h5>Technologies</h5>
								<?php
									$result = explode('|', lang($project, 'techs'));
									foreach ($result as $row)
									{
										$image_id = lang($row, 'image_id');
										$offset = $image_id * -100;
										echo "<div class='large-6 columns'>";
											echo "<div class='test_1'>";
												echo "<div class='course' style='background-position:" . $offset . "px 0px;'></div>";
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
								<h5>Current progress</h5>
								<div class="radius progress progress-style">
								  <span style="width: <?php echo lang($project, 'progress'); ?>%" class="meter"></span>
								</div>
							</div>
						</div>
					
						<div class='spacer-height-small'></div>
						
						<div class='row'>
							<div class='large-12 columns'>
								<h5>Backers</h5>
								
								<?php
									$backers = lang($project, 'backers');
									if ($backers != '')
									{
										echo $backers;
									}
								?>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								<!-- <p>Helping this project is only one Tweet away:</p> -->
								<p>Show your interest in this project with a Tweet:</p>
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

<div id='peek_modal' class='reveal-modal' data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='row'>
		<div class='large-12 columns text-center'>
			<!-- <h2>Collaborate to complete this project along with other learners while you win badges! This is how the challenges look like:</h2> -->
			<h2>We can take you from knowing nothing to start collaborating on this project along with other students. This is how the challenges board looks like:</h2>
			<div class='row'>
				<div class='large-8 large-centered columns'>
					<img src='/img/trello.jpg'></img>					
				</div>				
			</div>
			<br/>
			<?php
				$trello_path = lang($project, 'trello');
				if ($trello_path == '')
				{
					echo "<h2>Unfortunately there are no students yet on this project, please check back later or join the project today.</h2>";
				} else
				{
					//echo "<h2>Click <a href='$trello_path'>here</a> to take a peek into this board.</h2>";
					echo "<a href='$trello_path' target='_blank' class='button'>Click here to take a peek into this board.</a>";
				}			
			?>			
		</div>
	</div>
</div>

<div id='workshop_modal' class='reveal-modal' data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<div class='row'>
		<div class='large-12 columns text-center'>
			<h2>Soon on Vostlink, a real-time collaborative coding workshop:</h2>
			<img src='/img/workshop.jpg'></img>
		</div>
	</div>
</div>

<div id="contribute_modal" class="reveal-modal" data-reveal>
	<h2>Thanks for showing your interest in this project! <br/>Please fill the following fields. You will receive an e-mail from us.</h2>
	<a class="close-reveal-modal">&#215;</a>

	<form data-abide action="/page/joinProject" method='POST' class='custom'>
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
		<!-- <div class='row'>
			<div class='large-10 large-centered columns text-center'>
				<h5>How would you like to contribute?</h5>
				<div class='row'>
					<div class='large-6 columns'>
						<input type="radio" name='help-type' checked><label>Jump right into the challenges!</label></input>
						<i class="step fi-checkbox size-100 disabled"></i>
						<p class='gray-black'>For this app we have some challenges to be solved, you can solve them while you earn badges. You can complete challenges from knowing nothing to start collaborating!</p>
					</div>
					<div class='large-6 columns'>
						<input type="radio" name='help-type'><label>Back this project</label></input>
						<i class="step fi-social-twitter size-100 disabled"></i>
						<p class='gray-black'>By tweeting this project you are helping it! Write something like "I like this project!" or "Check out this app". Don't forget to include the link!</p>
					</div>
				</div>
			</div>
		</div> -->
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
</div>

<?php $this->load->view('sections/footer'); ?>
<?php $this->load->view('sections/footer_scripts'); ?>