<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="index.php">Logout</a></li>
				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
		            <li><a href="about.php">About</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches.php">New Matches</a></li>
		                <li><a href="viewed-profile.php">Who Viewed my Profile</a></li>
		                <li><a href="viewed-not_contacted.php">Viewed & not Contacted</a></li>
		                <li><a href="members.php">Premium Members</a></li>
		                <li><a href="shortlisted.php">Shortlisted Profile</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="profile.php">Recently Viewed Profiles</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                <li><a href="shortcodes.php">Shortcodes</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="inbox.php">Inbox</a></li>
		                <li><a href="inbox.php">New</a></li>
		                <li><a href="inbox.php">Accepted</a></li>
		                <li><a href="sent.php">Sent</a></li>
		                <li><a href="upgrade.php">Upgrade</a></li>
		              </ul>
		            </li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
		  <div><span>Personal Details :</span></div>
   		<div>
		  	<div class="age_box1" style="max-width: 100%; display: inline-block;">
		  		<label>First Name</label>
					<input name="firstname" type="text" value="" style="width:180px;" maxlength="25" />
		   	</div>
		   	
		   	<label>Middle Name</label>
				<input name="middlename" type="text" value="" style="width:180px;" maxlength="25" />

				<label>Last Name</label>
				<input name="lastname" type="text" value="" style="width:180px;" maxlength="25" />
	    </div></br>

	    <div>
				<span>Date Of Birth</span>
				<select name="dd" id="dd" style="width:50px; dislplay: inline-block">
					<option value="0">DD</option>
					<option value="1" >1</option>
					<option value="2" >2</option>
					<option value="3" >3</option>
					<option value="4" >4</option>
					<option value="5" >5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
					<option value="8" >8</option>
					<option value="9" >9</option>
					<option value="10" >10</option>
					<option value="11" >11</option>
					<option value="12" >12</option>
					<option value="13" >13</option>
					<option value="14" >14</option>
					<option value="15" >15</option>
					<option value="16" >16</option>
					<option value="17" >17</option>
					<option value="18" >18</option>
					<option value="19" >19</option>
					<option value="20" >20</option>
					<option value="21" >21</option>
					<option value="22" >22</option>
					<option value="23" >23</option>
					<option value="24" >24</option>
					<option value="25" >25</option>
					<option value="26" >26</option>
					<option value="27" >27</option>
					<option value="28" >28</option>
					<option value="29" >29</option>
					<option value="30" >30</option>
					<option value="31" >31</option>
				</select>
				/
				<select name="mm" id="mm" style="width:50px; dislplay: inline-block">
					<option value="0">MM</option>
					<option value="1" >1</option>
					<option value="2" >2</option>
					<option value="3" >3</option>
					<option value="4" >4</option>
					<option value="5" >5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
					<option value="8" >8</option>
					<option value="9" >9</option>
					<option value="10" >10</option>
					<option value="11" >11</option>
					<option value="12" >12</option>
				</select>
				/
				<select name="yy" id="yy" style="width:60px; dislplay: inline-block">
					<option value="0">YYYY</option>
					<option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option>
				</select>

	    	<span >Sub cast </span>
	    	<select name="subcast" style="width:200px;">
					<option value="Maratha">Maratha</option>
					<option value="96 Kuli">96 Kuli</option>
					<option value="96 Kuli Maratha">96 Kuli Maratha</option>
					<option value="Deshmukh">Deshmukh</option>
					<option value="Deshmukh Maratha">Deshmukh Maratha</option>
					<option value="Kunbi" >Kunbi</option>
					<option value="Tirale kunbi">Tirale kunbi</option>
				</select>

				<span >Marital Status </span>
				<select name="user_type" style="width:200px;">
					<option value="1" selected="selected">Unmarried Boy</option>
					<option value="2"  >Unmarried Girl</option>
					<option value="3"  >Divorcee Boy / Widower</option>
					<option value="4"  >Divorcee Girl / Widow</option>
				</select>
	    </div></br>

	    <div>
	    	<span>Height</span>
	    	<select name="ft" style="width:50px; dispaly: inline-block">
					<option value="04" >4</option>
					<option value="05" selected="selected">5</option>
					<option value="06" >6</option>
					<option value="07" >7</option>
				</select>
				'
				<select name="inch" style="width:50px; dispaly: inline-block;">
					<option value="00"  >00</option>
					<option value="01"  >01</option>
					<option value="02"  >02</option>
					<option value="03"  >03</option>
					<option value="04" selected="selected">04</option>
					<option value="05"  >05</option>
					<option value="06"  >06</option>
					<option value="07"  >07</option>
					<option value="08"  >08</option>
					<option value="09"  >09</option>
					<option value="10"  >10</option>
					<option value="11"  >11</option>
					<option value="12"  >12</option>
				</select>
				"
				<span>Weight</span>
				<select name="weight" style="width:60px; display: inline-block" >
					<option value="--">N/A</option>
					<option value="30" >30</option>
					<option value="31" >31</option>
					<option value="32" >32</option>
					<option value="33" >33</option>
					<option value="34" >34</option>
					<option value="35" >35</option>
					<option value="36" >36</option>
					<option value="37" >37</option>
					<option value="38" >38</option>
					<option value="39" >39</option>
					<option value="40" selected="selected">40</option>
					<option value="41" >41</option>
					<option value="42" >42</option>
					<option value="43" >43</option>
					<option value="44" >44</option>
					<option value="45" >45</option>
					<option value="46" >46</option>
					<option value="47" >47</option>
					<option value="48" >48</option>
					<option value="49" >49</option>
					<option value="50" >50</option>
					<option value="51" >51</option>
					<option value="52" >52</option>
					<option value="53" >53</option>
					<option value="54" >54</option>
					<option value="55" >55</option>
					<option value="56" >56</option>
					<option value="57" >57</option>
					<option value="58" >58</option>
					<option value="59" >59</option>
					<option value="60" >60</option>
					<option value="61" >61</option>
					<option value="62" >62</option>
					<option value="63" >63</option>
					<option value="64" >64</option>
					<option value="65" >65</option>
					<option value="66" >66</option>
					<option value="67" >67</option>
					<option value="68" >68</option>
					<option value="69" >69</option>
					<option value="70" >70</option>
					<option value="71" >71</option>
					<option value="72" >72</option>
					<option value="73" >73</option>
					<option value="74" >74</option>
					<option value="75" >75</option>
					<option value="76" >76</option>
					<option value="77" >77</option>
					<option value="78" >78</option>
					<option value="79" >79</option>
					<option value="80" >80</option>
					<option value="81" >81</option>
					<option value="82" >82</option>
					<option value="83" >83</option>
					<option value="84" >84</option>
					<option value="85" >85</option>
					<option value="86" >86</option>
					<option value="87" >87</option>
					<option value="88" >88</option>
					<option value="89" >89</option>
					<option value="90" >90</option>
					<option value="91" >91</option>
					<option value="92" >92</option>
					<option value="93" >93</option>
					<option value="94" >94</option>
					<option value="95" >95</option>
					<option value="96" >96</option>
					<option value="97" >97</option>
					<option value="98" >98</option>
					<option value="99" >99</option>
					<option value="100" >100</option>
					<option value="110" >100+</option>
				</select>Kg

				<span>Blood Group</span>
				<select name="bloodgr" style="width:100px; dispaly: inline-block;">
				  <option value="A+" >A+</option>
				  <option value="A-" >A-</option>
				  <option value="B+" >B+</option>
				  <option value="B-" >B-</option>
				  <option value="AB+" >AB+</option>
				  <option value="AB-" >AB-</option>
				  <option value="O+" >O+</option>
				  <option value="O-" >O-</option>
				  <option value="--"  >Don't Know</option>
				</select>
	    </div></br>

	    <div>
	    	<span >Complexion </span>
	    	<select name="complexion" style="width:120px; dispaly: inline-block;">
				  <option value="FAIR" >FAIR</option>
				  <option value="GORA" >GORA</option>
				  <option value="SAWALA" >SAWALA</option>
				  <option value="GAVHAL" >GAVHAL</option>
				  <option value="NIMGORA" >NIMGORA</option>
				  <option value="BLACK" >BLACK</option>
				  <option value="GORA,SMART"  >GORA,SMART</option>
				  <option value="FAIR,SMART" >FAIR,SMART</option>
				  <option value="GAVHAL,SMART" >GAVHAL,SMART</option>
				</select>

				<span>Physical Disabilities</span>
				<select name="abnormality" style="width:60px; dispaly: inline-block;">
				  <option value="No" selected="selected">No</option>
				  <option value="Yes"  >Yes</option>
				</select>

				<span>Diet</span>
				<select name="diet" style="width:120px; dispaly: inline-block;">
			  	<option value="N/A" selected="selected">N/A</option>
			  	<option value="Vegetarian" >Vegetarian</option>
			  	<option value="Non Vegetarian" >Non Vegetarian</option>
				</select>
	    </div></br></br>

			<div><span>Horoscop Details :</span></div>
			<div>
				<span>Rashi</span>
				<select size="1" name="goatra1" style="width:100px; dispaly: inline-block;">
				  <option value="Unspecified" selected="selected">Unspecified</option>
				  <option value="Mesh" >Mesh</option>
				  <option value="Vrushabh" >Vrushabh</option>
				  <option value="mithun" >Mithun</option>
				  <option value="kark" >Kark</option>
				  <option value="sinha" >Sinha</option>
				  <option value="kanya" >Kanya</option>
				  <option value="tula" >Tula</option>
				  <option value="vrischik" >Vrischik</option>
				  <option value="dhanu" >Dhanu</option>
				  <option value="makar" >Makar</option>
				  <option value="kumbh" >Kumbh</option>
				  <option value="meen" >Meen</option>
				</select>

				<span>Nakshtra</span>
				<select size="1" name="goatra2" style="width:120px; dispaly: inline-block;">
				  <option value="Unspecified" selected="selected">Unspecified</option>
				  <option value="Ashwini" >Ashwini</option>
				  <option value="Ardra" >Ardra</option>
				  <option value="Aslesha" >Aslesha</option>
				  <option value="Anuradha" >Anuradha</option>
				  <option value="Bharani" >Bharani</option>
				  <option value="Chitra" >Chitra</option>
				  <option value="Dhanishta" >Dhanishta</option>
				  <option value="Hasta" >Hasta</option>
				  <option value="Jyeshta" >Jyeshta</option>
				  <option value="Krittika" >Krittika</option>
				  <option value="Moola" >Moola</option>
				  <option value="Magha" >Magha</option>
				  <option value="Mrigasira" >Mrigasira</option>
				  <option value="Pushya" >Pushya</option>
				  <option value="Purva Phalgini" >Purva Phalgini</option>
				  <option value="Purva Bhadra" >Purva Bhadra</option>
				  <option value="Purva Shadha" >Purva Shadha</option>
				  <option value="Punarvasu" >Punarvasu</option>
				  <option value="Rohini" >Rohini</option>
				  <option value="Swati" >Swati</option>
				  <option value="Revati" >Revati</option>
				  <option value="Shattarka" >Shattarka</option>
				  <option value="Shravan" >Shravan</option>
				  <option value="Uttara Phalguni" >Uttara Phalguni</option>
				  <option value="Uttara Bhadra" >Uttara Bhadra</option>
				  <option value="Uttara Shadha" >Uttara Shadha</option>
				  <option value="Vishakha" >Vishakha</option>
				</select>

				<span>Charan</span>
				<select size="1" name="goatra3" style="width:100px; dispaly: inline-block;">
				  <option value="Unspecified" selected="selected">Unspecified</option>
				  <option value="1" >1</option>
				  <option value="2" >2</option>
				  <option value="3" >3</option>
				  <option value="4" >4</option>
				</select>

				<span>Nadi</span>
				<select size="1" name="goatra4" style="width:100px; dispaly: inline-block;">
				  <option value="Unspecified" selected="selected">Unspecified</option>
				  <option value="Adhya" >Adhya</option>
				  <option value="Madhya" >Madhya </option>
				  <option value="Antya" >Antya</option>
				</select>

				<span>Gan</span>
				<select size="1" name="goatra5" style="width:100px; dispaly: inline-block;">
				  <option value="Unspecified" selected="selected">Unspecified</option>
				  <option value="Dev Gan" >Dev Gan</option>
				  <option value="Manushya Gan" >Manushya Gan</option>
				  <option value="Rakshas Gan" > Rakshas Gan</option>
				</select>
			</div></br>

			<div>
				<span>Birth Place</span>
				<input name="bplace1" type="text" value="" style="width:180px;" maxlength="25"  />

				<span>Birth Time</span>
				<select name="bplace2" style="width:50px; dispaly: inline-block;">
				  <option value="01" >01</option>
				  <option value="02" >02</option>
				  <option value="03" >03</option>
				  <option value="04" >04</option>
				  <option value="05" >05</option>
				  <option value="06" >06</option>
				  <option value="07" >07</option>
				  <option value="08" >08</option>
				  <option value="09" >09</option>
				  <option value="10" >10</option>
				  <option value="11" >11</option>
				  <option value="12" >12</option>
				</select>

				<strong><sup> :  </sup></strong>

				<select name="bplace3" style="width:50px; dispaly: inline-block;">
				  <option value="00" >00</option>
				  <option value="01" >01</option>
				  <option value="02" >02</option>
				  <option value="03" >03</option>
				  <option value="04" >04</option>
				  <option value="05" >05</option>
				  <option value="06" >06</option>
				  <option value="07" >07</option>
				  <option value="08" >08</option>
				  <option value="09" >09</option>
				  <option value="10" >10</option>
				  <option value="11" >11</option>
				  <option value="12" >12</option>
				  <option value="13" >13</option>
				  <option value="14" >14</option>
				  <option value="15" >15</option>
				  <option value="16" >16</option>
				  <option value="17" >17</option>
				  <option value="18" >18</option>
				  <option value="19" >19</option>
				  <option value="20" >20</option>
				  <option value="21" >21</option>
				  <option value="22" >22</option>
				  <option value="23" >23</option>
				  <option value="24" >24</option>
				  <option value="25" >25</option>
				  <option value="26" >26</option>
				  <option value="27" >27</option>
				  <option value="28" >28</option>
				  <option value="29" >29</option>
				  <option value="30" >30</option>
				  <option value="31" >31</option>
				  <option value="32" >32</option>
				  <option value="33" >33</option>
				  <option value="34" >34</option>
				  <option value="35" >35</option>
				  <option value="36" >36</option>
				  <option value="37" >37</option>
				  <option value="38" >38</option>
				  <option value="39" >39</option>
				  <option value="40" >40</option>
				  <option value="41" >41</option>
				  <option value="42" >42</option>
				  <option value="43" >43</option>
				  <option value="44" >44</option>
				  <option value="45" >45</option>
				  <option value="46" >46</option>
				  <option value="47" >47</option>
				  <option value="48" >48</option>
				  <option value="49" >49</option>
				  <option value="50" >50</option>
				  <option value="51" >51</option>
				  <option value="52" >52</option>
				  <option value="53" >53</option>
				  <option value="54" >54</option>
				  <option value="55" >55</option>
				  <option value="56" >56</option>
				  <option value="57" >57</option>
				  <option value="58" >58</option>
				  <option value="59" >59</option>
				  </select>
				  
				<select name="bplace4" style="width:50px; dispaly: inline-block;">
				  <option value="AM" selected="selected">AM</option>
				  <option value="PM" >PM</option>
				</select>

				<span>Mangal</span>
				<select name="mangal" style="width:100px; dispaly: inline-block;">
				  <option value="Yes" >Yes</option>
				  <option value="No" selected="selected">No</option>
				  <option value="Saumya" >Saumya</option>
				  <option value="Nirdosh" >Nirdosh</option>
				  <option value="Not Known" >Not Known</option>
				</select>

				<span>Gotra / Devak</span>
				<input name="goatra" type="text" value=""  style="width:180px;" size="50" maxlength="50" />
			</div></br></br>

			<div><span>Educational / Professional Details </span></div>
			<div>
				<span>Education Area</span>
				<select name="educ" style="width:150px;">
				  <option value="graduate" >12th to Graduate</option>
				  <option value="postgrad" >Post - Graduate</option>
				  <option value="doctor" >Doctor</option>
				  <option value="engineer" >Engineer</option>
				  <option value="Other" >Other</option>
				</select>

				<span >Occupation</span>
				<input name="occupation" type="text" value="" maxlength="75" />
				
				<span >Occupation City</span>
				<select name="occucity" style="width:150px;">
				  <option value="Mumbai" >Mumbai</option>
				  <option value="Navi Mumbai" >Navi Mumbai</option>
				  <option value="Thane" >Thane</option>
				  <option value="Other" >Other</option>
				</select>

				<span>Income</span>
				<select name="income" style="width:150px; ">
				  <option value="1,20,000" >1,20,000</option>
				  <option value="2,00,000" >2,00,000</option>
				  <option value="3,00,000" >3,00,000</option>
				  <option value="4,00,000" >4,00,000</option>
				  <option value="5,00,000" >5,00,000+</option>
				</select>
				<span>PA</span>
			</div></br></br>

			<div><span>Address</span></div>
			<div>
				<span style="vertical-align:top;">Residence Address</span>
				<textarea name="address1" style="resize:none;" ></textarea>

				<span style="vertical-align:top;">Email Id</span>
				<input name="email" type="text" value="" size="30" maxlength="50" style="width:180px; vertical-align:top;" />

				<span style="vertical-align:top;">Mobile</span>
				<input name="phone" type="text" value="" style="width:180px; vertical-align:top;" />
			</div></br></br>

			<div><span>Family Background </span></div>
			<div>
				<span>Father </span>
				<select name="father" style="width:60px; dispaly: inline-block;">
				  <option value="Yes" selected="selected">Yes</option>
				  <option value="No" >No</option>
				</select>

				<span>Mother </span>
				<select name="father" style="width:60px; dispaly: inline-block;">
				  <option value="Yes" selected="selected">Yes</option>
				  <option value="No" >No</option>
				</select>

				<span>Brothers </span>
				<select name="brother" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10" >10</option>
				</select>

				<span>Sisters </span>
				<select name="sisters" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10" >10</option>
				</select>

				<span>Married Brothers </span>
				<select name="brother" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10" >10</option>
				</select>

				<span>Married Sisters </span>
				<select name="sisters" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10" >10</option>
				</select>

