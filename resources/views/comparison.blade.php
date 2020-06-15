@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
        <h1>Run Comparison</h1>
    </div>

    <div class="table-responsive">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p>Come back later to run a comparison!</p>
    </div>
</div>
@endsection
