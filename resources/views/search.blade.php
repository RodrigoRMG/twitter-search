@extends('layouts.master')

@section('title', 'Twitter Search')

<style>
body {
  background-color: #ecf0f1;
}

.navbar-default {
  max-height: 40px;
  background-color: #2980b9 !important;
  border-color: #2980b9;
  color: #ecf0f1;
}

.navbar-right {
  float: right;
}

.navbar-default .navbar-brand {
  color: #ecf0f1 !important;
}

.navbar-default .navbar-nav>li>a {
  color: #ecf0f1 !important;
}

.col-xs-6 {
  float: none !important;
  margin-left: auto;
  margin-right: auto;
}

.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 200px;
  margin-bottom: 20px;
}

.btn-group-wrap {
  text-align: center;
  margin-top: 30px;
}

div.btn-group {
  margin: 0 auto;
  text-align: center;
  width: inherit;
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}

.btn-primary {
  color: #ecf0f1 !important;
  background-color: #2980b9 !important;
  border-color: #2980b9 !important;
}

.tweets{
    margin-top:40px;
}

.results
{
    margin-top:30px;
}

.twitter-tweet
{
    background-color:#FFF;
    border: 1px solid #000;
}




</style>

@section('content')


  <div class="container">
    <div class="row">
      <div class="span4"></div>
      <div class="span4"><img class="center-block" src="{{url('img/logo.png')}}" width="350" height="95" alt="Google" id="logo"></div>
      <div class="span4"></div>
    </div>

    <form action="/" method="get">
    <div class="row">
  
      <div class="col-xs-6">
        <div class="input-group">
            
                <input type="text" name="search" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                    </span>
           
                
        </div>
      </div>
        
     
    </div>

    </form> 
    <div class="row results">
        <div class="col-md-12">
            <p>Search results for "<b>{{$search}}</b>" </p>
        </div>
    </div>
    
    <div class="row tweets">
        <div class="col-md-12">
  

        @foreach($data['statuses'] as $key => $value)
    <blockquote class="twitter-tweet" data-lang="en">
    <p lang="en" dir="ltr">{{ $value['text'] }}
    </p>&mdash; {{$value['user']['name']}} (@ {{$value['user']['screen_name']}}) {{ $value['created_at']}}
    </blockquote>
    @endforeach
    </div>


    </div>



@endsection