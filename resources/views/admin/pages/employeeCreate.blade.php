@extends('admin.shares.masterpage')
@section('content')

<section id="app" class="content">

    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Create Personal</h3>
            </div>

                <div class="module-body">


                    <div class="control-group">

                        <label class="control-label" for="EmployeeID">Employee ID</label>
                        <div class="controls">
                            <input v-model="add.idEmployee" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.Employee_Number" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.First_Name" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.Last_Name" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.SSN" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.Pay_Rate" class="span6 text-box single-line" data-val="true"
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
                            <select v-model="add.PayRates_id" class="span6" id="Benefit_Plans" name="Benefit_Plans">
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
                            <input v-model="add.Vacation_Days" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.Paid_To_Date" class="span6 text-box single-line" data-val="true"
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
                            <input v-model="add.Paid_Last_Year" class="span6 text-box single-line" data-val="true"
                                data-val-length="The field Last_Name must be a string with a maximum length of 50."
                                data-val-length-max="50" id="Last_Name" name="Last_Name" type="text"
                                value="">
                            <span class="field-validation-valid text-danger" data-valmsg-for="Last_Name"
                                data-valmsg-replace="true"></span>
                        </div>
                    </div>




                    <div class="control-group">
                        <div class="col-md-offset-2 controls">
                            <button v-on:click="themMoi()" type="button" class="btn btn-default">Create</button>
                           <a class="btn btn-default" href="/employeeIndex">Back to List</a>

                        </div>
                    </div>

                </div>

        </div>

    <!--/.content-->
    <!--/.content-->
    </div>

</section>


    @endsection

@section('js')
<script>
    new Vue({
        el : "#app",
        data : {
            add : {},

        },
        methods: {
            themMoi() {
                    axios
                        .post('/employeeCreate', this.add)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.mess);

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
