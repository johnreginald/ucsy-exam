@extends('layout')

@section('content')	
<div class="container mt20 mb20">
	<div class="row">
		<div class="text-center">			

			<div class="hidden-xs hidden-sm">
				<p class="shadow raj twhite uppercase size65">University of Computer Studies</p>
				<p class="shadow raj twhite uppercase size36">( Yangon )</p>
				<p class="shadow raj twhite uppercase size36">Exam Result of Year 2015</p>				
			</div>

			<div class="hidden-md hidden-lg">
				<p class="shadow raj twhite uppercase size36">University of Computer Studies</p>
				<p class="shadow raj twhite uppercase size18">( Yangon )</p>
				<p class="shadow raj twhite uppercase size18">Exam Result of Year 2015</p>				
			</div>

			<p class="size20 text-center">			
				<a target="_blank" href="{{ url('term') }}" class="twhite">Credits, Terms and Conditions</a>
			</p>

			<br>

			<div class="col-md-4"></div>

			<div class="col-md-4">

				<form action="{{ url('result') }}" method="POST" role="form form-inline">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">

					<div class="form-group">						
						<input name="roll_no" type="number" class="form-control input-lg" placeholder="Type Your Roll Number" required="required">
					</div>
					
					<div class="form-group">
						<select name="major" class="form-control input-lg" required="required">
							<option value="cs" selected="selected">Computer Science</option>
							<option value="ct">Computer Technology</option>
						</select>
					</div>

					<div class="form-group">
						<select name="year" class="form-control input-lg" required="required">
							<option value="1" selected="selected">First Year</option>
							<option value="2">Second Year</option>
							<option value="3">Third Year</option>
							<option value="4">Fourth Year</option>
							<option value="5">Master</option>
						</select>
					</div>

					<div class="checkbox text-left">
						<label class="shadow raj twhite uppercase size20">
							<input type="checkbox" name="external">
							External Year ?
						</label>
					</div>

					<button type="submit" class="btn btn-lg btn-primary">Search</button>
				</form>
			</div>

			<div class="col-md-4"></div>			

		</div>
	</div>		
</div>
@stop