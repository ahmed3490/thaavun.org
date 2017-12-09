@extends('layouts.app')
@section('content')

      <div class="panel panel-default">

      <div class="panel-heading" style=  "font-family:Faruma; font-size: 1.8em;text-align:center">

            ލިޔުންތައް 

       </div>

           <div class="panel-body">
                  <table class="table table-hover">
            <thead>
                           
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ކުނިވަށި</th>
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ބަދަލު ކުރަން</th>
              <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ސުރުޙީ</th>
              <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ޕޯސްޓު ފޮޓޯ </th>

            </thead>


           <tbody> 
           
                  @if($posts->count() > 0  )
                        @foreach($posts as $post)                     
                <tr>
                    <td style=  "font-family:Faruma; font-size: 1.4em;text-align:center;"><a href="{{route('post.delete', ['id' => $post->id])}}" class="btn btn-xs btn-danger">ކުނިވަށި</a></td>                   
                    <td style=  "font-family:Faruma; font-size: 1.4em;text-align:center;"><a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-xs btn-info" >ބަދަލުކުރަން</a> </td>
                    <td style=  "font-family:Faruma; font-size: 1.4em;text-align:center;">{{$post->title}}</td>
                    <td style=  "font-family:Faruma; font-size: 1.1em;text-align:center;"><img src="{{$post->featured}}"  width="50px" height="50px"></td>

                </tr>
                           
                  @endforeach

                      @else

                      <tr>                  
                        
                        <th  style=  "font-family:Faruma; font-size: 1.2em;" class="text-center"colspan="5"> <br>އެއްވެސް ލިޔުމެއް ނެތް</th>
    
                     </tr>

                      @endif      


           









            </tbody>

</table>
</div>
</div>
















@stop
