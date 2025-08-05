
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar PHP Scripts</title>
  <link rel="shortcut icon" type="image/png" href="https://206.189.152.204/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="https://206.189.152.204/assets/css/styles.min.css" />
</head>
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <h4 class="font-weight-bold">Dashboard</h4>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <li class="sidebar-item">
              <a class="sidebar-link" href="https://206.189.152.204/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="https://206.189.152.204/domain" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Domain</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://206.189.152.204/backlink" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Backlink</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="https://206.189.152.204/redirects" aria-expanded="false">
                    <span>
                        
                        <i class="ti ti-link"></i>
                        
                        
                    </span>
                    <span class="hide-menu">Redirects</span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a class="sidebar-link" href="https://206.189.152.204/php_scripts" aria-expanded="false">
                    <span>
                        <i class="ti ti-file-code"></i> 
                        
                    </span>
                    <span class="hide-menu">Scripts</span>
                </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://206.189.152.204/cloakings" aria-expanded="false">
                  <span>
                      <i class="ti ti-mask"></i> 
                  </span>
                  <span class="hide-menu">Cloaking</span>
              </a>
          </li>

            
            <li class="sidebar-item">
                <a class="sidebar-link" href="https://206.189.152.204/users" aria-expanded="false">
                    <span>
                        <i class="ti ti-users"></i> 
                        
                    </span>
                    <span class="hide-menu">Pengguna</span>
                </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://206.189.152.204/google_site_verifications" aria-expanded="false">
                  <span>
                      <i class="ti ti-brand-google"></i> 
                  </span>
                  <span class="hide-menu">Verifikasi Situs Google</span>
              </a>
          </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="https://206.189.152.204/profile" aria-expanded="false">
                    <span>
                        <i class="ti ti-user"></i> 
                        
                    </span>
                    <span class="hide-menu">Kelola Profil</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="https://206.189.152.204/conditional_urls" aria-expanded="false">
                    <span>
                        <i class="ti ti-settings-automation"></i>

                    </span>
                    <span class="hide-menu">Conditional URLs</span>
                </a>
            </li> -->

          </ul>

        </nav>
      </div>
    </aside>
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="https://206.189.152.204/profile" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>

                    <a href="https://206.189.152.204/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- content -->
      <div class="container-fluid">
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Daftar PHP Scripts</h2>
                    
                    <div class="card-tools d-flex align-items-center">
                        
                        <form action="https://206.189.152.204/php_scripts" method="GET" class="form-inline mr-3">
                            <div class="input-group">
                                
                                <input type="text" name="search" class="form-control form-control-sm" placeholder="Cari Script..." value="">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">Cari</button>
                                    
                                                                    </div>
                            </div>
                        </form>

                        
                        <a href="https://206.189.152.204/php_scripts/create" class="btn btn-primary btn-sm">
                            Tambah Script Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Script</th>
                                    <th>Deskripsi</th>
                                    <th>Dibuat</th>
                                    <th>Diperbarui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td>135</td>
                                    <td>https://www.trianglerrhh.es/</td>
                                    <td>-</td> 
                                    <td>01 Aug 2025 08:54</td>
                                    <td>01 Aug 2025 08:54</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/135" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/135/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/135" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>134</td>
                                    <td>https://arabcodeweek2023.alecso.org/</td>
                                    <td>-</td> 
                                    <td>01 Aug 2025 08:39</td>
                                    <td>04 Aug 2025 11:28</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/134" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/134/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/134" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>133</td>
                                    <td>https://osakairasshai.start.osaka-info.jp/</td>
                                    <td>-</td> 
                                    <td>31 Jul 2025 13:49</td>
                                    <td>31 Jul 2025 13:49</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/133" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/133/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/133" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>132</td>
                                    <td>https://sbco.org.br/</td>
                                    <td>-</td> 
                                    <td>31 Jul 2025 13:40</td>
                                    <td>04 Aug 2025 11:13</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/132" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/132/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/132" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>131</td>
                                    <td>https://clinifemina.com.br/</td>
                                    <td>-</td> 
                                    <td>31 Jul 2025 13:33</td>
                                    <td>31 Jul 2025 13:33</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/131" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/131/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/131" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>130</td>
                                    <td>https://grand-next.jp/</td>
                                    <td>-</td> 
                                    <td>31 Jul 2025 06:58</td>
                                    <td>31 Jul 2025 06:58</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/130" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/130/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/130" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>129</td>
                                    <td>https://biblioteca.vicepresidencia.gob.bo/</td>
                                    <td>-</td> 
                                    <td>28 Jul 2025 17:37</td>
                                    <td>28 Jul 2025 18:42</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/129" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/129/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/129" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>128</td>
                                    <td>modabella.com.sa</td>
                                    <td>-</td> 
                                    <td>25 Jul 2025 19:17</td>
                                    <td>25 Jul 2025 19:17</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/128" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/128/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/128" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>127</td>
                                    <td>https://uokirkuk.edu.iq/</td>
                                    <td>-</td> 
                                    <td>25 Jul 2025 06:49</td>
                                    <td>28 Jul 2025 17:41</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/127" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/127/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/127" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>126</td>
                                    <td>https://merryriana.com/</td>
                                    <td>-</td> 
                                    <td>24 Jul 2025 04:41</td>
                                    <td>24 Jul 2025 04:41</td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/s/126" class="btn btn-info btn-sm" target="_blank">Lihat Teks</a>

                                        
                                        <a href="https://206.189.152.204/php_scripts/126/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/php_scripts/126" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus script ini?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                            </tbody>
                        </table>

                        
                        <div class="d-flex justify-content-center">
                            <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                
                                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">&laquo; Previous</span>
                    </li>
                
                
                                    <li class="page-item">
                        <a class="page-link" href="https://206.189.152.204/php_scripts?page=2" rel="next">Next &raquo;</a>
                    </li>
                            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    Showing
                    <span class="fw-semibold">1</span>
                    to
                    <span class="fw-semibold">10</span>
                    of
                    <span class="fw-semibold">133</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=3">3</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=4">4</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=5">5</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=6">6</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=7">7</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=8">8</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=9">9</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=10">10</a></li>
                                                                                                                                
                                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        
                        
                                                                    
                        
                        
                                                                                                                        <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=13">13</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/php_scripts?page=14">14</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://206.189.152.204/php_scripts?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>

                        </div>

                                    </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
  <script src="https://206.189.152.204/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://206.189.152.204/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://206.189.152.204/assets/js/sidebarmenu.js"></script>
  <script src="https://206.189.152.204/assets/js/app.min.js"></script>
  <!-- <script src="https://206.189.152.204/assets/libs/apexcharts/dist/apexcharts.min.js"></script> -->
  <script src="https://206.189.152.204/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script>
