<html>
<head>
<title>Schema for database 'ride time'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<style type="text/css">
<!--
.toptext {font-family: verdana; color: #000000; font-size: 20px; font-weight: 600; width:550;  background-color:#999999; }
.normal {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; color: #000000}
.fieldheader {font-family: verdana; color: #000000; font-size: 12px; font-weight: 600; width:550;  background-color:#c0c0c0; }
.fieldcolumn {font-family: verdana; color: #000000; font-size: 10px; font-weight: 600; width:550;  background-color:#ffffff; }
.header {background-color: #ECE9D8;}
.headtext {font-family: verdana; color: #000000; font-size: 12; font-weight: 600; width:550;  background-color:#999999; }
BR.page {page-break-after: always}
//-->
</style>
</head>
<body bgcolor='#ffffff' topmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td class="toptext"><p align="center">ride time</td>
</tr>
</table>
<a name="header">&nbsp</a><ul>
	<li><a href="#car_catos"><p class="normal">car_catos</a></li>
	<li><a href="#car_page"><p class="normal">car_page</a></li>
	<li><a href="#car_test"><p class="normal">car_test</a></li>
	<li><a href="#car_user"><p class="normal">car_user</a></li>
	<li><a href="#cars"><p class="normal">cars</a></li>
	<li><a href="#user_cato"><p class="normal">user_cato</a></li>
</ul>
<br class=page>
<p><a name='car_catos'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">car_catos</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_cato_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_cato_text</td>
	<td align="left" valign="top"><p class="normal">varchar(200)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_cato_order</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_cato_enable</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_catos</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_cato_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<a href="#header"><p class="normal">Back</a><br class=page>
<p><a name='car_page'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">car_page</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_page_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_image1</td>
	<td align="left" valign="top"><p class="normal">varchar(300)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_image2</td>
	<td align="left" valign="top"><p class="normal">varchar(300)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_model</td>
	<td align="left" valign="top"><p class="normal">varchar(200)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_doors</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_color</td>
	<td align="left" valign="top"><p class="normal">varbinary(50)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_seats</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">first_registation</td>
	<td align="left" valign="top"><p class="normal">date</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_text</td>
	<td align="left" valign="top"><p class="normal">text</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_contact</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">mobile1</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">mobile2</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">email</td>
	<td align="left" valign="top"><p class="normal">varchar(200)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">MUL</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_page</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_page_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_page</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">fk_cars</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Foreign Key Relationships</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">FK Id</td>
	<td align="left" valign="top" class="fieldcolumn">Reference Table</td>
	<td align="left" valign="top" class="fieldcolumn">Source Column</td>
	<td align="left" valign="top" class="fieldcolumn">Target Column</td>
	<td align="left" valign="top" class="fieldcolumn">Extra Info</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">fk_cars</td>
	<td align="left" valign="top"><p class="normal">cars</td>
	<td align="left" valign="top"><p class="normal">`car_id`</td>
	<td align="left" valign="top"><p class="normal">`car_id`</td>
	<td align="left" valign="top"><p class="normal"> ON DELETE CASCADE ON UPDATE CASCADE</td>
<tr>
</table>


<a href="#header"><p class="normal">Back</a><br class=page>
<p><a name='car_test'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">car_test</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_test_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">test_name</td>
	<td align="left" valign="top"><p class="normal">varchar(200)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">test_photo</td>
	<td align="left" valign="top"><p class="normal">varchar(300)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">test_description</td>
	<td align="left" valign="top"><p class="normal">varchar(400)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_test</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_test_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<a href="#header"><p class="normal">Back</a><br class=page>
<p><a name='car_user'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">car_user</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_cato</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">MUL</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_name</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">pwd</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">email</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">phone_no</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_image_url</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_is_active</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">gender</td>
	<td align="left" valign="top"><p class="normal">int(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">last_login</td>
	<td align="left" valign="top"><p class="normal">datetime</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">created_date</td>
	<td align="left" valign="top"><p class="normal">datetime</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_user</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">user_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_user</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">fk_user_cato</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">user_cato</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Foreign Key Relationships</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">FK Id</td>
	<td align="left" valign="top" class="fieldcolumn">Reference Table</td>
	<td align="left" valign="top" class="fieldcolumn">Source Column</td>
	<td align="left" valign="top" class="fieldcolumn">Target Column</td>
	<td align="left" valign="top" class="fieldcolumn">Extra Info</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">fk_user_cato</td>
	<td align="left" valign="top"><p class="normal">user_cato</td>
	<td align="left" valign="top"><p class="normal">`user_cato`</td>
	<td align="left" valign="top"><p class="normal">`cato_id`</td>
	<td align="left" valign="top"><p class="normal"> ON DELETE CASCADE ON UPDATE CASCADE</td>
<tr>
</table>


<a href="#header"><p class="normal">Back</a><br class=page>
<p><a name='cars'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">cars</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_name</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_description</td>
	<td align="left" valign="top"><p class="normal">varchar(200)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_type</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_brand</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">gier_type</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">Fuel_type</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_km</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_engine_power</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">display_price</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">celling_price</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_is_active</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">car_cato_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">MUL</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">cars</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">cars</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">fk_car_cato</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">car_cato_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Foreign Key Relationships</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">FK Id</td>
	<td align="left" valign="top" class="fieldcolumn">Reference Table</td>
	<td align="left" valign="top" class="fieldcolumn">Source Column</td>
	<td align="left" valign="top" class="fieldcolumn">Target Column</td>
	<td align="left" valign="top" class="fieldcolumn">Extra Info</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">fk_car_cato</td>
	<td align="left" valign="top"><p class="normal">car_catos</td>
	<td align="left" valign="top"><p class="normal">`car_cato_id`</td>
	<td align="left" valign="top"><p class="normal">`car_cato_id`</td>
	<td align="left" valign="top"><p class="normal"> ON DELETE CASCADE ON UPDATE CASCADE</td>
<tr>
</table>


<a href="#header"><p class="normal">Back</a><br class=page>
<p><a name='user_cato'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">user_cato</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">cato_id</td>
	<td align="left" valign="top"><p class="normal">int(11)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">cato_text</td>
	<td align="left" valign="top"><p class="normal">varchar(30)</td>
	<td align="left" valign="top"><p class="normal">utf8mb4_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">cato_active</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">user_cato</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">cato_id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">3</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<a href="#header"><p class="normal">Back</a>
<h1 width="100%"></body>
</html>
