<link rel='stylesheet' href="<?=css('login.css')?>">
<div class='body'>
 <div class='container'>
  <div class='header'>LOGIN ADMIN</div>
  <form name='f' method='POST'>
  <table>
   <tr>
    <td colspan='2' style="color:#A32727;"><?php if(isset($err))echo $err;?></td>
   </tr>
   <tr>
    <td>Username</td>
    <td><input name='username' placeholder='Masukkan User'> *</td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type='password' name='password' placeholder='*****'> *</td>
   </tr>
   <tr>
    <td>Captcha</td>
    <td><input type='text' name='captcha' placeholder='RezStore' size='10'> <?=date('sdym')+date('sm')?></td>
   </tr>
   <tr>
    <td></td>
    <td><div style="width:71%;height: 20px;float: left;"></div><input type='submit' value='Login'></td>
   </tr>
  </table>
  </form>
 </div>
</div>
