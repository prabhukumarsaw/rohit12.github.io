<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{    
    font-family: 'Roboto Condensed', sans-serif;
    
}

        body{
            background-image: url(dots.png);
            
        }
    .team .item {
  text-align: center;
  position: relative;
  margin-bottom: 15px;
  overflow: hidden;
}
.team .item:hover .info {
  bottom: 50px;
}
.team .item:hover .team-img:after {
  opacity: 1;
  visibility: visible;
}
.team .item .team-img {
  overflow: hidden;
  border-radius: 4px;
  position: relative;
}
.team .item .team-img:after {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.8);
  background: -webkit-gradient(linear, left bottom, left top, from(#111), to(rgba(0, 0, 0, 0.4)));
  background: linear-gradient(to top, #111, rgba(0, 0, 0, 0.4));
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .4s;
  transition: all .4s;
}
.team .item .info {
  position: absolute;
  bottom: -500px;
  left: 0;
  padding: 0 15px;
  width: 100%;
  z-index: 4;
  -webkit-transition: all .4s;
  transition: all .4s;
}
.team .item .info h6 {
  font-size: 16px;
  color: #fff;
  letter-spacing: 1px;
  margin-bottom: 5px;
}
.team .item .info span {
  font-size: 13px;
  font-style: italic;
  margin-bottom: 10px;
  color: #EE3158;
}
.team .item .info p {
  margin-bottom: 10px;
  color: #a9a9a9;
}
.team .item .info .icon {
  margin: 0 10px;
  font-size: 12px;
  color: #eee;
  cursor: pointer;
}
        .pink{
            color: deeppink;
            font-weight: bold;
        }
    
    </style>
</head>
<body>
    <section class="team " data-background="img/dots.png">
            <div class="container">
                <div class="row">
<br><br><br>
                    <div class="section-head text-center col-sm-12">
                        <h4>Our Crew</h4>
                        <h2>Our <span class="pink">Talented</span> Team</h2>
                        <br><br>
                    </div>
                  
                        <div class="item col-md-4">
                            <div class="hover3d">
                                <div class="hover3d-child">
                                    <div class="team-img">
                                        <img src="2a.png"  class="img-responsive" alt="">
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="info">
                                        <div>
                                            <h6>PRABHU KUMAR</h6>
                                            <span>Project Manager</span>
                                            <p>Bansal College Of Engineering.</p>
											<p>Mandideep </p>
                                            <div class="social">
                                                <a href="https://www.facebook.com/prabhukumar.india" class="icon">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-behance"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="item col-md-4">
                            <div class="hover3d">
                                <div class="hover3d-child">
                                    <div class="team-img">
                                    <img src="4.jpg"  class="img-responsive" alt="">
                                    </div>
                                    <div class="info">
                                        <div>
                                          <h6>DEVENDRA KUMAR</h6>
                                          <span>Project Manager</span>
                                          <p>Bansal College Of Engineering</p>
                                          <p>Mandideep </p>
                                          <div class="social">
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-behance"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item col-md-4">
                            <div class="hover3d">
                                <div class="hover3d-child">
                                    <div class="team-img">
                                        <img src="3a.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="info">
                                        <div>
                                            <h6>No Name</h6>
                                            <span>Project Manager</span>
                                            <p>Bansal College Of Engineering</p>
											<p>Mandideep </p>
                                            <div class="social">
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#0" class="icon">
                                                    <i class="fa fa-behance"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                   

                </div>
            </div>
        </section>
<script src="jquery.hover3d.min.js"></script>
<script>
    $(".hover3d").hover3d({
        selector: ".hover3d-child",
        invert: true
    });
</script>
</body>
</html>