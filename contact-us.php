<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Shree Shyam City</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <?php include('include/head.php');  ?>
</head>

<body>
  <?php include('include/header.php');  ?>
  <div class="sub-banner">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>Contact Us</h1>
        <ul class="breadcrumbs">
          <li><a href="index.php">Home</a></li>
          <li class="active">Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="contact-2 content-area-17">
    <div class="container">
      <div class="main-title text-center">
        <h1>Contact Us</h1>
      </div>
      <form action="#" method="GET" enctype="multipart/form-data">
        <div class="row g-0 contact-innner">
          <div class="col-lg-7">
            <div class="contact-form">
              <h3 class="mb-20">Send us a Message</h3>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group name">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Name"
                      aria-label="Full Name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group email">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Email Address"
                      aria-label="Email Address" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group subject">
                    <input
                      type="text"
                      name="subject"
                      class="form-control"
                      placeholder="Subject"
                      aria-label="Subject" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group number">
                    <input
                      type="text"
                      oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                      name="phone"
                      class="form-control"
                      placeholder="Phone"
                      aria-label="Phone Number" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group message">
                    <textarea
                      class="form-control"
                      name="message"
                      placeholder="Write message"
                      aria-label="Write message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="send-btn text-center">
                    <button type="submit" class="btn-6">Send Message</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact-info">
              <h3 class="mb-20">Contact Info</h3>
              <div class="ca-box d-flex mb-30">
                <i class="flaticon-pin me-3"></i>
                <div class="detail">
                  <h5>Address</h5>
                  <p>Near Usha Martin World school, Patna</p>
                </div>
              </div>
              <div class="ca-box d-flex mb-30">
                <i class="flaticon-phone me-3"></i>
                <div class="detail">
                  <h5>Phone Number</h5>
                  <p><a href="tel:+91-8294639533 ">+91-8294639533</a></p>
                  <p><a href="tel:+91-8294639536 ">+91-8294639536</a></p>
                </div>
              </div>
              <div class="ca-box d-flex mb-30">
                <i class="flaticon-mail me-3"></i>
                <div class="detail">
                  <h5>Email Address</h5>
                  <p>
                    <a href="mailto:shreeshyamcity7@gmail.com">shreeshyamcity7@gmail.com</a>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="section contact-2-map mt-5 py-5">
    <div class="map">
      <div class="contact-map card card-body shadow">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.216596968171!2d85.180369!3d25.531161099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a78ac8da280d%3A0xae3cb1fef1ecaeec!2sUsha%20Martin%20World%20School!5e0!3m2!1sen!2sin!4v1729937058210!5m2!1sen!2sin"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <?php include('include/footer.php');  ?>
  <?php include('include/footer-js.php');  ?>
</body>

</html>