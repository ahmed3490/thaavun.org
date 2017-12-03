@extends('layouts.app')

 @section('content')

@if(count($errors) > 0  )

<ul class="list-group">
     @foreach($errors->all() as $error  )

             <li class="list-group-item text-danger">
             
                   {{$error}}
             </li>
     @endforeach

</ul>

@endif

<div class="panel panel-default">
<div class="panel-heading">
      
<h5 style= "font-family:Mv_Iyyu_Normal; font-size: 1.4em;"class = "text-center" >އާ ލިޔުމެއް ހަދާ</h5>
       

</div>

<div class="panel-body">

<form action="{{ route('posts.store')}}"  method="post"  enctype= "multipart/form-data" >

{{csrf_field()}}

     <div class="form-group"> 
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="title"class = "text-right"               >:ސުރުޙީ</p>
        <input type="text" name= "title" class="form-control">
       </div>


    <div class="form-group">
        <p  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="featured" class = "text-right"    >:ޕޯސްޓް ފޮޓޯ</p>
        <input type="file" name= "featured" class="form-control">
    </div>


    <div class="form-group">
        <p  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="content" class = "text-right" >:ލިޔުން</p>
        <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
    </div>

    
    <div class="form-group">

    <div class="text-center">
       
    <button style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;  text-align:center;" class="btn btn-success" type = "submit">ލިޔުން ސޭވް</button>  
    
  
    
    
    </div>
    </div>




</form>
</div>


</div>


















 @stop