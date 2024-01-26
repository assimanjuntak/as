<?php include "header.php"; ?>
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="#" class="checkout__form">
            <div class="row">
                <div class="col-lg-8 mb-5 mt-5">
                    <h5>Detail Pemesanan</h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <td>Nama Lengkap <span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <td>Username <span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">                            
                            <div class="checkout__form__input">
                                <td>Alamat <span>*</span></td>
                                <input type="text">                                                            
                            </div>                                
                            <div>                                                                
                                    <td>Metode pembayaran:</td><br>                                    
                                    <td><input type="radio" name="metode_pembayaran" value="COD" checked>COD <br>
                                    <input type="radio" name="metode_pembayaran" value="Transfer"  checked>Transfer</td>                                                                                                                                                       
                            </div> 
                            <br>                                                   
                        </div>                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <td>No. telp<span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <td>Email <span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Catatan <span>*opsional</span></td>
                                <input type="text">
                            </div>
                        </div>                        
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="checkout__order">
                            <h5>Pesananmu</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>
                                        <span class="top__text">Produk</span>
                                        <span class="top__text__right">Total</span>
                                    </li>
                                    <li>01. Chain buck bag <span>Rp. 50.000</span></li>
                                    <li>02. Zip-pockets pebbled<br /> tote briefcase <span>Rp. 50.000</span></li>
                                    <li>03. Black jean <span>Rp. 50.000</span></li>
                                    <li>04. Cotton shirt <span>Rp. 50.000</span></li>
                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Subtotal <span>Rp. 150.000</span></li>
                                    <li>Total <span>Rp. 150.000</span></li>
                                    <li>Metode Bayar <span style="color:blue ;">Transfer</span></li>
                                </ul>
                            </div>                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Pesan sekarang
                               </button>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Transaksi Sukses</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary"> <a href="./rincian_transaksi.php" style="color: white;">Lihat detail transaksi</a> </button>
        </div>
        </div>
    </div>
    </div>

<?php include "footer.php"; ?>