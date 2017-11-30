@extends('layouts.app')
@section('content')

<div class="panel panel-default">
<div class="panel-body">



<table class="table table-hover">
            <thead>
                           
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ފޮހެލަން</th>
               <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ބަދަލު ކުރަން</th>
               <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center">ބާވަތުގެ ނަން</th>
            </thead>


           <tbody> 
           @foreach($categories as $category)
                   <tr>                  
                       

                         

                          
                         <td  class = "text-center"> <a href="{{ route('category.delete',['id' => $category->id])  }}" class="btn btn-xs btn-danger">
                             
                              <span class="glyphicon glyphicon-trash">
                                    
                              </span>
                         
                            </a>
                         
                         </td>
                         
                         <td class = "text-center"><a href="{{ route('category.edit',['id' => $category->id])  }}" class="btn btn-xs btn-info">
                             
                              <span class="glyphicon glyphicon-pencil">
                                    
                              </span>
                         
                            </a>
                         
                         </td>

                         <td style=  "font-family:Faruma; font-size: 1.4em;text-align:center;">                        
                             {{$category->name}}
                         </td>

                   </tr>
           @endforeach
           
            </tbody>

</table>
</div>
</div>
















@stop
