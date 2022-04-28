




@extends('website.SeekerPanel.Layout.sidebar')
@section('seeker_side')


<section class="section__main">

<div class="section__main text-right">
  
 
  
  <h2 class="text-2xl mb-5 txt-right">اضافة مشروع </h2>
  <div class="myform_body">
    
    <form action="/seeker/projects" method="POST" >
      @csrf  
    <section class="  bg-white porto " style="width:100%">
      <div class="input-container">
        <label for="name">اسم المشروع</label>
        <input type="text" name="title" />
      </div>

      <div class="input-container">
        <label for="name">مدة التنفيذ </label>
        <input type="text" name="dead_line" />
      </div>


      <div class="input-container">
        <label for="name">السعر    </label>
        <input type="text" name="price" />
      </div>



      <div class="relative border-none w-full py-4 ">
        <select name="skill" class="text-gray-600 text-right appearance-none py-2.5 border-none bg-gray-100 inline-block rounded leading-tight " style="width: 100%">
          
          <option class="pt-6" >جرافكس</option>
          <option class="pt-6" >CSS</option>
          <option class="pt-6" >HTML</option>
      
        </select>
     
 
</div>


<div class="input-container">
  <label for="name">تفاصيل المشروع  </label>
  <textarea type="text"  name="describe"></textarea>
</div>
  
<div class="banner__cta mx my">
  <button type="submit"class="button  text-white py-4 px-8 a_none bg-success activee">اضافة </button>
</div>
    </section>
 
  </form>
  </div>
</div>

</div>



  @endsection
