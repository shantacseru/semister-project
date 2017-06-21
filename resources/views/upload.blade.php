@extends('layouts.app');

@section('cssfile')

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container">
        
            <div class="col-md-8 col-md-offset-2 well cls1">
              <form action="{{route('file.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" role="form">
         <!-- // <form class="form-horizontal" role="form"> -->

                     {{csrf_field()}} 


                <div class="form-group">
                    <label class="col-md-3 control-label">Name:</label>
                    <div class="col-md-8">
                      <input  class="form-control" type="text" name="menuname" placeholder="Input Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Catagory:</label>
                    <div class="col-md-8">
                       <select name="category" class="form-control">
                       <option value="" disabled selected hidden>Select Catagory.</option>
              <option value="">value1</option>
              <option value="">value2</option>
              <option value="">value3</option>
              <option value="">value4</option>
              <option value="">value5</option>
              <option value="">value6</option>
              <option value="">value7</option>
            </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price:</label>
                    <div class="col-md-8">
                      <input  class="form-control" type="text" name="price" placeholder="Input Item Price">
                    </div>
                </div>






                <div class="form-group">
                    <label class="col-md-3 control-label">Minimum Time To serve:</label>
                    <div class="col-md-8">
                      <input  class="form-control" type="text" name="time" placeholder="Input Minimum Time">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Upload Image:</label>
                    <div class="col-md-8">
                       <input type="file" name="file">
                    </div>
                </div>








              <!--   <div class="form-group" style="margin-left: 190px;">

                 
                     <input type="file" name="file">



                </div>
 -->
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <button class="btn btn-primary pull-right " type="submit" style="width: 140px;"> OK</button>
                    </div>
                </div>
            </form>
    </div>


             






       </div>





@endsection