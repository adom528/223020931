<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - Jane Doe</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f4f6f8;
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

    .hero {
      background: linear-gradient(135deg, #8e44ad, #3498db);
      color: white;
      padding: 70px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 2.8em;
      margin: 0;
    }

    .hero p {
      margin-top: 10px;
      font-size: 1.2em;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .content {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .section {
      margin-bottom: 40px;
    }

    .section h2 {
      color: #2c3e50;
      font-size: 1.6em;
      margin-bottom: 10px;
    }

    .section p {
      line-height: 1.7em;
      color: #555;
    }

    .values {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .value-box {
      background: white;
      flex: 1;
      min-width: 220px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .value-box h3 {
      margin-top: 0;
      color: #8e44ad;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #eee;
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

  <div class="hero">
    <h1>Who We Are</h1>
    <p>Driven by passion, powered by code. Our journey is built on creativity, purpose, and people.</p>
  </div>

  <div class="content">
    <div class="section">
      <h2>Our Story</h2>
      <p>It all started with a love for design and a curiosity for how things work. What began as late-night coding sessions turned into a full-blown mission to build beautiful, functional digital experiences for real people.</p>
    </div>

    <div class="section">
      <h2>What Drives Us</h2>
      <div class="values">
        <div class="value-box">
          <h3>🌟 Creativity</h3>
          <p>We don’t just build websites — we craft experiences. Every project is a canvas for innovation.</p>
        </div>
        <div class="value-box">
          <h3>🤝 Trust</h3>
          <p>Clients become partners. We value honest communication and meaningful collaboration.</p>
        </div>
        <div class="value-box">
          <h3>🚀 Growth</h3>
          <p>We're always learning and evolving — both as a team and with the tech we use.</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; <span id="year"></span> Hurson Ekow Adom. All rights reserved.
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

</body>
</html>


