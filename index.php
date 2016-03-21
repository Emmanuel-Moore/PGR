<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Project Gnome Reboot</title>
<?php include_once("icl/hdr/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"..\/js\/master_javascript_header.js"><\/script>');
//-->
</script>    
</head>
<body>
<!------ include header start -->
<div class="hdrWpr">
	<div class="hdrCnt">
	<a href="index.php"><span class="hdrBtn fL">PGR</span></a>
	<a href="explore.php"><span id="exp" class="hdrLink fL">Explore</span></a>
	
		<div class="m_search m_sAlg1"> 
			<form action="search.php" method="get">
				<div class="fL dbsBtn">
					<span><span></span></span>
		   			<input type="submit" value='s'> 
		   		</div>
		   		<div class="dbsWpr">
					<input id="dbS" name="s" type="text" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search" > 
				</div>
			</form>
		  <div id="dbSr"></div> 
		</div>

		<div class="hdrRgt cP fR"  onclick="upTgle('lgFnt_1')">
			<span class="hdrBtn cP fL" onclick="upTgle('lgFnt')">Login</span>
		</div>

	</div>
</div>
<!------ include header end -->
<!------ lgn function start-->
<div id="lgFnt_1" class="lgnWrp fR dN">
	<div class="pF">
		<div class="sgnCnt bck">
			<input type="text" id="u2" placeholder="username"/>
			<input type="password" id="p3" placeholder="password"/>
			<div id="siFn1" class="sgnFtrWrp dN">
				<span id="sts" class="dN"></span>
				<span class="sgnFtr">Welcome back <a>@emoorephp</a>.</span>
				<span id="sup" class="rdBtn fR">login</span>
			</div>
		</div>
	</div>
</div>
<!------ lgn function end-->

<div class="bodyWpr">
	<div class="indWrp fL">
		
		<div class="indLft fL">
			<span class="indHdr dB">Top users</span>
			<!-- top user mod start -->
			<div class="indUsr1">
				<a href=""><img src="img/temp/tempImg.png" /></a>
				<div class="usrCnt1 fL">
					<a href=""><span class="usrName">@Test user</span></a></br>
					<span class="usrStat">3 Post/ 5 Followers</span></br>
					<span class="rdBtn">follow</span>
				</div>
			</div></br>
			<span  onclick="upTgle('lgFnt_1')">open</span>
			<!-- top user mod end -->
			<!-- top user mod start -->
			<div class="indUsr1">
				<a href=""><img src="img/temp/tempImg.png" /></a>
				<div class="usrCnt1 fL">
					<a href=""><span class="usrName">@Test user</span></a></br>
					<span class="usrStat">3 Post/ 5 Followers</span></br>
					<span class="rdBtn">follow</span>
				</div>
			</div></br>
			<!-- top user mod end -->
			<!-- top user mod start -->
			<div class="indUsr1">
				<a href=""><img src="img/temp/tempImg.png" /></a>
				<div class="usrCnt1 fL">
					<a href=""><span class="usrName">@Test user</span></a></br>
					<span class="usrStat">3 Post/ 5 Followers</span></br>
					<span class="rdBtn">follow</span>
				</div>
			</div></br>
			<!-- top user mod end -->

		</div>
		<div class="indRgt fR">
		<span class="indHdr dB">Top post</span>
			<!-- top post mod start -->
			<div class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						<div class="rdBtn fR diB usrFlwBtn1">follow</div>
					</div>
					<div class="pstCntInr">
						Random text placeholder <a href="">#emmanuel</a> is creating this because I'm bored. <a href="">#programmer</a> <a href="">#amazing</a>.
					</div>
				</div>
				<div class="pstStat diB">
					<div class="fL">
						<span onclick="">like</span>
						<span onclick="upTgle('ups1_1')">9</span>
						<span onclick="">share</span>
						<span onclick="upTgle('ups2_1')">1</span>
					</div>
					<div class="fR">
						<span onclick="upTgle('ups3_1')">1</span>
						<span onclick="upTgle('upc1_1')">comments</span>
					</div>
				</div>
				<div id="ups1_1" class="ups ups1">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div id="ups2_1" class="ups ups2">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div id="ups3_1" class="ups ups3">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div class="pstCntFtr">
					<!------- user somment start -->
					<div class="upc">
						<a href=""><img src="img/temp/tempUsr.jpg" /></a> 
						<span class="pstcmtHdr">
							<a href="" class="fL">@emoorephp</a>
							<div class="stBtn2 fR diB cP" onclick="upTgle('usc_3')">...</div>
							<div id="usc_3" class="upflWrp2 fR dN">
								<ul class="upfl pA">
									<li id="upfl1">update</li>
									<li id="upfl2">hide</li>
									<li id="upfl3">delete</li>
								</ul>
							</div></br>
							<span class="usrStat">2 mins ago</span>
						</span>
						<span class="pstcmtTxt">This is random text to show as a post and to check the word wrap css. <a>#codebabes</a> I am so <a>awesome</a></span>
					</div>
					<!------- user somment end -->
					<div class="pstFtrWrp dN">
						<span class="usrFtrImg"></span>
						<input type="text" id="pcmnt" placeholder="Want to comment @emoorephp"/>
					</div>
				</div>
			</div></br>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						<div class="rdBtn fR diB usrFlwBtn1">follow</div>
					</div>
					<div class="pstCntInr">
						This is a test post from a user. This has an <a href="">#hashtag</a> and a pic that is testing the text wrap.
						<img src="img/temp/tempUsr.jpg"/>
					</div>
				</div>
				<div class="pstStat diB">
					<div class="fL">
						<span onclick="">like</span>
						<span onclick="upTgle('ups1_2')">9</span>
						<span onclick="">share</span>
						<span onclick="upTgle('ups2_2')">1</span>
					</div>
					<div class="fR">
						<span onclick="upTgle('ups3_2')">4</span>
						<span onclick="upTgle('upc1_2')">comments</span>
					</div>
				</div>
				<div id="ups1_2" class="ups ups1">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div id="ups2_2" class="ups ups2">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div id="ups3_2" class="ups ups3">
					<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
				</div>
				<div class="pstCntFtr">
					<div class="pstFtrWrp dN">
						<span class="usrFtrImg"></span>
						<input type="text" id="pcmnt" placeholder="Want to comment @emoorephp"/>
					</div>
				</div>
			</div></br>
			<!-- top post mod end -->

		</div>
	</div>

	<div class="sgnWrp fR">
		<div class="sgnCnt bck">
			<span class="sgnHdr dB">Sign Up it's free!</span>
			<input type="text" id="u" placeholder="username"/>
			<input type="text" id="e" placeholder="email"/>
			<input type="password" id="p1" placeholder="password"/>
			<input type="password" id="p2" placeholder="re-type password"/>
			<input type="text" id="g" placeholder="gender"/>
			<input type="text" id="a" placeholder="age"/>
			<div class="sgnFtrWrp">
				<span id="sts" class="dN"></span>
				<span class="sgnFtr">By clicking signup you agree to our <a href="">policy</a>, <a href="">terms</a> & conditions.</span>
				<span id="sup" class="rdBtn fR">Signup</span>
			</div>
		</div>
		<!-- footer start -->
		<div class="ftrLnks">
			An <a href="http://aviyon.com/" target="_blank"><img src="css/img/aviyon_icon.png"/> Aviyon</a> creation.
	    </div>
	    <!-- footer end -->
    </div>


</div>

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>    
</body>
</html>
