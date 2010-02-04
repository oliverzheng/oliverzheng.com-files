<?
$body_id = 'services';
$body_cols = 'two_cols';
$page_title = 'Alpine Group';

include('./includes/header.php');
?>
	<div id="page_flash">
	</div><!-- #page_flash -->
	
	<div id="page_main">
		<div id="page_content">
<?
include('./includes/sidebar.php');
?>
			<div id="page_content_right">
				<h2><img src="./images/titles/short_report_a_loss.png" /></h2>
				<div id="page_content_indent_more">
				<form name="contact_form" method="post" action="about.html">
				<table class="plain padding">
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="alpinedivision">Alpine Division</label></td>
						<td><select class="content_text" id="alpinedivision"><option>option 1</option><option>option2</option></select>
							<span class="highlight_maroon">*</span></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="firstname">First Name</label></td>
						<td><input type="text" class="content_text text" id="firstname" />
						<span class="highlight_maroon">*</span></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="lastname">Last Name</label></td>
						<td><input type="text" class="content_text text" id="lastname" />
						<span class="highlight_maroon">*</span></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="company">Company</label></td>
						<td><input type="text" class="content_text text" id="company" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="address">Street Address</label></td>
						<td><input type="text" class="content_text text" id="address" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="address2">Address Line 2</label></td>
						<td><input type="text" class="content_text text" id="address2" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="city">City</label></td>
						<td><input type="text" class="content_text text" id="city" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="state">State</label></td>
						<td><input type="text" class="content_text text" id="state" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="zip">Zip Code</label></td>
						<td><input type="text" class="content_text text" id="zip" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="telephone">Telephone</label></td>
						<td><input type="text" class="content_text text" id="telephone" />
						<span class="highlight_maroon">*</span></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="email">Email Address</label></td>
						<td><input type="text" class="content_text text" id="email" />
						<span class="highlight_maroon">*</span></td>
					</tr>
					<tr>
						<td class="align_right valign_top"><label class="highlight_darkgreen" for="message">Description of Loss</label></td>
						<td><textarea class="content_text" id="message"></textarea></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="insurance">Insurance&nbsp;Company&nbsp;(if&nbsp;any)</label></td>
						<td><input type="text" class="content_text text" id="insurance" /></td>
					</tr>
				</table>
				</form>
				<p class="align_center"><a href="javascript: document.contact_form.submit();" onclick=""><img src="./images/badges/button_submit.png" /></a></p>
				</div>
			</div>
			<div class="float_clearer"><hr /></div>
		</div>
  </div><!-- #page_main -->
<?
include('./includes/footer.php');
?>