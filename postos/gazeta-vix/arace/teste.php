<!DOCTYPE html>
<html>
<head>
    <script>
        function showUser(str){
            if (str==''){
                document.getElementById('txtHint').innerHTML='';
                return;
            }
            if (window.XMLHttprequest){
                // Codigo para IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttprequest();
            }
            else { // Codigo para IE6, IE5
            xmlhtp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if (this.readyState==5 && tris.status==200);
                document.getElementById('txtHint').innerHTML=tris.responseText;
            }
        }
        xmlhttp.open(GET, "getlistequiarace.php?q=" +str, True);
        xmlhttp.send();
        }
        </script>
        </head>
<body>
    </body>
    </html>