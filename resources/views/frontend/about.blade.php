@extends('frontend.layout.master')
@section('title','Home')
@section('content')
  <section class="page-section about-heading">
    <div class="container">     
      <form method="post" action="{{url('insertmessage')}}">
      @csrf
        <div class="form-group">
          <label for="title" style="color:white;">標題</label>
          <input type="text" class="form-control" id="title" name="t_text" placeholder="write something">
        </div>
         <div class="form-group">
          <label for="content" style="color:white;">內容</label>
          <input type="text" class="form-control" id="content" name="c_text" placeholder="write something">
         </div>
         <div class="form-group">
          <input type="submit" class="form-submit" id="submit" placeholder="write something">
         </div>
     </form>
   </div>
  </section>
@endsection