<!-- 				<span style="vertical-align:top;">Surnames of Relatives</span>
				<textarea name="srelative" style="resize:none;" ></textarea> -->

			</div></br></br>

			<div><span>Expectation</span></div>
			<div>
				<span>Preferred cities </span>
				<input name="prefcity" type="text" value="" size="30" maxlength="100" />

				<span>Mangal</span>
				<select name="emangal" style="width:100px; dispaly: inline-block;">
				  <option value="Yes" >Yes</option>
				  <option value="No" selected="selected">No</option>
				  <option value="Saumya" >Saumya</option>
				  <option value="Nirdosh" >Nirdosh</option>
				  <option value="Not Known" >Not Known</option>
				</select>

	    	<span >Expected Caste </span>
	    	<select name="esubcast" style="width:200px;">
					<option value="Maratha">Maratha</option>
					<option value="96 Kuli">96 Kuli</option>
					<option value="96 Kuli Maratha">96 Kuli Maratha</option>
					<option value="Deshmukh">Deshmukh</option>
					<option value="Deshmukh Maratha">Deshmukh Maratha</option>
					<option value="Kunbi" >Kunbi</option>
					<option value="Tirale Kunbi">Tirale Kunbi</option>
					<option value="Doesnt Matter">Doesn't Matter</option>
				</select>
			</div>

			<div>	
				<span>Education</span>
				<input name="eeducation" type="text" value="" size="30" maxlength="100" />

				<span>Expected Min Height </span>
	    	<select name="eft" style="width:50px; dispaly: inline-block">
					<option value="4" >4</option>
					<option value="5" selected="selected">5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
				</select>
				'
				<select name="einch" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10"  >10</option>
					<option value="11"  >11</option>
					<option value="12"  >12</option>
				</select>
				+

				<span>Max Age Difference </span>
				<select name="eage" style="width:50px; dispaly: inline-block;">
					<option value="0"  >0</option>
					<option value="1"  >1</option>
					<option value="2"  >2</option>
					<option value="3"  >3</option>
					<option value="4"  >4</option>
					<option value="5"  >5</option>
					<option value="6"  >6</option>
					<option value="7"  >7</option>
					<option value="8"  >8</option>
					<option value="9"  >9</option>
					<option value="10"  >10</option>
				</select>

				<span>Divorcee</span>
				<input name="divorce" type="radio" value="Yes" />Yes
				<input name="divorce" type="radio" value="No" checked="checked" />No
			</div>

			<div>
				<span>Upload your profile picture :</span>
				<input type="file" name="photoimg" id="photoimg" style="display: inline-block;"/>
			</div>

			<div>
				<input type="button" name="Submit" value="Submit" />
			</div>

   <div class="about">
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2016 Maratha Matrimonial. All Rights Reserved</p>
	        </div>
      </div>
</div>
</body>
</html>	