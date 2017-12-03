@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

<div class="panel panel-default">
<div class="panel-heading">
     <h5 style= "font-family:Mv_Iyyu_Normal; font-size: 1.4em;"class = "text-center"  >އާ ކެޓްގަރީ ހަދާ</h5>
</div>

<div class="panel-body">
     <form action="{{ route('category.store')}}"  method="post"  enctype= "multipart/form-data" >
     {{csrf_field()}}

<div class="form-group"> 
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="name"class = "text-right"               >:ބާވަތުގެ ނަން</p>
        <input style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;text-align:right;    "type="text" name= "name" class="form-control">
</div>

<div class="form-group">
<div class="text-center">
      <button style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em; text-align:center;" class="btn btn-success" type="submit">ކެޓްގަރީ ސޭވް</button> 
</div>   
  
</div>
</div>
</div>




</form>
</div>


</div>


















 @stop