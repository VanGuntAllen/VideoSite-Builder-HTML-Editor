
<?php 
//////////////////////////////////////////////
//  VideoSite-Builder-HTML-Editor Site and Video Admin Design and Script by Van-Gunt Allen VGA Digital Lab Templates .,
// copyright 2013 vga.smtvs.com vanguntallen@gmail.com
//  GPL-3.0 License
//////////////////////////////////////////////



if (isset($_POST["filename"])) {
	$fname = $_POST["filename"];
	$file = stripslashes($_POST["file"]);
	$fp = @fopen($fname, "w");
	if ($fp) {
		fwrite($fp, $file);
		fclose($fp);
		echo "Saved to $fname successfully!<p>";
echo "<a href=\"$fname\" target=\"_new\">Viwe Your page</a>";
	}
	
}

if (isset($_GET["f"])) 
	$fname = stripslashes($_GET["f"]);
	if (file_exists($fname)) 
		$fp = @fopen($fname, "r");
		if (filesize($fname) !== 0) 
			$loadfile = fread($fp, filesize($fname));
			$loadfile = htmlspecialchars($loadfile);
			fclose($fp);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VideoSite Builder HTML Editor  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
body{margin-top:50px;background: rgb(36, 39, 41);}

    </style>
  
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
    
    
    <link rel="shortcut icon" href="img/ico/favicon.ico">
		<link href="http://smtvs.com/nyteglow.com_filemanager-1/css/style.css" rel="stylesheet" type="text/css" />
		<link href="http://smtvs.com/nyteglow.com_filemanager-1/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]><style>
	.img-container span, .img-container-mini span {
	    display: inline-block;
	    height: 100%;
	}
	</style><![endif]-->
	<script src="http://smtvs.com/nyteglow.com_filemanager-1/js/plugins.js"></script>
	<script src="http://smtvs.com/nyteglow.com_filemanager-1/js/jPlayer/jquery.jplayer/jquery.jplayer.js"></script>
	<script src="http://smtvs.com/nyteglow.com_filemanager-1/js/modernizr.custom.js"></script>
		    <script src="http://feather.aviary.com/imaging/v2/editor.js"></script>
	
    <SCRIPT Language="Javascript">

/*
This script is written by Eric (Webcrawl@usa.net)
For full source code, installation instructions,
100's more DHTML scripts, and Terms Of
Use, visit dynamicdrive.com
*/

function printit(){  
if (window.print) {
    window.print() ;  
} else {
    var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
    WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";  
}
}
</script>
    
    
     	<style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script>
  $(function() {
   $( "#draggable" ).draggable();
    $( "#draggable1" ).draggable();
     $( "#draggable2" ).draggable();
    $( "#draggable3" ).draggable();
    $( "#draggable4" ).draggable();
    $( "#draggable5" ).draggable();
     $( "#draggable7" ).draggable();
      $( "#draggable8" ).draggable();
       $( "#draggable9" ).draggable();
         $( "#draggable10" ).draggable();
          $( "#draggable11" ).draggable();
           $( "#draggable12" ).draggable();
            $( "#draggable13" ).draggable();
             $( "#draggable14" ).draggable();
              $( "#draggable15" ).draggable();
  });
  </script>
   <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable();
  });
  </script>

    
    
<script type="text/javascript">
<!--
 
function Buildhtml(form, Action){
var Buildhtml="";
var html="";


if(Action==1){
if(html!=null)  {        
        
Buildhtml += " <nav class=\"navbar navbar-default\" role=\"navigation\">\r\n";

	
 Buildhtml += " <div class=\"container\">\r\n";
 
    Buildhtml += "<div class=\"navbar-header\">\r\n";
      Buildhtml += "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-slide-dropdown\">\r\n";
       Buildhtml += " <span class=\"sr-only\">Toggle navigation</span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
      Buildhtml += "</button>\r\n";
     Buildhtml += " <a class=\"navbar-brand\" href=\"#\">Brand</a>\r\n";
   Buildhtml += " </div>\r\n";


   Buildhtml += " <div class=\"collapse navbar-collapse\" id=\"bs-slide-dropdown\">\r\n";
   Buildhtml += " <ul class=\"nav navbar-nav\">\r\n";
   Buildhtml += " <li><a href=\"#\">Link</a></li>\r\n";
   Buildhtml += "  <li><a href=\"#\">Link</a></li>\r\n";
        
        
        	Buildhtml += "<li class=\"dropdown\">\r\n";
	Buildhtml += "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <span class=\"caret\"></span></a>\r\n";				
	Buildhtml += " <ul class=\"dropdown-menu\" role=\"menu\">\r\n";
               Buildhtml += " <li><a href=\"#\">Action</a></li>\r\n";
               Buildhtml += " <li><a href=\"#\">Another action</a></li>\r\n";
              Buildhtml += "  <li><a href=\"#\">Something else here</a></li>\r\n";
               Buildhtml += " <li class=\"divider\"></li>\r\n";
              Buildhtml += "  <li><a href=\"\">Separated link</a></li>\r\n";
            Buildhtml += "  </ul>\r\n";          
           Buildhtml += " </li>\r\n";
        Buildhtml += "</ul>\r\n";
        
        
       Buildhtml += " <form class=\"navbar-form navbar-left\" role=\"search\">\r\n";
           Buildhtml += " <div class=\"form-group\">\r\n";
           Buildhtml += "   <input type=\"text\" class=\"form-control\" placeholder=\"Search\">";
           Buildhtml += " </div>\r\n";
         Buildhtml += "   <button type=\"submit\" class=\"btn btn-default\">Submit</button>";
       Buildhtml += " </form>\r\n";
       Buildhtml += " <ul class=\"nav navbar-nav navbar-right\">\r\n";
              Buildhtml += " <li><a href=\"#\">Link</a></li>\r\n";
              Buildhtml += " <li class=\"dropdown\">\r\n";
              Buildhtml += "   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <span class=\"caret\"></span></a>\r\n";
                Buildhtml += " <ul class=\"dropdown-menu\" role=\"menu\">\r\n";
                Buildhtml += "   <li><a href=\"#\">Action</a></li>\r\n";
                   Buildhtml += "<li><a href=\"#\">Another action</a></li>\r\n";
                  Buildhtml += " <li><a href=\"#\">Something else here</a></li>\r\n";
                  Buildhtml += " <li class=\"divider\"></li>\r\n";
                 Buildhtml += "  <li><a href=\"#\">Separated link</a></li>\r\n";
                Buildhtml += " </ul>\r\n";
              Buildhtml += " </li>\r\n";
          Buildhtml += " </ul>\r\n";
   
   Buildhtml += "</nav>\r\n";
    
      }
     }
     
if(Action==2){
if(html!=null)  {        
        
Buildhtml += " <nav class=\"navbar navbar-default\" role=\"navigation\">\r\n";

	
 Buildhtml += " <div class=\"container\">\r\n";
 
    Buildhtml += "<div class=\"navbar-header\">\r\n";
      Buildhtml += "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-slide-dropdown\">\r\n";
       Buildhtml += " <span class=\"sr-only\">Toggle navigation</span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
       Buildhtml += " <span class=\"icon-bar\"></span>\r\n";
      Buildhtml += "</button>\r\n";
     Buildhtml += " <a class=\"navbar-brand\" href=\"#\">Brand</a>\r\n";
   Buildhtml += " </div>\r\n";


   Buildhtml += " <div class=\"collapse navbar-collapse\" id=\"bs-slide-dropdown\">\r\n";
   Buildhtml += " <ul class=\"nav navbar-nav\">\r\n";
   Buildhtml += " <li><a href=\"#\">Link</a></li>\r\n";
   Buildhtml += "  <li><a href=\"#\">Link</a></li>\r\n";
      Buildhtml += "  <li><a href=\"#\">Link</a></li>\r\n";  
        Buildhtml += "  <li><a href=\"#\">Link</a></li>\r\n";
    
      Buildhtml += "<li class=\"dropdown\">\r\n";
      
           Buildhtml += " </li>\r\n";
       Buildhtml += " <form class=\"navbar-form navbar-left\" role=\"search\">\r\n";
           Buildhtml += " <div class=\"form-group\">\r\n";
           Buildhtml += "   <input type=\"text\" class=\"form-control\" placeholder=\"Search\">";
           Buildhtml += " </div>\r\n";
         Buildhtml += "   <button type=\"submit\" class=\"btn btn-default\">Submit</button>";
       Buildhtml += " </form>\r\n";
       Buildhtml += " <ul class=\"nav navbar-nav navbar-right\">\r\n";
              Buildhtml += " <li><a href=\"#\">Link</a></li>\r\n";
              Buildhtml += " <li class=\"dropdown\">\r\n";
              Buildhtml += "   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <span class=\"caret\"></span></a>\r\n";
                Buildhtml += " <ul class=\"dropdown-menu\" role=\"menu\">\r\n";
                Buildhtml += "   <li><a href=\"#\">Action</a></li>\r\n";
                   Buildhtml += "<li><a href=\"#\">Another action</a></li>\r\n";
                  Buildhtml += " <li><a href=\"#\">Something else here</a></li>\r\n";
                  Buildhtml += " <li class=\"divider\"></li>\r\n";
                 Buildhtml += "  <li><a href=\"#\">Separated link</a></li>\r\n";
                Buildhtml += " </ul>\r\n";
              Buildhtml += " </li>\r\n";
          Buildhtml += " </ul>\r\n";
   
   Buildhtml += "</nav>\r\n";
    
      } 
      
      
   } 	
	

if(Action==3){
if(html!=null)  {   

       Buildhtml += " <!-- Page Content -->\r\n";
       Buildhtml += " <div class=\"container\">\r\n";

         Buildhtml += "   <!-- Heading Row -->\r\n";
          Buildhtml += "  <div class=\"row\">\r\n";
             Buildhtml += "   <div class=\"col-md-8\">\r\n";
                Buildhtml += "    <img class=\"img-responsive img-rounded\" src=\"http://placehold.it/900x350\" alt=\"\">\r\n";
              Buildhtml += "  </div>\r\n";
              Buildhtml += "  <!-- /.col-md-8 -->\r\n";
              Buildhtml += "  <div class=\"col-md-4\">\r\n";
                Buildhtml += "    <h1>Business Name or Tagline</h1>\r\n";
                  Buildhtml += "  <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>\r\n";
                 Buildhtml += "   <a class=\"btn btn-primary btn-lg\" href=\"#\">Call to Action!</a>\r\n";
              Buildhtml += "  </div>\r\n";
             Buildhtml += "   <!-- /.col-md-4 -->\r\n";
          Buildhtml += "  </div>\r\n";
          Buildhtml += "  <!-- /.row -->\r\n";

         Buildhtml += "   <hr>\r\n";

        Buildhtml += " <!-- Call to Action Well -->\r\n";
         Buildhtml += "<div class=\"row\">\r\n";
             Buildhtml += "<div class=\"col-lg-12\">\r\n";
                Buildhtml += " <div class=\"well text-center\">\r\n";
                  Buildhtml += "   This is a well that is a great spot for a business tagline or phone number for easy access!\r\n";
               Buildhtml += "  </div>\r\n";
            Buildhtml += " </div>\r\n";
           Buildhtml += "  <!-- /.col-lg-12 -->\r\n";
        Buildhtml += " </div>\r\n";
        Buildhtml += " <!-- /.row -->\r\n";

        Buildhtml += " <!-- Content Row -->\r\n";
        Buildhtml += " <div class=\"row\">\r\n";
            Buildhtml += " <div class=\"col-md-4\">\r\n";
             Buildhtml += "    <h2>Heading 1</h2>\r\n";
               Buildhtml += "  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>\r\n";
             Buildhtml += "    <a class=\"btn btn-default\" href=\"#\">More Info</a>\r\n";
            Buildhtml += " </div>\r\n";
            
           Buildhtml += "  <!-- /.col-md-4 --> \r\n";
           Buildhtml += "  <div class=\"col-md-4\">\r\n";
               Buildhtml += "  <h2>Heading 2</h2>\r\n";
               Buildhtml += "  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>\r\n";
               Buildhtml += "  <a class=\"btn btn-default\" href=\"#\">More Info</a>\r\n";
            Buildhtml += " </div>\r\n";
            
           Buildhtml += "  <!-- /.col-md-4 -->\r\n";
           Buildhtml += "  <div class=\"col-md-4\">\r\n";
              Buildhtml += "   <h2>Heading 3</h2>\r\n";
              Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>\r\n";
               Buildhtml += "  <a class=\"btn btn-default\" href=\"#\">More Info</a>\r\n";
           Buildhtml += "  </div>\r\n";
          Buildhtml += "   <!-- /.col-md-4 -->\r\n";
       Buildhtml += "  </div>\r\n";
       Buildhtml += "  <!-- /.row -->\r\n";


  }
}


if(Action==4){
if(html!=null)  {  

     Buildhtml += " <!-- Page Content -->\r\n";
     Buildhtml += " <div class=\"container\">\r\n";
   
         Buildhtml += " <!-- Jumbotron Header -->\r\n";
         Buildhtml += " <header class=\"jumbotron hero-spacer\">\r\n";
        
          
             Buildhtml += " <h1>A Warm Welcome!</h1>\r\n";
            
             Buildhtml += " <p>We have a list of media admin software in the media cloud to customize your web site. You get a Vadeo/Audio site builder , Flash - html5 players generator,instantly publish and manage your videos ,images and pages.</p>\r\n";
            Buildhtml += "  <p>You my buy media tools from us or pay has  needed, just like a phone you only pay when you talk ,you only pay for time yo use . WE will install media site manager has soon! has you buy them , BUY now!  below a list of media ware tools pick one  .</p>\r\n";
                                        
           Buildhtml += " <p><a class=\"btn btn-primary btn-large\">Call to action!</a>\r\n";
          Buildhtml += "    </p>\r\n";
        Buildhtml += "  </header>\r\n";

           Buildhtml += "  <hr>\r\n";

             Buildhtml += "<!-- Title -->\r\n";
            Buildhtml += " <div class=\"row\">\r\n";
                Buildhtml += " <div class=\"col-lg-12\">\r\n";
                    Buildhtml += " <h3>Latest Features</h3>\r\n";
              Buildhtml += "   </div>\r\n";
             Buildhtml += "</div>\r\n";
           Buildhtml += "  <!-- /.row -->\r\n";

            Buildhtml += " <!-- Page Features -->\r\n";
      
      
      
      

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

           
             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

        Buildhtml += "</div>\r\n";
       Buildhtml += "<!-- /.row -->\r\n";
      }


 }
	

if(Action==5){
if(html!=null)  {  

 Buildhtml += "  <!-- Content Section -->\r\n";
   Buildhtml += "   <section>\r\n";
      Buildhtml += "    <div class=\"container\">\r\n";
        Buildhtml += " <li class=\"col-lg-3 col-sm-4 col-xs-6\">\r\n";
	Buildhtml += " <a href=\"#\" title=\"Claudio Bravo, antes su debut con el Barça en la Liga\">\r\n";
	Buildhtml += " 	<img src=\"http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg\" alt=\"Video\" class=\"img-responsive\" height=\"130px\" />\r\n";
	Buildhtml += " <h4>Claudio Bravo, antes su debut con el Barça en la Liga</h4>\r\n";
	Buildhtml += " <span class=\"glyphicon glyphicon-play-circle\"></span>\r\n";
	Buildhtml += " <span class=\"duration\">03:15</span>\r\n";
	Buildhtml += " </a></li>\r\n";
    Buildhtml += "</ul> \r\n";
         Buildhtml += "     <div class=\"row\">\r\n";
           Buildhtml += "       <div class=\"col-lg-12\">\r\n";
               Buildhtml += "       <h1 class=\"section-heading\">Section Heading</h1>\r\n";
                Buildhtml += "      <p class=\"lead section-lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                Buildhtml += "      <p class=\"section-paragraph\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>\r\n";
               Buildhtml += "   </div>\r\n";
            Buildhtml += "  </div>\r\n";
  Buildhtml += "  </div>\r\n";
    Buildhtml += "  </section>\r\n";

	   }


 }
	if(Action==6){
    if(html!=null)  {  
	
	Buildhtml += "<ul class=\"list-unstyled video-list-thumbs row\">\r\n";
	Buildhtml += " <li class=\"col-lg-3 col-sm-4 col-xs-6\">\r\n";
	Buildhtml += " <a href=\"#\" title=\"Claudio Bravo, antes su debut con el Barça en la Liga\">\r\n";
	Buildhtml += " 	<img src=\"http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg\" alt=\"Video\" class=\"img-responsive\" height=\"130px\" />\r\n";
	Buildhtml += " <h4>Claudio Bravo, antes su debut con el Barça en la Liga</h4>\r\n";
	Buildhtml += " <span class=\"glyphicon glyphicon-play-circle\"></span>\r\n";
	Buildhtml += " <span class=\"duration\">03:15</span>\r\n";
	Buildhtml += " </a></li>\r\n";
    Buildhtml += " <li class=\"col-lg-3 col-sm-4 col-xs-6\">\r\n";
	Buildhtml += " <a href=\"#\" title=\"Claudio Bravo, antes su debut con el Barça en la Liga\">\r\n";
	Buildhtml += " 	<img src=\"http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg\" alt=\"Video\" class=\"img-responsive\" height=\"130px\" />\r\n";
	Buildhtml += " <h4>Claudio Bravo, antes su debut con el Barça en la Liga</h4>\r\n";
	Buildhtml += " <span class=\"glyphicon glyphicon-play-circle\"></span>\r\n";
	Buildhtml += " <span class=\"duration\">03:15</span>\r\n";
	Buildhtml += " </a></li>\r\n";

    Buildhtml += " <li class=\"col-lg-3 col-sm-4 col-xs-6\">\r\n";
	Buildhtml += " <a href=\"#\" title=\"Claudio Bravo, antes su debut con el Barça en la Liga\">\r\n";
	Buildhtml += " 	<img src=\"http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg\" alt=\"Video\" class=\"img-responsive\" height=\"130px\" />\r\n";
	Buildhtml += " <h4>Claudio Bravo, antes su debut con el Barça en la Liga</h4>\r\n";
	Buildhtml += " <span class=\"glyphicon glyphicon-play-circle\"></span>\r\n";
	Buildhtml += " <span class=\"duration\">03:15</span>\r\n";
	Buildhtml += " </a></li>\r\n";
    Buildhtml += "</ul> \r\n";
   }


 }
	

	if(Action==7){
    if(html!=null)  {
 Buildhtml += " <hr>\r\n";
Buildhtml += "<!-- Footer -->\r\n";
        Buildhtml += "<footer>\r\n";
           Buildhtml += " <div class=\"row\">\r\n";
            Buildhtml += "    <div class=\"col-lg-12\">\r\n";
               Buildhtml += "     <p>Copyright &copy; Your Website 2014</p>\r\n";
             Buildhtml += "   </div>\r\n";
           Buildhtml += " </div>\r\n";
       Buildhtml += " </footer>\r\n";

   Buildhtml += " </div>\r\n";
  Buildhtml += "  <!-- /.container -->\r\n";

  }


 }
		
		

if(Action==8){
    if(html!=null)  {

 Buildhtml += "  <!-- Content Section -->\r\n";
   Buildhtml += "   <section>\r\n";
      Buildhtml += "    <div class=\"container\">\r\n";
         Buildhtml += "     <div class=\"row\">\r\n";
           Buildhtml += "       <div class=\"col-lg-12\">\r\n";
               Buildhtml += "       <h1 class=\"section-heading\">Section Heading</h1>\r\n";
                Buildhtml += "      <p class=\"lead section-lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                Buildhtml += "      <p class=\"section-paragraph\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>\r\n";
               Buildhtml += "   </div>\r\n";
            Buildhtml += "  </div>\r\n";
  Buildhtml += "  </div>\r\n";
    Buildhtml += "  </section>\r\n";



 }


 }	

if(Action==9){

  if(html!=null)  {
  Buildhtml += " <!-- Page Features -->\r\n";
      
      
      
      

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

           
             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

        Buildhtml += "</div>\r\n";
       Buildhtml += "<!-- /.row -->\r\n";
      }


 }
	
if(Action==10){

  if(html!=null)  {
  Buildhtml += " <!-- Page Features -->\r\n";
      
      
      
      

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Play Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

           
             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Play Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Play Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

             Buildhtml += " <div class=\"col-md-3 col-sm-6 hero-feature\">\r\n";
                  Buildhtml += "<div class=\"thumbnail\">\r\n";
                    Buildhtml += "  <img src=\"http://placehold.it/800x500\" alt=\"\">\r\n";
                    Buildhtml += "  <div class=\"caption\">\r\n";
                      Buildhtml += "    <h3>Feature Label</h3>\r\n";
                       Buildhtml += "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n";
                       Buildhtml += "   <p><p>\r\n";
                        Buildhtml += "      <a href=\"#\" class=\"btn btn-primary\">Play Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>\r\n";
                      Buildhtml += "    </p>\r\n";
                     Buildhtml += " </div>\r\n";
                 Buildhtml += " </div>\r\n";
              Buildhtml += "</div>\r\n";

        Buildhtml += "</div>\r\n";
       Buildhtml += "<!-- /.row -->\r\n";
      }


 }	

	
form.body.value+=Buildhtml;
}

   // -->
