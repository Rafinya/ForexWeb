<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="style.css">

   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0px; 
         padding: 0.9px;
         background-image: url('moenyy.jpeg');
         background-size: cover;
         background-position: center;
         backdrop-filter: blur(8px);
         min-height: 100vh;
         color: #fff;
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
         color: #ff0000;
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

      .container {
         text-align: center;
         margin-top: 50px;
      }

      .content h2 {
         font-size: 28px;
         margin-top: 20px;
         margin-bottom: 10px;
         color: #fff;
        
      }

      .content p {
         line-height: 1.9;
         color: #f0f0f0;
      }
      .content ul,
      .content ol {
         margin-left: 20px;
         line-height: 1.6; /* Adjust line-height for better readability */
      }

      .content li {
         list-style-position: inside; /* Move bullets/numbers inside the list item */
      }

      .tables {
         color: blanchedalmond;
         border-collapse: collapse;
         width: 100%;
      }

      .tables th,
      .tables td {
         border: 1px solid #333;
         padding: 8px;
         text-align: center;
      }

      .tables th {
         background-color: #333;
         color: #fff;
      }

      .tables tr li {
         list-style: disc;
         margin-left: 20px;
      }

      .sticky-footer {
         position: sticky;
         bottom: 0;
         background-color: #333;
         color: #fff;
         padding: 10px;
         text-align: center;
      }

   </style>
</head>
<body>
   <nav class="navbar">
      <div class="navbar-logo">Forex Trader</div>
      <ul class="navbar-menu">
         <li><a href="course.php">Course</a></li>
         <li class="odd-one-out"><a href="logout.php">Logout</a></li> 
      </ul>
   </nav>
   <main>
      <h2>About Forex</h2>
      <p>Forex, also known as foreign exchange or currency trading, is the decentralized global market where all the world's currencies trade. The forex market is the largest and most liquid market in the world, with an average daily trading volume of trillions of dollars. It operates 24 hours a day, five days a week.</p>
    
      <h2>Why Trade Forex?</h2>
      <ul>
         <li>No commissions</li>
         <li>No fixed lot size</li>
         <li>Ability to profit in both rising and falling markets</li>
         <li>24/5 market access</li>
         <li>Opportunity to diversify investment portfolio</li>
         <li>No one can corner the market</li>
      </ul>
    
      <h2>Forex Trading Strategies</h2>
      <ol>
         <li>Day Trading</li>
         <li>Swing Trading</li>
         <li>Trend Trading</li>
         <li>Range Trading</li>
         <li>Breakout Trading</li>
      </ol>
      <br>
      <br>
    
      <p>Below are various types of forex tradable Items:</p>

   
      <table class="tables">
         <tr>
            <th>Currencies</th>
            <th>Indices</th>
            <th>Stocks</th>
            <th>Futures</th>
         </tr>

         <tr>
            <td>EURUSD</td>
            <td>V75</td>
            <td>Telsa</td>
            <td>NAS 100</td>
         </tr>

         <tr>
            <td>USDJPY</td>
            <td>Jump 1000</td>
            <td>Netflix</td>
            <td>US 30</td>
         </tr>

         <tr>
            <td>GBPJPY</td>
            <td>Crash 500</td>
            <td>Amazon</td>
            <td>US 30</td>
         </tr>
      </table>
      <br>
      <br>

      <h2>Conclusion</h2>
      <p>Forex trading offers opportunities for individuals to participate in the global currency markets and potentially profit from currency fluctuations. However, it is important to understand the risks involved and to educate yourself about the market before getting started.</p>
   </main>


   <footer class="sticky-footer">
      &copy; 2023 Forex Website. All rights reserved.
   </footer>
</body>
</html>
