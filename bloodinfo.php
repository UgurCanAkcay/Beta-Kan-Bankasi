<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="Kan Bankası & Blood Bank | Kan örnekleri ekleyin"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Hastanenizde bulunan kan grubunu ekleyin.</div>
        <div class="card-body">
        <form action="file/infoAdd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Şartlar ve Koşullar </a><br>
          <div class="collapse" id="collapseExample">
          Kan verme işlemi gerçekleşmeden önce bireylerin geçici veya ömür boyu kan verememe kısıtlılıkları olmamalıdır. Ömür boyu kan vermeyen veya kısa süreli kan vermeyen bireyler de aşağıda verilen durumlar olmalıdır. <br>

          ● Hepatit B Hastalığı olan veya geçiren bireyler ömür boyu kan verememektedirler.<br>
          ● Hepatit C Hastalığı geçirenler veya bu hastalığa sahip olan bireyler ömür boyu kan vermeleri sakıncalı olmaktadır.<br>
          ● AIDS Hastalığı ile her hangi bir şekilde bağlantısı olan bireyler kan veremezler.<br>
          ● Hayvan ısırıkları gibi nedenlerle kuduz virüs kapan bireylerin kan vermesi sakınalı olmaktadır.<br>
          ● Eğer bireylerin kan göremeye karşı fobileri var ise sağlıkları için kan vermemeleri gerekmektedir.<br>
          ● Alkol ve diğer zararlı alışkanlıkları olan bireyler kesinlikle kan vermemeleri gerekmektedir. Çünkü bu bireylerin vücutlarında dolaşan kan içerisinde birçok zararlı madde barındırmaktadırlar.<br>
          ● Büyük bir ameliyat geçirmiş olan bireyler 1 yıl boyunca kan vermemelerinde fayda vardır.<br>
          ● Ayrıca sıtma hastalığı geçirmiş bireyler de 3 yıl sonrasından kan verebilmektedirler. 3 yıldan kısa süre içinde kan vermeleri kesinlikle yasaktır.<br>
          ● Düzenli olarak ilaç kullanan bireyler kan vermemektedirler.<br>
          ● Diş veya dolgu tedavisi olan bireyler 7 gün sonrasında kan verebilirler.<br>

 <br><br>
        </div>
          <input type="checkbox" name="condition" value="kabul" required> Kabul<br><br>

          <select class="form-control" name="bg" required="">

                <option disabled selected>Kan Grubu</option>
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br>
          <input type="submit" name="add" value="Ekle" class="btn btn-primary btn-block"><br>
          <a href="index.php" class="float-right" title="click here">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   
  if(isset($_SESSION['hid']))
  {
    $hid=$_SESSION['hid'];
    $sql = "select * from bloodinfo where hid='$hid'";
    $result = mysqli_query($conn, $sql);
  }
?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">Kan Bankası</th>
            <tr>
              <th>#</th>

              <th>Kan Ornekleri</th>
              <th>Aksiyon</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>