</script>
<script type="text/javascript">
<!--

function init() {
 hideFileView();
hideGraphic();
hideMediaPlayer();
hideFMediaPlayer();
  hideAudioForm();
hideVideoForm();
	hideAnchor();
hideFontForm();

	
hidePageProperties();
	hideLinkColorMenus();
 hideBackColorMenus();
  hideActiveLinkColorMenus();
	  hideVisitedLinkColorMenus();
		hideTextColorMenus();
		hideMetaTag();
	
hideDesign();
 
}
 </script>
     <script type="text/javascript"> 

function showFlashGen() {
 
		document.getElementById('draggable7').style.display = "block";
}


function hideFlashGen(){
  
	
	document.getElementById('draggable7').style.display = "none";
	
}

function showH5Properties() {
 
		document.getElementById('H5properties').style.display = "block";
}


function hideH5Properties() {
  
	
	document.getElementById('H5properties').style.display = "none";
	
}


/* ---------------------------------------------------------------------- *\
  Function    : hide hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideSourceCode() {
  
	document.getElementById('source_code').style.display = "none";
	
}
 


/* ---------------------------------------------------------------------- *\
  Function    : show hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showSourceCode() {
  
	document.getElementById('source_code').style.display = "block";
	
}





/* ---------------------------------------------------------------------- *\
  Function    : hide hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideDesign() {
  
	document.getElementById('design').style.display = "none";
}
 


/* ---------------------------------------------------------------------- *\
  Function    : show hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showDesign() {
  
	document.getElementById('design').style.display = "block";
}


/* ---------------------------------------------------------------------- *\
  Function    : hidePageBodyView()
  Description : Hide the PageBodyView used for selecting PageBodyView
	              . 
\* ---------------------------------------------------------------------- */

function hidePageBodyView(){

document.getElementById('PageView').style.display = "none";
document.getElementById('source_code').style.display = "none";

 
}


/* ---------------------------------------------------------------------- *\
  Function    : showPageBodyView()
  Description : Show the PageBodyView used for selecting t 
	              PageBodyView. 
\* ---------------------------------------------------------------------- */
function showPageBodyView()
{
document.getElementById('PageView').style.display = "block";
  
document.getElementById('source_code').style.display = "none";

}


function hideAnchor()
{
document.getElementById('anchor').style.display = "none";
}
function showAnchor()
{

document.getElementById('anchor').style.display = "block";
}
  
  function hideMediaList()
{
document.getElementById('medialist').style.display = "none";
}
function showMediaList()
{

document.getElementById('medialist').style.display = "block";
}
  
  
 function hideAudioForm()
{
document.getElementById('audioform').style.display = "none";
}
function showAudioForm()
{

document.getElementById('audioform').style.display = "block";
}
 
 
 function hideVideoForm()
{
document.getElementById('videoform').style.display = "none";
}
function showVideoForm()
{

document.getElementById('videoform').style.display = "block";
}  
  
  
  
 
 function hideFontForm()
{
document.getElementById('fontform').style.display = "none";
}
function showFontForm()
{

document.getElementById('fontform').style.display = "block";
}  
  
 


// -->


</script>




<script type="text/javascript">
<!--

var qsParm = new Array();


/* ---------------------------------------------------------------------- *\
  Function    : retrieveColor()
  Description : Retrieves the textarea ID for which the color will be inserted into.
\* ---------------------------------------------------------------------- */
function retreiveColor() {
  var query = window.location.search.substring(1);
  var parms = query.split('&');
  for (var i=0; i<parms.length; i++) {
    var pos = parms[i].indexOf('=');
    if (pos > 0) {
       var key = parms[i].substring(0,pos);
       var val = parms[i].substring(pos+1);
       qsParm[key] = val;
    }
  }
  document.getElementById('enterColor').value = "#" + (qsParm['color']);
	 document.getElementById('enterFontColor').value = "#" + (qsParm['color']);
	 document.getElementById('enterBackgroundColor').value = "#" + (qsParm['color']);
	  document.getElementById('enterActiveLinkColor').value = "#" + (qsParm['color']);
		document.getElementById('enterVisitedLinkColor').value = "#" + (qsParm['color']);
		 document.getElementById('enterTextColor').value = "#" + (qsParm['color']);
document.getElementById('enterLinkColor').value = "#" + (qsParm['color']);
}

