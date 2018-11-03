@include('sitelayout.header')


            @include('sitelayout.nav')



                                   @yield('content')
                                   <!-- About Section -->


 <section>

@include('layouts.caro')
<!--/.Carousel Wrapper-->
<!--/.Carousel Wrapper-->
   <br>
   @auth
   @if(Auth::user()->isAdmin())
   <!-- Start your project here-->
   <div class="container well">
  <div class="row">
   <div class="col-md-9">

     <!-- Nav tabs -->
     <!-- <ul class="nav nav-tabs md-tabs nav-justified">
         <li class="nav-item">
             <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Add Console</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Add Game</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Add  Team</a>
         </li>
     </ul> -->
     <!-- Tab panels -->
     <!-- <div class="tab-content card"> -->

         <!-- <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
             <br>

             <div class="modal-body mdb-color darken-3  ">
                 <div class="md-form form-sm mb-5">
                     <i class="fa fa-user prefix"></i>
                     <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput12">Firstname</label>
                 </div>
                    <div class="md-form form-sm mb-5">
                     <i class="fa fa-user prefix"></i>
                     <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput12">Lastname</label>
                 </div>
                    <div class="md-form form-sm mb-5">
                     <i class="fa fa-envelope prefix"></i>
                     <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                 </div>
                     <div class="md-form form-sm mb-5">
                     <i class="fa fa-envelope prefix"></i>
                     <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput12">Username</label>
                 </div>

                 <div class="md-form form-sm mb-5">
                     <i class="fa fa-lock prefix"></i>
                     <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                 </div>

                 <div class="md-form form-sm mb-4">
                     <i class="fa fa-lock prefix"></i>
                     <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                     <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                 </div>

                 <div class="text-center form-sm mt-2">
                     <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                 </div>

             </div>

             <div class="modal-footer">

             </div>
         </div> -->
         <!--/.Panel 1-->
         <!--Panel 2-->
         <!-- <div class="tab-pane fade" id="panel2" role="tabpanel">
             <br>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                 reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                 porro voluptate odit minima.</p>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                 reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                 porro voluptate odit minima.</p>
         </div>

         <div class="tab-pane fade" id="panel3" role="tabpanel">
             <br>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                 reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                 porro voluptate odit minima.</p>
         </div>

     </div> -->


   </div>
</div>
</div>

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
       @elseif(Auth::user()->isGuest())
    <!-- Start your project here-->
    <div class="container well">
   <div class="row">
         <div class="col-md-6 col-md-offset-3"  >
                @if (session('status2'))

                    <div class="alert alert-success">
                        {{ session('status2') }}
                    </div>
                @endif
               
            </div>
    <div class="col-md-9">

         <div class="card mdb-color darken-3 text-center z-depth-2">
            <div class="card-body"><div>
  <select class="pull-left" >
    <option>FIFA</option>
    <option>8 ball pool</option>
    <option>NBA</option>
    <option>All games</option>

  </select>

  <h6 class="text-success">208 ONLINE</h6>
</div>
            </div>
        </div>
        <br>

      <div class="row">

      <div class="col-md-4">
      <br>
     <div class="card">
         <div class="card-head mdb-color darken-3"><h5 class="card-title white-text">FIFA 18| Any teams</h5></div>
    <div class="card-body mdb-color darken-3">
       <hr>
        <p class="subcolor">ONLINE</p>

        <div class="chip chip-md">

    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg" alt="Contact Person"> <h5 class="white-text">Flexydea</h5>
</div>




  <br>
  <p class="moneyprize">$5.00 </p>
  <hr class="">
 <a class="text-success"><i class="fa fa-trophy ">&nbsp;$9.00</i></a>
   <button class="btn btn-sm btn-warning ">Play match</button>
    </div>
</div>
</div>






</div>
   <br>
    </div>

     <div class="col-md-3">

    <div class="card mdb-color darken-3 text-center z-depth-2">
            <div class="card-body">
                <p class="text-success mb-0">Tell a friend-You get $5</p>
            </div>
        </div>
       <br>
       <br>


    <div class="card text-center">
    <div class="card-header mdb-color darken-3 black-text">

<div>
  <select class="pull-left" >
    <option>FIFA</option>
    <option>All games</option>

  </select>

  <h6 class="text-success">208 ONLINE</h6>
</div>
    </div>
    <div class="card-body">

            <div class="portlet portlet-default">
                <div class="portlet-heading">


                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p><hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/1/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:23 PM</span>
                                        </h6><hr>
                                      

  </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith
                                            <span class="small pull-right">12:28 PM</span>
                                        </h6><hr>
                                        <p>Yeah I did. Everything looks good.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:39 PM</span>
                                        </h6><hr>
                                        <p class="well">No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>
                    <div>
                              <form>
                            <div>
                              <div class="input-group">
                                <input placeholder="type message" type="text" class="form-control" name="message" />
                                <span>
                                  <button class="btn btn-sm btn btn-mdb-color " type="button">
                                    Send
                                  </button>
                                </span>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
    </div>

