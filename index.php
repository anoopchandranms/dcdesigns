<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div id="sis-surround">
            <p id="change-para"> This is a paragraph</p>

            <button type="button" onclick="off()"> OFF</button>
            <img id="bulb" src="pic_bulboff.gif">
            <button type="button" onclick="on()"> ON</button>
        </div>
        <script>
            function off(){
                document.getElementById('bulb').src='pic_bulboff.gif';
            }
            function on(){
                document.getElementById('bulb').src="pic_bulbon.gif";
            }
            
        
        </script>
    </body>
</html>
