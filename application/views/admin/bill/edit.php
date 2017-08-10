<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                Thông Tin Khách Hàng
            </h2>
        </div>
        <div class="body table-responsive">

            <div class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Họ Tên:</label>
                <div class="col-sm-10">
                <label class="form-control"><?php echo $bill->cus_name?></label>
               </div>
           </div>
           <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Số Điện Thoại:</label>
            <div class="col-sm-10"> 
              <label class="form-control"><?php echo $bill->cus_phone?></label>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Địa chỉ:</label>
        <div class="col-sm-10"> 
          <label class="form-control"><?php echo $bill->cus_adress ?></label>
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10"> 
      <label class="form-control"><?php echo $bill->cus_email ?></label>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Ghi chú:</label>
    <div class="col-sm-10"> 
      <label class="form-control"><?php echo $bill->note ?></label>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Trạng thái:</label>
    <div class="col-sm-10"> 
      <label class="form-control">
      <?php if ($bill->status==0): ?>
            Chưa Giao Hàng
        <?php else: ?>
            Đã giao hàng
        <?php endif ?>
      </label>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">loại giao dịch:</label>
    <div class="col-sm-10"> 
      <label class="form-control">
        <?php if ($bill->payment=='offline'): ?>
            Thanh Toán khi nhận hàng
        <?php else: ?>
            Bảo Kim
        <?php endif ?>

    </label>
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                Thông Tin Đơn Hàng
            </h2>
        </div>
        <div class="body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mã Sản phẩm</th>
                        <th>Sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($bill_info as $key => $value): ?>
                    <tr>
                        <td><?php echo $this->Products_model->get_info($value->id_product)->id ?></td>
                        <td><?php echo $this->Products_model->get_info($value->id_product)->name ?></td>
                        <td><img width=100 src="<?php echo base_url().'images/products/'.$this->Products_model->get_info($value->id_product)->avatar ?>"></td>
                        <td><?php echo number_format($this->Products_model->get_info($value->id_product)->price) ?> đồng</td>
                        <td><?php echo $value->quatyti ?></td>
                    </tr>
                 <?php endforeach ?>
                </tbody>
            </table>
             <label>Tổng Tiền : <?php echo number_format($bill->total_price); ?> Đồng</label>
             <?php if ($bill->status==0): ?>
                  <a href="<?php echo base_url()."admin/bill/ship/$bill->id"; ?>" class="btn btn-primary pull-right">Giao hàng</a>
             <?php endif ?>
           
        </div>
    </div>
</div>