@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Help Center') }}</h1>

    <!-- Main Content goes here -->
    <section id="content">
        <div class="container helppage">


        <div class="row mt-3 mb-4">
            <div class="col-12 col-sm-4">
                <div class="list-group">
                <a id="menu-0-0" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" onClick="showFolder(0, 0)">
                            Hal-hal Umum<i class="fa fa-chevron-right"></i></a>
                                                <a id="menu-0-1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onClick="showFolder(0, 1)">
                            Pembatasan Tanggung Jawab<i class="fa fa-chevron-right"></i></a>
                                                <a id="menu-1-0" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onClick="showFolder(1, 0)">
                            Tentang Clean.Bee<i class="fa fa-chevron-right"></i></a>
                                                <a id="menu-1-1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onClick="showFolder(1, 1)">
                            Tentang Clean.Bee Services<i class="fa fa-chevron-right"></i></a>
                                                <a id="menu-2-0" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onClick="showFolder(2, 0)">
                            Pesanan / Order<i class="fa fa-chevron-right"></i></a>
                                                <a id="menu-2-1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onClick="showFolder(2, 1)">
                            Akun / Account<i class="fa fa-chevron-right"></i></a>
                                                        </div>
            </div>
            <div class="col-12 col-sm-8 mt-3 mt-sm-0">
                                                            <div id="list-0-0" class="tab-pane fade show active">
                            <div id="accordion" role="tablist">
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000051812" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Hal-Hal Umum
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000051812" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><div rel="clipboard_data"><ol>
                                            <li>PT Clean.Bee adalah suatu perseroan yang didirikan berdasarkan hukum Negara Republik Indonesia ("<strong>kami</strong>" atau "<strong>milik kami</strong>").</li>
                                            <br>
                                            <li>Web ini digunakan untuk mewadahi pemesanan jasa cuci yang disediakan oleh Clean Bee. Web ini menawarkan informasi tentang layanan yang ditawarkan oleh Clean Bee. Jenis layanan yang dapat diminta melalui Web adalah: :<ol><li>Cuci Pakaian</li><li>Cuci Selimut</li><li>Cuci Sepatu</li></ol></li></ol></div><p><br></p></div>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                                        <div id="list-0-1" class="tab-pane fade ">
                            <div id="accordion" role="tablist">
                                        <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000051815" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    PEMBATASAN TANGGUNG JAWAB
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000051815" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><p><br></p><ol>
                                            <li>Setiap tuntutan terhadap kami dalam hal apapun oleh anda, akan dibatasi dengan jumlah total yang sebenarnya dibayar oleh dan/atau terhutang pada Anda ketika menggunakan Layanan selama peristiwa yang menimbulkan klaim tersebut. Dalam hal apapun kami dan/atau pemberi lisensi kami tidak akan bertanggung jawab kepada anda atau siapa pun atas biaya, bunga, kerusakan atau kerugian dalam segala jenis atau bentuk(termasuk cidera pribadi, gangguan emosi dan hilangnya data, barang, pendapatan, keuntungan, penggunaan atau keuntungan ekonomi lainnya). Perusahaan dan/atau pemberi lisensinya tidak akan bertanggung jawab atas kerugian, kerusakan atau cidera yang mungkin ditimbulkan oleh atau disebabkan oleh anda atau pada setiap orang untuk siapa anda telah memesan Layanan, termasuk namun tidak terbatas pada kerugian, kerusakan atau cidera yang timbul dari, atau dengan cara apapun sehubungan dengan Layanan dan/atau Web, termasuk namun tidak terbatas pada penggunaan atau ketidakmampuan untuk menggunakan Layanan dan/atau Web.</li>
                                            <br>
                                            <li>Anda secara tegas mengesampingkan dan melepaskan kami dari setiap dan semua kewajiban, tuntutan atau kerusakan yang timbul dari atau dengan cara apapun sehubungan dengan Penyedia Layanan. Perusahaan tidak akan menjadi pihak dalam sengketa, negosiasi sengketa antara anda dan Penyedia Layanan. Tanggung jawab untuk keputusan yang anda buat atas Layanan yang ditemukan melalui Web merupakan tanggung jawab dan melekat seutuhnya dengan dan pada anda. Anda secara tegas mengesampingkan dan melepaskan kami dari setiap dan semua kewajiban, tuntutan, penyebab tindakan, atau kerusakan yang timbul dari penggunaan Layanan, perangkat lunak dan/atau Web, atau dengan cara apapun terkait dengan Penyedia Layanan yang diperkenalkan kepada anda melalui Web.</li>
                                            <br>
                                            <li>Kualitas Layanan yang diperoleh melalui penggunaan Web ini sepenuhnya menjadi tanggung jawab Penyedia Layanan yang pada akhirnya memberikan Layanan untuk anda. Anda memahami, oleh karena itu, bahwa dengan menggunakan Web ini, Anda dapat dihadapkan pada layanan yang berpotensi berbahaya, ofensif, berbahaya bagi anak di bawah umur, tidak aman atau tidak pantas, dan bahwa Anda menggunakan layanan atas risiko anda sendiri.</li></ol><p><br></p></div>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                            <div id="list-1-0" class="tab-pane fade ">
                            <div id="accordion" role="tablist">
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000040277" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Apa itu Clean.Bee
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000040277" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><p><br></p><p dir="ltr" style="">Clean.Bee adalah servis terbaik yang didukung oleh spesialis profesional, terlatih dan bersertifikat untuk memastikan pelanggan mendapat layanan dengan kualitas terbaik.</p></div>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                                            <div id="list-1-1" class="tab-pane fade ">
                            <div id="accordion" role="tablist">
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000040280" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Layanan Cuci Pakaian
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000040280" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><h3><strong><span style="color: rgb(0, 0, 0);">Cuci Pakaian</span></strong></h3><ul><li><h4><span style="color: rgb(0, 0, 0);">Mencuci Pakaian dengan beberapa paket yaitu Cuci kering dengan Lipat, Cuci kering tanpa Lipat dan Setrika.Harga Berdasarkan oleh Paket layanan yang dipilih.</span></h4></li></ul></div>
                                        </div>
                                    </div>
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000042220" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Layanan Cuci Selimut
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000042220" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body"><h3 dir="ltr"><strong>Cuci Selimut</strong></h3><ul><li dir="ltr"><h4>Mencuci Selimut maupun karpet dengan beberapa paket pilihan berdasarka jenis barang yaitu kapet masjid, karpet rumah, Karpet kantor, Sprei Kasur dan Selimut. Harga ditetapkan Sesuai dengan Ukuran Barang.</h4></li></ul></div>
                                        </div>
                                    </div>
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000042221" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Layanan Cuci Sepatu
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000042221" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><h3 dir="ltr"><strong>Cuci Sepatu</strong></h3><ul><li dir="ltr"><h4>Mencuci Sepatu dengan beberapa paket pilihan sesuai dengan tipe Sepatu seperti Sneaker, Kanvas, Suede, Kulit dan hybrid. Harga berdasarkan oleh Tipe Sepatu.</h4></li></ul></div>
                                        </div>
                                    </div>

                                                            
                                                            </div>
                        </div>
                                                                                <div id="list-2-0" class="tab-pane fade ">
                            <div id="accordion" role="tablist">
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000041358" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Pesan Layanan / Make an Order
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000041358" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><ul><li><p dir="ltr">Pilih layanan / <em>Choose service</em></p></li></ul><p>Pilih dengan mengklik layanan yang anda inginkan (Layanan Cuci Pakaian, Layanan Cuci Sepatu, Layanan Cuci Selimut)</p><p dir="ltr"><em>Choose by clicking one of our services (Shirt Cleaning Service, Shoes Cleaning Service, Blanket Cleaning Service)</em></p><ul><li dir="ltr"><p dir="ltr">Isi formulir / <em>Fill the forms</em></p></li></ul><p dir="ltr">Masukkan informasi sesuai dengan formulir seperti lokasi, waktu dan tanggal dan lain-lain.</p><p dir="ltr">Sebelum mengklik tombol “Pesan Sekarang”, mohon cek data yang anda masukkan telah sesuai.</p><p dir="ltr">Catatan : Clean.Bee akan membuat akun secara otomatis saat anda memesan layanan jika akun anda belum terdaftar. Detail akun akan dikirimkan melalui email.</p><p dir="ltr"><em>Please enter required information such as location, date and time etc. Before clicking the “Order Now”, please check your order details carefully. </em></p><p dir="ltr"><em>Note: Clean.Bee will automatically create an account if your email hasn’t yet registered. Account details will be sent via email.</em></p><ul><li dir="ltr"><p dir="ltr">Pesanan anda sudah terkirim / <em>Your order is already submitted</em></p></li></ul><p dir="ltr">Clean.Bee akan menginformasikan melalui email dan/atau sms terkait status pesanan anda.</p><p dir="ltr"><em>Clean.Bee will notify you via email and/or SMS about your order status.</em></p><p><br></p></div>
                                        </div>
                                    </div>
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000041359" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Lakukan Pembayaran / Make Payment
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000041359" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><ul><li><p dir="ltr">Transfer bank /<span style="color: rgb(61, 142, 185);"> <em>Bank transfer</em></span></p></li></ul><p dir="ltr">Jika Anda memilih metode pembayaran transfer bank, Anda dapat mentransfer pembayaran melalui transfer bank ke rekening Clean.Bee. Detail pembayaran akan dikirim melalui aplikasi setelah anda melakukan pemesanan. Silahkan laporkan bukti transfer kepada kurir kami.</p><p dir="ltr">Mohon lakukan pembayaran dalam kurun waktu yang tersedia dan pastikan anda mentransfer jumlah yang tepat.</p><p dir="ltr"><em><span style="color: rgb(61, 142, 185);">If you choose payment via bank transfer you will need to transfer your payment to Clean.Bee bank account. Payment details is sent after you make order through the application.</span></em></p><p dir="ltr"><span style="color: rgb(61, 142, 185);"><em class="">Please make payment during the time and make sure you pay the same amount. Please show the proof bank transfer to our courier.</em></span></p><ul><li>Cash on Delivery</li></ul><p dir="ltr">Jika Anda memilih metode Cash on Delivery, Anda dapat melakukan pembayaran kepada spesialis kami saat pekerjaan telah selesai.</p><p dir="ltr"><em><span style="color: rgb(61, 142, 185);">If you choose payment via cash on delivery you may pay the job after our specialist done with job. </span></em></p><p><br></p></div>
                                        </div>
                                    </div>
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000041362" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Order Tidak Terkirim / Order Cannot Be Submitted
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000041362" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><ul><li><p dir="ltr">Tombol “pesan” tidak muncul / <em>Order button invisible</em></p></li></ul><p dir="ltr">Tombol “Pesan” terdapat di halaman terakhir formulir. Jika Anda masih berada pada halaman pertama, mohon lanjutkan dengan menekan tombol “Lanjutkan”.</p><p dir="ltr">Jika tidak ada tombol yang muncul, mohon untuk me-refresh halaman dan buka kembali.</p><p dir="ltr">Masalah koneksi juga dapat menyebabkan tombol “pesan” tidak muncul. Mohon untuk me-reset koneksi internet anda dan tunggu hingga tombol muncul. </p><p dir="ltr"><em>“Order” button is available in last page of the form. If you still n page 1, please proceed by clicking “Next” button.</em></p><p dir="ltr"><em>If no button appeared please consider to refresh the page and reopen after a while.</em></p><p dir="ltr"><em>This problem may also caused by connection problem. Please reset your connection. Wait for a moment till the button appears.</em></p><p><br></p></div>
                                        </div>
                                    </div>
                                                                                                                                </div>
                        </div>
                                            <div id="list-2-1" class="tab-pane fade ">
                            <div id="accordion" role="tablist">
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000041364" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Cara Mendaftar / How to Signup
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000041364" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><ul><li>Website</li></ul><ol>
<li dir="ltr"><p dir="ltr">Klik “daftar” pada sudut kanan atas halaman. <em><span style="color: rgb(61, 142, 185);">click “sign up” on the top-right of the page. </span></em></p></li>
<li dir="ltr">
<p dir="ltr">Saat halaman terbuka, masukkan nama, email aktif, nomor telpon aktif, dan password anda. <em><span style="color: rgb(61, 142, 185);">When the page is open please insert your name, your active email address, active phone number and your password.</span></em></p>(alamat email anda akan digunakan untuk mengirim link aktivasi dan status pesanan anda. Nomor telepon anda akan digunakan untuk pemberitahuan status order dan untuk kontak dengan spesialis saat anda memesan layanan)<em><span style="color: rgb(61, 142, 185);">(Your email address will be used to send activation link and updates of your orders. Your phone number will be used to update your order statuses and occasionally used to contact with your specialist when you make an order.)</span></em>
</li>
</ol><ol start="3"><li dir="ltr">
<p dir="ltr">Klik tombol “daftar”. <em><span style="color: rgb(61, 142, 185);">Click “create account” button.</span></em></p>Mohon periksa data anda sebelum mengklik “daftar”.<span style="color: rgb(61, 142, 185);"> </span><em><span style="color: rgb(61, 142, 185);">Please check your data before you click create account.</span></em>
</li></ol><p><br></p></div>
                                        </div>
                                    </div>
                                                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#article_27000041365" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                                    Lupa Password / Forgot Password
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="article_27000041365" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"><ul><li>
<p dir="ltr">Website</p>
<ol>
<li dir="ltr"><p dir="ltr">Klik link “lupa password” pada halaman login /<em> Click the “forgot my password” link on login page</em></p></li>
<li dir="ltr"><p dir="ltr">Masukkan alamat email yang terdaftar. Clean.Bee akan mengirimkan password sementara ke email anda. / <em>Enter your registered email address. Clean.Bee will send new temporary password to your email.</em></p></li>
<li dir="ltr"><p dir="ltr">Anda dapat login menggunakan password sementara yang telah dikirimkan melalui email anda. / <em>Check your email and you may login with new temporary password.</em></p></li>
<li dir="ltr"><p dir="ltr">Anda dapat mengganti password melalui pengaturan / <em>You can change your password in settings.</em></p></li>
</ol>
</li></ul><p><br></p></div>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                                            
                                            
                                                            </div>
                        </div>
                                                </div>
        </div>
    </div>
</section>

    <!-- End of Main Content -->
    <!-- Script buat grouplist.accordion -->
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover({
                trigger: 'focus'
            })
            $('#openmodal_id').click(function () {
                $('.menu_backdrop').show();
            });
        });

        function showFolder(categoryKey, folderKey) {
            $('[id^="menu-"]').removeClass('active');
            $("#menu-" + categoryKey + '-' + folderKey).addClass('active');

            $('[id^="list-"]').hide();
            $('#list-' + categoryKey + '-' + folderKey).show().addClass('show active');
        }
    </script>



@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush

