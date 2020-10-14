<div class="container mt-5">
    
    <?php if($member_details->is_email_verified != 1){ ?>
        <div class="alert alert-danger text-center" role="alert">
            You email is not verified. Plese visit your mail box for email verification.
        </div>    
    <?php }?>
    
    <div class="row">

        <div class="col-md-4 d-none d-sm-none d-md-block">
            <div class="login_box text-center">
            <img src="<?= base_url();?>assets/profile_img/<?=$member_details->image_1;?>" onerror="this.src='<?= base_url();?>assets/profile_img/default_user.png'" alt="User Profile" class="image-circle"/>
            
            <div class="line">
                <h3>
                    <?php echo $member_details->firstname." ".$member_details->lastname;
                        if($member_details->isPrime == 1){
                    ?>
                    <svg style="color: #00940b;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg>
                        <?php }?>
                </h3>
            </div>

            <strong aling="left">Profile :</strong>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="<?=$profile_percent;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$profile_percent;?>%"></div>
            </div>
            <div class="row">
                <label class="col-sm-12 col-form-label">Email : <?=$member_details->email;?></label>
                <label class="col-sm-12 col-form-label">Mobile : <?=$member_details->phone;?></label>
            </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8">
            <div class="heading">
                <h5>Matching Profiles</h5>
            </div>
            <?php foreach($listing as $list){?>
            <div class="profileimg">
        		<div class="row">
                    <div class="col-md-4 text-center">
                        <img src="<?= base_url();?>assets/profile_img/<?=$list['image_1'];?>" onerror="this.src='<?= base_url();?>assets/profile_img/default_user.png'" alt="User Profile" class="profile-circle img-responsive"/>
                    </div>
                    <div class="col-md-8">
                        <div class="panel-heading">
                            <h3><?=$list['firstname']." ".$list['lastname'];?><span style="font-size: 18px;" class="pt-2 text-right pull-right">City : <?=$list['city'];?></span></h3>
                        </div>
                        <span><b>Bio:</b><?=$list['short_bio'];?></span>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</div>