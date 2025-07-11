<style>
 body {
        font-family: 'Poppins', sans-serif;
    }
    .zebra-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    border: 1px solid #e5e7eb;
}

.zebra-table th {
    background-color: #ADD8E6; /* biru muda */
    color: black;
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table td {
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

.zebra-table tbody tr:nth-child(even) {
    background-color: #f1f1f1;
}

.zebra-table tbody tr:hover {
    background-color: #ffd100 !important;
}

th {
    background-color: #ADD8E6;
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.09_button')
{{-- ---------------------------------------------------------------------- --}}

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')
   @include('frontend.android.00_fiturmenu.06_alert')


   <!--begin::App Main-->
   <main class="app-main"
      style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
  "
>
     <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">
@include('backend.00_administrator.00_baganterpisah.10_selamatdatang')

           {{-- <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div> --}}

         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>
     {{-- ======================================================= --}}
     {{-- ALERT --}}

     {{-- @include('backend.00_administrator.00_baganterpisah.06_alert') --}}

     {{-- ======================================================= --}}

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="putih row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 {{-- <div class="card-header">
                    <div style="
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #00378a, #00378a);
                    color: white;
                    padding: 8px 10px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                ">
                    ⚙️ Setting Database
                </div> --}}

                     {{-- <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                         <a href="/404">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#00378a'; this.style.color='white';"
                             style="background-color: #00378a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-database" style="margin-right: 8px;"></i>
                             Asosiasi
                         </button>
                         </a>

                     </div> --}}
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    <div style="
                    margin-bottom:10px;
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #000080, #000080);
                    color: white;
                    padding: 10px 25px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    width: 100%;
                ">
                <span style="font-family: 'Poppins', sans-serif;">📌 Halaman : {{$title}}</span>
                </div>





                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">



                                                 <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                {{-- <option value="10">10</option> --}}
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

<div style="position: relative; display: inline-block; margin-right: 10px;">
    <input type="date"
           id="searchInput"
           oninput="searchTable()"
           placeholder="Cari berdasarkan tanggal permohonan..."
           style="border: 1px solid #ccc;
                  padding: 10px 36px 10px 20px;  /* padding kanan diperbesar */
                  font-size: 14px;
                  border-radius: 10px;
                  width: 250px;">
    <i class="fas fa-search"
       style="position: absolute;
              right: 12px;
              top: 50%;
              transform: translateY(-50%);
              font-size: 16px;
              color: #888;"></i>
</div>

<script>
    function searchTable() {
        const input = document.getElementById("searchInput").value;
        const url = `/bepbgslfindexslf?search=${encodeURIComponent(input)}`;

        fetch(url)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, "text/html");
                const newBody = doc.querySelector("#tableBody").innerHTML;
                document.querySelector("#tableBody").innerHTML = newBody;
            })
            .catch(error => console.error("Gagal ambil data:", error));
    }
</script>



                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Berkas Permohonan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                        </div>
                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/bepbgslfindexslf?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>



<div style="display: flex; justify-content: flex-end;">
    <a href="/createdatapbgslf" class="text-decoration-none">
    <div
        class="button-baru px-3 py-2 rounded shadow-sm d-flex align-items-center"
    >
        <i class="bi bi-plus-square me-2"></i> Create
    </div>
</a>

<div style="display: flex; justify-content: flex-end;">
    <a href="javascript:void(0)" class="text-decoration-none" onclick="exportTableToExcel('tabelSuratbantuanteknis', 'data_permohonanpbgdpuprblora')">
        <div
            class="button-baru px-3 py-2 rounded shadow-sm d-flex align-items-center"
            style="color: black;"
        >
            <i class="bi bi-download me-2"></i> Download Excel
        </div>
    </a>
</div>

             {{-- @canany(['superadmin', 'admin']) --}}
    @canany(['superadmin', 'admin'])
    <a href="{{ route('bepbgslfindexindexmenu') }}">
        <button class="button-hitam" type="button"
            style="cursor: pointer; margin-left:5px;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </a>
@endcanany

