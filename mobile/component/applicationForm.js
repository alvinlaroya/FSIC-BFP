function applicationForm(){
    document.getElementById('application-form').innerHTML = `
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                
                    <div class="card-header card-header-danger">
                      <h6 class="card-title" style="color: white">Bureau of Fire Protection</h6>
                      <p style="font-size: 12px; color: white" class="card-category">Fire Safety Inspection Certificate Applicaition Form</p>
                    </div>
                    <div class="card-body">
                        <div class="container" id="firstSection">
                            <form id="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Name of Owner</label>
                                                <input type="text" class="form-control" id="owner_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type='hidden' value="<?php echo $profile ?>" id="profile"/>
                                                <label class="bmd-label-floating" style="font-size: 10px">Building/Business/Establishment Name</label>
                                                <input type="text" class="form-control" id="business_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Trade Name</label>
                                                    <input type="text" class="form-control" id="trade_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Exact Address</label>
                                                    <input type="text" class="form-control" id="exact_address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Authorized Representative (if the applicant is not the owner)</label>
                                                    <input type="text" class="form-control" id="authorized">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Business Identification/Building Permit Number</label>
                                                    <input type="text" class="form-control" id="bin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Tax Identification Number</label>
                                                    <input type="text" class="form-control" id="tin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Contact Number</label>
                                                    <input type="text" class="form-control" id="contact">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Email Address</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Type of occupancy</label>
                                                    <input type="text" class="form-control" id="type_nature">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">Total Floor Area (M2)</label>
                                                    <input type="number" class="form-control" id="total_floor">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" style="font-size: 10px">No. of Storey</label>
                                                    <input type="number" class="form-control" id="no_storey">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div>
                                                <button style="width: 100%;font-weight: 90" type="submit" class="btn btn-success">Submit Form</button>
                                            </div>
                                        </div>
                                    </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
}