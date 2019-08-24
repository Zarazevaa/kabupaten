@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Ubah kabupaten</h1>
      <hr>
      @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      @foreach($data as $datas)
      <form action="{{ route('kabupaten.update',$datas->id)}}"method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="from-group">
          <label for="id">Id:</label>
          <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id}}">
        </div>
        <div class="from-group">
          <label for="nama">Code:</label>
          <input type="text" class="form-control" id="code" name="code" value="{{ $datas->code }}">
        </div>
        <div class="from-group">
          <label for="nama">Description::</label>
          <input type="text" class="form-control" id="description" name="description" value="{{ $datas->description}}">
        </div>
        <div class="from-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
      @endforeach
    </div>
  </section>
  @endsection
