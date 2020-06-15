@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
        <h1>About VennCalculator</h1>
    </div>

    <div class="table-responsive">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p>A brief description on the project.</p>
    </div>
</div>
@endsection
