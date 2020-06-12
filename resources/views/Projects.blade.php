@extends('layouts.app')
@section('content')
 <h3 class="text-center">Projects</h3> 
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills text-center w-50 rounded-circle" style="">
            <li class="nav-item" style=""> <a href="" class="nav-link" data-toggle="pill" data-target="#Firsttabtwo">Add Project</a> </li>
            <li class="nav-item"> <a href="" class="nav-link active" data-toggle="pill" data-target="#Firsttabone">Project List</a> </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade active show" id="Firsttabone" role="tabpanel">
              <div class="table-responsive">
                <div class="table-responsive">
                  <table class="table table-hover table-borderless table-light " id="tableMain">
                    <thead class="thead-dark">
                      <tr>
                        <th class="text-center">Code</th>
                        <th class="text-center">Description</th>
                        <th class="w-25 text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($projects as $i)
                      <tr>
                        <th class="text-center">{{$i->id}}</th>
                        <td class="text-center" contenteditable="true">{{$i->ProjectName}}</td>
                        <td class="text-center"><a class="btn btn-primary" href="#ProjectModal" data-toggle="modal">View Project Details</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Firsttabtwo" role="tabpanel">
              <form  action="{{route('CreateProject')}}">
                <div class="form-group row"> <label for="" class="col-2 col-form-label">Project Name</label>
                  <div class="col-10">
                    <input type="text" name ="ProjectName" class="form-control w-75" required="required"> </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ProjectModal" style="">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="">Project Details</h3> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
        </div>
        <div class="modal-body">
          <div class="row  pi-draggable" style="">
            <div class="col-3 col-md-2" style="">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item"> <a href="" class="nav-link" data-toggle="pill" data-target="#Secondtabone">Add Block </a> </li>
                <li class="nav-item"> <a class="nav-link active" href="" data-toggle="pill" data-target="#Secondtabtwo">Update Details </a> </li>
              </ul>
            </div>
            <div class="col-9 col-md-10" style="">
              <div class="tab-content">
                <div class="tab-pane fade" id="Secondtabone" role="tabpanel">
                  <form id="c_form-h" class="pi-draggable">
                    <div class="form-group row"> <label for="inputBlock" class="col-2 col-form-label text-center" style="">Block</label>
                      <div class="col-10 col-md-3" style="">
                        <input type="email" class="form-control w-100" id="inputBlock" required="required"> </div>
                    </div>
                    <div class="form-group row"> <label for="inputBlock" class="col-2 col-form-label text-center" style="">Type</label>
                      <select class="form-control w-25" id="sel1">
                        <option value="Ordinary User">Socialized</option>
                        <option value="Admin">Economic</option>
                      </select></div>
                    <div class="form-group row" style=""> <label class="col-2 col-form-label text-center" for="inputQuantity" style="">Quantity</label>
                      <div class="col-10 col-md-3" style="">
                        <input type="number" min="1" class="form-control" id="inputQuantity" required="required"> </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Block</button>
                  </form>
                  <div class="table-responsive pi-draggable">
                    <table class="table table-bordered " id="tableModalBlock">
                      <thead class="thead-dark">
                        <tr>
                          <th>Block</th>
                          <th>Lot</th>
                          <th>Description</th>
                          <th>Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>1</th>
                          <td>1</td>
                          <td>Samantha Japan</td>
                          <td>Socialized</td>
                        </tr>
                        <tr>
                          <th>1</th>
                          <td>2</td>
                          <td>Samantha Japan</td>
                          <td>Economic</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade active show" id="Secondtabtwo" role="tabpanel">
                  <h2 class="pi-draggable text-center" >Project Rename </h2>

                  <form >

                    <div class="form-group row"> <label for="" class="col-2 col-form-label">Project Name</label>
                      <div class="col-10">
                        <input type="text" class="form-control" value="Samantha Japan"> </div>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary">Rename Project</button>
                    </div>
                  </form>
                  <h2 class="pi-draggable text-center" draggable="true">Lot Details </h2>
                  <div class="table-responsivee">
                    <table class="table table-hover table-light table-bordered" id="tableModalUpdate">
                      <thead class="thead-dark">
                        <tr>
                          <th class="">Block</th>
                          <th>Lot</th>
                          <th>Title No.</th>
                          <th>Lot Area (Sqm)</th>
                          <th>Borrower</th>
                          <th class="w-50">Package Price</th>
                          <th>Type</th>
                          <th>Remarks</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>1</th>
                          <td>1</td>
                          <td contenteditable="true">BL1L1-SMJPN</td>
                          <td contenteditable="true"></td>
                          <td contenteditable="true"></td>
                          <td contenteditable="true">
                          </td>
                          <td><select>
                              <option>Socialize</option>
                              <option>Economic</option>
                            </select></td>
                          <td contenteditable="true">
                            <select>
                              <option>Occupied</option>
                              <option>Unoccupied</option>
                            </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
      </div>
    </div>
  </div>
@endsection