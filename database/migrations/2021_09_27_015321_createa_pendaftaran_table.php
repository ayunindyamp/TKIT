<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateaPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Lengkap');
            $table->enum('Jenis_Kelamin', ['Laki-laki', 'perempuan']);
            $table->string('NISN');
            $table->string('NIK');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->string('No_Regis_Akta');
            $table->enum('Agama',['Islam','Kristen/Protestan','Hindu','Budha','Khong_Hu_Chu','YME','Lainnya']);
            $table->enum('Kewarganegaraan',['WNI','WNA']);
            $table->enum('Berkebutuhan_Khusus',['Tidak', 'Netra', 'Rungu', 'Grahita_ringan', 'Grahita_Sedang', 'Daksa_Ringan', 'Daksa_Sedang', 'Laras', 'Wicara',
            'Tuna_ganda', 'Hiper_aktif', 'Cerdas_Istimewa', 'Bakat_Istimewa', 'Kesulitan_Belajra', 'Narkoba', 'Indigo', 'Down_Sindrome', 'Autis']);
            $table->string('Alamat_Jalan');
            $table->string('RT');
            $table->string('RW');
            $table->string('Dusun');
            $table->string('Kelurahan');
            $table->string('Kecamatan');
            $table->string('Kode_Pos');
            $table->enum('Tempat_tinggal',['Orang_Tua','Wali','Kos','Asrama','Panti Asuhan','Pesantren','Lainnya']);
            $table->enum('Mode_Transportasi',['Jalan_Kaki','Kendaraan_pribadi','Kendaraan_Umum','Jemputan','Beca','Perahu','Lainnya']);
            $table->string('Nomor_KKS');
            $table->string('Anak_Ke');
            $table->enum('Penerima_KPS',['ya','tidak']);
            $table->string('No_KPS');
            $table->enum('Layak_PIP',['ya','tidak']);
            $table->enum('Penerima_KIP',['ya','tidak']);
            $table->string('No_KIP');
            $table->string('Nama_KIP');
            $table->enum('Terima_Kartu_Fisik',['ya','tidak']);
            $table->enum('Alasan',['Pemegang PKH/KPS/KIP', 'Penerima_BSM' , 'Yatim_Piatu','Dampak_Bencana',
            'Prenah_DO','Siswa_Miskin', 'Daerah_Konflik', 'Keluarga_Terpidna', 'Kelainan_Fisik']);
            $table->string('Nama_Ayah');
            $table->string('NIK_Ayah');
            $table->date('Tanggal_Lahir_Ayah');
            $table->enum('Pendidikan_Ayah',['Tidak sekolah', 'Putus SD', 'SD', 'SMP','SMA','D1','D2','D3','D4/S1','S2','S3']);
            $table->enum('Pekerjaan_Ayah',['tidak bekerja', 'Nelayan', 'Petani','PNS/TNI/POLRI', 'Karyawan Swasta', 
            'Pedagang Kecil', 'Pedagang besar', 'wiraswasta', 'wirausaha', 'buruh, pensiunan', 'meninggal dunia', 'lainnya']);
            $table->enum('Penghasilan_Ayah',['kurang_500.000', '500.000-999.999', '1juta-1.999.999',
            '2juta-4.999.999', '5juta-20juta', 'lebih_20juta', 'tidak_berpenghasilan']);
            $table->enum('Berkebutuhan_Khusus_Ayah',['Tidak', 'Netra', 'Rungu', 'Grahita_ringan', 'Grahita_Sedang', 'Daksa_Ringan', 'Daksa_Sedang', 'Laras', 'Wicara',
            'Tuna_ganda', 'Hiper_aktif', 'Cerdas_Istimewa', 'Bakat_Istimewa', 'Kesulitan_Belajra', 'Narkoba', 'Indigo', 'Down_Sindrome', 'Autis']);
            $table->string('Nama_Ibu');
            $table->string('NIK_Ibu');
            $table->date('Tanggal_Lahir_Ibu');
            $table->enum('Pendidikan_Ibu',['Tidak sekolah', 'Putus SD', 'SD', 'SMP','SMA','D1','D2','D3','D4/S1','S2','S3']);
            $table->enum('Pekerjaan_Ibu',['tidak bekerja', 'Nelayan', 'Petani','PNS/TNI/POLRI', 'Karyawan Swasta', 
            'Pedagang Kecil', 'Pedagang besar', 'wiraswasta', 'wirausaha', 'buruh, pensiunan', 'meninggal dunia', 'lainnya']);
            $table->enum('Penghasilan_Ibu',['kurang_500.000', '500.000-999.999', '1juta-1.999.999',
            '2juta-4.999.999', '5juta-20juta', 'lebih_20juta', 'tidak_berpenghasilan']);
            $table->enum('Berkebutuhan_Khusus_Ibu',['Tidak', 'Netra', 'Rungu', 'Grahita_ringan', 'Grahita_Sedang', 'Daksa_Ringan', 'Daksa_Sedang', 'Laras', 'Wicara',
            'Tuna_ganda', 'Hiper_aktif', 'Cerdas_Istimewa', 'Bakat_Istimewa', 'Kesulitan_Belajra', 'Narkoba', 'Indigo', 'Down_Sindrome', 'Autis']);
            $table->string('Nama_Wali');
            $table->string('NIK_Wali');
            $table->date('Tanggal_Lahir_Wali');
            $table->enum('Pendidikan_Wali',['Tidak sekolah', 'Putus SD', 'SD', 'SMP','SMA','D1','D2','D3','D4/S1','S2','S3']);
            $table->enum('Pekerjaan_Wali',['tidak bekerja', 'Nelayan', 'Petani','PNS/TNI/POLRI', 'Karyawan Swasta', 
            'Pedagang Kecil', 'Pedagang besar', 'wiraswasta', 'wirausaha', 'buruh, pensiunan', 'meninggal dunia', 'lainnya']);
            $table->enum('Penghasilan_Wali',['kurang_500.000', '500.000-999.999', '1juta-1.999.999',
            '2juta-4.999.999', '5juta-20juta', 'lebih_20juta', 'tidak_berpenghasilan']);
            $table->string('No_Tlp_Rumah');
            $table->string('No_HP');
            $table->string('email');
            $table->string('Tinggi_Badan');
            $table->string('Berat_Badan');
            $table->enum('Jarak',['Kurang_1KM','Lebih_1KM']);
            $table->string('Jarak_Sebut');
            $table->string('Waktu_Tempuh');
            $table->string('Jumlah_Saudara');
            $table->enum('Jenis_Pendaftaran',['Siswa_Baru','Pindahan','Sekolah_Lagi']);
            $table->string('No_Induk');
            $table->date('Tanggal_Masuk');
            $table->string('Sekolah_Sebelumnya');
            $table->enum('Masuk_Rombel',['A','B']);
            $table->enum('keluar',['Lulus','Mutasi','Dikeluarkan','Mengundurkan Diri','Putus Sekolah','Wafat','Hilang','Lainnya']);
            $table->date('Tanggal_Keluar');
            $table->string('Alasan_Keluar');
            $table->tinyInteger('verifikasi')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
