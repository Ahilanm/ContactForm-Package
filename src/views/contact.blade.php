<!doctype html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style>
            /*Font-awesome integration*/
            @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
            /*Google font integration*/
            @import url('https://fonts.googleapis.com/css?family=Roboto');

            #contact{
                background-color:#f1f1f1;
                font-family: 'Roboto', sans-serif;
            }

            #contact .well{
                margin-top:30px;
                border-radius:0;
            }

            #contact .form-control{
                border-radius: 0;
                border:2px solid #1e1e1e;
            }

            #contact button{
                border-radius:0;
                border:2px solid #1e1e1e;
            }

            #contact .row{
                margin-bottom:30px;
            }

            @media (max-width: 768px) { 
                #contact iframe {
                    margin-bottom: 15px;
                }
                
            }
        </style>
</head>
</body>
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=CHENNAI&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right; width="100%" height="315px"}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form action="{{route('contactsubmit')}}" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="contactname" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="contactemail" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="contactphone" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="contactmessage" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    </body>
</html>