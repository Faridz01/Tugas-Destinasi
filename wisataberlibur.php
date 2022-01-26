<?php
if(isset($_POST['proses']) && !isset($_POST['bayar'])){
    $pemesan = $_POST['pemesan'];
    $destinasi = $_POST['destinasi'];
    $tiket = $_POST['tiket'];
    $uang = $_POST['uang'];

    if($destinasi == "Bukit Bintang"){
        if($tiket < 5){
            $harga = 10000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 10000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 10000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 10000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }

    elseif($destinasi == "Pantai Sadranan"){
        if($tiket < 5){
            $harga = 15000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 15000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 15000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 15000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
    elseif($destinasi == "Candi Borobudur"){
        if($tiket < 5){
            $harga = 50000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 50000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 50000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 50000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
    elseif($destinasi == "Candi Prambanan"){
        if($tiket < 5){
            $harga = 50000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 50000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 50000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 50000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
    elseif($destinasi == "Keraton Yogyakarta"){
        if($tiket < 5){
            $harga = 5000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 5000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 5000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 5000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
    elseif($destinasi == "Malioboro"){
        if($tiket < 5){
            $harga = 5000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 5000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 5000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 5000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
    elseif($destinasi == "Goa Pindul"){
        if($tiket < 5){
            $harga = 100000 * $tiket;
            $diskon = "Tidak Ada";
            $totalharga = $harga;

            if($uang >= $totalharga){
            $kembalian = $uang - $totalharga;
            $tes = "Uang Cukup";
            }
            elseif($uang <= $totalharga){
                $tes = "Uang Kurang";
                $kembalian = "-";
            }
        }
        elseif($tiket >=5 && $tiket <=10){
          $harga = 100000 * $tiket;
            $diskon = $harga * (10/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=11 && $tiket <=15){
          $harga = 100000 * $tiket;
            $diskon = $harga * (15/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
        elseif($tiket >=16 && $tiket <=20){
          $harga = 100000 * $tiket;
            $diskon = $harga * (20/100);
            $totalharga = $harga - $diskon;
            if($uang >= $totalharga){
                $kembalian = $uang - $totalharga;
                $tes = "Uang Cukup";
                }
                elseif($uang <= $totalharga){
                    $tes = "Uang Kurang";
                    $kembalian = "-";
                }
        }
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index</title>
  </head>
  <body>
    <center>
        <div class="card" style="width: 50rem;">
        <h1>Destinasi Wisata</h1>
        <form action="" method="POST">
            <table align="center">
            <tr>
                <td><h4>Nama Pemesan</h4></td>
                <td><h4>&nbsp;: <input type="text" name="pemesan"></h4></td>
            </tr>
            <tr>
                <td><h4>Tempat Destinasi</h4></td>
                <td><h4>
                &nbsp;: <select name="destinasi" id="">
                        <option value="Bukit Bintang">Bukit Bintang - Rp.10.000/orang</option>
                        <option value="Pantai Sadranan">Pantai Sadranan - Rp.15.000/orang</option>
                        <option value="Candi Borobudur">Candi Borobudur - Rp.50.000/orang</option>
                        <option value="Candi Prambanan">Candi Prambanan - Rp.50.000/orang</option>
                        <option value="Keraton Yogyakarta">Keraton Yogyakarta - Rp.5.000/orang</option>
                        <option value="Malioboro">Malioboro - Rp.5.000/orang</option>
                        <option value="Goa Pindul">Goa Pindul - Rp.100.000/orang</option>
                        <option value="Pendopo Lawas">Pendopo Lawas - Cafe</option>
                    </select>
                </h4></td>
            </tr>
            <tr>
                <td><h4>Jumlah Tiket</h4></td>
                <td><h4>&nbsp;: <input type="text" name="tiket"></h4></td>
            </tr>
            <tr>
                <td><h4>Uang Masuk</h4></td>
                <td><h4>&nbsp;: <input type="text" name="uang" placeholder="<?php echo $tes;   ?>" value=""></h4></td>
            </tr>
            <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></h4></td>
            </tr>
            </table>
        </form>
        </div>
    </center>
    <center>
  <div class="card" style="width: 50rem; margin-top: 3rem; margin-bottom: 3rem;">
          <h1>Struk Pembayaran</h1>
                      <table align="center">
                      <tr>
                          <td><h4>Nama Pemesan</h4></td>
                          <td><h4>&nbsp;: <?php echo $pemesan ?></h4></td>
                      </tr>
                      <tr>
                          <td><h4>Tempat Destinasi</h4></td>
                          <td><h4>&nbsp;: <?php echo $destinasi ?></h4></td>
                      </tr>
                      <tr>
                          <td><h4>Jumlah Tiket</h4></td>
                          <td><h4>&nbsp;: <?php echo $tiket ?></h4></td>
                      </tr>
                      <tr>
                          <td><h4>Total Harga</h4></td>
                          <td><h4>&nbsp;: <?php echo $harga ?></h4></td>
                      </tr>
                      <tr>
                          <td><h4>Diskon</h4></td>
                          <td><h4>&nbsp;: <?php echo $diskon ?></h4></td>
                      </tr>

                      </table>
            <h4>--------------------------------------------------</h4>
            <form action="" method="POST">
            <table align="center">
              <tr>
                <td><h4>Nominal Yang Harus Dibayar</h4></td>
                <td><h4>&nbsp;: <input type="text" name="totalBayar" value="<?php echo $totalharga;   ?>"></h4></td>
            </tr>
            <tr>
                <td><h4>Uang Masuk</h4></td>
                <td><h4>&nbsp;: <input type="text" name="uang" value="<?php echo $uang;   ?>"></h4></td>
            </tr>
            <tr>
                <td><h4>Kembalian</h4></td>
                <td><h4>&nbsp;: <input type="text" name="kembalian" value="<?php echo $kembalian;   ?>"></h4></td>
            </tr>
            <!-- <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;&nbsp;<input type="submit" value="Bayar" name="bayar"></h4></td>
            </tr> -->
            </table>
        </form>
        </div>
      </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html> 