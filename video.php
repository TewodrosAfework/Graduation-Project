<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width = device-width">

<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"67d55191b950d108b73a3234856249da",petok:"588eaad8c894126a3102382615b4c4222d4851a4-1428918930-1800",zone:"goocode.net",rocket:"0",apps:{}}];CloudFlare.push({"apps":{"ape":"59635eca53e7eb523f08487bac767444"}});!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=7e13c32551/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="stylesheet" type="text/css" href="st.css">
<link href="video-js.css" rel="stylesheet" type="text/css">
<script src="video.js"></script>
<!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery.seat-charts.min.js"></script>
</head>
<body>
<div id="page">


<div class="section">


<p>

<style type="text/css">
.demo{width:700px; margin:40px auto 0 auto; min-height:450px;}
@media screen and (max-width: 360px) {.demo {width:340px}}

.front{width: 300px;margin: 5px 32px 45px 32px;background-color: #f0f0f0;	color: #666;text-align: center;padding: 3px;border-radius: 5px;}
.booking-details {float: right;position: relative;width:200px;height: 450px; }
.booking-details h3 {margin: 5px 5px 0 0;font-size: 16px;}
.booking-details p{line-height:26px; font-size:16px; color:#999}
.booking-details p span{color:#666}
div.seatCharts-cell {color: #182C4E;height: 25px;width: 25px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;}
div.seatCharts-seat {color: #fff;cursor: pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
div.seatCharts-row {height: 35px;}
div.seatCharts-seat.available {background-color: #B9DEA0;}

div.seatCharts-seat.pend {background-color:red; cursor: not-allowed;}

div.seatCharts-seat.focused {background-color: #76B474;border: none;}
div.seatCharts-seat.selected {background-color: #E6CAC4;}
<!--div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;}-->
div.seatCharts-container {border-right: 1px dotted #adadad;width: 400px;padding: 20px;float: left;}
div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 290px; margin-left: 200px;}
div.seatCharts-seat.available.first-class {background-color: #3a78c3;}
ul.seatCharts-legendList {padding-left: 0px;}
.seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;}
span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;}
.checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer}
#selected-seats {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;}
#selected-seats li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}
</style>
   <div class="demo">
   		<div id="seat-ma">
		<?php
           include('conn.php');
		   $video_id=$_GET['video_id'];
		   $query=mysql_query("SELECT * FROM `video` where video_id='$video_id'");
		   {
		   $row=mysql_fetch_array($query);
		   $location=$row['location'];
		   $profile=$row['profile'];
		   ?>
			
   <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264" 
      poster="video/<?php echo $profile; ?>"
      data-setup="{}">
    <source src="video/<?php echo $location; ?>" type='video/mp4' />
    
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>
     
         <?php
			}
			?>	 
		</div>
		<div class="booking-details">
			
					
			
					
			<div id="legend"></div>
		</div>
		<div style="clear:both"></div>
   </div>






</p>  	
    
</div>
<p>
<a href="javascript:history.back(-1)">BACK</a>&nbsp;&nbsp;<a href="http://www.goocode.net/js/73-jquery-election-seat-reservations-online-theater-piece.html">jQuery seat reservations</a>
</p>

</div>

<div style="display:none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253486628'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D1253486628%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></div>

<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>