<?php

//This is the index.php file located in the root or home directory

// set include path
set_include_path('.:includes:../includes:../../includes');
$level=NULL;

// set true for debug trace
$debug=false;

// build an array of allowable pages and their options
$pages = array(
    'home' => array ('subtitle' => 'Come Hike With Us!', 'menu'=>'home','sidebar'=>'1'),
    'adch' => array ('menu' => 'services', 'subtitle' => 'Address Change Form'),
    'agm' => array ('menu' => 'agm', 'subtitle' => 'Annual Meeting Information'),
    'album' => array ('menu' => 'album', 'subtitle' => 'Photo Gallery'),
    'ao' => array ('menu' => 'ao', 'subtitle' => 'Associate Organizations'),
    'archives' => array ('menu' => 'archives', 'subtitle' => 'Newsletter Archives' ),
    'awards' => array ('menu' => 'awards', 'subtitle' => 'Achievement Recognition Programs'),
    'bigsouthfork' => array('menu' => 'chptrs', 'subtitle' => 'Big SoutH Fork Chapter'),
    'blogs' => array ('menu' => 'blogs', 'subtitle' => 'Chapter Blogs & Websites' ),
    'bookstore' => array('menu' => 'merch', 'subtitle' => 'Virtual Bookstore'),
    'calendar' => array ('subtitle' => 'Outings and Events Calendar', 'menu'=>'calendar'),
    'calendarsignup' => array('subtitle' => 'Signup for Calendar Update Notifications','menu'=>'calendar'),
    'chapters' => array ('menu' => 'chptrs', 'subtitle' => 'Chapter Locator'),
    'clarksville' => array('menu' => 'chptrs', 'subtitle' => 'Clarksville Chapter'),
    'classads' => array('menu' => 'merch', 'subtitle' => 'Classified Ads'),
    'columbia' => array('menu' => 'chptrs', 'subtitle' => 'Columbia Franklin Chapter'),
    'covelake' => array('menu' => 'chptrs', 'subtitle' => 'Cove Lake Chapter'),
    'ctc' => array ('menu' => 'blog', 'subtitle' => 'Chapter Blogs & Websites'),
    'dyercounty' => array('menu' => 'chptrs', 'subtitle' => 'Dyer County Chapter'),
    'eastregion' => array('menu' => 'chptrs', 'subtitle' => 'East Tennessee Region'),
    'easttennessee' => array('menu' => 'chptrs', 'subtitle' => 'East Tennessee Chapter'),
    'grants' => array ('menu' => 'grants', 'subtitle' => 'Grant Programs'),
    'highlandrim' => array('menu' => 'chptrs', 'subtitle' => 'Highland Rim Chapter'),
    'history' => array ('menu' => 'history', 'subtitle' => 'A Brief History of TTA' ),
    'jackson' => array('menu' => 'chptrs', 'subtitle' => 'Jackson Chapter'),
    'links' => array ('menu' => 'services', 'subtitle' => 'Other Hiking Links of Interest'),
    'listserv' => array ('menu' => 'services', 'subtitle' => 'List Server Subscriptions'),
    'mailorder' => array('menu' => 'merch', 'subtitle' => 'Merchandise Catalog'),
    'memphis' => array('menu' => 'chptrs', 'subtitle' => 'Memphis Chapter'),
    'merch' => array ('menu' => 'merch', 'subtitle' => 'Merchandise Offerings' ),
    'middleregion' => array('menu' => 'chptrs', 'subtitle' => 'Middle Tennessee Region'),
    'mmbrsp_paypal' => array ('menu' => 'mmbrsp', 'subtitle' => 'Membership Application and Renewal'),
    'murfreesboro' => array('menu' => 'chptrs', 'subtitle' => 'Murfreesboro Chapter'),
    'nashville' => array('menu' => 'chptrs', 'subtitle' => 'Nashville Chapter'),
    'newsbrowse' => array ('menu' => 'anncmnt', 'subtitle' => 'List Server News Bulletins' ),
    'newsdetail' => array ('menu'=>'anncmnt', 'subtitle' => 'News Bulletin Details'),
    'newsletter' => array ('menu'=>'services', 'subtitle' => 'Newsletter'),
    'northwest' => array('menu' => 'chptrs', 'subtitle' => 'Northwest Chapter'),
    'office' => array ('menu' => 'office', 'subtitle' => 'Leadership'),
    'plateau' => array('menu' => 'chptrs', 'subtitle' => 'Plateau Chapter'),
    'release' => array ('menu' => 'services', 'subtitle' => 'Liability Release Forms'),
    'services' => array ('menu' => 'services', 'subtitle' => 'Member Services'),
    'seftc' => array ('menu' => 'seftc', 'subtitle' => 'Southeast Foot Trails Coalition'),
    'soddydaisy' => array('menu' => 'chptrs', 'subtitle' => 'Soddy-Daisy Chapter'),
    'sumner' => array('menu' => 'chptrs', 'subtitle' => 'Sumner Trails Chapter'),
    'support' => array('menu' => 'vlntr', 'subtitle' => 'Giving Monetary Support'),
    'trac' => array ('menu' => 'trac', 'subtitle' => 'Tennessee Rails-to-Trails Advisory Council' ),
    'uppercumberland' => array('menu' => 'chptrs', 'subtitle' => 'Upper Cumberland Chapter'),
    'vlntr' => array ('menu' => 'vlntr', 'subtitle' => 'Volunteer Opportunities' ),
    'westregion' => array('menu' => 'chptrs', 'subtitle' => 'West Tennessee Region'),   
);

