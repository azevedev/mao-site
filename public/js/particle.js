class Particle{

    constructor(x, y){
      if(x == -1){
        this.pos = createVector(random(width),random(300));
          
      }else{
        this.pos = createVector(x,y);
      
      }
      this.dead = false;
      this.arrived = false;
      this.vel = createVector();
      this.acc = p5.Vector.random2D();
      this.target = createVector(0,0);
      this.r = 4;
      this.c1 = random(255);
      this.c2 = random(255);
      this.c3 = random(255);
    
    }
    
    update(){
      this.pos.add(this.vel);
      this.vel.add(this.acc);
      this.vel.limit(22);
      this.acc.mult(0);
      var mousep = createVector(mouseX, mouseY);
      var d = p5.Vector.sub(mousep, this.pos);
      //console.log(d.mag());
      if(d.mag() < 45){
        var newforce = d.mult(-1);
        newforce.limit(2);
        this.applyForce(newforce);
      }

      var dist = p5.Vector.sub(this.target, this.pos);
      if(dist.mag() < 5){
          this.arrived = true;
      }else{
          this.arrived = false;
      }
    }
    
    draw(){
        //noStroke();
        fill(255);
        //rect(this.pos.x,this.pos.y, this.r*2, this.r*2);
        
        //fill(this.c1,this.c2,this.c3);
        //fill(255);
        //stroke(this.c1, this.c2, this.c3);
        stroke(0);
        strokeWeight(2);
        ellipse(this.pos.x, this.pos.y, this.r*2);
        //rect(this.pos.x, this.pos.y, this.r*2,this.r*2);
         
    }
  
    applyForce(force){
      this.acc.add(force);
    }
    
    attracted(target){
      var t = p5.Vector.sub(target,this.pos);
      var d = t.mag();
      var speed = 50;
      if(d < 200){
        speed = map(d, 0, 200, 0, 20);
      }
      t.setMag(speed);
      var result = p5.Vector.sub(t, this.vel);
      result.limit(1);
      return result;
    }
    
    move(){
      var force = this.attracted(this.target);
      this.applyForce(force);
    }
    
  
  }