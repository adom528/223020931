<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services - Jane Doe</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fdfdfd;
      color: #333;
    }

    nav {
      background-color: #2c3e50;
      text-align: center;
      padding: 15px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-size: 16px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    header {
      background-color: #34495e;
      color: white;
      padding: 50px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    header p {
      margin-top: 10px;
      font-size: 1.2em;
    }

    .services {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .service {
      padding: 25px 20px;
      margin-bottom: 20px;
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-left: 5px solid #3498db;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .service h2 {
      margin-top: 0;
      color: #2c3e50;
    }

    .service p {
      margin-bottom: 0;
      color: #555;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #eee;
      margin-top: 40px;
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
    <h1>Services</h1>
    <p>Here's what I can help you with</p>
  </header>

  <section class="services">
    <div class="service">
      <h2>Frontend Development</h2>
      <p>Building clean, responsive, and user-friendly interfaces using HTML, CSS, and JavaScript.</p>
    </div>

    <div class="service">
      <h2>Backend Development</h2>
      <p>Developing server-side logic, databases, and APIs to power dynamic web apps.</p>
    </div>

    <div class="service">
      <h2>Full Stack Projects</h2>
      <p>Combining frontend and backend expertise to build complete, scalable web applications.</p>
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

