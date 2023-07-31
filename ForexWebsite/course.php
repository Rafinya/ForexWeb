<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Trading View and Chart Examples</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('mula.jfif');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(10px);
    }
    .navbar {
         display: flex;
         background-color: #333;
         color: #fff;
         padding: 20px;
         margin: 0px; 
      }

      .navbar-logo {
         margin-right: auto;
         font-weight: bold;
         color: #fff;
         text-decoration: none;
      }

      .navbar-menu {
         list-style-type: none;
         display: flex;
      }

      .navbar-menu li {
         margin-right: 10px;
      }

      .navbar-menu li a {
         color: #fff;
         text-decoration: none;
         font-size: 16px;
         transition: font-size 0.3s ease-in-out;
      }

      .navbar-menu li a:hover {
         font-size: 18px;
         color: red;
      }

      .navbar-menu li a.active {
         font-weight: bold;
      }
      .navbar-menu li.odd-one-out a {
         background-color: #ff0000; 
         color: #ffffff; 
         border-radius: 5px; 
         padding: 5px 10px; 
      }
      .navbar-menu li.odd-one-out a:hover {
         background-color: #cc0000; 
      }
    h1 {
      margin: 0;
    }
    
    main {
      margin: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
    }
    
    h2 {
      margin-top: 0;
    }
    
    #tradingview-container {
      width: 100%;
      height: 500px;
      margin-bottom: 20px;
    }
    
    .chart-example {
      margin-bottom: 30px;
      text-align: center;
    }
    .chart-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .chart-caption {
      color: #fff;
      font-size: 16px;
      text-align: center;
    }
    footer {
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 10px;
      text-align: center;
    }
     img {
      max-width: 80%;
      height: auto;
      display: block;
      margin: 0 auto;
      border: 5px solid #fff; 
      border-radius: 5px; 
    }
    .chart-example {
      margin-bottom: 30px;
      text-align: center;
    }
    .chart-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .chart-caption {
      color: #fff;
      text-align: center;
    }
    .course-link-container {
      text-align: center;
      margin-top: 30px;
      padding: 20px;
      background-color: rgba(255, 255, 0, 0.5);
      border: 3px solid #ff0;
      border-radius: 10px;
      position: relative;
    }

    .course-link {
      font-size: 24px;
      font-weight: bold;
      color: #000; /* Changed the text color to black for better visibility */
      text-decoration: none;
      display: inline-block;
      padding: 10px 30px;
      margin-top: 20px;
      background-image: url('dollar-bill.png');
      background-size: cover;
      background-position: center;
      border: 3px solid #ff0;
      border-radius: 10px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
      filter: blur(1px); 
      position: relative;
      z-index: 1; 
    }

    .course-link::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8); /* Adding a subtle background color */
      z-index: -1;
      border-radius: 10px;
    }

    .flashy-arrows {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .arrow {
      font-size: 30px;
      color: #ff0;
      margin: 0 15px;
    }
  </style>
</head>
<body>
 <nav class="navbar">
      <div class="navbar-logo">Forex Trader</div>
      <ul class="navbar-menu">
         <li><a href="course.php" class="active">Course</a></li>
         <li class="odd-one-out"><a href="logout.php">Logout</a></li> 
      </ul>
   </nav>
  <main>
    <h2>TradingView Widget</h2>
    <br>
    <div id="tradingview-container"></div>
    <p><b>Above we have an example of a trade chart where most traders use tools to work in the forex market in the chart below, familiarize yourself with it.
    There is also a course below which will help you understand mostly what forex is all about and give you a good foundation and headstart to kick off your trading career.</b></p>
    <div class="course-link-container">
      <p><b>Get started with one of the BEST forex comprehensive course:</p></b>
      <div class="flashy-arrows">
        <div class="arrow">➤</div>
        <a class="course-link" href="https://jeafx.com/free-course-signup/" target="_blank">JEAFX COURSE</a>
        <div class="arrow">➤</div>
      </div>
    </div>
  </main>
  <script src="https://s3.tradingview.com/tv.js"></script>
  <script>
    new TradingView.widget({
      "width": 980,
      "height": 500,
      "symbol": "XAUUSD",
      "interval": "4H",
      "timezone": "Etc/UTC",
      "theme": "dark",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": true,
      "allow_symbol_change": true,
      "container_id": "tradingview-container"
    });
  </script>
  <footer>
    <b>&copy; 2023 Trading View and Chart Examples. All rights reserved.</b>
  </footer>
</body>
</html>
