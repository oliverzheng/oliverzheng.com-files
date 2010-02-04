<?
$body_id = 'contact';
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
				<h2><img src="./images/titles/short_contact_alpine_group.png" /></h2>
				<div id="page_content_indent_more">
					<p><span class="highlight_darkgreen">New Jersey</span><br />
					Street Address<br />
					City, State, Zip Code<br />
					Email Address<br />
					Telephone<br />
					Fax<br /></p>
					<p><span class="highlight_darkgreen">New York</span><br />
					Street Address<br />
					City, State, Zip Code<br />
					Email Address<br />
					Telephone<br />
					Fax<br /></p>
				</div>
				<h2 class="margin_top_15_add"><img src="./images/titles/short_general_inquiries.png" /></h2>
				<div id="page_content_indent_more">
				<form name="contact_form" method="post" action="about.html">
				<table class="plain padding">
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="firstname">First Name</label></td>
						<td><input type="text" class="content_text text" id="firstname" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="lastname">Last Name</label></td>
						<td><input type="text" class="content_text text" id="lastname" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="email">Email Address</label></td>
						<td><input type="text" class="content_text text" id="email" /></td>
					</tr>
					<tr>
						<td class="align_right"><label class="highlight_darkgreen" for="telephone">Telephone</label></td>
						<td><input type="text" class="content_text text" id="telephone" /></td>
					</tr>
					<tr>
						<td class="align_right valign_top"><label class="highlight_darkgreen" for="message">Message</label></td>
						<td><textarea class="content_text" id="message"></textarea></td>
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