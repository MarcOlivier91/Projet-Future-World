@extends('layouts.default')

@section('main')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <form action="{{ route('product.destroy', $id) }}" method="POST" enctype="multipart/form-data">
        @method('DELETE')
        @csrf

        <h1> Do you really want to remove the product ? </h1>*
        <button> Yes, destroy it. </button> <br>
        <button> No, take me back. </button> <br>

    </form>

@endsection