/* ---------------------------------------------------------------------- *\
  Function    : hide hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideFormProperties() {
  
	document.getElementById('formproperties').style.display = "none";
}
 


/* ---------------------------------------------------------------------- *\
  Function    : show hideFormProperties()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showFormProperties() {
  
	document.getElementById('formproperties').style.display = "block";
}


/* ---------------------------------------------------------------------- *\
  Function    : hideColorMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideBackColorMenus() {
  
	document.getElementById('backColorMenu').style.display = "none";
}



/* ---------------------------------------------------------------------- *\
  Function    : showBackgroundColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showBackgroundColorMenu(val) {
showBackgroundColorMenu.value = val;
  document.getElementById('backColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewBackgroundColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewBackColor(color) {
document.getElementById('enterBackgroundColor').value = color;
  document.getElementById('backgroundColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectBackgroundColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectBackColor(color) {
  document.getElementById('backgroundColorPreview').style.backgroundColor = color;  
	document.getElementById('backColorMenu').style.display = "none";
	
}


/* ---------------------------------------------------------------------- *\
  Function    : hideActiveLinkColorMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideActiveLinkColorMenus() {
  
	document.getElementById('activelinkColorMenu').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showActiveLinkColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showActiveLinkColorMenu() {
  document.getElementById('activelinkColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewActiveLinkColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewActiveLinkColor(color) {
document.getElementById('enterActiveLinkColor').value = color;
  document.getElementById('activelinkColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectActiveLinkColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectActiveLinkColor(color) {
  document.getElementById('activelinkColorPreview').style.backgroundColor = color;  
	document.getElementById('activelinkColorMenu').style.display = "none";
	
}

/* ---------------------------------------------------------------------- *\
  Function    : hideVisitedLinkColorMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideVisitedLinkColorMenus() {
  
	document.getElementById('visitedlinkColorMenu').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showVisitedLinkColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showVisitedLinkColorMenu() {
  document.getElementById('visitedlinkColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewVisitedLinkColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewVisitedLinkColor(color) {
document.getElementById('enterVisitedLinkColor').value = color;
  document.getElementById('visitedlinkColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectVisitedLinkColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectVisitedLinkColor(color) {
  document.getElementById('visitedlinkColorPreview').style.backgroundColor = color;  
	document.getElementById('visitedlinkColorMenu').style.display = "none";
	 
	
}

/* ---------------------------------------------------------------------- *\
  Function    : hideLinkColorMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideLinkColorMenus() {
  
	document.getElementById('linkColorMenu').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showLinkColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showLinkColorMenu() {
  document.getElementById('linkColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewLinkColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewLinkColor(color) {
document.getElementById('enterLinkColor').value = color;
  document.getElementById('linkColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectLinkColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectLinkColor(color) {
  document.getElementById('linkColorPreview').style.backgroundColor = color;  
	document.getElementById('linkColorMenu').style.display = "none";
	
}
/* ---------------------------------------------------------------------- *\
  Function    : hideTextMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideTextColorMenus() {
  
	document.getElementById('textColorMenu').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showTextColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showTextColorMenu() {
  document.getElementById('textColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewTextColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewTextColor(color) {
document.getElementById('enterTextColor').value = color;
  document.getElementById('textColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectTextdColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectTextColor(color) {
  document.getElementById('textColorPreview').style.backgroundColor = color;  
	document.getElementById('textColorMenu').style.display = "none";
	
}





/* ---------------------------------------------------------------------- *\
  Function    : hidePageProperties()
  Description : Hide the PageProperties. 
\* ---------------------------------------------------------------------- */
function hidePageProperties() {
  
	document.getElementById('pageProperties').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showPageProperties()
  Description : Show the PageProperties so user can select the PageProperties. 
\* ---------------------------------------------------------------------- */
function showPageProperties() {
  document.getElementById('pageProperties').style.display = "block";
	document.getElementById('HtmlPage').style.display = "none";

}




/* ---------------------------------------------------------------------- *\
  Function    : hideMetaTag();
  Description : Hide the MetaTag. 
\* ---------------------------------------------------------------------- */
function hideMetaTag() {
  
	document.getElementById('metaTag').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showMetaAg()
  Description : Show the MetaTag so user can select the MetaTag. 
\* ---------------------------------------------------------------------- */
function showMetaTag() {
  document.getElementById('metaTag').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : hideFontColorMenus()
  Description : Hide the menus used for selecting the border color and 
	              shading color. 
\* ---------------------------------------------------------------------- */
function hideFontColorMenus() {
  
	document.getElementById('FontColorMenu').style.display = "none";
}


/* ---------------------------------------------------------------------- *\
  Function    : showShadingColorMenu()
  Description : Show the shading color menu so user can select the table's 
	              shading color. 
\* ---------------------------------------------------------------------- */
function showFontColorMenu() {
  document.getElementById('FontColorMenu').style.display = "block";
}



/* ---------------------------------------------------------------------- *\
  Function    : previewShadingColor()
  Description : When mousing over a shading color display the color in the 
	              preview square.
\* ---------------------------------------------------------------------- */
function previewFontColor(color) {
document.getElementById('enterFontColor').value = color;
  document.getElementById('FontColorPreview').style.backgroundColor = color;  
}



/* ---------------------------------------------------------------------- *\
  Function    : selectShadingColor()
  Description : Assigns the selected shading color to 
	              <input type="hidden" id="shadingColor">.
\* ---------------------------------------------------------------------- */
function selectFontColor(color) {
  document.getElementById('FontColorPreview').style.backgroundColor = color;  
	document.getElementById('FontColorMenu').style.display = "none";
	
}


function showFontfield() {
 
		document.getElementById('font_field').style.display = "block";
}


function hideFontfield() {
  
	
	document.getElementById('font_field').style.display = "none";
	
}


function showFMediaPlayer() {
 
		document.getElementById('fmediaplayer').style.display = "block";
}


function hideFMediaPlayer() {
  
	
	document.getElementById('fmediaplayer').style.display = "none";
	
}


function showMediaPlayer() {
 
		document.getElementById('mediaPlayer').style.display = "block";
}


function hideMediaPlayer() {
  
	
	document.getElementById('mediaPlayer').style.display = "none";
	
}


function showGraphic() {
 
		document.getElementById('graphic').style.display = "block";
}


function hideGraphic() {
  
	
	document.getElementById('graphic').style.display = "none";
	
}



function hideDIVfield() {
  
	
	document.getElementById('div_field').style.display = "none";
	
}

function showDIVfield() {
 
		document.getElementById('div_field').style.display = "block";
}




/* ---------------------------------------------------------------------- *\
  Function    : showFileView()
  Description : Show the View used for selecting 
	             . 
\* ---------------------------------------------------------------------- */
function showFileView() {
 
		document.getElementById('fileview').style.display = "block";
}


function hideFileView(){
  
	
	document.getElementById('fileview').style.display = "none";
	
}


</script>

    <script type="text/javascript">



function AddText(form, Action){
var AddTxt="";
var txt="";
if(Action==1){  
      
if(txt!=null)           
AddTxt="<div style=\"POSITION: absolute;left:"+form.font_left.value+"px;top:"+form.font_top.value+"px; Z-INDEX:100;\" ><font size=\""+form.text_size.value+"\" face=\""+form.text_face.value+"\"  color=\""+form.font_color.value+"\" >"+form.font_text.value+"</font ><div>\r\n";  
}







if(Action==2){
if(txt!=null){   
AddTxt+="<div style=\"POSITION: absolute;left:"+form.flashplayer_div_left.value+"px;top:"+form.flashplayer_div_top.value+"px; Z-INDEX:100;\" align=\""+form.flash_div_alignment.value+"\">\r\n";


AddTxt+="<embed src=\""+form.flash_swfs_src.value+"\" width=\""+form.flashplayer_width.value+"\" height=\""+form.flashplayer_height.value+"\"id=\"StrobeMediaPlayback\"quality=\""+form.flashquality.value+"\"bgcolor=\"#000000\"name=\"StrobeMediaPlayback\"allowfullscreen=\""+form.fullscreen.value+"\"pluginspage=\"http://www.adobe.com/go/getflashplayer\"flashvars=\"&src="+form.flashvars_src.value+"&autoHideControlBar="+form.autoHideControlBar.value+"&streamType=recorded&autoPlay="+form.flashautoplay.value+"\" type=\"application/x-shockwave-flash\"> </embed></object></div>\r\n";

} 
}



		
			
if(Action==3) { 
txt=prompt(" Image,jpg Name ","1_nameimage.jpg");
AddTxt="<a href=\""+txt+"\""; 


txt=prompt(" Image Name ","Name");
AddTxt+="title=\""+txt+"\"";

txt=prompt(" Image rel link ","Link");
AddTxt+="rel=\""+txt+"\">";


txt=prompt("URL for Image","URL of 1_thumb.jpg Image");
   
AddTxt+="<img src=\""+txt+"\""; 
if(txt!=null){ 
txt=prompt("width for Image","width"); 
AddTxt+=" width=\""+txt+"\"";
txt=prompt("alt text for Image"," Image description text");  
AddTxt+=" alt=\""+txt+"\">";
AddTxt+=" /<a>";
}
}



if(Action==4) {  
txt=prompt("Text to be made BOLD.","Text");     
if(txt!=null)           
AddTxt="<b>"+txt+"</b>";        
}



if(Action==5) {  
txt=prompt("Text to be italicized","Text");     
if(txt!=null)           
AddTxt="<i>"+txt+"</i>";        
}



if(Action==6) {  
txt=prompt("Text to be Heading","Text");     
if(txt!=null)           
AddTxt="<h1>"+txt+"</h1>";        
}


if(Action==7) AddTxt="<br/>\r\n";
if(Action==8) AddTxt="<hr>\r\n";



if(Action==9) {  
      
if(txt!=null){          
AddTxt="<a  class=\""+form.button.value+"\" href=\""+form.AnchorType.value+""+form.AnchorUrl.value+"\"  align=\""+form.alignment.value+"\">";              
              
AddTxt+=form.anchor.value+"</a>\r\n";         
   }
}



  

if(Action==10) { 
txt=prompt("URL for Image","URL");
   
AddTxt="<img src=\""+txt+"\""; 
if(txt!=null){ 
txt=prompt("width for Image","width"); 
AddTxt+=" width=\""+txt+"\"";
txt=prompt("alt text for Image","alt text");  
AddTxt+=" alt=\""+txt+"\">";
}
}


if(Action==11) { 
  
if(txt!=null) 
AddTxt+="<div style=\"POSITION: absolute;left:"+form.div_heights.value+"px;top:"+form.div_widths.value+"px; Z-INDEX:100;\" align="+form.playeralignment.value+">\r\n";
AddTxt+="<embed src=\""+form.WindowVideoFile.value+"\" id=\""+form.id.value+"\" border=\""+form.border.value+"\" autostart=\""+form.autostart.value+"\" loop=\""+form.loop.value+"\" width=\""+form.PlayerWidth .value+"\" height=\""+form.PlayerHeight.value+"\" align=\""+form.playeralignment.value+"\"></div>\r\n";  
 
}

if(Action==12) {  
txt=prompt("Text to be made BOLD.","Text");     
if(txt!=null)           
AddTxt="<CENTER>"+txt+"</CENTER>";        
}

if(Action==13) {
if(txt!=null)
AddTxt="<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" summary=\"\">\r\n";
AddTxt+="<tr>\r\n";
AddTxt+="<td>";
AddTxt+="Texe</td>\r\n";
AddTxt+="</tr>\r\n";
AddTxt+="</table>\r\n"; 
}


if(Action==14) {
if(txt!=null)
AddTxt="<div style=\"POSITION: absolute;left:"+form.audio_left.value+"px;top:"+form.audio_top.value+"px; Z-INDEX:100;\" ><audio src=\""+form.audio.value+"\"    width=\""+form.audio_width.value+"\" controls=\"controls\"></audio></div>\r\n" ;  
} 




if(Action==15) {
if(txt!=null)
AddTxt="<video  class=\"video\" src=\""+form.video.value+"\"  audio=\""+form.video_audio.value+"\" autoplay=\""+form.video_autoplay.value+"\" poster=\""+form.video_poster.value+"\" loop=\""+form.video_loop.value+"\"   preload=\""+form.video_preload.value+"\"  width=\""+form.video_width.value+"\" height=\""+form.video_height.value+"\" controls=\"controls\"   type=\""+form.video_filetype.value+"\"></video>\r\n" ;  
} 




if(Action==17) AddTxt="<p align=\"justify\">Your Text</p>\r\n";
if(Action==18) AddTxt="<p align=\"left\">Your Text</p>\r\n";
if(Action==19) AddTxt="<p align=\"center\"> Your Text</p>\r\n";
if(Action==20) AddTxt="<p align=right>Your Text </p>\r\n";

if(Action==21) AddTxt="<u> Your Text</u>\r\n";


if(Action==22) AddTxt="<li>Text<li>Text<li>Text</li>\r\n";


if(Action==23) AddTxt="<p>Item 1</p><p>Item 2</p><p>Item 3</p>\r\n";


if(Action==24) {

AddTxt="<div  style=\"font-family: arial, verdana, helvetica; font-size: 11px; width: 200px;\"><ol start=\""+form.media_id.value+"\"><li class=\"media\"><a class=\"pull-left\" href=\"http://vga.smtvs.com/imusic-demo/m-new-menu-04.php?p="+form.media_id.value+"\"><img src=\"http://vga.smtvs.com/imusic-demo/cover_img/"+form.media_image.value+"\" width=\"77\" alt=\"\"></a><h4 class=\"media-heading\"><p class=\"by-author\">Title:&nbsp;"+form.media_name.value+"</h4>&nbsp;"+form.media_des.value+"</div></li>\r\n";

}



if(Action==25){  
txt=prompt("Text for the level 2 header.","Text");      
if(txt!=null)           
AddTxt="<h3>"+txt+"</h3>\r\n";  
}


if(Action==26){
 AddTxt="<div style=\"POSITION: absolute;left:"+form.div_imageLeft.value+"px;top:"+form.div_imageTop.value+"px; Z-INDEX:1;\" align="+form.playeralignment.value+"><img alt=\""+form.imageAlt.value+"\" src=\""+form.image.value+"\" height=\""+form.imageHeight.value+"\" width=\""+form.imageWidth.value+"\" align=\""+form.imageAlignment.value+"\" border=\""+form.imageBorder.value+"\"/><div>\r\n";
}



if(Action==30) { 
     
if(txt!=null){   
AddTxt="<a href=\""+form.linkType.value+""+form.url.value+"\" align=\""+form.linkalignment.value+"\"><h5>"+form.link.value+"</h5></a>\r\n";
  }
}  

if(Action==31) {
if(txt!=null)
AddTxt="<link href=\"http://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/slate/bootstrap.min.css\" rel=\"stylesheet\">\r\n";


}

/* ---------------------------------------------------------------------- *\
  Function    : Adds DIV Layer to page
  Description : Layer   with style and id=Layer  title= your title
\* ---------------------------------------------------------------------- */



if(Action==32) {
if(txt!=null) {
AddTxt="<div  style=\"Z-INDEX:"+form.div_style_index.value+"; position:"+form.div_position.value+"; border: 2px solid #E68282; border-color: #E68282 #650000 #650000  #E68282; ; background-image:url("+form.div_image.value+");  background-color:#FFFFFF; left:623px;top:311px;  WIDTH:"+form.div_width.value+"px; HEIGHT:"+form.div_height.value+"px;\" align="+form.div_align.value+" title="+form.div_title.value+" id="+form.div_id.value+">"+form.field.value+"</div>";
 }
 }
 






/* ---------------------------------------------------------------------- *\
  Function    : Adds DIV to page
  Description :  DIV   style 
\* ---------------------------------------------------------------------- */
 


if(Action==33) {
if(txt!=null) {
AddTxt="\r\n<div>";

AddTxt="<div id="+form.div_id.value+" style=\"Z-INDEX:"+form.div_style_index.value+"   position:"+form.div_position.value+";left:623px;top:311px;  WIDTH:"+form.div_width.value+"px; HEIGHT:"+form.div_height.value+"px;\" align="+form.div_align.value+">"+form.field.value+"</div>";
 }

}


/* ---------------------------------------------------------------------- *\
  Function    : Adds DIV to page
  Description :  DIV   class 
\* ---------------------------------------------------------------------- */
 
if(Action==34) {
if(txt!=null)  { 
AddTxt="<DIV class="+form.div_class.value+"> "+form.field.value+" </DIV> ";
 
 AddTxt+=" \r\n";         

 }
 } 

/* ---------------------------------------------------------------------- *\
  Function    : Adds DIV to page
  Description :  DIV  with  and class id
\* ---------------------------------------------------------------------- */
 
if(Action==35) {
if(txt!=null)  { 
AddTxt="<DIV id="+form.div_id.value+" class="+form.div_class.value+" >";
 
 AddTxt+=" "+form.field.value+" </DIV> \r\n";         

 }
}




/* ---------------------------------------------------------------------- *\
  Function    : Adds DIV to page
  Description :  DIV   style 
\* ---------------------------------------------------------------------- */
 


if(Action==36) {
if(txt!=null) {
AddTxt="<div  style=\"Z-INDEX:"+form.div_style_index.value+"; position:"+form.div_position.value+"; border: 2px solid #E68282; border-color: #E68282 #650000 #650000  #E68282;   background-color:#FFFFFF; left:623px;top:311px;  WIDTH:"+form.div_width.value+"px; HEIGHT:"+form.div_height.value+"px;\" align="+form.div_align.value+" title="+form.div_title.value+" id="+form.div_id.value+">"+form.field.value+"</div>";
 }
 }
 














if(Action==38) { 
if(txt!=null)  {
 AddformTxt+=txt+'<div class=\"col-lg-6\">'; 
 AddformTxt+=txt+'<<form name=\"undefined\" method=\"\" action=\"\" id=\"\"  autocomplete=\"on\" >'; 
AddformTxt+=txt+'<div class=\"form-group  \">';                                          
AddformTxt+=txt+'Name:<br><input class=\"\" class=\"form-control\"  size=\"\" type=text id=Editbox1  name=name value=><p>';
AddformTxt+=txt+'</div>';
AddformTxt+=txt+'<div class=\"form-group  \">';
AddformTxt+=txt+'Email:<br><input class=\"\" class=\"form-control\" size=\"\" type=text id=Editbox2  name=email value=><p>';
AddformTxt+=txt+"</div>";

                                          
AddformTxt+=txt+'<div class=\"form-group\">';
                                          
AddformTxt+=txt+'Subject<br><textarea class=\"\" class=\"form-control\" name=Subject id=TextArea1 rows="13" cols="72"></textarea><p>';
AddformTxt+=txt+'</div>';
AddformTxt+=txt+'<input class=\"\" type=submit id=Button1 name=Button1 value=Send >';
AddformTxt+=txt+'</div>';
AddformTxt+=txt+'</form>'; 
 }
 }
 
 
if(Action==39) 
if(txt!=null)  {

AddTxt="<H1>Your Text Here</H1>\r\n<p>";

 }

if(Action==40) AddTxt="<H2>Your Text Here</H2>\r\n<p>";
if(Action==41) AddTxt="<H3>Your Text Here</H3>\r\n<p>";
if(Action==42) AddTxt="<H4>Your Text Here</H4>\r\n<p>";
if(Action==43) AddTxt="<H5>Your Text Here</H5>\r\n<p>";
if(Action==44) AddTxt="<H6>Your Text Here</H6>\r\n<p>";

form.body.value+=AddTxt;

}

   </script>

    
    
    
<script type="text/javascript">
<!--
function View(form) {
msg=open("","DisplayWindow","status=1,scrollbars=1");
msg.document.write(form.area2.value);
}


function Generate(form) {
var txt="<!DOCTYPE HTML PUBLIC \""+form.document_type.value+"\">\r\n";

txt+="<HTML>\r\n";

txt+="<TITLE>"+form.Name.value+"</TITLE>\r\n";
txt+="<HEAD>\r\n";
txt+="<META http-equiv=\"Content-Type\" content=\"text/html; charset="+form.characterSet.value+"\">\r\n";
txt+="<META name=\"AUTHOR\" content=\""+form.meta_author.value+"\">\r\n";
txt+="<META name=\"KEYWORDS\" content=\""+form.meta_keywords.value+"\">\r\n";
txt+="<META name=\"DESCRIPTION\" content=\""+form.meta_description.value+"\">\r\n";
txt+="<META NAME=\"Generator\" CONTENT=\"VCMS\">\r\n";



 txt+="<link rel=\"stylesheet\" href=\"http://smtvs.com/assets1/plugins/bootstrap/css/bootstrap.css\" >\n";
    txt+=" <link rel=\"stylesheet\" href=\"http://smtvs.com/assets1/css/main.css\" >\n";
    txt+=" <link rel=\"stylesheet\" href=\"http://smtvs.com/assets1/css/theme.css\" >\n";
   txt+="  <link rel=\"stylesheet\" href=\"http://smtvs.com/assets1/css/MoneAdmin.css\" >\n";
    txt+=" <link rel=\"stylesheet\" href=\"http://smtvs.com/assets1/plugins/Font-Awesome/css/font-awesome.css\" >\n";
   txt+=" <link href=\"http://smtvs.com/assets1/plugins/dataTables/dataTables.bootstrap.css\" rel=\"stylesheet\" >\n";

txt+="<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\">\n";
txt+="</\script>\n";
  txt+="<script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\">\n";
  txt+="</\script>\n";


   txt += "<style>\n";  
   txt += " * { margin: 0; padding: 0; }\n";  
     txt += "  body {\n";  
     txt   += "font: 16px/1.4 Georgia, Serif;\n";  
   
    txt += " }\n";  
 txt += " #page-wrap {\n";  
   txt += "	width: 50%;\n";  
   txt   += " margin: 0px auto;\n";  
   txt += " }\n";  
  txt += " h1 { font-weight: normal; font-size: 42px; }\n";  
   txt += "  h1, p, pre, video, h2, figure, h3, ol, script, style { margin: 0 0 15px 0; }\n";  
   txt += " h2 { margin-top: 0px; }\n";  
    txt += " h1 { margin-bottom: 40px; }\n";  
  txt  += " li { margin: 0 0 5px 20px; }\n";  
   txt  += " article { background: white; padding: 10%; }\n";  
   txt += " pre, article style, article script {\n";  
   txt += " 	white-space: pre;\n";  
  txt += "	display: block;\n";  
   txt  += "	padding: 10px;\n";  
  txt  += "	background: #eee;\n";  
    txt  += "overflow-x: auto;\n";  
    txt  += "font: 12px Monaco, MonoSpace;\n";  
  txt+= "  }\n";  

   txt+= " img { max-width: 100%; }\n";  

  txt+= " figure { display: block; background: #000; padding: 10px; }\n";  
  txt+= "  figcaption { display: block; text-align: center; margin: 10px 0; font-style: italic; font-size: 14px; orphans: 2; }\n";  
 txt+= " </style>\n";  




 txt+="<style scoped>video {\n";
 txt+="width: 50%    !important;\n";
txt+=" height: auto   !important;\n";
txt+="}</style>";
txt+="<link rel=\"shortcut icon\" href=\""+form.favortites_icon.value+"\">\r\n";

txt+="</HEAD>\r\n";




txt+="<BODY bgcolor=\""+form.enterBackgroundColor.value+"\" background=\""+form.background.value+"\" text=\""+form.enterTextColor.value+"\"   link=\""+form.enterLinkColor.value+"\"   vlink=\""+form.enterVisitedLinkColor.value+"\" alink=\""+form.enterActiveLinkColor.value+"\"   leftmargin=\""+form.Leftmargin.value+"\" topmargin=\""+form.Topmargin.value+"\">\r\n";

 
txt+="<font face=\""+form.font_face.value+"\" size=\""+form.font_size.value+"\" color=\""+form.enterTextColor.value+"\">\r\n";


if(form.body.value)    
txt+=""+form.body.value+"\r\n"; 


if(form.font_face.value){
txt+="\r\n";
}

if(form.font_size.value){
txt+="\r\n";
}




if(form.Name.value){ 
txt+="\r\n";  
    
}

txt+="</font></body></html>";
form.area2.value=txt;
}


// -->
</script>

  
</head>
<body   onLoad="init();"><p align=right>
<?php echo $_SESSION['username']; ?>  You are login <p align=right>
	<div class="container">
	
	
 <div class="col-lg-6"  id="draggable11"     style="Z-INDEX: 40;" >
                    <div class="panel panel-default" id="fileview">
                        <div class="panel-heading">
                           File Manager is draggable
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

<table border="1" width="1938.0" cellspacing="0" cellpadding="0" class="t1">
          <tbody>
          <tr>
          
               
 

  <td valign="top" class="td2">
                <p class="p3"><span class="s1"><b>Format</b></span></p>
              </td>
              
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Edit</b></span></p>
              </td>
              
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>View</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Delete</b></span></p>
              </td>           
<?php 
            
						 $files = glob("*.html");
            foreach ($files as $file) { if (!is_dir($file)) {?>
   
                 <tr>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  <span> <a href="/nyteglow.com/videobuilder-2.php?f=<?php echo $file; ?>">
              <span class="glyphicon glyphicon-file"></span>html
                
                </a></span>
              </td>
              
              <td valign="top" class="td5">
                <p class="p4"><span class="s1" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif, margin-left: 2px; width: 98px;"> 
                <a href="/nyteglow.com/videobuilder-2.php?f=<?php echo $file; ?>">     <span class="glyphicon glyphicon-edit"></span><?php echo basename($file); ?>"</span></p></a>
              </td> 
              
                <td valign="top" class="td4">
                <p class="p3"><span class="s1" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif, margin-left: 2px; width: 98px;">
                <a href="<?php echo $file; ?>"><span class="glyphicon glyphicon-eye-open"></span><?php echo $file; ?></a></span>
              </td>
              <td valign="top" class="td4">
             
                <FORM action="http://nyteglow.com/delete2.php">
                <input id="text" type="text"  name="deleting"  value="<?php echo $file; ?>" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif, margin-left: 2px; width: 108px;border: 0px;" />
                <input type="submit" value="Delete"  style="font-size: 8px; font-family: arial, verdana, helvetica, sans serif, margin-left: 2px; width: 48px;"></FORM>	
				
                
               </td>
              
              </tr><?php }} ?>
                </table> 
       </div>
<button class="btn btn-primary"  type="button" value="button"  style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 98px;"onclick="hideFileView();returnfalse;">CloseManager</button> 

                        </div>
                    </div>
                </div>
            </div>



               
</td></tr>
</table>
    <div class="row">
        <div class="col-md-13">
     <form name="form1" method="post" action="">
            
        	
            <div class="panel panel-default" style="Z-INDEX: 27; POSITION: absolute; background-color: #F7F7F7;   TOP: 66px; LEFT: 15px">
                <div class="panel-heading">
                    <div class="btn-group">
                    <a class="tip btn paste-btn"  href=""   data-toggle="tooltip" title="New file"> <i class="fa fa-file-o"></i></i></a>
                       
                        <button type="submit" class="btn btn-default"   name="save_file"  data-toggle="tooltip" title="SaveFile">
                            <i class="fa fa-save"></i>
                        </button>
                        
                        
                        <button type="button" class="btn btn-default"   onClick="printit()" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="hidePageBodyView();showSourceCode(); return false;" title="Source code">
                            <i class="fa fa-code"></i> Source
                        </button>
                         <button type="button" class="btn btn-default" data-toggle="tooltip" onClick="hideSourceCode();hidePageBodyView(); showPageProperties();return false;" title="PageProperties">
                            <i class="fa fa-align-justify"></i>
                        </button>     
                     
			<a class="tip btn paste-btn"  href="#" onclick="showPageBodyView();hideSourceCode(); return false;" title="PageBody"><i class="fa fa-edit"></i></a>
					<a   class="tip btn paste-btn"  href="#" onclick="preview.document.write (document.getElementsByTagName ('TEXTAREA')[0].value); preview.document.close(); preview.focus(); showDesign(); hideSourceCode();return false;" title="Live Preview">  <i class="fa fa-eye"></i></a>
		                        
  <button type="button" class="btn btn-default" onclick="Generate(this.form)"return false;" data-toggle="tooltip" title="Generate Source">
                          <i class="fa fa-gear "> </i>  
                        </button>
              
                     <button class="btn btn-default"   onclick="View(this.form);return false;" Title="Web PreView" >  <i class="fa fa-globe"></i>    </button>

                    
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,4);return false;"title="Bold">
                            <i class="fa fa-bold"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,5);return false;" title="Italic">
                            <i class="fa fa-italic"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,21);return false;" title="Underline">
                            <i class="fa fa-underline"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,8);return false;" title="Line">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-default"  onclick="AddText(this.form,7);return false;"data-toggle="tooltip" title="Break">
                          Brk
                        </button>
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,39);return false;"data-toggle="tooltip" title="Heading 1">
                          H1
                        </button>
                        
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,40);return false;"data-toggle="tooltip" title=" Heading2">
                          H2
                        </button>
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,41);return false;"data-toggle="tooltip" title="Heading 3">
                          H3
                        </button>
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,42);return false;"data-toggle="tooltip" title="Heading 4">
                          H4
                        </button>
                        
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,43);return false;"data-toggle="tooltip" title="Heading 5">
                          H5
                        </button>
                         <button type="button" class="btn btn-default"  onclick="AddText(this.form,44);return false;"data-toggle="tooltip" title="Heading 6">
                          H6
                        </button>
                        
                      
                        
                    </div>
                   
                    <div class="btn-group">
                 
                      
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,18);return false;"title="Align left">
                            <i class="fa fa-align-left"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,19);return false;"title="Align center">
                            <i class="fa fa-align-center"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,20);return false;" title="Align right">
                            <i class="fa fa-align-right"></i>
                        </button>
                       
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,22);return false;" title="Numbered list">
                            <i class="fa fa-list-ol"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,23);return false;" title="Bulleted list">
                            <i class="fa fa-list-ul"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip"   onClick="showAnchor();return false;" title="Link">
                            <i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,3);return false;"  title="Image Gallery">
                            <i class="fa fa-picture-o"></i>
                        </button>
                    </div>
                
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"  data-toggle="tooltip"  onClick="showGraphic();return false;"      title="Picture">
                            <i class="fa fa-picture-o"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,13);return false;"title="Table">
                            <i class="fa fa-table"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Font" onClick="showFontForm();return false;" title="Font">
                            <i class="fa fa-font"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" onClick="showVideoForm();return false;" title="HTML5 Video">
                            <i class="fa fa-html5"></i>
                        </button>
                          
                        <button type="button" class="btn btn-default" onclick="showFMediaPlayer();return false;" data-toggle="tooltip" title="Flash player">
                            <i class="fa fa-flash"></i>
                        </button>
                            
                        <button type="button" class="btn btn-default" onclick="showMediaPlayer();return false;" data-toggle="tooltip" title="Window player">
                            <i class="fa fa-windows"></i>
                        </button>
                         <button type="button" class="btn btn-default" data-toggle="tooltip" onClick="showAudioForm();return false;" title="HTML5 audio player">
                            <i class="fa fa-music"></i>
                        </button>
                      
                        </div>  <div class="btn-group">
                  	<button class="btn btn-default"   onclick="showFileView();return false;" Title="FileManager" >  <i class="fa fa-file"></i>   </button>
                  	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,1);return  false;"  title="Memu bar   template1" >   <i class="fa fa-align-justify"></i> </button>
	
              	<button class="btn btn-default"   onclick="Buildhtml(this.form,2);return  false;"  title="Memu bar  template 2" > <i class="fa fa-align-justify"></i>  </button>
              
	
	 <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="AddText(this.form,31);return false;"  title="Memu Style Color">
                            <i class="fa fa-file"></i>
                            
                        </button>
                        
                        	 <div class="btn-group">
                        	 	<button class="btn btn-default"   onclick="Buildhtml(this.form,3);return  false;"  title="boby template 1" >  <i class="fa fa-file"></i>   </button>
	<button class="btn btn-default"   onclick="Buildhtml(this.form,4);return  false;"  title="body  template 2" >  <i class="fa fa-file"></i>   </button>
	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,5);return  false;"  title="Content Section  template & Image" >  <i class="fa fa-file"></i>   </button>
	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,8);return  false;"  title="Content Section  template" >  <i class="fa fa-file"></i>   </button>
	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,9);return  false;"  title="List  template" >  <i class="fa fa-file"></i>   </button>
	<button class="btn btn-default"   onclick="Buildhtml(this.form,10);return  false;"  title="video list  template " >  <i class="fa fa-file"></i>   </button>
	
	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,6);return  false;"  title="video list  template #2" >  <i class="fa fa-file"></i>   </button>
	
	
	<button class="btn btn-default"   onclick="Buildhtml(this.form,7);return  false;"  title="Footer  template" >  <i class="fa fa-file"></i>   </button>
	
	
	
       
	    </div> 
	    
	    
                    </div>
                </div>
                
             <!-- --------------------------------
  Function    :source_code Properties 
  Description : source_code Textarea
 ----------------------------------------------------------------------> 
   
                
                
                 <div  id="PageView" class="panel-body"   style="Z-INDEX: 27; POSITION: absolute; background-color: #F7F7F7;   TOP: 76px; LEFT: 0px">
                
                
                
                <textarea id="" name="body" rows="30" cols="500"  class="form-control"></textarea>
        <P>Video-pagebuilder-html-editor Porwered By SMTVS-VGA
            
                </div><P>
                <div   id="source_code" class="panel-body" >
                
               
                
                <textarea id="area2" name="file" rows="30" cols="464"  class="form-control"><?php echo $loadfile; ?></textarea>

              