</div>



   <br>
   <div class="card text-center">
    <div class="card-header mdb-color darken-3 white-text">

<div>


  <h6 class="text-warning">FEEDS</h6>
</div>
    </div>
    <div class="card-body">

            <div class="portlet portlet-default">
                <div class="portlet-heading">


                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p><hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/1/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:23 PM</span>
                                        </h6><hr>
                                        <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith
                                            <span class="small pull-right">12:28 PM</span>
                                        </h6><hr>
                                        <p>Yeah I did. Everything looks good.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:39 PM</span>
                                        </h6><hr>
                                        <p class="well">No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>

                </div>
            </div>
    </div>

</div>
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
  @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">{{ $error }}</div>

                    @endforeach

                @endif
                        <!--Body-->
                        <div class="modal-body mb-1">
                                 <form id="" role="form"  method="POST" action="{{route('store_match')}}">
                        @csrf
                            <div class="md-form form-sm mb-5">

<select class="mdb-select" name="challange">
    <option value="" disabled selected> Match Option</option>

    <option value="Open challange">Open challange</option>
    <option value="Direct challenge">Direct challenge</option>
</select>
   <select class="mdb-select pull-right" name="console">
    <option value="" disabled selected> Choose Console</option>

       @foreach ($console as  $value)
        <option value="{{ $value->console_id }}"> {{ $value->name }}</option>
    @endforeach
</select>

                            </div>

                            <div class="md-form form-sm mb-4">

                            <select   class="mdb-select" name="games">

    <option value="" disabled selected> Choose Game</option>
    @foreach ($games as  $value)
        <option value="{{ $value->game_id}}"> {{ $value->name }}</option>
    @endforeach
</select>

    <div class="pull-right some">
   <select class="mdb-select" name="price">

    <option value="" disabled selected > Bet Prize</option>

    <option value="$5">$5</option>
    <option value="$10">$10</option>
    <option value="$20">$20</option>
                                 </select><br>
                                 <a id="post-somer">Select custom price</a>
                               </div>
                                <br>
                                <br>
                               <div class="newsfeeds">
                             
                                <input type="number" class="white-text" name="custom-price" placeholder="Enter custom price"><br>
                                  <a  id="postback-bt">Select Default Price</a> 
                            </div>
                 <!--   <select  onchange="document.getElementById('s_games').style.display='block';" class="mdb-select" name="games">

    <option value="" disabled selected>Game rule</option>
           <option value="" selected="selected">Select an Option</option>
                              <option value="1">Not Allowed</option>
                              <option value="2">Allowed</option>
</select> -->
<div id="c">
        <a  id="postback-games">Set Game For FIFA rulse</a> </div>
                            </div>
  <span id="s_games">
                            <div class="md-form form-sm mb-4">
                             <a  id="hid_rules">Hide Game For FIFA rulse</a>      
                            <hr>
                          <br>

                             <h5 class="text-center white-text"><u>GAME RULES</u></h5>
                             <br>
                             <br>
                            <select name="level" class="mdb-select pull-left">

    <option value="" disabled selected> Any Start level</option>

    <option value="3">3 Stars</option>
    <option value="3.5">3 1/2 Stars</option>
    <option value="4">4 Stars </option>
    <option value="4.5">4 1/2 Stars</option>
</select>
   <select class="mdb-select pull-right" name="team">

    <option value="" disabled selected > Any Team</option>

      @foreach ($team as  $value)
        <option value="{{$value->team_id}}"> {{ $value->name }}</option>
    @endforeach


                                </select>
                                <br>
                                <br>
                                 <select class="mdb-select pull-left" name="time">

    <option value="" disabled selected> Half lenght</option>

    <option value="4 minutes">4 minutes</option>
    <option value="5 minutes">5 minutes</option>
    <option value="6 minutes">6 minutes</option>
    <option value="7 minutes">7 minutes</option>
</select>
                            <select class="mdb-select pull-right" name="attack">

    <option value="" disabled selected> Legacy Defending</option>

    <option value="0">Not Allowed</option>
    <option value="1">Allowed</option>
</select>
                            </div>
</span>

                            <br>
                            <hr>
                           <div class="text-center mt-2">
                                <button class="btn btn-info">Create Match <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                                    </form>
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
               @else
                   I don't have any records!
               @endif
               @endauth


                                     @yield('footer')


            @include('sitelayout.footer')

@include('sitelayout.footerscript')
<script type="text/javascript">
   
</script>
