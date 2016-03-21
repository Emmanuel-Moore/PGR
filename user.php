<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>@emoorephp</title>
<?php include_once("icl/hdr/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>    
</head>
<body>
<div id="uedt3" class="pA dN">
	<div class="edtInr">
		<span id="edt3I1" class="cP" onclick="updPst(event, 'updFrm_1')">Upload a new banner ;)</span>
		<form enctype="multipart/form-data" method="post" class="tempFrm1">
			<input type="file" name="FileUpload" id="updFrm_1" onchange="updImgCk('updFrm_1')"/>
		</form>
		<div class="edt3I2">
			<span id="">resize previous banner</span> / <span id="">help?</span>
		</div>
	</div>
</div>
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
<div id="upnv" class="notiPos2 fR dN">
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
			<a id="btn-ring" class="fR" href="" title="logout" clBtn1="logout">
		    	<div id="ring-line"></div>
		    </a>
		</div>
	</div>
</div>
<!------ notification end -->

<div class="usrBnr"><img src="img/temp/usrBanner.png"/></div>

<div class="bodyWpr2">
	<div class="usrSdWpr1">
		<div class="pstCntWrp bck fL">
			<div id="uedt4" class="dN pA cP">
				<span>U</span>
			</div>
			<a href=""><img src="img/temp/tempUsr.jpg" /></a>
			<div class="usrHdrCnt3 fL">
				<a href=""><span class="usrName">@emoorephp</span></a></br>
				<span class="usrStat">2 second ago</span></br>
				<div id="updBtn1a" class="rdBtn fR diB usrFlwBtn1" onclick="updLgc1()">update</div>
				<div id="updBtn1b" class="rdBtn fR dN usrFlwBtn1" onclick="updLgc2()">done</div>
			</div></br>
			<div class="pstCntInr">
				<span id="uedt1a">Hi I'm Emmanuel and I love <a href="">#food</a> and <a href="">#programming</a>.</span>
				<!------- bio edit start -->
				<textarea id="uedt1b" class="dN">Hi I'm Emmanuel and I love #food and #programming.</textarea>
				<!------- bio edit end -->
				</br>
				<span id="uedt2a"><a href="">aviyon.com</a></span>
				<!------- web edit start -->
				<input type="text" id="uedt2b" class="dN" value="aviyon.com"/>
				<!------- web edit end -->

				<div class="statNavWrp">
					<div id="ex1a" onclick="en1a()" class="statNavInr cP">
						<span id="uN1">6</span>
						<span id="un2">post</span>
					</div>
					<div id="ex2a" onclick="en2a()" class="statNavInr cP">
						<span id="uN1">3</span>
						<span id="un2">followers</span>
					</div>
				</div>
			</div>
		</div>
	
		<div class="SdWpr1 bck">
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


	<div class="usrBdy fR">

		<div id="eN1a">
			<!-- top post mod start -->
			<div id="uspp_1" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						
						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_1')">...</div>
						<div id="us_1" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_1')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
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
					<div id="upc1_1">
						<!------- user somment start -->
						<div id="uspp2_1" class="upc">
							<a href=""><img src="img/temp/tempUsr.jpg" /></a> 
							<span class="pstcmtHdr">
								<a href="" class="fL">@emoorephp</a>
								<div class="stBtn2 fR diB cP" onclick="upTgle('usc_1')">...</div>
								<div id="usc_1" class="upflWrp2 fR dN">
									<ul class="upfl pA">
										<li id="upfl1">update</li>
										<li onclick="upTgle('uspp2_1')">hide</li>
										<li id="upfl3">delete</li>
									</ul>
								</div></br>
								<span class="usrStat">2 mins ago</span>
							</span>
							<span class="pstcmtTxt">This is random text to show as a post and to check the word wrap css. <a>#codebabes</a> I am so <a>awesome</a></span>
						</div>
						<!------- user somment end -->
						<!------- user somment start -->
						<div id="uspp2_2" class="upc">
							<a href=""><img src="img/temp/tempUsr.jpg" /></a> 
							<span class="pstcmtHdr">
								<a href="" class="fL">@emoorephp</a>
								<div class="stBtn2 fR diB cP" onclick="upTgle('usc_2')">...</div>
								<div id="usc_2" class="upflWrp2 fR dN">
									<ul class="upfl pA">
										<li id="upfl1">update</li>
										<li onclick="upTgle('uspp2_2')">hide</li>
										<li id="upfl3">delete</li>
									</ul>
								</div></br>
								<span class="usrStat">2 mins ago</span>
							</span>
							<span class="pstcmtTxt">This is random text to show as a post and to check the word wrap css. <a>#codebabes</a> I am so <a>awesome</a></span>
						</div>
						<!------- user somment end -->
						<!------- user somment start -->
						<div id="uspp2_3" class="upc">
							<a href=""><img src="img/temp/tempUsr.jpg" /></a> 
							<span class="pstcmtHdr">
								<a href="" class="fL">@emoorephp</a>
								<div class="stBtn2 fR diB cP" onclick="upTgle('usc_3')">...</div>
								<div id="usc_3" class="upflWrp2 fR dN">
									<ul class="upfl pA">
										<li id="upfl1">update</li>
										<li onclick="upTgle('uspp2_3')">hide</li>
										<li id="upfl3">delete</li>
									</ul>
								</div></br>
								<span class="usrStat">2 mins ago</span>
							</span>
							<span class="pstcmtTxt">This is random text to show as a post and to check the word wrap css. <a>#codebabes</a> I am so <a>awesome</a></span>
						</div>
						<!------- user somment end -->
						<a class="uscVmBtn cP" onclick="uscVm(this,'usc_4a')">view more</a>
						<!------- user somment start -->
						<div id="usc_4a" class="upc dN">
							<a href=""><img src="img/temp/tempUsr.jpg" /></a> 
							<span class="pstcmtHdr">
								<a href="" class="fL">@emoorephp</a>
								<div class="stBtn2 fR diB cP" onclick="upTgle('usc_4')">...</div>
								<div id="usc_4" class="upflWrp2 fR dN">
									<ul class="upfl pA">
										<li id="upfl1">update</li>
										<li onclick="upTgle('usc_4a')">hide</li>
										<li id="upfl3">delete</li>
									</ul>
								</div></br>
								<span class="usrStat">2 mins ago</span>
							</span>
							<span class="pstcmtTxt">This is random text to show as a post and to check the word wrap css. <a>#codebabes</a> I am so <a>awesome</a></span>
						</div>
					</div>
					<!------- user somment end -->
					<div class="pstFtrWrp">
						<span class="usrFtrImg"></span>
						<input type="text" id="pcmnt" placeholder="Want to comment @emoorephp"/>
					</div>
				</div>
			</div>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div id="uspp_2" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						
						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_2')">...</div>
						<div id="us_2" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_2')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
					</div>
					<div class="pstCntInr">
						Random text placeholder <a href="">#emmanuel</a> is creating this because I'm bored. <a href="">#programmer</a> <a href="">#amazing</a>.
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
			</div>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div id="uspp_3" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						
						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_3')">...</div>
						<div id="us_3" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_3')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
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
			</div>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div id="uspp_4" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						
						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_4')">...</div>
						<div id="us_4" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_4')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
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
			</div>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div id="uspp_5" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>
						
						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_5')">...</div>
						<div id="us_5" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_5')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
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
			</div>
			<!-- top post mod end -->
			<!-- top post mod start -->
			<div id="uspp_6" class="indUsr2 bck">
				<div class="pstCntWrp">
					<a href=""><img src="img/temp/tempUsr.jpg" /></a>
					<div class="usrHdrCnt2 fL">
						<a href=""><span class="usrName">@emoorephp</span></a></br>
						<span class="usrStat">2 mins ago</span></br>

						<div class="rdBtn fR usrFlwBtn1 dN cP">follow</div>
						<div class="stBtn fR diB cP" onclick="upTgle('us_6')">...</div>
						<div id="us_6" class="upflWrp fR dN">
							<ul class="upfl pA">
								<li id="upfl1">update</li>
								<li onclick="upTgle('uspp_6')">hide</li>
								<li id="upfl3">delete</li>
							</ul>
						</div>
					</div>
					<div class="pstCntInr">
						This is a test post from a user. This has an <a href="">#hashtag</a> and a pic that is testing the text wrap.
						<img src="img/temp/tempUsr.jpg"/>
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
			</div>
			</div>
			<!-- top post mod end -->
		</div>

		<div id="eN2a" class="dN">
			<div class="indLft2 eFix4 fL">
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
							<span class="rdBtn eFix2">following</span></br>
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
							<span class="rdBtn eFix2">following</span></br>
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
							<span class="rdBtn eFix2">following</span></br>
							<span class="usrStatb fR">3 Post/ 5 Followers</span></br>	
						</div>
					</div>
				</div></br>
				<!-- top user mod end -->
			</div>
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
