@extends('admin.shares.masterpage')
@section('content')

        <div  id="app" class="content">
            <a href="" style="font-size: 16px;  ">Create new</a>
            <div  class="module">

                <div class="module-head">
                    <h3>Employee</h3>

                </div>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0"  class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                            <tr>
                                <th>Employee Number</th>
                                <th>Full Name</th>
                                <th>SSN</th>
                                <th>Pay Rate</th>
                                <th>Vacation_Days</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                           <tr v-for="(v,k) in list">
                                    <td>@{{ v.Employee_Number }}</td>
                                    <td>@{{v.First_Name}} @{{v.Last_Name}}</td>
                                    <td>@{{v.SSN}}</td>
                                    <td class="center">@{{v.Pay_Rate}}</td>
                                    <td class="center">@{{v.Vacation_Days}}</td>
                                    <td><button>Edit</button> <button>Delete</button></td>

                                </tr>

                        </tbody>
                    </table>
                </div>
            </div><!--/.module-->
        </div>



@endsection
@section('js')
<script>
    new Vue({
        el : '#app',
        data : {
            list : [],
        },
        created() {
            this.getList();
        },
        methods : {
            getList() {
                axios
                    .get('/employeeData')
                    .then((res) => {
                        this.list = res.data.employeeData;
                    });
            },
        }
    })
</script>

@endsection
