@extends('layouts.app')



 @section('content') 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">Registration Management Form</h3>
        </div>
      </div>

  <div class="pi-wrapper pi-draggable">
    <ul class="nav nav-pills">
      <li class="nav-item" style=""> <a href="" class="active nav-link" data-toggle="pill" data-target="#tabone">User Registration Confirmation</a> </li>
      <li class="nav-item"> <a class="nav-link" href="" data-toggle="pill" data-target="#tabtwo">Admin Registration Confirmation</a> </li>
	   <li class="nav-item"> <a class="nav-link" href="" data-toggle="pill" data-target="#tabthree">Registered List</a> </li>
     <li class="nav-item"> <a class="nav-link" href="" data-toggle="pill" data-target="#tabfour">Deactivated List</a> </li>
    </ul>
    <div class="tab-content mt-2">
      <div class="tab-pane fade show active" id="tabone" role="tabpanel" 	style="">
	  <h3 class="text-center">User </h3>
        
     	   <div class="table w-100 ml-auto">
            <table class="table table-bordered table-hover table-sm border-dark border table-light " id="UserRequest">
              <thead class="thead-dark">
                <tr class="">
                  <th>ID</th>
                  <th>Email</th>
                  <th class="text-center">Full Name</th>             
                  <th class="text-center">Action</th>
                </tr>	
              </thead>
              <tbody class="">
              @foreach ($Member as $i)
                <tr>
                  <th class="text-center">{{$i->id}}</th>
                  <th class="text-center">{{$i->email}}</th>
                  <th class="text-center">{{$i->name}}</th>                
                  <td class="text-center"> 
				  <a href = "{{route('ShowModules',['id'=>$i->id])}}" class="btn btn-primary">Module Settings</a>
				  <a class="btn btn-primary" >Reject Request</a> </td>
                </tr>
                @endforeach           
              </tbody>
            </table>
          </div>
      </div>
      <div class="tab-pane fade" id="tabtwo" role="tabpanel">
         <h3 class="text-center">Admin</h3>
		     <div class="table pi-draggable">
            <table class="table table-bordered table-hover table-sm border border-dark table-light " id="AdminRequest">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($Admin as $i)
              <tr>  
                <th class="text-center">{{$i->id}}</th>
                <th class="text-center">{{$i->email}}</th>
                <th class="text-center">{{$i->name}}</th>
                <td class="text-center"> 
          <a class="btn btn-primary" href="{{route('AdminAccept',['id'=>$i->id])}}">Accept</a>
          <a class="btn btn-primary" href="" >Deny</a> </td>
              </tr>
              @endforeach 
              </tbody>
            </table>
          </div>
      </div>
	  <div class="tab-pane fade" id="tabthree" role="tabpanel">
    <h3 class="text-center">Registered List </h3>
        
        <div class="table w-100 ml-auto">
          <table class="table table-bordered table-hover table-sm border-dark border table-light " id="UserRequest">
            <thead class="thead-dark">
              <tr class="">
                <th>ID</th>
                <th>Email</th>
                <th class="text-center">Full Name</th>
                <th class="text-center">Action</th>
              </tr>	
            </thead>
            <tbody class="">
            @foreach ($Registered as $i)
              <tr>
                <th class="text-center">{{$i->id}}</th>
                <th class="text-center">{{$i->email}}</th>
                <th class="text-center">{{$i->name}}</th>
                <td class="text-center"> 
        <a class="btn btn-primary" href ="{{route('ShowModules',['id'=>$i->id])}}">Modify Accessed Modules</a>
        <a class="btn btn-primary" href="{{route('Deactivate',['id'=>$i->id])}}" >Deactivate</a> </td>
              </tr>
              @endforeach           
            </tbody>
          </table>
        </div>
   </div> 

   <div class="tab-pane fade" id="tabfour" role="tabpanel">
    <h3 class="text-center">Deactivated List </h3>
        
        <div class="table w-100 ml-auto">
          <table class="table table-bordered table-hover table-sm border-dark border table-light " id="UserRequest">
            <thead class="thead-dark">
              <tr class="">
                <th>ID</th>
                <th>Email</th>
                <th class="text-center">Full Name</th>
                <th class="text-center">Action</th>
              </tr>	
            </thead>
            <tbody class="">
            @foreach ($Deactivated as $i)
              <tr>
                <th class="text-center">{{$i->id}}</th>
                <th class="text-center">{{$i->email}}</th>
                <th class="text-center">{{$i->name}}</th>
                <td class="text-center"> 
        <a class="btn btn-primary" href="{{route('Reactivate',['id'=>$i->id])}}" >Reactivate</a> </td>
              </tr>
              @endforeach           
            </tbody>
          </table>
        </div>
   </div> 
    </div>
    
  </div>
   </div>

  @endsection