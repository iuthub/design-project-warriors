@extends('template.app')


@section('content')
<script src="./js/index.js"></script>
<body>
   
   <!--Restaurant page-->
   <div>
   <img src="./images/Picture.jpg" class="restaurant_img"  alt="restaurant">
   </div>
   <div class="logocontainer">
      <div class="buttoncontainer">
         <!--Restaurant Name-->
         <h1>Italian Restaurant</h1>
         <h5>Best restaurant in Tashkent</h5>
         <!--Table Booking button-->
         <a href="/booking">
            <button type="button" name="learn" class="btn btn-default">Book a table</button>
         </a>
      </div>
   </div>
   

   <!--About Section-->
   <div class="container">
        <h2 class="headerofabout">About us</h2>
      <div class="row">
         <div class="col-md-6">
             <!-- Quick information about our restaurant-->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nulla accusamus expedita adipisci asperiores similique, harum soluta, dolore enim aliquid ipsa culpa nihil, rem ad molestias quia maiores qui quaerat!</p>
         <div>
             <!--Click button for  more information about our restaurant-->
            <button type="button" name="learn" class="btn btn-success">Learn more</button>
         </div>
      </div>
         <!--Restaurant's kitchen image-->
         <div class="col-md-5">
            <img style="height: 260px; width:540px" src="./images/Sloy 5.png" alt="reservation">
         </div>
      </div>
      <br>
      <br>
      <br>
      <!--Information about restaurant's adventages-->
      <div class="row">
         <div class="col-md-3">
            <img class="logos" src="./images/menu.png" alt="menu">
         </div>
         <div class="col-md-3">
            <img class="logos" src="./images/serving-dish.png" alt="dish">
         </div>
         <div class="col-md-3">
            <img class="logos" src="./images/Interior.png" alt="interior">
         </div>
         <div class="col-md-3">
            <img class="logos" src="./images/guitar.png" alt="guitar">
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-md-3">
            <h4 class="logosheaders">Our  Menu</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique nesciunt maxime fugiat assumenda aspernatur quia exercitationem qui quisquam voluptatibus. Eveniet amet blanditiis voluptas perferendis corrupti architecto ex eius voluptatibus molestiae?</p>
         </div>
         <div class="col-md-3">
            <h4 class="logosheaders">Delicious dishes</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique nesciunt maxime fugiat assumenda aspernatur quia exercitationem qui quisquam voluptatibus. Eveniet amet blanditiis voluptas perferendis corrupti architecto ex eius voluptatibus molestiae?</p>
         </div>
         <div class="col-md-3">
            <h4 class="logosheaders">Modern interior</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique nesciunt maxime fugiat assumenda aspernatur quia exercitationem qui quisquam voluptatibus. Eveniet amet blanditiis voluptas perferendis corrupti architecto ex eius voluptatibus molestiae?</p>
         </div>
         <div class="col-md-3">
            <h4 class="logosheaders">Live Music</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique nesciunt maxime fugiat assumenda aspernatur quia exercitationem qui quisquam voluptatibus. Eveniet amet blanditiis voluptas perferendis corrupti architecto ex eius voluptatibus molestiae?</p>
         </div>
      </div>
      <!--Restaurant's special menu with images-->
      <div class="row">
         <div class="col-md-1 col-md-offset-1"></div>
         <div class="col-md-10 col-md-offset-1">
            <h2 class="headerofmenu">Our Menu</h2>
            <br>
            <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat beatae vero mollitia temporibus ea libero fuga ab iure modi illo? Minus, ipsam cupiditate! 
               Explicabo, maxime aperiam accusamus officia quaerat accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam id beatae eligendi sequi 
               porro dolor iure perferendis, odio, illo ratione minus earum dicta obcaecati quia voluptate. Voluptatum quas libero non? Lorem ipsum dolor sit, amet consectetur 
               adipisicing elit. 
            </p>
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-md-6">
            <img class="menumeals"
            src="https://static.food2fork.com/Strawberry2Band2BBalsamic2BGrilled2BChicken2BSalad2B5002B05455fa48e36.jpg" 
            alt="ChickenSalad">
         </div>
         <div class="col-md-6">
            <img class="menumeals"
            src="https://static.food2fork.com/kaboba581.jpg" 
            alt="kaboba">
         </div>
      </div>
      <br>
      <br>
      <br>
      <!--Change type of meal by your preference-->
      <div class="row">
         <div class="col-md-12">
             <!--HERE SHOULD BE REPAIRED -->
           <div class="mealselectbuttoncontainer">
            <h3 class="mealselectbuttons">Mains</h3>
            <h3 class="mealselectbuttons">Deserts</h3>
            <h3 class="mealselectbuttons">Drinks</h3>
           </div>
         </div>
      </div>
      <br>
