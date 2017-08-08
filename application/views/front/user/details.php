<h1 style="font-size: 70px; color: red; text-align: center;margin: 40px">Thông tin khách hàng</h1>
<form action="<?php echo base_url()?>Userinfo/update" method="post">
    <input type="hidden" name="id" value="<?php echo $this->session->userdata('customer_login')->id; ?>">
    <table style="border: 1px solid black">
        <tr >
            <td class="titles">Tài khoản: </td>
            <td class="cnt"><input name="username" style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->username; ?>"></td>
        </tr>
        <tr >
            <td class="titles">Họ và tên: </td>
            <td class="cnt"><input name="fullname" style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->fullname; ?>"></td>
        </tr>
        <tr >
            <td class="titles">Giới Tính: </td>
            <td class="cnt"><input style=" border: none;" type="text" value="Nam"></td>
        </tr>
        <tr>
            <td class="titles">Email: </td>
            <td class="cnt"><input name="email" style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->email; ?>"></td>
        </tr>
        <tr>
            <td class="titles">Địa chỉ: </td>
            <td class="cnt"><input name="address" style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->address; ?>"></td>
        </tr>
        <tr>
            <td class="titles">Điện thoại: </td>
            <td class="cnt"><input name="phone" style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->phone; ?>"></td>
        </tr>
        <tr>
            <td class="titles">Ngày Tạo: </td>
            <td class="cnt"><input readonly style=" border: none;" type="text" value="<?php echo $this->session->userdata('customer_login')->created_at; ?>"></td>
        </tr>
        <tr>
            <td><input style="width: 100%" type="submit" value="Quay lại"></td>
            <td><input style="width: 100%" type="submit" value="Cập nhật thông tin khách hàng"></td>
        </tr>

    </table>
</form>