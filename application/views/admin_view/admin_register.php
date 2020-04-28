<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

            <?php include('admin_csslink.php');?>
       

</head>

<body class="animsition" >
     <div class="overview-wrap">
         <a href="<?=base_url('admin/adminHome');?>">
             <button class="au-btn au-btn-icon au-btn--blue">
              <i class="fa fa-arrow-left"></i>BACK</button></a>
     </div>

   

      
  <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                <div class="section-block" align="center" id="basicform">

                                    <h3 class="section-title">Registeration Form</h3>
                                    <p>.....................................................................................................................................................................................................................................................................................................................................</p>
                                    
                                </div>
                                <div class="card">
                                    <h5 class="card-header"></h5>
                                    <div class="card-body">
                                     <form action="<?=base_url('admin/adminRegisterValidation');?>" method="post" enctype="multipart/form-data" class="form-horizontal">


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Passport size photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input"  name="psphoto"     value="<?=set_value('psphoto')?> class="form-control-file">
                                                    <?php echo form_error('psphoto','<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>



                                            <!-- when we need multiple image below thos code is open --> 
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                                </div>
                                            </div> -->

                                          
                                           <!--  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Member Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="membername"   value="<?=set_value('membername')?>" placeholder ="Enter The Member Name" class="form-control">
                                                     <?php echo form_error('membername','<span class="text-danger">', '</span>'); ?>
                                                    <small class="form-text text-muted ">Please enter first surname after write name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father / Husband Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="fathername" 
                                                    value="<?=set_value('fathername')?>" placeholder="Enter The Father / Husband Name" class="form-control">
                                                    <?php echo form_error('fathername','<span class="text-danger">', '</span>'); ?>
                                                    <small class="form-text text-muted">please not write surname</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Current Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="currentaddress" id="textarea-input"     value="<?=set_value('currentaddress')?>"rows="5" placeholder="Address..." class="form-control"></textarea>
                                                     <?php echo form_error('currentaddress','<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mobile Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input"                     value="<?=set_value('mobilenumber')?>" name="mobilenumber" placeholder="Enter The Mobile Number" class="form-control">
                                                     <?php echo form_error('mobilenumber','<span class="text-danger">', '</span>'); ?>
                                                   <!--  <small class="form-text text-muted">please not write surname</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </br>
                                                    <label for="text-input" class=" form-control-label">The origin of the homeland (Village)</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                </br>
                                                    <input type="text" id="text-input" name="village"       value="<?=set_value('village')?>"placeholder="Enter The Village Name" class="form-control">
                                                     <?php echo form_error('village','<span class="text-danger">', '</span>'); ?>
                                                   <!--  <small class="form-text text-muted">please not write surname</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Pincode</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="pinnumber"      value="<?=set_value('pinnumber')?>"placeholder="Enter The Pincode Number" class="form-control">
                                                     <?php echo form_error('pinnumber','<span class="text-danger">', '</span>'); ?>
                                                   <!--  <small class="form-text text-muted">please not write surname</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Taluka</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="talukaname"    value="<?=set_value('talukaname')?>"placeholder="Enter The Taluka Name" class="form-control">
                                                     <?php echo form_error('talukaname','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">District</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="districtaname"   value="<?=set_value('districtaname')?>"placeholder="Enter The District Name" class="form-control">
                                                     <?php echo form_error('districtaname','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Age</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="age"          value="<?=set_value('age')?>" placeholder="Enter The Age " class="form-control">
                                                     <?php echo form_error('age','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Caste</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="caste"        value="<?=set_value('caste')?>" placeholder="Enter The Caste" class="form-control">
                                                     <?php echo form_error('caste','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Sub-Caste</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="subcaste"     value="<?=set_value('subcaste')?>"placeholder="Enter The Sub-Caste" class="form-control">
                                                     <?php echo form_error('subcaste','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Business</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="business"     value="<?=set_value('business')?>"placeholder="Enter The Business" class="form-control">
                                                     <?php echo form_error('business','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Business Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="businessaddress" id="textarea-input"      value="<?=set_value('businessaddress')?>" rows="6" placeholder="Business Address..." class="form-control"></textarea>
                                                     <?php echo form_error('businessaddress','<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Annual Income</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="annualincome"   value="<?=set_value('annualincome')?>"placeholder="Enter The Annual Income" class="form-control">
                                                     <?php echo form_error('annualincome','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">House
                                                    is Owen / Rent</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="house"         value="<?=set_value('house')?>" placeholder="Enter The House Own / Rent" class="form-control">
                                                     <?php echo form_error('house','<span class="text-danger">', '</span>'); ?>
                                                    <!-- <small class="form-text text-muted ">Please enter first surname after write name</small> -->
                                                </div>
                                            </div>
                                          <!--   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Meeting Parlament No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="no"             value="<?=set_value('no')?>" placeholder="Enter the Meeting Parlament No" class="form-control">
                                                     <?php echo form_error('no','<span class="text-danger">', '</span>'); ?>
                                                <small class="form-text text-muted ">Please enter first surname after write name</small>
                                                </div>
                                            </div> --> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Adhar Card </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="ACphoto"         value="<?=set_value('ACphoto')?>" class="form-control-file">
                                                     <?php echo form_error('ACphoto','<span class="text-danger">', '</span>'); ?>
                                                     <small class="form-text text-muted ">Please first scane both side on one paper </small>
                                                </div>
                                            </div>
                                      

                                           
                                        
                                     <div class="card-footer">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                  </form>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>   











                                           <!--  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                                    <small class="help-block form-text">Please enter your email</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Select</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Select Large</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Select Small</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                        <option value="4">Option #4</option>
                                                        <option value="5">Option #5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                        <option value="4">Option #4</option>
                                                        <option value="5">Option #5</option>
                                                        <option value="6">Option #6</option>
                                                        <option value="7">Option #7</option>
                                                        <option value="8">Option #8</option>
                                                        <option value="9">Option #9</option>
                                                        <option value="10">Option #10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                                </div>
                                            </div> -->

























   
   <!--  <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                          
                                <img src="<?=base_url('assets/');?>images/icon/logo.png" />
                            
                        </div>
                        <div class="form">
                            <form action="<?=base_url('asmin/admindRegister');?>" method="post">
                                

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                       <label for="file-input" class=" form-control-label">Passport size photo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="file" id="file-input" name="psphoto" class="form-control-file">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Member Name</label>
                                    <input class="au-input au-input--full" type="text" name="membername" placeholder="Enter Member Name">
                                </div>


                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>

                               
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">register</button>
                                
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

        <?php include('admin_jslink.php');?>
</body>

</html>
<!-- end document-->