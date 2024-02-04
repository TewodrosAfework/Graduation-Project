<?php
include("session.php");  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width = device-width">
<title>jQuery seat reservations - GOOCODE Demo platform</title>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"67d55191b950d108b73a3234856249da",petok:"588eaad8c894126a3102382615b4c4222d4851a4-1428918930-1800",zone:"goocode.net",rocket:"0",apps:{}}];CloudFlare.push({"apps":{"ape":"59635eca53e7eb523f08487bac767444"}});!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=7e13c32551/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="stylesheet" type="text/css" href="css/st.css">
<script type="text/javascript" src="script/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="script/jquery.seat-charts.min.js"></script>
</head>
<body>
<div id="page">


<div class="section">
<h2 id="toc">Lem online seat reservations </h2>

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
div.seatCharts-seat.pend{background-color:rgb(255, 155, 0); cursor: not-allowed;}
div.seatCharts-seat.focused {background-color: #76B474;border: none;}
div.seatCharts-seat.selected {background-color: #E6CAC4;}
div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;}
div.seatCharts-container {border-right: 1px dotted #adadad;width: 400px;padding: 20px;float: left;}
div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 290px; margin-left: 150px;}
div.seatCharts-seat.available.first-class {background-color: #C33A98;}
ul.seatCharts-legendList {padding-left: 0px;}
.seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;}
span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;}
.checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer}
#selected-seats {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;}
#selected-seats li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}
</style>
   <div class="demo">
   		<div id="seat-map">
			<div class="front">SCREEN</div>					
		</div>
		<div class="booking-details">	
		<?php
    function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
     }
		   
   $ticketnum=createRandomPassword();   
		   
		   
		   include('conn.php');
		   $id=$_GET['id'];
		   $time=$_GET['time'];
		   $date=$_GET['date'];
		   $ID = $_SESSION['ID'];
           $querys=mysql_query("SELECT * FROM `accounts` where ID='$ID'");
		   $rows=mysql_fetch_array($querys);
		   $username=$rows['username'];
           $query=mysql_query("SELECT * FROM `moviesdetail` where No='$id'");
		   {
		   $row=mysql_fetch_array($query);
		   $title=$row['title'];
		   //tit="'.$row['title'].'";
         ?>
			<p>Movie: <span><?php echo $title;?></span></p>
			<p>Time: <span><?php echo $time;?></span></p>
			<p>Date: <span><?php echo $date;?></span></p>
			<p>USERNAME: <span><?php echo $username;?></span></p>
			<?php
			}
			?>
			<p>Seat: </p>
			<ul id="selected-seats"></ul>
			<p>Tickets: <span id="counter">0</span></p>
			<p>Total: <b>$<span id="total">0</span></b></p>
					
			<button class="checkout-button">BUY</button>
					
			<div id="legend"></div>
		</div>
		<div style="clear:both"></div>
   </div>

<script type="text/javascript">
//var price = 10; //price
var chair =5;
var str = [];
var temp = [];
$(document).ready(function() {
	var $cart = $('#selected-seats'), //Sitting Area
	$counter = $('#counter'), //Votes
	$total = $('#total'); //Total money
	
	
	var sc = $('#seat-map').seatCharts({
		map: [  //Seating chart
			
			'ffffffffff',
            'ffffffffff',
            '__________',
            'eeeeeeeeee',
            'eeeeeeeeee',
			'eeeeeeeeee',
			'eeeeeeeeee',
			'eeeeeeeeee',
			'eeeeeeeeee',
            'ee__ee__ee'
		],
		seats: { //Definition seat property
			f: {
				price   : 100,
				classes : 'first-class', 
				category: '1st'
			},
			e: {
				price   : 50,
				classes : 'economy-class', 
				category: '2nd'
			}					
		},
		naming : { //Define the ranks of other information
			top : true,
			//columns: ['A', 'B', 'C', '', 'D','F'],
			//rows: ['01','02','','03','04','05','06','07','08','09'],
			getLabel : function (character, row, column) {
				return column;
			}
		},
		legend : { //Definition legend
			node : $('#legend'),
			items : [
				[ 'f', 'available',   'Vip' ],
				[ 'e', 'available',   'Normal'],
				[ 'f', 'unavailable', 'Sold'],
				[ 'f', 'pend', 'Pend'],
			]					
		},
		click: function () { //Click event
		
			if (this.status() == 'available') { //optional seat
			
			if(str.length<5)
		{
		              str.push(this.settings.id);
			          //alert(str.join(','));
					  
				$('<li>R'+(this.settings.row+1)+' S'+this.settings.label+'</li>')
					.attr('id', 'cart-item-'+this.settings.id)
					.data('seatId', this.settings.id)
					.appendTo($cart);
					///////////////////array/////////
					
					/////////////////////////////
				$counter.text(sc.find('selected').length+1);
				//$total.text(recalculateTotal(sc)+price);
				 $total.text(recalculateTotal(sc)+this.data().price);
				return 'selected';
		}
				else
					return 'available';
				}
			else if (this.status() == 'selected') { //Checked
					//Update Number
					$counter.text(sc.find('selected').length-1);
					//update totalnum
					$total.text(recalculateTotal(sc)-this.data().price);
						
					//Delete reservation
					$('#cart-item-'+this.settings.id).remove();
					
					for(i=0;i<str.length;i++)
		            {
					if(str[i]!=this.settings.id)
					temp.push(str[i].slice());
					
					//str[i].pop();
					//str.push(temp[i].slice());
					//str.length++;
					
					}
					//str=[];
					str.length=0;
					for(i=0;i<temp.length;i++)
		            {
					str.push(temp[i].slice());
					}
					temp.length=0;
				   //alert(str.join(','));
					//optional
					return 'available';
			} 
			else if (this.status() == 'pend')
			{ 
			return 'pend';
			}
			else if (this.status() == 'unavailable') { //sold
				return 'unavailable';
			} else {
				return this.style();
			}
		
		}
	});
	///////////////////////php///////////////////
$(function () 
  {
  var times="<?php echo $time; ?>";
  var title="<?php echo $title; ?>";
        $.ajax({                                      
      url: 'array.php',                  //the script to call to get data          
      data: {'timesval':times,'titleval':title},                        //you can insert url argumnets here to pass to api.php
                                 //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of repl
      {
        
		
        
        // 3) Update html content
        //--------------------------------------------------------------------
        for(i=0;i<data.length;i++)
		{
		//alert("<b>id: </b>"+data[i].ID+"<b> seat: </b>"+data[i].seat+"<b> status: </b>"+data[i].status);
		sc.get([data[i].seat]).status(data[i].status);
		}
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
		
      } 
    });
  }); 
  
/////////insert///////////////////
  $(function() {
		          $('.checkout-button').click(function () {
		              var ticket=sc.find('selected').length;
					  var Total=recalculateTotal(sc);
					  var title="<?php echo $title; ?>";
					  var time="<?php echo $time; ?>";
					  var date="<?php echo $date; ?>";
					  var ticketnum="<?php echo $ticketnum; ?>";
					  var username="<?php echo $username; ?>";
					   $.ajax({
								type: "POST",
								url: "insert.php",
								
								data: {'Arrayval':str,'ticketval':ticket,'Totalval':Total,'titleval':title,'timeval':time,'dateval':date,'ticketnum':ticketnum,'username':username},
								success: function(data) {
								 document.location.href='recite.php';
			                            }
		                    });
		            });
		        });
		
});
        	 
//sum total money
function recalculateTotal(sc) {
	var total = 0;
	sc.find('selected').each(function () {
		total += this.data().price;
	});
			
	return total;
}
</script>
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