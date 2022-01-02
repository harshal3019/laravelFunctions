<!DOCTYPE html>
<html>

<head>
	<title>::yourdailydevotion::</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="waitme/waitMe.js"></script>
	<link type="text/css" rel="stylesheet" href="waitme/waitMe.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<style>
		button#next_button {
			padding: 10px 10px !important;
			text-align: center !important;
			width: 200px;
		}

		img.biblogo {
			margin: 0 auto;
		}

		span#diffcolor {
			color: #b1500b;
		}

		h2 span {
			color: #F6802C;
			font-size: 26px;
		}

		div#thank_you h2 {
			margin: 0 auto;
			border: none;
		}

		.btn-group-lg>.btn,
		.btn-lg {
			text-align: left;
		}

		label.btn.btn-lg.btn-primary.btn-block.wrong {
			display: none;
		}

		.label-warning {
			background-color: #003366;
		}

		.btn-primary.active,
		.btn-primary.focus,
		.btn-primary:active,
		.btn-primary:focus,
		.btn-primary:hover,
		.open>.dropdown-toggle.btn-primary {
			color: #fff;
			background-color: #003366;
			border-color: #003366;
		}

		.last_sec {
			background: url(images/Landing-01-background.png) no-repeat center center;
		}

		h2.box_txt {
			font-size: 22px
		}

		.border {
			border-bottom: 4px solid #003366;
			width: 15%;
			margin: 25px auto;
		}

		h2.headline {
			padding-top: 65px;
		}

		.outer_row {
			background: url(images/Landing-01-background.png) no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			height: 650px;
			margin-top: -22px !important;

		}

		.last_sec h4.col-md-12.col-xs-12 {
			line-height: 1.3;
			font-size: 36px;
			margin-top: 80px;
			padding-left: 326px;
			padding-right: 326px;
		}

		.last_sec h2.col-md-12.col-xs-12 {
			font-size: 56px;
			font-weight: 900;
			margin-bottom: 70px;

		}

		.sub_content.col-md-12.col-xs-12 h2 {
			padding-left: 35px;
			padding-right: 35px;
			border: 5px solid #325575;
			padding-top: 40px;
			padding-bottom: 40px;
			margin: 10px 315px;
		}

		.container {
			width: auto !important;
			margin: 0 auto;
			padding: 0;
			overflow-x: hidden;
		}

		img.img-responsive.pray_logo {
			margin: 0 auto;
		}

		h2.headline {
			font-size: 80px;
		}

		h3.sub_head.col-md-12 {
			margin-top: 20px;
			font-weight: 900;
			font-size: 28px;
			font-weight: 900;
		}

		h2.submain.col-md-12.col-xs-12 {
			font-size: 68px;
			margin-top: 50px;
			font-weight: 900;
			line-height: 1.3;
			margin-bottom: 50px;
		}

		h2.col-xs-12.topic {
			font-size: 40px;
		}

		.mobile {
			font-size: 11px;
			padding: 2px 6px;
			width: 50%;
			float: left;
		}

		.desktop {
			font-size: 11px;
			padding: 1px 6px;
			width: 32%;
			float: left;
			margin-top: -6px;
		}

		.mobile-btn {
			width: 100%;
			max-width: 170px;
		}

		.desktop-btn {
			width: 100%;
			max-width: 170px;
		}

		@media (min-width: 767px) {
			.modal-dialog {
				width: 726px;
				margin: 30px auto;
				padding-left: 50px;
				padding-right: 50px;
			}
		}

		@media (max-width: 768px) {
			.sub_content.col-md-12.col-xs-12 h2 {
				margin: 10px 68px;
			}

			.last_sec h4.col-md-12.col-xs-12 {
				padding-left: 70px;
				padding-right: 70px;
			}

			.last_sec h2.col-md-12.col-xs-12 {
				margin-bottom: 265px;
			}
		}

		@media (max-width: 767px) {
			label.btn.btn-lg.btn-primary.btn-block.choose_que {
				white-space: normal;
			}

			h2.submain.col-md-12.col-xs-12 {
				font-size: 55px;
				margin-bottom: 0px !important;
				margin-top: 50px;
				font-weight: 900;
				line-height: 1.1;

			}

			.sub_content.col-md-12.col-xs-12 h2 {
				padding-left: 50px;
				padding-right: 50px;
				font-size: 26px;
			}

			.journal {
				padding-left: 40px;
				padding-right: 40px;
			}

			.last_sec h4.col-md-12.col-xs-12 {
				line-height: 1.2;
				font-size: 30px;
				margin-bottom: 50px;
			}

			.last_sec h2.col-md-12.col-xs-12 {
				font-size: 48px;
				font-weight: 900;
			}
		}

		@media (max-width: 480px) {
			.main_head {
				display: flex;
				justify-content: space-between;
				max-width: 350px !important;
				text-align: center;
				margin: 0 auto;
			}

			.modal-dialog {
				position: relative;
				width: 318px;
				margin: 0 auto;
			}

			h2.headline {
				font-size: 37px;
			}

			img.img-responsive.pray_logo {
				width: 80px;
			}

			h3.sub_head.col-md-12 {
				font-size: 20px;
				font-weight: 900;
			}

			h2.submain.col-md-12.col-xs-12 {
				font-size: 40px;
			}

			h2.col-xs-12.topic {
				font-size: 32px;
			}

			.sub_content.col-md-12.col-xs-12 h2 {
				padding-left: 20px;
				padding-right: 20px;
				font-size: 22px;
			}

			.journal a {
				font-size: 20px !important;
			}

			.last_sec h2.col-md-12.col-xs-12 {
				font-size: 38px;
			}

			.last_sec h4.col-md-12.col-xs-12 {
				line-height: 1.2;
				font-size: 25px;
			}

			.last_sec h4.col-md-12.col-xs-12 br {
				display: none;
			}

			.sub_content.col-md-12.col-xs-12 h2 {
				margin: 10px 35px;
			}

			button#next_button {
				margin-top: 8% !important;
			}
		}

		@media (max-width: 480px) {
			.last_sec h2.col-md-12.col-xs-12 {
				margin-bottom: 160px;
			}

			.label {
				padding: initial !important;
				font-size: 23px !important;
			}

			.outer_row {
				height: 575px;
			}

			.main_head {
				max-width: 319px !important;
			}

			h2.headline {
				font-size: 33px;
			}

			h2.submain.col-md-12.col-xs-12 {
				font-size: 32px;
			}

			h2.col-xs-12.topic {
				font-size: 30px;
			}

			.sub_content.col-md-12.col-xs-12 h2 {
				padding-left: 15px;
				padding-right: 15px;
				font-size: 20px;
			}

			.last_sec h2.col-md-12.col-xs-12 {
				font-size: 30px;
			}

			.last_sec h4.col-md-12.col-xs-12 {
				line-height: 1.2;
				font-size: 22px;
			}
		}

		@media (max-width: 320px) {
			.last_sec h2.col-md-12.col-xs-12 {
				margin-bottom: 60px;
			}
		}
	</style>
