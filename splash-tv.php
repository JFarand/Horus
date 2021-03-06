<style>
/* Base Styles */
#splash_body__tv {
    background-color:#000;
    margin: 0px;
    z-index: 999999;
    display: block;
    position: absolute;
    width: 100vw;
    height: 100vh;
}

.nav-items, .cool-junk, .credit {
  position: relative;
  width: 700px;
  height: 40px;
  margin: 0 auto;
}
.nav-items a, .fancy-junk {
  font-family: 'Inconsolata';
  font-size: 24px;
  color: inherit;
  text-decoration: none;
  z-index: 300;
  padding: 0 15px;
  letter-spacing: 2px;
}

.fancy-junk a,
.credit a {
  color: cyan;
}

.confs {
    font-size: 18px;
}

.nav-wrapper .text, .fancy-junk {
  position: absolute;
  color: white;
}

.credit {
  color: white;
  font-family: 'Inconsolata';
  font-size: 18px;
  margin-top: 50px;
  text-align: center;
}

.buzz_wrapper{
  position:relative;
  width:700px;
  margin:20px auto;
  background-color:#000;
  padding:50px;
}
.owl {
  font-family: 'Mr Dafoe', cursive;
  font-size: 230px;
  margin-top: 50px;
  margin-bottom: 0;
  line-height: 91px;
  text-align: center;
}
.buzz_wrapper span{
  position:absolute;
  -webkit-filter: blur(1px);
  color: #EB219B;
  -webkit-text-fill-color: white;
  text-shadow: -2px -2px 0 #b7fefe;
  -webkit-filter: drop-shadow(3px 3px 1px #227474);
  -webkit-transform: skew(-3deg,-7deg);
  font-weight: normal;
  z-index: 2;
}
.buzz_wrapper span:nth-child(1), .nav-wrapper .text:nth-child(1){
  color:red;
  margin-left:-2px;
  -webkit-filter: blur(2px);
}
.buzz_wrapper span:nth-child(2), .nav-wrapper .text:nth-child(2){
  color:green;
  margin-left:2px;
  -webkit-filter: blur(2px);
}
.buzz_wrapper span:nth-child(3), .nav-wrapper .text:nth-child(3){
  color:blue;
  position:20px 0;
  -webkit-filter: blur(1px);
}
.buzz_wrapper span:nth-child(4){
  color:#fff;
  -webkit-filter: blur(1px);
  text-shadow:0 0 50px rgba(255,255,255,0.4);
}
.buzz_wrapper span:nth-child(5){
  color:rgba(255,255,255,0.4);
  -webkit-filter: blur(15px);
}

.buzz_wrapper span, .nav-wrapper .text{
  -webkit-animation: blur 30ms infinite, jerk 50ms infinite;
}

@-webkit-keyframes blur {
  0%   { -webkit-filter: blur(1px); opacity:0.8;}
  50% { -webkit-filter: blur(1px); opacity:1; }
  100%{ -webkit-filter: blur(1px); opacity:0.8; }
}
@-webkit-keyframes jerk {
  50% { left:1px; }
  51% { left:0; }
}
@-webkit-keyframes jerkup {
  50% { top:1px; }
  51% { top:0; }
}

.buzz_wrapper span:nth-child(3){
  -webkit-animation: jerkblue 1s infinite;
}
@-webkit-keyframes jerkblue {
  0% { left:0; }
  30% { left:0; }
  31% { left:10px; }
  32% { left:0; }
  98% { left:0; }
  100% { left:10px; }
}
.buzz_wrapper span:nth-child(2), .nav-wrapper .text:nth-child(2){
  -webkit-animation: jerkgreen 1s infinite;
}
@-webkit-keyframes jerkgreen {
  0% { left:0; }
  30% { left:0; }
  31% { left:-10px; }
  32% { left:0; }
  98% { left:0; }
  100% { left:-10px; }
}

.buzz_wrapper .text{
  -webkit-animation: jerkwhole 5s infinite;
  position:relative;
}
@-webkit-keyframes jerkwhole {
  30% {  }
  40% { opacity:1; top:0; left:0;  -webkit-transform:scale(1,1);  -webkit-transform:skew(0,0);}
  41% { opacity:0.8; top:0px; left:-5px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(-1deg,0);}
  42% { opacity:0.8; top:0px; left:5px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(8deg,0);}
  46% { opacity:0.8; top:0px; left:-5px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(-15deg,0);}
  47% { opacity:0.8; top:0px; left:5px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(18deg,0);}
  51% { opacity:1; top:0; left:0; -webkit-transform:scale(1,1);  -webkit-transform:skew(0,0);}
  65% { }
}

.scanlines {
  background-image: linear-gradient(transparent 2px, rgba(0,0,0,.2) 2px);
  background-size: 4px 4px;
  position: absolute;
  width: 100%;
  height: 90%;
  z-index: 2;
}

img.gpoy {
  display: block;
  margin: 0 auto;
  width: 588px;
  padding-top: 10px;
}


</style>


<div id="splash_body__tv">

<div class="scanlines">
</div>
<div class="buzz_wrapper">
  <div class="text">
		<span class="owl"><img src="yoga_flame.svg" /></span>
		<span class="owl"><img src="yoga_flame.svg" /></span>
		<span class="owl"><img src="yoga_flame.svg" /></span>
		<span class="owl"><img src="yoga_flame.svg" /></span>
  	<span class="owl"><img src="yoga_flame.svg" /></span>
  </div>
</div>

</div>
