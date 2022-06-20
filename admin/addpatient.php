<?php
$patient_details = true;
require_once "inc/header.php";
?>
<!-- Breadcrumb -->
<!-- Page Title -->
<div class="container mt-0">
    <div class="row breadcrumb-bar">
        <div class="col-md-6">
            <h3 class="block-title">Add Patient</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Patients</li>
                <li class="breadcrumb-item active">Add Patient</li>
            </ol>
        </div>
    </div>
</div>
<!-- /Page Title -->

<!-- /Breadcrumb -->
<!-- Main Content -->
<div class="container">

    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Add Patient</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="patient-name">Patient Name</label>
                            <input type="text" class="form-control" placeholder="Patient name" id="patient-name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" placeholder="Date of Birth" class="form-control" id="dob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="text" placeholder="Age" class="form-control" id="age">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" placeholder="Phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Date Of Registration</label>
                            <input type="date" placeholder="Registration date" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
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