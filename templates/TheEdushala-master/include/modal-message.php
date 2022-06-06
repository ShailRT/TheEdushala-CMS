



<div class="modal fade" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="examplecontactLongTitle">
                            <?php 
                            if(isset($coursename)){
                                echo $coursename;
                            }elseif(isset($collegename)){
                                echo $collegename;
                            }else{
                                echo "name not set";
                            }
                            ?>
                        </h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
                    <form method="post" action="../include/send-leads.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text " class="form-control" id="contact-name" placeholder="Your Name" name="leadname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact-number" placeholder="Contact Number" name="leadcontact">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="contact-email" placeholder="Email address" name="leademail">
                            </div>
                            <!-- <div class="form-group mb-0">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                            </div> -->
                            <div class="form-group">
                                <!-- <input type="email" class="form-control" id="contact-email" placeholder="Email address"> -->
                                <select  class="form-control" name="leadcourse">
                                <option selected >Course Your Intrested In</option>
                                <option value="MBA">MBA</option>
                                <option value="BED">B.Ed</option>
                                <option value="MSC">MSc</option>
                                <option value="MCA">MCA</option>
                                <option value="MA">MA</option>
                                <option value="Ph d">Ph d</option>
                                <option value="BA">BA</option>
                                <option value="Bpharma">Bpharma</option>
                                <option value="LLM">LLM</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <?php
                            // Program to display URL of current page.
                            
                            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                                $link = "https";
                            else
                                $link = "http";
                            
                            // Here append the common URL characters.
                            $link .= "://";
                            
                            // Append the host(domain name, ip) to the URL.
                            $link .= $_SERVER['HTTP_HOST'];
                            
                            // Append the requested resource location to the URL
                            $link .= $_SERVER['REQUEST_URI'];
                                
                            // Print the link
                            
                            ?>
                                <input type="hidden" class="form-control" id="contact-url" name="leadurl" value="<?php echo $link; ?>">
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>