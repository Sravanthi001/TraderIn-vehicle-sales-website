@extends('layouts.app')

@section('content')



<div class="row">
<h3> {{$data['year']}} {{$data['make']}} {{$data['model']}} </h3>
</div>

<div class="row">
      <div class="medium-12 large-12 columns">
      
      <img class="thumbnail" width="350" height="350" src="{{ URL::to('/images/'. $data['imagepath']) }}">
           
        <table class="stack">
          <thead>
            <tr>
              
            </tr>
          </thead>
          <tbody>

          <tr>
              <th width="500">Listing Details</th>
            </tr>
            <tr>
              <td>YEAR : {{$data['year']}}</td></tr>
              <tr> <td> Make: {{$data['make']}} </td> </tr>
              <tr> <td>MODEL: {{$data['model']}}</td> </tr>
              <tr> <td>Description: <br> {{$data['description']}}</td> </tr>
              
                <tr>
                <td> Metadata: {{$data['metadata']}} </td>
                </tr>
              <td>
                <a class="hollow button warning" href="{{route('showform')}}">Contact Seller</a>
              </td>
              <tr>
              
              <th width="500"> Reviews for Seller</th> </tr>
             
              @foreach($reviews as $reviews)
            <tr>
              <td>~ {{$reviews->review}}  </td>
             <td> </td>
              </tr>
              
              
          @endforeach

                    </tbody>
        </table>
      </div>
    </div>


@endsection