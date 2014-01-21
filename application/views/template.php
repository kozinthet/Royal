<html>
<head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
<title>Royal Holiday</title>
<base href="<?php  echo base_url();?>">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel='stylesheet' type='text/css' href='css/home.css' />
<link rel='stylesheet' type='text/css' href='css/about.css' />
<link rel='stylesheet' type='text/css' href='css/guide.css' />
<link rel='stylesheet' type='text/css' href='css/faq.css' />
<link rel='stylesheet' type='text/css' href='css/sitemap.css' />
</head>
<body>
	<div id="body_wrapper">
			<div id="header_wrapper">
			  <?php $this->load->view('header');?>
			</div>
			<div id="content_wrapper">
			  <?php $this->load->view($main); ?>
			</div>
			<div id="footer_wrapper">
			  <?php  $this->load->view('footer');?>
			</div>
		</div>

	</div>
</body>
</html>

