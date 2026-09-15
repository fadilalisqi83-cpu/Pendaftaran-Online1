<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Calon Siswa - TK Islam Ar-Rasyid</title>
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 700px;
        }

        .card {
            background-color: #ffffff;
            width: 100%;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
            border: 1px solid #f3f4f6;
            margin-bottom: 24px;
        }

        .card-header {
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon-box {
            width: 56px;
            height: 56px;
            background-color: #ffffff;
            border: 1px solid #f3f4f6;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            border-radius: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 16px;
            color: #005bb5;
        }

        .card-header h1 {
            color: #005bb5;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .card-header p {
            color: #6b7280;
            font-size: 13px;
        }

        .badge-status {
            background-color: #e0f2fe;
            color: #005bb5;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 12px;
            display: inline-block;
        }

        .section-title {
            font-size: 14px;
            font-weight: 700;
            color: #374151;
            margin-top: 24px;
            margin-bottom: 12px;
            padding-bottom: 6px;
            border-bottom: 1px solid #f3f4f6;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .data-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .data-item {
            margin-bottom: 8px;
        }

        .data-item label {
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            display: block;
            margin-bottom: 2px;
        }

        .data-item p {
            font-size: 14px;
            color: #1f2937;
            font-weight: 500;
        }

        /* --- Bagian Dokumen --- */
        .doc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 10px;
        }

        .doc-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            background: #ffffff;
        }

        .doc-card img {
            width: 100%;
            height: 110px;
            object-fit: cover;
            background: #f3f4f6;
        }

        .doc-card span {
            display: block;
            padding: 8px;
            font-size: 12px;
            font-weight: 600;
            color: #374151;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }

        /* --- Bagian Form & Tombol --- */
        .form-group {
            margin-top: 16px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            display: block;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            color: #1f2937;
            outline: none;
            resize: none;
            transition: 0.3s;
        }

        .form-input:focus {
            border-color: #005bb5;
            box-shadow: 0 0 0 1px #005bb5;
        }

        .btn-primary {
            width: 100%;
            background-color: #005bb5;
            color: #ffffff;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 12px;
        }

        .btn-primary:hover {
            background-color: #004a94;
        }

        .btn-success {
            background-color: #16a34a;
        }
        .btn-success:hover {
            background-color: #15803d;
        }

        .btn-danger {
            background-color: #dc2626;
        }
        .btn-danger:hover {
            background-color: #b91c1c;
        }

        .btn-row {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #6b7280;
            font-size: 13px;
            text-decoration: none;
            font-weight: 500;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div style="background-color: #dcfce7; color: #166534; padding: 12px; border-radius: 8px; margin-bottom: 16px; font-size: 13px; text-align: center; font-weight: 500;">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            
            <!-- Header Kartu -->
            <div class="card-header">
                <div class="icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
                <h1>Detail Calon Siswa</h1>
                <p>ID Pendaftaran: #{{ $siswa->nomor_pendaftaran }}</p>
                <div class="badge-status">Status: {{ $siswa->status }}</div>
            </div>

            <!-- Data Siswa -->
            <div class="section-title">Informasi Siswa</div>
            <div class="data-grid">
                <div class="data-item">
                    <label>Nama Lengkap</label>
                    <p>{{ $siswa->nama_lengkap }}</p>
                </div>
                <div class="data-item">
                    <label>Jenis Kelamin</label>
                    <p>{{ $siswa->jenis_kelamin }}</p>
                </div>
                <div class="data-item">
                    <label>Tempat, Tanggal Lahir</label>
                    <p>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</p>
                </div>  
                <div class="data-item" style="grid-column: span 2;">
                    <label>Alamat Lengkap</label>
                    <p>{{ $siswa->alamat }}</p>
                </div>
            </div>

            <!-- Data Orang Tua -->
            <div class="section-title">Informasi Orang Tua / Wali</div>
            <div class="data-grid">
                <div class="data-item">
                    <label>Nama Ayah</label>
                    <p>{{ $siswa->nama_ayah }}</p>
                </div>
                <div class="data-item">
                    <label>Nama Ibu</label>
                    <p>{{ $siswa->nama_ibu }}</p>
                </div>
                <div class="data-item" style="grid-column: span 2;">
                    <label>Nomor Telepon / WhatsApp</label>
                    <p style="color: #005bb5; font-weight: 600;">{{ $siswa->no_hp }}</p>
                </div>
            </div>

            <!-- Dokumen Lampiran -->
            <div class="section-title">Pratinjau Dokumen</div>
            <div class="doc-grid">
                <div class="doc-card">
                    <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa">
                    <span>Pas Foto</span>
                </div>
                <div class="doc-card">
                    <img src="{{ asset('storage/' . $siswa->kk) }}" alt="Kartu Keluarga">
                    <span>Kartu Keluarga</span>
                </div>
                <div class="doc-card">
                    <img src="{{ asset('storage/' . $siswa->akta) }}" alt="Akta Kelahiran">
                    <span>Akta Kelahiran</span>
                </div>
            </div>

            <!-- Catatan Admin -->
            <div class="section-title">Catatan Admin</div>
            <form action="{{ route('admin.pendaftar.catatan', $siswa->id) }}" method="POST">
                @csrf
                <div class="form-group" style="margin-top: 0;">
                    <textarea name="catatan_admin" class="form-input" rows="3" placeholder="Tambahkan catatan khusus mengenai kelengkapan berkas...">{{ $siswa->catatan_admin }}</textarea>
                </div>
                <button type="submit" class="btn-primary">Simpan Catatan</button>
            </form>

            <!-- Aksi Ubah Status -->
            <div class="section-title">Tindakan Keputusan</div>
            <div class="btn-row">
                <form action="{{ route('admin.pendaftar.status', $siswa->id) }}" method="POST" style="flex: 1;">
                    @csrf
                    <input type="hidden" name="status" value="Diterima">
                    <button type="submit" class="btn-primary btn-success" style="margin-top: 0;">Terima Siswa</button>
                </form>
                
                <form action="{{ route('admin.pendaftar.status', $siswa->id) }}" method="POST" style="flex: 1;">
                    @csrf
                    <input type="hidden" name="status" value="Ditolak">
                    <button type="submit" class="btn-primary btn-danger" style="margin-top: 0;">Tolak Siswa</button>
                </form>
            </div>

        </div>

        <!-- Tombol Kembali -->
        <div class="back-link">
            <a href="/admin/data-pendaftar">← Kembali ke Daftar Pendaftar</a>
        </div>

    </div>

</body>
</html>