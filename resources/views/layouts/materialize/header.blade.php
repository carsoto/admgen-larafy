   <!-- START HEADER -->
        <header id="header" class="page-topbar">
            <!-- start header nav-->
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <ul class="left">                      
                            <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{{asset('materialize/images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                        </ul>
                        <div class="header-search-wrapper hide-on-med-and-down">
                            <i class="mdi-action-search"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                        </div>
                        <ul class="right hide-on-med-and-down">

                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><i class="mdi-action-language"></i></a>
                            </li>

                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                                </a>
                            </li>                        
                            <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                            </li>
                        </ul>
                        <!-- translation-button -->
                        @if(config('config.multilingual') && Entrust::can('change-language'))  
                        <ul id="translation-dropdown" class="dropdown-content">
                            <li class="active"><a href="#" style="color:white;cursor:default;">{!! config('lang.'.$default_language.'.language').' ('.$default_language.')' !!}</a></li>
                            @foreach(config('lang') as $key => $language)
                            @if($default_language != $key)
                            <li><a href="/set-language/{{$key}}">{!! $language['language']." (".$key.")" !!}</a></li>
                            @endif
                            @endforeach

                        </ul>
                        @endif
                        <!-- translation-button -->



                        <!-- translation-button -->
                        <!--   @if(config('config.multilingual') && Entrust::can('change-language'))  
                          <ul id="translation-dropdown" class="dropdown-content">
                              <li>
                                  <a href="#!"><img src="{{asset('materialize/images/flag-icons/United-States.png')}}" alt="English" />  <span class="language-select">English</span></a>
                              </li>
                              <li>
                                  <a href="#!"><img src="{{asset('materialize/images/flag-icons/France.png')}}" alt="French" />  <span class="language-select">French</span></a>
                              </li>
                              <li>
                                  <a href="#!"><img src="{{asset('materialize/images/flag-icons/China.png')}}" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                              </li>
                              <li>
                                  <a href="#!"><img src="{{asset('materialize/images/flag-icons/Germany.png')}}" alt="German" />  <span class="language-select">German</span></a>
                              </li>
  
                          </ul>
                            @endif-->
                        <!-- translation-button -->



                        <!-- notifications-dropdown -->
                        <ul id="notifications-dropdown" class="dropdown-content">
                            <li>
                                <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                            </li>
                            <li>
                                <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                            </li>
                            <li>
                                <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                            </li>
                            <li>
                                <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                            </li>
                            <li>
                                <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end header nav-->
        </header>
        <!-- END HEADER -->