//set defaults for all page options
if (!isset($_GET['page'])) {
    $nextpage="Home";
    $pagetitle = "Tennessee Trails Association";
    $subtitle="Come Hike With Us!";
    $sidebar=TRUE;
    $menu="home";
}

// check the GET global for a page request
if (isset($_GET['page'])) {
    $nextpage = $_GET['page'];	// gets the variable $page
    foreach ($pages as $valid => $options){     //validates page, sets options
    if ($nextpage == $valid) {
        foreach($options as $key=>$value){
            $$key = $value;
        } break;
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="UTF-8" >
<title><?php if(isset($pagetitle)) {echo $pagetitle;} else {echo "Tennessee Trails Association";}?></title>
<link href="<?= $level;?>stylesheet.css" rel="stylesheet">
<?php if (isset($page_css)) {?>
<link href="<?= $level.$filename.".css";?>" rel="stylesheet">
    <?php }?>
<style type="text/css">
   <?php 
    if (isset($menu)) 
      {echo ".".$menu." {background: white}\n";}
    if ($menu <> 'home'){
      echo '#content {margin-right: 0px;} #wrapper2 {background:none;}';}
    ?>
</style>
</head>

<body>
<div id='page'>
<a name="top"></a>

<div id="header">

<div class="column-in">
    <div id='subtitle'>
        <p class='subtitle'><?= $subtitle; ?></p>
    </div><!-- finishes subtitle -->

    <div id='menubar'>
        <ul>
        <li><a href='<?= $level?>index.php?page=home'>home</a></li>
        <li>|</li>
        <li><a href='<?= $level?>index.php?page=chapters'>chapters</a></li>
        <li>|</li>
        <li><a href='<?= $level?>index.php?page=blogs'>blogs</a></li>
        <li>|</li>
        <li><a href='<?= $level?>index.php?page=calendar'>calendar</a></li>
        <li>|</li>
        <li><a href='<?= $level?>index.php?page=history'>about TTA</a></li>
        <li>|</li>
        <li><a href="http://www.amazon.com/exec/obidos/redirect-home/tennestrailsasso" target="_blank">Amazon</a></li>
        </ul>
    </div><!-- finishes menubar -->
</div><!-- finishes column-in -->
</div><!-- finishes header -->

<div id="wrapper1">
<div id="wrapper2">

<div id='leftbar'>
<div style='margin-left: -30px;'>
    <ul>
    <li class='home'>
    	<a href="<?= $level?>index.php?page=home">Home</a></li>
    <li class="calendar">
    	<a href="<?= $level?>index.php?page=calendar">Calendar</a>
    	<span class='leftbar_date'> as of <br><?php include ($level.'includes/_calendar.incl');?></span></li>
    <!--<li class="agm">
    	<a href = "<?= $level?>agm">2015 Annual Meeting<br>
   	  Nov 13-15<br>Townsend</a></li>-->
    <li class="anncmnt">
    	<a href="<?= $level?>index.php?page=newsbrowse">News</a>
    	<span class='leftbar_date'> as of <br><?php include ($level.'includes/_news.incl');?></span></li>
    <li class="mmbrsp">
    	<a href="<?= $level?>index.php?page=mmbrsp_paypal">To Join!</a></li>
    <li class="chptrs">
    	<a href="<?= $level?>index.php?page=chapters">Chapters</a></li>
    <li class="blogs">
    	<a href="<?= $level?>index.php?page=blogs">Blogs</a></li>
    <li class="office">
    	<a href="<?= $level?>index.php?page=office">Leadership</a></li>
    <li class="services">
    	<a href="<?= $level?>index.php?page=services">Member Services</a></li>
    <li class="awards">
    	<a href="<?= $level?>index.php?page=awards">Awards</a></li>
    <li class="merch">
    	<a href="<?= $level?>index.php?page=merch">To Buy!</a></li>
    <li class="grants">
    	<a href="<?= $level?>index.php?page=grants">Grants</a></li>
    <li class="vlntr">
    	<a href="<?= $level?>index.php?page=vlntr">Volunteer Opportunities</a></li>
    <li class="history">
    	<a href="<?= $level?>index.php?page=history">History</a></li>
	<li class="album">
    	<a href="<?= $level?>index.php?page=album">Photos</a></li>
	<li class="archives">
    	<a href="<?= $level?>index.php?page=archives">Newsletter Archives</a></li>
	<li class="ao">
    	<a href="<?= $level?>index.php?page=ao">Associate Organizations</a></li>
	<li class="blog">
    	<a href="<?= $level?>blog/ctc" target="_blank">Cumberland Trail Conference</a></li>
    <li class='trac'>
    	<a href="<?= $level?>index.php?page=trac">TRAC</a></li>
    <li class='seftc'>
    	<a href="<?= $level?>index.php?page=seftc">SE Foot Trails Coalition</a></li>
    <li>&nbsp;</li>
    <li class='hot-line'>1-888-<br>HIKE-TTA<br><br>1-888-<br />445-3882</li>
    </ul>
</div><!-- finishes div -->
</div><!-- finishes leftbar -->

<?php 
if (isset($sidebar)){?>
    <div id="rightbar">
    <div class="column-in">
       <?php 
        include ($nextpage.'_sidebar.php');?>
    </div>
    </div>
        <?php }?>

	<div id="content">
	<div class="column-in">
<!-- .........................CONTENT BEGINS BELOW HERE......................... -->
<?php


    //$nextpage = $nextpage.'.php';
    include($nextpage.'.php');
    
?>

<!-- .........................CONTENT ENDS ABOVE HERE........................... -->

</div><!-- finishes column-in -->
</div><!-- finishes content -->

<div class="cleaner">&nbsp;</div>

</div><!-- finishes wrapper2 -->
</div><!-- finishes wrapper1 -->

<div id="footer">
<div class="column-in">

<?php if (date('m-d')=='12-07'){
	?>
	<p><strong>Dec 7, 1968 - Happy Birthday TTA! - Dec 7, <?= date('Y');?> </strong></p>
	<?php }
	else {?>

    <!--<p><strong>Please check the Annual Meeting pages for the latest updates about Housing Availability and the Auction.</strong></p>-->
    <!--<p><strong>Please shop our on-line <a href="http://www.tennesseetrails.org/mailorder.php">catalog</a>.</strong></p>>-->
    <p><strong>Shop <a href="http://www.amazon.com/exec/obidos/redirect-home/tennestrailsasso" target=_blank>Amazon</a> for great deals and to earn commissions for TTA!</strong></p>
    <!--<p><strong>CTC also has some <a href="/pdf/2008ctcmerchandise.pdf" target="_blank">logo merchandise</a> available.</strong></p>>-->
	<!--<p><strong>A TTA membership will make an unforgettable Holiday gift this year!</strong></p>-->
<?php }
?>


</div><!-- finishes column-in -->
</div><!-- finishes footer -->

<div id="trailer">
    <hr>
    <p>Hosting services provided by: </p>
	<p><a href="http://www.sitemason.com/" target='_blank'><img src="//pma.sitemason.com/themes/pmahomme/img/logo_left.png" width="80px" alt="Sitemason - Build on Us"/></a>
    <p>This page was last updated on: <?= date("m/d/Y H:i.", filemtime($_SERVER['SCRIPT_FILENAME']));?></p>
    <p>If you have questions or comments regarding the TTA website, please send an e-mail to our web <a href="mailto:webmaster@tennesseetrails.org">editor</a>.</p>
    
</div><!-- finishes trailer -->

</div><!-- finishes page -->

</body>
</html>

