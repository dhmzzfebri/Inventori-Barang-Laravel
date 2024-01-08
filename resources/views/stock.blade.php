@extends('layout/main')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


       @include('partials.sidebar')


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('partials.navbar')
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class=" bg-light rounded align-items-center justify-content-center mx-0">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">                     
                            <h5 class="mb-4">Stok Barang</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Tambah Barang Baru
                            </button>
                            <a href="export.php" class="btn btn-dark" target="_blank">Laporan Stok</a>
                            <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah Stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>02-11-2023</td>
                                        <td>Televisi</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>02-11-2023</td>
                                        <td>Kulkas</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>02-11-2023</td>
                                        <td>AC</td>
                                        <td>5</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Barang</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>


                                    <!-- Modal Body -->
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                                        <br>
                                        <input type="text" name="deskripsi" placeholder="Deskripsi Barang" class="form-control" required>
                                        <br>
                                        <input type="number" name="stock" class="form-control" placeholder="Stock" required>
                                        <br>
                                        <input type="file" name="file" class="form-control">
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
           @include('partials.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @extends('layout/js')
</body>

