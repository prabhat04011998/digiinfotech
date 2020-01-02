

<style>/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 30%;
    left: 50%;
    z-index: 3;
    font-style:italic;
    font-family: inherit;
    color: #333;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 4em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #080d15;
    opacity: .7;
}
.hero h1,h4{
  color:#000;
  font-style: normal;
}
.hero img{
  border-radius: 50%;
  height:100px;
  width: 100px;
  float: left;

}
.hero h3{
  text-align: justify;
}


/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(img/testimonial_background.jpeg); 

}
.fade-carousel .slides .slide-2 {
  background-image: url(img/testimonial_background.jpeg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(img/testimonial_background.jpeg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}</style>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel" style="height: 400px">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>DIGIYOUTH is creative</h1> 
          <div class="row">
            <div class="col-md-3">
              <div>
            <img src="img/perso1.jpg">
            </div>
            <h4>Prabhat Sharma</h4>
            <span>Content-Writer</span>

          </div>
          <div class="col-md-9"> 
                 
            <h3>"During my Digital Marketing course from Skill Circle I started writing food blogs, freelancing for startups; after that there was no looking back! Next thing I know is I got a call from blackberry’s menswear to work as a Digital Marketer. I recently got facilitated by women entrepreneurs community Magicka, wherein I educated women entrepreneurs about Digital Marketing . "</h3>
          </div>
          </div>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>

            
            <h1>DIGIYOUTH is smart</h1> 
               <div class="row">
                <div class="col-md-3">
            <img src="img/perso1.jpg"> 
            <h4>Prabhat Sharma</h4>
            <p>Content-Writer</p>
            </div>  
            <div class="col-md-9"> 
            <h3>"I acquired a great hand at Online Marketing from the Digital Marketing Institute, Skill Circle,  and expertised in affiliate marketing and SEO strategies. Now I have a well flourished blogging website that I’d build from scratch! I was doing a regular 9-5 job, the decision of learning Digital Marketing course at Skill Circle changed my life completely!"</h3>
          </div>
          </div>
       
        </hgroup>       
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
          <h1>DIGIYOUTH is amazing</h1>
          <div class="row">
            <div class="col-md-3">
           
            <img src="img/perso1.jpg">
            <h4>Prabhat Sharma</h4>
            <p>Content-Writer</p> 
            </div>
            <div class="col-md-9"> 

            <h3>"I always wanted to put out in the world my fashion stories but never got the perfect means. I did my Digital Marketing course in Delhi from skill circle and leant how to blog and spread my fashion stories in the digital world. Finding and reaching a big audience base for my fashion stories never felt easier!"</h3>
          </div>
        </div>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  </div> 
</div>