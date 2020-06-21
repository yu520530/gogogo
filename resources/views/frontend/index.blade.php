



  <!-- Navigation -->

  @extends('frontend.layout.master')
  @section('title', 'Home')
  @section('content')
  <section class="page-section clearfix" style="color:white">
    <div class="container">
        <table class="border">
            @csrf
            @foreach($db as $value)
                <tr>
                    <td>
                        <h3>暱稱：</h3><p>{{$value->name}}</p>
                    </td>
                    <td>
                        <h3>帳號：</h3><p>{{$value->ac}}</p>
                    </td>
                    <td>
                        <h3>標題：</h3><p>{{$value->c_title}}</p>
                    </td>
                    <td>
                        <h3>內容：</h3><p>{{$value->comment}}</p>
                    </td>
                    <td>
                        <h3>日期：</h3><p>{{$value->time}}</p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
  </section>
  @endsection




