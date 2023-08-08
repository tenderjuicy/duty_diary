@extends('layouts.admin')
{{-- @extends('admin.documentations.partials._script') --}}
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-13">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-images"></i> Documentaries</h6>
            </div>
            <div class="col-md-6 col-13  text-right">
                <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal"  data-bs-target="#sumulong">
                    + Add New Documentations
                </a>
            </div>
        </div>
    </div>
    <div class="card-body row">
        @if(isset($docs) && $docs->count() > 0)
            @foreach ($docs as $doc)
                <div class="col-md-3 col-sm-4 col-12 shadow-sm position-static mt-3">
                    <a href="{{ asset('storage/upload/images/'.$doc->image) }}" data-lightbox="lightbox-img" data-title="{{ $doc->caption }}" data-alt="{{ $doc->caption }}">
                        <img src="{{ asset('storage/upload/images/'.$doc->image) }}" alt="{{ $doc->caption }}" class="img-fluid">
                    </a>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger">Sorry, there are no files or documentations at the moment</div>
        @endif
    </div>

{{-- @if(isset($uploadSuccess))
    <div class="alert alert-success">
        <strong>Upload successful:</strong> {{$uploadSuccess}}
    </div>
@endif --}}
</div>

@include('admin.documentations.partials._modal')
@include('admin.documentations.partials._script')
@endsection