<?php
include 'DBAccess.php';
$items = DBAccess::getConn()->query("SELECT id,item FROM tbl_tritems;");
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> 

</head>
<body>
<div data-role="page">
	<div data-role="header" data-from="ui-bar-c"><h1>Page Title</h1>
	<a href="#left-panel" class="ui-btn-b"  data-icon="bars" data-iconpos="notext" data-iconshadow="false" data-shadow="false">Menu</a>

	</div>
	<div role="main" class="ui-content">
	<form method="post" action="./saveTrInfo.php">
    <label for="travelarea">Item：</label>
    <select name="travelarea" id="select-custom-3"  data-native-menu="false">
        <option>Choose…</option>
       <?php
       while($result = $items->fetch(PDO::FETCH_ASSOC)){
           print("<option value='".$result['id']."'>".$result['item']."</option>");
       }
       ?>
    </select>
	
    <label for="username">名前：</label>
    <input name="username" id="username" type="text" value="" data-clear-btn="true">

	<fieldset data-role="controlgroup" data-type="horizontal">
	    <legend>人数：</legend>
	    <select name="count1" id="select-custom-1" data-native-menu="false">
	        <option value="0">男</option>
	        <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	        <option value="4">4</option>
	        <option value="5">5</option>
	        <option value="6">6</option>
	        <option value="7">7</option>
	        <option value="8">8</option>
	        <option value="9">9</option>
	        <option value="10">10</option>
	    </select>
	    <select name="count2" id="select-custom-2" data-native-menu="false">
	        <option value="0">女</option>
	        <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	        <option value="4">4</option>
	        <option value="5">5</option>
	        <option value="6">6</option>
	        <option value="7">7</option>
	        <option value="8">8</option>
	        <option value="9">9</option>
	        <option value="10">10</option>
	    </select>
	</fieldset>

	<label for="remarks">備考：</label>
    <textarea name="remarks" id="remarks"></textarea>

    <fieldset class="ui-grid-a">
            <div class="ui-block-a"><button class="ui-btn ui-icon-delete ui-btn-icon-right ui-corner-all" type="reset">Reset</button></div>
            <div class="ui-block-b"><button class="ui-btn ui-icon-check ui-btn-icon-right ui-corner-all " type="submit">Submit</button></div>
    </fieldset>


	</form>

	
	
	</div>
	
	<div id="left-panel" data-role="panel" data-display="overlay" data-position="left">
		<ul data-role="listview">
		<li data-role="list-divider"><h1>Divider</h1></li>
		    <li><a href="#">A</a></li>
		    <li><a href="#">B</a></li>
		    <li><a href="#">C</a></li>
		    <li><a href="#" data-rel="close" class="ui-icon-delete">Close</a></li>
		</ul>
    </div><!-- /panel -->

</div>
</body>
</html>