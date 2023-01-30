<?php include('header.php');?>
<?php include('navbar.php');?>
<?php include('sidebar.php');?>

    <div class="col-9">
        <div class="content">
            <div class="row">
                <div class="col-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a>&nbsp;<span>&raquo;</span></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                    <h1>Contact Me</h1>
                    <p>Silahkan masukan nomor kontak pribadi / perusahaan di bawah, jika Anda mau hubungi kami.</p>
                    <div class="row">
                        <div class="col-12">
                            <form action="#" method="post">
                                <table>
                                    <tr>
                                        <td><label for="nama" class="form-label">Nama Lengkap</label></td>
                                        <td><input type="text" name="nama" id="nama" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email" class="form-label">Email</label></td>
                                        <td><input type="text" name="email" id="email" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="no_hp" class="form-label">No.Telp / HP</label></td>
                                        <td><input type="text" name=no_hp"" id="no_hp" class="form-control"></td>
                                    </tr>
                                </table>   
                                <button class="btn-default">Kirim</button>
                            </form>                 
                        </div>   
                    </div>
                    
                </div>
                <div class="col-4">
                    <div class="category-post">
                        <h2>Category</h2>
                        <p><a href="#">PHP</a></p>
                        <p><a href="#">Node</a></p>
                        <p><a href="#">Python</a></p>
                        <p><a href="#">Java</a></p>
                    </div> 
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>