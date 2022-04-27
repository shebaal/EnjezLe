




@extends('website.SeekerPanel.Layout.sidebar')
@section('seeker_side')


<section class="section__main">
 
    {{-- <div class="bg-primary flex flex-justify-between flex-align-center banner"> --}}
       
   
          <div class="container_home">
            <div class="display">
              <div class="display-item">
                <div class="card seamus">
                  <div class="card-top"></div>
                  <div class="card-profile">
                    <div class="profile-image">
                    </div>
                  </div>
                  <div class="card-info">
                    <div class="info-title">
                      <h2>سباء الشميري</h2>
                      <div class="rating justify">
                        <div class="rating__number">
                          {{-- <span class="rating__score">4.5</span> --}}
                          <div class="rating__reviews"></div>
                        </div>
                        
                        <span class="rating__stars" style="--rating: 4.58;"></span>
                      </div>
                      
                    </div>
                 
                
                 
                    

                    {{-- Tabs --}}
                    <div class="tabs">
  
                      <input type="radio" id="tab1" name="tab-control" >
                      <input type="radio" id="tab2" name="tab-control">
                      <input type="radio" id="tab3" name="tab-control">  
                      <input type="radio" id="tab4" name="tab-control" checked>
                      <ul>
                        <li title="Features" style="    visibility: hidden;"><label for="tab1" role="button" ><br><span>ملاحظات</span></label></li>
                        <li title="Shipping"  style="    visibility: hidden;"> <label for="tab2" role="button">
                          <br><span>التقيممات</span></label></li>  
                        <li title="Delivery Contents"><label for="tab3" role="button">
                          <br><span>معرض الاعمال</span></label></li>
                        <li title="Returns"><label for="tab4" role="button">
                            <br><span>
                      الملف الشخصي</span></label></li>
                      </ul>
                      
                      <div class="slider"><div class="indicator"></div></div>
                      <div class="content">
                        <section>
                        
                          <div class=" ">
                            <div class="input-container flex justify">
                              <input type="text" />
                              <label for="name">ارسل ملاحظاتك</label>
                             
                            </div>
                       
                            
                           
                          </div>
                        </section>

                        <section>
                          {{-- <div class="rating justify">
                            <div class="rating__number">
                              <span class="rating__score">4.5</span>
                              <div class="rating__reviews"></div>
                            </div>
                            
                            <span class="rating__stars" style="--rating: 4.58;"></span>
                          </div> --}}
                        
                        </section>

                            <section>
                              
                              <div class="cards-list">
  
                                <div class="card2 1">
                                  <div class="card_image"> <img 
                                    src="assests/images/igor-miske-JVSgcV8_vb4-unsplash.jpg"/> </div>
                                  <div class="card_title title-white">
                                    <p  class="text-sm">عرض التفاصيل</p>
                                  </div>
                                </div>
                                
                                  <div class="card2 2">
                                  <div class="card_image">
                                    <img 
                                    src="assests/images/igor-miske-JVSgcV8_vb4-unsplash.jpg" />
                                    </div>
                                  <div class="card_title title-white">
                                    <p  class="text-sm">عرض التفاصيل</p>
                                  </div>
                                </div>
                              
                                <div class="card2 2">
                                  <div class="card_image">
                                    <img 
                                    src="assests/images/igor-miske-JVSgcV8_vb4-unsplash.jpg" />
                                    </div>
                                  <div class="card_title title-white">
                                    <p  class="text-sm">عرض التفاصيل</p>
                                  </div>
                                </div>
                              
                           
                                
                             
                                
                                
                                
                                
                              
                                  
                                
                                
                                </div>
                            </section>
                       
                        <section>
                     
                          <header class="justify">
                            <div class="text-lg py-4">نبذه عني  </div>
                           <div>
                            مهندس معماري _مصمم ديكور

                            خبرة 5 سنوات في مجال التصميم والتشطيبات
                            
                            *المهارات التي اقوم العمل عليها
                            
                         
                            
                            لدي القدرة على فهم افكارك جيداً. يمكنك دائمًا الوثوق بي لإنجاز مشروعك بشكل احترافي.
                            
                            يسعدني تواصلك معي لتنفيذ تصميم مميز وخاص بك.
                           </div>
                          </header>
                        </div>
                    </div>

                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    
    {{-- </div> --}}
  
  </section>



  @endsection
