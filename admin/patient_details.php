<?php
require_once "inc/header.php"
?>
<div class="container mt-0">
    <div class="row breadcrumb-bar">
        <div class="col-md-6">
            <h3 class="block-title">Patient details</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <a href="patient_details.php">
                    <li class="breadcrumb-item active"> / Patient details </li>
                </a>

            </ol>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container">

    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-6">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Patient Details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>Daniel Smith</td>
                            </tr>
                            <tr>
                                <td><strong>Date Of Birth</strong> </td>
                                <td>26-10-1989</td>
                            </tr>
                            <tr>
                                <td><strong>Gender</strong></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td>Koramangala
                                    Banglore, India</td>
                            </tr>
                            <tr>
                                <td><strong>Phone </strong></td>
                                <td>+91 11111 11111</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>your@email.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--Export links-->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center export-pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                        </li>
                    </ul>
                </nav>
                <!-- /Export links-->
                <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit Patient</button>
                <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete Patient</button>
                <button type="button" class="btn btn-info mb-3"><span class="ti-arrow-down"></span> Download File</button>
            </div>
        </div>
        <!-- /Widget Item -->
        <!-- Widget Item -->
        <div class="col-md-6">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Visit Notes</h3>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Examination</label>
                        <input type="text" class="form-control" placeholder="Physical examination">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Health Parameters</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Pressure">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Pulse ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood SPO2 ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Fasting Blood Sugar">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Random Blood Sugar">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood HbA1c">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Creatinine">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood Urine MACR">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Blood BUN">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </from>
                    </div>

            </div>
        </div>
        <!-- /Widget Item -->
        <!-- Widget Item -->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Patient Medical History</h3>
                <form>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Condition</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>--Select Condition--</option>
                            <option>Type 2 Diabetes</option>
                            <option>Type 1 Diabetes</option>
                            <option>High Blood pressure</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Procedures</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>--Select Procedures--</option>
                            <option>Colonoscopy</option>
                            <option>Gall bladder surgery</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Family History</label>
                        <textarea placeholder="Enter family history" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- /Widget Item -->
</div>
</div>
<!-- /Main Content -->
<?php
require_once "inc/footer.php"
?>