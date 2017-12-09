@extends('layouts.app')
@section('content')

<div class="panel panel-default">

<div class="panel-heading" style=  "font-family:Faruma; font-size: 1.8em;text-align:center"       >

      ޓެގްސް

</div>

<div class="panel-body">

<table class="table table-hover">

            <thead>
                           
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ފޮހެލަން</th>
              <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ބަދަލު ކުރަން</th>
              <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ޓެގް ނަން</th>

            </thead>


           <tbody>

           @if($tags->count() > 0 )

           @foreach($tags as $tag)
                   <tr>                  
                         <td  class = "text-center"> <a href="{{ route('tag.delete',['id' => $tag->id])  }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                         <td class = "text-center"><a href="{{ route('tag.edit',['id' => $tag->id])  }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span></a></td>
                         <td style=  "font-family:Faruma; font-size: 1.4em;text-align:center;"> {{$tag->tag}} </td>                        
                   </tr>

            @endforeach
          @else

                     <tr>                  
                        
                        <th  style=  "font-family:Faruma; font-size: 1.2em;" class="text-center"colspan="5"> <br>އެއްވެސް ޓެގް ނެތް</th>
    
                     </tr>

          @endif

           
            </tbody>

</table>
</div>
</div>
















@stop
