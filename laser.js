/* let particles = [];

// create canvas element and append it to document body
var canvas = document.createElement('canvas');
document.body.appendChild(canvas);

// some hotfixes... ( ≖_≖)
document.body.style.margin = 0;
canvas.style.position = 'fixed';
canvas.style.top = 0;
canvas.style.left = 0;
canvas.style.zIndex = -1;

// get canvas 2D context and set him correct size
var ctx = canvas.getContext('2d');
resize();

const links = document.querySelectorAll('.internal__link');
links.forEach((link) => {
  link.addEventListener('mousemove', drawOnLinks);
  link.addEventListener('mousedown', setPosition);
  link.addEventListener('mouseenter', setPosition);
});

// last known position
var pos = { x: 0, y: 0 };

function drawOnLinks(e) {
  //   alert('drawing');
  // mouse left button must be pressed

  ctx.beginPath(); // begin
  if (true && Math.random() > 0.8) {
    particles.push(
      new Particles({
        x: pos.x,
        y: pos.y,
      })
    );
  }
  ctx.lineWidth = 5;
  ctx.lineCap = 'round';
  ctx.shadowColor = '#ffe269';
  ctx.shadowBlur = 5;
  ctx.strokeStyle = '#8c0fb2';

  ctx.moveTo(pos.x, pos.y); // from
  setPosition(e);
  ctx.lineTo(pos.x, pos.y); // to

  ctx.stroke(); // draw it!
}

window.addEventListener('resize', resize);
document.addEventListener('mousemove', draw);
document.addEventListener('mousedown', setPosition);
document.addEventListener('mouseenter', setPosition);

// new position from mouse event
function setPosition(e) {
  let x = null;
  let y = null;
  if (
    e.type == 'touchstart' ||
    e.type == 'touchmove' ||
    e.type == 'touchend' ||
    e.type == 'touchcancel'
  ) {
    var evt = typeof e.originalEvent === 'undefined' ? e : e.originalEvent;
    var touch = evt.touches[0] || evt.changedTouches[0];
    x = touch.pageX;
    y = touch.pageY;
  } else if (
    e.type == 'mousedown' ||
    e.type == 'mouseup' ||
    e.type == 'mousemove' ||
    e.type == 'mouseover' ||
    e.type == 'mouseout' ||
    e.type == 'mouseenter' ||
    e.type == 'mouseleave'
  ) {
    x = e.clientX;
    y = e.clientY;
  }

  pos.x = x;
  pos.y = y;
}

// resize canvas
function resize() {
  ctx.canvas.width = window.innerWidth;
  ctx.canvas.height = window.innerHeight;
}

function draw(e) {
  // mouse left button must be pressed
  if (e.buttons !== 1) return;

  ctx.beginPath(); // begin
  if (true && Math.random() > 0) {
    particles.push(
      new Particles({
        x: pos.x,
        y: pos.y,
      })
    );
  }
  ctx.lineWidth = 5;
  ctx.lineCap = 'round';
  ctx.shadowColor = '#ffe269';
  ctx.shadowBlur = 5;
  ctx.strokeStyle = '#8c0fb2';

  ctx.moveTo(pos.x, pos.y); // from
  setPosition(e);
  ctx.lineTo(pos.x, pos.y); // to

  ctx.stroke(); // draw it!
}

function Spark(options) {
  options = options || {};
  this.x = options.x || w * 0.5;
  this.y = options.y || h * 0.5;
  this.v = options.v || {
    direct: Math.random() * Math.PI * 2,
    weight: Math.random() * 5 + 5,
    friction: 0.94,
  };
  this.a = options.a || {
    change: Math.random() * 0.2 - 0.1,
    min: this.v.direct - Math.PI * 0.4,
    max: this.v.direct + Math.PI * 0.4,
  };
  this.g = options.g || {
    direct: Math.PI * 0.5 + (Math.random() * 0.4 - 0.2),
    weight: Math.random() * 0.5 + 0.5,
  };
  this.width = options.width || Math.random() * 2 + 2;
  this.lifespan = options.lifespan || Math.round(Math.random() * 10 + 15);
  this.maxlife = this.lifespan;
  this.color = options.color || '#f6ff92';
  this.prev = { x: this.x, y: this.y };

  this.update = function (index, array) {
    this.prev = { x: this.x, y: this.y };
    this.x += Math.cos(this.v.direct) * this.v.weight;
    this.x += Math.cos(this.g.direct) * this.g.weight;
    this.y += Math.sin(this.v.direct) * this.v.weight;
    this.y += Math.sin(this.g.direct) * this.g.weight;
    this.v.weight *= this.v.friction;
    this.v.direct += this.a.change;
    (this.v.direct > this.a.max || this.v.direct < this.a.min) &&
      (this.a.change *= -1);
    this.lifespan > 0 && this.lifespan--;
    this.lifespan <= 0 && this.remove(index, array);
  };

  this.render = function (ctx) {
    if (this.lifespan <= 0) return;
    ctx.beginPath();
    ctx.globalAlpha = this.lifespan / this.maxlife;
    ctx.strokeStyle = this.color;
    ctx.lineWidth = this.width;
    ctx.moveTo(this.x, this.y);
    ctx.lineTo(this.prev.x, this.prev.y);
    ctx.stroke();
    ctx.closePath();
  };

  this.remove = function (index, array) {
    array.splice(index, 1);
  };
}

function Particles(options) {
  options = options || {};
  this.max = options.max || Math.round(Math.random() * 20 + 10);
  this.sparks = [...new Array(this.max)].map(() => new Spark(options));

  this.update = function () {
    this.sparks.forEach((s, i) => s.update(i, this.sparks));
  };

  this.render = function (ctx) {
    this.sparks.forEach((s) => s.render(ctx));
  };
}

function loop() {
  update();
  render();
  requestAnimationFrame(loop);
}

loop();

function update() {
  particles.forEach((p) => p.update());
}

function render() {
  ctx.fillStyle = '#ff68fc';
  //   ctx.shadowColor = '#403145';
  ctx.globalCompositeOperation = 'source-in';
  ctx.globalAlpha = 0.9;
  ctx.fillRect(0, 0, window.innerWidth, window.innerHeight);

  ctx.globalCompositeOperation = 'screen';
  particles.forEach((p) => p.render(ctx));
} */let script = document.currentScript

