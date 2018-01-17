
                                @foreach($agenda as $value)
                                <li>
                                    <div class="schedule-title">
                                        <span class="time">{{$value->start_date}} To {{$value->end_date}}</span>
                                        <span class="title">{{$value->title}}</span>
                                    </div>
                                    
                                    <div class="schedule-text">
                                        <p>
                                            {{$value->address}}
                                        </p>
                                        <div class="schedule-text">
                                        <p>
                                            {{$value->description}}
                                    </div>
                                    
                                    <div class="marker-pin">
                                        <div class="top"></div>
                                        <div class="middle"></div>
                                        <div class="bottom"></div>
                                    </div>
                                </li>
                                 @endforeach
                                <!--end of individual schedule item-->
                               
   
   
                              
                                
                            </ul>
                                        </div>
                                @foreach($agendatwo as $value)
                                <li>
                                    <div class="schedule-title">
                                        <span class="time">{{$value->start_date}} To {{$value->end_date}}</span>
                                        <span class="title">{{$value->title}}</span>
                                    </div>
                                    
                                    <div class="schedule-text">
                                        <p>
                                            {{$value->address}}
                                        </p>
                                        <div class="schedule-text">
                                        <p>
                                            {{$value->description}}
                                    </div>
                                    
                                    <div class="marker-pin">
                                        <div class="top"></div>
                                        <div class="middle"></div>
                                        <div class="bottom"></div>
                                    </div>
                                </li>
                                 @endforeach
   
                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div><!--end of row-->
                </div><!--end of container-->
            </section>

            //////////////////////////////////////////////////////
             <section class="contact-tweets" style="padding-bottom: 0px;padding-top:0px;background:#fff;">
                
              
                

                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                        <li class="active">
                                            <a href="#tab_default_3" data-toggle="tab">
                                            Day 1 </a>
                                        </li>
                                        <li>
                                            <a href="#tab_default_4" data-toggle="tab">
                                            Day 2 </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_default_3">
                                           <ul class="schedule-overview">
                                              <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;">
                                                    <img src="assets/img/serena.jpg" class="image-responsive">
                                                    <div class="map-holder col-md-6 col-sm-4">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15949.973688827215!2d30.0625956!3d-1.9560688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89ecc5103116a521!2sKigali+Serena+Hotel!5e0!3m2!1sen!2srw!4v1480932838027" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                                </div>
                                           </ul>
                                           </div>
                                          <div class="tab-pane active" id="tab_default_4">
                                           <ul class="schedule-overview">
                                           hello
                                           </ul>
                                           </div> 
                                    </div>
            </section>