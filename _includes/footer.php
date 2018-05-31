
        <footer class="site-footer" style="bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
                            <h3 class="widget-title">Our address</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa laboriosam
                                tempore tenetur, aliquid repellat, ex cum dicta reiciendis accusamus. Omnis repudiandae quasi
                                mollitia, iusto odio dignissimos.</p> -->
                            <ul class="address">
                                <li style="margin-bottom:20px;">
                                  <i class="fas fa-address-book" style="margin-right:20px;" ></i><span>P.O. Box 72582 - 00200, Nairobi, Kenya</span></li>
                                <li style="margin-bottom:20px;">
                                    <i class="fa fa-phone" style="margin-right:20px;" ></i><span> 020 351 3088 </span><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> 020 230 9936 </span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> 0733 561 285</span>
                                  </li>
                                <li>
                                    <i class="fa fa-envelope" style="margin-right:20px;" ></i> <span> pceabahatimartyrs@gmail.com </span></li>
                            </ul>
                        </div>
					</div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                            <ul class="bullet" >
                                <li>
                                  <a href="https://www.facebook.com/pceabahati/" target="_blank">  <i class="fab fa-facebook fa-2x" style="margin-right:20px;"></i> <span>Facebook</span></a>
                                </li>
                                <li id="tweet">
								<a href="https://twitter.com/PCEABahati" target="_blank">	<i class="fab fa-twitter-square fa-2x" style="margin-right:20px;"></i><span> twitter </span></a>

                                </li>
                                <li>
                                  <a href="https://www.instagram.com/pceabahati/" target="_blank">  <i class="fab fa-instagram fa-2x" style="margin-right:20px;"></i> <span>instagram </span></a>
                                </li>
                                <!-- <li>
                                <a href="https://twitter.com/PCEABahati">    <i class="fab fa-youtube fa-2x" style="margin-right:20px;"></i><span> youtube </span></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" id="contact">
                        <div class="widget">
                            <h3 class="widget-title">Contact Us</h3>
                            <?php
if(isset($_POST['mail'])){


$message = $_POST['message'];
$name = $_POST['user_name'];
$email = $_POST['email'];

$to = "bochiegfx@gmail.com";
$subject = "Message From". $name ;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <jamohsize@gmail.com>' . "\r\n";

$mail = mail($to,$subject,$message,$headers);

if(!$mail){

  echo "<script>alert('error encountered')</script>";

}else{
  echo "<script>alert('success')</script>";

}
}
?>
                            <form action="" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="user_name" placeholder="Your name...">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Email...">
                                    </div>
                                </div>

                                <textarea name="message" placeholder="Your message..."></textarea>
                                <div class="text-right">
                                    <button class="btn btn-primary" name="mail" type="submit">Send message</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <p class="colophon">Copyright <?php echo date('Y'); ?> Bahati Martyr's. All right reserved</p>
            </div>
            <!-- .container -->
        </footer>
		<!-- .site-footer -->

		</div>




       <!-- jQuery -->


<!-- Bootstrap -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/app.js"></script>



</body>

</html>
