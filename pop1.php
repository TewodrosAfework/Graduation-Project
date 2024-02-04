<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Example : a popup contact form using jQuery and ColorBox plugin </title>

        <link rel="stylesheet" href="colorbox.css" />
     <script src="script/jqueryy.min.js"></script>
     <script src="script/jquery.colorbox-min.js"></script>

        <script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"1000px", height:"700px", transition:"fade", scrolling   : false});
            });
        </script>
        
        
        <style>
            #cboxOverlay{ background:#666666; }
        </style>
                
    </head>
    
    <body>
    
        <h4>A Popup Email Form Demonstration</h4>
        To make a popup form is easy. All you need is to make a form at <a href="http://www.formmail-maker.com">formmail-maker.com</a>, then use jQuery and ColorBox plugin to make it pop. 
        <p /><p />
        <p><h3>Click here for the popup form demo : <a class='iframe' href="http://localhost/cinema/may.php">Contact Us</a></h3></p>



    </body>
</html>