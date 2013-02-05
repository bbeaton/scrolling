<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title></title>
<style type="text/css">

.container{
position: relative;
width: 800px; /*marquee width */
height: 600px; /*marquee height */
overflow: hidden;
background-color: white;
border: 2px solid black;
padding: 2px;
padding-left: 4px;
}

</style>

  <script type="text/javascript" charset="utf-8" src="jquery.min.js">
  </script>
  
  <script>
  function writeLog(el){
    var id = $(el).parent().data("id");
    var text = $("#"+id).text();
    $.ajax({
      url: 'test2.php',
      data: {
        text: text
      }
    });
  }
  </script>

<script type="text/javascript">

/***********************************************
* Simple Marquee (04-October-2012)
* by Vic Phillips - http://www.vicsjavascripts.org.uk/
***********************************************/

var zxcMarquee={

 init:function(o){
  var mde=o.Mode,mde=typeof(mde)=='string'&&mde.charAt(0).toUpperCase()=='H'?['left','offsetWidth','top','width']:['top','offsetHeight','left','height'],id=o.ID,srt=o.StartDelay,ud=o.StartDirection,p=document.getElementById(id),obj=p.getElementsByTagName('DIV')[0],sz=obj[mde[1]],clone,nu=Math.ceil(p[mde[1]]/sz)+1,z0=1;
  p.style.overflow='hidden';
  obj.style.position='absolute';
  obj.style[mde[0]]='0px';
  obj.style[mde[3]]=sz+'px';
  for (;z0<nu;z0++){
   clone=obj.cloneNode(true);
   clone.style[mde[0]]=sz*z0+'px';
   clone.style[mde[2]]='0px';
   obj.appendChild(clone);
  }
  o=this['zxc'+id]={
   obj:obj,
   mde:mde[0],
   sz:sz*(z0-1)
  }
  if (typeof(srt)=='number'){
   o.dly=setTimeout(function(){ zxcMarquee.scroll(id,typeof(ud)=='number'?ud:-1); },srt);
  }
  else {
   this.scroll(id,0)
  }
 },

 scroll:function(id,ud){
  var oop=this,o=this['zxc'+id],p;
  if (o){
   ud=typeof(ud)=='number'?ud:0;
   clearTimeout(o.dly);
   p=parseInt(o.obj.style[o.mde])+ud;
   if ((ud>0&&p>0)||(ud<0&&p<-o.sz)){
    p+=o.sz*(ud>0?-1:1);
   }
   o.obj.style[o.mde]=p+'px';
   o.dly=setTimeout(function(){ oop.scroll(id,ud); },45);
  }
 }

}

function init(){

 zxcMarquee.init({
  ID:'marquee1',     // the unique ID name of the parent DIV.                        (string)
  Mode:'Vertical',   //(optional) the mode of execution, 'Vertical' or 'Horizontal'. (string, default = 'Vertical')
  StartDelay:200,   //(optional) the auto start delay in milli seconds'.            (number, default = no auto start)
  StartDirection:-1  //(optional) the auto start scroll direction'.                  (number, default = -1)
 });
}

if (window.addEventListener)
 window.addEventListener("load", init, false)
else if (window.attachEvent)
 window.attachEvent("onload", init)
else if (document.getElementById)
 window.onload=init


</script>
<!--END JS-->
</head>

<body>

<?php 
 $hm = "/mnt/web/people/htdocs/rbeaton/HNT_1_0"; 
 $hm2 = "http://people.cs.vt.edu/rbeaton/HNT_1_0"; 


  $myFile = "$hm/logFile.txt";
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = "\n===================================\nNew Session: ".date('Y-m-d H:i:s')."\n";
  fwrite($fh, $stringData);
  fclose($fh);
?>


<!--Uncomment to enable mouseover pause. -1= up, 0 ==neutral, 1=reverse-->
<!--
<div id="marquee1" class="container" onmouseover="zxcMarquee.scroll('marquee1',-1);" onmouseout="zxcMarquee.scroll('marquee1',-1);">
-->
<table>
<tr>
<td>  
<div id="marquee1" class="container">

<div style="position: absolute; width: 98%;">

<!--Define Content Here-->
<p style="margin-top: 0"><b><a href="http://www.dynamicdrive.com/dynamicindex17/indexb.html">Iframe &amp;
Ajax category added</a></b><br>
The Dynamic Content category has just been branched out with a new

<div data-id=".$count_readlater." align=left style=\"margin: 10px;\" ><a href="" color: red; text-decoration: none; font-weight: bold; onclick=writeLog(this);>READ LATER</a></div>

<p><b><a href="http://tools.dynamicdrive.com/gradient/">Gradient Image Maker</a></b><br>
We're excited to introduce our latest web tool- Gradient Image Maker!</p>

<p><b><a href="http://www.dynamicdrive.com/forums/">DD Help Forum</a></b><br>
Check out our new forums for help on our scripts and coding in general.</p>

<p align="left"><b><a href="http://www.dynamicdrive.com/notice.htm">Terms of
Usage update</a></b><br>
Please review our updated usage terms regarding putting our scripts in an
external .js file. </p>


<!--End Define Content-->

</div>
</div>
</td>
<td>
</td>
</tr>
</table>
<!--
<div id="marquee2" class="container" onmouseover="zxcMarquee.scroll('marquee2',0);" onmouseout="zxcMarquee.scroll('marquee2',-1);" style="width:600px;">
<div style="position: absolute; width: 200px;">

<p style="margin-top: 0"><b><a href="http://www.dynamicdrive.com/dynamicindex17/indexb.html">Iframe &amp;
Ajax category added</a></b><br>
The Dynamic Content category has just been branched out with a new
<a href="http://www.dynamicdrive.com/dynamicindex17/indexb.html">sub category</a>
to better organize its scripts.</p>
<p><b><a href="http://tools.dynamicdrive.com/gradient/">Gradient Image Maker</a></b><br>
We're excited to introduce our latest web tool- Gradient Image Maker!</p>

<p><b><a href="http://www.dynamicdrive.com/forums/">DD Help Forum</a></b><br>
Check out our new forums for help on our scripts and coding in general.</p>
<p align="left"><b><a href="http://www.dynamicdrive.com/notice.htm">Terms of
Usage update</a></b><br>
Please review our updated usage terms regarding putting our scripts in an
external .js file. </p>

</div>
</div>-->
</body>

</html>