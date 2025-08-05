
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
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
                    <h2>Daftar Redirect URLs</h2>
                    <div class="card-tools">
                        
                        <a href="https://206.189.152.204/redirects/create" class="btn btn-primary btn-sm">
                            Tambah Redirect Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Short Code</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Destinasi Aktif</th>
                                    <th>URL Publik</th> 
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td>9</td>
                                    <td>byd</td>
                                    <td>neko</td> 
                                    <td>
                                        
                                        1
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/byd" target="_blank">https://206.189.152.204/r/byd</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/9" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/9/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/9" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>8</td>
                                    <td>bmw</td>
                                    <td>138</td> 
                                    <td>
                                        
                                        1
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/bmw" target="_blank">https://206.189.152.204/r/bmw</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/8" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/8/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/8" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>7</td>
                                    <td>senna</td>
                                    <td>neko dan 138</td> 
                                    <td>
                                        
                                        2
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/senna" target="_blank">https://206.189.152.204/r/senna</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/7" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/7/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/7" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>6</td>
                                    <td>ferrari</td>
                                    <td>399</td> 
                                    <td>
                                        
                                        1
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/ferrari" target="_blank">https://206.189.152.204/r/ferrari</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/6" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/6/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/6" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>5</td>
                                    <td>jaguar</td>
                                    <td>108</td> 
                                    <td>
                                        
                                        1
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/jaguar" target="_blank">https://206.189.152.204/r/jaguar</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/5" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/5/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/5" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>4</td>
                                    <td>mclaren</td>
                                    <td>neko dan 138</td> 
                                    <td>
                                        
                                        2
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/mclaren" target="_blank">https://206.189.152.204/r/mclaren</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/4" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/4/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/4" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>3</td>
                                    <td>lambo</td>
                                    <td>neko dan 108</td> 
                                    <td>
                                        
                                        2
                                        
                                        
                                    </td>
                                     
                                    <td><a href="https://206.189.152.204/r/lambo" target="_blank">https://206.189.152.204/r/lambo</a></td>
                                    <td>
                                        

                                        
                                        <a href="https://206.189.152.204/redirects/3" class="btn btn-info btn-sm">Lihat/Destinasi</a>

                                        
                                        <a href="https://206.189.152.204/redirects/3/edit" class="btn btn-warning btn-sm">Edit</a>

                                        
                                        
                                        <form action="https://206.189.152.204/redirects/3" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus redirect ini dan SEMUA destinasinya?');" style="display:inline-block;">
                                            <input type="hidden" name="_token" value="6HzsU2Jq40itHTmhOrM3XTRZoRQM7WSQL46H3R6Q"> 
                                            <input type="hidden" name="_method" value="DELETE"> 
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                                            </tbody>
                        </table>

                        
                        

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
