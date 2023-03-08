<!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>
    <!-- ======= Top Bar ======= -->
    {{-- <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
      <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
          <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
        </div>
        <div class="cta d-none d-md-block">
          <a href="#about" class="scrollto">Get Started</a>
        </div>
      </div>
    </div> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('opd.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Informasi Publik</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Daftar Informasi Publik</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="download" class="download ">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>OPD</th>
                                    <th>Jumlah DIP</th>
                                    <th>Aksi</th>
                                    {{-- <th class="text-center"><span>Status</span></th> --}}
                                    {{-- <th><span>Email</span></th> --}}
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($downloads as $item) --}}
                                <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                        <i class="fa fa-file"></i>
                                        <span class="user-subhead"> Diskominfo</span>
                                    </td>
                                    <td>
                                      37
                                  </td>
                                    <td style="width: 5%;">
                                        <a href="" class="table-link">
                                            <span>
                                              Tampilkan
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                {{-- @empty
                                <tr>
                                  <td>
                                      <span class="user-subhead" style="color: brown"> Belum ada file/dokumen yang diupload !</span>
                                  </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                              </tr>
                                @endforelse --}}


                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pull-right">
                        
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('opd.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('opd.layout.script')

</body>

</html>