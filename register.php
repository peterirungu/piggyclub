<?php include 'header.php' ?>
<?php include 'navsidebar.php' ?>
<!-- =====================================================================================================  -->      
<!-- BANNER SECTION -->
<div class="banner-bg" id="top">
    <div class="banner-overlay"></div>
    <div class="welcome-text">
        <h2>RELEASE OF REGISTRATION <br> <hr class="barnertitleline" width="9px"></h2>
        <h5>This is a mobile friendly layout with Bootstrap v3.3.1 framework. Maecenas eu ante at nunc posuere fringilla sit amet non dolor. Proin condimentum fermentum nunc.</h5>
    </div>
</div>
<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="fluid-container">
        <div class="content-wrapper">
            <div class="row page-section">
                <div class="col-md-7">                                
                    <p style="color: #000;">
                        The AMPA Release of Registration form allows mini pig owners (seller) to release 
                        ownership in order to transfer the mini pig's registration to another individual (buyer).
                    </p>
                    <br>
                    <p>
                        This form is to be filled out by the current owner (seller). This form serves only to realease
                        your ownership of the mini pig. It does NOT transfer registration.<br>
                        New owners (buyers) need to fill out the The Transfer of Registration Form in order to 
                        complete the registration transfer
                    </p>                    
                </div> 
            </div>
            <hr>
            <!-- registration form -->
            <div class="row">     
                <form>
                    <!-- radio buttons -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <legend>MINI PIG REGISTERED AS *</legend>
                                <div class="form-group">    
                                    <label for="registeredBreeder" class="pull-left">
                                        <input type="radio" name="registeredBreeder" class="form-check-input" id="registeredBreeder">
                                        Breeder
                                    </label>
                                    <label for="ownerpet" class="pull-right">                                    
                                        <input type="radio" name="registeredBreeder" class="form-check-input" id="ownerpet">
                                        Owner/Pet
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <legend>GENDER *</legend>
                                <label for="gender" class="pull-left">
                                    <input type="radio" name="gender" class="form-check-input" id="male" value="Male">
                                    Male
                                </label>
                                <label for="gender" class="pull-right">
                                    <input type="radio" name="gender" class="form-check-input" id="female" value="Female">
                                    Female
                                </label>
                            </div>
                            <div class="col-md-3">
                                <legend>SPAYED/NEUTERED *</legend>
                                <label for="spayedNeutered" class="pull-left">
                                    <input type="radio" name="spayedNeutered" class="form-check-input" id="yes" value="yes">
                                    Yes
                                </label>
                                <label for="spayedNeutered" class="pull-right">
                                    <input type="radio" name="spayedNeutered" class="form-check-input" id="no" value="no">
                                    No
                                </label>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>  
                    <hr>
                    <!-- form inputs fields -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- COLUMN 1 -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="registerdName">MINI PIG REGISTERED NAME*</label>
                                    <input type="text" class="form-control" id="registerdName">
                                </div>
                                <div class="form-group">
                                    <label for="registerdNumber">MINI PIG REGISTERED NUMBER</label>
                                    <input type="text" class="form-control" id="registerdNumber">
                                </div>
                                <div class="form-group">
                                    <label for="originalBreeder">MINI PIG'S ORIGINAL BREEDER</label>
                                    <input type="text" class="form-control" id="originalBreeder">
                                </div>
                                <div class="form-group">
                                    <label for="ampaNumber">ORIGINAL BREEDER'S AMPA NUMBER</label>
                                    <input type="text" class="form-control" id="ampaNumber">
                                </div>
                                <div class="form-group">
                                    <label for="minipigDOB">MINI PIG'S DATE OF BIRTH*</label>
                                    <input type="text" class="form-control" id="minipigDOB">
                                </div>
                            </div>

                            <!-- COLUMN 2 -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sellerFnane">SELLER'S FIRST NAME*</label>
                                    <input type="text" class="form-control" id="sellerFnane">
                                </div>
                                <div class="form-group">
                                    <label for="sellerLname">SELLER'S LAST NAME*</label>
                                    <input type="text" class="form-control" id="sellerLname">
                                </div>
                                <div class="form-group">
                                    <label for="sellerCity">SELLER'S CITY *</label>
                                    <input type="text" class="form-control" id="sellerCity">
                                </div>
                                <div class="form-group">
                                    <label for="sellerState">SELLER'S STATE *</label>
                                    <select id="sellerState" class="form-control">
                                        <option>New York</option>
                                        <option>Texas</option>
                                        <option>.....</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sellerZip">SELLER'S ZIP *</label>
                                    <input type="text" class="form-control" id="sellerZip">
                                </div>
                            </div>

                           <!--  COLUMN 3 -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sellerAMPAnumber">SELLER'S AMPA NUMBER (IF APPLICABLE)</label>
                                    <input type="text" class="form-control" id="sellerAMPAnumber">
                                </div>
                                <div class="form-group">
                                    <label for="sellerPhonenumber">SELLER'S PHONE NUMBER</label>
                                    <input type="text" class="form-control" id="sellerPhonenumber">
                                </div>
                                <div class="form-group">
                                    <label for="sellerWebsite">SELLER'S WEBSITE</label>
                                    <input type="text" class="form-control" id="sellerWebsite">
                                </div>
                                <div class="form-group">
                                    <label for="sellerEmail">SELLER'S EMAIL</label>
                                    <input type="email" class="form-control" id="sellerEmail">
                                </div>
                            </div>

                            <!-- COLUMN 4 -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="buyerFname">BUYER'S FIRST NAME*</label>
                                    <input type="text" class="form-control" id="buyerFname">
                                </div>
                                <div class="form-group">
                                    <label for="buyerLname">BUYER'S LAST NAME*</label>
                                    <input type="text" class="form-control" id="buyerLname">
                                </div>
                                <div class="form-group">
                                    <label for="buyerFarmname">BUYER'S FARM NAME</label>
                                    <input type="text" class="form-control" id="buyerFarmname">
                                </div>
                                <div class="form-group">
                                    <label for="buyerAMPAnumber">BUYER'S AMPA NUMBER (IF APPLICABLE)</label>
                                    <input type="text" class="form-control" id="buyerAMPAnumber">
                                </div>
                                <div class="form-group">
                                    <label for="buyerWebsite">BUYER'S WEBSITE</label>
                                    <input type="text" class="form-control" id="buyerWebsite">
                                </div>
                            </div>

                        </div>
                        
                    </div> 
                    <hr> 
                    <!-- form signature -->
                    <div class="row">
                        <div class="col-md-6"> 
                            <p>
                                By signing below, I certify that I am the registered and legal owner of the mini pig
                                listed. I hereby release ownership of listed mini pig, allowing the transfer of mini
                                pis's AMPA Registration. I understand this does not complete the registration transfer
                                process. The new oowner (buyer) will need to fill out the Transfer of Registration Form.*
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea type="text" class="form-control" id="sellerZip" rows="4"></textarea> 
                            </div> 
                        </div>
                    </div>  
                    <!-- submit button -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-default chooseplan">SUBMIT</button>
                        </div>
                    </div> 
                    <hr>            
                </form>        
            </div>             
        </div>
    </div>
</div>

<!-- =====================================================================================================  -->      
<?php include 'footer.php' ?>    


