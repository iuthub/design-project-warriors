@extends('layouts.app')
<script src="./js/menu.js"></script>
@section('content')

<div class="container">
    <div class="row" id="menutitles">
        <div class="col-md-12  col-sm-12">
            <div class="swapper">
                <h5 class="swappermainpage">
                    <a href="\" style="text-decoration:none">
                        Main page
                    </a>
                </h5><h5 class="swappermenu">/Menu</h5>
                <h1 class="headerofsection">Menu</h1>
                <ul class="tabs">
                    <h5 class="mealswapper" id="mainmeal">
                        <button id="mainmealbutton" style=" background-color:white; border-style:none">
                            Mains
                        </button>
                    </h5>
                    <h5 class="mealswapper" id="steaksmeal">
                        <button id="steaksmealbutton" style=" background-color:white; border-style:none">
                            Steaks
                        </button>
                    </h5>
                    <h5 class="mealswapper" id="pizzameal">
                        <button style=" background-color:white; border-style:none">
                            Pizza
                        </button>
                    </h5>
                    <h5 class="mealswapper" id="drinksmeal">
                        <button style=" background-color:white; border-style:none">
                            Drinks
                        </button>
                    </h5>
                    <h5 class="mealswapper" id="desertmeal">
                        <button style=" background-color:white; border-style:none">
                            Deserts
                        </button>
                    </h5>
                </ul>
            </div>
        </div>
    </div>







<!--Mains card row-->

<div id="mains" style="display: none">
    <div class="row">
        <div class="col-md-3 col-sm-6" >
            <div class="cards">
                <img class="cardimg" id="menuimg0" src="" alt="menu">
                <h5 class="card-title">JQuery is the best framework</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg" id="menuimg1" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg"  id="menuimg2" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg"  id="menuimg3" src=""  alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
    </div>
    <div class="row" id="mainsrow2">
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg"  id="menuimg4" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg" id="menuimg5" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg"  id="menuimg6" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="cards">
                <img class="cardimg"  id="menuimg7" src="" alt="menu">
                <h5 class="card-title">Card title1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the 
                    bulk of the card's content.
                </p>
            </div>
        </div>
    </div>
</div>

<!--Drinks-->
<div id="steaksmeals" style="display: none">
<div class="row" >
    <div class="col-md-3 col-sm-6" >
        <div class="cards">
            <img class="cardimg"  id="menuimg8" src="" alt="menu">
            <h5 class="card-title">JQuery is the best framework</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg9" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg10" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg11" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
</div>

<div class="row" id="drinksrow2">
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg12" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg13" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg14" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="cards">
            <img class="cardimg"   id="menuimg15" src="" alt="menu">
            <h5 class="card-title">Card title1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the 
                bulk of the card's content.
            </p>
        </div>
    </div>
</div>
</div>

</div>    
@endsection