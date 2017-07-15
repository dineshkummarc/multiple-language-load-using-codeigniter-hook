<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <script type="text/javascript" src="<?php echo base_url()?>assets/newdesign/js/jquery.min.js"></script> 
    </head>

    <body>
        <div class="page"> 
            <!-- Header -->
            <header class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row"> 
                            <!-- Header Language -->
                            <div class="col-xs-6">
                                  <div class="dropdown block-language-wrapper">
                                    <a style="color:#d1f0ff !important;" role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#">
                                        <?php if($this->session->userdata('site_lang') != '') { ?>
                                               <?php if($this->session->userdata('site_lang') == 'english') { ?>
                                                     <img src="<?php echo base_url() ?>assets/newdesign/images/english.png" alt="language"> English <span class="caret"></span> 
                                               <?php } ?>
                                              <?php if($this->session->userdata('site_lang') == 'chinese') { ?>
                                                     <img src="<?php echo base_url() ?>assets/newdesign/images/cn.png" alt="language"> Chinese <span class="caret"></span> 
                                               <?php } ?>
                                        <?php } else { ?>
                                        <img src="<?php echo base_url() ?>assets/newdesign/images/english.png" alt="language"> English <span class="caret"></span> 
                                        <?php } ?>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" onclick="switchLang('english')"><img src="<?php echo base_url() ?>assets/newdesign/images/english.png" alt="language"> English </a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" onclick="switchLang('chinese')"><img src="<?php echo base_url() ?>assets/newdesign/images/cn.png" alt="language"> Chinese </a></li>
                                    </ul>
                                </div>

                                <div class="welcome-msg hidden-xs"> <?php echo $this->lang->line('site_slogan'); ?> </div>
                            </div>


                                <!-- Header Top Links -->
                                <div class="toplinks">
                                    <div class="links">
                                        <?php if ($this->session->userdata('user_id') == '') { ?>
                                            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="login.html"> <span  class=""><?php echo $this->lang->line('site_sign_up'); ?></span> <span class="caret"></span> </a>
                                                <ul class="dropdown-menu" role="menu" style="width: 140px;">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('customerSignUp'); ?>" style="color:black"> <?php echo $this->lang->line('signup_as_customer'); ?> </a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('shopsignupform'); ?>" style="color:black"> <?php echo $this->lang->line('signup_as_shop'); ?> </a></li>
                                                </ul>
                                            </div>
                                            <div class="login"><a title="Login" href="<?php echo base_url('signin'); ?>"><span  class=""><?php echo $this->lang->line('site_login'); ?></span></a></div>
                                        <?php } else { ?>
                                            <div class="dropdown block-language-wrapper myaccount"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="login.html"> <span  class="hidden-xs">My Account</span> <span class="caret"></span> </a>
                                                <ul class="dropdown-menu" role="menu" style="width: 125px;">
                                                      <?php if ($this->session->userdata('user_id') !='' && $this->session->userdata('type') == 'customer') { ?>
 <li role="presentation"> <a role="menuitem" tabindex="-1" href="<?php echo base_url('customerProfile/'.$this->session->userdata('user_id')) ?>"><?php echo "View Profile"; ?></a></li>
   
                                                    <li role="presentation"> <a role="menuitem" tabindex="-1" href="<?php echo base_url('editCustomerInfo') ?>" style="color:black"><?php echo $this->lang->line('site_editProfile'); ?></a></li>
                                                    <li role="presentation"> <a role="menuitem" tabindex="-1" href="<?php echo base_url('activities') ?>" style="color:black"><?php echo $this->lang->line('site_activities'); ?></a></li>

<li role="presentation"> <a role="menuitem" tabindex="-1" href="<?php echo base_url('changePassword') ?>" style="color:black"><?php echo "Change Password" ?></a></li>

                                                      <?php } else { ?> 
<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('profile/' . $this->session->userdata('user_id')) ?>" style="color:black"> View Profile </a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('shopedit/' . $this->session->userdata('user_id')) ?>" style="color:black"> Profile Settings </a></li>
                                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('shopactivities'); ?>" style="color:black"> Activities </a></li>

<li class="dropdown-submenu">
    <a class="test" tabindex="-1" href="#" style="color:#000">Shop News <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li style="width: 125px;"><a role="menuitem" tabindex="-1" href="<?php echo base_url('shopNews'); ?>" style="color:black"> Add News </a></li>
            <li style="width: 125px;"><a role="menuitem" tabindex="-1" href="<?php echo base_url('shopNewsList'); ?>" style="color:black">News List </a></li>
        </ul>
</li>

 <li class="dropdown-submenu">
                                                            <a class="test" tabindex="-1" href="#" style="color:#000">Special Member <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                               <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('addspecialMember'); ?>" style="color:black"> Add special Member</a></li>
                                                                <li style="width: 125px;"><a role="menuitem" tabindex="-1" href="<?php echo base_url('AllSpecialMem'); ?>" style="color:black">All special member </a></li>
                                                            </ul>
                                                        </li>



                                                      <?php } ?>
                                                </ul>
                                            </div>
           <?php
                                            if ($this->session->userdata('user_id') != '' && $this->session->userdata('type') == 'shop') {
                                                $this->load->model('BookingModel');
                                                $count = $this->BookingModel->count_message_for_shop($this->session->userdata('user_id'));
                                              
                                               if (isset($count) && $count > 0) {
                                                    $class = 'notify';
                                                } else {
                                                    $class = '';
                                                }

                                                $count1 = $this->BookingModel->check_alarm($this->session->userdata('user_id'));
                                                if (isset($count1) && $count1 > 0) {
                                                    $class1 = 'notify';
                                                } else {
                                                    $class1 = '';
                                                }
                                                ?>
                                                <div class="inbox_shop"><a title="inbox" href="<?php echo base_url('shop_inbox'); ?>"><span  class="hidden-xs"><i class="fa fa-comments" aria-hidden="true"></i><span class="<?php echo $class; ?> shop-unread-msg">(<?php echo $count; ?>)</span></span></a></div>

                                                <div class="alarm"><a title="alarm" href="<?php echo base_url('alarm_booking_info'); ?>"><span  class="hidden-xs">Alarm<span class="<?php echo $class1; ?> alarm-count-cls">(<?php echo $count1; ?>)</span></span></a></div>
                                            <?php
                                            } else {

                                                $count2 = $this->BookingModel->count_notify_about_booking($this->session->userdata('user_id'));
                                                if (isset($count2) && $count2 > 0) {
                                                    $class2 = 'notify';
                                                } else {
                                                    $class2 = '';
                                                }
                                                 $count3 = $this->BookingModel->count_message_for_customer($this->session->userdata('user_id'));
                                                ?>
                                                <div class="notification_customer"><a title="alarm" href="<?php echo base_url('notify_about_booking'); ?>"><span  class="hidden-xs"><i class="fa fa-bell" aria-hidden="true"></i><span class="<?php echo $class2; ?> customer-alarm-count-cls">(<?php echo $count2; ?>)</span></span></a></div>
                                                <div class="inbox_customer"><a title="inbox" href="<?php echo base_url('customer_inbox'); ?>"><span  class="hidden-xs"><i class="fa fa-comments" aria-hidden="true"></i><span class="<?php //echo $class2; ?> customer-unread-msg">(<?php echo $count3; ?>)</span></span></a></div>
                                                
                                            <?php } ?>
                                            
                                            <div class="login"><a title="Logout" href="<?php echo base_url('Logout'); ?>"><span  class="hidden-xs">Log Out</span></a></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- End Header Top Links --> 
                            </div>
                        </div>
                    </div>
                </div>
     
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 col-md-2"> 
                            <!-- Header Logo --> 
                            <a class="logo" title="Magento Commerce" href="<?php echo base_url('home');?>"><img alt="Magento Commerce" src="<?php echo base_url()?>assets/newdesign/images/logo.png"></a> 
                                       <div class="row for-mobile" style="display:none">
                                         <div style="margin-top:10px" class="fb-like" data-href="<?php  echo base_url(); ?>" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                                           <!--<div class="addthis_inline_share_toolbox"></div>-->
                <!--<a class="btn btn-social btn-sm btn-facebook" style="margin-left: -36px; margin-top: 10px;">
                                      
                                        <span class="fa fa-thumbs-up"></span>Like
                                    </a> -->
<?php //if($this->uri->segment('2') !='') {?>
<!--<a style="margin-top: 10px;" class="btn btn-social btn-sm btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php  echo base_url(); ?>">
                                        <span class="fa fa-facebook"></span>Share
                                    </a>-->
<?php //} else { ?>
        <!--<a style="margin-top: 10px;" class="btn btn-social btn-sm btn-facebook" href="<?php echo base_url()?>signin">
                                        <span class="fa fa-facebook"></span>Share
                                    </a>-->
<?php //} ?>
</div>
                                  
                            <!-- End Header Logo --> 
                        </div>
                        <div class="col-lg-6 col-sm-3 col-md-6"> 
                            <!-- Search-col -->
                            <?php $this->load->view('front/common/search'); ?>
                            <!-- End Search-col --> 

                        </div>
                 
                    </div>
                </div>
            </header>

         
            
            <script type="text/javascript">
                
              function switchLang(name) {
                  var url ='<?php echo base_url(); ?>';
                  window.location.href= url+'/LanguageSwitcher/switchLang/'+name;
              }
              
            </script>