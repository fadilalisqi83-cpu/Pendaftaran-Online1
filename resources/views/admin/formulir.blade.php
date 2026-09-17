<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        /* Latar belakang gading hangat */
        body {
            display: flex;
            background: #FAFAF9; 
            color: #44403C;
            min-height: 100vh;
        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 260px;
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #E7E5E4;
            position: sticky;
            top: 0;
            height: 100vh;
        }


        .sidebar-header {
            padding: 30px 25px;
        }

        .sidebar-header h1 {
            color: #78350F; /* Cokelat mocca tua */
            font-size: 22px;
            font-weight: 700;
        }

        .sidebar-menu {
            flex: 1;
            padding: 0 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            color: #78716C;
            text-decoration: none;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .sidebar-menu a svg {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            stroke: currentColor;
        }

        .sidebar-menu a:hover {
            background: #FEF3C7;
            color: #78350F;
        }

        .sidebar-menu a.active {
            background: #D97706; /* Karamel emas */
            color: white;
            box-shadow: 0 2px 4px rgba(217, 119, 6, 0.2);
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px dashed #D6D3D1;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: #14B8A6; /* Teal segar */
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 12px;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-info .name {
            font-size: 14px;
            font-weight: 600;
            color: #292524;
        }

        .user-info .email {
            font-size: 12px;
            color: #78716C;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            width: 100%;
            background: none;
            border: none;
            color: #EA580C; /* Terakota */
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 5px;
        }

        /* --- MAIN CONTENT --- */
        .content {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        .form-card {
            background: #FFFFFF;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            border: 1px solid #E7E5E4;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-card h1 {
            font-size: 26px;
            color: #78350F;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 700;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #57534E;
            margin-bottom: 6px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            background: #FAFAF9;
            border: 1.5px solid #D6D3D1;
            font-size: 14px;
            color: #292524;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #D97706;
            box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.1);
        }

        textarea {
            height: 110px;
            resize: none;
        }

        .btn-kembali {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 20px;
            padding: 8px 14px;
            background: #78716C;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            transition: background 0.2s;
        }

        .btn-kembali:hover {
            background: #57534E;
        }

        .btn-submit {
            background: #D97706; /* Karamel emas */
            color: white;
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: #B45309;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h1>Dashboard admin</h1>
        </div>
        
        <div class="sidebar-menu">
            <a href="/admin/dashboard">
                <svg fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" stroke-width="2"/></svg>
                Dashboard
            </a>
            <a href="/admin/data-pendaftar">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                Data Pendaftar
            </a>
            <a href="/admin/pengumuman">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                Kelola Pengumuman
            </a>
            <a href="/admin/panduan" class="active">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Formulir Pendaftaran    
            </a>
        </div>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-avatar">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div class="user-info">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="email">{{ Auth::user()->email ?? 'admin@gmail.com' }}</span>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    <svg fill="none" viewBox="0 0 24 24" style="width:20px;height:20px;margin-right:8px;stroke:currentColor;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    Logout
                </button>
            </form>
        </div>
    </div>


    <!-- MAIN CONTENT -->
    <div class="content">
        <div class="form-card">
            <h1>Formulir Pendaftaran</h1>
            
            <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Nama Lengkap Anak</label>    
                <input type="text" name="nama_lengkap" required>

                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" required>

                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" required>

                <label>Nama Ayah</label>
                <input type="text" name="nama_ayah" required>

                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" required>

                <label>No HP Orang Tua</label>
                <input type="text" name="no_hp" required>

                <label>Alamat</label>
                <textarea name="alamat" required></textarea>

                <label>Pas Foto</label>
                <input type="file" name="foto">

                <label>Kartu Keluarga (KK)</label>
                <input type="file" name="kk">

                <label>Akta Kelahiran</label>
                <input type="file" name="akta">

                <button type="submit" class="btn-submit">
                    Simpan Pendaftaran
                </button>
            </form>
        </div>
    </div>

</body>
</html>