@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="menutitles">
        <div class="col-md-12  col-sm-12">
            <div class="swapper">
                <h5 class="swappermainpage">
                    <a href="\" style="text-decoration:none">
                        Main page
                    </a>
                </h5><h5 class="swappermenu">/ContactUs</h5>
                <h1 class="headerofsection">Contact Us</h1>
                <br>
                <br>
                <div class="row">
                        <div class="col-md-4">
                           <img class="logos" src="./images/Location.png" alt="menu">
                        </div>
                        <div class="col-md-4">
                           <img class="logos" src="./images/mail.png" alt="dish">
                        </div>
                        <div class="col-md-4">
                           <img class="logos" src="./images/Phone.png" alt="interior">
                        </div>
                        
                    </div>
                     <br>
                     <div class="row">
                        <div class="col-md-4">
                           <h4 class="logosheaders">Our  Menu</h4>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="col-md-4">
                           <h4 class="logosheaders">Delicious dishes</h4>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="col-md-4">
                           <h4 class="logosheaders">Modern interior</h4>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                        
                     </div>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12341917.587345695!2d3.7134584135224498!3d40.9559975266065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2z0JjRgtCw0LvQuNGP!5e0!3m2!1sru!2s!4v1557056917144!5m2!1sru!2s" width="1000" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                     <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                
            </div>
        </div>
    </div>
        
</div>
    
@endsection