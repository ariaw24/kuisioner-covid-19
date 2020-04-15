<?php 
error_reporting(0);
include "config/koneksi.php";
?>
<html>
    <head>
        <title>Covid-19 Risk Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/hasil.css" >
        
    </head>
    <body>
    <br>
    <div class="box">
        <table align="center">
           
                    <div class="card-header" id="headingOne" align="center">
                    <h2 class="mb-0">
                        <h3 class="text" type="text" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Diri
                        </h3>
                    </h2>
                    </div>

                <?php
                    $query3="SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1";
                    $result=mysqli_query($konek, $query3);
                    $r=mysqli_fetch_array($result);
                ?>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        
                        Nama : <?php echo $r['nama'];?>
                        <br>
                        Usia : <?php echo $r['usia'];?> 
                        <br>
                        Jenis Kelamin : <?php echo $r['jk'];?>
                        <br>
                        Alamat : <?php echo $r['alamat'];?>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" align="center">
                    <h2 class="mb-0">
                        <h3 class="text" type="text" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Hasil Test
                    </h3>
                    </h2>
                    </div>
                    <?php
                        $query="select tb_status.id_pertanyaan,tb_pertanyaan.id_pertanyaan,tb_pertanyaan.pertanyaan from tb_status,tb_pertanyaan where tb_status.id_pertanyaan=tb_pertanyaan.id_pertanyaan and status='Iya'";
                        $result=mysqli_query($konek,$query);
                        while ($r=mysqli_fetch_array($result))
                        {
                            echo $r['pertanyaan'].", ";
                            
                            echo "<br>";
                            
                        }
                    ?>

                    <?php
                        $query="SELECT * FROM tb_status ORDER by id_pertanyaan ASC";
                        $result=mysqli_query($konek, $query);
                        $i=1;
                        while ($r=mysqli_fetch_array($result))
                        {
                            $tb_pertanyaan[$i]=$r['id_pertanyaan'];
                            $status[$i]=$r['status'];	
                            $i++;
                            $status[$r['id_pertanyaan']]=$r['status'];
                        }
                        $jawaban;
                        $a1;
                        $a2;
                        $a3;
                        $a4;
                        $a5;
                        $a6;
                        $a7;
                        $a8;
                        $a9;
                        $a10;
                        $b1;
                        $b2;
                        $b3;
                        $b4;
                        $b5;
                        $b6;
                        $b7;
                        $b8;
                        $b9;
                        $b10;
                        $b11;
                        if($status[1]=='Ya'){
                            $a1=1;
                        }else if($status[1]=='Tidak'){
                            $a1=0;
                        }
                        
                        if($status[2]=='Ya'){
                            $a2=1;
                        }else if($status[2]=='Tidak'){
                            $a2=0;
                        }
                        
                        if($status[3]=='Ya'){
                            $a3=1;
                        }else if($status[3]=='Tidak'){
                            $a3=0;
                        }
                        
                        if($status[4]=='Ya'){
                            $a4=1;
                        }else if($status[4]=='Tidak'){
                            $a4=0;
                        }
                        
                        if($status[5]=='Ya'){
                            $a5=1;
                        }else if($status[5]=='Tidak'){
                            $a5=0;
                        }
                        
                        if($status[6]=='Ya'){
                            $a6=1;
                        } else if($status[6]=='Tidak'){
                            $a6=0;
                        }
                        
                        if($status[7]=='Ya'){
                            $a7=1;
                        }else if($status[7]=='Tidak'){
                            $a7=0;
                        }
                        
                        if($status[8]=='Ya'){
                            $a8=1;
                        }else if($status[8]=='Tidak'){
                            $a8=0;
                        }
                        
                        if($status[9]=='Ya'){
                            $a9=1;
                        }else if($status[9]=='Tidak'){
                            $a9=0;
                        }

                        if($status[10]=='Ya'){
                            $a10=1;
                        }else if($status[10]=='Tidak'){
                            $a10=0;
                        }
                        
                        if($status[11]=='Ya'){
                            $b1=1;
                        }else if($status[11]=='Tidak'){
                            $b1=0;
                        }
                        
                        if($status[12]=='Ya'){
                            $b2=1;
                        }else if($status[12]=='Tidak'){
                            $b2=0;
                        }
                        
                        if($status[13]=='Ya'){
                            $b3=1;
                        }else if($status[13]=='Tidak'){
                            $b3=0;
                        }
                        
                        if($status[14]=='Ya'){
                            $b4=1;
                        }else if($status[14]=='Tidak'){
                            $b4=0;
                        }
                        
                        if($status[15]=='Ya'){
                            $b5=1;
                        }else if($status[15]=='Tidak'){
                            $b5=0;
                        }
                        
                        if($status[16]=='Ya'){
                            $b6=1;
                        }else if($status[16]=='Tidak'){
                            $b6=0;
                        }
                        
                        if($status[17]=='Ya'){
                            $b7=1;
                        }else if($status[17]=='Tidak'){
                            $b7=0;
                        }
                        
                        if($status[18]=='Ya'){
                            $b8=1;
                        }else if($status[18]=='Tidak'){
                            $b8=0;
                        }

                        if($status[19]=='Ya'){
                            $b9=1;
                        }else if($status[19]=='Tidak'){
                            $b9=0;
                        }

                        if($status[20]=='Ya'){
                            $b10=1;
                        }else if($status[20]=='Tidak'){
                            $b10=0;
                        }

                        if($status[21]=='Ya'){
                            $b11=1;
                        }else if($status[21]=='Tidak'){
                            $b11=0;
                        }

                        $jawaban=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10+$b11;
                        if ($jawaban>=15) {
                            echo "Kesimpulan : Resiko Tinggi Terjangkit Virus Corona";
                            echo "<br>";
                            echo "Jumlah jawaban Ya : ", $jawaban;
                        }
                        else if ($jawaban>=8) {
                            echo "Kesimpulan : Resiko Sedang Terjangkit Virus Corona";
                            echo "<br>";
                            echo "Jumlah jawaban Ya : ", $jawaban;
                        }
                        else if($jawaban>=0){
                            echo "Kesimpulan : Resiko Rendah Terjangkit Virus Corona";
                            echo "<br>";
                            echo "Jumlah jawaban Ya : ", $jawaban;
                        }
                        ?> 
                    </div>
                    </div>
                </div>
            </div>
            
        </table>
        <br>
        <form method="post">
            <input type="submit" name="beres" value="Test Ulang" class="btn btn1"/>
        </form>
        <?php
            if(isset($_POST['beres']))
            {
                $query="DELETE from tb_status";
                mysqli_query($konek, $query);
                header("Location: index.php");
            }
        ?>
        </div>
    </body>
</html>