<input  type="text" class="form-control" name="filename" id=data value="<?php echo $fname; ?>" size="30" style="POSITION: absolute;  font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 300px;TOP: 691px; LEFT:14px" />
	
</div>
               
            </div>
        </div>
    </div>
</div>
    	<div  id="draggable15">
<div id="design"  class="panel panel-default" style="Z-INDEX: 27; POSITION: absolute; background-color: #F7F7F7;font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px;  WIDTH: 1400px; TOP: 170px; LEFT: 20px" >
<div class="panel-heading" >
                        LiveView
                        </div>
<iframe src="about:blank" name="preview" style="height:614px;width:1400px;border:solid 1px #b9b8b6;background:#ffffff" frameborder="0" >
</iframe>
<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 102px;top:200px;" onClick="hideDesign();return false;">Close</button>

</div></div>
<!-- --------------------------------
  Function    :PageProperties Tag  
  Description : Page Properties 
 ----------------------------------------------------------------------> 

<div id="fontform" >
<div  id="draggable5" class="panel panel-default" style="Z-INDEX: 27; POSITION:  relative; background-color: #F7F7F7; border: 2px solid #CCCCCC; border-color: #CCCCCC #121212 #121212 #CCCCCC;  TOP: 26px; LEFT: 0px;Width:340px">   
      
<div class="panel-heading" >
                        Font Properties
                        </div>
          
       <div class="panel-body " style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 10px; ">   
       	Insert
<button type="button" class="btn btn-default"  onclick="AddText(this.form,1);return false;" data-toggle="tooltip" title="Insert AudioPlayer">
   <i class="fa fa-font"></i>
                        </button ><br/><br/>
     	<select class="form-control" name="text_face"  style="font-family: arial, verdana, helvetica; font-size: 11px; width:100px;">
	 <option value="">Set Font</option>
	 <option value="Arial">Arial</option>
	 <option value="Arial Baltic">Arial Baltic</option>
	 <option value="Arial Black">Arial Black</option>
	 <option value="Arial CE">Arial Black</option>
	 <option value="Arial CYR">Arial CYR</option>
	 <option value="BATAVIA">BATAVIA</option>
	 <option value="Belwe Bd BT">Belwe Bd BT</option>
	 <option value="BatangChe">BatangChe</option>
	 <option value="Belwe Lt BT">Belwe Lt BT</option>
	 <option value="Blade Runner Movie Font">Blade Runner Movie Font</option>
	 <option value="Bookman Old Style">Bookman Old Style</option>
	 <option value="Belwe Cn BT">    Belwe Cn BT</option>
