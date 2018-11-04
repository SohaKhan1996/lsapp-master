@extends('layouts.app')
@section('content')

<hr>
<div class= "options">
    <h3 style="text-align:center;">Select from the categories</h3>
    <hr>
    <div class = "option-text">
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <label class="containercheck">Vegetables
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                    <div class="panel-body"> <img src="/images/vegnherb.jpg" class= "img-thumb">
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <label class="containercheck">Fruits
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
            <div class="panel-body"> <img src="/images/fruits.jpg" class= "img-thumb">
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <label class="containercheck">Inseason
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                <div class="panel-body"> 
                  <img src="/images/fnv.jpg" class= "img-thumb">
                </div>
              </div>
           </div>
          </div>
        </div>
    </div>
</div>
<div class="container"  style="text-align:center;" >
  <button type="button" class="btn btn-primary" style="float: centre;">Next</button>
</div>
<hr>
  @endsection