window.addEventListener("DOMContentLoaded",() => {
  let iDiv = document.createElement('div');
  iDiv.id = 'cursor';
  if(script.getAttribute("difference") == "disable"){
      iDiv.className = 'mscursor-cursor';
  } else {
      iDiv.className = 'mscursor-cursor mscursor-difference';
  }
  document.getElementsByTagName('body')[0].appendChild(iDiv);

  let pauseAnimation = script.getAttribute("pause-animation");

  let innerDiv = document.createElement('div');

  if(script.getAttribute("color") !== null){
      iDiv.style.backgroundColor = script.getAttribute("color");
  } else {
      if(script.getAttribute("difference") == "disable"){
          iDiv.style.backgroundColor = "black"
      } else {
          iDiv.style.backgroundColor = "white"
      }
  }

      if(pauseAnimation !== null && pauseAnimation == "disable"){
          if(script.getAttribute("circle-outline") == "disable"){
              innerDiv.className = 'mscursor-circle';
          } else {
              innerDiv.className = 'mscursor-circle new';
          }
      } else{
          if(script.getAttribute("circle-outline") == "disable"){
              innerDiv.className = 'mscursor-circle mscursor-border-transform';
          } else {
              innerDiv.className = 'mscursor-circle new mscursor-border-transform';
          }
      }

      

  iDiv.appendChild(innerDiv); 

  let size = Number(script.getAttribute("size")) || 30

  for(let i = 0; i < size; i++){
    let innerDiv = document.createElement('div');
    if(pauseAnimation !== null && pauseAnimation == "disable"){
      innerDiv.className = 'mscursor-circle';
  } else {
      innerDiv.className = 'mscursor-circle mscursor-border-transform';
  }
  
  if(script.getAttribute("color") !== null){
      innerDiv.style.backgroundColor = script.getAttribute("color");
  } else {
      if(script.getAttribute("difference") == "disable"){
          innerDiv.style.backgroundColor = "black"
      } else {
          innerDiv.style.backgroundColor = "white"
      }
  }
    iDiv.appendChild(innerDiv);
  }



const coords = { x: 0, y: 0 };
let timeout
const circles = document.querySelectorAll(".mscursor-circle");

const cursor = document.querySelector(".mscursor-cursor");

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  if(script.getAttribute("gradient") !== null){
      let colors = script.getAttribute("gradient").split(",")
      circle.style.backgroundColor = colors[Math.floor((index * colors.length)/ circles.length)];

      document.querySelector("div.new").border = `0.5px solid ${colors[0]}`
  }
});