<option value="BrowalliaUPC">   BrowalliaUPC</option>
<option value="Belwe Lt BT">    Belwe Lt BT</option>
<option value="Browallia New">  Browallia New</option>
<option value="CASMIRA">CASMIRA</option>
<option value="Calibri ">   Calibri</option>
<option value="Cambria ">   Cambria</option>
<option value="Clarendon Hv BT "> Clarendon Hv BT</option>
<option value="Candy Round BTN">  Candy Round BTN</option>
<option value="ConcursoItalian BTN">  ConcursoItalian BTN</option>
<option value="Clarendon Lt BT "> Clarendon Lt BT</option>
<option value="Clarendon Blk BT "> Clarendon Blk BT</option>
<option value="Candy Round BTN Lt "> Candy Round BTN Lt</option>
<option value="Candara  Candara"> Candara Candara</option>
<option value="Comic Sans MS">  Comic Sans MS</option>
<option value="Consolas "> Consolas</option>
<option value="Constantia "> Constantia</option>
<option value="Corbel  ">Corbel</option>
<option value="CordiaUPC "> CordiaUPC</option>
<option value="Courier New "> Courier New</option>
<option value="Courier New CE "> Courier New CE</option>
<option value="Courier New CYR "> Courier New CYR</option>
<option value="Courier New TUR ">  Courier New TUR</option>
<option value="DFKai-SB "> DFKai-SB</option>
<option value="DaunPenh "> DaunPenh</option>
<option value="David "> David</option>
<option value="DilleniaUPC">  DilleniaUPC</option>
<option value="DokChampa  ">  DokChampa</option>
<option value="Dotum  ">   Dotum</option>
<option value="DotumChe "> DotumChe</option>
<option value="ELEGANCE">   ELEGANCE</option>
<option value="ELLIS  ">   ELLIS</option>
<option value="EXCESS  "> EXCESS</option>
<option value="Ebrima  "> Ebrima</option>
<option value="English157 BT">   English157 BT</option>
<option value="Estrangelo Edessa ">   Estrangelo Edessa</option>
<option value="EucrosiaUPC  ">  EucrosiaUPC</option>
<option value="Euphemia ">  Euphemia</option>
<option value="FangSong   "> FangSong</option>
<option value="Franklin Gothic Medium ">  Franklin Gothic Medium</option>
<option value="FrankRuehl  "> FrankRuehl</option>
<option value="Freehand575 BT   "> Freehand575 BT</option>
<option value="FreesiaUPC ">     FreesiaUPC</option>
<option value="Freehand521 BT">Freehand521 BT</option>
<option value="GENUINE   ">   GENUINE</option>
<option value="Gabriola  ">   Gabriola</option>
<option value="Galeforce BTN ">   Galeforce BTN</option>
<option value="Gautami  ">  Gautami</option>
<option value="Georgia  ">  Georgia</option>
<option value="Galeforce BTN "> Galeforce BTN</option>
<option value="Gautami  "> Gautami</option>
<option value="GrilledCheese BTN Cn ">   GrilledCheese BTN Cn</option>
<option value="GrilledCheese BTN Toasted "> GrilledCheese BTN Toasted</option>
<option value="GrilledCheese BTN Wide Blk "> GrilledCheese BTN Wide Blk</option>
<option value="Gulim  "> Gulim</option>
<option value="GulimChe ">  GulimChe</option>
<option value="Gungsuh  "> Gungsuh</option>
<option value="HELTERSKELTER ">  HELTERSKELTER
<option value="HERMAN  ">  HERMAN</option>
<option value="Hot Mustard BTN  ">  Hot Mustard BTN</option>
<option value="Hot Mustard BTN Poster ">    Hot Mustard BTN Poster</option>
<option value="ISABELLE  "> ISABELLE</option>
<option value="Impact "> Impact</option>
	</select>
	
	
	<select class="form-control" name="text_size"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100px;">
	 <option value="">Set text size</option>
	 <option value="1">1 </option>
	 <option value="2">2 </option>
	 <option value="3">3 </option>
	 <option value="4">4 </option>
	 <option value="5">5 </option>
	 <option value="6">6 </option>
	 <option value="7">7 </option>
	 <option value="8">8 </option>
	 <option value="9">9 </option>
	 <option value="10">10 </option>
	 <option value="11">11 </option>
	 <option value="12">12 </option>
	 <option value="13">13 </option>
	 <option value="14">14 </option>
	 <option value="15">15 </option>
	 <option value="16">16 </option>
	 <option value="17">17 </option>
	 <option value="18">18 </option>
	 <option value="19">19 </option>
	 <option value="20">20 </option>
	 <option value="21">21 </option>
	 
	</select>
	
	<select class="form-control" name="font_color" id="font_color" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100px;"> 

							<option value="" selected="selected">-Select Color-</option> 

							<option value=""> -- Standard -- </option>

							<option  value="#FF0000">Red</option> 

							<option value=" #FF6600 ">Orange</option> 

							<option value="#FFFF00">Yellow</option> 

							<option value=" #00FF00">Green</option> 

							<option value="#000000">Black</option> 

							<option value=" #FFFFFF">White</option> 

							<option value=" #0000FF">Blue</option> 

							<option  value="#C0C0C0">Silver</option> 

							<option value="#FF00FF">Magenta</option> 

							<option value=" #00FFFF">Cyan</option> 

							<option  value="  #FFCC00">Gold</option>

							<option value=""> -- Custom -- </option>

							<script>addColors(1);</script>

						</select>
						
						
						<br/>
						
						<textarea class="" name="font_text" id="font_text" rows="7" cols="150" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 302px;"></textarea>
						<br/><br/>
<input class="" type="text" name="font_top" value="Text-Top" size="20" /><P>
<input class="" type="text" name="font_left" value="Text-Left" size="20" /><P>
<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 207px; width: 62px;top:0px;" onClick="hideFontForm();return false;">Close</button>
 <P>
</div> </div></div>  
            
   
           
 
<div id="anchor" >
<div id="draggable" class="panel panel-default" style="position: relative; left:900px;top:0px; background-color:#F7F7F7;background-image:url(); border: 2px solid #CCCCCC; border-color: #CCCCCC #121212 #121212 #CCCCCC;z-index:40; HEIGHT:350px; width:396px">	


<div class="panel-heading" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 10px; ">
                       Link / Anchor  Buttons /Properties
                        </div>
            <div class="panel-body">

<table  border="0" cellpadding="0" cellspacing="0" style="padding: 10px;"><tr>
<td>
<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;">Insert Anchor:</span>

	  <button type="button" class="btn btn-default" onclick="AddText(this.form,9);return false;" data-toggle="tooltip" title="Link">
                            <i class="fa fa-link"></i>
                        </button>
   <br>
  
<table width="340" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; width: 50px; font-family: arial, verdana, helvetica; font-size: 11px;">Type:</td>
	<td style="padding-bottom: 2px;">
	<select name="AnchorType" id="linkType" style="margin-right: 10px; font-size: 11px; width: 100%;"">
	 <option value="">Not Set</option>
	 <option value="http://">http:</option>
	 <option value="https://">https:</option>
	  <option value="mailto:">mailto:</option>
	</select>
	</td>	
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Alignment:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="alignment"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="left">Left</option>
	 <option value="right">Right</option>
	 <option value="texttop">Texttop</option>
	 <option value="absmiddle">Absmiddle</option>
	 <option value="baseline">Baseline</option>
	 <option value="absbottom">Absbottom</option>
	 <option value="bottom">Bottom</option>
	 <option value="middle">Middle</option>
	 <option value="top">Top</option>
	</select>
	</td>
 </tr>
 <td style="padding-bottom: 2px; width: 50px; font-family: arial, verdana, helvetica; font-size: 11px;"> ButtonType:</td>
	<td style="padding-bottom: 2px;">
 
 <select  name="button" lass="form-control" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">Not Set  Button</option>
	 <option >----Normal Buttons----</option>
	 <option type="button" value="btn btn-default">Default</option >
	 <option   value="btn btn-primary">Primary</option >
     <option   value="btn btn-success">Success</option >
     <option   value="btn btn-info">Info</option >
     <option    value="btn btn-warning">Warning</option >
     <option   value="btn btn-danger">Danger</option >
     <option  value="btn btn-link">Link</option >
 <option >----Buttons Size----</option>
 <option   value="btn btn-primary btn-lg">Large button</option >
 <option   value="btn btn-primary">Default</option >
 <option   value="btn btn-primary btn-sm">Small button</option >
 <option   value="btn btn-primary btn-xs">Mini button</option >
 </select>
	</td>
 </tr>
 
 
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100"></td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	
	</td>
 </tr>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Anchor Name:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="anchor" id="link" value=""  style="font-size: 10px; width: 100%;"></td>
 
 </td>	
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">URL:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="AnchorUrl" id="url" value=""  style="font-size: 10px; width: 100%;"></td>
</tr>

 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;"></td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	
	             
	
<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 147px; width: 62px;top:0px;" onClick="hideAnchor();return false;">Close</button>

	
</td>
</tr>

</table>	
 </tr>
</table>	
</div></div></div>


<!-- -----------------------------------------------------------------
  Function    :Set Image graphic field Properties Tag  
  Description : Set Image graphic field Properties Tag 
 ----------------------------------------------------------------------> 
<div  id="draggable11">
 <div class="panel panel-default" style="position: absolute; Z-INDEX: 220;left:351px;top:162px;" style="position:absolute;background-color:#C0C0C0;background-image:url(http://127.0.0.1/VideoBoxBuilder/);background-repeat:repeat;;background-position:left top;left:351px;top:162px;width:207px;height:85px; border: 2px solid #E68282; border-color: #E68282 #650000 #650000 #9C2828;z-index:200"
id="graphic">	
<div class="panel-heading" >
                        Image Properties
                        </div>
            <div class="panel-body">
		<table  width="380" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr><td style="padding-bottom: 0px; padding-top: 0px;" width="300">
		

<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;">Insert Image:</span>

 <button type="button" class="btn btn-default"  data-toggle="tooltip"  onclick="AddText(this.form,26);return false;"     title="Picture">
                            <i class="fa fa-picture-o"></i>
                        </button>

<table width="380" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Image URL:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="300">

	<input type="text"  name="image" id="Image" value=""  style="font-size: 10px; width: 100%;">
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Alternate Text:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="imageAlt" id="imageAlt" value=""  style="font-size: 10px; width: 100%;"></td>

<div align="right" style="padding-top: 5px;">
	 </tr>
</table>


<table width="380" border="0" cellpadding="0" cellspacing="0" style="margin-top: 10px;"><tr><td>


<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Alignment:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="imageAlignment" id="imageAlignment" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="left">Left</option>
	 <option value="right">Right</option>
	 <option value="texttop">Texttop</option>
	 <option value="absmiddle">Absmiddle</option>
	 <option value="baseline">Baseline</option>
	 <option value="absbottom">Absbottom</option>
	 <option value="bottom">Bottom</option>
	 <option value="middle">Middle</option>
	 <option value="top">Top</option>
	</select>
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Border Thickness:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="imageBorder" id="imageBorder" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	

</td>
<td width="10">&nbsp;</td>
<td>

<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;"> Image Layout:</span>
<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">ImageWidth:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="imageWidth" id="horizontal" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">ImageHeight:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="imageHeight" id="vertical" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	
<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;top:180px">Div Spacing:</span>
<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Top:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="div_imageTop" id="" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Left :</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="div_imageLeft" id="" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	
</td></tr></table>


</td></tr></table>	

<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 350px;  margin-top: 10px; width: 52px;" onClick="hideGraphic();return false;">Close</button>

</div></div></div></div>



<div id="audioform" >
<div  id="draggable2" class="panel panel-default" style="Z-INDEX: 27; POSITION:  relative; background-color: #F7F7F7;  border: 2px solid #CCCCCC; border-color: #CCCCCC #121212 #121212 #CCCCCC; TOP: 66px; LEFT: 300px; Width:440px">   
      
<div class="panel-heading" >
                        Audio Properties
                        </div>
          
       <div class="panel-body " style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 10px; ">   
       	Insert
<button type="button" class="btn btn-default"  onclick="AddText(this.form,14);return false;" data-toggle="tooltip" title="Insert AudioPlayer">
      <i class="fa fa-music"></i>
                        </button ><br/><br/>
<input class="" type="text" name="audio" value="Audio URL" size="60" /><P>
<input class="" type="text" name="audio_width" value="AudioPlayer Width" size="20" /><P>
<input class="" type="text" name="audio_top" value="Image-Top" size="20" /><P>
<input class="" type="text" name="audio_left" value="Image-Left" size="20" />

 

<br/><br/>
<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 297px; width: 62px;top:0px;" onClick="hideAudioForm();return false;">Close</button>
             <p><br>          
</div></div></div>




         
       

</div>


		
<div id="bv_Text1" style="position:absolute;left:61px;top:307px;width:250px;height:16px;z-index:3;" align="left">

			
            </div>
		</div>
	</div>
</div>

<div id="videoform">
<div id="draggable3" class="panel panel-default" style="Z-INDEX: 27; POSITION:  relative; background-color: #F7F7F7;  TOP: 66px; LEFT: 0px; border: 2px solid #CCCCCC; border-color: #CCCCCC #121212 #121212 #CCCCCC;   TOP: 66px; LEFT: 300px; Width:440px">
 
    <div class="panel-heading" >
                        Video Properties
                        </div>
 <div class="panel-body" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 10px; " >
                        
 	Insert
<button type="button" class="btn btn-default"  onclick="AddText(this.form,15);return false;" data-toggle="tooltip" title="Insert AudioPlayer">
      <i class="fa fa-html5"></i>
                        </button><br/><br/>
<input class="" type="text" name="video" value="Video URL" size="40" /><P>
<input class="" type="text" name="video_poster" value="Video-Image-Poster" size="40" /><P>
<input class="" type="text" name="video_width" value="VideoPlayer-Width" size="20" /><P>
<input class="" type="text" name="video_height" value="VideoPlayer-Height" size="20" /><P>

 <div style="Z-INDEX: 210; position: absolute; left:291px;top:50px;width:270px;"><BR>
  <select class="form-control" name="video_filetype"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">MediaType</option>
	 <option value="video/ogg">video ogg</option>
	 <option value="video/mp4">video mp4</option>
	 	 <option value="video/webm">video webm</option>
	 	<option value="audio/ogg">audio ogg</option>
	 	<option value="audio/mpeg">audio mpeg</option>
  </select>
  
  
 <select class="form-control" name="video_audio"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">Audio</option>
	 <option value="muted">Muted</option>
	  <option value="none">none</option>
	
  </select>



 <select class="form-control" name="video_autoplay"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">Autoplay</option>
	 <option value="autoplay">Autoplay</option>
	 <option value="none">none</option>
	 	
  </select>



 <select class="form-control" name="video_loop" i style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">Loop</option>
	 <option value="loop">Loop</option>
	 <option value="none">none</option>
  </select>



<select class="form-control" name="video_preload"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 50%;">
	 <option value="">Peload Media</option>
	 <option value="preload">preload</option>
	 <option value="none">none</option>
  </select>

  
 </div>
<br/><br/>
<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 297px; width: 62px;top:-10px;" onClick="hideVideoForm();return false;">Close</button>
     <p> <br>                  
   </div></div></div></div>
         
       

</div>


</div>









 <div id="draggable8">
 <div class="panel panel-default" id="fmediaplayer" style="position: absolute; left:351px;top:162px; Z-INDEX: 220;" style="position:absolute;background-color:#ffffff;background-image:url();background-repeat:repeat;;background-position:left top;left:351px;top:162px;width:207px;height:85px; border: 2px solid #E68282; border-color: #E68282 #650000 #650000 #9C2828;z-index:200">	
