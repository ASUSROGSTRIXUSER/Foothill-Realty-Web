@extends('layouts.app')
@section('content')
<div>
<h1 class="text-center"> Module Restriction </h1>   
</div>
<form id="c_form-h" action="{{route('Allowed',['id' => $user->id])}}">
		  <div class="container">
     <div class="form-group row">
    <div class="col">
    <label for="inputBlock" class="col-2 col-form-label text-center">Project Module</label>
    @if($user->ProjectsMod == 0)
    <select class="form-control"  name="ProjectMod">
                            <option value="0" >Disabled</option>
                            <option value="1">Enabled</option>
                            </select>
  @else
  <select class="form-control"  name="ProjectMod">
                            <option value="1" >Enabled</option>
                            <option value="0" >Disabled</option>
                            </select>
    @endif			 	
    </div>

    <div class="col">
    <label for="inputBlock" class="col-2 col-form-label text-center">Material Module</label>
    @if($user->MaterialMod == 0)
    <select class="form-control"  name="MaterialMod">
                            <option value="0" >Disabled</option>
                            <option value="1">Enabled</option>
                            </select>
  @else
  <select class="form-control" name="MaterialMod">
                            <option value="1" >Enabled</option>
                            <option value="0" >Disabled</option>
                            </select>
    @endif
    
	
    </div>
  </div>
  <div class="form-group row">
    <div class="col">
    <label for="inputBlock" class="col-2 col-form-label text-center">User Management Module</label>
    @if($user->UserManageMod == 0)
    <select class="form-control"  name="UserManageMod">
                            <option value="0" >Disabled</option>
                            <option value="1">Enabled</option>
                            </select>
  @else
  <select class="form-control" name="UserManageMod">
                             <option value="1" >Enabled</option>
                            <option value="0" >Disabled</option>
                            </select>
    @endif
	  
    </div>
    <div class="col">
    <label for="inputBlock" class="col-2 col-form-label text-center">Reports Module</label>
    @if($user->ReportsMod == 0)
    <select class="form-control" name="ReportsMod">
                            <option value="0" >Disabled</option>
                            <option value="1">Enabled</option>
                            </select>
  @else
  <select class="form-control"  name="ReportsMod">
                            <option value="1" >Enabled</option>
                            <option value="0" >Disabled</option>
                            </select>
    @endif
    </div>  
  </div>
  <div class="form-group row">
    <div class="col">
    <label for="inputBlock" class="col-2 col-form-label text-center">House Status Module</label>
    @if($user->HouseStatMod == 0)
    <select class="form-control"  name="HouseStatMod">
                            <option value="0" >Disabled</option>
                            <option value="1">Enabled</option>
                            </select>
  @else
  <select class="form-control"  name="HouseStatMod">
                             <option value="1" >Enabled</option>
                            <option value="0" >Disabled</option>
                        
                            </select>
    @endif
	 
    </div>  
  </div>

<div class="form-group row">
<button type="submit" class="btn btn-primary">Confirm</button>
</div>
</form>
@endsection