</head>

<body style="background-color: #fff;">
	<div class="container col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center">
		<div class="row">
			<div class="outer_row">
				<h2 class="headline" style="font-family: 'mochary_personal_use_onlyRg'; color:#fff; ">
					Your Daily Devotional
				</h2>
				<img src="images/big-big-prayer-hands-YDD.png" class="img-responsive pray_logo"
					style="height: auto; width: 100px;" />
				<h3 class="sub_head col-md-12" style="color:#fff;margin-top:20px;font-family:'nexabold';">
					Connecting You with God Everyday
				</h3>
				<h2 class="submain col-md-12 col-xs-12" style="font-family:'nexabold'; color:#fff;margin-bottom: 20px;">
					This Week&apos;s <br>
				</h2>
				<h3 class="sub_head col-md-12 col-xs-12"
					style="font-family:'nexabold'; color:#584D74;margin-top:0px;font-size:40px">
					Wellness
					Wednesday<br>Do
					Good, Feel Good</h3>
			</div>
			<!-- 1 st quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-top:30px; margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Wellness Wednesday<br>Do Good, Feel Good
					<div class="border"></div>
				</h2>

				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">That ye put off
						concerning the former conversation the old man, which is corrupt according to the deceitful
						lusts;<br><br>


						And be renewed in the spirit of your mind;<br><br>

						And that ye put on the new man, which after God is created in righteousness and true
						holiness.<br><br>

						<i class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">-Ephesians 4:22-24
							KJV</i><br><br>
					</h2>
				</div>
			</div>
			<!-- 3rd quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Wellness Focus:
					<br>Financial Health
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">

					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">
						<span class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">Bible
							Verse</span><br><br>But my God shall supply all your need according to his riches in glory by Christ Jesus.<br><br><i class="aut"
							style="font-family: 'nexa_boldregular'; color:#030303; ">-Philippians 4:19</i>
						<br><br>
						<span class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">What is this verse
							telling us?</span><br>Put off: Insecurity<br>Put on: Trust<br><br>Money brings comfort. When you have plenty of money in the bank, you feel more willing to be generous, more willing to take it easy at work. When money is scarce, you become concerned, anxious. The Bible does not tell you to be careless about your money. The Proverbs are full of admonitions for wisdom. However, the Bible does require that you place your faith in God regardless of your circumstances, not just when it is easy. Your income will fluctuate. Things will come up. There may be days when you feel truly bewildered by your situation. Yet today’s verse is a reminder that God promises to supply all your needs. It is easy to confuse wants and needs. Yet part of faith is trusting that God knows the difference.<br><br>Your wealth (or lack thereof) should not be a determining factor of your usefulness to God. God will use the wealthy and the poor for His glory. Remember that your father in Heaven is rich with blessings. He will not always bless you the way you had hoped or wanted. But He will bless your faithfulness. Be in prayer about your finances today. Where there is a need, ask God to help you. Where there is plenty, ask God to show you how to spend it. Let Him be the determiner and supplier of your joy, not the capricious spirit of the world. <br><br>
						<span class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">Do Good Homework
							Assignment</span><br><br>Think about your financial goals for this year. Think about your spiritual goals for this year. Will those spiritual goals change if your financial goals fall short this year? Should they? What can you do to prioritize your spiritual goals for the next year? Make a goal to purchase one small gift for someone every week this year. It could be a small coffee for your pastor on Sunday, something from the dollar store for the neighbor kid down the street- whatever comes to mind. Try to give a small gift to one new person each week. They can be anonymous or you can include a card with your name and a Bible verse. Write a list of people you would like to bless this next year so that you can have a list already for the year. Pick a day of the week to be your “gift day.” Then pray to God to ask for insight on how to bless others. Commit to gift giving even if the week’s finances are looking a little tight. Pray to God for the faith to trust in His provision. <br><br>
						<span class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">Inspirational
							Profile</span><br><br>“Money is really worth no more than as it can be used to accomplish the Lord's work. Life is worth as much as it is spent for the Lord's service.”<br><br>
						<span class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">― George Müller, The Autobiography of George Müller</span><br><br>In his early life, George Müller did not seem like the sort of person destined for the life of a missionary. He lived a life of debauchery and theft, stealing money from his father and drinking late into the night. At 20, he was studying to become a minister as a means to a comfortable life rather than as a way to serve God. That changed, however, when a friend of his named Beta invited him to a Saturday night Bible study. After experiencing God for the first time, he decided to become a missionary. Without his father’s approval, he gave up his father’s financial support and trusted God to meet all his needs. What followed would be a life of God’s constant provision. When he had a need, he and his wife would pray for it and God would provide.<br><br>He opened an orphanage and prayed for children to come. They came in droves. He needed food for the children and a baker came by having dreamt he needed to make bread for the children. The next day, the milkman came by offering to give them milk off his broken milk cart. When the orphanage became too full, he prayed for the funds to arrive to build the orphanages and was able to build five homes for orphans. He would go on to travel the world at seventy years old to tell people about Jesus, always praying for safety and being granted such. His life demonstrated the importance of making your whole life, including your money, in service to God.<br><br>
					</h2>

				</div>
			</div>


			<div class="last_sec col-md-12 col-xs-12">

				<h4 class="col-xs-12 col-md-12" style="font-family:'nexa_lightregular'; color:#92a4b7;">Also, don't
					forget
					to check your email for
					daily verses, Bible study and prayers from our friends at...</h4>
				<img class="biblogo" alt="Bible Minute Logo" src="images/bibleminute-logo.png" width="244" height="58"
					style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;"
					border="0">
				<h2 class="col-md-12 col-xs-12" style="font-family:'nexa_lightregular'; color:#92a4b7;">
					Have a blessed week!
				</h2>
			</div>

		</div>
	</div>
</body>

</html>
