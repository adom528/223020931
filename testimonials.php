<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Testimonials - Hurson Ekow Adom</title>
  <style>
    body {
      font-family: 'Georgia', serif;
      background-color: #fcfcfc;
      color: #2c3e50;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #222;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 20px;
      font-size: 16px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    header {
      background: #444;
      color: white;
      text-align: center;
      padding: 60px 20px;
    }

    header h1 {
      margin: 0;
      font-size: 3em;
      font-family: 'Georgia', serif;
    }

    header p {
      margin-top: 10px;
      font-size: 1.2em;
    }

    .testimonials {
      max-width: 900px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .quote {
      position: relative;
      margin-bottom: 60px;
      padding-left: 60px;
      font-style: italic;
      border-left: 5px solid #3498db;
    }

    .quote::before {
      content: "“";
      font-size: 5em;
      color: #3498db;
      position: absolute;
      left: 10px;
      top: -10px;
      line-height: 1;
    }

    .quote p {
      font-size: 1.4em;
      margin: 0 0 15px;
    }

    .quote .author {
      font-weight: bold;
      font-style: normal;
      font-size: 1.1em;
      color: #333;
    }

    .quote .position {
      font-size: 0.95em;
      color: #777;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #eee;
      margin-top: 60px;
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.html">Home</a>
    <a href="services.html">Services</a>
    <a href="portfolio.html">Portfolio</a>
    <a href="testimonials.html">Testimonials</a>
    <a href="aboutus.html">About Us</a>
    <a href="contactus.html">Contact</a>
  </nav>

  <header>
    <h1>Client Testimonials</h1>
    <p>Real feedback from real people we've worked with.</p>
  </header>

  <section class="testimonials">
    <div class="quote">
      <p>"Working with Hurson was one of the best decisions we've made. His dedication and attention to detail truly set him apart."</p>
      <div class="author">Sarah Thompson</div>
      <div class="position">Head of Marketing, BrightEdge</div>
    </div>

    <div class="quote">
      <p>"Incredible results. I highly recommend Hurson to anyone looking for a high-quality, professional web solution."</p>
      <div class="author">David Kim</div>
      <div class="position">Founder, PixelWorks</div>
    </div>

    <div class="quote">
      <p>"He not only delivered ahead of schedule but also improved parts of our design we hadn’t even thought about."</p>
      <div class="author">Linda Chen</div>
      <div class="position">Product Manager, NovaCorp</div>
    </div>
  </section>

  <footer>
    &copy; <span id="year"></span> Hurson Ekow Adom. All rights reserved.
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

</body>
</html>
