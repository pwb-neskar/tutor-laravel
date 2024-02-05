@extends('template.master');

@section('title', 'Test Page')

@section('content')
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Test</h5>

        <p class="card-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sint voluptatem aperiam nisi voluptates porro atque eligendi sequi nam maiores debitis adipisci laudantium consequuntur incidunt laboriosam molestias, labore aut fugiat!
        </p>

        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card card-primary card-outline">
      <div class="card-body">
        <h5 class="card-title">Test</h5>

        <p class="card-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. At mollitia error aperiam molestiae cumque quas, qui rem est, ea dolorum magni. Deleniti voluptate expedita alias, at quas quidem iure enim.
        </p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div><!-- /.card -->
  </div>
  <!-- /.col-md-6 -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
@endsection