<div class="panel-heading" >
                        Flash Player Properties
                        </div>
            <div class="panel-body">
		<table  width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border: 2px solid #FFFFFF; padding: 0px;">
 <tr><td style="padding-bottom: 0px; padding-top: 0px;" width="300">
	
 

<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;">Insert Fl4v Player:</span>
<button type="button" class="btn btn-default" onclick="AddText(this.form,2);return false;"data-toggle="tooltip" title="flash player ">
                            <i class="fa fa-flash"></i>
                        </button>

<BR><BR>

<table width="380" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Flv video URL:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="300">
<input type="Text" name="flashvars_src" id="media" value="http://vga.smtvs.com/videos/BadDayInAfica.flv"  style="font-size: 10px; width: 100%;">

	</td>
 </tr>
 
 <tr>
  
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80"align="right">swfs URL:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="300">
	
	<select class="form-control" name="flash_swfs_src" id="flash_swfs_src" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100px;"> 

							<option value="" selected="selected">-Selecte a Skin-</option> 

						
							<option  value="http://vga.smtvs.com/videos/swfs/StrobeMediaPlayback.swf">Skin </option> 
	                      
							
						</select>
						
	</td>
 </tr>
 <tr>

	 </tr>
</table>


<table width="380" border="0" cellpadding="0" cellspacing="0" style="margin-top: 10px;"><tr><td>


<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Alignment:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="flash_div_alignment" id="flash_div_alignment" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="left">Left</option>
	 <option value="right">Right</option>
	 <option value="texttop">Texttop</option>
	 <option value="absmiddle">Absmiddle</option>
	 <option value="baseline">Baseline</option>
	 <option value="absbottom">Absbottom</option>
	 <option value="bottom">Bottom</option>
	 <option value="middle">Middle</option>
	 <option value="top">Top</option>
	</select>
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Player Quality:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="flashquality" id="flashvideoquality" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="High">High</option>
	 <option value="Low">Low</option>
	 
	</select>
	</td>
 </tr>
  <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Allowfullscreen:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="fullscreen" id="fullscreen" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="true">True</option>
	 <option value="false">False</option>
	 
	</select>
	</td>
 </tr>
  <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Autoplay:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="flashautoplay" id="flashautoplay" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="true">True</option>
	 <option value="false">False</option>
	 
	</select>
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">AutoHideControlBar:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="autoHideControlBar" id="autoHideControlBar" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="true">True</option>
	 <option value="false">False</option>
	 
	</select>
	</td>
 </tr>
 
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Bgcolor:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="flvplayerbgcolor" id="flvplayerbgcolor" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 
</table>	

</td>
<td width="10">&nbsp;</td>
<td>


<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">PlayerWidth:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="flashplayer_width" id="horizontal" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">PlayerHeight:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="flashplayer_height" id="vertical" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	

<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Top:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="flashplayer_div_top" id="" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Left :</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="flashplayer_div_left" id="" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>


<button class="btn btn-primary" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 350px;  margin-top: 40px; width: 52px;" onClick="hideFMediaPlayer();return false;">Close</button>
	
</td></tr></table>
	

</td></tr></table>


</div></div></div>


</div>


<!---------------------------------
  Function    : PageProperties
  Description : showPageProperties()
----------------------------------------!>

<div  id="draggable4" >
<div class="panel panel-default"  style="position: absolute;LEFT: 100px; WIDTH: 637px; TOP: 70px; HEIGHT: 790px;Z-INDEX: 120;" id="pageProperties">
<div class="panel-heading" >
                        Page Properties
                        </div>
            <div class="panel-body">
                            
<table width="380" border="0" cellpadding="0" cellspacing="0" style=" "background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">


 <tr>

  <td style=" POSITION: absolute;LEFT: 38px; padding-bottom: 2px; padding-top: 22px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Page Title::</td>
	<td style="  POSITION: absolute;LEFT: 147px; padding-bottom: 20px; padding-top: 18px;" HEIGHT: 32px; width="300">
	
	<input class="form-control"  type="text" name="Name" id="Name" value=""  style=" position: absolute;LEFT: 10px; TOP: 6px;font-size: 10px; width: 420px;"></td>
 
 
 <td style="padding-bottom: 2px; padding-top: 0px;" width="300">
 




 <DIV 
style="Z-INDEX: 7; POSITION: absolute; WIDTH: 150px; HEIGHT: 15px; TOP: 100px; LEFT: 253px" 
id=bv_Text6 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face="Times New Roman">Document Type</FONT></DIV>
<SELECT class="btn btn-primary" style="Z-INDEX: 8; POSITION: absolute; WIDTH: 148px; FONT-FAMILY: arial, verdana, helvetica; FONT-SIZE: 11px; TOP: 100px; LEFT: 356px" id="document_type" size=1 name="document_type"> 

  <OPTION  value="-//W3C//HTML 4.01 Transitional//EN">-//W3C//HTML 4.01 Transitional//EN</OPTION> 
	<OPTION value="-//W3C//DTD HTML 4.01 Transitional//EN">-//W3C//DTD HTML 4.01 Transitional//EN</OPTION> 
	<OPTION value="-//W3C//XHML 4.01 Transitional//EN">-//W3C//XHML 4.01 Transitional//EN</OPTION>
	</SELECT>
	
<INPUT  style="Z-INDEX: 9; POSITION: absolute; WIDTH: 356px; FONT-FAMILY:  arial, verdana, helvetica; HEIGHT: 22px; FONT-SIZE: 11px; TOP: 149px; LEFT: 147px" 
id="favortites_icon" name=Browse type=file> 

<DIV 
style="Z-INDEX: 10; POSITION: absolute; WIDTH: 87px; HEIGHT: 32px; TOP: 149px; LEFT: 37px" 
id=bv_Text7 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Favortites icon:</FONT></DIV>

<DIV 
style="Z-INDEX: 11; POSITION: absolute; WIDTH: 90px; HEIGHT: 16px; TOP: 100px; LEFT: 37px" 
id=bv_Text8 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>File extension:</FONT></DIV>
<SELECT class="btn btn-primary"
style="Z-INDEX: 12; POSITION: absolute; WIDTH: 62px; FONT-FAMILY: arial, verdana, helvetica; FONT-SIZE: 11px; TOP: 100px; LEFT: 129px" 
id="document_extension" size=1 name="document_extension"> 
<OPTION selected>.html</OPTION> 
  <OPTION>.php</OPTION> 
	<OPTION>.xml</OPTION>
	</SELECT> 

<DIV 
style="Z-INDEX: 13; POSITION: absolute; WIDTH: 150px; HEIGHT: 48px; TOP: 175px; LEFT: 38px" 
id=bv_Text9 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial><BR>Language<BR>Character Set :</FONT></DIV>
<SELECT class="btn btn-primary" style="Z-INDEX: 14; POSITION: absolute; WIDTH: 156px; FONT-FAMILY: arial, verdana, helvetica; FONT-SIZE: 11px; TOP: 203px; LEFT: 145px" 
id="characterSet" size=1 name="characterSet">
 <OPTION value="ISO-8859-1">ISO-8859-1</OPTION> 
  <OPTION value="ISO-8859-2">ISO-8859-2</OPTION> 
	<OPTION value="UTF-8">UTF-8</OPTION>
	</SELECT>
 </td><td>
 
		  


<DIV 
style="Z-INDEX: 1; POSITION: absolute; WIDTH: 68px; HEIGHT: 11px; TOP: 300px; LEFT: 37px" 
id=bv_Text1 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Color<B>:</B></FONT></DIV>

<INPUT  onClick="showBackgroundColorMenu();return false;"
style="Z-INDEX: 2; POSITION: absolute; WIDTH: 20px; HEIGHT: 20px; TOP: 295px; LEFT: 249px" 
id=ImageButton1 name=ImageButton7 src="link font_files/backcolor.gif" 
type=image> 
<INPUT class="form-control" style="Z-INDEX: 0; POSITION: absolute; WIDTH: 28px; FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: 293px; LEFT: 220px"  id="backgroundColorPreview">
		

<INPUT class="form-control" 
style="Z-INDEX: 3; POSITION: absolute; WIDTH: 84px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 293px; LEFT: 133px" 
id="enterBackgroundColor">


<select class="form-control" name="background" id="background" style="Z-INDEX: 4; POSITION: absolute; WIDTH: 354px; FONT-FAMILY: Courier New; HEIGHT: 20px; FONT-SIZE: 11px; TOP: 366px; LEFT: 148px" >
	 <option value="">Page Back ground</option>
	 <option value="http://smtvs.com/bg_image/bg.png">bg</option>
	 <option value="http://smtvs.com/bg_image/bg2.png">bg2</option>
	  <option value="http://smtvs.com/bg_image/bg3.png">bg3</option>
	   <option value="http://smtvs.com/bg_image/bg4.png">bg4</option>
	    <option value="http://smtvs.com/bg_image/bg5.png">bg5</option>
	     <option value="http://smtvs.com/bg_image/bg6.png">bg6</option>
	      <option value="http://smtvs.com/bg_image/bg7.png">bg7</option>
	           <option value="http://smtvs.com/bg_image/bg8.png">bg8</option>
	               
       <option value="">--new line --</option>
   <option value="http://smtvs.com/bg_image/bg6.jpg"> vga bg 1</option>
   <option value="http://smtvs.com/bg_image/bg7.jpg"> vga bg 2</option>
   <option value="http://smtvs.com/bg_image/bg8.jpg"> vga bg 3</option>
   <option value="http://smtvs.com/bg_image/bg9.jpg"> vga bg 4</option>
   <option value="http://smtvs.com/bg_image/bg10.jpg"> vga bg 5</option>
   <option value="http://smtvs.com/bg_image/bg11.jpg"> vga bg 6</option>
   <option value="http://smtvs.com/bg_image/bg12.jpg"> vga bg 7</option>
   
   <option value="http://smtvs.com/bg_image/bg16.jpg"> vga bg 16</option>
   <option value="http://smtvs.com/bg_image/bg17.jpg"> vga bg 17</option>
   <option value="http://smtvs.com/bg_image/bg18.jpg"> vga bg 18</option>
   <option value="http://smtvs.com/bg_image/bg19.jpg"> vga bg 19</option>
   <option value="http://smtvs.com/bg_image/bg20.jpg"> vga bg 20</option>
   <option value="http://smtvs.com/bg_image/bg21.jpg"> vga bg 21</option>
   <option value="">--new line 2--</option>
    <option value="http://smtvs.com/bg_image/Turntable_spinning.jpg">bg Turntable_spinning</option>
   <option value="http://smtvs.com/bg_image/Flaming-Guitar-Wallpaper-music-17264134-1680-1050.jpg">bg Flaming-Guitar</option>
    <option value="http://smtvs.com/bg_image/colors-of-music.jpg">bg colors-of-music-</option>

 <option value="http://smtvs.com/bg_image/Club-Music-Wallpaper-233.jpg">bg Club-Music-</option>

 <option value="http://smtvs.com/bg_image/image2s.jpg">bg2S</option>

 <option value="http://smtvs.com/bg_image/graphics-music-notes-435227.jpg">bg graphics-music-notes</option>

 <option value="http://smtvs.com/bg_image/Piano-Wallpaper-music-24173623-1280-1024.jpg">bg Piano-Wallpaper</option>

 <option value="http://smtvs.com/bg_image/ws_Tape_music_1024x768.jpg">bg ws_Tape_music</option>

 <option value="http://smtvs.com/bg_image/music-equalizer-background.jpg">bg music-equalizer</option>

 <option value="http://smtvs.com/bg_image/graphic-design-music-wallpaper-7329-hd-wallpapers.jpg">bg music-wallpaper</option>
 <option value="http://smtvs.com/bg_image/101954-club-music-creative-music.jpg">bg music-creative</option>

 <option value="http://smtvs.com/bg_image/music-2.jpg">bg music-wall</option>
   <option value="http://smtvs.com/bg_image/bg_bubble.png">bg bubble</option>
   <option value="http://smtvs.com/bg_image/bg15.png"> colors</option>
  </select>
  
 
<DIV 
style="Z-INDEX: 5; POSITION: absolute; WIDTH: 45px; HEIGHT: 11px; TOP: 366px; LEFT: 38px" 
id=bv_Text2 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Image<B>:</B></FONT></DIV>

<DIV 
style="Z-INDEX: 6; POSITION: absolute; WIDTH: 68px; HEIGHT: 16px; TOP: 456px; LEFT: 39px" 
id=bv_Text3 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Topmargin:</FONT></DIV>

<DIV 
style="Z-INDEX: 7; POSITION: absolute; WIDTH: 70px; HEIGHT: 16px; TOP: 456px; LEFT: 296px" 
id=bv_Text4 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Leftmargin:</FONT></DIV>

<SELECT class="btn btn-primary"
style="Z-INDEX: 8; POSITION: absolute; WIDTH: 50px; FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: 455px; LEFT: 123px" 
id="Leftmargin" size=1 name="Leftmargin"> 
<OPTION  selected value="0">0</OPTION> 
<OPTION value="1">1</OPTION> 
  <OPTION value="2">2</OPTION>
	 <OPTION  value="3">3</OPTION>
	 </SELECT> 
	 
	 <SELECT class="btn btn-primary" style="Z-INDEX: 9; POSITION: absolute; WIDTH: 50px; FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: 452px; LEFT: 380px" 
id="Topmargin" size=1 name="Topmargin">
<OPTION  selected value="0">0</OPTION> 
<OPTION value="1">1</OPTION> 
  <OPTION value="2">2</OPTION>
	 <OPTION  value="3">3</OPTION>

	 </SELECT> 
<DIV 
style="Z-INDEX: 10; POSITION: absolute; WIDTH: 86px; HEIGHT: 11px; TOP: 270px; LEFT: 35px" 
id=bv_Text7 align=left><FONT style="FONT-SIZE: 13px" color=#000000 
face=Arial><B>Background:</B></FONT></DIV></td>
 
 
  <td  style="Z-INDEX: 18; POSITION: absolute; padding-bottom: 29px;   FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: -40px; LEFT: 18px">
 
 <INPUT class="form-control" 
style="Z-INDEX: 0; POSITION: absolute; WIDTH: 28px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 612px; LEFT: 190px" 
id="linkColorPreview"> 


<INPUT  onClick="showLinkColorMenu();return false;"
style="Z-INDEX: 1; POSITION: absolute; WIDTH: 20px; HEIGHT: 20px; TOP: 615px; LEFT: 220px" 
id=ImageButton1 name=ImageButton7 src="link%20font_files/backcolor.gif" 
type=image> 


<INPUT class="form-control" 
style="Z-INDEX: 2; POSITION: absolute; WIDTH: 84px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 612px; LEFT: 98px" 
 id="enterLinkColor"> 
<DIV 
style="Z-INDEX: 3; POSITION: absolute; WIDTH: 62px; HEIGHT: 16px; TOP: 577px; LEFT: 21px" 
id=bv_Text5 align=left><FONT style="FONT-SIZE: 13px" color=#000000 
face=Arial><B>Links:</B></FONT></DIV>
<DIV 
style="Z-INDEX: 4; POSITION: absolute; WIDTH: 83px; HEIGHT: 16px; TOP: 618px; LEFT: 28px" 
id=bv_Text6 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Link</FONT></DIV>

<DIV 
style="Z-INDEX: 5; POSITION: absolute; WIDTH: 75px; HEIGHT: 16px; TOP: 617px; LEFT: 248px" 
id=bv_Text8 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Active Link</FONT></DIV>
<DIV 
style="Z-INDEX: 6; POSITION: absolute; WIDTH: 70px; HEIGHT: 32px; TOP: 651px; LEFT: 27px" 
id=bv_Text9 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Visited Link</FONT></DIV>
 
