<!DOCTYPE html>
<html>
<head>
   <title>Rental Mobil Online</title>

<script type="text/javascript">
  function durasi(){
    var pinjam = document.getElementById('pinjam').value.substring(0,2);
    var kembali = document.getElementById('kembali').value.substring(0,2);

    var lama = parseInt(kembali) - parseInt(pinjam);

    if (!isNaN(lama)) {
      document.getElementById('lama').value = lama;
    };
  }
  function hitung(){
    var lama = document.getElementById('lama').value;
    var sewa = document.getElementById('sewa').value;

    var total = parseInt(lama) * parseInt(sewa);

    if (!isNaN(total)) {
      document.getElementById('total').value = total;
    };
    Materialize.updateTextFields();
  }
</script>

    <link href="../material-design-icons/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</head>
<body>

      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper light-blue">
          <ul>
           <li><a href="logout.php" class="btn" data-position="bottom" data-delay="50"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
          </ul>
          <a href="../logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
          <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="macam.php">Macam Mobil</a></li>
          </ul>
        </div>
      </nav>
       </div>
<div class="container">
<div class="row">
        <div class="input-field col s12 m6 l6 xl6">
          <select name="id" onchange="cari(this.value)">
            <option value="<?=$_GET['id']?>">Pilih Mobil</option>     
            <?php
              include('../koneksi.php');
              $sql = mysql_query('SELECT id, jenismobil FROM mobil') or die(mysql_error());
              while($row = mysql_fetch_assoc($sql)){
                echo "<option value='$row[id]'>$row[jenismobil]</option>";
              }
              $sql = mysql_query('SELECT * FROM mobil WHERE id='.$_GET['id']) or die(mysql_error());
              $mobil = mysql_fetch_assoc($sql);
              $sql = mysql_query("SELECT * FROM pelanggan WHERE id='".$_SESSION['id']."'") or die(mysql_error());
              $pelanggan = mysql_fetch_assoc($sql);
            ?>   
          </select>
        </div>

      <tr width=200 height=100>
      <img id="gambar" src="../images/<?=$mobil['gambar']?>">

        <div class="input-field col s12 m6 l6 xl6"> 
        <input disabled value='<?=$mobil["namamobil"]?>' id="namamobil" type="text" class="validate" name="namamobil" >        
          <label for="namamobil">Nama Mobil</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6"> 
        <input disabled value='<?=$mobil["jenismobil"]?>' id="jenismobil" type="text" class="validate" name="jenismobil" >        
          <label for="jenismobil">Jenis Mobil</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input disabled value='<?=$mobil["warna"]?>' id="warna" type="text" class="validate" name="warna" >
          <label for="warna">Warna Mobil</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input disabled value='<?=$mobil["bhnbakar"]?>' id="bhnbakar" type="text" class="validate" name="bhnbakar" >
          <label for="bhnbakar">Bahan Bakar</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input disabled value='<?=$mobil["jmlkursi"]?>' id="jmlkursi" type="text" class="validate" name="jmlkursi" >
          <label for="jmlkursi">Jumlah Kursi</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input disabled value='<?=$mobil["status"]?>' id="status" type="text" class="validate" name="status" >
          <label for="status">Status Mobil</label>
        </div>
        <div class="input-field col s12 m6 l6 xl6">    
          <input value='<?=$pelanggan["nik"]?>' id="nik" type="text" class="validate" name="nik" >
          <label for="nik">NIK</label>
        </div>
        <div class="input-field col s12 m6 l6 xl6">        
          <input value='<?=$pelanggan["namalengkap"]?>' id="namalengkap" type="text" class="validate" name="namalengkap" >  
          <label for="namalengkap">Nama Pemesan</label>  
        </div>
        <div class="input-field col s12 m6 l6 xl6">
          <input value='<?=$pelanggan["jk"]?>' id="jk" type="text" class="validate" name="jk" >  
          <label for="jk">Jenis kelamin</label>  
        </div>  
        <div class="input-field col s12 m6 l6 xl6">
          <input value='<?=$pelanggan["nohp"]?>' id="nohp" type="text" class="validate" name="nohp" >  
          <label for="nohp">Nomor Handphone</label>  
        </div>  
        <div class="input-field col s12 m6 l6 xl6">        
          <input value='<?=$pelanggan["alamat"]?>' id="alamat" type="text" class="validate" name="alamat " >  
          <label for="alamat">ALamat</label>  
        </div>  

        <div class="input-field col s12 m6 l6 xl6">
          <input id="pinjam" type="text" name="tglpinjam" class="datepicker" onkeyup="durasi();hitung();" onchange="durasi();hitung();"/>
          <label for="tglpinjam">Tanggal Pinjam</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input id="kembali" type="text" name="tglkembali" class="datepicker" onkeyup="durasi();hitung();" onchange="durasi();hitung();" />
          <label for="tglkembali">Tanggal Kembali</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input id="lama" type="text" name="lama" onkeyup="hitung();" onchange="hitung();"/>
          <label for="tglkembali">Lama</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input value='<?=$mobil["sewa"]?>' id="sewa" type="text" name="sewa" onkeyup="hitung();"/>
          <label for="sewa">Harga/Hari</label>
        </div>

        <div class="input-field col s12 m6 l6 xl6">
          <input id="total" type="text" class="validate" name="total">
          <label for="total">Total Harga</label>
        </div>
 


            <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
      
          <button class="btn waves-effect waves-light red" type="reset" name="action">Batal
    <i class="material-icons right">delete</i>
  </button>

      </div>
    </form>
    </div>
    </div>
    &nbsp;

    <!--  AKHIR FORM PENDAFTARAN  -->


  </div> 

</body>
</html>
<script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
        $('.datepicker').pickadate({
              selectMonths: false, // Creates a dropdown to control month
              selectYears: 37 // Creates a dropdown of 37 years to control year
        })
      });
      function cari(id) {
        $.ajax({
          url: '../macam.php',
          method: 'POST',
          data: {id: id},
          success: function(data) {
            var a = JSON.parse(data)
            $('#namamobil').val(a.namamobil);
            $('#jenismobil').val(a.jenismobil);
            $('#warna').val(a.warna);
            $('#bhnbakar').val(a.bhnbakar);
            $('#jmlkursi').val(a.jmlkursi);
            $('#status').val(a.status);
            $('#sewa').val(a.sewa);
            $('#gambar').attr('src','../images/'+a.gambar);
          },error: function(a,b,c) {
            alert('gagal')
            console.log(a,b,c)
          }
        })
      }
      $('#id').change(function() {
        cari($(this).val())
      })
      // Asyncronous Javascript and XML

</script>