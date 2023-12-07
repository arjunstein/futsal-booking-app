@extends('layouts.master')

@section('title')
    List Users
@endsection

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">List Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Users
            </div>
            <div class="card-body">
                <table class="table table-responsive" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Whatsapp</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                            <td>Button</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
