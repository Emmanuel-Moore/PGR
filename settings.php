<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Settings</title>
<?php include_once("icl/hdr/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
document.write('<script type=\"text/javascript" src=\"js\/setLogic.js"><\/script>');
//-->
</script>    
</head>
<body>
<!------- deactivate start -->
<div id="upfvBck" class="pF dN"></div>
<div id="upfv2" class="pstModWrp pF dN">
	<form enctype="multipart/form-data" method="post" action="php_parsers/deactivate_system.php">
	<div class="pstModHdr">

		<a class="fL" href="about.php">deactivate</a>&nbsp;
           <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Hi @emoorephp, Click deactivate for more information about deactivating.</span></a>

		<div id="btn-ring" class="fR cP" onclick="upfva2()" clBtn2="close">
	    	<div id="ring-line"></div>
	    </div>
	</div>
	<div class="pstModInr">
		

		<span class="radio-info">
			<input id="deact" class="radio-select" name="reason" value="deact-1" type="radio"> 
				<p>Ill be back, on later.</p><br>
			<input id="deact" class="radio-select" name="reason" value="deact-2" type="radio"> 
				<p>Im being harassed.</p><br>
			<input id="deact" class="radio-select" name="reason" value="deact-3" type="radio"> 
				<p>I dont like this.</p><br>
			<input id="deact" class="radio-select" name="reason" value="deact-4" type="radio"> 
				<p><input id="deact" name="reason" placeholder="other?" type="text"></p><br>
		</span>

	
		<div class="pstModFtr">
			<span class="note-ex fL"><span class="alert">*</span> Remember you may always log back in to reopen your account.</span>
			<input id="deact-btn" class="rdBtn2 rdBp1 dB1 fR" value="deactivate" type="submit">
		</div>
	</div>

	</form>
</div>
<!------- deactivate end -->
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


<div class="bodyWpr">
	<div class="indWrp fL">

		<div class="sdeUsr">
			<img class="sdeImg1" src="img/temp/usrBanner.png"/>
			<div class="sdeStat pA">
				<img src="img/temp/tempUsr.jpg" />
				<div class="sdeNme pA">
					<span class="usrName">@emoorephp</span></br>
					<span class="usrStat">2 mins ago</span>
				</div>
			</div>
		</div>
		
		<ul class="sdeNav fL">
			<li id="uc_1a" class="liSlct liBf1" onclick="uc_1()">profile</li>
			<li id="uc_1b" onclick="uc_2()">account</li>
			<li id="uc_1c" class="sdeSav liBf2" onclick="uc_3()">save</li>
		</ul>
		<!-- footer start -->
		<div class="ftrLnks">
			An <a href="http://aviyon.com/" target="_blank"><img src="css/img/aviyon_icon.png"/> Aviyon</a> creation.
	    </div>
	    <!-- footer end -->

	</div>
	
	<div class="sdeRgt fL">
		<div class="set-list" id="uc_1">
        <label>name</label> 
        <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Hey @emoorephp, add your name to help your friends find you much easier.</span></a>
        <br/>
          <span class="first_name">
              <input id="s1" type="text" name="s1" placeholder="first name" value="">
          </span>

          <span class="last_name">
            <input id="s2" type="text" name="s2" placeholder="last name" value="">
          </span></br>

        <label>username</label>
        <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Hi @emoorephp, as of right now you cannot change your username.</span></a>
        <br/>
          <span class="first_name">
            <input id="s3" type="text" name="s3" value="@emoorephp">
          </span></br>


          <label>Date of birth
            <span class="nav-drop flashit fR" onclick="upTgle('ex-1')">&#8269;</span>
          </label> 
          <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Add your birth date <?php echo $u; ?> so your connections can wish you a happy birthday.</span></a>
          <br/>
          <ol id="ex-1" class="dN">
            <li>Your birth year will not be shown on your page.</li>
            <li>Only your connections will know when your birthday is coming up.</li>
          </ol>
          <span class="first_name">
            <input onfocus="dc()" id="s9" type="text" name="s9" placeholder="mm/dd/yyyy" value="">
          </span>
          <span id="sb"></span></br>
          

        <label>Bio</label></br>
          <input id="s4" type="text" placeholder="something about me" name="s4" value="">
          <p><?php echo $bio2; ?></p>

        <label>website</label>
          <input id="s5" type="text" name="s5" placeholder="mysite@awesome.com" value="aviyon.com"></br></br>

          <label>specific location 
            <span class="lnk_green">Ex:</span> Denver, Co 
          </label>
          <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Hi @emmorephp, add a location like your city & state so your friends can find you much easier.</span></a>

          <input id="s6" type="text" name="s6" placeholder="city, ST" value="">
          <input id="s7" type="text" name="s7" placeholder="country" value="">

      </div>
      <div class="set-list dN" id="uc_2">

      <label>email address</label>
        <span class="email_change">
          <input onfocus="ecK1()" id="s8" type="text" name="s8" value="emmanuel.moore@aviyon.com">
          <span id="pY1"></span>
          <span id="s8x" class="xsP"></span>

          <input onfocus="ecK2()" id="s10" type="text" name="s10" placeholder="alternative email" value="">
          <span id="pN1" class="dN"></span><span id="pY1" class="dN"></span>
          <span id="s10x" class="xsP"></span></br>
        </span>


        <label>Phone
              <span class="nav-drop flashit fR" onclick="upTgle('ex-2')">&#8269;</span>
          </label> 
          <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Add your phone # @emoorephp just in case you forget your password.</span></a>
          <br/>
          <ol id="ex-2" class="dN">
            <li>Your number will not be shown to anyone.</li>
            <li>This is not required.</li>
            <li>As of now this is just for added security.</li>
          </ol>
          <span class="first_name">
            <input onfocus="ecK3()" id="s11" type="text" name="s11" placeholder="(---) --- ----" value="">
          </span>
          <span id="s11x"></span></br>


      <label>Join Date</label>
        <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">Hi @emoorephp, This is the day you signed up.</span></a>
        <br/>
          <span class="first_name">
            <input id="time" type="text" value="3/20/15">
          </span>

      <label>Last Login</label>
        <a class="tooltip" href="#"><b class="note_icon">*?</b><span class="note">This is the last time you logged in @emoorephp.</span></a>
        <br/>
          <span class="first_name">
            <input id="time" type="text" value="3/23/15">
          </span></br>

      <div class="psswrd_bkrnd">
          <label class="psswrd cP" onclick="upTgle('set-1c')">password</label>
        <span class="hdrDate fR" note6="last updated">2 hours ago</span>
        <div id="set-1c" class="psswrdCnt dN">
            <input type="password" id="pc1" name="pc1" onfocus="emptyElement('sa')" onkeypress="capLockB(event)" onblur="pc()" maxlength="100" placeholder="current password?" required>
            <span id="pN1" class="dN"></span><span id="pY1" class="dN"></span>
            <input type="password" id="pc2" name="pc2" onfocus="emptyElement('sa')" onkeypress="capLockB(event)" onblur="pc()" maxlength="100" placeholder="new password? (More than 10 Digits)" required>
            <span id="pN1" class="dN"></span><span id="pY1" class="dN"></span>
            <input type="password" id="pc3" name="pc3" onfocus="emptyElement('sa')" onkeypress="capLockB(event)" onblur="pc()" maxlength="100" placeholder="re-type new password." required>
            <span id="pN1" class="dN"></span><span id="pY1" class="dN"></span>
            <span id="sdc_x1"></span>  
            <span id="sdc_x2"></span> 
            <span id="sdc_x3"></span>
            <span id="sa"></span>
            <span id="update_btn" class="rdBtn" onclick="pc()"/>Update</span>
            <span id="capB" class="cC dN">Caps Lock is on.</span>
        </div>
      </div>
      
      <div class="deactBtn rdBtn2 rdBp2" onclick="upfva2()">deactivate</div>

      </div>

    
    <div class="set-list dN" id="uc_3">
          <span id="save_settings">
            <span class="save_header">please enter your password</span>
            <input name="upd" id="upd" onkeypress="clC(event)" maxlength="100" placeholder="your password" type="password" >
            <span id="sdc_z1"></span>  
            <span id="sdc_z2"></span> 
            <span id="sdc_z3"></span>
            <span id="sc"></span>
            <span id="update_btn" class="rdBtn" onclick="upd()">Update</span>
             <span id="capC" class="cC dN">Caps Lock is on.</span>
          </span>
      </div>
	</div>

	<div class="sdeRgt2 fR">

		<p>Anything can be updated or changed by simply typing and saving.</p>

		<p>I don't want a bio to show; how can I do this?</p>
		<ol>
			<li>Just don't enter one or erase what you have and save.</li>
		</ol>
		<p>How can I get text alerts?</p>
		<ol>
			<li>This is being added, and will so be available.</li>
		</ol>
		
    </div>


</div>

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>    
</body>
</html>
