<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'appointment made successfully!';
   } else {
      $message[] = 'appointment failed';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CareGivers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/input.css">

</head>

<body>

   <!-- header section starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">Care<span>Givers.</span></a>

            <nav class="nav">
               <a href="#home">Home</a>
               <a href="#about">About</a>
               <a href="#services">Facility</a>
               <a href="#reviews">reviews</a>
               <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center ">
            <div class="content text-center text-md-left">
               <h3>A name that includes the word ‘care’.</h3>
               <p> Give a man health and a course to steer, and he’ll never stop to trouble about whether he’s happy or not.</p>
               <a href="#contact" class="link-btn">Make Appointment</a>
            </div>
         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 image">
               <img src="images/about1-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span>about us</span>
               <h3>True Healthcare For Your Family</h3>
               <p>Welcome to our hospital! We are honored that you have chosen us for your healthcare needs. Our hospital is dedicated to providing compassionate, high-quality care to all of our patients. From routine check-ups to advanced medical procedures, we offer a wide range of services to meet your healthcare needs. Our team of skilled and experienced healthcare professionals is committed to providing personalized care and support to ensure your comfort and wellbeing throughout your stay. Thank you for entrusting us with your healthcare journey.</p>
               <a href="#contact" class="link-btn">make appointment</a>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading">our services</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Cardiologist</h3>
            <p>Cardiologists may perform a variety of tests and procedures to help diagnose and treat cardiovascular conditions.</p>
         </div>

         <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Cosmetic dentistry is a field of dentistry that focuses on improving the appearance of a person's teeth, gums, and smile.</p>
         </div>

         <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Neurologist</h3>
            <p>Neurologists have a deep understanding of the structure and function of the brain and nervous system.</p>
         </div>

         <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Orthopedics</h3>
            <p>Orthopedic disorders have become the silent killers in India that affect around 15 million adults every year.</p>
         </div>

         <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Dermatology</h3>
            <p>Dermatology is one of the topmost medical specialties and the most satisfactory medical branch. </p>
         </div>

         <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Ophthalmology</h3>
            <p>Again, ophthalmology is one of the medical specialties that have ample career prospects and has been considered as a highly remunerative option. </p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- process section starts  -->

   <section class="process">

      <h1 class="heading">work process</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/process-2.png" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/process-3.png" alt="">
            <h3>Dental Implants</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

      </div>

   </section>

   <!-- process section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> satisfied clients </h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p> I wanted to express my gratitude for the exceptional care I received. From the moment I arrived, the staff was welcoming, attentive, and professional. They took the time to listen to my concerns, answer my questions, and make me feel comfortable and at ease.

</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jayant Raut</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>During my stay, I was impressed by the cleanliness and organization of the hospital, and the advanced medical technology that was available to me. </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Urmial Deol</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>The medical team who treated me was extremely knowledgeable, and they kept me informed every step of the way. would highly recommend this hospital to anyone seeking top-quality medical care.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Surya Yadav</h3>
            <span>satisfied client</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading">Make Appointment</h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>Apka Naam :</span>
         <input type="text" name="name" placeholder="Enter your good Name" class="box" required>
         <span>Apka Email :</span>
         <input type="email" name="email" placeholder="Enter your Email in standard formate" class="box" required>
         <span>Apka Mobile No. :</span>
         <input type="number" name="number" placeholder="Enter your Number" class="box" required>
         <span>Appointment date :</span>
         <input type="datetime-local" name="date" class="box" required>
         <input type="submit" value="make appointment" name="submit" class="link-btn">
      </form>

   </section>

   <!-- contact section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Call Us</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Head Office</h3>
            <p>Kalyan, india - 421306</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Working Time</h3>
            <p>00:07am to 10:00pm</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>shaikhanas@gmail.com</p>
            <p>anasbhai@gmail.com</p>
         </div>

      </div>

      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>CareGivers</span> </div>

   </section>

   <!-- footer section ends -->










   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>