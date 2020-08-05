<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Documentation - Merge Code Admin Panel</title>
	<style type="text/css">
		.list-style-none {
			list-style-type: none;
		}
		ul>a {
			color:black;
			text-decoration: none;
		}
		ul>a:hover {
			color:white;
			text-decoration: none;
		}
		.col-10>div{
			padding: 1.5% 4% 1.5%;
		}
	</style>
</head>
<body class="container-fluid h-100">
	<div class="row">
		<div class="col-2 float-left" style="background-color: grey">
			<img src="images/logo.png" style="width:100%;" />
			<ul class="list-style-none">
				<a href="index.php#start"><li>Start</li></a>
				<a href="index.php#upload"><li>Upload Merge Code Admin Panel</li></a>
				<a href="index.php#update_settings"><li>Update Settings</li></a>
				<a href="index.php#email_settings"><li>E-Mail Settings</li></a>
				<a href="index.php#seo_settings"><li>SEO Settings</li></a>
				<a href="index.php#integrate_theme"><li>Integrate Theme</li></a>
				<a href="index.php#integrate_code"><li>EIntegrate Code</li></a>
				<a href="index.php#supported_api"><li>Supported API</li></a>
			</ul>
		</div>
		<div class="col-10 float-left p-0">
			<div id="start" style="background-color: #eeeeee">
				<h3>Merge Code Admin Panel</h3>
				<code>Created: 17.08.2020</code>
				<p>Tahnk you four purchasing our template!</p>
				<p>If you have any issue or question that this document does not cover, feel free to contact us.</p>
			</div>
			<div id="upload">
				<h3>Upload Merge Code Admin Panel</h3>
				<ul>
					<li>Upload our panel (mc-admin files) to your public_html</li>
					<li>Create a database named "admin" and upload our table sql files to your phpmyadmin</li>
					<li>Login to admin panel (email: admin@gmail.com , password: admin)</li>
					<li>Update connect.php file</li>
				</ul>
			</div>
			<div id="update_settings" style="background-color: #eeeeee">
				<h3>Update Settings</h3>
				<ul>
					<li>Change your username, email, password on settings page</li>
				</ul>
			</div>
			<div id="email_settings">
				<h3>Change E-Mail Settings</h3>
				<ul>
					<li>Go to E-Mail Settings page</li>
					<li>Change settings, you can learn your settings from your hosting company</li>
				</ul>
			</div>
			<div id="seo_settings" style="background-color: #eeeeee">
				<h3>Change Your Seo Settings (And some web site settings)</h3>
				<ul>
					<li>Go to seo settings page (Settings -> Seo Settings)</li>
					<li>Change title, description, keywords and etc.</li>
					<li>And you can see your On-Site SEO Score</li>
				</ul>
				<ul>
					<li>
						<h3>Get Your Title, Description and keywords</h3>
						<code>
							&#60;?php <br>
								&emsp;include("mc-admin/connect.php");<br>
								&emsp;$query = $conn->query("SELECT * FROM seo");<br>
								&emsp;while ($read_query = mysqli_fetch_array($query)) {<br>
									&emsp;&emsp;$title = $read_query["title"];<br>
									&emsp;&emsp;$descrip = $read_query["descrip"];<br>
									&emsp;&emsp;$keywords = $read_query["keywords"];<br>
								&emsp;}<br>
							?&#62;
							<br>
						</code>
						<h5>For write title:<code> &#60;?php echo $title; ?&#62;</code> </h5>
						<h5>For write description:<code> &#60;?php echo $descrip; ?&#62;</code> </h5>
						<h5>For write keywords:<code> &#60;?php echo $keywords; ?&#62;</code> </h5>
					</li>
				</ul>
			</div>
			<div id="integrate_theme">
				<h3>Integrate to Theme</h3>
				<ul>
					<li>Add your logo with this code:</li>
					<code>&#60;img src="mc-admin/images/logo.png" title="LOGO" alt="LOGO" /&#62;</code>
					<li>Login to admin panel (email: admin@gmail.com , password: admin)</li>
				</ul>
			</div>
			<div id="integrate_code" style="background-color: #eee">
				<h3>About Us Page Integrate Code:</h3>
					<ul><li><code>
						&#60;?php <br>
							&emsp;include("mc-admin/connect.php");<br>
							&emsp;$query = $conn->query("SELECT * FROM about_us");<br>
							&emsp;while ($read_query = mysqli_fetch_array($query)) {<br>
								&emsp;&emsp;$title = $read_query["title"];<br>
								&emsp;&emsp;$content = $read_query["content"];<br>
							&emsp;}<br>
						?&#62;
						<br></code>
						<h5>For write title:<code> &#60;?php echo $title; ?&#62;</code> </h5>
						<h5>For write content:<code> &#60;?php echo $content; ?&#62;</code> </h5>
					</li></ul>
				<h3>Blog Page Integrate Code:</h3>
					<ul><li><code>
						&#60;?php <br>
							&emsp;include("mc-admin/connect.php");<br>
							&emsp;$query = $conn->query("SELECT * FROM blog");<br>
							&emsp;while ($read_query = mysqli_fetch_array($query)) {<br>
								&emsp;&emsp;$title = $read_query["title"];<br>
								&emsp;&emsp;$content = $read_query["content"];<br>
								&emsp;&emsp;$descrip = $read_query["descrip"];<br>
								&emsp;&emsp;$keywords = $read_query["keywords"];<br>
								&emsp;&emsp;$view = $read_query["view"];<br>
								&emsp;&emsp;$post_date = $read_query["post_date"];<br>
							&emsp;}<br>
						?&#62;
						<br></code>
						<h5>For write title:<code> &#60;?php echo $title; ?&#62;</code> </h5>
						<h5>For write content:<code> &#60;?php echo $content; ?&#62;</code> </h5>
						<h5>For write description:<code> &#60;?php echo $descrip; ?&#62;</code> </h5>
						<h5>For write keywords:<code> &#60;?php echo $keywords; ?&#62;</code> </h5>
						<h5>For write view:<code> &#60;?php echo $view; ?&#62;</code> </h5>
						<h5>For write post date:<code> &#60;?php echo $post_date; ?&#62;</code> </h5>
					</li>
					<li><code>
						&#60;?php <br>
							&emsp;include("mc-admin/connect.php");<br>
							&emsp;$query = $conn->query("SELECT * FROM comments");<br>
							&emsp;while ($read_query = mysqli_fetch_array($query)) {<br>
								&emsp;&emsp;$title = $read_query["title"];<br>
								&emsp;&emsp;$content = $read_query["content"];<br>
								&emsp;&emsp;$post_id = $read_query["post_id"];<br>
								&emsp;&emsp;$confirmation = $read_query["confirmation"];<br>
							&emsp;}<br>
						?&#62;
						<br></code>
						<h5>For write comment title:<code> &#60;?php echo $title; ?&#62;</code> </h5>
						<h5>For write comment content:<code> &#60;?php echo $content; ?&#62;</code> </h5>
						<h5>For write post id:<code> &#60;?php echo $post_id; ?&#62;</code> </h5>
						<h5>For write confirmation (0 rejected, 1 accepted):<code> &#60;?php echo $confirmation; ?&#62;</code> </h5>
					</li></ul>
			</div>
			<div id="supported_api">
				<h3>Add Google Analytics Integrate Code: (add to theme footer.php)</h3>
					<ul><li><code>
						&#60;?php <br>
							&emsp;include("mc-admin/connect.php");<br>
							&emsp;$query = $conn->query("SELECT * FROM seo");<br>
							&emsp;while ($read_query = mysqli_fetch_array($query)) {<br>
								&emsp;&emsp;$analytics_id = $read_query["analytics"];<br>
							&emsp;}<br>
						?&#62;
						<br>
						<!-- Global site tag (gtag.js) - Google Analytics -->
						&#60;script async src="https://www.googletagmanager.com/gtag/js?id=&#60;?php echo $analytics_id; ?&#62;"&#62;&#60;/script&#62<br>
						&#60;script&#62;<br>
						&emsp;  window.dataLayer = window.dataLayer || [];<br>
						  &emsp;function gtag(){dataLayer.push(arguments);}<br>
						  &emsp;gtag('js', new Date());<br>
						  &emsp;gtag('config', '&#60;?php echo $analytics_id; ?&#62;');<br>
						&#60;/script&#62;<br>
					</code></li></ul>
			</div>
		</div>
	</div>
</body>
</html>