<!DOCTYPE html>
<html>

<head>
    <title>Kartu Ujian</title>
    <style type="text/css">
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .card {
            width: 400px;
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 20px;
        }

        .school-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }

        .student-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .student-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-left: 90px;
            margin-top: -330px;
        }

        .student-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .student-details {
            display: flex;
            flex-direction: column;
        }

        .exam-info {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="school-info">
                <img class="logo" src="data:image/png;base64,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" alt="School Logo">
                <div>
                    <h3>Pondok Pesantren Thawalib Tanjung Limau</h3>
                    <p>Jl. H. Mukhtar Tanjung Limau, Pariangan, Simabur, Kec. Pariangan, Kabupaten Tanah Datar, Sumatera Barat</p>
                </div>
            </div>
            <hr>
            <div class="student-info">
                <div class="student-details">
                    @foreach ($data as $data)
                    <h3 class="student-name">Nama Peserta: {{$data->nama_lengkap}}</h3>
                    <p>NISN: {{$data->nisn}}</p>
                    <p>Tgl Lahir: {{$data->tanggal_lahir}}</p>
                    <p>Jenis Kelamin: {{$data->jenkel}}</p>
                    <p>Asal Sekolah: {{$data->asal_sekolah}}</p>
                    <p>Jalur Masuk: {{$data->jalur_masuk}}</p>
                </div>
                <img class="student-photo" alt="Student Photo">
                @endforeach
            </div>
            <hr>
            <h4 class="exam-info">Informasi Ujian</h4>
            <p>Tanggal: July 15, 2023</p>
            <p>Waktu: 9:00 AM - 12:00 PM</p>
            <p>Lokasi: Exam Hall 1</p>
        </div>
    </div>
</body>

</html>
