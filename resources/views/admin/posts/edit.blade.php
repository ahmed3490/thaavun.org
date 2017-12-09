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
<h5 style= "font-family:Mv_Iyyu_Normal; font-size: 1.4em;"class = "text-center" > ލިޔުން ބަދަލުކުރުން  : {{$post->title}}</h5>
</div>

<div class="panel-body">
<form action="{{ route('post.update',['id'=>$post->id])}}"  method="post"  enctype= "multipart/form-data" >
{{csrf_field()}}

       <div class="form-group"> 
        <p style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="title"class = "text-right">:ސުރުޙީ</p>
        <input  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em; text-align:right;"   type="text" name= "title" class="form-control" value="{{$post->title}}"    >
       </div>


       <div class="form-group">
        <p  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="featured" class = "text-right" >:ޕޯސްޓް ފޮޓޯ</p>
        <input type="file" name= "featured" class="form-control">
       </div>


       <div class="form-group">
        <p style= "font-family:faruma; font-size:1.4em; "  for="category" class = "text-right">:ބާވަތެއް ނަންގަވާ</p>
        <div style= "font-family:faruma;">
        
        
        <select  name="category_id" id="category" class="form-control">
        /**Looping through category table*/
          @foreach($categories as $category)
          <option style= "float:right"   value="{{ $category->id}}" 

          /** 1- Comparing displayed category ids with the category ids in  Category table
              2-  If the category ids matches and if user selects one then it is saved in respectve tables. 
         */
              @if($post->category->id == $category->id)                
                selected               
              @endif
           >{{$category->name}}</option>
          @endforeach

        </select>
        </div>
       

        <div class="form-group" style="text-align:right" >
        <p  style= "font-family:Mv_Iyyu_Normal; font-size: 1.6em;"  class = "text-right"   for="tags">: ޓެގް ނަންގަވާ</p>
        /**Looping through tag table*/
        @foreach($tags as $tag)
        /**creating a checkbox style div*/

        <div class="checkbox" style= "text-align:center;">
        <p style="float:center; font-size: 1.2em;font-family:faruma; ">{{$tag->tag}}</p>
        <label  style="float:center; font-size: 1.2em;font-family:faruma; ">
        <input style="float:right;font-family:faruma;" name= "tags[]"  type="checkbox"  value="{{$tag->id}}" 
        
        /** Saving User Selected Tag or tags in respective tables */
        /** Comparing the current tag id displayed with tag db and saving user selected tags to respective tables  */
        @foreach($post->tags as $t)
                @if($tag->id== $t->id)
                     checked
                @endif
               @endforeach
         ></label>
         </div>      
        @endforeach
        </div>


    <div class="form-group">
    <br><br>
        <p  style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;" for="content" class = "text-right" >:ލިޔުން</p>
        <textarea name="content" id="content" cols="5" rows="5" class="form-control"> {{$post->content}} </textarea>
    </div>

    
    <div class="form-group">
    <div class="text-center">
    <button style=  "font-family:Mv_Iyyu_Normal; font-size: 1.4em;  text-align:center;" class="btn btn-success" type = "submit">  ލިޔުން އަޕްޑޭޓް  ކުރޭ</button>  
    
  
    
    
    </div>
    </div>




</form>
</div>
</div>


















 @stop