//$(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
$(document).ready(function() {
    var table3 = $('#listbacklink').DataTable({
        "paging": false
    })

    $('#checkAllBacklink').on('click', function(){
        var rows = table3.rows({ 'search': 'applied' }).nodes();
        $('.backlinkrow', rows).prop('checked', this.checked);
    });


    var table = $('#listDomain').DataTable({
        "scrollX": false,
        "scrollY": 200 ,
        "paging": false,
        "autoWidth": true,
        "dom": '<"top"lf>rt<"bottom"ip><"clear">',
        'columnDefs': [{
            'targets': 0,
            'searchable': true,
            'orderable': false
        }],
        'order': [[1, 'asc']]
    });

    $('#checkAll').on('click', function(){
        var rows = table.rows({ 'search': 'applied' }).nodes();
        $('.domainrow', rows).prop('checked', this.checked);
    });

    $('#listDomain tbody').on('change', 'input[type="checkbox"]', function(){
        if(!this.checked){
            var el = $('#check-all').get(0);
            if(el && el.checked && ('indeterminate' in el)){
                el.indeterminate = true;
            }
        }
    });



    var table2 = $('#listDomain2').DataTable({
        "scrollX": false,
        "scrollY": 200 ,
        "paging": false,
        "autoWidth": true,
        "dom": '<"top"lf>rt<"bottom"ip><"clear">',
        'columnDefs': [{
            'targets': 0,
            'searchable': true,
            'orderable': false
        }],
        'order': [[1, 'asc']]
    });

    $('#checkAll2').on('click', function(){
        var rows = table2.rows({ 'search': 'applied' }).nodes();
        $('.domainlist2', rows).prop('checked', this.checked);
    });

    $('#listDomain2 tbody').on('change', 'input[type="checkbox"]', function(){
        if(!this.checked){
            var el = $('#check-all2').get(0);
            if(el && el.checked && ('indeterminate' in el)){
                el.indeterminate = true;
            }
        }
    });



    var table3 = $('#listDomain3').DataTable({
        "scrollX": false,
        "scrollY": 200 ,
        "paging": false,
        "autoWidth": true,
        "dom": '<"top"lf>rt<"bottom"ip><"clear">',
        'columnDefs': [{
            'targets': 0,
            'searchable': true,
            'orderable': false
        }],
        'order': [[1, 'asc']]
    });

    $('#checkAll3').on('click', function(){
        var rows = table3.rows({ 'search': 'applied' }).nodes();
        $('.domainlist3', rows).prop('checked', this.checked);
    });

    $('#listDomain3 tbody').on('change', 'input[type="checkbox"]', function(){
        if(!this.checked){
            var el = $('#check-all2').get(0);
            if(el && el.checked && ('indeterminate' in el)){
                el.indeterminate = true;
            }
        }
    });
});

</script>
  <!-- <script src="https://206.189.152.204/assets/js/dashboard.js"></script> -->
</body>

</html>
