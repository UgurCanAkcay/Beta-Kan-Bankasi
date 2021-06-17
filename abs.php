<?php 
//Session Islemi
session_start();

require 'file/connection.php';
if(isset($_GET['Ara']))
{
    $searchKey = $_GET['Ara'];
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals WHERE bloodinfo.hid=hospitals.id && bg LIKE '%$searchKey%'";
}
else{
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals WHERE bloodinfo.hid=hospitals.id";
}
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<?php $title="Kan Bankası & Blood Bank | Mevcut Kan Örnekleri"; ?>
<?php require 'head.php'; ?>

<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
        
        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:-20px; ">
            <label class="font-weight-bolder">Kan Grubunu Secin:</label>
               <select name="Ara" class="form-control">
               <option><?php echo @$_GET['Ara']; ?></option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select><br>
               <a href="abs.php" class="btn btn-info mr-4"> Sıfırla</a>
               <input type="submit" name="submit" class="btn btn-info" value="Ara">
           </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-5">
            <tr><th colspan="7" class="title">Mevcut Kan Örnekleri</th></tr>
            <tr>
                <th>#</th>
                <th>Hastane Adi</th>
                <th>Hastane Sehri</th>
                <th>Hastane Email</th>
                <th>Hastane Tel</th>
                <th>Kan Grubu</th>
                <th>Aksiyon</th>
            </tr>

            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }
                else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>

        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['hname'];?></td>
                <td><?php echo ($row['hcity']); ?></td>
                <td><?php echo ($row['hemail']); ?></td>
                <td><?php echo ($row['hphone']); ?></td>
                <td><?php echo ($row['bg']); ?></td>

                <?php $bid= $row['bid'];?>
                <?php $hid= $row['hid'];?>
                <?php $bg= $row['bg'];?>
                <form action="file/request.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                    <input type="hidden" name="hid" value="<?php echo $hid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['hid'])) { 
                
                ?>

                <td>
                <a href="javascript:void(0);" class="btn btn-info hospital">Ornek/Numune Iste</a></td>
                <?php } 
                    else {(isset($_SESSION['rid'])) 
                    
                ?>

                <td>
                <input type="submit" name="request" class="btn btn-info" value="Request Sample"></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>
        </table>
    </div>



    <?php require 'footer.php' 
    
    //footer.php
    
    ?>


</body>

<script type="text/javascript">
    $('.hospital').on('click', function(){
        alert("Hastane kullanıcısı kan isteyemez!");
    });
</script>