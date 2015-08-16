@extends('homeowner.layout.layout')

@section('content')
        <div class="row mt">
                  <div class="col-md-10 col-md-offset-1">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> {{$title}}
                               <span class="badge">0</span>
                               <span class="pull-right">
                               </span>
                            </h4>
                            <div class="row mt">
                              <div class="col-md-6">
                                <div class="form-panel">
                                    {!! Form::open(['class' => 'form-inline' , 'role' => 'form']) !!}
                                      <div class="form-group">
                                          <i class="fa fa-search"> </i> 

                                      </div>
                                      <div class="form-group">
                                          {!! Form::text('keyword', null ,['class' => 'form-control' , 'placeholder' => 'Search']) !!}
                                      </div>
                                      {!! Form::submit('Submit' , ['class' => 'btn btn-theme']) !!}
                                      {!! Form::close() !!}
                                   </div><!-- /form-panel -->
                                </div>
                                  <div class="col-md-6">
                                      Categories: 
                                      <label class="label  label-success">Paid</label>
                                      <label class="label  label-warning">Pending</label>
                                      <label class="label  label-danger">Overdue</label>
                                  </div>
                              </div>
                            
                              <thead>
                                <tr>
                                  <th><i class="fa fa-bullhorn"></i> Description</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Amount(PHP)</th>
                                  <th><i class="fa fa-bookmark"></i> Date Charged</th>
                                  <th><i class="fa fa-bookmark"></i> Due Date</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Actions</th>
                                  <th></th>
                              </tr>
                              </thead>
   <tbody>
                              <tr>
                                  <td><a href="basic_table.html#"></a></td>
                                  <td class="hidden-phone"></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <label class="label label-mini label-success">Activated</label>
                                    <label class="label label-mini label-danger">Inactive</label>
                                  </td>
                                  <td>
                                     <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>Delete</a>
                                  </td>
                              </tr>
                              </tbody>
                          </table>      

                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->         
              </div><!-- /row -->

              <div class="row mt">
                  <div class="col-md-3 col-md-offset-8">
                     <div class="btn-group btn-group-justified">
                      <div class="btn-group">
                        <button type="button" class="btn">Generate PDF</button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-success">PRINT</button>
                      </div>
                  </div>
              </div>
@stop