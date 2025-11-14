    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Nivaas Delhi</title>
  <script></script>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <style>
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f8f8f8;
    }
 .logo{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 600;
}
a{
    text-decoration: none;
}
a:hover{
    color: red;
}
#allcities:hover{
    color: red;

}



.language{
    height: 69px;
    width: 195.53px;
    background-color:white;
    padding: 0px 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-right: solid 1px #f1ebeb;
}
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 69px;
    width: 210px;
    background-color: white;
}


    .container {
      display: flex;
      margin: 20px;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background: #fff;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 10px;
      
    }

    .sidebar h3 {
      margin-top: 0;
      font-size: 18px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 8px;
    }
    .Maindiv{
   height: 70px;
   display: flex;
   background-color:white;
   justify-content: center;
   



}
.logo{
    height: 69px;
    width: 100.5px;
    background-color: white;
    border-right: solid 1px #f1ebeb;
    text-decoration: none;
    margin-right: 200px;
    
}

.sb{
    background-color: #1ab64f;
    height: 40px;
    width: 100px;
    border: none;
    border-radius: 0px 5px 5px 0px ;
    font-size: 17px;
    color: white;
    font-weight: 700;
    margin-top: 10px;

}
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 69px;
    width: 210px;
    background-color: white;
}

    .sidebar label {
      display: block;
      margin: 8px 0;
    }

    /* Main Content */
    .main {
      flex: 1;
       margin-left: 20px;
    }

    .hotel-card {
      display: flex;
      background: #fff;
      margin-bottom: 20px;
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid #ddd;
    }

    .hotel-card img {
      width:350px;
      height: 250px;
      object-fit: cover;
    }

    .hotel-info {
      padding: 15px;
      flex: 1;
    }

    .hotel-info h2 {
      margin: 0;
      font-size: 20px;
    }

    .rating {
      background: #4caf50;
      color: #fff;
      padding: 3px 8px;
      border-radius: 5px;
      font-size: 14px;
      display: inline-block;
      margin: 8px 0;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
      color: #d32f2f;
    }

    .btn {
      background: #00a300;
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 5px;
      margin-right: 10px;
    }

  
    .find-hotel{
    width: 315.15px;
    height: 40px;
    border-radius: 5px 0px 0px 5px ;
    font-size: 15px;
    border: none;
    margin-top: 10px;
    padding: 0px 0px 0px 10px;
    margin-left: 100px;
    border-right: solid 1px black;
    
}
.date{
    width: 190.56px;
    height: 40px;
    padding: 0px 0px 0px 16px;
    border: none;
    margin-top: 10px;
    border-right: solid 1px black;

}
.room{
    height: 40px;
    width: 151.19px;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items:center;
    font-family: sans-serif;
}
 .range-container {
      width: 200px;
    }
    .slider {
      width: 100%;
    }
    .values {
      margin-top: 10px;
      font-weight: bold;
    }
    </style>
</head>
<body>
  <div class="Maindiv">
      <div class="logo">Nivaas</div>
        <input type= "text" class="find-hotel" name="search"placeholder="  search by city, hotel or neighborh"/>
        <input type="date" class="date" name="date" />
         <input type="submit" name="sb" value="Search"  class="sb"/>
      <div class="login">
        <i class="fa-solid fa-circle-user" style="margin: 0px 7.5px"></i>
        <a href="">Login</a>/
        <a href="">Signup</a>
      </div>
  </div>

<div class="container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Filters</h3>
    <div class="range-container">
    <label for="minRange">Min Price: </label>
    <input type="range" id="minRange" min="0" max="5000" step="100" value="500" class="slider">
    <br>
    <label for="maxRange">Max Price: </label>
    <input type="range" id="maxRange" min="0" max="5000" step="100" value="3000" class="slider">

    <div class="values">
      Selected Range: ₹<span id="minValue">500</span> - ₹<span id="maxValue">3000</span>
    </div>
  </div>

  <script>
    const minRange = document.getElementById("minRange");
    const maxRange = document.getElementById("maxRange");
    const minValue = document.getElementById("minValue");
    const maxValue = document.getElementById("maxValue");

    function updateValues() {
      let min = parseInt(minRange.value);
      let max = parseInt(maxRange.value);

      if (min > max) {
        minRange.value = max;
        min = max;
      }

      minValue.textContent = min;
      maxValue.textContent = max;
    }

    minRange.addEventListener("input", updateValues);
    maxRange.addEventListener("input", updateValues);
  </script>
    <label><input type="checkbox"> Family Nivas</label>
    <label><input type="checkbox"> For Group Travellers</label>
    <label><input type="checkbox"> Local IDs accepted</label>
    <label><input type="checkbox"> Nivas welcome couples</label>
  </div>

  <!-- Main -->
  <div class="main">
    <h2>Hotels in Delhi (137 Nivaas)</h2>

    <div class="hotel-card">
      <img src="img/hotels.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Spot On Swagat Palace</h2>
        <div class="rating">3.5 ★</div>
        <p>Delhi 110005 • 1.1 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹999 <small>+ ₹100 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel1.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Super Hotel O Green Park Residency </h2>
        <div class="rating">2.5 ★</div>
        <p>Delhi 110005 • 3 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹499 <small>+ ₹151 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel2.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Collection O Ramhan</h2>
        <div class="rating">4.5 ★</div>
        <p>Delhi 110005 • 2 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹452 <small>+ ₹222 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel3.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Hotel O Kalkaji Residency </h2>
        <div class="rating">3.5 ★</div>
        <p>Delhi 110005 • 3.6 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹2000<small>+ ₹132 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel4.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Super Townhouse Shahdara</h2>
        <div class="rating">3.5 ★</div>
        <p>Delhi 110005 • 1.67 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹999 <small>+ ₹100 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel5.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Hotel O The Premium Villa</h2>
        <div class="rating">4.5 ★</div>
        <p>Delhi 110005 • 2.1 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹2999 <small>+ ₹100 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel6.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Hotel O Raj Hans Dx New Delhi Railw</h2>
        <div class="rating">2.5 ★</div>
        <p>Delhi 110005 • 4.1 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹1999 <small>+ ₹100 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
    <div class="hotel-card">
      <img src="img/hotel7.avif" alt="Hotel">
      <div class="hotel-info">
        <h2>Spot On Swagat Palace</h2>
        <div class="rating">3.7 ★</div>
        <p>Delhi 110005 • 1 km away</p>
        <p>Free Wifi • Geyser • Reception</p>
        <p class="price">₹999 <small>+ ₹100 taxes</small></p>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>