<!-- Navigation -->

 <nav class="navbar hidden-sm fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
    <logo>     
          <a class="navbar-brand" href="index.html">
            <img src="{{URL::asset('public/img/ESURF-04.PNG') }}" height="75" class="d-inline-block align-top" alt="">
           
        </a>
        
        </logo>
                                        
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto pull-left">
                                               <li class="nav-item active">
                                                    <a class="nav-link " href="index.html"><i class="fa fa-american-sign-language-interpreting text-dark"></i>&nbsp;<b class="text-dark">HEAD-TO-HEAD</b> <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="tournaments.html"><i class="fa fa-trophy text-dark"></i><b class="text-dark">TOURNAMENTS</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="my_games.html"><i class="fa  fa-home text-dark"></i><b class="text-dark">MY GAMES</b></a>
                                                </li>

                                            </ul>
                                            
            <ul class="navbar-nav nav-flex-icons">
              
               
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell text-dark"></i></a>
                     <div class="dropdown-menu dropdown-primary" portlet-body chat-widget" style="overflow-y: auto; width: 230px; height: 300px;"" aria-labelledby="navbarDropdownMenuLink">
                         
                        
                         <a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr>
                        
                        
                </div>
                
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog text-dark"></i></a>
                     <div class="dropdown-menu dropdown-primary " portlet-body chat-widget" style="overflow-y: auto; width: 200px; height: 300px;"" aria-labelledby="navbarDropdownMenuLink">
                        
                         <hr><a href="deposit.html"> <h6 class="text-dark"><i class="fa fa-money"></i>&nbsp;&nbsp;<b class="text-dark">Deposit</b></h6>
                         </a><hr><a href="transaction_history.html"> <h6 class="text-dark"><i class="fa fa-list"></i>&nbsp;<b class="text-dark">Transaction History</b></h6>
                         </a><hr><a href="F.A.Q.html"> <h6 class="text-dark"><i class="fa fa-comment"></i>&nbsp;&nbsp;<b class="text-dark">FAQ</b></h6>
                         </a><hr><a href="account_settings.html"> <h6 class="text-dark"><i class="fa fa-cog"></i>&nbsp;&nbsp;<b class="text-dark">Account Settings</b></h6>
                         </a><hr>
                        
                </div>
                
                </li>
                   
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gamepad text-dark"></i></a>
                        <div class="dropdown-menu dropdown-primary " portlet-body chat-widget" style="overflow-y: auto; width: 230px; height: 220px;"" aria-labelledby="navbarDropdownMenuLink">
                         
                            <a href="#"  data-toggle="modal" data-target="#modalLRForm"><p class="white-text"> <i class="fa fa-american-sign-language-interpreting text-dark"></i>&nbsp;&nbsp;<b class="text-dark">Create match</b></p></a><hr>
                            <a href="create_tournaments.html"  >&nbsp;&nbsp;<p class="text-dark"> <i class="fa fa-trophy text-dark"></i>&nbsp;&nbsp;<b class="text-dark">Tournament</b></p></a><hr>
                </div>
                
                </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.html"><i class="fa  fa-user text-dark"></i></a>
                </li>
                 <li class="nav-item">
           
              <a class="nav-link" href="{{route('logout') }}">{{ __('Logout') }}</a>
             <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
           </li>
                   <li class="nav-item">
                    <a class="nav-link"><i class="far fa-money-bill-alt text-dark"></i>&nbsp;<u><b class="text-dark">$ 6.70</b></u></a>
                    
                     
                </li>
            </ul>
            
        </div>
        <button class="navbar-toggler btn-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
       </nav>
    
</header>


<!-- 
        @auth
        @if(Auth::user()->isAdmin())
           <li class="nav-item <nav class="navbar hidden-sm fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
    <logo>     
          <a class="navbar-brand" href="index.html">
            <img src="img/ESURF-04.PNG" height="75" class="d-inline-block align-top" alt="">
           
        </a>
        
        </logo>
                                        
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto pull-left">
                                               <li class="nav-item active">
                                                    <a class="nav-link " href="index.html"><i class="fa fa-american-sign-language-interpreting text-dark"></i>&nbsp;<b class="text-dark">HEAD-TO-HEAD</b> <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="tournaments.html"><i class="fa fa-trophy text-dark"></i><b class="text-dark">TOURNAMENTS</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="my_games.html"><i class="fa  fa-home text-dark"></i><b class="text-dark">MY GAMES</b></a>
                                                </li>

                                            </ul>
                                            
            <ul class="navbar-nav nav-flex-icons">
              
               
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell text-dark"></i></a>
                     <div class="dropdown-menu dropdown-primary" portlet-body chat-widget" style="overflow-y: auto; width: 230px; height: 300px;"" aria-labelledby="navbarDropdownMenuLink">
                         
                        
                         <a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr><a href="create_tournaments.html"> <span class="small pull-right text-warning">12:23 PM</span><p class="text-dark">Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                        
                         </a><hr>
                        
                        
                </div>
                
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog text-dark"></i></a>
                     <div class="dropdown-menu dropdown-primary " portlet-body chat-widget" style="overflow-y: auto; width: 200px; height: 300px;"" aria-labelledby="navbarDropdownMenuLink">
                        
                         <hr><a href="deposit.html"> <h6 class="text-dark"><i class="fa fa-money"></i>&nbsp;&nbsp;<b class="text-dark">Deposit</b></h6>
                         </a><hr><a href="transaction_history.html"> <h6 class="text-dark"><i class="fa fa-list"></i>&nbsp;<b class="text-dark">Transaction History</b></h6>
                         </a><hr><a href="F.A.Q.html"> <h6 class="text-dark"><i class="fa fa-comment"></i>&nbsp;&nbsp;<b class="text-dark">FAQ</b></h6>
                         </a><hr><a href="account_settings.html"> <h6 class="text-dark"><i class="fa fa-cog"></i>&nbsp;&nbsp;<b class="text-dark">Account Settings</b></h6>
                         </a><hr>
                        
                </div>
                
                </li>
                   
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gamepad text-dark"></i></a>
                        <div class="dropdown-menu dropdown-primary " portlet-body chat-widget" style="overflow-y: auto; width: 230px; height: 220px;"" aria-labelledby="navbarDropdownMenuLink">
                         
                            <a href="#"  data-toggle="modal" data-target="#modalLRForm"><p class="white-text"> <i class="fa fa-american-sign-language-interpreting text-dark"></i>&nbsp;&nbsp;<b class="text-dark">Create match</b></p></a><hr>
                            <a href="create_tournaments.html"  >&nbsp;&nbsp;<p class="text-dark"> <i class="fa fa-trophy text-dark"></i>&nbsp;&nbsp;<b class="text-dark">Tournament</b></p></a><hr>
                </div>
                
                </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.html"><i class="fa  fa-user text-dark"></i></a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link"><i class="far fa-money-bill-alt text-dark"></i>&nbsp;<u><b class="text-dark">$ 6.70</b></u></a>
                    
                     
                </li>
            </ul>
            
        </div>
        <button class="navbar-toggler btn-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
       </nav>
    
</header>">
             <a class="nav-link js-scroll-trigger"  href="{{ url('/') }}">Admin Home</a>
           </li>
        
           <li class="nav-item">
           
             <a class="nav-link js-scroll-trigger" href="{{route('logout') }}">{{ __('Logout') }}</a>
             <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
           </li>
          @elseif(Auth::user()->isGuest())
         

           @else
               I don't have any records!
           @endif
@endauth





@unless (Auth::check())

@endunless -->
  
