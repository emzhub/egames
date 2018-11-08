@extends('layouts.site')

@section('title') Account-Settings  @endsection

@section('content')
<!-- Start your project here-->
<br>
<br>

<section>
<br>
<br><br>
<br>
 <!--Carousel Wrapper-->
<!--/.Carousel Wrapper-->
<!--/.Carousel Wrapper-->

   <!-- Start your project here-->
   <br>
   <div class="container well">
  <div class="row">
           <div class="col-md-6 col-md-offset-3"  >
                @if (session('status3'))

                    <div class="alert alert-success">
                        {{ session('status3') }}
                    </div>
                @endif
               
            </div>
  <br>
   <div class="col-md-9">
    <br>
    <br>
    <br>
       <form id="" role="form"  method="POST" action="{{route('store_settings')}}">
                        @csrf
        <!--Table-->
<!--Table-->
<div class="table-responsive">
<!--Table-->
<table class="table">

   <!--Table head-->

   <!--Table head-->

   <!--Table body-->
        @foreach($exist as $theme)
   <tbody>
      
       <tr>
           <td>

               <h6>Fullname</h6>
               <br>
               <p>{{ Auth::user()->name }}</p>
           </td>
           <td><h6>Username</h6>
           <br>
               <p>{{ Auth::user()->username }}</p>
           </td>
       </tr>
       <tr>
           <td><h6>City</h6>
           <br>
           <input type="text" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $theme->city }}">
            @if ($errors->has('city'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
           </td>
           <td><h6>State/Province</h6>
           <br>
           <input type="text" id="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $theme->state }}">
            @if ($errors->has('state'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
          <td><h6>Zip/Postal code</h6>
           <br>
           <input type="text" id="zip" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ $theme->zip }}">
            @if ($errors->has('zip'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
           </td>
            <td><h6>Country</h6>
           <br>
             <input type="text" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $theme->country}}">
              @if ($errors->has('country'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
           <td><h6>Gender</h6>
           <br>
           <select  class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender">
<option value="" disabled selected>Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>

           </select>
             @if ($errors->has('gender'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
           </td>
           <td>
           <h6>XBOX LIVE GAMERTAG</h6>
           <br>
           <input type="text"  id="xbox_name" class="form-control{{ $errors->has('xbox_name') ? ' is-invalid' : '' }}" name="xbox_name" value="{{ $theme->xbox_name }}">
            @if ($errors->has('xbox_name'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('xbox_name') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
             <td>
           <h6>PSN USERNAME</h6>
           <br>
           <input type="text" id="psn_name" class="form-control{{ $errors->has('psn_name') ? ' is-invalid' : '' }}" name="psn_name" value="{{ $theme->psn_name }}">
            @if ($errors->has('psn_name'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('psn_name') }}</strong>
                                    </span>
                                @endif
           </td>
             <td>
           <h6>MOBILE GAME ID</h6>
           <br>
           <input type="text"   id="mobile_id" class="form-control{{ $errors->has('mobile_id') ? ' is-invalid' : '' }}" name="mobile_id" value="{{ $theme->mobile_id }}">
          @if ($errors->has('mobile_id'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('mobile_id') }}</strong>
                                    </span>
                                @endif
           </td>

       </tr>

   </tbody>
        @endforeach
   <!--Table body-->

</table>
</div>
<div class="row">
<div class="col-md-8">
   <a href="{{ url('email_settings') }}" class="text-primary"><u>Email Notification Settings</u></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="{{ route('change_password') }}" class="text-primary"><u>Change password</u></a>
</div>
<div class="col-md-4">

  <a><button class="btn btn-warning pull-right">Save Changes</button></a>
</div>
</div>
  </form>
<!--Table-->
       <br>

     <div class="row">



</div>
  <br>
   </div>

    <div class="col-md-3">
       <br>
       <br>
       <br>
        <table class="table mdb-color darken-3">

           <tr>
           <td>

               <h1 class="text-center text-success">$7.00</h1>
               <h6 class="text-center text-white">Balance</h6>
              <hr>
             <a href="#" class="white-text"><i class="fas fa-plus"></i>&nbsp;Add Funds</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="white-text">|</span>
             <a href="#" class="white-text pull-right"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;Withdraw</a>
             <hr>
             <a href="#"><h6 class="text-center text-white">Transaction History</h6></a>
           </td>

       </tr>
        </table>
   </div>







</div>




</div>


<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true .scrollbar-light-blue">

   <div class="modal-dialog cascading-modal" role="document" >
       <!--Content-->
       <div class="modal-content">

           <!--Modal cascading tabs-->
           <div class="modal-c-tabs">

               <!-- Nav tabs -->
               <ul class="nav nav-tabs tabs-2 mdb-color darken-3" role="tablist">

                   <li class="nav-item">
                       <a class="nav-link text-white" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-american-sign-language-interpreting"></i>&nbsp;&nbsp;Create Match</a>
                   </li>
               </ul>

               <!-- Tab panels -->
               <div class="tab-content mdb-color darken-3">
                   <!--Panel 7-->
<!--

                   <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
-->

                   <div class="tab-pane fade in show active portlet-body chat-widget" id="panel8" role="tabpanel" style="overflow-y: auto; width: auto; height: 500px;">

                       <!--Body-->
                       <div class="modal-body mb-1">
                           <div class="md-form form-sm mb-5">

<select class="mdb-select">
   <option value="" disabled selected> Match Option</option>

   <option value="2">Open challange</option>
   <option value="3">Direct challenge</option>
</select>
  <select class="mdb-select pull-right">
   <option value="" disabled selected> Choose Console</option>

   <option value="2">Ps4</option>
   <option value="3">Xboxone</option>
   <option value="3">Mobile</option>
</select>

                           </div>

                           <div class="md-form form-sm mb-4">

                           <select class="mdb-select">

   <option value="" disabled selected> Choose Game</option>

   <option value="2">Fifa 18</option>
   <option value="3">NBA2k18</option>
   <option value="3">WWE RAW</option>
</select>


  <select class="mdb-select pull-right">

   <option value="" disabled selected > Bet Prize</option>

   <option value="2" >$5</option>
   <option value="3">$10</option>
   <option value="3">$20</option>

                               </select>
                               <br>
                               <br>
                              <div class="pull-right">
                               <input type="number" class="white-text" placeholder="Enter custom price"></div>

                           </div>

                           <div class="md-form form-sm mb-4">
<!--                            <hr>-->
                         <br>

                            <h5 class="text-center white-text"><u>GAME RULES</u></h5>
                            <br>
                            <br>
                           <select class="mdb-select pull-left">

   <option value="" disabled selected> Any Start level</option>

   <option value="2">3 Stars</option>
   <option value="3">3 1/2 Stars</option>
   <option value="3">4 Stars </option>
   <option value="3">4 1/2 Stars</option>
</select>
  <select class="mdb-select pull-right">

   <option value="" disabled selected > Any Team</option>

   <option value="2">Internatonal </option>
   <option value="3">Club </option>
   <option value="3">Ultimate </option>
   <option value="3">EPL</option>
   <option value="3">La Liga</option>
   <option value="3">Bundesliga</option>
   <option value="3">Liga MX</option>
   <option value="3">MLS</option>
   <option value="3">Women's Team</option>


                               </select>
                               <br>
                               <br>
                                <select class="mdb-select pull-left">

   <option value="" disabled selected> Half lenght</option>

   <option value="2">4 minutes</option>
   <option value="3">5 minutes</option>
   <option value="3">6 minutes</option>
   <option value="3">7 minutes</option>
</select>
                           <select class="mdb-select pull-right">

   <option value="" disabled selected> Legacy Defending</option>

   <option value="2">Not Allowed</option>
   <option value="3">Allowed</option>
</select>
                           </div>
                           <br>
                           <hr>
                          <div class="text-center mt-2">
                               <button class="btn btn-info">Create Match <i class="fa fa-sign-in ml-1"></i></button>
                           </div>
                       </div>
                   <!--/.Panel 7-->

                   <!--Panel 8-->

           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
<!--Modal: Login / Register Form-->


              </div>
              </div>

@endsection

  @section ('footer')
  <script >

//   var room = 1;
// function cat_fields() {
//
//  room++;
//  var objTo = document.getElementById('cat_fields')
//  var divtest = document.createElement("div");
// divtest.setAttribute("class", "form-group removeclass"+room);
// var rdiv = 'removeclass'+room;
//  divtest.innerHTML = ' <div class="form-group row"> <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>     <div class="col-md-6"> <input type="text" class="form-control" id="subname[]" name="subname[]" value="" placeholder="Enter Sub Industries Name....">    </div> </div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_cat_fields('+ room +');"> <span class="icon-minus-sign" aria-hidden="true"></span>Remove </button></div></div></div></div><div class="clear"></div>';
//
//  objTo.appendChild(divtest)
// }
// function remove_cat_fields(rid) {
//   $('.removeclass'+rid).remove();
// }
</script>

@endsection
