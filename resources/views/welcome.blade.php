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
  overflow: hidden;
  text-align: center;
  font-size: 10em;
  color:#fff;
}

#fullpage section { 
    height: 100vh; 
    transition: all 0.7s ease 0s;
    padding: 0;
    margin: 0;
}

#fullpage section:nth-child(1) { background-color: rgb(180, 10, 200); }

#fullpage section:nth-child(2) { background-color: rgb(80, 10, 200); }

#fullpage section:nth-child(3) {
     background-color: rgb(51, 51, 51);
   
    }

#fullpage section:nth-child(4) { background-color: rgb(220, 100, 50); }

#fullpage section:nth-child(5) { background-color: rgb(50, 40, 80); }

.skt{
    width: 100%;
    height: 100vh;
    border-style: none;
    overflow: hidden;
    padding: 0;
    margin: 0;
}
.sketches{
    max-width: 100%;
    padding-top: 9%;
	background-color: rgb(51,51,51);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    
}
.sketches div{
    max-width: 30%;
    max-height: 35%;
	margin: 20px;
	text-align: center;
	font-size: 10px;
    padding: 1px;
    cursor: pointer;
}
.isk{
    border-style: solid;
    border-radius: 5px;
    pointer-events: none;
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
        
          <div class="sketches">
            <div onClick="clickF(this);" id="1">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/CZJFcYKgC" scrolling="no"></iframe>
            </div>
            <div onClick="clickF(this);" id="2">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/SJmHu8_P7" scrolling="no"></iframe>
            </div>
            
            <div onClick="clickF(this);" id="3">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/Bk-6wNvP7" scrolling="no"></iframe>
            </div>


            <div onClick="clickF(this);" id="4">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/r1YzgAODm" scrolling="no"></iframe>
            </div>
                
            <div onClick="clickF(this);" id="5">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/r1YzgAODm" scrolling="no"></iframe>
            </div>
            <div onClick="clickF(this);" id="6">
                <iframe class="isk" src="https://editor.p5js.org/azevedomath/embed/r1YzgAODm" scrolling="no"></iframe>
            </div>
           
          </div>
       
      </section>
      
      <section>ABOUT ME</section>
      
      
      <section>CONTACT</section>
      
    </div>
    <!-- <script src="js/skecth.js"></script> -->
    <!-- <script src="js/particle.js"></script> -->
<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script> 
<script type="text/javascript" src="./js/jquery.fullpage.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>

<script type="text/javascript">
        function clickF(el){
            console.log("redic");
            var url = "";
            if(el.id == 1){
                url = "facebook.com";
            }
            if(el.id == 2){
                url = "https://editor.p5js.org/azevedomath/full/SJmHu8_P7";
            }
            if(el.id == 3){
                url = "https://editor.p5js.org/azevedomath/full/Bk-6wNvP7";
            }
            if(el.id == 4){
                url = "https://editor.p5js.org/azevedomath/full/r1YzgAODm";
            }
            if(el.id == 5){
                url = "https://editor.p5js.org/azevedomath/full/r1YzgAODm";
            }
            if(el.id == 6){
                url = "https://editor.p5js.org/azevedomath/full/r1YzgAODm";
            }
            window.open(url, "_blank");
        }
        var current;
		FastClick.attach(document.body);
        $("#fullpage").fullpage();

</script>


</body></html>