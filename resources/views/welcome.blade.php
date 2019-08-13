<html lang="en"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>MAO</title>
	<style type="text/css">
* {
  padding: 0;
  margin: 0;
  font-family:'Roboto';
}

#fullpage {
  height: 100vh;
  text-align: center;
  font-size: 5em;
  color:#fff;
}

#fullpage section { 
    height: 100vh; 
    transition: all 0.7s ease 0s;
    padding: 0;
    margin: 0;
}
section p{
    font-size: 30px;
}

#fullpage section:nth-child(1) { background-color: rgb(50, 10, 200); 

    background: linear-gradient(180deg, rgba(50,10,200) 0%, rgba(180, 10, 200) 100%); 
   

}

#fullpage section:nth-child(2) { 
    background: rgb(198,10,200);
    background: linear-gradient(180deg, rgba(180,10,200) 0%, rgba(151, 10, 51) 100%); 
    
    }

#fullpage section:nth-child(3) {
     background-color: rgb(151, 10, 51);
    background: linear-gradient(180deg, rgba(151, 10, 51,1) 0%, rgba(220,100,50,1) 100%); 
    
    }

#fullpage section:nth-child(4) { 
    background-color: rgb(220, 100, 50); 
    background: linear-gradient(180deg, rgba(220,100,50,1) 0%, rgba(250, 200, 0,1) 100%); 
    
    }

#fullpage section:nth-child(5) { background-color: rgb(250, 200, 0); }

.skt{
   
    width: 100%;
    height: 200vh;
    border-style: none;
    overflow: hidden; 
    padding: 0;
    margin: 0;
}
.sketches{
    max-width: 100%;
    padding-top: 9%;
	
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    
}
.flex{
    display: flex;
    flex-direction: column;
}
.sketches div{
    max-width: 30%;
    max-height: 35%;
	margin: 20px;
	text-align: center;
	font-size: 10px;
    padding: 1px;
}

.isk{
    width:65%;
    height: 30%;
    border-style: solid;
    border-radius: 5px;
    cursor: pointer;
}

.title{
    position:absolute;
    top: 0;
    left: 10%;
    background-color: none;
    
}
.header{
    align-content: center;
}
.swf {
    margin-left: 46%;
    background-color: rgb(255,255,0);
    display: inline;
    position: absolute;
    bottom: 50;
    padding: 10px;
    opacity: 1;
    color: black;
    font-size: 15px;
    text-align: center;hidden
    align-content: center;
    animation: fade 2s infinite;
    
}
.profile{
  
  border-radius: 50%;
  width: 20%;
  height: 30%;
  margin: 30px;
  align-self: center; 
}

@keyframes fade {
  0%,100% { opacity: 0 }
  50% { opacity: 1 }
}


</style>
	</head>
	<body>
    <div id="fullpage">
      <section class="header">
      
      <div class="title">
      WELCOME
      </div>
      <div class="swf">
            Swipe Down
       </div>
       <iframe class="skt" src="https://editor.p5js.org/azevedomath/embed/BB_0_qDxB"></iframe>
     
    </section>
      <section>

      </section>
      <section>
        <div style="margin-left: 30%; margin-top: 0; font-size: 100px; position: absolute;">
        My Skecths!
        </div>
          <div class="sketches">
            <div onClick="clickF(this);" id="1">
                <img class="isk" src="images/colorfullspheres.png">
            </div>
            <div onClick="clickF(this);" id="2">
                <img class="isk" src="images/bubbles.png" scrolling="no">
            </div>
            
            <div onClick="clickF(this);" id="3">
                <img class="isk" src="images/physics.png" scrolling="no">
            </div>


            <div onClick="clickF(this);" id="4">
                <img class="isk" src="images/fireworks.png" scrolling="no">
            </div>
                
            <div onClick="clickF(this);" id="5">
                <img class="isk" src="images/textfordots.png" scrolling="no">
            </div>
            <div onClick="clickF(this);" id="6">
                <img class="isk" src="images/starfield.png" scrolling="no">
            </div>
           
          </div>
       
      </section>
      
      <section class="flex">
        <div>ABOUT ME</div>
      
      <img src="images/port.jpg" alt="That's me!" class="profile">
      <p>
      I'm a Sotware Engenier, studying Computer Science on UnB<br>
      Focused on Web Developtment and in love for Procedural Art 
      </p>
      
      </section>
      
      
      <section>
      CONTACT
      <br>
      <br>
      <p>E-mail: <a href=""> azevedooliveiramatheus@gmail.com </a> <br>
         My GitHub: <a href="https://github.com/azevedomath"> https://github.com/azevedomath </a>
      
      </p>
      </section>
      
    </div>
    <!-- <script src="js/skecth.js"></script> -->
    <!-- <script src="js/particle.js"></script> -->
<script type="text/javascript" async src="https://ssl.google-analytics.com/ga.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>

<script type="text/javascript">
        function clickF(el){
            var url = "";
            if(el.id == 1){
                url = "https://editor.p5js.org/azevedomath/full/Bk-6wNvP7";
            }
            if(el.id == 2){
                url = "https://editor.p5js.org/azevedomath/full/HkZc4vPvm";
            }
            if(el.id == 3){
                url = "https://editor.p5js.org/azevedomath/full/r1YzgAODm";
            }
            if(el.id == 4){
                url = "https://editor.p5js.org/azevedomath/full/SJmHu8_P7";
            }
            if(el.id == 5){
                url = "https://editor.p5js.org/azevedomath/full/_wy68vL2u";
            }
            if(el.id == 6){
                url = "https://editor.p5js.org/azevedomath/full/K6vMzBgO4";
            }
            window.open(url, "_blank");
        }
        
</script>


</body></html>