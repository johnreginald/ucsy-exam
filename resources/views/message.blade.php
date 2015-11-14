@extends('layout')

@section('content')	
	@if($data->isEmpty())
		<div class="container mt50">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="alert alert-info text-center">
					<p>စိတ္ေအးေအးထားပါ။</p>
					<p>မိတ္ေဆြရဲ့ Roll Number ကို Exam Database ထဲမွာ ရွာလုိ႔မေတြ႔ဘူး။</p>
					<p>မိတ္ေဆြ စာေမးပြဲ က်တာလဲ ျဖစ္ႏိုင္သလို</p>
					<p>က်ေနာ္တုိ႔ Data Entry လုပ္တုန္းက ေမ့က်န္ခဲ့တာလဲ ျဖစ္ႏိုင္ပါတယ္။</p>
					<p>ပိုျပီးေသခ်ာေအာင္ UCSY ရဲ့ <a href="http://www.ucsy.edu.mm/ucsy/NewsPage2.do">Official Website</a> ကို သြားၾကည့္လုိက္ပါ။</p>
				
					<br><br>
					<p>There's a Quote</p>
					<hr>
					<p>“I have not failed. I've just found 10,000 ways that won't work.”</p>
					<p>― Thomas A. Edison</p>
				</div>		
			</div>
			<div class="col-md-3"></div>
		</div>
	@else
		<div class="container mt50">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">

				<img src="{{ url('img/success.gif') }}" class="text-center">

				<br>
				<br>

				<div class="alert alert-success">
					<p>ဂုဏ္ယူပါတယ္ မိတ္ေဆြ။ စာေမးပြဲေအာင္ပါတယ္။</p>

					<p>မိတ္ေဆြရဲ့ Roll Number ကို Exam Database ထဲမွာ ရွာလို႔ေတြ ႔ပါတယ္</p>

					<hr>

					@foreach($data as $d)
						<p>Student Name : {{ $d->name }}</p>
						<p>Roll Number : {{ $d->roll_no }}
						@if($d->external)
							( External )
						@endif
						</p>
						<p>Year : 
							@if($d->year == 1)
								First Year
							@elseif($d->year == 2)
								Second Year
							@elseif($d->year == 3)
								Third Year
							@elseif($d->year == 4)
								Fourth Year
							@else
								Master Year
							@endif
						</p>
						<p>Major : 
							@if($d->major == "cs")
								Computer Science
							@else
								Computer Technology
							@endif
						</p>
						
					@endforeach

					<hr>
 	
					<p>ပိုျပီးေသခ်ာေအာင္ UCSY ရဲ့ <a href="http://www.ucsy.edu.mm/ucsy/NewsPage2.do">Official Website</a> ကို သြားၾကည့္လုိက္ပါ။</p>
				</div>

			</div>	
			<div class="col-md-3"></div>
		</div>

	@endif
@stop