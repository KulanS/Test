@extends('main')

@section('title', 'Welcome to FAST Sri Lanka')
          
    @section('content')   

          <div class="row">
              <div class ="col-md-12">
                <div class="jumbotron">
                  <h1 class="display-3">Welcome to FAST Sri Lanka</h1>
                  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                  <hr class="my-4">
                  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                  <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Find Out More</a>
                  </p>
                </div> <!--Basic idea of the page (jumbotron ends)-->
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-8">
                  <div class="description">
                      <h2>News</h2>
                      <p>Improve Your Paper by Writing Structured Paragraphs ... J. Ward Moorehouse focuses on making business connections but never forms any relationships.</p>
                      <a href="#" class="btn btn-primary">Read More</a>                        
                  </div>
              </div>
              <hr>
              <div class="col-md-3 col-md-offset-1">
                  <h2>Announcements</h2>
                  <div class="list-group">
                      <a href="#" class="list-group-item active">
                        <h4 class="list-group-item-heading">List group item heading</h4>
                        <p class="list-group-item-text">...</p>
                      </a>
                  </div>
              </div>
          </div>
    @endsection
     