<!DOCTYPE html>
<html>
<head>
<style>
  .all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
    .amarelo{
        background-color: yellow;
    }
   
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ccc;
}

li {
  float: left;
}

li a {
  display: block;
  color: blue;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ccc;
}

.active {
  background-color: #ddd;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color: white;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
  overflow:auto  ;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

.faviconperdon{
  margin-left:115px; 
  margin-top:30px; 
  width:95px;
  height:95px;
  
}

.cside1de1{
  text-align:center; 
  padding-top:15px 
}
.cside1de2{
  text-align:center; 

}

.imgapp{
  padding:5px; 
}
.imgapp:hover, .imgapp:active{
  background-color:black;  
   
}
div.rw{
  background-color: #006600;   
  padding-right: 15px;
 
  padding-left: 15px;
 
  margin-right: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
  border: 1px solid white;
}
div.rw0000{
   color: black; 
   background-color: green;  
  padding-right: 15px;
 
  padding-left: 15px;
 
  margin-right: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
  border: 3px solid white ;
}
div.rw1{
    margin-top: 15px;
  padding-right: 15px;
 
  padding-left: 15px;
  
  margin-right: 15px;
  
  margin-left: 45px; 
  border: 1px solid white;
}
div.rw12{

  margin-right: 45px;


  padding-right: 15px;
 
  padding-left: 15px;
 
  
  margin-top: 15px;
  margin-bottom: 15px;
  border: 1px solid white;
}
div.rw3{
  margin-bottom: 15px;

 
  padding-right: 15px;
 
  padding-left: 15px;
 
  margin-right: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
  border: 1px solid white;
}
p.textob{
  padding: 3px;
  color: back-grey ; 
}
.volt {
  background-color: black ;
  color:yellow;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:yellow;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="header">
  <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="310mm"
   height="60mm"
   viewBox="0 0 350 60"
   version="1.1"
   id="svg8"
   inkscape:version="1.0.2 (e86c870879, 2021-01-15)"
   sodipodi:docname="drawing.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.23"
     inkscape:cx="1049.7778"
     inkscape:cy="0"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     inkscape:window-width="350"
     inkscape:window-height="60"
     inkscape:window-x="0"
     inkscape:window-y="0"
     inkscape:window-maximized="0" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1">
    <rect
       style="opacity:0.995;fill:#ffd700;stroke:#000000;stroke-width:2.05083;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       id="rect833"
       width="350"
       height="60"
       x="0"
       y="0" />
       <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:68.0777px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:#f3f700;stroke-width:1.70199;stroke-opacity:1"
       x="130.4124"
       y="77.38308"
       id="text841"
       transform="scale(0.85717465,1.1666234)"><tspan
         sodipodi:role="line"
         id="tspan839"
         x="0"
         y="50"
         style="fill:#ffffff;fill-opacity:1;stroke:#f3f700;stroke-width:1.70199;stroke-opacity:1">    nold-svs   </tspan></text>
  </g>
</svg>

</div>

<div class="row">
  <div class="column side" style="background-color:#aaa;">
  
  <img class="faviconperdon"  src="../../../img_geral/drawing-1.png" width="25px" height="25px"/>
  <h3 class="cside1de1" > Rock Studio</h3>
  <h5 class="cside1de2" > Nold sys </h5> 
  </div>
  
















  
  <div class="column middle" style="background-color:#bbb;">

 
  <!--<ul>

  <li><a class="volt" href="../../src/posts/index.html">Msgs</a></li>
  <li><a class="volt" href="../../src/posts/index.html">Email</a></li>
  <li><a class="volt" href="../../src/posts/index.html">Sobre</a></li>
  <li><a class="volt" href="../../src/posts/index.html">Commits</a></li>
  <li><a class="volt" href="../../src/posts/index.html">Galeria</a></li>
  </ul>-->
  
  <ul>
  <li><a  href="../posts/">post recente:</a></li>
 
  <li><a href="../commits/">commits</a></li>  
 
</ul>






<div class="container">
  <form action="index_bck.php" method="GET">
  
  <div class="row">
    <div class="col-25">
      <label for="country">ID:</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">



        <?php

include('../../login-cadastro/conexao.php');




  

    
   
    
   











  
   

   
 














        $sql  = "SELECT * FROM com ORDER BY id ASC   ";
$result_usuarios = $pdo->query($sql);


$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        
        
 echo "<option value=".$row_usuario["id"].">".$row_usuario["id"]."</option>";
 
  
};

  


      
 

?>
       
      </select>
    </div>
  </div>
  
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>














</div>







  
 
  












  
 <div class="column side" style="background-color:#ccc;"><ul>
  
  
  <li><img class="imgapp"  src="../../../img_geral/PSDOIT--site.png" width="90px" height="90px"></li>
  <li><img class="imgapp"  src="../../../img_geral/sigdu--site.png" width="90px" height="90px"></li>
  <li><img class="imgapp"  src="../../../img_geral/summerr--site.png" width="90px" height="90px"></li>
  <hr/>
  <li><img class="imgapp"  src="../../../img_geral/vtimer--site.png" width="90px" height="90px"></li>
  <li><img class="imgapp"  src="../../../img_geral/wesio--site.png" width="90px" height="90px"></li>
</ul>
</div>














<div class="footer"><!--
 <article class="all-browsers">
  <h1>Generated 3 paragraphs, 312 words, 2156 bytes of Lorem Ipsum</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique euismod rhoncus. Aenean fringilla, neque eu condimentum vehicula, lacus est tincidunt est, eget feugiat risus est tincidunt orci. Sed rutrum leo ac lorem ornare consequat. Curabitur felis augue, vulputate sed varius sed, tristique nec tortor. Morbi quis vulputate lectus. Nunc interdum hendrerit suscipit. Suspendisse in mollis sem, a rutrum sem. Donec ac tortor venenatis, venenatis lacus at, congue dui. Nam eget accumsan felis, a aliquam sapien. Vivamus placerat pharetra libero, euismod auctor diam elementum eu. Cras tortor leo, interdum ut gravida eget, porta a tortor. </p>
  </article>
  <article class="browser">
    <h2>Mozilla Firefox</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non gravida ipsum. Proin fringilla fermentum nunc tincidunt fermentum. Pellentesque turpis ex, accumsan a sodales ut, faucibus a sapien. Proin mauris mauris, pretium non dolor vel, varius eleifend ipsum. Praesent faucibus turpis vitae lobortis finibus. Nunc at sollicitudin elit. Etiam maximus augue enim, sed ultrices est molestie sed. In efficitur, leo quis vulputate pulvinar, urna felis euismod augue, quis lacinia ligula neque sit amet eros. Nullam hendrerit luctus elit pretium tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque pharetra lectus accumsan interdum rutrum. Donec leo libero, fermentum quis odio eget, posuere efficitur velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris pulvinar sed elit et convallis. </p>
  </article>
  <article class="browser">
    <h2>Painel dashboard do NDD: </h2>
   <a href="../../api/forms/"> <p><button class="button" style="vertical-align:middle"><span>https://sent.newnoldsys.com/src/api/forms/</span></button> </p></a>
  </article>
  <article class="browser">
    <h2>recente post:</h2>
   <a href="../../api/recent/"> <p><button class="button" style="vertical-align:middle"><span>https://sent.newnoldsys.com/src/api/recent/</span></button> </p></a>
  </article>
</article>-->
</div>

</body>
</html>
