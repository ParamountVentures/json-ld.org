<?php
print <<< htmlcode
<!DOCTYPE html>
<html version="HTML+RDFa 1.1"
      prefix="
             xhv: http://www.w3.org/1999/xhtml/vocab# 
             xsd: http://www.w3.org/2001/XMLSchema#
             rdfs: http://www.w3.org/2000/01/rdf-schema#
             dc: http://purl.org/dc/terms/
             vcard: http://www.w3.org/2006/vcard/ns#
             v: http://rdf.data-vocabulary.org/#"
      lang="en" >
   <head>
      <title>JSON-LD - JSON for Linking Data</title>

      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

      <!-- Style Sheets -->  
      <link rel="stylesheet" type="text/css" href="../static/css/bootstrap/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../static/css/bootstrap/bootstrap-responsive.css">
      <link rel="stylesheet" type="text/css" href="../static/css/bootstrap/font-awesome.css">
      <link rel="stylesheet" href="../common/prettify.css" type="text/css" />
      <link rel="shortcut icon" href="../favicon.ico" />

      <!-- script tags -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script type="text/javascript" src="jquery-ui-1.8.14.custom.min.js"></script>
      <script type="text/javascript" src="js_beautify.js"></script>
      <script type="text/javascript" src="../common/prettify.js"></script>
      <script type="text/javascript" src="../common/lang-jsonld.js"></script>
      <script type="text/javascript" src="../common/lang-nquads.js"></script>
      <script type="text/javascript" src="Future.js"></script>
      <script type="text/javascript" src="jsonld.js"></script>
      <script type="text/javascript" src="playground.js"></script>
      <script type="text/javascript" src="playground-examples.js"></script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40462488-1', 'json-ld.org');
        ga('send', 'pageview');
      </script>

   </head>

   <body onload="playground.init();">
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="row-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="../index.html"><img src="../images/json-ld-data-24.png"> JSON-LD</a>
            <div class="nav-collapse">
              <ul class="nav">
                <li><a href="#"><span class="icon-beer"></span> Play</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-folder-open"></span> Specification <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header"><strong>Latest drafts</strong></li>
                    <li><a href="http://json-ld.org/spec/latest/">Specification</a></li>
                    <li><a href="http://json-ld.org/requirements/latest/">Requirements</a></li>
                    <li class="divider"></li>
                    <li class="nav-header"><strong>Previous Drafts</strong></li>
                    <li><a href="http://json-ld.org/spec/">Specification</a></li>
                    <li><a href="http://json-ld.org/requirements/">Requirements</a></li>
                  </ul>
                </li>
                <li><a href="../learn.html"><span class="icon-book"></span> Documentation</a></li>
                <!-- <li><a href="#"><span class="icon-beaker"></span> Developers</a></li> -->
                <li><a href="../images/index.html"><span class="icon-picture"></span> Images</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>


      <div class="container">
        <br>


         <div id="content"> 
            <div id="info"> 
               <h1>Primers</h1> 
               <p>The following primers are sorted in most recent to
               least recent order:</p>
               <ul>
                 <li><a href="latest/">Latest</a></li>

htmlcode;

if(is_dir('ED'))
{
   $editorsDrafts = scandir('ED', 1);

   foreach($editorsDrafts as $draft)
   {
      if($draft != "." and $draft != "..")
      {
         print("                 <li><a href=\"ED/$draft/\">$draft</a></li>");
      }
   }
}

print <<< htmlcode
               </ul>
            </div>
         </div>
         
         <br>

         <div id="footer">
            <p id="copyright">
               Website content released under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike license</a> except where an alternate is specified.
            </p>
            <p id="legal">
               Part of the <a href="http://payswarm.com/">payswarm.com</a> initiative.
            </p>
         </div>

      </div> <!-- /container -->
   </body> 
</html>

htmlcode;

?>

