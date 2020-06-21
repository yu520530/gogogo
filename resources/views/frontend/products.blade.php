@extends('frontend.layout.master')
@section('title','Home')
@section('content')
  <section class="page-section">
    <div class="container" style="color:white;">
        @csrf
      <p><h1>個人資料</h1></p>
      <ul>
        <li><h3>暱稱：{{session("name")}}<h3></li>
        <li><h3>帳號：{{session("ac")}}<h3></li>
      </ul>
    </div>

  </section>
@endsection()