<!-- Card version of meals-->
<div class="row">
   <div class="col-md-12">
      <div class="containercarusel">
         <div class="slider-outer">
            <div class="slider-inner">
               <div class="card ">
                  <img class="cardimg" src="./images/menu.png" alt="menu">
                  <h5 class="card-title">Card title1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the 
                     bulk of the card's content.
                  </p>
            </div>
            <div class="card active" >
               <img class="cardimg" src="./images/serving-dish.png" alt="dish">
                  <h5 class="card-title">Card title2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the 
                     bulk of the card's content.
                  </p>
            </div>
            <div class="card active" >
               <img class="cardimg" src="./images/serving-dish.png" alt="dish">
                  <h5 class="card-title">Card title3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the 
                     bulk of the card's content.
                  </p>
            </div>
            <div class="card active" >
               <img class="cardimg" src="./images/serving-dish.png" alt="dish">
                  <h5 class="card-title">Card title4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the 
                     bulk of the card's content.
                  </p>
            </div>
            </div>
         </div> 
         <!--Click and view all menu meals-->
         <div style="text-align: center">
            <a href="/menu"><button class="btn btn-success">View all menu</button></a>
         </div>
      </div>
   </div>
</div>

<br>
<br>
  <!--Reservation section-->
<h2 class="headerofreservation">Reservation</h2>
<br>
   <div class="row">
        <!--How to reserve-->
      <div class="col-md-6">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nulla accusamus expedita adipisci asperiores similique, harum soluta, dolore enim aliquid ipsa culpa nihil, rem ad molestias quia maiores qui quaerat!</p>
      <div>
           <!--Click here is more info about reservation-->
         <button type="button" name="learn" class="btn btn-success">Learn more</button>
      </div>
      </div>
      <div class="col-md-5">
           <!--Restaurant hall's image-->
        <img style="height: 260px; width:540px" src="./images/Sloy 3.png" alt="reservation">
      </div>
   </div>
<br>
<br>
  <!--Contact section-->
 <div class="row">
   <div class="col">
      <h2 class="headerofcontact">Contacts</h2>
   </div>
 </div>
</div>
<br>
<div class="contactcontent">
   <div class="leftdiv">
      <div class="insideleftdiv">
         <!--Image of meal-->
         <img class="leftImage" src="https://static.food2fork.com/8530b681.jpg" alt="meal1">
      </div>  
   </div>
   <div class="middlediv">
      <!--Restaurant's working schedual-->
      <div class="middledivcontent">
         <h4 ><b>Opening Hours</b></h4>
        <p style="margin-top:15px">Mondey   ...................................................................  10:00-22:00</p>
        <p >Tuesday   ...................................................................  10:00-22:00</p>
        <p >Wednesday    ......................................................................  Closed</p>
        <p >Thursday  ................................................................  10:00-22:00</p>
        <p >Friday    ......................................................................  10:00-22:00</p>
        <p >Saturday    .................................................................  10:00-01:00</p>
        <p >Sunday  ....................................................................  10:00-00:00</p>
        <h4 style="margin-top:20px"><b>Contact Info</b></h4>
        <p style="margin-top:15px">Address: Tashkent Mirzo Ulugbek dist, Ziyolilar str,16</p>
        <p >Phone: +99897 789-88-80</p>
        <p >Email: italian_food@gmail.com</p>
      </div>
   </div>
   <div class="rightdiv"> 
      <div class="insiderightdiv">
         <!--Image of meal-->
         <img class="rightImage" src="https://static.food2fork.com/8530b681.jpg" alt="meal1">
      </div>
   </div>
</div>
<br>
<br>
<br>
</body>
@endsection

