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

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Masuk Barang</h6>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tmbhstck">
                            Tambah Barang Baru
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah Stock</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>02-11-2023</td>
                                    <td>Kulkas</td>
                                    <td>25</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>02-11-2023</td>
                                    <td>AC</td>
                                    <td>60</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>02-11-2023</td>
                                    <td>Televisi</td>
                                    <td>50</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>12-11-2023</td>
                                    <td>Televisi</td>
                                    <td>20</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>12-11-2023</td>
                                    <td>Televisi</td>
                                    <td>10</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="tmbhstck">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Stock</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>


                                <!-- Modal Body -->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                                        <br>
                                        <input type="text" name="deskripsi" placeholder="Deskripsi Barang" class="form-control" required>
                                        <br>
                                        <input type="number" name="stock" class="form-control" placeholder="Jumlah" required>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

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