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
				height: 500px;
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
				<h2 class="submain col-md-12 col-xs-12" style="font-family:'nexabold'; color:#fff;">
					This Week&apos;s <br> Devotional Lineup:
				</h2>
			</div>
			<!-- 1 st quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-top:30px; margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Monday Meditation
					<div class="border"></div>
				</h2>

				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">This morning, let’s use this excerpt from Matthew and meditate on what it means to take on Jesus’s yoke.<br><br>Come unto me, all ye that labour and are heavy laden, and I will give you rest.<br><br>Take my yoke upon you, and learn of me; for I am meek and lowly in heart: and ye shall find rest unto your souls.<br><br>For my yoke is easy, and my burden is light.<br><br>

						<i class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">Matthew 11:28-30</i><br><br>Sometimes, life just feels heavy. There are many worries and fears that can bring you down. Yet Jesus offers a better way. He doesn't offer to make you completely burden free, however. He offers you a different burden, a different yoke. How can exchanging one yoke for another be any better? Jesus carried the yoke of His Father's burden. His heart ached for His lost sheep. Yet His burden did not overwhelm Him. He knew that His Father was in control and that He had a plan. Thus He could carry His burden without the overwhelming helplessness that is so pervasive in the human condition. What would your life look like if you took all your burdens and pains and gave them to God in exchange for the peace of Christ?<br><br><span style="color:#ef8b35;">Meditate on the things that bring you down. Do you see injustices all around, watching the news and wondering how things can be the way they are? Do you worry about your future or the future of your children? Visualize your fears and imagine yourself heavy laden with them. Now imagine Jesus coming and taking that burden from atop your back. Imagine the light burden of Jesus. He cared greatly for sinners, yet He never let the sin of the world weigh Him down. He trusted God. Imagine taking that burden for sinners and reliance on God upon yourself. Pray to have yourself set free of your burdens.</span><br><br>
					</h2>
				</div>
			</div>

			<!-- 2nd quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Tuesday Trivia
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">



					<!-- quiz start -->
					<div class="container">
						<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">Can you answer these trivia questions about Jesus’s travels?</h2>
						<div class="que_headline">
							<h4>Question <span id="question_number">1</span> of 4 </h4>
						</div>
						<!-- 1st Question -->
						<div class="modal-dialog" id="que1">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que"><span class="label label-warning" id="qid"
											style="font-size: 24px;">1.</span>  1. This town was the site of Jesus’s first miracle:
									</h3>
								</div>
								<div class="modal-body">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div id="loadbar1" class="loadbar" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz1" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="c.)" data-option="a.)" data-question="1" data-answer="3"
											data-answertext="Simeon" data-optiontext="Bethsaida">
											<span class="btn-label"><b>a.)</b></span>
											<input type="radio" name="q_answer" value="1">Bethsaida<i
												class="fa fa-check pull-right" style="color:white;"></i>
										</label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="c.)" data-option="b.)" data-question="1" data-answer="3"
											data-answertext="Simeon" data-optiontext="Nazareth">
											<span class="btn-label"><b>b.)</b></span>
											<input type="radio" name="q_answer" value="2">Nazareth<i
												class="fa fa-check pull-right" style="color:white;"></i>
										</label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="c.)" data-option="c.)" data-question="1" data-answer="3"
											data-answertext="Simeon" data-optiontext="Cana">
											<span class="btn-label"><b>c.)</b></span>
											<input type="radio" name="q_answer" value="3"> Cana <i
												class="fa fa-check pull-right" style="color:white;"></i>
										</label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="c.)" data-option="d.)" data-question="1" data-answer="3"
											data-answertext="Simeon" data-optiontext="Jerusalem ">
											<span class="btn-label"><b>d.)</b></span>
											<input type="radio" name="q_answer" value="4">Jerusalem  <i
												class="fa fa-check pull-right" style="color:white;"></i>
										</label>
									</div>
								</div>

							</div>
						</div>
						<!-- 2nd Question -->
						<div class="modal-dialog" style="display: none;" id="que2">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que"><span class="label label-warning" id="qid"
											style="font-size: 24px;">2.</span> The town where Jesus lived after leaving Nazareth:  </h3>
								</div>
								<div class="modal-body">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div class="loadbar" id="loadbar2" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz2" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="a.)" data-question="2" data-answer="4"
											data-answertext="The meek" data-optiontext="Jerusalem"><span
												class="btn-label"><b>a.)</b></span> <input type="radio" name="q_answer"
												value="1">Jerusalem <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="b.)" data-question="2" data-answer="4"
											data-answertext="The meek" data-optiontext="Capernaum"><span
												class="btn-label"><b>b.)</b></span> <input type="radio" name="q_answer"
												value="2"> Capernaum <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="c.)" data-question="2" data-answer="4"
											data-answertext="The meek" data-optiontext="Bethlehem"><span
												class="btn-label"><b>c.)</b></span> <input type="radio" name="q_answer"
												value="3">Bethlehem <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="d.)" data-question="2" data-answer="4"
											data-answertext="The meek" data-optiontext="Bethany"><span
												class="btn-label"><b>d.)</b></span>
											<input type="radio" name="q_answer" value="4"> Bethany <i
												class="fa fa-check pull-right" style="color:white;"></i></label>
									</div>
								</div>
							</div>
						</div>
						<!-- 3rd Question -->
						<div class="modal-dialog" style="display: none;" id="que3">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que"><span class="label label-warning" id="qid"
											style="font-size: 24px;">3.</span> Jesus met two man on the road to this town after his resurrection:
									</h3>
								</div>
								<div class="modal-body">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div class="loadbar" id="loadbar3" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz3" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="a.)" data-question="3" data-answer="4"
											data-answertext="Naomi" data-optiontext="Bethlehem"><span
												class="btn-label"><b>a.)</b></span> <input type="radio" name="q_answer"
												value="1"> Bethlehem <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="b.)" data-question="3" data-answer="4"
											data-answertext="Naomi" data-optiontext="Damascus"><span
												class="btn-label"><b>b.)</b></span> <input type="radio" name="q_answer"
												value="2">Damascus <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="c.)" data-question="3" data-answer="4"
											data-answertext="Naomi" data-optiontext="Bethpage"><span
												class="btn-label"><b>c.)</b></span> <input type="radio" name="q_answer"
												value="3">Bethpage <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="d.)" data-option="d.)" data-question="3" data-answer="4"
											data-answertext="Naomi" data-optiontext="Emmaus"><span
												class="btn-label"><b>d.)</b></span> <input type="radio" name="q_answer"
												value="4">Emmaus <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
									</div>
								</div>
							</div>
						</div>

						<!-- 4th Question -->
						<div class="modal-dialog" style="display: none;" id="que4">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que"><span class="label label-warning" id="qid"
											style="font-size: 24px;">4.</span> In which town did Martha, Mary, and Lazarus live?
									</h3>
								</div>
								<div class="modal-body">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div class="loadbar" id="loadbar4" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz4" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="b.)" data-option="a.)" data-question="4" data-answer="2"
											data-answertext="Peter" data-optiontext="Cana"><span
												class="btn-label"><b>a.)</b></span> <input type="radio" name="q_answer"
												value="1"> Cana<i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="b.)" data-option="b.)" data-question="4" data-answer="2"
											data-answertext="Peter" data-optiontext="Nazareth"><span
												class="btn-label"><b>b.)</b></span> <input type="radio" name="q_answer"
												value="2"> Nazareth<i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="b.)" data-option="c.)" data-question="4" data-answer="2"
											data-answertext="Peter" data-optiontext="Bethsaida"><span
												class="btn-label"><b>c.)</b></span> <input type="radio" name="q_answer"
												value="3"> Bethsaida<i class="fa fa-check pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block choose_que"
											data-correctoption="b.)" data-option="d.)" data-question="4" data-answer="2"
											data-answertext="Peter" data-optiontext="Bethany"><span
												class="btn-label"><b>d.)</b></span> <input type="radio" name="q_answer"
												value="4"> Bethany <i class="fa fa-check pull-right"
												style="color:white;"></i></label>
									</div>
								</div>
							</div>
						</div>


						<!-- Correct Question -->
						<div class="modal-dialog" style="display: none;" id="correct">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que">Yes, you are correct! The answer is:</h3>
								</div>
								<div class="modal-body" style="">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div class="loadbar" id="loadbar-correct" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz-correct" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block active"><span
												class="btn-label"><b id="correct-option"></b></span>
											<span id="correct_answer"> </span><i class="fa fa-check pull-right"
												style="color:white;"></i></label>
									</div>
								</div>
							</div>
						</div>

						<!-- Wrong Question -->
						<div class="modal-dialog" style="display: none;" id="wrong">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="que">No, you are not correct! The answer is:</h3>
								</div>
								<div class="modal-body" style="">
									<div class="col-xs-3 col-xs-offset-4 col-sm-offset-5">
										<div class="loadbar" id="loadbar-wrong" style="display: none;">
											<div class="blockG" id="rotateG_01"></div>
											<div class="blockG" id="rotateG_02"></div>
											<div class="blockG" id="rotateG_03"></div>
											<div class="blockG" id="rotateG_04"></div>
											<div class="blockG" id="rotateG_05"></div>
											<div class="blockG" id="rotateG_06"></div>
											<div class="blockG" id="rotateG_07"></div>
											<div class="blockG" id="rotateG_08"></div>
										</div>
									</div>
									<div class="quiz" id="quiz-wrong" data-toggle="buttons">
										<label class="btn btn-lg btn-primary btn-block wrong"><span class="btn-label"><b
													id="wrong-option"></b></span>
											<span id='wrong_ans'> </span><i class="fa fa-times pull-right"
												style="color:white;"></i></label>
										<label class="btn btn-lg btn-primary btn-block active"><span
												class="btn-label"><b id="correct-option1"></b></span>
											<span id="correct_ans"> </span><i class="fa fa-check pull-right"
												style="color:white;"></i></label>
									</div>
								</div>
							</div>
						</div>
						<!-- Next Button -->
						<div class="text-center" style="display: none;" id="NextBtn">
							<button class="btn btn-lg" data-currentpage="correct" data-nextquestion="2"
								data-currentquestion="1" id="next_button"
								style="background-color: #F6802C;color:white;margin-top:1%;margin-bottom:2%;padding: 10px 100px 10px 100px;"><b>NEXT</b></button>
						</div>

						<!-- Thank you -->
						<div class="text-center" style="display: none;" id="thank_you">
							<h2 class="col-md-12 col-xs-12" style="font-family: 'nexabold'; color:#F6802C;">Thank you
								for playing!</h2>

						</div>


					</div>

					<!-- quiz end -->

				</div>

			</div>

			<!-- 3rd quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Wednesday Words of Wisdom
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">“The words of wise men are heard in quiet more than the cry of him that ruleth among fools.”<i class="aut"
							style="font-family: 'nexa_boldregular'; color:#030303; ">-Ecclesiastes 9:17</i>
					</h2>

				</div>
			</div>

			<!-- 4th quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Thursday Thoughts
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">Isn't it frustrating that sometimes the loudest voices are the most foolish? People disrespect and deny God and their voices are hollering all day long. Yet wisdom does not need to shout. Persecuted and afraid, Elijah hid in a cave while others sought to kill him. He sought God's voice in order to know what to do. He witnessed a strong wind, an earthquake, and a fire. Yet God's voice was not in any of these, no matter how much they clamored and wailed. Finally, there was silence and in that silence and calm, Elijah heard the still, small voice of God (1 Kings 19:11-12). Sin and the Devil's schemes will holler for your attention. There will be times when it seems everyone you know will heed their voices, wondering why you do not join in or agree. Yet you will have the still small voice of God in your heart, speaking calm wisdom about what you must do. When everyone is saying the same thing or wanting you to join in with them, be like Elijah. Escape from the noise and seek quiet. Then you will be able to distinguish God's voice from all the hustle and foolishness of the world.<br><br><span>Have there been times when you felt alone and you followed God? Write down two columns in your journal, with one column marked "Foolishness of the World" and the other marked "Wisdom of God." The world's foolishness says to take vengeance on those who hurt you. What does the wisdom of God say? The foolishness of the world says to seek your own way, to feed all your desires. What does God say? Look up Bible verses about wisdom and write a few down to keep in prominent places. If you have a quiet place where you do devotions, make sure to put some words of wisdom there. If you do not have a quiet place designated for quiet time with God, now is a good time to pick a place and time. You cannot hear the quiet voice of God if you do not give yourself the opportunity to listen. </span>
					</h2>
				</div>
			</div>

			<!-- 5th quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Friday Focus
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">My God, my God, why hast thou forsaken me? why art thou so far from helping me, and from the words of my roaring?<br> <br>O my God, I cry in the day time, but thou hearest not; and in the night season, and am not silent.<br><br>But thou art holy, O thou that inhabitest the praises of Israel.<br><br>Our fathers trusted in thee: they trusted, and thou didst deliver them.<br><br>They cried unto thee, and were delivered: they trusted in thee, and were not confounded.<br><br>But I am a worm, and no man; a reproach of men, and despised of the people.<br><br>All they that see me laugh me to scorn: they shoot out the lip, they shake the head, saying,<br><br>He trusted on the Lord that he would deliver him: let him deliver him, seeing he delighted in him.<br><br>But thou art he that took me out of the womb: thou didst make me hope when I was upon my mother's breasts.<br><br>I was cast upon thee from the womb: thou art my God from my mother's belly.<br><br>
						<i class="aut" style="font-family: 'nexa_boldregular'; color:#030303; ">- Psalm 22:1-10</i><br><br>Today's passage was famously spoken by Jesus as He hung on the cross. Some scoffers interpret this moment as Jesus giving up. Yet Jesus knew His hearers would understand the reference to the Psalm and was pointing them towards another prophetic passage of His coming. Although the Psalm starts in despair, it recognizes the presence of God in the Psalmist's life, from conception onward. Jesus was also showing the onlookers that it is okay to be raw and honest with God about your feelings.<br><br>Even though you may recognize that God already knows what is in your heart, it can still be difficult to openly admit your struggles to God and others. Yet Jesus shows the openness that God desires from you. When Jesus prayed to God in the Garden of Gethsemane, He prayed openly about His fears and hopes. What mattered most was that He still submitted Himself to God's will after pouring out His feelings. God seeks that from you as well.<br><br> <span id="diffcolor">Be open and willing to speak to God about what is going on with you. Then when you have shared what is going on inside you, be ready to listen and submit yourself to His authority. </span></h2>


				</div>
			</div>

			<!-- 6th quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Saturday Scripture
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; "><i class="aut"
							style="font-family: 'nexa_boldregular'; color:#030303; ">-Isaiah 8:6-22</i><br><br>Forasmuch as this people refuseth the waters of Shiloah that go softly, and rejoice in Rezin and Remaliah's son;<br><br>Now therefore, behold, the Lord bringeth up upon them the waters of the river, strong and many, even the king of Assyria, and all his glory: and he shall come up over all his channels, and go over all his banks:<br><br>And he shall pass through Judah; he shall overflow and go over, he shall reach even to the neck; and the stretching out of his wings shall fill the breadth of thy land, O Immanuel.<br><br>Associate yourselves, O ye people, and ye shall be broken in pieces; and give ear, all ye of far countries: gird yourselves, and ye shall be broken in pieces; gird yourselves, and ye shall be broken in pieces.<br><br>Take counsel together, and it shall come to nought; speak the word, and it shall not stand: for God is with us.<br><br>For the Lord spake thus to me with a strong hand, and instructed me that I should not walk in the way of this people, saying,<br><br>Say ye not, A confederacy, to all them to whom this people shall say, A confederacy; neither fear ye their fear, nor be afraid.<br><br>Sanctify the Lord of hosts himself; and let him be your fear, and let him be your dread.<br><br>And he shall be for a sanctuary; but for a stone of stumbling and for a rock of offence to both the houses of Israel, for a gin and for a snare to the inhabitants of Jerusalem.<br><br>And many among them shall stumble, and fall, and be broken, and be snared, and be taken.<br><br>Bind up the testimony, seal the law among my disciples.<br><br>And I will wait upon the Lord, that hideth his face from the house of Jacob, and I will look for him.<br><br>Behold, I and the children whom the Lord hath given me are for signs and for wonders in Israel from the Lord of hosts, which dwelleth in mount Zion.<br><br>And when they shall say unto you, Seek unto them that have familiar spirits, and unto wizards that peep, and that mutter: should not a people seek unto their God? for the living to the dead?<br><br>To the law and to the testimony: if they speak not according to this word, it is because there is no light in them.<br><br>And they shall pass through it, hardly bestead and hungry: and it shall come to pass, that when they shall be hungry, they shall fret themselves, and curse their king and their God, and look upward.<br><br>And they shall look unto the earth; and behold trouble and darkness, dimness of anguish; and they shall be driven to darkness.<br><br>God is ultimately sovereign. The people of Judah faced a grave situation- the Northern kingdom of Israel and Syria had combined forces against them. And now the Assyrian army was threatening to attack all of Northern Israel, Syria, and Judah. Isaiah's prophecy was meant to offer comfort but also was realistic. Too often it can be easy to downplay the seriousness of a situation in an attempt to comfort. People often say, "everything will be alright" when there are no guarantees. Here, Isaiah comforts the people of Judah by assuring them that they will not be destroyed completely. But he does acknowledge that Assyria will fill Judah "up to the neck" without drowning. Isaiah also points to the sureness of God's will. God had ordained these events to happen and they would happen regardless of the counsel or girding against it. What mattered was the people's response to it. There will be many things in your life that will happen to you and will be beyond your control. However, you can choose how to control your response to those circumstances. Isaiah knew there were hard times ahead for the people of Judah. Yet he still admonished them to seek out God, knowing that God would be a strong foundation to those who believe in him and a stumbling block to those who don’t. Which would you rather God be to you?<br><br>
					</h2>
				</div>
			</div>

			<!-- 7th quote -->
			<div class="quote_section col-md-12 col-xs-12" style="margin-bottom: 30px;">
				<h2 class="col-xs-12 topic" style="font-family: 'nexabold'; color:#003366; margin: 25px 0px;">
					Sunday Sundown Prayer
					<div class="border"></div>
				</h2>
				<div class="sub_content col-md-12 col-xs-12">
					<h2 class="box_txt" style="font-family: 'nexa_lightregular'; color:#030303; ">Dear God,<br><br>Thank you for another week spent with you. I hope that I have been a good example of you to others throughout this week and I ask for Your forgiveness in those moments when I fell short. I am so grateful for all the things You are doing in my life and I ask that You would prepare me for the week ahead. Please help me to walk in Your spirit, to remember Your faithfulness in all circumstances. Please be the Lord of my life. <br><br>Father, please help me to listen to true wisdom this week. Help me to keep committed to daily devotional time with you and to make it meaningful. I don’t ever want to take our time for granted. Please help others to see the changes You are bringing to me. GIve me the words to express all that You have done and continue to do in my life. I thank You again and look forward to all we will do this week. <br><br>In Jesus’s Name, Amen.</h2>
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



	<script type="text/javascript">
		$(function () {
			var loading = $('#loadbar').hide();
			$(document)
				.ajaxStart(function () {
					loading.show();
				}).ajaxStop(function () {
					loading.hide();
				});

			$(document).on("click", ".choose_que", function () {
				var choice = $(this).find('input:radio').val();
				var answer = $(this).data('answer');
				var answertext = $(this).data('answertext');
				var optiontext = $(this).data('optiontext');
				var option = $(this).data('option');
				var correctoption = $(this).data('correctoption');

				var question_number = $(this).data('question');
				$('#loadbar' + question_number).show();
				$('#quiz' + question_number).fadeOut();

				setTimeout(function () {
					if (choice == answer) {
						$("#correct_answer").text(answertext);
						$("#correct-option").text(correctoption);
						$("#que" + question_number).hide();
						$("#correct").show();
						$("#quiz-correct").show();
						$("#next_button").attr('data-currentpage', 'correct')
					} else {
						$("#wrong_ans").text(optiontext)
						$("#correct_ans").text(answertext)
						$("#wrong-option").text(option)
						$("#correct-option1").text(correctoption);
						$("#que" + question_number).hide();
						$("#wrong").show();
						$("#quiz-wrong").show();
						$("#next_button").attr('data-currentpage', 'wrong')
					}


					var next_question = $("#next_button").attr('data-nextquestion');
					var currentpage = $("#next_button").attr('data-currentpage');

					$("#NextBtn").show();
					$('#loadbar' + question_number).fadeOut();
				}, 1500);
			});

			$(document).on("click", "#next_button", function () {
				var currentquestion = $(this).data('data-currentquestion');
				var next_question = $(this).attr('data-nextquestion');
				var currentpage = $(this).attr('data-currentpage');
				$(this).attr('data-nextquestion', parseInt(next_question) + 1)
				$(this).attr('data-currentquestion', next_question)
				$('#loadbar-' + currentpage).show();
				$('#quiz-' + currentpage).fadeOut();
				setTimeout(function () {
					$("#question_number").text(next_question);
					$("#" + currentpage).hide();
					$("#NextBtn").hide();
					$('#loadbar-' + currentpage).fadeOut();
					if (next_question == 5) {
						$(".que_headline").hide();
						$("#thank_you").show();
					} else {
						$("#que" + next_question).show();
					}
				}, 1000);
			});
		});
	</script>

</body>

</html>