<INPUT class="form-control" 
style="Z-INDEX: 7; POSITION: absolute; WIDTH: 28px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 613px; LEFT: 402px" 
 id="activelinkColorPreview"> 

<INPUT   onClick="showActiveLinkColorMenu();return false;" 
style="Z-INDEX: 8; POSITION: absolute; WIDTH: 20px; HEIGHT: 20px; TOP: 616px; LEFT: 435px" 
id=ImageButton5 name=ImageButton7 src="link%20font_files/backcolor.gif" 
type=image>

 <INPUT class="form-control" 
style="Z-INDEX: 9; POSITION: absolute; WIDTH: 84px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 613px; LEFT: 309px" 
id="enterActiveLinkColor"> 


<INPUT id="textColorPreview" class="form-control" 
style="Z-INDEX: 10; POSITION: absolute; WIDTH: 28px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 756px; LEFT: 190px" 
id=Editbox5 name=Editbox1> 

<INPUT onClick="showTextColorMenu();return false;"
style="Z-INDEX: 11; POSITION: absolute; WIDTH: 20px; HEIGHT: 20px; TOP: 759px; LEFT: 220px" 
id=ImageButton6 name=ImageButton7 src="link%20font_files/backcolor.gif" 
type=image> 



<INPUT id="enterTextColor" class="form-control" 
style="Z-INDEX: 12; POSITION: absolute; WIDTH: 84px; FONT-FAMILY: Courier New;
 FONT-SIZE: 16px; TOP: 756px; LEFT: 99px" > 

<INPUT class="form-control" 
style="Z-INDEX: 13; POSITION: absolute; WIDTH: 28px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 647px; LEFT: 190px" 
 id="visitedlinkColorPreview">
 
 
 <INPUT onClick="showVisitedLinkColorMenu();return false;"
style="Z-INDEX: 14; POSITION: absolute; WIDTH: 20px; HEIGHT: 20px; TOP: 650px; LEFT: 220px" 
id=ImageButton7 name=ImageButton7 src="link%20font_files/backcolor.gif" 
type=image> 

<INPUT class="form-control" 
style="Z-INDEX: 15; POSITION: absolute; WIDTH: 84px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 647px; LEFT: 99px" 
id="enterVisitedLinkColor"> 

<DIV 
style="Z-INDEX: 16; POSITION: absolute; WIDTH: 124px; HEIGHT: 48px; TOP: 729px; LEFT: 30px" 
id=bv_Text2 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Font:<BR><BR>TextColor:</FONT></DIV>


<DIV 
style="Z-INDEX: 17; POSITION: absolute; WIDTH: 95px; HEIGHT: 16px; TOP: 718px; LEFT: 328px" 
id=bv_Text3 align=left><FONT style="FONT-SIZE: 11px" color=#000000 
face=Arial>Default Size:</FONT></DIV>

<SELECT class="btn btn-primary" 
style="Z-INDEX: 18; POSITION: absolute; WIDTH: 122px; FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: 725px; LEFT: 98px" 
name="font_face"  size=1 > 
 
	 <option value="Arial">Arial</option>
	 <option value="Arial Baltic">Arial Baltic</option>
	 <option value="Arial Black">Arial Black</option>
	 <option value="Arial CE">Arial Black</option>
	 <option value="Arial CYR">Arial CYR</option>
	 <option value="BATAVIA">BATAVIA</option>
	 <option value="Belwe Bd BT">Belwe Bd BT</option>
	 <option value="BatangChe">BatangChe</option>
	 <option value="Belwe Lt BT">Belwe Lt BT</option>
	 <option value="Blade Runner Movie Font">Blade Runner Movie Font</option>
	 <option value="Bookman Old Style">Bookman Old Style</option>
	 <option value="Belwe Cn BT">    Belwe Cn BT</option>
<option value="BrowalliaUPC">   BrowalliaUPC</option>
<option value="Belwe Lt BT">    Belwe Lt BT</option>
<option value="Browallia New">  Browallia New</option>
<option value="CASMIRA">CASMIRA</option>
<option value="Calibri ">   Calibri</option>
<option value="Cambria ">   Cambria</option>
<option value="Clarendon Hv BT "> Clarendon Hv BT</option>
<option value="Candy Round BTN">  Candy Round BTN</option>
<option value="ConcursoItalian BTN">  ConcursoItalian BTN</option>
<option value="Clarendon Lt BT "> Clarendon Lt BT</option>
<option value="Clarendon Blk BT "> Clarendon Blk BT</option>
<option value="Candy Round BTN Lt "> Candy Round BTN Lt</option>
<option value="Candara  Candara"> Candara Candara</option>
<option value="Comic Sans MS">  Comic Sans MS</option>
<option value="Consolas "> Consolas</option>
<option value="Constantia "> Constantia</option>
<option value="Corbel  ">Corbel</option>
<option value="CordiaUPC "> CordiaUPC</option>
<option value="Courier New "> Courier New</option>
<option value="Courier New CE "> Courier New CE</option>
<option value="Courier New CYR "> Courier New CYR</option>
<option value="Courier New TUR ">  Courier New TUR</option>
<option value="DFKai-SB "> DFKai-SB</option>
<option value="DaunPenh "> DaunPenh</option>
<option value="David "> David</option>
<option value="DilleniaUPC">  DilleniaUPC</option>
<option value="DokChampa  ">  DokChampa</option>
<option value="Dotum  ">   Dotum</option>
<option value="DotumChe "> DotumChe</option>
<option value="ELEGANCE">   ELEGANCE</option>
<option value="ELLIS  ">   ELLIS</option>
<option value="EXCESS  "> EXCESS</option>
<option value="Ebrima  "> Ebrima</option>
<option value="English157 BT">   English157 BT</option>
<option value="Estrangelo Edessa ">   Estrangelo Edessa</option>
<option value="EucrosiaUPC  ">  EucrosiaUPC</option>
<option value="Euphemia ">  Euphemia</option>
<option value="FangSong   "> FangSong</option>
<option value="Franklin Gothic Medium ">  Franklin Gothic Medium</option>
<option value="FrankRuehl  "> FrankRuehl</option>
<option value="Freehand575 BT   "> Freehand575 BT</option>
<option value="FreesiaUPC ">     FreesiaUPC</option>
<option value="Freehand521 BT">Freehand521 BT</option>
<option value="GENUINE   ">   GENUINE</option>
<option value="Gabriola  ">   Gabriola</option>
<option value="Galeforce BTN ">   Galeforce BTN</option>
<option value="Gautami  ">  Gautami</option>
<option value="Georgia  ">  Georgia</option>
<option value="Galeforce BTN "> Galeforce BTN</option>
<option value="Gautami  "> Gautami</option>
<option value="GrilledCheese BTN Cn ">   GrilledCheese BTN Cn</option>
<option value="GrilledCheese BTN Toasted "> GrilledCheese BTN Toasted</option>
<option value="GrilledCheese BTN Wide Blk "> GrilledCheese BTN Wide Blk</option>
<option value="Gulim  "> Gulim</option>
<option value="GulimChe ">  GulimChe</option>
<option value="Gungsuh  "> Gungsuh</option>
<option value="HELTERSKELTER ">  HELTERSKELTER
<option value="HERMAN  ">  HERMAN</option>
<option value="Hot Mustard BTN  ">  Hot Mustard BTN</option>
<option value="Hot Mustard BTN Poster ">    Hot Mustard BTN Poster</option>
<option value="ISABELLE  "> ISABELLE</option>
<option value="Impact "> Impact</option>

</SELECT> 
<SELECT class="btn btn-primary" 
style="Z-INDEX: 19; POSITION: absolute; WIDTH: 44px; FONT-FAMILY: Courier New; FONT-SIZE: 11px; TOP: 718px; LEFT: 398px" 
id=font_size size=1 name=font_size>
<option value="">Not Set</option>
	 <option value="1">1 </option>
	 <option value="2">2 </option>
	 <option value="3">3 </option>
	 <option value="4">4 </option>
	 <option value="5">5 </option>
	 <option value="6">6 </option>
	 <option value="7">7 </option>
	 <option value="8">8 </option>
	 <option value="9">9 </option>
	 <option value="10">10 </option>
	 <option value="11">11 </option>
	 <option value="12">12 </option>
	 <option value="13">13 </option>
	 <option value="14">14 </option>
	 <option value="15">15 </option>
	 <option value="16">16 </option>
	 <option value="17">17 </option>
	 <option value="18">18 </option>
	 <option value="19">19 </option>
	 <option value="20">20 </option>
	 <option value="21">21 </option>
  <option value="22">22</option>
	 <option value="23">23 </option>
	 <option value="24">24 </option>
	 <option value="25">25 </option>
	 <option value="26">26 </option>
 
	</SELECT> 
<DIV 
style="Z-INDEX: 20; POSITION: absolute; WIDTH: 82px; HEIGHT: 32px; TOP: 693px; LEFT:23px" 
id=bv_Text1 align=left><FONT style="FONT-SIZE: 13px" color=#000000 
face=Arial><B>Default Font:</B></FONT></DIV> 


<div id="bv_Text2" style="position:absolute;left:110px;top:790px;width:494px;height:27px;z-index:44;" align="left">


 <button class="btn btn-primary" type="button" value="button" style="  position:absolute;left:280px;font-family: arial, 
 verdana, helvetica; font-size: 10px; " onclick="showMetaTag();hidePageProperties();return false;">MetaTag</button>


 <button class="btn btn-primary" type="button" value="button" style="  position:absolute;left:360px;font-family: arial, 
 verdana, helvetica; font-size: 11px; " onclick="hidePageProperties();showSourceCode();return false;">Ok</button>

</div></div>

<P><BR>
</td>
 </tr>
 </table>
 
 </div>
<div style="position: absolute; " id="backColorMenu">
			<table width="70" border="0" cellpadding="0" cellspacing="0" style="  position:absolute; background-color: #F7F7F7; left:3px;  top:150px;border: 2px solid #FFFFFF; padding: 0px;">
 
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#000000');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#000000');"><div style="background-color: #000000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#993300');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#993300');"><div style="background-color: #993300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#333300');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#333300');"><div style="background-color: #333300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#003300');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#003300');"><div style="background-color: #003300;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#003366');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#003366');"><div style="background-color: #003366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#000080');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#000080');"><div style="background-color: #000080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#333399');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#333399');"><div style="background-color: #333399;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#333333');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#333333');"><div style="background-color: #333333;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#800000');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#800000');"><div style="background-color: #800000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FF6600');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FF6600');"><div style="background-color: #FF6600;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#808000');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#808000');"><div style="background-color: #808000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#008000');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#008000');"><div style="background-color: #008000;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#008080');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#008080');"><div style="background-color: #008080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#0000FF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#0000FF');"><div style="background-color: #0000FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#666699');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#808080');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#808080');"><div style="background-color: #808080;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FF0000');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FF0000');"><div style="background-color: #FF0000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FF9900');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FF9900');"><div style="background-color: #FF9900;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#99CC00');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#99CC00');"><div style="background-color: #99CC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#339966');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#339966');"><div style="background-color: #339966;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#33CCCC');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#33CCCC');"><div style="background-color: #33CCCC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#3366FF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#3366FF');"><div style="background-color: #3366FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#800080');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#800080');"><div style="background-color: #800080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#999999');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#999999');"><div style="background-color: #999999;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FF00FF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FF00FF');"><div style="background-color: #FF00FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FFCC00');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FFCC00');"><div style="background-color: #FFCC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FFFF00');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FFFF00');"><div style="background-color: #FFFF00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#00FF00');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#00FF00');"><div style="background-color: #00FF00;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#00FFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#00FFFF');"><div style="background-color: #00FFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#00CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#00CCFF');"><div style="background-color: #00CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#993366');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#993366');"><div style="background-color: #993366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#C0C0C0');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#C0C0C0');"><div style="background-color: #C0C0C0;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FF99CC');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FF99CC');"><div style="background-color: #FF99CC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FFCC99');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FFCC99');"><div style="background-color: #FFCC99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FFFF99');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FFFF99');"><div style="background-color: #FFFF99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#CCFFCC');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#CCFFCC');"><div style="background-color: #CCFFCC;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#CCFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#CCFFFF');"><div style="background-color: #CCFFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#99CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#99CCFF');"><div style="background-color: #99CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#CC99FF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewBackColor('#FFFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectBackColor('#FFFFFF');"><div style="background-color: #FFFFFF;" class="selectColorBox">&nbsp;</div></td>
		   </tr>	 
			</table>
		
</div>
	


		 
		 

<div style="position: absolute; " id="activelinkColorMenu">
			<table width="70" border="0" cellpadding="0" cellspacing="0" style="  position:absolute; background-color: #F7F7F7; left:3px;  top:150px;border: 2px solid #FFFFFF; padding: 0px;">
 
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#000000');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#000000');"><div style="background-color: #000000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#993300');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#993300');"><div style="background-color: #993300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#333300');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#333300');"><div style="background-color: #333300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#003300');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#003300');"><div style="background-color: #003300;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#003366');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#003366');"><div style="background-color: #003366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#000080');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#000080');"><div style="background-color: #000080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#333399');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#333399');"><div style="background-color: #333399;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#333333');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#333333');"><div style="background-color: #333333;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#800000');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#800000');"><div style="background-color: #800000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FF6600');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FF6600');"><div style="background-color: #FF6600;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#808000');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#808000');"><div style="background-color: #808000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#008000');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#008000');"><div style="background-color: #008000;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#008080');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#008080');"><div style="background-color: #008080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#0000FF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#0000FF');"><div style="background-color: #0000FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#666699');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#808080');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#808080');"><div style="background-color: #808080;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FF0000');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FF0000');"><div style="background-color: #FF0000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FF9900');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FF9900');"><div style="background-color: #FF9900;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#99CC00');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#99CC00');"><div style="background-color: #99CC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#339966');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#339966');"><div style="background-color: #339966;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#33CCCC');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#33CCCC');"><div style="background-color: #33CCCC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#3366FF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#3366FF');"><div style="background-color: #3366FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#800080');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#800080');"><div style="background-color: #800080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#999999');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#999999');"><div style="background-color: #999999;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FF00FF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FF00FF');"><div style="background-color: #FF00FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FFCC00');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FFCC00');"><div style="background-color: #FFCC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FFFF00');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FFFF00');"><div style="background-color: #FFFF00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#00FF00');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#00FF00');"><div style="background-color: #00FF00;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#00FFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#00FFFF');"><div style="background-color: #00FFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#00CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#00CCFF');"><div style="background-color: #00CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#993366');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#993366');"><div style="background-color: #993366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#C0C0C0');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#C0C0C0');"><div style="background-color: #C0C0C0;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FF99CC');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FF99CC');"><div style="background-color: #FF99CC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FFCC99');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FFCC99');"><div style="background-color: #FFCC99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FFFF99');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FFFF99');"><div style="background-color: #FFFF99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#CCFFCC');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#CCFFCC');"><div style="background-color: #CCFFCC;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#CCFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#CCFFFF');"><div style="background-color: #CCFFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#99CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#99CCFF');"><div style="background-color: #99CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#CC99FF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewActiveLinkColor('#FFFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectActiveLinkColor('#FFFFFF');"><div style="background-color: #FFFFFF;" class="selectColorBox">&nbsp;</div></td>
		   </tr>	 
			</table></div>
			
