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
<div class="panel-heading" style=  "font-family:Faruma; font-size: 1.8em;text-align:center"       >
އާ ލިޔުމެއް ހަދާ
</div>
       
<div class="panel-body">
<form action="{{ route('posts.store')}}"  method="post"  enctype= "multipart/form-data" >
{{csrf_field()}}

     <div class="form-group"> 
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="title"class = "text-right">:ސުރުޙީ</p>
        <input  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em; text-align:right;"   type="text" name= "title" class="form-control">
       </div>


    <div class="form-group">
        <p  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="featured" class = "text-right">:ޕޯސްޓް ފޮޓޯ</p>
        <input type="file" name= "featured" class="form-control">
    </div>


        <div class="form-group">
        <p style= "font-family:faruma; font-size:1.4em; "  for="category" class = "text-right">:ބާވަތެއް ނަންގަވާ</p>
        <div style= "font-family:faruma;"  >        
        <select  name="category_id" id="category" class="form-control">
          @foreach($categories as $category)
          <option style= "float:right"   value="{{ $category->id}}" >{{$category->name}}</option>
          @endforeach
        </select>
        </div>
         <br>


        <div class="form-group" style="text-align:right" >
        <p  style= "font-family:Mv_Iyyu_Normal; font-size: 1.6em;"  class = "text-right"   for="tags">: ޓެގް ނަންގަވާ</p>
        @foreach($tags as $tag)
        <div class="checkbox" style= "text-align:center;">
        <p style="float:center; font-size: 1.2em;font-family:faruma; ">{{$tag->tag}}</p><label  style="float:center; font-size: 1.2em;font-family:faruma; "><input style="float:right;font-family:faruma;" name= "tags[]"  type="checkbox"  value="{{$tag->id}}"></label>
        </div>      
        @endforeach
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