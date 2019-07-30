function windowResized() {
    var s = select("#fullpage");
    resizeCanvas(windowWidth*0.95, s.height);
    
  }
var div;
var pos;
var ft;
var points;
var particles = [];
var tex;
var ids; 
var div;
var current = 0;
var texFont = 90;
function preload(){
  
 ft = loadFont("Roboto-Light.ttf");
}
var cnv;
var ltex = 0;
function setup() {
    ids = ["","MY PROJECTS","MY SKETCHES", "ABOUT ME", "CONTACT"];
    if(current >= ids.length){
        current = 0;
    }
    if(current < 0){
        current = ids.length-1;
    }
    var s = select("#fullpage");
    cnv = createCanvas(windowWidth*0.95, s.height);
    // positions canvas 50px to the right and 100px
    // below upper left corner of the window
   cnv.position(0, 0);
   cnv.style("padding","0");
   cnv.style("margin","0");
   cnv.style("pointer-events", "none");
   tex = "Init();"
   points = ft.textToPoints(tex, 0, 0 , 0);  
   for(let i = 0; i < points.length; i++){
     particles[i] = new Particle(-1,-1);
   }
}

function draw() {
  updatePoints();
  clear();
  for(i = particles.length-1; i >= 0; i--){ 
    
    particles[i].draw();
    particles[i].move();
    particles[i].update();

  }
 
  
 
  
}

function updatePoints(){
    
    if(current >= ids.length){
        current = ids.length-1;
    }
    if(current < 0){
        current = 0;
    }
    tex = ids[current];
    
    
    ltex = (window.innerWidth - (tex.length * texFont))/2;
    points = ft.textToPoints(tex, 0+ltex,0+texFont, texFont);
 
    if(current == 0)
        points = ft.textToPoints(tex, tex.length+texFont*2,height/2, texFont*2);
 
     if(points.length > particles.length){
          for(var i = particles.length; i < points.length; i++){
          p = random(particles);
          particles[i] = new Particle(p.pos.x,p.pos.y);
      }
    }else if (points.length < particles.length){
        
      var n = particles.length - points.length;
      for(let i = points.length-1; i < points.length+n; i++){
          if(!particles[i].dead){
            particles[i].dead = true;
          }
      }
    
    }
  let count = 0;
  for(let i = 0; i < particles.length; i++){
    let p = points[count];
    particles[i].target.x = p.x; 
    particles[i].target.y = p.y;
    count++
    if(count >= points.length){
        count = 0;
    } 
}

}
function mousePressed(){
   

}