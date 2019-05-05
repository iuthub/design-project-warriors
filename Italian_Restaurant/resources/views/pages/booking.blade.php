@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row" id="menutitles">
        <div class="col-md-12"  >
                            <h1 class="headerofsection">Booking</h1>
                <br>
                <br>
                 </div>
                 <div class="col-md-12">
                     <div class="row">
                            <div class="col-md-6">
                                <img src="./images/Restaurant-plan.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="margin-top: 70px">
                                    <form>
                                            <h2 style="text-align: center">Registration</h2>
                                            <div class="form-group">
                                              <label for="formGroupExampleInput">Name / ID</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name or ID number">
                                            </div>
                                            <div class="form-group">
                                              <label for="formGroupExampleInput2">e-Mail</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Electron address">
                                            </div>
                                            <div class="form-group">
                                                    <label for="formGroupExampleInput2">Date</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="YYYY-MM-DD">
                                            </div>
                                            <div class="form-group">
                                                    <label for="formGroupExampleInput2">Table Number</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="#XXX#XXX">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Order</button>
                                          </form>


                            </div>

                     </div>
                 </div>
            </div>
        </div>
</div> 
    
@endsection