const addclass = (e) => {
  if(script.getAttribute("pause-animation") !== "disable"){
    document.body.classList.remove("mscursor-nocursor")
    if(script.getAttribute("circle-outline") !== "disable"){
      document.querySelector("div.new").classList.remove("mscursor-scale-outline")
      document.querySelector("div.new").style.border=""
    }
    document.querySelectorAll("div.mscursor-circle").forEach(element => {
        element.classList.remove("mscursor-scale")
    })
  }
      coords.x = e.clientX;
      coords.y = e.clientY;
};

window.addEventListener("mousemove", (e) => addclass(e)) 
window.addEventListener("touchmove", (e) => addclass(e.touches[0])) 

  function animateCircles() {
      let x = coords.x;
      let y = coords.y;

      cursor.style.top = x;
      cursor.style.left = y;
      
      circles.forEach(function (circle, index) {
        circle.style.left = x - 12 + "px";
        circle.style.top = y - 12 + "px";

        circle.style.scale = (circles.length - index) / circles.length;

        circle.x = x;
        circle.y = y;

        const nextCircle = circles[index + 1] || circles[0];
        x += (nextCircle.x - x) * 0.3;
        y += (nextCircle.y - y) * 0.3;
      });

      requestAnimationFrame(animateCircles);
    }

    animateCircles();

    if(script.getAttribute("cursor") == "disable"){
      document.body.classList.add("mscursor-nocursor")
    }

    if(script.getAttribute("pause-animation") !== "disable"){        
      const moove = () => {
          clearTimeout(timeout);
          timeout = setTimeout(
          () => {    
          document.body.classList.add("mscursor-nocursor")
          if(script.getAttribute("mscursor-circle-outline") !== "disable"){
              document.querySelector("div.new").classList.add("mscursor-scale-outline")

              if(script.getAttribute("color") !== null){
                  if(script.getAttribute("color-outline") !== null){
                      document.querySelector("div.new").style.border= `0.5px solid ${script.getAttribute("color-outline")}`;
                  } else {
                      document.querySelector("div.new").style.border= `0.5px solid ${script.getAttribute("color")}`;
                  }
              } else {
                  if(script.getAttribute("color-outline") !== null){
                      document.querySelector("div.new").style.border= `0.5px solid ${script.getAttribute("color-outline")}`;
                  } else {
                      if(script.getAttribute("difference") == "disable"){
                          document.querySelector("div.new").style.border= `0.5px solid black`
                      } else {
                          document.querySelector("div.new").style.border= `0.5px solid white`
                      }
                  }
              }
              
          }
          document.querySelectorAll("div.mscursor-circle").forEach(element => {
              element.classList.add("mscursor-scale")
          })
          }, 100)
      }

      document.onmousemove = moove;
      document.ontouchmove = moove;
    }
})
