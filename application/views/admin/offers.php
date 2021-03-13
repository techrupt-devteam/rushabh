<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active"> View Offers</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading"> View Offers
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/offers/add_offers');?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"data-original-title="Add Offer">
                    <i class="la la-plus icon"></i>
                   </a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr</th>
                      <th class="">Title</th>
                      <th class="">Image</th>
                      <th class="">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($offers_list as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['title']; ?></td>
                   <td><?php if($row['image']){ ?><img style="width:70px; height:70px;" src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>" ><?php }else{ ?> No Image <?php } ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/offers/delete/<?php echo $row['id'] ?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete Offer"><i class="la la-trash icon"></i></a>
                      <?php if($row['show_on_website']==0){ ?>
                        <a href="<?php echo base_url(); ?>admin/offers/view/<?php echo $row['id'] ?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="View Offer"><i class="la la-binoculars icon"></i></a>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

<script type="text/javascript">
  function edit_popop(e,category_id){      
    if(!$(e.target).hasClass('special_td')) {
      $('#add-trip').modal('show');
    }
  }

 
</script>
