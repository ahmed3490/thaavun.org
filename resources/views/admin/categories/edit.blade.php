@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

<div class="panel panel-default">
<div class="panel-heading">

<div style= "font-family:faruma; font-size: 1.4em;" class= "text-center">ބާވަތްް :
{{$category->name}}
</div>

     </div>


<div class="panel-body">
    <form action="{{ route('category.update',['id' => $category->id])}}"  method="post"  enctype= "multipart/form-data" >
     {{csrf_field()}}
<div class="form-group"> 
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="name"     class = "text-right"               >:ބާވަތުގެ ނަން</p>
        <input style=  "font-family:faruma; font-size: 1.4em; text-align:right; " type="text" name= "name" class="form-control" value="{{$category->name}}">
</div>


<div class="form-group">
<div class="text-center">
        <button style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em; text-align:center;" class="btn btn-success" type="submit">ބާވަތް ބަދަލު ކުރޭ</button>
</div>   
</div>

</div>
</div>

</form>
</div>
</div>


















 @stop