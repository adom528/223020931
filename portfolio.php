<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - Jane Doe</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    nav {
      background-color: #2c3e50;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 12px;
      font-size: 16px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    header {
      background-color: #3498db;
      color: white;
      text-align: center;
      padding: 50px 20px;
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    header p {
      margin-top: 10px;
      font-size: 1.2em;
    }

    .portfolio {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .project {
      background: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .project:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .project h2 {
      margin-top: 0;
      font-size: 1.4em;
      color: #2c3e50;
    }

    .project p {
      font-size: 1em;
      line-height: 1.6;
      color: #555;
    }

    .project .tags {
      margin-top: 10px;
    }

    .tag {
      display: inline-block;
      background-color: #e3f2fd;
      color: #1565c0;
      font-size: 0.85em;
      padding: 4px 10px;
      margin: 5px 5px 0 0;
      border-radius: 5px;
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
    <h1>Portfolio</h1>
    <p>Highlighting some of my favorite projects</p>
  </header>

  <section class="portfolio">
    <div class="project">
      <h2>🌐 Startup Landing Page</h2>
      <p>Designed and developed a responsive and modern landing page for a startup using HTML, CSS, and vanilla JavaScript. Optimized for performance and SEO.</p>
      <div class="tags">
        <span class="tag">HTML</span>
        <span class="tag">CSS</span>
        <span class="tag">JavaScript</span>
      </div>
    </div>

    <div class="project">
      <h2>🛒 E-commerce API</h2>
      <p>Developed a backend system for an online store using Node.js and Express. Included user authentication, product management, and order processing.</p>
      <div class="tags">
        <span class="tag">Node.js</span>
        <span class="tag">Express</span>
        <span class="tag">MongoDB</span>
      </div>
    </div>

    <div class="project">
      <h2>🖥️ Portfolio Website</h2>
      <p>This very portfolio — showcasing frontend and backend skills, organized content, and clean navigation. Built using only HTML and CSS with simple enhancements.</p>
      <div class="tags">
        <span class="tag">HTML</span>
        <span class="tag">CSS</span>
      </div>
    </div>
  </section>

  <footer>
    &copy; <span id="year"></span> hurson Ekow Adom. All rights reserved.
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

</body>
</html>
