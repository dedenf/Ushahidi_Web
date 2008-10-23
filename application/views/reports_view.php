		<div id="content">
		  <div class="content-bg">
		    <!-- start incident block -->
		    <div class="big-block">
		      <div class="big-block-top">
		        <div class="big-block-bottom">
		          <div class="incident-name">
		            <h1><?php echo $incident_title; ?></h1>
		            <ul>
		              <li>
		                <strong>LOCATION</strong>
		                <p><?php echo $incident_location; ?></p>
		              </li>
		              <li>
		                <strong>DATE</strong>
		                <p><?php echo $incident_date; ?></p>
		              </li>
		              <li>
		                <strong>TIME</strong>
		                <p><?php echo $incident_time; ?></p>
		              </li>
		              <li>
		                <strong>CATEGORY</strong>
		                <p><?php echo $incident_category; ?></p>
		              </li>
		              <li>
		                <strong>ENTITY</strong>
		                <p>N/A</p>
		              </li>
		              <li>
		                <strong>VERIFIED</strong>
		                <?php echo $incident_verified; ?>
		              </li>
		            </ul>
		          </div>
		          <div class="incident-map">
		            <ul class="legend">
		              <li class="ico-red">INCIDENT</li>
		              <li class="ico-orange">NEARBY INCIDENTS</li>
		            </ul>
		            <div class="map-holder" id="map"></div>
		          </div>
		          <div class="report-description">
		            <div class="title">
		              <h2>Incident Report Description</h2>
		              <a href="#comments"><span>+ add information</span></a>
		            </div>
		            <div class="orig-report">
		              <div class="report">
		                <h4>Original Report</h4>
		                <p><?php echo $incident_description; ?></p>
						<div class="report_rating">
							<div>
							Credibility:&nbsp;
							<a href="javascript:rating('<?php echo $incident_id; ?>','add','original','oloader_<?php echo $incident_id; ?>')"><img id="oup_<?php echo $incident_id; ?>" src="<?php echo url::base() . 'media/img/'; ?>up.png" alt="UP" title="UP" border="0" /></a>&nbsp;
							<a href="javascript:rating('<?php echo $incident_id; ?>','subtract','original')"><img id="odown_<?php echo $incident_id; ?>" src="<?php echo url::base() . 'media/img/'; ?>down.png" alt="DOWN" title="DOWN" border="0" /></a>&nbsp;
							</div>
							<div class="rating_value" id="orating_<?php echo $incident_id; ?>"><?php echo $incident_rating; ?></div>
							<div id="oloader_<?php echo $incident_id; ?>" class="rating_loading" ></div>
						</div>
		              </div>
		            </div>
		            <div class="orig-report">
		              <div class="discussion">
		                <h5>ADDITIONAL REPORTS AND DISCUSSION&nbsp;&nbsp;&nbsp;(<a href="#comments">Add</a>)</h5>
						<?php echo $incident_comments; ?>
		              </div>
		            </div>		
		          </div>
		        </div>
		      </div>
		    </div>
		    <!-- end incident block <> start other report -->
		    <div class="blocks-holder">
		      <!-- start images -->
		      <div class="small-block images">
		        <h3>Images</h3>
		        <div class="block-bg">
		          <div class="block-top">
		            <div class="block-bottom">
		              <div class="photoslider" id="default"></div>
					</div>
		          </div>
		        </div>
		      </div>
		      <!-- end images <> start side block -->
		      <div class="side-block">
		        <div class="small-block">
		          <h3>Incident Report(s)</h3>
		          <div class="block-bg">
		            <div class="block-top">
		              <div class="block-bottom">
		                <ul>
		                  <li>
		                    <ul class="title">
		                      <li class="w-01">TITLE</li>
		                      <li class="w-02">LOCATION</li>
		                      <li class="w-03">DATE</li>
		                    </ul>
		                  </li>
		                  <?php echo $incident_neighbors; ?>
		                </ul>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="small-block">
		          <h3>Related Mainstream News of Incident</h3>
		          <div class="block-bg">
		            <div class="block-top">
		              <div class="block-bottom">
		                <ul>
		                  <li>
		                    <ul class="title">
		                      <li class="w-01">TITLE</li>
		                      <li class="w-02">SOURCE</li>
		                      <li class="w-03">DATE</li>
		                    </ul>
		                  </li>
		                  <li>
		                    <ul>
		                      <li class="w-01"><a href="#">Church burned in burned in Eldoret with...</a></li>
		                      <li class="w-02">BBC</li>
		                      <li class="w-03">18 Jan 2008</li>
		                    </ul>
		                  </li>
		                  <li>
		                    <ul>
		                      <li class="w-01"><a href="#">Thousands trapped in trapped in forest....</a></li>
		                      <li class="w-02">Yahoo!</li>
		                      <li class="w-03">18 Jan 2008</li>
		                    </ul>
		                  </li>
		                  <li>
		                    <ul>
		                      <li class="w-01"><a href="#">Church burned in burned in Eldoret with...</a></li>
		                      <li class="w-02">BBC</li>
		                      <li class="w-03">18 Jan 2008</li>
		                    </ul>
		                  </li>
		                  <li>
		                    <ul>
		                      <li class="w-01"><a href="#">Thousands trapped in trapped in forest....</a></li>
		                      <li class="w-02">Yahoo!</li>
		                      <li class="w-03">18 Jan 2008</li>
		                    </ul>
		                  </li>
		                </ul>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		      <!-- end side block -->
		    </div>
		    <!-- end incident block <> start other report -->
			<a name="comments"></a>
			<div class="big-block">
				<div class="big-block-top">
				<div class="big-block-bottom">
					<div id="comments" class="report_comment">
						<?php
						if ($form_error) {
						?>
							<!-- red-box -->
							<div class="red-box">
								<h3>Error!</h3>
								<ul>
								<?php
								foreach ($errors as $error_item => $error_description)
								{
									print (!$error_description) ? '' : "<li>" . $error_description . "</li>";
								}
								?>
								</ul>
							</div>
						<?php
						}
						?>
						<?php print form::open(NULL, array('id' => 'commentForm', 'name' => 'commentForm')); ?>
						<div class="report_row">
                        	<strong>Name:</strong><br />
							<?php print form::input('comment_author', $form['comment_author'], ' class="text"'); ?>
                        </div>
						<div class="report_row">
                        	<strong>E-Mail:</strong><br />
							<?php print form::input('comment_email', $form['comment_email'], ' class="text"'); ?>
                        </div>
						<div class="report_row">
							<strong>Comments:</strong><br />
							<?php print form::textarea('comment_description', $form['comment_description'], ' rows="4" cols="40" class="textarea long" ') ?>
                        </div>
						<div class="report_row">
							<strong>Security Code:</strong><br />
							<?php print $captcha->render(); ?><br />
							<?php print form::input('captcha', $form['captcha'], ' class="text"'); ?>
                        </div>
                        <div class="report_row">
                        	<input name="submit" type="submit" value="Submit Comment" class="btn_blue" />
                        </div>
						<?php print form::close(); ?>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
