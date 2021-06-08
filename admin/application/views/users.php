RentAndHire/application/controllers/Product.php<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    <div class="title_left">
    <h3>All Users</h3>
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title brdr1">
          <small class="sub-head">Users</small>
          <div class="clearfix"></div>
        </div>


<div class="btn-group dropdown pull-right">
 
<label style="
    margin-right: 10px;
    margin-top: 10px;
">Status</label>

  <a href="" class="filtr-bg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter" aria-hidden="true"></i></a>
   <div class="dropdown-menu drp-mn-bg">
  <div class="drp-btn-bg"><a class="dropdown-item btn2 w100" href="<?php echo base_url('index.php/Admin/users');?>" status="3" style="padding: 2px 6px;font-size: 14px;">All</a></div>  
  <div class="drp-btn-bg"><a class="dropdown-item btn3 w100" href="<?php echo base_url('index.php/Admin/users?status='.base64_encode('1')); ?>" status="3" style="padding: 2px 6px;font-size: 14px;">Active</a></div>
  <div class="drp-btn-bg"><a class="dropdown-item btn4 w100" href="<?php echo base_url('index.php/Admin/users?status='.base64_encode('0')); ?>" status="5" style="padding: 2px 6px;font-size: 14px;">Inactive</a></div>

  </div>
</div>



        
        
        
        <div class="x_content">
          <table id="datatable" class="table table2">
            <thead>
              <tr>
                <th>S. No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
             foreach ($user as $user) {

                $i++;
                ?>
                <tr>
                  <td class="py-1">
                  <?php echo $i; ?>
                  </td>
                  <td>
                  <?php echo $user->name; ?>
                  </td>
                  <td>
                  <?php //echo $user->email; ?>********
                  </td>
                  <td>
                  <?php 
                  if(!empty($user->mobile)) { 
                    //echo $user->country_code.' '.$user->mobile; 
                  } 
                  ?>********
                  </td>


                  <td>

                  <?php if($user->status==1){ 
                    ?><a href="javascript:void(0);" class="btn btn-round btn-success btn-sm btn-action"  aria-haspopup="true" aria-expanded="false">
                       Active
                      </a><?php
                  }elseif($user->status==0) {
                    ?><a href="javascript:void(0);" class="btn btn-round btn-danger btn-sm btn-action"  aria-haspopup="true" aria-expanded="false">
                       Inactive
                      </a><?php
                  } ?>

</td>

                  <td>


                  <?php if($user->status==1)
                  {
                    $url = base_url('/index.php/Admin/change_status_user').'?id='.$user->id.'&status=0&request=2';
                  ?>
                  <a class="btn btn-round btn-danger round-btn changeStatus btn4" status = "1" href="<?php echo $url;?>"></i>Deactivate</a>
                   
                  <?php
                  }
                  elseif($user->status==0) {
                     $url = base_url('/index.php/Admin/change_status_user').'?id='.$user->id.'&status=1&request=2';
                  ?>
                   
                   <a class="btn btn-round btn-success round-btn changeStatus btn3" status = "2" href="<?php echo $url;?>">Activate</a>
                  <?php
                  } ?>
                  </td>
                 
                </tr>
                <?php
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>



    </div>
  </div>

</div>
<!-- /page content -->
