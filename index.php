<!doctype html>
<html lang="en">
  <head>
    <title>Ping por PHP</title>
	
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4541e18ef9.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
function mostrar(){document.getElementById('spi').hidden =false;}
function ocultar(){document.getElementById('spi').hidden =true;}


function showUser(str) {
    setInterval(mostrar(),3000);
    if (str == "") {
        setInterval(ocultar(),3000);
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    else { 
        if (window.XMLHttpRequest) {
            // para IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // para IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				
				setInterval(ocultar(),3000);
				
            }
        };
        xmlhttp.open("GET","ping.php?q="+str,true);
		
        xmlhttp.send();
    }


 }
 </script>
</head>
<body>
<div class="conatiner">
<div class="jumbotron ">
    <div class="container-fluid">
      <h3>Herramienta ping</h3><p>Por favor ingrese la ip para realizar la prueba.</p>
    </div>
  </div>
</div>
</body>