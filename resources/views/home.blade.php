@extends('layout.layout')
@section('title')
    Dashboard
@endsection
@section('link1')
    Home
@endsection
@section('link2')
    Dashboard
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>CATV HeadEnd Performance </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>CATV Ch</th>
                                <th>Freq. (MHz)</th>
                                <th>Program TV</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td>John Abraham</td>
                                <td><span>iBook</span></td>
                                <td><span>456 pcs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="images/avatar/2.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td>John Abraham</td>
                                <td><span>iPhone</span></td>
                                <td><span>456 pcs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="images/avatar/3.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td>John Abraham</td>
                                <td><span>iMac</span></td>
                                <td><span>456 pcs</span></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td>John Abraham</td>
                                <td><span>iBook</span></td>
                                <td><span>456 pcs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
