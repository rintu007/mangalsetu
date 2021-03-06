<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content" style="min-height: auto !important;">
        <div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php if(isset($noOfMembers)){echo $noOfMembers;}else{echo "0";}?></h3>
                  <p>Total Members</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-people"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php if(isset($noOfEmployees)){echo $noOfEmployees;}else{echo "0";}?></h3>
                  <p>Total Emoloyees</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-person-add"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php if(isset($noOfPMember)){echo $noOfPMember;}else{echo "0";}?></h3>
                  <p>Premium Members</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contacts"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div>
    </section>

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Member Management
        <small>Add / Edit Member</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addMember" action="<?php echo base_url() ?>addNewMember" method="post" role="form">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="firstname">FirstName</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('firstname'); ?>" id="firstname" name="firstname" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="lastname">LastName</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('lastname'); ?>" id="lastname" name="lastname" maxlength="128">
                                    </div>
                                    
                                </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" class="form-control required" name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">DOB</label>
                                        <input placeholder="Select date" type="date" name="dob" id="example" class="form-control">
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" name="state" id="state">    
                                            <option value="">Select State</option>
                                            <?php foreach ($states as $state) { ?>
                                            <option value="<?php echo $state['id'] ?>"><?php echo $state['state']?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select class="form-control" name="city" id="city" disabled>
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Mobile Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon tag-addon">+91</span>
                                            <input type="phone" id="phone" maxlength="10" name="phone" class="form-control" placeholder="Mobile Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" class="form-control required email" id="email" value="<?php echo set_value('email'); ?>" name="email" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="intrested_in">Intrested In</label>
                                        <select class="form-control" name="intrested_in" id="intrested_in">
                                            <option value="">Intrested In..</option>
                                            <option value="Male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                      </div>
                                </div>
                            </div>

                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>
<script>
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
            this.value = "";
        }
        });
    });
    }
    setInputFilter(document.getElementById("phone"), function(value) {
    return /^-?\d*$/.test(value); });

function checkFunction() {
  var checkBox = document.getElementById("form_check");
  var text = document.getElementById("refrenceid");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
$(document).ready(function(){
 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url('User'); ?>/get_cities",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
        $('#city').prop('disabled', false);
        $('#city').html(data);
    }
   });
  }
  else
  {
    $('#city').html('<option value="">Select City</option>');
    $('#city').prop('disabled', true); 
  }
 });
 
});
</script>