<div style="position: absolute; " id="visitedlinkColorMenu">
			<table width="70" border="0" cellpadding="0" cellspacing="0" style="  position:absolute; background-color: #F7F7F7; left:3px;  top:150px;border: 2px solid #FFFFFF; padding: 0px;">
 
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#000000');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#000000');"><div style="background-color: #000000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#993300');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#993300');"><div style="background-color: #993300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#333300');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#333300');"><div style="background-color: #333300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#003300');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#003300');"><div style="background-color: #003300;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#003366');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#003366');"><div style="background-color: #003366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#000080');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#000080');"><div style="background-color: #000080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#333399');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#333399');"><div style="background-color: #333399;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#333333');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#333333');"><div style="background-color: #333333;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#800000');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#800000');"><div style="background-color: #800000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FF6600');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FF6600');"><div style="background-color: #FF6600;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#808000');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#808000');"><div style="background-color: #808000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#008000');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#008000');"><div style="background-color: #008000;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#008080');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#008080');"><div style="background-color: #008080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#0000FF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#0000FF');"><div style="background-color: #0000FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#666699');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#808080');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#808080');"><div style="background-color: #808080;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FF0000');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FF0000');"><div style="background-color: #FF0000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FF9900');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FF9900');"><div style="background-color: #FF9900;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#99CC00');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#99CC00');"><div style="background-color: #99CC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#339966');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#339966');"><div style="background-color: #339966;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#33CCCC');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#33CCCC');"><div style="background-color: #33CCCC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#3366FF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#3366FF');"><div style="background-color: #3366FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#800080');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#800080');"><div style="background-color: #800080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#999999');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#999999');"><div style="background-color: #999999;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FF00FF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FF00FF');"><div style="background-color: #FF00FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FFCC00');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FFCC00');"><div style="background-color: #FFCC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FFFF00');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FFFF00');"><div style="background-color: #FFFF00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#00FF00');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#00FF00');"><div style="background-color: #00FF00;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#00FFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#00FFFF');"><div style="background-color: #00FFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#00CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#00CCFF');"><div style="background-color: #00CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#993366');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#993366');"><div style="background-color: #993366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#C0C0C0');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#C0C0C0');"><div style="background-color: #C0C0C0;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FF99CC');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FF99CC');"><div style="background-color: #FF99CC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FFCC99');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FFCC99');"><div style="background-color: #FFCC99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FFFF99');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FFFF99');"><div style="background-color: #FFFF99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#CCFFCC');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#CCFFCC');"><div style="background-color: #CCFFCC;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#CCFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#CCFFFF');"><div style="background-color: #CCFFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#99CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#99CCFF');"><div style="background-color: #99CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#CC99FF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewVisitedLinkColor('#FFFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectVisitedLinkColor('#FFFFFF');"><div style="background-color: #FFFFFF;" class="selectColorBox">&nbsp;</div></td>
		   </tr>	 
			</table></div>
			
			
			
<div style="position: absolute; " id="linkColorMenu">
			<table width="70" border="0" cellpadding="0" cellspacing="0" style="  position:absolute; background-color: #F7F7F7; left:3px;  top:150px;border: 2px solid #FFFFFF; padding: 0px;">
 
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#000000');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#000000');"><div style="background-color: #000000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#993300');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#993300');"><div style="background-color: #993300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#333300');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#333300');"><div style="background-color: #333300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#003300');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#003300');"><div style="background-color: #003300;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#003366');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#003366');"><div style="background-color: #003366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#000080');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#000080');"><div style="background-color: #000080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#333399');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#333399');"><div style="background-color: #333399;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#333333');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#333333');"><div style="background-color: #333333;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#800000');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#800000');"><div style="background-color: #800000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FF6600');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FF6600');"><div style="background-color: #FF6600;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#808000');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#808000');"><div style="background-color: #808000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#008000');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#008000');"><div style="background-color: #008000;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#008080');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#008080');"><div style="background-color: #008080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#0000FF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#0000FF');"><div style="background-color: #0000FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#666699');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#808080');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#808080');"><div style="background-color: #808080;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FF0000');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FF0000');"><div style="background-color: #FF0000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FF9900');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FF9900');"><div style="background-color: #FF9900;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#99CC00');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#99CC00');"><div style="background-color: #99CC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#339966');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#339966');"><div style="background-color: #339966;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#33CCCC');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#33CCCC');"><div style="background-color: #33CCCC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#3366FF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#3366FF');"><div style="background-color: #3366FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#800080');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#800080');"><div style="background-color: #800080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#999999');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#999999');"><div style="background-color: #999999;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FF00FF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FF00FF');"><div style="background-color: #FF00FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FFCC00');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FFCC00');"><div style="background-color: #FFCC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FFFF00');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FFFF00');"><div style="background-color: #FFFF00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#00FF00');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#00FF00');"><div style="background-color: #00FF00;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#00FFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#00FFFF');"><div style="background-color: #00FFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#00CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#00CCFF');"><div style="background-color: #00CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#993366');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#993366');"><div style="background-color: #993366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#C0C0C0');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#C0C0C0');"><div style="background-color: #C0C0C0;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FF99CC');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FF99CC');"><div style="background-color: #FF99CC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FFCC99');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FFCC99');"><div style="background-color: #FFCC99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FFFF99');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FFFF99');"><div style="background-color: #FFFF99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#CCFFCC');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#CCFFCC');"><div style="background-color: #CCFFCC;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#CCFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#CCFFFF');"><div style="background-color: #CCFFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#99CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#99CCFF');"><div style="background-color: #99CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#CC99FF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewLinkColor('#FFFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectLinkColor('#FFFFFF');"><div style="background-color: #FFFFFF;" class="selectColorBox">&nbsp;</div></td>
		   </tr>	 
			</table></div>
			
			
			<div   style="position: absolute;" id="textColorMenu">
			<table width="70" border="0" cellpadding="0" cellspacing="0" style="  position:absolute; background-color: #F7F7F7; left:3px;  top:150px;border: 2px solid #FFFFFF; padding: 0px;">
 
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#000000');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#000000');"><div style="background-color: #000000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#993300');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#993300');"><div style="background-color: #993300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#333300');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#333300');"><div style="background-color: #333300;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#003300');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#003300');"><div style="background-color: #003300;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#003366');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#003366');"><div style="background-color: #003366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#000080');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#000080');"><div style="background-color: #000080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#333399');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#333399');"><div style="background-color: #333399;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#333333');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#333333');"><div style="background-color: #333333;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#800000');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#800000');"><div style="background-color: #800000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FF6600');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FF6600');"><div style="background-color: #FF6600;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#808000');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#808000');"><div style="background-color: #808000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#008000');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#008000');"><div style="background-color: #008000;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#008080');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#008080');"><div style="background-color: #008080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#0000FF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#0000FF');"><div style="background-color: #0000FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#666699');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#808080');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#808080');"><div style="background-color: #808080;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FF0000');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FF0000');"><div style="background-color: #FF0000;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FF9900');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FF9900');"><div style="background-color: #FF9900;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#99CC00');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#99CC00');"><div style="background-color: #99CC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#339966');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#339966');"><div style="background-color: #339966;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#33CCCC');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#33CCCC');"><div style="background-color: #33CCCC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#3366FF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#3366FF');"><div style="background-color: #3366FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#800080');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#800080');"><div style="background-color: #800080;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#999999');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#999999');"><div style="background-color: #999999;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FF00FF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FF00FF');"><div style="background-color: #FF00FF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FFCC00');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FFCC00');"><div style="background-color: #FFCC00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FFFF00');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FFFF00');"><div style="background-color: #FFFF00;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#00FF00');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#00FF00');"><div style="background-color: #00FF00;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#00FFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#00FFFF');"><div style="background-color: #00FFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#00CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#00CCFF');"><div style="background-color: #00CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#993366');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#993366');"><div style="background-color: #993366;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#C0C0C0');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#C0C0C0');"><div style="background-color: #C0C0C0;" class="selectColorBox">&nbsp;</div></td>
			 </tr>
			 <tr>
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FF99CC');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FF99CC');"><div style="background-color: #FF99CC;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FFCC99');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FFCC99');"><div style="background-color: #FFCC99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FFFF99');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FFFF99');"><div style="background-color: #FFFF99;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#CCFFCC');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#CCFFCC');"><div style="background-color: #CCFFCC;" class="selectColorBox">&nbsp;</div></td>		 
			  <td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#CCFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#CCFFFF');"><div style="background-color: #CCFFFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#99CCFF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#99CCFF');"><div style="background-color: #99CCFF;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#CC99FF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#666699');"><div style="background-color: #666699;" class="selectColorBox">&nbsp;</div></td>
				<td class="selectColorBorder" onMouseOver="className = 'selectColorOn'; previewTextColor('#FFFFFF');" onMouseOut="className = 'selectColorOff'" onClick="selectTextColor('#FFFFFF');"><div style="background-color: #FFFFFF;" class="selectColorBox">&nbsp;</div></td>
		   </tr>	 
			</table>
		
</div>
</div>

<!----------------------------------------------------------------------
  Function    :PageProperties MetaTag
  Description : showPageProperties MetaTag or  hidePageProperties MetaTag
 ----------------------------------------------------------------------!> 


<div class="panel panel-primary"  style="position: absolute;LEFT: 60px; TOP:153px;  right: 0px; HEIGHT: 530px;WIDTH: 697px;Z-INDEX: 120;" id="metaTag" >
 <div class="panel-heading" >
                        Meta Tag Panel
                        </div>
            <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>               
 <INPUT class="form-control"
style="Z-INDEX: 1; POSITION: absolute; WIDTH: 384px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 115px; LEFT: 240px" 
id="meta_author" name="meta_author"> 

<TEXTAREA class="form-control" style="Z-INDEX: 2; POSITION: absolute; WIDTH: 385px; FONT-FAMILY: Courier New; HEIGHT: 110px; FONT-SIZE: 16px; TOP: 167px; LEFT: 240px"  cols=34 rows=5 id="meta_keywords" name="meta_keywords"></TEXTAREA> 
<DIV class="panel-body"
style="Z-INDEX: 3; POSITION: absolute; WIDTH: 150px; HEIGHT: 400px; TOP: 61px; LEFT: 83px" 
 align=left><FONT style="FONT-SIZE: 13px" color=#000000 
face=Arial><BR></DIV>
<DIV 
style="Z-INDEX: 3; POSITION: absolute; WIDTH: 150px; HEIGHT: 400px; TOP: 45px; LEFT: 83px" 
id=bv_Text1 align=left><FONT style="FONT-SIZE: 13px" color=#000000 
face=Courier New><BR><BR><BR><BR><BR>Author:<BR><BR><BR>Keyword:<BR>(Seperated&nbsp;by 
Commas)<BR><BR><BR><BR><BR><BR><BR> Page Description:<BR><BR>(25 words or 
less<BR><BR><BR><BR><BR><BR><BR>Categories:</FONT></DIV>
<TEXTAREA  class="form-control" style="Z-INDEX: 4; POSITION: absolute; WIDTH: 385px; FONT-FAMILY: Courier New; HEIGHT: 110px; FONT-SIZE: 16px; TOP: 298px; LEFT: 240px"  cols=34 rows=5 id="meta_description" name="meta_description"></TEXTAREA> 
<INPUT class="form-control"
style="Z-INDEX: 0; POSITION: absolute; WIDTH: 387px; FONT-FAMILY: Courier New; FONT-SIZE: 16px; TOP: 433px; LEFT: 241px" 
id=Categories name="Categories">

 <button type="button" value="button"  class="btn btn-primary" style="  position:absolute;left:580px;TOP: 478px;font-family: arial, verdana, helvetica; font-size: 11px; " onclick="hideMetaTag();showPageProperties();return false;">Ok</button>
     

 </div>

<div>


 <div id="draggable12">
 
<div class="panel panel-default" id="mediaPlayer" style="position: absolute; left:351px;top:262px; Z-INDEX: 210;" style="position:absolute;background-color:#FFFFFF;background-image:url(http://127.0.0.1/VideoBoxBuilder/);background-repeat:repeat;;background-position:left:351px;top:262px;width:207px;height:85px; border: 2px solid #E68282; border-color: #E68282 #650000 #650000 #9C2828;z-index:200" >	
		
		 <div class="panel-heading" >
                        Window Media Player
                        </div>
            <div class="panel-body">
		<table  width="380" border="0" cellpadding="0" cellspacing="0" style="background-color: ; border: 2px solid #FFFFFF; padding: 0px;">
 <tr><td style="padding-bottom: 2px; padding-top: 0px;" width="300">
	<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;">Insert Video Player:</span>
 <button type="button" class="btn btn-default"  onclick="AddText(this.form,11);return false;" data-toggle="tooltip" title="Window player">
                            <i class="fa fa-windows"></i>
                        </button>

	<BR><BR>
<table class="selectColorBorder" width="380" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 
 <tr>
 
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Video URL:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="300">
	<input type="Text" name="WindowVideoFile" id="media" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  
	 </tr>
</table>
<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;top: 70px; ">Layout:</span>
<table width="380" border="0" cellpadding="0" cellspacing="0" style="margin-top: 10px;"><tr><td>


<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Alignment:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="playeralignment" id="alignment" style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="left">Left</option>
	 <option value="right">Right</option>
	 <option value="texttop">Texttop</option>
	 <option value="absmiddle">Absmiddle</option>
	 <option value="baseline">Baseline</option>
	 <option value="absbottom">Absbottom</option>
	 <option value="bottom">Bottom</option>
	 <option value="middle">Middle</option>
	 <option value="top">Top</option>
	</select>
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Border Thickness:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="border" id="borderThickness" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Player id:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;"><input type="text" name="id" id="borderThickness" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	

</td>
<td width="10">&nbsp;</td>
<td>


<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Player Width:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="PlayerWidth" id="horizontal" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Player Height:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="PlayerHeight" id="vertical" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
</table>	




<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Loop:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="loop"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="true">True</option>
	 <option value="false">False</option>
	 
	</select>
	
	
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;"></td>
	<td style="padding-bottom: 2px; padding-top: 0px;"></td>
 </tr>
 
</table>	

<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 5px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="100">Autostart:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="85">
	<select name="autostart"  style="font-family: arial, verdana, helvetica; font-size: 11px; width: 100%;">
	 <option value="">Not Set</option>
	 <option value="true">True</option>
	 <option value="false">False</option>
	 
	</select>
	</td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;"></td>
	<td style="padding-bottom: 2px; padding-top: 0px;"></td>
 </tr>
</table>
<span style="font-family: arial, verdana, helvetica; font-size: 11px; font-weight: bold;top: 180px;">Div Spacing:</span>
<table width="185" border="0" cellpadding="0" cellspacing="0" style="background-color: #F7F7F7; border: 2px solid #FFFFFF; padding: 0px;">
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;" width="80">Top:</td>
	<td style="padding-bottom: 2px; padding-top: 0px;" width="105">
	<input type="text" name="div_widths" id="" value=""  style="font-size: 10px; width: 100%;"></td>
 </tr>
 <tr>
  <td style="padding-bottom: 2px; padding-top: 0px; font-family: arial, verdana, helvetica; font-size: 11px;">Left :</td>
	<td style="padding-bottom: 2px; padding-top: 0px;">
	<input type="text" name="div_heights" id="" value=""  style="font-size: 10px; width: 100%;"></td>

 </tr>
</table>


    <button style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 356px; margin-top: 0px;width: 52px;" onClick="hideMediaPlayer();return false;">Close</button>
           
</td></tr>
</table>
</div></div></div>
</div>
</form>
  

               
</td></tr>
</table>
	         

		

<P>
   




</form>
<P><br/><P><br/>
	<script type="text/javascript">
	$(document).ready(function() {
  $('button').tooltip({container: 'body'});
});
	</script>
</body>
</html>
