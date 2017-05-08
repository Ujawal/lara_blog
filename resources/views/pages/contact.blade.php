@extends('main')

@section('title', '| Contact')


@section('content')
    

    <div class="row">
        <div class="col-md-12">     
            <h1>Contact ME </h1>
            <hr>
        <form>
            <div class="form-group">
              <label name="email">Email:
              <input id="email" name="email" class="form-control"></label>
            </div>

             <div class="form-group">
              <label name="email">Subject:
              <input id="subject" name="subject" class="form-control"></label>
            </div>

             <div class="form-group">
              <label name="email">Message:
              
              <textarea name="message" id="message" class="form-control">Type your message here...</textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-success">
        </form>
        </div>
    </div>

@endsection
    