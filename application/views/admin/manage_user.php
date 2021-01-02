<div class="content-wrapper"><div class="col-md-12"><div class="row"><ol class="breadcrumb"><li><a href="<?php echo base_url(); ?>admin/secure/home"data-original-title="Go to Home"data-placement="bottom"data-toggle="tooltip"title=""><em class="fa fa-home"></em></a></li><li class="active">Manage User</li></ol></div></div><div class="clearfix"></div><section class="content mt-12"><div class="row"><div class="col-xs-12"><div class="panel panel-default"><div class="panel-heading">Manage User<div class="pull-right btn-toolbar"><div class="btn-group"><a href="<?php echo site_url('admin/manage_user/add_user'); ?>"class="btn btn-default"title=""data-toggle="tooltip"data-placement="bottom"data-original-title="Add user"><i class="la la-plus"></i></a>
</div></div></div><div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-striped"id="example1"><thead>
      <tr><th>Sr.</th><th class="">Full Name</th>
        <th class="">Email</th><th class="">Mobile</th>
        <th class="">Location</th>
        <th class="">Action</th></tr>
      </thead>
      <tbody>
        <?php $cnt='';foreach($users_list as $row):$cnt++; ?><tr>
          <td><?php echo $cnt; ?></td>
          <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['mobile_no']; ?></td>
          
          <td><?php echo $row['location']; ?></td>
          <td><div class="btn-group"><a href="<?php echo base_url(); ?>admin/manage_user/edit_user/<?php echo $row['id'] ?>"class="btn btn-default"data-toggle="tooltip"data-placement="bottom"data-original-title="Edit user"><i class="fa fa-pencil"></i> </a><a href="<?php echo base_url(); ?>admin/manage_user/delete/<?php echo $row['id'] ?>"class="btn btn-default"title=""data-toggle="tooltip"data-placement="bottom"data-original-title="Delete"><i class="fa fa-trash-o"></i></a></div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      </table></div></div></div></div></div></section></div><script type="text/javascript">function edit_popop(a,t){$(a.target).hasClass("special_td")||$("#add-trip").modal("show")}</script>