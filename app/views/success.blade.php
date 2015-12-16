@extends("masters.default")

@section("content")
        <div class="row">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Success</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <b>Congratulations..!</b><br/><br/>
                        You have registered successfully. Click here to {{ HTML::linkAction('LoginController@index', 'login', array(), array()) }} to view subscription details.
                    </div> <!-- Panel body -->
            </div> <!-- Panel -->
        </div><!-- Login Box -->
    </div>
@stop