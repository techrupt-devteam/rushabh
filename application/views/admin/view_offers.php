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
              <a href="<?php echo site_url('admin/offers');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr</th>
                      <th class="">Item</th>
                      <th class="">Cost&nbsp;Unit</th>
                      <th class="">Total&nbsp;Qty</th>
                      <th class="">Allocated&nbsp;Qty</th>
                      <th class="">Delivery&nbsp;Qty</th>
                      <th class="">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($offer_item_data as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['item']; ?></td>
                   <td><?php echo $row['cost_unit']; ?></td>
                   <td><?php echo $row['qty']; ?></td> 
                   <td><?php echo $row['allocated_offer_qty']; ?></td> 
                   <td><?php echo $row['delivery_qty']; ?></td> 
                   <td><?php echo $row['total_amount']; ?></td> 
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
