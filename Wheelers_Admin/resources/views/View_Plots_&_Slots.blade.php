@extends('Layout.app')
@section("main-content")
<body>
	<style >
	div.plot_slot{
		margin-top: 20px;
		margin-right: 250px;
		margin-left: 250px;

	}
</style>

<title>View Plots & Slots</title>
<center>

	<div class="plot_slot">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>PLOTS & SLOTS DETAILS</b></div>
					<thead>
					    <tr>
					      <th scope="col">Place No</th>
					      <th scope="col">Location Name</th>
					      <th scope="col">Place Name</th>
					      <th scope="col">Slot Number</th>
					      <th scope="col">Vehicle Type</th>
					      <th scope="col">Number of Slot</th>
					      <th scope="col">Delete</th>
					      <th scope="col">Update</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($P_S_ViewData as $post)
					  		<tr>
						      <th scope="row">{{$post->Place_no}}</th>
						      <td>{{$post->Staff_No}}</td>
						      <td>-</td>
						      <td>-</td>
						      <td>{{$post->V_Type}}</td>
						      <td>{{$post->No_of_Slot}}</td>
						      <td><a href="{{route('P_S_DeleteData',['Place_no'=>$post->Place_no])}}">Delete</a></td>
						      <td><a href="{{route('P_S_UpdateData',['Place_no'=>$post->Place_no])}}">Update</a></td>
						    </tr>
					  	@endforeach
					  </tbody>

				</table>

			</div>
		</div>
		
	</div>
</body>
@endsection