{{-- @endcanany --}}


                    </div>


                                <!-- Tombol Create -->
                                {{-- <a href="/settingssekolah/create">
                                    <button
                                        onmouseover="this.style.background='white'; this.style.color='black';"
                                        onmouseout="this.style.background='linear-gradient(to right, #228B22, #d4af37)'; this.style.color='white';"
                                        style="background: linear-gradient(to right, #228B22, #d4af37); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s; text-decoration: none;">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i> Create
                                    </button>
                                </a> --}}



                        {{-- <a href="/bekrkindex">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                             style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-arrow-left" style="margin-right: 8px;"></i> Kembali

                         </button>
                         </a> --}}

                     </div>
                 </div>
                 <hr>

               @include('backend.01_pbgslf.00_fiturtambahannav')

<hr>

                 <!-- /.card-header -->
                 <div class="card-body p-0">
                    <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                        <table id="tabelSuratbantuanteknis" class="table zebra-table">
                            <thead>
                                  <tr>
        <th style="background-color: #ADD8E6;">No</th>
        <th style="background-color: #ADD8E6;"><i class="bi bi-person-fill"></i> Admin DPUPR</th>
        <th style="background-color: #ADD8E6;"><i class="bi bi-person-fill"></i> Nama Pemohon</th>
<th style="background-color: #ADD8E6;"><i class="bi bi-file-earmark-text-fill"></i> Jenis Permohonan</th>
<th style="background-color: #ADD8E6;"><i class="bi bi-hash"></i> No Registrasi SIMBG</th>
<th style="background-color: #ADD8E6;"><i class="bi bi-hash"></i> Tanggal Permohonan</th>
<th style="background-color: #ADD8E6;"><i class="bi bi-hash"></i> Status Permohonan</th>
<th style="background-color: #ADD8E6;"><i class="bi bi-folder-fill"></i> Berkas</th>
    @can('superadmin')
            <th style="background-color: #ADD8E6;"><i class="bi bi-tools"></i> Aksi</th>
            @endcan
    </tr>
                            </thead>
                              <tbody id="tableBody">
                                @foreach ($data as $item )

                                <tr class="align-middle">
                                 <td>{{ $loop->iteration }}</td>
            {{-- <td>{{ optional($item->user)->name ?? '-' }}</td> --}}
            <td>{{ $item->user->name ?? '-' }}</td>
            <td>{{ $item->datapemilik->namapemilik ?? '-' }}</td>
            <td>{{ $item->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</td>
            <td>{{ $item->noregissimbg ?? '-' }}</td>
            {{-- <td>{{ $item->datapemilik->namapemilik ?? '-' }}</td> --}}
            {{-- <td>{{ $item->datapemilik->namapemilik ?? '-' }}</td> --}}
   <td>
  {{ $item->tanggalpermohonan ? \Carbon\Carbon::parse($item->tanggalpermohonan)->translatedFormat('d F Y') : '-' }}
</td>
         <td>Belum dibuat databasenya</td>
<td style="text-align: center;">
    <a href="{{ route('bepbgslflihatper.show', $item->id) }}"
        class="button-permohonan"
        style="
            display: inline-block;
            width: fit-content;
            border-radius: 15px;
            padding: 8px 16px;
            background-color: #6c757d;
            color: black;
            border: none;
            transition: background-color 0.3s, color 0.3s;
        "
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='black'; this.style.border='none';">
        <i class="fas fa-eye" style="margin-right: 5px;"></i> Lihat Permohonan
    </a>
</td>

            <!-- Tombol KTP -->


@can('superadmin')

<td style="text-align: center; vertical-align: middle;">
    {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
        <i class="bi bi-eye"></i>
    </a>
                                        <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                                            <i class="bi bi-pencil-square"></i>
                                        </a> --}}
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        data-judul="{{ $item->id }}"
                                           onclick="setDeleteUrl(this)">
                                           <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                    @endcan

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                     </div>
                 </div>

                 @include('backend.00_administrator.00_baganterpisah.07_paginations')

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                                                  <p>Apakah Anda Ingin Menghapus Data : ? <br> Jika anda manghapus data ini maka seluruh dokumen data teknis permohonan dll akan ikut terhapus <br> Anda Yakin hapus data permohonan ke <span id="itemName"></span> ini ?</p>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                 <form id="deleteForm" method="POST" action="">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Hapus</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

                 <script>
                 function setDeleteUrl(button) {
                     var id = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = id;
                     var deleteUrl = "/bepbgslfindexslfdelete/" + encodeURIComponent(id);
                     document.getElementById('deleteForm').action = deleteUrl;
                 }
                 </script>

                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

             </div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
     </div>
     <!--end::Row-->
     </div>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
   </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
