@extends('layouts.main')
@section('content')
<div id="content">
	@include('includes.header')
	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block "></div>
					<div class="col-lg-12">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Edit</h1>
							</div>
							<form method="POST" action="{{ route('update',['EmpID' => $emp->EmpID]) }}">
								@csrf
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $emp->EmpName }}" required autocomplete="name" autofocus placeholder="">

										@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-6">
										<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="position" value="{{ $emp->Designation }}" required autocomplete="email" placeholder="">

										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										
										<input id="password" type="text" value="{{ $emp->Department }}" class="form-control @error('password') is-invalid @enderror" name="dept" required autocomplete="new-password" placeholder="">

										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-6">
										<?php 
                  							$temp = explode(' ',$emp->JoiningDate);
                						?>
										<input id="password-confirm" type="text" value="{{ $temp[0] }}" placeholder="" class="form-control" name="dateofjoin" required autocomplete="new-password">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<input id="salary" type="text" value="{{ $emp->salary }}" placeholder="" class="form-control" name="salary" required autocomplete="new-password">
									</div>	
									<div class="col-sm-6">
										<input id="email" type="text" value="{{ $emp->email }}" placeholder="" class="form-control" name="email" required autocomplete="new-password">
									</div>
								</div>
								<button type="submit" class="btn btn-primary">
									{{ __('Update') }}
								</button>
								
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


@stop