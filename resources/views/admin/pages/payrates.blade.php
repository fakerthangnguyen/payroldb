@extends('admin.shares.masterpage')
@section('content')

        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Create User</h3>
                </div>

                    <div class="module-body">

                        <!--<form class="form-horizontal row-fluid">-->
                            <div class="control-group">
                                <label class="control-label" for="basicinput">UserName</label>
                                <div class="controls">
                                    <input class="span8" path="userName" id="basicinput" placeholder="Type something here..."/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Password</label>
                                <div class="controls">
                                    <input class="span8" path="password" id="basicinput"  placeholder="Type something here..."/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Email</label>
                                <div class="controls">
                                    <input class="span8" path="email" id="basicinput" placeholder="Type something here..."/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Active</label>
                                <div class="controls">
                                    <label class="checkbox inline">
                                        <input type="checkbox" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Submit Form</button>
                                </div>
                            </div>

                    </div>
            </div>
        </div><!--/.content-->

@endsection
@section('js')
@endsection
