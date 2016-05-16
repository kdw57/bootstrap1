<?php

	// Emails a confirmation to customer
	$to = $email;
	$subject = 'CM Event Registration Confirmation';
	$msg = "
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta id='view' name='viewport' content='width=device-width, initial-scale=1.0' />
		<title>CM Event Contact Confirmation</title>
		<style>
		@media screen and (min-width: 150px) and (max-width: 480px) {  
		html, body { 
			margin:0;
			padding:0;
			background-color:#ffffff;
		}
		.main_table {
			max-width:480px !important;
		}
		.banner_mobile {
			height:400px !important;
			background:url() no-repeat top #ffffff;
			background-size:contain;
		}
		.banner_mobile img {
			display:none !important;
		}
		.full_width td, img.full_width {
			display:block !important;
		}
		.body_text {
			font-size:16px !important;
		}
		.rombus {
			width:12px !important;
		}
		.main_table, .banner_mobile, .full_width td, img.full_width, .line, .social, .contact {
			width:100% !important;
			font-size:14px !important;
		}
		.mobile_button {
			width:100% !important;
		}
		.social img {
			width:48px !important;
		}
		.contact br {
			display:block !important;
		}
		}
		</style>
		</head>
		
		<body style='margin:0 auto;' bgcolor='#ffffff'>
		
		<!-- TIP: Try to keep the subject line to around 25 characters -->
		
		<!-- Preheader Text, This is a short summary that follows the subject line and is hidden in the main body of the email. Try to keep this to around 140 characters or 25 words. -->
		<span style='display:none; font-size:1px; color:#ffffff;'>CM Event Contact Confirmation</span>
		
		<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ffffff'>
		
			<tr>
				<td>
					<table width='596' border='0' cellspacing='20' cellpadding='0' bgcolor='#ffffff' align='center' class='main_table'>
		
						<!-- Logo Space -->            	
						<tr>
							<td valign='middle' align='right'>
								<img src='192.168.0.200/website-temp/img/logo.png' title='Create Motion' alt='Create Motion' style='display:block; font-family:Arial, Helvetica, sans-serif; font-size:40px; color:#000000; line-height:1.2em;' border='0' class='full_width' width='270' />
							</td>
						</tr>
						<!-- END Logo Space -->            	
						
						<!-- Contact Form -->
						<tr>
							<td>
								
								<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left;'>
									<tr>
										<td>
											<font color='#906' style='font-size:18px; text-align:left; line-height:1em;' face='Arial, Helvetica, sans-serif' class='header'>
												<strong>Thank you for contacting us</strong>
											</font><br/><br/>
											
											<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
												Please note this is an automated response, do not reply to this email.
												
												For reference, here is a copy of the information you gave us:<br/><br/>
												
												<table width='100%' border='0' cellspacing='0' cellpadding='15' style='font-family:Arial, Helvetica, sans-serif; font-size:14px; border:1px solid #ccccce;'>
												  <tr>
													<td bgcolor='#906' style='color:#ffffff;' align='left' width='25%' valign='top' colspan='2'>
														<font color='#ffffff' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															<strong>CM Event Contact Confirmation</strong>
														</font>
													</td>
												  </tr>
												  <tr>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															Name
														</font>
													</td>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															$name
														</font>
													</td>
												  </tr>
												  <tr>
													<td bgcolor='#e4e5e7' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															Email
														</font>
													</td>
													<td bgcolor='#e4e5e7' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															$email
														</font>
													</td>
												  </tr>
												  <tr>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															Organisation
														</font>
													</td>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															$organisation
														</font>
													</td>
												  </tr>
												  <tr>
													<td bgcolor='#e4e5e7' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															Job Title
														</font>
													</td>
													<td bgcolor='#e4e5e7' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															$job_title
														</font>
													</td>
												  </tr>
												  <tr>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															Message
														</font>
													</td>
													<td bgcolor='#f1f3f2' style='color:#58595b;' align='left' valign='top'>
														<font color='#777777' style='font-size:14px; text-align:left; line-height:1.2em;' face='Arial, Helvetica, sans-serif' class='body_text'>
															$message
														</font>
													</td>
												  </tr>
												</table>
												
											</font>
		
										</td>
									</tr>
								</table>
		
							</td>
						</tr>
						<!-- END Contact Form -->
		
					</table>
				</td>
			</tr>
		</table>
		</body>
		</html>
	";
	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
	// $headers .= 'To:' . "\n";
	$headers .= 'From: Mark Lanham <mark.lanham@konicaminolta.co.uk>' . "\n";
	// $headers .= 'Cc: Mark Lanham <mark.lanham@konicaminolta.co.uk>' . "\n";
	// $headers .= 'Bcc: Mark Lanham <mark.lanham@konicaminolta.co.uk>' . "\n";
	
	mail($to, $subject, $msg, $headers);

?>