<?php 
//https://www.w3schools.com/icons/fontawesome_icons_webapp.asp
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Kan Bankası & Blood Bank | Anasayfa"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/bg.jpg" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
                         A+ iseniz: A+ ve AB+'ya kan verebilirsiniz. A+, A-, O+ ve O-'den kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
                        A- iseniz: A-, A+, AB- ve AB+'ya kan verebilirsiniz. A- ve O-'dan kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
                         A+ ve AB+'ya kan verebilirsiniz. A+, A-, O+ ve O-'den kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
                         B- iseniz: B-, B+, AB+ ve AB-'ye kan verebilirsiniz, B- ve O-'den kan alabilirsiniz. B+ ve AB+'ya kan verebilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
                        AB+ kanı olan kişiler herhangi bir kan grubundan alyuvar alabilirler. Bu, AB+ talebinin yalnızca AB ile bağışta bulunabileceği anlamına gelir.                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body"> 
                        AB- hastaları tüm negatif kan gruplarından kırmızı kan hücreleri alabilir.
                        AB- hem AB- hem de AB+ kan gruplarına kırmızı kan hücreleri verebilir.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
                         O+ Grubu, A+, B+, AB+ ve O+ Blood'a bagıs yapabilir
                         O Grubu, herkese kırmızı kan hücreleri bağışlayabilir. Evrensel bagıscıdır.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
                         O-, A+, A-, B+, B-, AB+, AB-, O+ ve O- Blood'a bagısta bulunabilir.
                         Kanı O negatif olan kisiler sadece O negatif vericilerden alyuvar bagısı alabilirler.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">Kan Bankası & Blood Bank Iletisim</div>
                    <div class="card-body">
                        <i class="fa fa-envelope"> </i> <a > bloodbank@gmail.com</a><br><br>
                        <i class="fa fa-mobile"> </i> <a > +90 1234567890</a><br><br>
                        <a href="https://www.euro.who.int/en/countries/turkey" target="_blank"> <i class="fa fa-desktop"> </i> <a >  Daha Detaylı Bilgiler Icin Dünya Saglık Organizasyonu</a></a><br><br>

                    </div>
                </div>
            </div>
            </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
            <div class="card">
                <div class="row justify-content-center">
            <div  style="width: 100%">
                <div class="card">
                    <img src="image/trhandmap.jpg" class="card-img-top">
                </div>
            </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>
</html>