function topModule($pageTitle) {
  $html = <<<"TOPOUTPUT"
<!DOCTYPE html>
<html lang='en'>

  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DualCab Team">
    <link rel="icon" href="../../media/blueUPSFELogo16x16.png" type="image/x-icon"> 
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Secular one">          
    <meta name="description" content="RMIT Introduction to IT: Assignments 2 and 3: Team DualCab">
    <title>$pageTitle</title>  
  </head>

  <body>
  <main>
    <div class="center">

      <div class="myheader">
        <ul class="navtxt">
          <li>
            <img class="borderless-image" src="images/tyre.svg">  
            <img class="borderless-image" src="images/dualcab.svg">
            <img class="borderless-image flipped-horiz" src="images/tyre.svg">  
          </li>
        </ul>
      </div>

TOPOUTPUT;
  echo $html;
}

function navModule() {
    $html = <<<"NAVOUTPUT"

    <div class="myheader dark-bg-panel">
        <nav>
          <ul class="navtxt">
            <li>        
              <a class="nav-element" href="#">Home</a>
            </li>
            <li>
              <a class = "nav-element" href="ideal-jobs.html">Ideal Jobs</a>
            </li>
            <li>
              <a class = "nav-element" href="tools.html">Tools</a>
            </li>
            <li>
              <a class = "nav-element" href="industry-data.html">Industry Data</a>
            </li>
            <li>
              <a class = "nav-element" href="it-work.html">IT Work</a>
            </li>
            <li>
              <a class = "nav-element" href="technologies.html"> Technologies</a>
            </li>
            <li>
              <a class = "nav-element" href="project.html">Project</a>
            </li>
            <li>
              <a class = "nav-element" href="reflections.html">Reflections</a>
            </li>
          </ul>  
        </nav>
      </div>

NAVOUTPUT;
  echo $html;
}


function endModule() {
  $dateLastModified = date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
  $html = <<<"ENDOUTPUT"

<div class="flex-container-footer">
         <div class="footbox1">
          <ul style="list-style-type:none;">
            <li>Subject: Introduction to Information Technology</li>
            <li>Student Team: Team Dualcab</li>
            <li><a href='https://github.com/LNeilsenStudent/Assessment_2'>Our GitHub repository</a></li>
          </ul>
         </div>

         <div class="footbox2">
           <ul style="list-style-type:none;"> 
             <li>Contact us: Dualcab@provider.com.au</li>
             <li>Phone: (03) 512 345 67</li>
             <li>Mobile: 0415 123 456</li>
            </ul>
          </div>

          <div class="footbox3">
            <ul style="list-style-type:none;">
             <li><b>Quick Links</b></li>
             <br>
             <li><a href='link1' target="_blank">Link Title</a></li>
             <li><a href='Link2' target="_blank">Link Title</a></li>
             <li><a href='Link3'>Link Title</a></li>
            <ul>
           </div>
    </div>
            
    <div class='flex-container-footer2'>
      <ul style="list-style-type:none;">
        <li>&copy;<script>document.write(new Date().getFullYear());</script>   Name: Team dualcab</li>
        <li>Disclaimer: This website is not a real website and is being developed as part of RMIT Introduction to Information Technology</li>
        <li> at RMIT University in Melbourne, Australia.</li> 
        <li>Last modified: $dateLastModified.</li>      
        <li><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></li>
       </ul>
    </div>


ENDOUTPUT;
  echo $html;
}

?>
