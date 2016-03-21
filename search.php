<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Search</title>
<?php include_once("icl/hdr/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>    
</head>
<body>
<!------- user post start -->
<div id="upfvBck" class="pF dN"></div>
<div id="upfv" class="pstModWrp pF dN">
	<div class="pstModHdr">
		<span class="fL">post</span>
		<div id="btn-ring" class="fR cP" onclick="upfvb()" clBtn2="close">
	    	<div id="ring-line"></div>
	    </div>
	</div>
	<div class="pstModInr">
		<textarea>What would you like to say @emoorephp?</textarea>
	
		<div class="pstModFtr">
			<span class="rdBtn fR">post</span>
		</div>
	</div>
</div>
<!------- user post end -->

<!------ include header start -->
<div class="hdrWpr">
	<div class="hdrCnt">
	<a href="index.php"><span class="hdrBtn fL">PGR</span></a>
	<a href="explore.php"><span id="exp" class="hdrLink fL">Explore</span></a>
	
		<div class="m_search m_sAlg2"> 
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

		<div class="hdrRgt2 fR">
	    	<span class="hdrBtn2 fL cP pR" onclick="upfva()">Post</span>
	    	<span class="ntIcn fL cP pR" onclick="upnva()">!</span>
	    	<a href="user.php"><span class="hdruImg fR"></span></a>
	    </div>
	</div>
</div>
<!------ include header end -->

<!------ notification start -->
<div id="upnv" class="notiPos1 fR dN">
	<div class="notiWpr pF">
		<span id="notiPnr"></span>
		<div class="notiHdr">
			<span class="fL">notifications</span>
		</div>
		<div class="notiInr">
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
			<!-- user noti start -->
			<div class="notiPst">
				<img src="img/temp/tempUsr1.png"/>
				<span><a>@cookqueen</a> posted on her page.</span>
			</div>
			<!-- user noti end -->
		</div>
		<div class="notiFtr">
			<a href="settings.php" class="fL">settings</a>
			<a id="btn-ring" class="fR" href="" clBtn1="logout">
		    	<div id="ring-line"></div>
		    </a>
		</div>
	</div>
</div>
<!------ notification end --> 

<div class="trnWrp2 fL">
	<div class="fx">
		<div class="indHdr2 dB">
			<span id="ex1" onclick="en1()">People</span><span class="exN">6</span></br>
			<span id="ex2" onclick="en2()">Post</span><span class="exN">4</span>
		</div>
	</div>
</div>
<div class="bodyWpr">
	<div class="indWrp fL">

		<div id="eN1">

			<div class="indLft2 fL">
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
			</div>

			<div class="indRgt2 eFix fR">
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
				<!-- top user mod start -->
				<div class="indUsr1b">
					<a href=""><img src="img/temp/tempImg.png" /></a>
					<div class="usrCnt2">
						<a href=""><span class="usrName">@Test user</span></a></br>
						<span class="usrStata fL">2 mins ago</span>
						<div class="eFix3 fR">
							<span class="rdBtn eFix2">follow</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
			</div>

		</div>

		<div id="eN2" class="dN">
			<div class="indLft2 fL">

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
							<span onclick="upTgle('ups3_1')">4</span>
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
						<div class="pstFtrWrp">
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
						<div class="pstFtrWrp">
							<span class="usrFtrImg"></span>
							<input type="text" id="pcmnt" placeholder="Want to comment @emoorephp"/>
						</div>
					</div>
				</div></br>
				<!-- top post mod end -->

			</div>
			<div class="indRgt2 fR">

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
							<span onclick="upTgle('ups1_3')">9</span>
							<span onclick="">share</span>
							<span onclick="upTgle('ups2_3')">1</span>
						</div>
						<div class="fR">
							<span onclick="upTgle('ups3_3')">4</span>
							<span onclick="upTgle('upc1_3')">comments</span>
						</div>
					</div>
					<div id="ups1_3" class="ups ups1">
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
					<div id="ups2_3" class="ups ups2">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div id="ups3_3" class="ups ups3">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div class="pstCntFtr">
						<div class="pstFtrWrp">
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
							Random text placeholder <a href="">#emmanuel</a> is creating this because I'm bored. <a href="">#programmer</a> <a href="">#amazing</a>.
						</div>
					</div>
					<div class="pstStat diB">
						<div class="fL">
							<span onclick="">like</span>
							<span onclick="upTgle('ups1_4')">9</span>
							<span onclick="">share</span>
							<span onclick="upTgle('ups2_4')">1</span>
						</div>
						<div class="fR">
							<span onclick="upTgle('ups3_4')">4</span>
							<span onclick="upTgle('upc1_4')">comments</span>
						</div>
					</div>
					<div id="ups1_4" class="ups ups1">
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
					<div id="ups2_4" class="ups ups2">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div id="ups3_4" class="ups ups3">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div class="pstCntFtr">
						<div class="pstFtrWrp">
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
							Random text placeholder <a href="">#emmanuel</a> is creating this because I'm bored. <a href="">#programmer</a> <a href="">#amazing</a>.
						</div>
					</div>
					<div class="pstStat diB">
						<div class="fL">
							<span onclick="">like</span>
							<span onclick="upTgle('ups1_5')">9</span>
							<span onclick="">share</span>
							<span onclick="upTgle('ups2_5')">1</span>
						</div>
						<div class="fR">
							<span onclick="upTgle('ups3_5')">4</span>
							<span onclick="upTgle('upc1_5')">comments</span>
						</div>
					</div>
					<div id="ups1_5" class="ups ups1">
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
					<div id="ups2_5" class="ups ups2">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div id="ups3_5" class="ups ups3">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div class="pstCntFtr">
						<div class="pstFtrWrp">
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
							Random text placeholder <a href="">#emmanuel</a> is creating this because I'm bored. <a href="">#programmer</a> <a href="">#amazing</a>.
						</div>
					</div>
					<div class="pstStat diB">
						<div class="fL">
							<span onclick="">like</span>
							<span onclick="upTgle('ups1_6')">9</span>
							<span onclick="">share</span>
							<span onclick="upTgle('ups2_6')">1</span>
						</div>
						<div class="fR">
							<span onclick="upTgle('ups3_6')">4</span>
							<span onclick="upTgle('upc1_6')">comments</span>
						</div>
					</div>
					<div id="ups1_6" class="ups ups1">
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
					<div id="ups2_6" class="ups ups2">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div id="ups3_6" class="ups ups3">
						<span><a href=""><img src="img/temp/tempUsr.jpg" /></a> @emoorephp</span>
					</div>
					<div class="pstCntFtr">
						<div class="pstFtrWrp">
							<span class="usrFtrImg"></span>
							<input type="text" id="pcmnt" placeholder="Want to comment @emoorephp"/>
						</div>
					</div>
				</div></br>
				<!-- top post mod end -->

			</div>
		</div>

	</div>

	<div class="trnWrp2 fR">
		<div class="fx">
			<div class="usrSdWpr3">
				<div class="trndHdr">trending</div>
				<ul class="trndLst">
					<li><a href="">#pizza</a></li>
					<li><a href="">#anime</a></li>
					<li><a href="">#creamsalad</a></li>
					<li><a href="">#batmanicecream</a></li>
					<li><a href="">#codedudes</a></li>
					<li><a href="">#spicysalad</a></li>
					<li><a href="">#drake</a></li>
				</ul>
			</div>

			<!-- footer start -->
			<div class="ftrLnks">
				An <a href="http://aviyon.com/" target="_blank"><img src="css/img/aviyon_icon.png"/> Aviyon</a> creation.
		    </div>
		    <!-- footer end -->

    	</div>
    </div>


</div>

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>    
</body>
</html>
