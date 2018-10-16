@extends('layouts.site')

@section('title') T-History  @endsection

@section('content')
<!-- Start your project here-->

<div class="container well">
<div class="row">
<br>
<div class="col-md-12">
 <br>
 <br>
<!--Table-->
<h1 class="text-center">Transaction History</h1>
<!--Table--><br>



</div>
</div>

<!--Table-->
<!--Table-->
<div class="table-responsive">
<!--Table-->
<table class="table">

<!--Table head-->
<thead class="mdb-color darken-3">
    <tr class="text-white">
        <th>Transaction ID/th>
        <th>Type</th>
        <th>Amount</th>
        <th>Method/Description</th>
        <th>Status</th>
        <th>Date/Time</th>
        <th>Balance</th>
        <th>Bonus Balance</th>
    </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
</tbody>
<!--Table body-->

</table>
<!--Table-->
<!--Table-->
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
