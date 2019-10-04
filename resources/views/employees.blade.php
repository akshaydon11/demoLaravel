@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div id="content">

	<!-- Topbar -->
	@include('includes.header')
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">List</h1>


		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>EmpID</th>
								<th>EmpName</th>
								<th>Designation</th>
								<th>Department</th>
								<th>JoiningDate</th>
								<th>Salary</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
		                    <tr>
		                      <th>EmpID</th>
		                      <th>EmpName</th>
		                      <th>Designation</th>
		                      <th>Department</th>	
		                      <th>JoiningDate</th>
		                      <th>Salary</th>
		                      <th>Action</th>
		                    </tr>
		                 </tfoot>
						<tbody>
							@foreach($data as $val)
							<tr>
								<td>{{ $val->EmpID }}</td>
								<td>{{ $val->EmpName }}</td>
								<td>{{ $val->Designation }}</td>
								<td>{{ $val->Department }}</td>
								<td>{{ $val->JoiningDate }}</td>
								<td>{{ $val->salary }}</td>
								<td>
									<a href="{{ route('deleteEmp',['EmpID' => $val->EmpID])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
									<a href="{{ route('editEmp',['EmpID' => $val->EmpID])}}" class="btn btn-info btn-circle"><i class="fas fa-edit"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@stop