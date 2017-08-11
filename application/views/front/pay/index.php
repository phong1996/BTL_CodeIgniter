<div class="col-md-12">
  <div class="product-bit-title text-center">
    <h2 style="color: black">Thông tin thanh toán</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if ($this->session->userdata('customer_login')==null): ?>
    <form method="post" class="form-horizontal" action="<?php echo base_url().'pay/order' ?>">
    <input type="hidden" name="user_id" value="">
    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Họ và tên:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="name" placeholder="fullname" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Email:</label>
      <div class="col-sm-9">          
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="phone">Sô điện thoại:</label>
      <div class="col-sm-9">          
        <input type="number" class="form-control" id="phone" placeholder="phone" name="phone">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="address">Địa chỉ:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="address" placeholder="address" name="address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="note">Ghi chú:</label>
      <div class="col-sm-9">          
        <textarea class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="note">hình thức thanh toán:</label>
      <div class="col-sm-9">          
        <select name="payment" class="form-control">
          <option value="">Chọn hình thức thanh toán</option>
          <option value="offline">Thanh toán khi nhận hàng</option>
          <option value="baokim">Bảo kim</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Thanh Toán</button>
      </div>
    </div>
  </form>
   <?php endif ?>
   <?php if ($this->session->userdata('customer_login')!==null): ?>
    <form method="post" class="form-horizontal" action="<?php echo base_url().'pay/order' ?>">
    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('customer_login')->id; ?>">
    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Họ và tên:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="name" placeholder="fullname" name="name" value="<?php echo $this->session->userdata('customer_login')->fullname; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Email:</label>
      <div class="col-sm-9">          
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $this->session->userdata('customer_login')->email; ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="phone">Sô điện thoại:</label>
      <div class="col-sm-9">          
        <input type="number" class="form-control" id="phone" placeholder="phone" name="phone" value="<?php echo $this->session->userdata('customer_login')->phone; ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="address">Địa chỉ:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php echo $this->session->userdata('customer_login')->address; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="note">Ghi chú:</label>
      <div class="col-sm-9">          
        <textarea class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="note">hình thức thanh toán:</label>
      <div class="col-sm-9">          
        <select name="payment" class="form-control" required>
          <option value="">Chọn hình thức thanh toán</option>
          <option value="offline">Thanh toán khi nhận hàng</option>
          <option value="nganluong">Ngân Lượng</option>
          <option value="baokim">Bảo kim</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Thanh Toán</button>
      </div>
    </div>
  </form>

   <?php endif ?>
   

  </div>
</div>