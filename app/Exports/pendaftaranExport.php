<?php

namespace App\Exports;

use App\pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pendaftaranExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pendaftaran::all();
    }
    public function headings(): array
    {
        return [
            'id','Nama_Lengkap','Jenis_Kelamin','NISN','NIK','Tempat_Lahir','Tanggal_Lahir','No_Regis_Akta','Agama','Kewarganegaraan',
        'Berkebutuhan_Khusus','Alamat_Jalan','RT','RW','Dusun','Kelurahan','Kecamatan','Kode_Pos','Tempat_tinggal','Mode_Transportasi',
        'Nomor_KKS','Anak_Ke','Penerima_KPS','Layak_PIP','No_KPS','Layak_PIP','Penerima_KIP','No_KIP','Nama_KIP','Terima_Kartu_Fisik',
        'Alasan','Nama_Ayah','NIK_Ayah','Tanggal_Lahir_Ayah','Pendidikan_Ayah','Pekerjaan_Ayah','Penghasilan_Ayah','Berkebutuhan_Khusus_Ayah',
        'Nama_Ibu','NIK_Ibu','Tanggal_Lahir_Ibu','Pendidikan_Ibu','Pekerjaan_Ibu','Penghasilan_Ibu','Berkebutuhan_Khusus_Ibu',
        'Nama_Wali','NIK_Wali','Tanggal_Lahir_Wali','Pendidikan_Wali','Pekerjaan_Wali','Penghasilan_Wali','No_Tlp_Rumah','No_HP','email','Tinggi_Badan',
        'Berat_Badan','Jarak','Jarak_Sebut','Waktu_Tempuh','Jumlah_Saudara','Jenis_Pendaftaran','No_Induk','Tanggal_Masuk','Sekolah_Sebelumnya','Masuk_Rombel',
        'Tanggal_Keluar','Alasan_Keluar'
        ];
    }
}
