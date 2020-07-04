

@extends('layouts.master')

@section('content')

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Members</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">YMC Members</li>
								</ul>
							</div>
							{{-- <div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Mew Registration</a>
							</div> --}}
						</div>
					</div>
					<!-- /Page Header -->


                    <div class="row">

                            <div class="col-sm-12">
                                <div>

                                    @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Contact</th>
                                            <th>Occupation</th>
											<th>Hometown</th>
                                            <th>Address</th>
                                            <th>Emergence Contact</th>
                                            <th>Relationship</th>
                                            <th>Skill</th>
                                            <th>Branch</th>
                                            <th>M_Type</th>
                                            <th>YMC_Programme</th>
                                            <th>WHY_YMC</th>
											<th>HOW_YMC</th>
                                            <th>Passport Picture</th>


											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
                                            @if (count($clients)>0)
                                                 @foreach ($clients as $client )
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets\img\profiles\driver.png" alt=""></a>
													{{$client->name}}
												</h2>
                                            </td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->date_of_birth}}</td>
                                            <td>{{$client->gender}}</td>
											<td>{{$client->contact}}</td>
											<td>{{$client->occupation}}</td>
											<td>{{$client->hometown}}</td>
                                            <td>{{$client->address}}</td>

                                            <td>{{$client->emergency_contact}}</td>
                                            <td>{{$client->relationship}}</td>
                                            <td>{{$client->skill}}</td>
											<td>{{$client->branch}}</td>
											<td>{{$client->membership}}</td>
											<td>{{$client->ever_attended}}</td>
                                            <td>{{$client->why_member}}</td>
                                            <td>{{$client->how_ymca}}</td>
                                            <td><a target="_blank" href="{{ asset('img/' . $client->passport_picture) }}">Download Picture</a></td>

											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														{{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a> --}}
                                                    <a class="dropdown-item" href="{{route('client.delete',[$client->id])}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
                                        </tr>

                                        @endforeach @else @endif


									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Select Staff</label>
												<select class="select">
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<label>Net Salary</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<h4 class="text-primary">Earnings</h4>
											<div class="form-group">
												<label>Basic</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>DA(40%)</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>HRA(15%)</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Allowance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
											<div class="add-more">
												<a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
											</div>
										</div>
										<div class="col-sm-6">
											<h4 class="text-primary">Deductions</h4>
											<div class="form-group">
												<label>TDS</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>ESI</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>PF</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Leave</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Prof. Tax</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Labour Welfare</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
											<div class="add-more">
												<a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Salary Modal -->

				<!-- Edit Salary Modal -->
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Select Staff</label>
												<select class="select">
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<label>Net Salary</label>
											<input class="form-control" type="text" value="$4000">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<h4 class="text-primary">Earnings</h4>
											<div class="form-group">
												<label>Basic</label>
												<input class="form-control" type="text" value="$6500">
											</div>
											<div class="form-group">
												<label>DA(40%)</label>
												<input class="form-control" type="text" value="$2000">
											</div>
											<div class="form-group">
												<label>HRA(15%)</label>
												<input class="form-control" type="text" value="$700">
											</div>
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="text" value="$70">
											</div>
											<div class="form-group">
												<label>Allowance</label>
												<input class="form-control" type="text" value="$30">
											</div>
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<h4 class="text-primary">Deductions</h4>
											<div class="form-group">
												<label>TDS</label>
												<input class="form-control" type="text" value="$300">
											</div>
											<div class="form-group">
												<label>ESI</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>PF</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>Leave</label>
												<input class="form-control" type="text" value="$250">
											</div>
											<div class="form-group">
												<label>Prof. Tax</label>
												<input class="form-control" type="text" value="$110">
											</div>
											<div class="form-group">
												<label>Labour Welfare</label>
												<input class="form-control" type="text" value="$10">
											</div>
											<div class="form-group">
												<label>Fund</label>
												<input class="form-control" type="text" value="$40">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text" value="$15">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Salary Modal -->

				<!-- Delete Salary Modal -->
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Salary Modal -->

            </div>
			<!-- /Page Wrapper -->

            @endsection
