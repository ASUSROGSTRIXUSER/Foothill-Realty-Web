@extends('layouts.app')

@auth

@if(auth()->user()->isAdmin == 0 )           
@section('content')

 <div class="py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="card"> <img class="card-img mx-auto" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
         </div>
         @if(auth()->user()->RequestoAdminMod == 0)
         <button class="btn btn-block btn-secondary" onclick="location.href='UserSideMainSelectRequest.html'" type="button" disabled >Request Materials from Admin</button>
         @else
         <button class="btn btn-block btn-secondary" onclick="location.href='UserSideMainSelectRequest.html'" type="button">Request Materials from Admin</button>
         @endif
       </div>
       <div class="col-md-4">
         <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
        
         @if(auth()->user()->MaterialMod == 0)
         <button class="btn btn-block btn-secondary" onclick="location.href=" type="button" disabled>Materials</button>
         @else
         <button class="btn btn-block btn-secondary" onclick="location.href=" type="button" >Materials</button>
         @endif
      
       </div>
       <div class="col-md-4">
       <div class="card"> 
       <img class="card-img mx-auto" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150" style="">
      </div>
      @if(auth()->user()->ProjectsMod == 0)
      <button class="btn btn-block btn-secondary" onclick="" type="button" disabled>Projects</button>
      @else
      <button class="btn btn-block btn-secondary" onclick="location.href='{{route('ProjectMenu')}}'" type="button" >Projects</button>
      @endif
       </div>
        
     </div>
   </div>
 </div>
 <div class="py-5">
   <div class="container">
     <div class="row">
     <div class="col-md-4">
    <div class="card"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150"> 
         </div>
         @if(auth()->user()->HouseStatMod == 0)
         <button class="btn btn-block btn-secondary" onclick="location.href='HouseStatusMainSelect.html'" type="button" disabled>House Status</button>
         @else
         <button class="btn btn-block btn-secondary" onclick="location.href='HouseStatusMainSelect.html'" type="button" >House Status</button>
         @endif
        
    </div>
       <div class="col-md-4">

       <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
         
          @if(auth()->user()->ReportsMod == 0)
         <button class="btn btn-block btn-secondary" onclick="location.href='HouseStatusMainSelect.html'" type="button" disabled>Reports</button>
         @else
         <button class="btn btn-block btn-secondary" onclick="location.href='HouseStatusMainSelect.html'" type="button" >Reports</button>
         @endif
       </div>
       
     
    <div class="col-md-4">
   
      <div class="card"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
         </div>
         @if(auth()->user()->UserManageMod == 0)
         <button class="btn btn-block btn-secondary" onclick="location.href='{{route('UserManagement')}}'" type="button" disabled>User Management</button>
         @else
         <button class="btn btn-block btn-secondary" onclick="location.href='{{route('UserManagement')}}'" type="button" >User Management</button>
         @endif
        </div>
   

     </div>
   </div>
 </div>
 

 @endsection
 @else
 @section('content')


 <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card bg-dark"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
          </div><a class="btn btn-block btn-secondary" href="Materials.html">Materials</a>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
          </div><a class="btn text-center btn-block btn-secondary" href="RequestMain.html">Requested Materials from Users</a>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
          </div><a class="btn btn-block btn-secondary" href="AdminReports.html">Reports</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
	  <div class="col-md-4">
          <div class="card"> <img class="card-img mx-auto" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150" style="">
          </div><a class="btn btn-block btn-secondary" href="{{route('ProjectMenu')}}">Projects</a>
        </div>
        <div class="col-md-4">
         <div class="card"> <img class="card-img mx-auto" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150" style="">
          </div><a class="btn btn-block btn-secondary" href="HouseStatusMainSelect.html">House Status</a>
        </div>	
        <div class="col-md-4">
          <div class="card"> <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image" height="150">
          </div><a class="btn btn-block btn-secondary" href="{{ route('UserManagement') }}">User Management</a>
        </div>
      </div>
      
    </div>
  </div>

@endsection

 @endif
@endauth 

  