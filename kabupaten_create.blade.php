@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Tambah kabupaten</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      <form action="{{ route('kabupaten.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="code">Code:</label>
          <input type="text" class="form-control" name="code" id="code">
        </div>
        <div class="form-group">
          <label for="description">Desc:</label>
          <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
    </div>
  </section>
@endsection
