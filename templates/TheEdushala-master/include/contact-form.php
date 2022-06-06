<div class="card">
							<div class="card-header">
								<h3 class="card-title">Contact Us</h3>
							</div>
							<div class="card-body">
								<form method="post" action="../include/send-leads.php">
									<div class="mb-3">
									  <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
                                      <input type="text " class="form-control" id="contact-name"  name="leadname">
									  <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
									  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
									</div>
									<div class="mb-3">
									  <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                                      <input type="text" class="form-control" id="contact-number"  name="leadcontact">
									  <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
									</div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="contact-email" name="leademail">
                                    </div>
									<div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">City</label>
                                        <select name="leadcity" id="enquiry" class="form-control">
													<option value="" class="text-dark">Select City *</option>
													<optgroup label="Metro Cities">
													<option value="New Delhi">New Delhi</option>
													<option value="Mumbai">Mumbai</option>
													<option value="Bangalore">Bangalore</option>
													<option value="Chennai">Chennai</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Kolkata">Kolkata</option>
													<option value="Pune">Pune</option>
													<option value="Ahmedabad">Ahmedabad</option>
													</optgroup>
													<optgroup label="Andaman Nicobar Islands">
													<option value="Andaman Island">Andaman Island</option>
													<option value="Nicobar Islands">Nicobar Islands</option>
													<option value="Other:Andaman">Other</option>
													</optgroup>
													<optgroup label="Arunachal Pradesh">
													<option value="Itanagar">Itanagar</option>
													<option value="Other:Arunachal">Other</option>
													</optgroup>
													<optgroup label="Andhra Pradesh">
													<option value="Hyderabad">Hyderabad</option>
													<option value="Tirupati">Tirupati</option>
													<option value="Vijayawada">Vijayawada</option>
													<option value="Visakhapatnam">Visakhapatnam</option>
													<option value="Warangal">Warangal</option>
													<option value="Other:AndhraPradesh">Other</option>
													</optgroup>
													<optgroup label="Assam">
													<option value="Guwahati">Guwahati</option>
													<option value="Dispur">Dispur</option>
													<option value="Tezpur">Tezpur</option>
													<option value="Other:Assam">Other</option>
													</optgroup>
													<optgroup label="Bihar">
													<option value="Gaya">Gaya</option>
													<option value="Nalanda">Nalanda</option>
													<option value="Patna">Patna</option>
													<option value="Rajgir">Rajgir</option>
													<option value="Vaishali">Vaishali</option>
													<option value="Other:Bihar">Other</option>
													</optgroup>
													<optgroup label="Chhattisgarh">
													<option value="Raipur">Raipur</option>
													<option value="Other:Chhattisgarh">Other</option>
													</optgroup>
													<optgroup label="Delhi">
													<option value="Faridabad">Faridabad</option>
													<option value="Ghaziabad">Ghaziabad</option>
													<option value="Greater Noida">Greater Noida</option>
													<option value="Gurgaon">Gurgaon</option>
													<option value="New Delhi">New Delhi</option>
													<option value="Noida">Noida</option>
													<option value="Other:Delhi">Other</option>
													</optgroup>
													<optgroup label="Goa">
													<option value="Canacona">Canacona</option>
													<option value="Mapusa">Mapusa</option>
													<option value="Margao">Margao</option>
													<option value="Old Goa">Old Goa</option>
													<option value="Panaji">Panaji</option>
													<option value="Ponda">Ponda</option>
													<option value="Vasco Da Gama">Vasco Da Gama</option>
													<option value="Other:Goa">Other</option>
													</optgroup>
													<optgroup label="Gujarat">
													<option value="Ahmedabad">Ahmedabad</option>
													<option value="Anand">Anand</option>
													<option value="Gandhinagar">Gandhinagar</option>
													<option value="Rajkot">Rajkot</option>
													<option value="Surat">Surat</option>
													<option value="Vadodara">Vadodara</option>
													<option value="Other:Gujarat">Other</option>
													</optgroup>
													<optgroup label="Haryana">
													<option value="Chandigarh">Chandigarh</option>
													<option value="Faridabad">Faridabad</option>
													<option value="Gurgaon">Gurgaon</option>
													<option value="Karnal">Karnal</option>
													<option value="Other:Haryana">Other</option>
													</optgroup>
													<optgroup label="Himachal Pradesh">
													<option value="Dharamsala">Dharamsala</option>
													<option value="Kullu">Kullu</option>
													<option value="Manali">Manali</option>
													<option value="Shimla">Shimla</option>
													<option value="Other:HimachalPradesh">Other</option>
													</optgroup>
													<optgroup label="Jammu and Kashmir">
													<option value="Gulmarg">Gulmarg</option>
													<option value="Jammu">Jammu</option>
													<option value="Ladakh">Ladakh</option>
													<option value="Leh">Leh</option>
													<option value="Pahalgam">Pahalgam</option>
													<option value="Srinagar">Srinagar</option>
													<option value="Other:JammuKashmir">Other</option>
													</optgroup>
													<optgroup label="Jharkhand">
													<option value="Dhanbad">Dhanbad</option>
													<option value="Jamshedpur">Jamshedpur</option>
													<option value="Ranchi">Ranchi</option>
													<option value="Other:Jharkhand">Other</option>
													</optgroup>
													<optgroup label="Karnataka">
													<option value="Bangalore">Bangalore</option>
													<option value="Davangere">Davangere</option>
													<option value="Hampi">Hampi</option>
													<option value="Hassan">Hassan</option>
													<option value="Hubli">Hubli</option>
													<option value="Mangalore">Mangalore</option>
													<option value="Mysore">Mysore</option>
													<option value="Udupi">Udupi</option>
													<option value="Other:Karnataka">Other</option>
													</optgroup>
													<optgroup label="Kerala">
													<option value="Alleppey">Alleppey</option>
													<option value="Cochin">Cochin</option>
													<option value="Kovalam">Kovalam</option>
													<option value="Kozhikode">Kozhikode</option>
													<option value="Kumarakom">Kumarakom</option>
													<option value="Munnar">Munnar</option>
													<option value="Quilon">Quilon</option>
													<option value="Thekkady">Thekkady</option>
													<option value="Trivandrum">Trivandrum</option>
													<option value="Other:Kerala">Other</option>
													</optgroup>
													<optgroup label="Lakshadweep">
													<option value="Lakshadweep">Lakshadweep</option>
													<option value="Other:Lakshadweep">Other</option>
													</optgroup>
													<optgroup label="Madhya Pradesh">
													<option value="Bhopal">Bhopal</option>
													<option value="Gwalior">Gwalior</option>
													<option value="Indore">Indore</option>
													<option value="Khajuraho">Khajuraho</option>
													<option value="Orchha">Orchha</option>
													<option value="Ujjain">Ujjain</option>
													<option value="Other:MadhyaPradesh">Other</option>
													</optgroup>
													<optgroup label="Maharashtra">
													<option value="Amravati">Amravati</option>
													<option value="Aurangabad">Aurangabad</option>
													<option value="Mumbai">Mumbai</option>
													<option value="Nagpur">Nagpur</option>
													<option value="Nashik">Nashik</option>
													<option value="Navi Mumbai">Navi Mumbai</option>
													<option value="Pune">Pune</option>
													<option value="Thane">Thane</option>
													<option value="Other:Maharashtra">Other</option>
													</optgroup>
													<optgroup label="Manipur">
													<option value="Imphal">Imphal</option>
													<option value="Other:Manipur">Other</option>
													</optgroup>
													<optgroup label="Meghalaya">
													<option value="Shillong">Shillong</option>
													<option value="Other:Meghalaya">Other</option>
													</optgroup>
													<optgroup label="Mizoram">
													<option value="Aizawl">Aizawl</option>
													<option value="Other:Mizoram">Other</option>
													</optgroup>
													<optgroup label="Nagaland">
													<option value="Kohima">Kohima</option>
													<option value="Other:Nagaland">Other</option>
													</optgroup>
													<optgroup label="Odisha">
													<option value="Bhubaneswar">Bhubaneswar</option>
													<option value="Cuttack">Cuttack</option>
													<option value="Konark">Konark</option>
													<option value="Puri">Puri</option>
													<option value="Other:Odisha">Other</option>
													</optgroup>
													<optgroup label="Pondicherry">
													<option value="Pondicherry">Pondicherry</option>
													<option value="Other:Pondicherry">Other</option>
													</optgroup>
													<optgroup label="Punjab">
													<option value="Amritsar">Amritsar</option>
													<option value="Ludhiana">Ludhiana</option>
													<option value="Patiala">Patiala</option>
													<option value="Phagwara">Phagwara</option>
													<option value="Other:Punjab">Other</option>
													</optgroup>
													<optgroup label="Rajasthan">
													<option value="Ajmer">Ajmer</option>
													<option value="Alwar">Alwar</option>
													<option value="Bhilwara">Bhilwara</option>
													<option value="Bikaner">Bikaner</option>
													<option value="Bundi">Bundi</option>
													<option value="Jaisalmer">Jaisalmer</option>
													<option value="Jaipur">Jaipur</option>
													<option value="Jodhpur">Jodhpur</option>
													<option value="Kota">Kota</option>
													<option value="Ranakpur">Ranakpur</option>
													<option value="Shekhawati">Shekhawati</option>
													<option value="Udaipur">Udaipur</option>
													<option value="Other:Rajasthan">Other</option>
													</optgroup>
													<optgroup label="Sikkim">
													<option value="Gangtok">Gangtok</option>
													<option value="Other:Sikkim">Other</option>
													</optgroup>
													<optgroup label="Tamil Nadu">
													<option value="Chennai">Chennai</option>
													<option value="Coimbatore">Coimbatore</option>
													<option value="Kanyakumari">Kanyakumari</option>
													<option value="Kodaikanal">Kodaikanal</option>
													<option value="Madurai">Madurai</option>
													<option value="Ooty">Ooty</option>
													<option value="Rameshwaram">Rameshwaram</option>
													<option value="Thanjavur">Thanjavur</option>
													<option value="Trichy">Trichy</option>
													<option value="Other:TamilNadu">Other</option>
													</optgroup>
													<optgroup label="Tripura">
													<option value="Agartala">Agartala</option>
													<option value="Other:Tripura">Other</option>
													</optgroup>
													<optgroup label="Uttar Pradesh">
													<option value="Agra">Agra</option>
													<option value="Aligarh">Aligarh</option>
													<option value="Allahabad">Allahabad</option>
													<option value="kanpur">kanpur</option>
													<option value="Lucknow">Lucknow</option>
													<option value="Meerut">Meerut</option>
													<option value="Muzaffarnagar">Muzaffarnagar</option>
													<option value="Varanasi">Varanasi</option>
													<option value="Other:UttarPradesh">Other</option>
													</optgroup>
													<optgroup label="Uttarakhand/Uttaranchal">
													<option value="Dehradun">Dehradun</option>
													<option value="Haridwar">Haridwar</option>
													<option value="Nainital">Nainital</option>
													<option value="Rishikesh">Rishikesh</option>
													<option value="Roorkee">Roorkee</option>
													<option value="Other:Uttaranchal">Other</option>
													</optgroup>
													<optgroup label="West Bengal">
													<option value="Burdwan">Burdwan</option>
													<option value="Darjeeling">Darjeeling</option>
													<option value="Durgapur">Durgapur</option>
													<option value="Kolkata">Kolkata</option>
													<option value="Murshidabad">Murshidabad</option>
													<option value="Siliguri">Siliguri</option>
													<option value="Other:WestBengal">Other</option>
													</optgroup>																			
											</select>
                                    </div>
									<!-- <div class="mb-3 form-check">
									  <input type="checkbox" class="form-check-input" id="exampleCheck1">
									  <label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div> -->
                                    <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label">Select Your Course</label>
                                <!-- <input type="email" class="form-control" id="contact-email" placeholder="Email address"> -->
                                        <select  class="form-control" name="leadcourse">
                                        
                                        <option selected value="MBA">MBA</option>
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
									<div class="align-item-center" style="width:100%;">
									<button type="submit" class="btn btn-primary ">Submit</button>
									</div>
								</form>
								<!-- <div class="form-group">
									<input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control form-select select2-show-search">
										<option value="1" selected>All Categories</option>
										<option value="2">Web Security</option>
										<option value="3">Unix</option>
										<option value="4">Business</option>
										<option value="5">.Net</option>
										<option value="6">Data Science</option>
										<option value="7">Salesforce</option>
										<option value="8">Education</option>
										<option value="9">Electronics</option>
										<option value="10">Digital Marketing</option>
										<option value="11">Computer</option>
										<option value="12">Mobile Computing</option>
										<option value="13">Coding</option>
										<option value="14">Python</option>
										<option value="15">Security Hacking</option>
									</select>
								</div>
								<div >
									<a href="javascript:void(0)" class="btn  btn-primary">Search</a>
								</div> -->
							</div>
						</div>