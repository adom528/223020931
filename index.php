<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hurson Ekow Adom | Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* General Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      line-height: 1.6;
      padding: 0;
    }

    h1, h2, h3, p {
      margin-bottom: 1rem;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navigation Menu */
    nav {
      background-color: #333;
      padding: 20px 0;
      text-align: center;
    }

    nav a {
      color: white;
      padding: 15px 25px;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      margin: 0 15px;
      letter-spacing: 1px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #007bff;
      border-radius: 5px;
    }

    /* Header */
    header {
      background-color: #007bff;
      color: white;
      padding: 80px 20px;
      text-align: center;
      position: relative;
    }

    header h1 {
      font-size: 4em;
      font-weight: 600;
    }

    header p {
      font-size: 1.5em;
      margin-top: 10px;
    }

    header::after {
      content: '';
      display: block;
      height: 10px;
      width: 80px;
      background-color: #fff;
      margin: 20px auto;
    }

    /* Section */
    section {
      padding: 60px 20px;
      text-align: center;
    }

    section h2 {
      font-size: 2.5em;
      color: #007bff;
      margin-bottom: 40px;
    }

    section p {
      font-size: 1.2em;
      color: #555;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Flex layout for skills, services, and testimonials */
    .content-flex {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .content-flex div {
      width: 300px;
      margin-bottom: 40px;
      text-align: center;
    }

    .content-flex div h3 {
      font-size: 2em;
      color: #007bff;
      margin-bottom: 10px;
    }

    .content-flex div p {
      font-size: 1.1em;
      color: #555;
    }

    /* Testimonials Section */
    .testimonials {
      background-color: #f9f9f9;
      padding: 60px 20px;
    }

    .testimonials blockquote {
      font-style: italic;
      color: #555;
      font-size: 1.2em;
      max-width: 800px;
      margin: 0 auto;
    }

    .testimonials footer {
      text-align: right;
      font-weight: bold;
      color: #007bff;
      margin-top: 10px;
    }

    /* Footer */
    footer {
      text-align: center;
      background-color: #333;
      color: white;
      padding: 20px;
      font-size: 1.1em;
    }

    footer p {
      margin: 0;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
      nav a {
        font-size: 14px;
        padding: 12px 18px;
      }

      header h1 {
        font-size: 3em;
      }

      header p {
        font-size: 1.2em;
      }

      .content-flex div {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <a href="index.html">Home</a>
    <a href="services.html">Services</a>
    <a href="portfolio.html">Portfolio</a>
    <a href="testimonials.html">Testimonials</a>
    <a href="aboutus.html">About</a>
    <a href="contactus.html">Contact</a>
    <a href="admin/login.php">Admin login</a>
  </nav>

  <!-- Header -->
  <header>
    <h1>Welcome to My Portfolio</h1>
    <p>I'm Hurson Ekow Adom, a Full-Stack Developer creating exceptional web experiences.</p>
  </header>

  <!-- What I Do Section -->
  <section>
    <h2>What I Do</h2>
    <div class="content-flex">
      <div>
        <h3>Web Development</h3>
        <p>Building responsive, modern websites using the latest web technologies.</p>
      </div>
      <div>
        <h3>Mobile Development</h3>
        <p>Developing mobile apps with great user experiences using React Native.</p>
      </div>
      <div>
        <h3>Backend Development</h3>
        <p>Creating efficient and scalable backends using Node.js and Express.js.</p>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section>
    <h2>Services</h2>
    <div class="content-flex">
      <div>
        <h3>Custom Web Design</h3>
        <p>Custom web design solutions that fit your business's unique identity and needs.</p>
      </div>
      <div>
        <h3>SEO & Optimization</h3>
        <p>Ensuring your site ranks high and performs quickly with SEO best practices.</p>
      </div>
      <div>
        <h3>Consulting & Strategy</h3>
        <p>Providing professional advice to help you grow and optimize your web presence.</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What People Are Saying</h2>
    <blockquote>
      "Hurson is an exceptional developer who exceeds expectations every time."
      <footer>- Client A, Company XYZ</footer>
    </blockquote>
    <blockquote>
      "Highly recommend Hurson for any full-stack web project. He delivers on time and with great results."
      <footer>- Client B, ABC Corp</footer>
    </blockquote>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <span id="year"></

