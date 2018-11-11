@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Enquiry form</h4>
        <form action="{{route('sendemail')}}" method="post">
        {{csrf_field()}}
          <div class="medium-4  columns">
            
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="name" type="text" value="{{old('name')}}">
            <label><small class="error">{{$errors->first('name')}}</small></label>
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="last_name" type="text" value="{{old('last_name')}}">
            <label><small class="error">{{$errors->first('last_name')}}</small></label>
          
          </div>
          
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="address" type="text" value="{{old('address')}}">
            <p><small class="error">{{$errors->first('address')}}</small></p>
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
            <input name="zip_code" type="text" value="{{old('zip_code')}}">
            <p><small class="error">{{$errors->first('zip_code')}}</small></p>
          </div>
          <div class="medium-12  columns">
            <label>Description</label>
            <input name="Description" type="text" value="{{old('Description')}}">
            <p><small class="error">{{$errors->first('Description')}}</small></p>
          </div>
         
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="email" type="text" value="{{old('email')}}">
            <p> <small class="error">{{$errors->first('email')}}</small></p>
          </div>
          <div class="medium-12  columns">
            <input value="Send Email" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection