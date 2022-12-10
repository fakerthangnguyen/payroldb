@extends('admin.shares.masterpage')
@section('content')

        <div  id="app" class="content">
            <a href="/employeeCreate" style="font-size: 16px;  ">Create new</a>
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
                                    <td>
                                        <button v-on:click="edit = v" data-toggle="modal" data-target="#editModal">Edit</button>
                                         <button v-on:click="del = v" data-toggle="modal" data-target="#deleteModal">Delete</button></td>

                                </tr>

                        </tbody>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa dữ liệu hay không?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                                  <button data-dismiss="modal" v-on:click="accpect_del()" type="button" class="btn btn-primary">Có</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="control-group">
                                    <label class="control-label" for="EmployeeID">Employee ID</label>
                                    <div class="controls">
                                        <input v-model="edit.idEmployee" class="span6 text-box single-line" data-val="true"
                                            data-val-number="The field Employee_ID must be a number."
                                            data-val-required="The Employee_ID field is required." id="Employee_ID"
                                            name="Employee_ID" type="text" value="">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="Employee_ID" data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Employee Number</label>
                                    <div class="controls">
                                        <input v-model="edit.Employee_Number" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="EmployeeID">First Name</label>
                                    <div class="controls">
                                        <input v-model="edit.First_Name" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field First_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="First_Name" name="First_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="First_Name" data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Last_Name</label>
                                    <div class="controls">
                                        <input v-model="edit.Last_Name" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">SSN</label>
                                    <div class="controls">
                                        <input v-model="edit.SSN" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Pay Rate</label>
                                    <div class="controls">
                                        <input v-model="edit.Pay_Rate" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Pay Rates ID</label>
                                    <div class="controls">
                                        <select v-model="edit.PayRates_id" class="span6" id="Benefit_Plans" name="Benefit_Plans">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Vacation Dates</label>
                                    <div class="controls">
                                        <input v-model="edit.Vacation_Days" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Paid To Date</label>
                                    <div class="controls">
                                        <input v-model="edit.Paid_To_Date" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-2" for="Last_Name">Paid Last Year</label>
                                    <div class="controls">
                                        <input v-model="edit.Paid_Last_Year" class="span6 text-box single-line" data-val="true"
                                            data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                            data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                            value="">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button data-dismiss="modal" v-on:click="accpect_update()" type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
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
            del     :   {},
            edit    :   {},
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
            accpect_del() {
                    axios
                        .post('/delete', this.del)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.mess);
                                this.getList();
                            } else if(res.data.status == 0) {
                                toastr.error(res.data.mess);
                            } else if(res.data.status == 2) {
                                toastr.warning(res.data.mess);
                            }
                        })
                        .catch((res) => {
                            var listE = res.response.data.errors;
                            $.each(listE, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                accpect_update() {
                    axios
                        .post('/update', this.edit)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.mess);
                                this.getList();
                            } else if(res.data.status == 0) {
                                toastr.error(res.data.mess);
                            } else if(res.data.status == 2) {
                                toastr.warning(res.data.mess);
                            }
                        })
                        .catch((res) => {
                            var listE = res.response.data.errors;
                            $.each(listE, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
        },
    });
</script>

@endsection
