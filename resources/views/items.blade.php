@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
        <h1>Items</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                This week
            </button>
        </div>
    </div>

    <div class="table-responsive">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>
                        Hello
                    </th>
                    <th>
                        Good Bye
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Come back later for list of suppliers
                    </td>
                    <td>
                        Sayonara
                    </td>
                </tr>
                <tr>
                    <td>
                        Come back later for list of suppliers
                    </td>
                    <td>
                        Ciao
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
