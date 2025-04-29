<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LandViz</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: white;
    color: #0A0A22;
    line-height: 1.6;
  }
  
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 48px;
    font-weight: bold;
  }
  
  .logo {
    font-size: 1.5rem;
  }
  
  nav a {
    text-decoration: none;
    color: #0A0A22;
    font-size: 1rem;
  }
  
  .hero {
    padding: 100px 48px;
    max-width: 800px;
  }
  
  .hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 24px;
    line-height: 1.2;
  }
  
  .hero p {
    font-size: 1.1rem;
    margin-bottom: 40px;
    color: #555;
  }
  
  .hero button {
    padding: 14px 28px;
    font-size: 1rem;
    background-color: #0A49F6;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
  }
  
  .hero button:hover {
    background-color: #083dd1;
  }
  


  .image-scroll {
    overflow: hidden;
    white-space: nowrap;
    margin-top: 60px;
    padding: 10px 0;
    background-color: #fff;
  }
  
  .scroll-track {
    display: inline-block;
    animation: scrollLeft 40s linear infinite;
  }
  
  .scroll-track img {
    height: 300px;
    margin-right: 20px;
    border-radius: 8px;
    object-fit: cover;
  }
  
  /* Animation */
  @keyframes scrollLeft {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }


  .global-message {
    background-color: #0d0d0d;
    color: #fff;
    text-align: center;
    padding: 60px 20px;
  }
  
  .global-message h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
  }
  
  .global-message p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
    opacity: 0.85;
  }
  
  


  .insight-highlights {
    background-color: #101010;
    color: #fff;
    padding: 80px 20px;
    text-align: center;
  }
  
  .insight-highlights h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 50px;
  }
  
  .highlight-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .highlight-item {
    background-color: #1a1a1a;
    padding: 20px;
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .highlight-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
  }
  
  .highlight-item img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
  }
  
  .highlight-item h3 {
    font-size: 1.4rem;
    margin-bottom: 12px;
  }
  
  .highlight-item p {
    font-size: 1rem;
    opacity: 0.85;
  }
  





  .testimonial-marquee {
    overflow: hidden;
    background: #f0f0f0;
    padding: 60px 0;
  }
  
  .marquee-track {
    display: flex;
    width: max-content;
    animation: marquee-left 35s linear infinite;
  }
  
  .testimonial-card {
    flex: 0 0 auto;
    background: #fff;
    padding: 30px;
    margin: 0 15px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    width: 320px;
  }
  
  .testimonial-card p {
    font-size: 1rem;
    color: #333;
    margin-bottom: 12px;
  }
  
  .testimonial-card span {
    font-weight: bold;
    color: #111;
  }
  
  @keyframes marquee-left {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  h1{
    
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 50px;
  }
  
  </style>
</head>
<body>
  <header>
    <div class="logo">TerraLens</div>
    <nav>
      <a href="#">Land Insights</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Streamline Your<br>Land Projects Now</h1>
    <p>
      Optimize your land analysis with our advanced dashboard designs — empowering 
      smarter, faster decisions for your projects. Discover more.
    </p>
    <a href="signup"><button>Start Your Analysis</button></a>
  </section>

  <div class="image-scroll">
    <div class="scroll-track">
    <img src="{{ asset('images/img1.jpg') }}" alt="Image 1">
<img src="{{ asset('images/img2.jpg') }}" alt="Image 2">
<img src="{{ asset('images/img3.jpg') }}" alt="Image 3">
<img src="{{ asset('images/img4.jpg') }}" alt="Image 4">
<img src="{{ asset('images/img5.jpg') }}" alt="Image 5">
<!-- Repeat the images if you want a seamless loop -->
<img src="{{ asset('images/img1.jpg') }}" alt="Image 1">
<img src="{{ asset('images/img2.jpg') }}" alt="Image 2">

      <img src="{{ asset('images/img3.jpg') }}" alt="Image 3">
    </div>
  </div>



  <section class="global-message">
    <h2>Empowering Land Decisions Across the Globe</h2>
    <p>From urban hubs to rural heartlands, our dashboards help shape smarter land use decisions worldwide.</p>
  </section>



  <section class="insight-highlights">
    <h2>How We Empower Land Insights</h2>
    <div class="highlight-grid">
      <div class="highlight-item">
        <img src="{{ asset('images/img1.jpg') }}" alt="Custom Dashboard" />
        <h3>Precision-Driven Planning</h3>
        <p>Leverage customized analytics to fine-tune land use plans across regions.</p>
      </div>
      <div class="highlight-item">
        <img src="{{ asset('images/img2.jpg') }}" alt="Visualization Optimization" />
        <h3>Actionable Visual Intelligence</h3>
        <p>Visual layers simplify complex data into clear and compelling formats.</p>
      </div>
      <div class="highlight-item">
        <img src="{{ asset('images/img3.jpg') }}" alt="Geospatial Data" />
        <h3>Geographic Advantage</h3>
        <p>Integrate maps and topography into your strategic land decisions.</p>
      </div>
      <div class="highlight-item">
        <img src="{{ asset('images/img4.jpg') }}" alt="Reporting Tools" />
        <h3>Intelligent Reports</h3>
        <p>Generate in-depth reports that inform, support, and guide actions.</p>
      </div>
    </div>
  </section>
  

  <section class="testimonial-marquee">
    <h1> Hear From Our Satisfied Clients </h1>
    <div class="marquee-track">
      <div class="testimonial-card">
        <p>"LandViz has empowered us with crystal-clear insights and time-saving tools. Their platform is essential for any land analyst."</p>
        <span>- Neha Verma</span>
      </div>
      <div class="testimonial-card">
        <p>"From irrigation mapping to well-depth analysis, LandViz simplified our entire survey. Professional and powerful."</p>
        <span>- Suresh Patel</span>
      </div>
      <div class="testimonial-card">
        <p>"Exceptional UI, fast analytics, and super responsive team. We’ve never had better clarity in our land usage plans."</p>
        <span>- Ananya Desai</span>
      </div>
      <div class="testimonial-card">
        <p>"LandViz has empowered us with crystal-clear insights and time-saving tools. Their platform is essential for any land analyst."</p>
        <span>- Neha Verma</span>
      </div>
      <div class="testimonial-card">
        <p>"From irrigation mapping to well-depth analysis, LandViz simplified our entire survey. Professional and powerful."</p>
        <span>- Suresh Patel</span>
      </div>
      <div class="testimonial-card">
        <p>"Exceptional UI, fast analytics, and super responsive team. We’ve never had better clarity in our land usage plans."</p>
        <span>- Ananya Desai</span>
      </div>
    </div>
  </section>
  

  
  
</body>
</html>
