@extends('main')

{{-- @section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
@endsection --}}
@section('title', '| Homepage')

@section('content')
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                 <p class="lead">Thank you for visiting.This is the website which built with Laravel. Please read my latest post.</p>
                 <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div><!-- end f header .row -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
            
                    <h3>Post Title </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit laudantium maxime nulla incidunt voluptates sequi impedit quis, repudiandae exercitationem aliquam perferendis debitis alias voluptatibus beatae cumque cum odio eos consequatur. </p>
                    <a href="#" class="btn btn-primary">Read More </a>
                </div>

                <div class="post">
            
                    <h3>Post Title </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit laudantium maxime nulla incidunt voluptates sequi impedit quis, repudiandae exercitationem aliquam perferendis debitis alias voluptatibus beatae cumque cum odio eos consequatur. </p>
                    <a href="#" class="btn btn-primary">Read More </a>
                </div>

                <div class="post">
            
                    <h3>Post Title </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit laudantium maxime nulla incidunt voluptates sequi impedit quis, repudiandae exercitationem aliquam perferendis debitis alias voluptatibus beatae cumque cum odio eos consequatur. </p>
                    <a href="#" class="btn btn-primary">Read More </a>
                </div>

                <div class="post">
            
                    <h3>Post Title </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit laudantium maxime nulla incidunt voluptates sequi impedit quis, repudiandae exercitationem aliquam perferendis debitis alias voluptatibus beatae cumque cum odio eos consequatur. </p>
                    <a href="#" class="btn btn-primary">Read More </a>
            </div>

             </div>
             <div class="col-md-3 col-md-offset-1">
             <h2>Sidebar</h2>
             </div>
@endsection

{{-- @section('scripts')
  {{--  <script src="js/scripts.js"></script> --}}
 {{-- <script> 
    confirm('I am loaded JS file');
      </script>
@endsection --}}