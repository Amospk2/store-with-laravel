@extends('layouts.app')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus produtos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events container">
    <table id="usertable" name="usertable" class="table table-bordered table-hover" width="100%">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>opcoes</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<script src="{{ asset('/js/datatable.js') }}"></script>

@endsection

