<!doctype html>
<html lang="en">

<?php
session_start();
$myname = $_SESSION['myname'];
if (!isset($myname)) {
  header('location:index.php');
} else {
  include './connect.php';
  $myemail = $_SESSION['myemail'];

}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Best Host</title>
  <style>
    .imag {
      width: 500px;
      height: 400px;
    }
  </style>
</head>

<body style="background-color:#cae9ff">
  <div class="container-xxl bg-white p-0 ">
    <nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
      <div class="logo mx-3">
        <div class="h2 ">Best Host</div>
      </div>
      <div class="nav-menu d-flex flex-row ">
        <a class="nav-link active text-light" aria-current="page" href="#">Home <small>
            <?php echo $myname ?>
          </small></a>
        <a class="nav-link text-light" href="profile.php">Profile</a>
        <a class="nav-link text-light" href="#about">About</a>
        <a class="nav-link text-light" href="cart.php">My Cart</a>
        <a class="nav-link text-light" href="logout.php">Log out</a>
      </div>
    </nav>
    <div class="section mt-5" style="background-color:#62b6cb;">
      <div class="h1 p-5 text-center text-uppercase text-dark" style="color:#1b4965;">"Expertly Planned, Perfectly
        Executed"</div>
    </div>
    <!-- image slides -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./photos/img-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./photos/img-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./photos/img-3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- about pages -->
    <div class="container" id="about">
      <div class="section mt-2">
        <div class="row d-flex ">
          <div class="col">
            <img src="./photos/achor.jpg" alt="imag-1"
              class="imag rounded mx-auto p-3 justify-content-center align-self-center">
          </div>
          <div class="col-7 d-flex flex-column justify-content-center align-self-center "
            style="background-color:#5fa8d3;">
            <h3 class="mx-auto mt-3 " style="color:#1b4965">Anchor</h3>
            <p class="pt-3 px-5 text-dark">An anmcee or an anchor is short form for Master
              of Cerimonies is a person responsible for ensuring people
              have a experience at an event. Whether it's a sangeet, wedding,
              corporate event, or any other kind of gathering, they are the
              ones who makes sure things flow smoothly and everyone has a great time. </p><br>
            <button onclick="achor()" class="btn btn-info w-25 mx-auto mb-3 text-light "
              style="background-color:#1b4965">Read More</button>
          </div>
        </div>
      </div>
      <div class="conatiner mx-5 p-4" id="anchor" style="display:none;background-color:#cae9ff">
        <div class="row ">
          <div class="col d-flex flex-column text-center justify-content-center align-items-center ">
            <div class=" display-1 p-3 mt-3 text-center " style="color:#003249">ANCHOR</div>
            <div class="p-5 text-center">
              Welcome to BEST HOST, where we specialize in bringing your dreams to life through meticulously planned and
              flawlessly executed events. Our mission is to create unforgettable moments that leave a lasting impression
              on you and your guests.
              At the heart of our service is a passionate and experienced team dedicated to turning your vision into
              reality. From corporate gatherings and weddings to social celebrations and fundraisers, we have the
              expertise to design, coordinate, and manage events of all sizes and themes.
              We are committed to making the event planning process as seamless as possible. Our website offers a
              comprehensive guide to our services, portfolio of past events, and a network of trusted vendors. Whether
              you have a clear concept in mind or need help discovering your event's unique identity, we're here to
              assist you.
              Let us take the stress out of event planning and transform your ideas into a remarkable experience.
              Explore our website to learn how we can partner with you to craft unforgettable moments and turn your
              event into a masterpiece.
            </div>
            <?php
            echo "<a type='submit' value='Apply No' class='btn btn-outline-info text-light w-25' href='booking.php?booking=anchor' style='background-color:#1b4965'> Apply Now</a>";
            ?>

          </div>
        </div>
      </div>

      <div class="section mt-2">
        <div class="row d-flex flex-row-reverse">
          <div class="col">
            <img src="./photos/hostress.jpg" alt="imag-2"
              class="imag justify-content-center align-self-center rounded mx-auto p-3">
          </div>
          <div class="col-7 d-flex flex-column justify-content-center align-self-center "
            style="background-color:#5fa8d3;">
            <h3 class="mx-auto mt-3 " style="color:#1b4965">Hostress</h3>
            <p class="pt-3 px-5 text-dark">The foremost task of hosts is to greet and welcome guests.
              Sometimes, guests are overwhelmed by an unfamiliar environment and won't know what the sequence of
              events includes. A host will welcome them, guide them to the gift table, hand them the program for the
              ceremony,
              and show them to their seats at the reception. They will control the Photo session, Crowd & Stage
              management too. </p><br>
            <button class="btn btn-info w-25 mx-auto mb-3 text-light " onclick="hostress()"
              style="background-color:#1b4965">Read More</button>
          </div>
        </div>
      </div>

      <div class="conatiner mx-5 p-4" id="hostress" style="display:none;background-color:#cae9ff">
        <div class="row ">
          <div class="col d-flex flex-column text-center justify-content-center align-items-center ">
            <div class=" display-1 p-3 mt-3 text-center " style="color:#003249">HOSTRESS</div>
            <div class="p-5 text-center">

              Certainly, here's a brief description for the role of an "Event Hostess" on an event management
              website:<br>

              Event Hostess: Your Key to Memorable Events.<br>

              At BEST HOST, we understand that the success of any event hinges on the finer details. Our dedicated team
              of Event Hostesses plays a pivotal role in ensuring your event runs smoothly, leaving a lasting impression
              on your guests.

              What is an Event Hostess?

              An Event Hostess is more than just a smiling face; she is the face of your event. She embodies grace,
              hospitality, and professionalism, making your guests feel welcomed, valued, and at ease. Event Hostesses
              are the unsung heroes who manage the front lines, handling a variety of tasks that contribute to the
              event's overall success.

              Why Choose Our Event Hostesses?

              Professionalism: Our Event Hostesses are meticulously trained to represent your brand with poise and
              professionalism. They greet guests with warmth and handle a wide range of responsibilities, from
              registration and ushering to answering queries.

              Efficiency: Efficiency is at the core of our Event Hostesses' work. They are skilled in crowd management,
              ensuring that attendees have a seamless experience from start to finish.

              Adaptability: No two events are the same, and our Event Hostesses are adept at adapting to the unique
              needs of your event, whether it's a corporate conference, a gala dinner, a product launch, or a social
              gathering.

              Problem Solving: Our Event Hostesses are problem solvers. If unexpected issues arise, they handle them
              discreetly and effectively, allowing you to focus on the bigger picture.

              Enhanced Guest Experience: The warmth and assistance provided by our Event Hostesses create an atmosphere
              that leaves your guests with a positive and memorable impression.

              Make Your Event Unforgettable

              The role of an Event Hostess is integral to orchestrating a successful event, and at [Your Event
              Management Company], we take this responsibility seriously. By choosing our Event Hostesses, you're
              choosing a team committed to elevating your event to new heights.

              Discover how our Event Hostesses can enhance your next event. Contact us today, and let's create an
              unforgettable experience for your guests.
            </div>
            <?php
            echo "<a type='submit' value='Apply No' class='btn btn-outline-info text-light w-25' href='booking.php?booking=hostress' style='background-color:#1b4965'> Apply Now</a>";
            ?>

          </div>
        </div>
      </div>





      <div class="section mt-2">
        <div class="row d-flex ">
          <div class="col">
            <img src="./photos/catering.jpg" alt="imag-3"
              class=" imag justify-content-center align-self-center rounded mx-auto p-3">
          </div>
          <div class="col-7 d-flex flex-column justify-content-center align-self-center "
            style="background-color:#5fa8d3;">
            <h3 class="mx-auto mt-3 " style="color:#1b4965">Role in Restaurant/Catering Area</h3>
            <p class="pt-3 px-5 text-dark">Restaurant / Catering Area Hostess is a customer service-oriented
              role responsible for welcoming guests, escorting them to their tables, and ensuring their overall dining
              experience is pleasant. Hostesses are the first point of contact for guests and are expected to provide
              excellent customer service. </p><br>
            <button class="btn btn-info w-25 mx-auto mb-3 text-light " onclick="catering()"
              style="background-color:#1b4965">Read More</button>
          </div>
        </div>
      </div>

      <div class="conatiner mx-5 p-4" id="catering" style="display:none;background-color:#cae9ff">
        <div class="row ">
          <div class="col d-flex flex-column text-center justify-content-center align-items-center ">
            <div class=" display-1 p-3 mt-3 text-center text-uppercase " style="color:#003249">Role in
              Restaurant/Catering Area</div>
            <div class="p-5 text-center">

              Certainly, here's a brief description for the role of events in the restaurant and catering area on an
              event management website:

              Event Role in Restaurant / Catering Area

              Events play a pivotal role in the success and vitality of the restaurant and catering industry. Whether
              it's a cozy family celebration, a corporate gala, or an extravagant wedding, restaurants and catering
              services are the heartbeat of memorable occasions. At [Your Event Management Website], we understand the
              profound significance of this connection, and we're here to showcase the indispensable role that events
              play in this realm.

              Creating Unforgettable Experiences: Restaurants and caterers serve as the canvas for crafting
              unforgettable experiences. From the delectable cuisine to the ambiance and decor, these venues have the
              power to transform ordinary gatherings into extraordinary moments.

              Culinary Excellence: The heart of any event often lies in the culinary offerings. Restaurants and catering
              services provide a rich tapestry of flavors that cater to diverse palates, enhancing the overall event
              experience.

              Personalized Service: In the restaurant and catering industry, service is an art. From attentive staff to
              customized menus, every detail is meticulously tailored to meet the unique requirements of each event.

              Versatility: These venues are versatile, accommodating a wide range of events, from intimate dinners to
              grand celebrations. They can be a blank canvas for themed events or a cozy backdrop for family reunions.

              Memories and Tradition: Many events are deeply rooted in tradition. Restaurants and caterers provide the
              ideal setting for preserving and creating new memories, whether it's a milestone birthday, an anniversary,
              or a cultural celebration.

              Expertise: The professionals in this industry are masters of logistics and hospitality. They excel in
              event planning, culinary arts, and service, ensuring that every event flows seamlessly.

              At BEST HOST, we celebrate the crucial role of restaurants and catering in the event landscape. We connect
              you with top-notch venues and caterers, making it easier than ever to plan and host the perfect event.
              Join us in exploring the endless possibilities that restaurants and catering bring to the world of events,
              making each occasion a feast for the senses and a cherished memory.

              Discover how we can assist you in creating memorable events through our directory of handpicked
              restaurants and caterers. Your journey towards event excellence starts here.
            </div>
            <?php
            echo "<a type='submit' value='Apply No' class='btn btn-outline-info text-light w-25' href='booking.php?booking=catering' style='background-color:#1b4965'> Apply Now</a>";
            ?>

          </div>
        </div>
      </div>


      <div class="section mt-2">
        <div class="row d-flex flex-row-reverse">
          <div class="col">
            <img src="./photos/event.jpg" alt="imag-4"
              class=" imag justify-content-center align-self-center rounded mx-auto p-3">
          </div>
          <div class="col-7 d-flex flex-column justify-content-center align-self-center "
            style="background-color:#5fa8d3;">
            <h3 class="mx-auto mt-3 " style="color:#1b4965 text-uppercase">Crowd and Stage Management</h3>
            <p class="pt-3 px-5 text-dark">Hostess managing the Crowd rush inside the hall and finding out a comfortable
              seating
              experience for guests. They are Arranging the necessary items for the Lamp lighting ceremony, Cake cutting
              ceremony and Wine toasting ceremony and managing the Photo session, Gift collection and Stage Crowd
              management</p><br>
            <button class="btn btn-info w-25 mx-auto mb-3 text-light" style="background-color:#1b4965;"
              onclick="crowd()">Read More</button>
          </div>
        </div>
      </div>
    </div>

    <div class="conatiner mx-5 p-4" id="crowd" style="display:none;background-color:#cae9ff">
      <div class="row ">
        <div class="col d-flex flex-column text-center justify-content-center align-items-center">
          <div class=" display-1 p-3 mt-3 text-center text-uppercase " style="color:#003249">Crowd and Stage Management
          </div>
          <div class="p-5 text-center">

            Event Crowd and Stage Management

            Effective crowd and stage management are the cornerstones of successful events. At [Your Event Management
            Company], we specialize in delivering seamless crowd and stage management solutions that elevate your event
            from ordinary to extraordinary.

            Why Crowd and Stage Management Matters:

            Our experienced team understands that the success of any event depends on how well the crowd is managed and
            how smoothly the stage operations run. We recognize that each event is unique, and we tailor our services to
            your specific needs, ensuring that everything from crowd control to stage logistics is executed flawlessly.

            What We Offer:

            Crowd Control: We employ proven strategies and technologies to ensure safe and efficient crowd flow,
            minimizing bottlenecks and enhancing the overall attendee experience. Our crowd management solutions are
            designed to mitigate risks and maintain a comfortable environment for all.

            Stage Logistics: From sound and lighting to artist coordination and backstage operations, we have a keen eye
            for detail when it comes to stage management. We handle the technical and logistical aspects, so you can
            focus on the artistic and creative aspects of your event.

            Safety First: Safety is our top priority. We work closely with local authorities, security personnel, and
            emergency services to create comprehensive safety plans that meet or exceed regulatory standards.

            Efficiency and Innovation: Our team is equipped with the latest technologies and innovative solutions to
            streamline crowd and stage management, providing you with a hassle-free event experience.

            Tailored Solutions: We understand that every event has unique requirements. Whether you're organizing a
            music festival, corporate conference, or a community gathering, we customize our services to suit your
            specific needs and budget.

            Our Commitment:

            At BEST HOST, we are dedicated to the success of your event. Our experienced professionals will work with
            you from the planning stages through execution to ensure that every aspect of crowd and stage management is
            executed with precision.

            With our comprehensive approach to event management, you can have the confidence that your event will run
            smoothly, safely, and leave a lasting impression on your attendees. Let us handle the logistics, so you can
            focus on creating unforgettable moments.

            Make your next event a resounding success. Contact us today to learn how our crowd and stage management
            services can elevate your event to the next level.
          </div>
          <?php
            echo "<a type='submit' value='Apply No' class='btn btn-outline-info text-light w-25' href='booking.php?booking=management' style='background-color:#1b4965'> Apply Now</a>";
            ?>
        </div>
      </div>
    </div>


    <!-- footer -->
    <div class="footer p-5 m-3 h3 text-center text-light" style="background-color:#1b4965">
      Best Host
    </div>

  </div>




  <script>
    function achor() {
      var x = document.getElementById("anchor");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function hostress() {
      var x = document.getElementById("hostress");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function catering() {
      var x = document.getElementById("catering");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    function crowd() {
      var x = document.getElementById("crowd");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>