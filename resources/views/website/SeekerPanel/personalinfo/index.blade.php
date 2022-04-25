




@extends('website.SeekerPanel.Layout.sidebar')
@section('seeker_side')


<section class="section__main">
  
    <div class="bg-primary flex flex-justify-between flex-align-center banner">
        <div class="banner__img">
            {{-- <img src="https://i.ibb.co/vBkwrv5/banner.png" alt="banner"> --}}
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250" height="245" viewBox="0 0 306 306">
            </svg>
                      
          </div>
      <div>
        <h1 class="text-4xl text-white mb-2"> أضف مهاره ليتم </h1>
        <h1 class="text-4xl text-white mb-4">  ايصال الاشعارات لك</h1>
        <div class="banner__cta">
          <button class="button bg-secondary text-white py-4 px-8">اضافة مهاره</button>
        </div>
      </div>
    
    </div>
    <h2 class="text-2xl mb-5 txt-right">البيانات الشخصية</h2>
    <div class="myform_body">
      
    <form action="">
    
      <section class="right bg-white porto">
        <div class="input-container">
          <label for="name">الاسم</label>
          <input type="text" />
        </div>
        <div class="input-container">
          <label for="age" required>اللقب</label>
          <input type="text" />
        </div>
        <div class="input-container">
          <label for="phone"> رقم الهاتف</label>
          <input type="number" />
        </div>
        <div class="input-container">
          <label for="email">الجنس</label>
          <input type="text" />
        </div>
        <div class="input-container">
          <label for="email">الدولة</label>
          <input type="text" />
        </div>
       
      </section>
      <section class="left bg-white porto">
        <label class="container-checkbox">  <span class="check_text"> صاحب مشاريع</span>
  
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <label class="container-checkbox">  <span class="check_text"> منجز خدمة  </span>
        
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
    
        
      
        <div class="input-container">
          <label for="address">التخصص</label>
          <input type="text" />
        </div>
        
        <div class="input-container">
          <label for="address">المسمى الوظيفي</label>
          <input type="text" />
        </div>

        <div class="input-container">
          <label for="comments">النبذه التعريفية</label>
          <textarea name="comments" id=""></textarea>
        </div>
      </section>
    
    </form>
    </div>
  </div>
 
  </section>



  @endsection