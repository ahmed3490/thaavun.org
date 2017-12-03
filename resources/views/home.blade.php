@extends('layouts.app')

@section('content')


            <div class="panel panel-default">
                <div style=  "font-family:Faruma; font-size: 2.4em; text-align:center;" class="panel-heading">ޑޭޝްބޯޑް</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                   <div class="text-center">
                   
                   <h5 style=  "font-family:Faruma; font-size: 2.4em;">މަރުހަބާ
                   <ul class="nav navbar">
                  
                      
                   <li  class="dropdown"><a href="#"  role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class=""></span> </a>
                   
                         
                   
                          
                   
                   </div>
                  
                   </ul>
                   </h5>
                   
                   
                   
                   
          
                </div>
            </div>
 



           

                              



@endsection
