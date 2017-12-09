@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

<div class="panel panel-default">
<div class="panel-heading">
<script>

     
    
    
    
    </script>
<div style= "font-family:faruma; font-size: 1.4em;" class= "text-center">  ޓެގް ބަދަލުކުރުން:
{{$tag->tag}}
</div>

     </div>


<div class="panel-body">
    <form action="{{ route('tag.update',['id' => $tag->id])}}"  method="post"  enctype= "multipart/form-data" >
     {{csrf_field()}}
<div class="form-group">  
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="name"     class = "text-right"               >:ޓެގް ނަން</p>
        <input style=  "font-family:faruma; font-size: 1.4em; text-align:right; " type="text" name= "tag" class="form-control" value="{{$tag->tag}}">
</div>


<div class="form-group">
<div class="text-center">
        <button style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em; text-align:center;" class="btn btn-success" type="submit">ޓެގް ބަދަލު ކުރޭ</button>
</div>   
</div>

</div>
</div>

</form>
</div>
</div>


















 @stop