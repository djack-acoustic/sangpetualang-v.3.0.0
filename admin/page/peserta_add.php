<div class="container" style="min-height:620px;">
	<div class="tab-pane" id="tambah"><br>  
        <div class="col-md-5">
            <form method="post" action="" role="form">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="E-Mail" required>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Telepone" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" id="datepicker" name="tl" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir" />
                    <!--<input type="date" name="tl" class="form-control" id="dp" placeholder="MM/DD/YYYY" required>-->
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label><input type="radio" name="jenis_kelamin" class="" value="Pria" >&nbsp;Pria</label>&nbsp;&nbsp;&nbsp;
                    <label><input type="radio" name="jenis_kelamin" class="" value="Wanita" >&nbsp;Wanita</label>
                </div><br>
                <div class="checkbox">
                    <label><input type="checkbox" name="check" required> I am Agree</label>
                </div>
                <button type="submit" name="registrasi" id="submitbtn" class="btn btn-success">Daftar</button>
                <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
            </form>
        </div>       
    </div>
</div>