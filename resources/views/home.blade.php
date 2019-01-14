@extends('layouts.app')

@section('content')
<div class="container">
                        
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="col-sm-5">
                    
                    <form enctype="multipart/form-data" method="post" action="api/restaurants">
                         {{ csrf_field() }}
                      <div class="form-group">
                            <label for="">nombre:</label>
                            <input class="form-control" type="text" name="nombre">
                            <label for="">descripcion:</label>
                            <input class="form-control" type="text" name="descripcion">
                            <input class="form-file-control" type="file" name="file">
                            <input type="submit" class="form-control btn btn-primary">
                      </div>
                    </form>
                </div>
                    


                    <restaurant></restaurant>
            </div>
        </div>
    </div>
</div>
@endsection
