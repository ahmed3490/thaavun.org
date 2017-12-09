@extends('layouts.app')
@section('content')

      <div class="panel panel-default">
      <div class="panel-heading" style=  "font-family:Faruma; font-size: 1.8em;text-align:center">
           މެމްބަރުން
       </div>

           <div class="panel-body">
                  <table class="table table-hover">
            <thead class= "text-center">          
             <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center"class= "text-center"> ފޮޓޯ </th>
              <th style=  "font-family:Faruma; font-size: 1.4em;text-align:center"class= "text-center" >ނަން</th>
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center"class= "text-center">ހުއްދަތައް</th>
              <th  style=  "font-family:Faruma; font-size: 1.4em;text-align:center" class= "text-center">ފޮހެލާ</th>
            </thead>
                 
                 <tbody> 
                  @if($users->count() > 0  )
                  @foreach($users as $user)                     
                <tr>
                    <td><img src="{{ asset($user->profile->avatar) }}" alt=""   width="60px" height= "60px" style="border-radius: 50%;"></td>
                    <td  style=  "font-family:Faruma; font-size: 1.4em;"class= "text-center">{{$user->name}}</td>
                    <td style=  "font-family:Faruma; font-size: 1.4em;"class= "text-center">

                    @if($user->admin)                               
                  <a  style=   "font-size: 0.8em;" href="{{route('user.not.admin',['id' => $user->id     ])}}" class="btn btn-danger">ހުއްދަ ބަދަލު ކުރޭ</a>
                    @else
                  <a  style=   "font-size: 0.8em;" href="{{route('user.admin',['id' => $user->id     ])}}" class="btn  btn-success">އެޑްމިން އަށް ހަދާ</a>
                    @endif
                  </td>
                       <td  style=  "font-family:Faruma; font-size: 0.8em;">ފޮހެލާ</td>                   
                  </tr>                           
                    @endforeach
                    @else

                  <tr>                                          
                    <th  style=  "font-family:Faruma; font-size: 1.2em;" class="text-center"colspan="5"> <br>އެއްވެސް ޔޫސަރ އެއް ނެތް</th>
                    </tr>
                    @endif      

        </tbody>
</table>
     </div>
          </div>
















@stop
