<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Manager</title>
	<style>
		#popUpMenu {
			/* display: none; */

		}

		#popUpMenu ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		

		.nav {
			display: grid;
		}

		.nav-link {
			min-width: 300px;
			padding: 20px;
		}

		.folder {
			width: 100px;
			height: 100px;
			background-color: red;
		}

	</style>
</head>
<body>

<div class="folder" location="/var/wwww">

</div>

<div id="popUpMenu" style="display:none;">
	<div class="nav">
		<div class="nav-link" href="javascript:void(0);" onClick="">Copy</div>
		<div class="nav-link" href="javascript:void(0);" >Paste</div>
		<div class="nav-link" href="javascript:void(0);" >Cut</div>
	</div>
</div>

	
<script>

function popupMenu(x,y, open = true){
	var menu = document.getElementById("popUpMenu");
	if(open){
		menu.style.cssText = 'position: absolute;top:'+y+'px;left:'+x+'px;z-index:100;background:#DDD;';
	}else{
		menu.style.cssText = 'display:none;';
	}
}
	

if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
		popupMenu(e.clientX, e.clientY);
  }, false);
	
	document.addEventListener('click',function(e){
		popupMenu(e.clientX, e.clientY, false);
	},false);

} else {
  document.attachEvent('oncontextmenu', function() {
    alert("2You've tried to open context menu");
    window.event.returnValue = false;
  });
}
</script>
</body>
</html>