




@extends('website.SeekerPanel.Layout.sidebar')
@section('seeker_side')


<section class="section__main">
  
 
  
  <h2 class="text-2xl mb-5 txt-right">اضافة عملك </h2>
  <div class="myform_body">
    
  <form action="">
  
    <section class=" right bg-white porto ">
      <div class="input-container">
        <label for="name">اسم العمل</label>
        <input type="text" />
      </div>

      <div class="relative border-none w-full py-4 ">
        <select name="section" class="text-gray-600 text-right appearance-none py-2.5 border-none bg-gray-100 inline-block rounded leading-tight " style="width: 100%">
          
          <option class="pt-6" >1</option>
          <option class="pt-6" >1</option>
          <option class="pt-6" >1</option>
      
        </select>
     
 
</div>
  
<button class="activee btn"> اضافة</button>
    </section>
 
  </form>
  </div>
</div>

  </section>



  @endsection
