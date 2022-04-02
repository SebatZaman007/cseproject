@extends('admin.master')

@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description">
            <p class="btn btn-success"  class="card-description">
                <a href="{{route('footer.create')}}">Footer Table</a>
            </p>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Footer Map</th>
                <th>Footer Call</th>
                <th>Footer Mail</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($footer as $footeritem)
                <tr>
                    <td>
                      {{$footeritem->footer_map}}
                    </td>
                    <td> {{$footeritem->footer_call}}</td>
                    <td>  {{$footeritem->footer_mail}}</td>

                        <td>
                            <a class="btn btn-success" href="{{route('footer.edit',$footeritem ->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('footer.delete',$footeritem->id)}}">Delete</a>
                        </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
