@extends("masters.default")

@section("content")
<div class="row">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Welcome {{ Auth::user()->full_name }}, </div>

                <div style="float:right; font-size: 85%; position: relative; top:-27px">
                    <h5>{{ HTML::link( '/logout', 'Logout' ) }}</h5>
                </div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >
                <table class="table">
                    <tr>
                        <td><b>Full Name</b></td>
                        <td> : {{ Auth::user()->full_name }}</td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td> : {{ Auth::user()->email }}</td>
                    </tr>
                </table>
            </div> <!-- Panel body -->
        </div> <!-- Panel -->
    </div><!-- Login Box -->
</div>
@stop