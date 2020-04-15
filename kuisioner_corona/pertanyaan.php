<html>
    <head>
        <title>Covid-19 Risk Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/pertanyaan.css" rel="stylesheet"/>
    </head>
    <body>
    <body background = "image/coronavirus.jpg">
       <div class="container">
       <div class="box">
           <div class="box1">
               <h2>Jawablah pertanyaan di bawah ini</h2>
       <?php
            include 'config/koneksi.php';
            
            if(isset($_GET['ket']) && isset($_GET['i']))
            {
                if($_GET['i']==21)
                {
                    header("Location: hasil.php");
                }
            }
            
            if(empty($_GET['i']))
            {
                $i=1;
            }
            else
            {
                $i=$_GET['i']+1;
            }
            
            $query="SELECT pertanyaan FROM tb_pertanyaan WHERE id_pertanyaan=$i";
            $result=mysqli_query($konek, $query);
            $r=mysqli_fetch_array($result);
            echo $r['pertanyaan'];
            ?>
        
        <form>
                 
                <input type="submit" name="ket"  class="btn btn1" value="Ya" /> 
                <input type="submit" name="ket" class="btn btn1" value="Tidak"  />
                <input type="hidden" name="i" value="<?php echo $i ?>" />
       
            </form>
        </div>
        </div>
        </div>
            <?php
                if(isset($_GET['ket']))
                {
                    if($_GET['ket']=='Ya')
                    {
                $i=$_GET['i'];
                $ket=$_GET['ket'];
                $query="INSERT INTO tb_status VALUES('$i','$ket')";
                mysqli_query($konek,$query);
                }
                }
        ?>
    </body>
</html>