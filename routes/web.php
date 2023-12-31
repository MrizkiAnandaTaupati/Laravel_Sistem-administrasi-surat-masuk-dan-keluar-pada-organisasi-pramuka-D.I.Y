<?php



use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;

use App\Http\Controllers\admin\ADashboardController;
use App\Http\Controllers\admin\AProfilController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ASekretarisController;
use App\Http\Controllers\admin\ASekretariatController;
use App\Http\Controllers\admin\ASuratMasukController;
use App\Http\Controllers\admin\ASuratKeluarController;
use App\Http\Controllers\admin\AUnitController;
use App\Http\Controllers\admin\AUserUnitController;
use App\Http\Controllers\admin\ANotulenController;
use App\Http\Controllers\admin\ARingkasanKegiatanController;

use App\Http\Controllers\sekretariat\SDashboardController;
use App\Http\Controllers\sekretariat\SProfilController;
use App\Http\Controllers\sekretariat\SSekretariatController;
use App\Http\Controllers\sekretariat\SSuratMasukController;
use App\Http\Controllers\sekretariat\SSuratKeluarController;
use App\Http\Controllers\Sekretariat\SNotulenController;
use App\Http\Controllers\Sekretariat\SRingkasanKegiatanController;

use App\Http\Controllers\sekretaris\SSDashboardController;
use App\Http\Controllers\sekretaris\SSekretarisController;
use App\Http\Controllers\sekretaris\SSProfilController;
use App\Http\Controllers\sekretaris\SSSuratMasukController;
use App\Http\Controllers\sekretaris\SSNotulenController;
use App\Http\Controllers\sekretaris\SSSuratKeluarController;


use App\Http\Controllers\userunit\UDashboardController;
use App\Http\Controllers\userunit\UUserController;
use App\Http\Controllers\userunit\UNotulenController;
use App\Http\Controllers\userunit\URingkasanKegiatanController;
use App\Http\Controllers\userunit\USuratMasukController;
use App\Http\Controllers\userunit\USuratKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login", [LoginController::class,"index"]);
Route::post("/dologin", [LoginController::class,"dologin"]);

// Route::get('/',[UserController::class,'index']);
Route::get('/dashboard_tracking/{id_surat}',[UserController::class,'dashboard_tracking']);

//hak akses admin

    Route::get('admin/dashboard', [ADashboardController::class,'index'])->middleware("cekadmin");
    Route::get('admin/profil', [AProfilController::class,'index'])->middleware("cekadmin");
    Route::put('admin/profil/{id_admin}', [AProfilController::class,'update_profil'])->middleware("cekadmin");
    Route::get('admin/logout', [AdminController::class,'logout'])->middleware("cekadmin");
    // Admin / Admin
    Route::get("/admin",[AdminController::class, 'index']);
    Route::get("/admin/tambah_admin",[AdminController::class, 'tambah_admin']);
    Route::post("/admin/admin_tambah",[AdminController::class, 'admin_tambah']);
    Route::get('/admin/ubah_admin/{id_admin}',[AdminController::class,'ubah_admin']);
    Route::put('/admin/admin_ubah/{id_admin}',[AdminController::class,'admin_ubah']);
    Route::delete("/admin/hapus/{id_admin}",[AdminController::class,'destroy']);
    // Admin / Sekretaris
    Route::get("admin/sekretaris",[ASekretarisController::class,"index"])->middleware("cekadmin");
    Route::get("admin/sekretaris/tambah",[ASekretarisController::class,"tambah"])->middleware("cekadmin");
    Route::post("admin/sekretaris/simpan",[ASekretarisController::class,"simpan_sekretaris"])->middleware("cekadmin");
    Route::delete("admin/sekretaris/hapus/{id_sekretaris}",[ASekretarisController::class,"hapus_sekretaris"])->middleware("cekadmin");
    Route::get("admin/sekretaris/edit/{id_sekretaris}",[ASekretarisController::class,"edit"])->middleware("cekadmin");
    Route::put("admin/sekretaris/edit_sekretaris/{id_sekretaris}",[ASekretarisController::class,"update_sekretaris"])->middleware("cekadmin");
    // Admin / Sekretariat
    Route::get("admin/sekretariat",[ASekretariatController::class,"index"])->middleware("cekadmin");
    Route::get("admin/sekretariat/tambah",[ASekretariatController::class,"tambah"])->middleware("cekadmin");
    Route::post("admin/sekretariat/simpan",[ASekretariatController::class,"simpan_sekretariat"])->middleware("cekadmin");
    Route::delete("admin/sekretariat/hapus/{id_sekretariat}",[ASekretariatController::class,"hapus_sekretariat"])->middleware("cekadmin");
    Route::get("admin/sekretariat/edit/{id_sekretariat}",[ASekretariatController::class,"edit"])->middleware("cekadmin");
    Route::put("admin/sekretariat/edit_sekretariat/{id_sekretariat}",[ASekretariatController::class,"update_sekretariat"])->middleware("cekadmin");
    //Admin / Unit
    Route::get("admin/unit",[AUnitcontroller::class,'index'])->middleware("cekadmin");
    Route::get("admin/unit_tambah",[AUnitcontroller::class,'unit_tambah'])->middleware("cekadmin");
    Route::post("admin/tambah_unit",[AUnitcontroller::class,'tambah_unit'])->middleware("cekadmin");
    Route::get("admin/unit_ubah/{id_unit}",[AUnitcontroller::class,'unit_ubah'])->middleware("cekadmin");
    Route::put("admin/ubah_unit/{id_unit}",[AUnitcontroller::class,'ubah_unit'])->middleware("cekadmin");
    Route::delete("admin/hapus_unit/{id_unit}",[AUnitcontroller::class,'hapus_unit'])->middleware("cekadmin");
    
    //Admin / Surat Masuk
    Route::get("admin/surat_masuk",[ASuratMasukController::class,'index'])->middleware("cekadmin");
    Route::get("admin/surat_masuk/detail_surat/{id_surat_masuk}",[ASuratMasukController::class,'detail_surat'])->middleware("cekadmin");
    //Admin / Surat Masuk

    //Admin / Surat Keluar
    Route::get("admin/surat_keluar",[ASuratKeluarController::class,'index'])->middleware("cekadmin");
    Route::get('admin/file_surat_keluar/{no_surat}',[SSuratKeluarController::class,'cetak_surat'])->middleware("cekadmin");
    Route::get("admin/surat_keluar/detail_surat/{no_surat}",[ASuratKeluarController::class,'detail_surat'])->middleware("cekadmin");
    //Admin / Surat Keluar

    //Admin / Notulen
    Route::get("admin/notulen",[ANotulenController::class,'index'])->middleware("cekadmin");
    Route::get("admin/notulen/detail_notulen/{id_notulen}",[ANotulenController::class,'detail_notulen'])->middleware("cekadmin");
    //Admin / Ringkasan Kegiatan
    Route::get("admin/ringkasan_kegiatan",[ARingkasanKegiatanController::class,"index"])->middleware("cekadmin");
    Route::get("admin/ringkasan_kegiatan/detail_ringkasan/{id_ringkasan_kegiatan}",[ARingkasanKegiatanController::class,'detail_ringkasan'])->middleware('cekadmin');

    //Admin / User Unit
    Route::get("admin/user_unit/{id_unit}",[AUserUnitController::class,'index'])->middleware("cekadmin");
    Route::get("admin/user_unit/tambah/{id_unit}",[AUserUnitController::class,"user_tambah"])->middleware("cekadmin");
    Route::post("admin/user_unit/tambah_user_unit/{id_unit}",[AUserUnitController::class,"tambah_user"])->middleware("cekadmin");
    Route::get("admin/user_unit/ubah/{id_unit}/{id_user_unit}",[AUserUnitController::class,"user_ubah"])->middleware("cekadmin");
    Route::put("admin/user_unit/ubah_user/{id_unit}/{id_user_unit}",[AUserUnitController::class,"ubah_user"])->middleware("cekadmin");
    Route::put("admin/user_unit/hapus/{id_unit}/{id_user_unit}",[AUserUnitController::class,"hapus_user"])->middleware("cekadmin");

    //Admin / Arsip
    Route::get("admin/arsip",[AdashboardController::class,'arsip'])->middleware("cekadmin");
    Route::get("admin/arsip_admin",[AdashboardController::class,'arsip_admin'])->middleware("cekadmin");
    Route::get("admin/arsip_sekretariat",[AdashboardController::class,'arsip_sekretariat'])->middleware("cekadmin");
    Route::get("admin/arsip_sekretaris",[AdashboardController::class,'arsip_sekretaris'])->middleware("cekadmin");
    Route::get("admin/arsip_unit",[AdashboardController::class,'arsip_unit'])->middleware("cekadmin");
    Route::get("admin/arsip_user_unit",[AdashboardController::class,'arsip_user_unit'])->middleware("cekadmin");
    Route::get("admin/arsip_surat_masuk",[AdashboardController::class,'arsip_surat_masuk'])->middleware("cekadmin");
    Route::get("admin/arsip_surat_masuk/detail_surat_masuk_arsip/{id_surat_masuk}",[AdashboardController::class,'detail_surat'])->middleware("cekadmin");
    Route::get("admin/arsip_surat_keluar",[AdashboardController::class,'arsip_surat_keluar'])->middleware("cekadmin");
    Route::get("admin/arsip_surat_keluar/detail_surat_keluar_arsip/{no_surat}",[AdashboardController::class,'detail_surat_keluar'])->middleware("cekadmin");
    Route::get("admin/arsip_notulen",[AdashboardController::class,'arsip_notulen'])->middleware("cekadmin");
    Route::get("admin/arsip_notulen/detail_notulen_arsip/{id_notulen}",[AdashboardController::class,'detail_notulen_arsip'])->middleware("cekadmin");
    Route::get("admin/arsip_ringkasan_kegiatan",[AdashboardController::class,'arsip_ringkasan_kegiatan'])->middleware("cekadmin");
    Route::get("admin/arsip_ringkasan_kegiatan/detail_ringkasan_kegiatan_arsip/{id_ringkasan_kegiatan}",[AdashboardController::class,'detail_ringkasan_kegiatan_arsip'])->middleware("cekadmin");
    
//hak akses admin

//hak akses sekretariat

    Route::get("sekretariat/dashboard",[SDashboardController::class,'index'])->middleware("ceksekretariat");
    Route::get('sekretariat/logout',[SSekretariatController::class,'logout'])->middleware("ceksekretariat");
    Route::get("sekretariat/profil",[SProfilController::class,'index'])->middleware("ceksekretariat");
    Route::put("sekretariat/profil/{id_sekretariat}",[SProfilController::class,"update_profil"])->middleware("ceksekretariat");
    //Sekretariat / Surat Masuk
    Route::get('sekretariat/surat_masuk',[SSuratMasukController::class,'index'])->middleware("ceksekretariat");
    Route::get('sekretariat/file_cetak_qr/{no_surat}',[SSuratMasukController::class,'cetak_qr'])->middleware("ceksekretariat");
    Route::get('sekretariat/surat_masuk/detail_surat/{id_surat_masuk}',[SSuratMasukController::class,'detail_surat'])->middleware("ceksekretariat");
    Route::get("sekretariat/surat_masuk/surat_tambah",[SSuratMasukController::class,'tambah_surat'])->middleware("ceksekretariat");
    Route::post("sekretariat/surat_masuk/tambah_surat",[SSuratMasukController::class,'surat_tambah'])->middleware("ceksekretariat");
    Route::get("sekretariat/surat_masuk/surat_ubah/{id_surat_masuk}",[SSuratMasukController::class,'surat_ubah'])->middleware("ceksekretariat");
    Route::put("sekretariat/surat_masuk/ubah_surat/{id_surat_masuk}",[SSuratMasukController::class,'ubah_surat'])->middleware("ceksekretariat");
    Route::put("sekretariat/surat_masuk/hapus_surat/{id_surat_masuk}",[SSuratMasukController::class,'hapus_surat'])->middleware("ceksekretariat");
    //Sekretariat / Surat Keluar
    Route::get('sekretariat/surat_keluar',[SSuratKeluarController::class,'index'])->middleware("ceksekretariat");
    Route::get('sekretariat/file_surat_keluar/{no_surat}',[SSuratKeluarController::class,'cetak_surat'])->middleware("ceksekretariat");
    Route::get('/sekretariat/surat_keluar/detail_surat/{no_surat}',[SSuratKeluarController::class,'detail_surat'])->middleware("ceksekretariat");
    Route::get("sekretariat/surat_keluar/surat_tambah",[SSuratKeluarController::class,'tambah_surat'])->middleware("ceksekretariat");
    Route::post("sekretariat/surat_keluar/tambah_surat",[SSuratKeluarController::class,'surat_tambah'])->middleware("ceksekretariat");
    Route::get("sekretariat/surat_keluar/surat_ubah/{no_surat}",[SSuratKeluarController::class,'surat_ubah'])->middleware("ceksekretariat");
    Route::put("sekretariat/surat_keluar/ubah_surat/{no_surat}",[SSuratKeluarController::class,'ubah_surat'])->middleware("ceksekretariat");
    Route::delete("sekretariat/surat_keluar/hapus_surat/{no_surat}",[SSuratKeluarController::class,'hapus_surat'])->middleware("ceksekretariat");
    // Sekretariat / Notulen
    Route::get("sekretariat/notulen",[SNotulenController::class,'index'])->middleware("ceksekretariat");
    Route::get("sekretariat/notulen/detail_notulen/{id_notulen}",[SNotulenController::class,'detail_notulen'])->middleware("ceksekretariat");
    // Sekretariat / Ringkasan Kegiatan
    Route::get("sekretariat/ringkasan_kegiatan",[SRingkasanKegiatanController::class,'index'])->middleware("ceksekretariat");
    Route::get("sekretariat/ringkasan_kegiatan/detail_ringkasan/{id_ringkasan_kegiatan}",[SRingkasanKegiatanController::class,'detail_ringkasan'])->middleware('ceksekretariat');

    //Sekretariat / Laporan Surat Masuk
    Route::get("sekretariat/laporan_surat_masuk",[SDashboardController::class,'laporan_surat_masuk'])->middleware("ceksekretariat");
    Route::post("dashboard/laporan_surat_masuk_filter",[SDashboardController::class,'laporan_surat_masuk_filter'])->middleware("ceksekretariat");
    Route::get("sekretariat/cetak_laporan_surat_masuk",[SDashboardController::class,'cetak_laporan_surat_masuk'])->middleware("ceksekretariat");
    Route::get('sekretariat/print_laporan_surat_masuk/{mulai}/{selesai}/{id_unit_tertentu}', [SDashboardController::class, 'print_laporan_surat_masuk'])->middleware("ceksekretariat");    
    Route::get('sekretariat/print_laporan_surat_masuk/{mulai}/{selesai}', [SDashboardController::class, 'print_laporan_surat_masuk_all'])->middleware("ceksekretariat");    

    //Sekretariat / Laporan Surat Keluar
    Route::get("sekretariat/laporan_surat_keluar",[SDashboardController::class,'laporan_surat_keluar'])->middleware("ceksekretariat");
    Route::post("dashboard/laporan_surat_keluar_filter",[SDashboardController::class,'laporan_surat_keluar_filter'])->middleware("ceksekretariat");
    Route::get("sekretariat/cetak_laporan_surat_keluar",[SDashboardController::class,'cetak_laporan_surat_keluar'])->middleware("ceksekretariat");
    Route::get('sekretariat/print_laporan_surat_keluar/{mulai}/{selesai}/{id_unit_tertentu}', [SDashboardController::class, 'print_laporan_surat_keluar'])->middleware("ceksekretariat");    
    Route::get('sekretariat/print_laporan_surat_keluar/{mulai}/{selesai}', [SDashboardController::class, 'print_laporan_surat_keluar_all'])->middleware("ceksekretariat");    

//hak akses sekretariat

//hak akses sekretaris
    Route::get("sekretaris/dashboard",[SSDashboardController::class,'index'])->middleware("ceksekretaris");
    Route::get("sekretaris/logout",[SSekretarisController::class,'logout'])->middleware("ceksekretaris");
    Route::get("sekretaris/profil",[SSProfilController::class,'index'])->middleware("ceksekretaris");
    Route::put("sekretaris/profil/{id_sekretaris}",[SSProfilController::class,"update_profil"])->middleware("ceksekretaris");
    Route::put("sekretaris/status_surat_ubah/{no_surat}",[SSSuratKeluarController::class,'ubah_status_surat'])->middleware("ceksekretaris");

    //Sekretaris / Surat Masuk
    Route::get("sekretaris/surat_masuk",[SSSuratMasukController::class,'index'])->middleware("ceksekretaris");
    Route::get("sekretaris/surat_masuk/disposisi_surat_masuk/{id_surat_masuk}",[SSSuratMasukController::class,'disposisi_surat_masuk'])->middleware("ceksekretaris");
    Route::post("sekretaris/surat_masuk/tambah_disposisi_surat_masuk/{id_surat_masuk}",[SSSuratMasukController::class,'tambah_disposisi'])->middleware("ceksekretaris");

    //Sekretaris / Notulen
    Route::get("sekretaris/notulen",[SSNotulenController::class,'index'])->middleware("ceksekretaris");
    Route::get("sekretaris/notulen/notulen_tambah",[SSNotulenController::class,'tambah_notulen'])->middleware("ceksekretaris");
    Route::post("sekretaris/notulen/tambah_notulen",[SSNotulenController::class,'notulen_tambah'])->middleware("ceksekretaris");
    Route::get("sekretaris/notulen/detail_notulen/{id_notulen}",[SSNotulenController::class,'detail_notulen'])->middleware("ceksekretaris");
    Route::get("sekretaris/notulen/notulen_ubah/{id_notulen}",[SSNotulenController::class,'notulen_ubah'])->middleware("ceksekretaris");
    Route::put("sekretaris/notulen/ubah_notulen/{id_notulen}",[SSNotulenController::class,'ubah_notulen'])->middleware("ceksekretaris");
    Route::put("sekretaris/notulen/hapus_notulen/{id_notulen}",[SSNotulenController::class,'hapus_notulen'])->middleware("ceksekretaris");
    Route::get("sekretaris/surat_masuk/disposisi_surat_masuk/{id_surat_masuk}",[SSSuratMasukController::class,'disposisi_surat_masuk'])->middleware("ceksekretaris");

    //Sekretaris / Surat Keluar
    Route::get("sekretaris/surat_keluar",[SSSuratKeluarController::class,'index'])->middleware("ceksekretaris");
    Route::get("sekretaris/surat_keluar/alasan_ditolak/{no_surat}",[SSSuratKeluarController::class,'alasan_ditolak'])->middleware("ceksekretaris");
    Route::post("sekretaris/surat_keluar/tambah_alasan_ditolak/{no_surat}",[SSSuratKeluarController::class,'alasan_ditolak_tambah'])->middleware("ceksekretaris");
    Route::get("sekretaris/surat_keluar/tampil_alasan_ditolak/{no_surat}",[SSSuratKeluarController::class,'alasan_ditolak_tampil'])->middleware("ceksekretaris");
    Route::get("sekretaris/surat_keluar/detail_surat/{no_surat}",[SSSuratKeluarController::class,'detail_surat'])->middleware("ceksekretaris");
    Route::get('sekretaris/file_surat_keluar/{no_surat}',[SSSuratKeluarController::class,'cetak_surat'])->middleware("ceksekretaris");

//hak akses sekretaris


//hak akses badan / bidang
    Route::get("userunit/dashboard/",[UDashboardController::class,'index'])->middleware('cekuser');
    Route::get("userunit/profil/",[UDashboardController::class,'profile'])->middleware('cekuser');
    Route::put("userunit/profil/{id_user_unit}",[UDashboardController::class,'update_profile'])->middleware('cekuser');
    Route::get("userunit/logout/",[UUserController::class,'logout'])->middleware('cekuser');

    //Badan / Bidang / Notulen
    Route::get("userunit/notulen",[UNotulenController::class,'index'])->middleware("cekuser");
    Route::get("userunit/notulen/notulen_tambah",[UNotulenController::class,'tambah_notulen'])->middleware("cekuser");
    Route::post("userunit/notulen/tambah_notulen",[UNotulenController::class,'notulen_tambah'])->middleware("cekuser");
    Route::get("userunit/notulen/notulen_ubah/{id_notulen}",[UNotulenController::class,'ubah_notulen'])->middleware("cekuser");
    Route::put("userunit/notulen/ubah_notulen/{id_notulen}",[UNotulenController::class,'notulen_ubah'])->middleware("cekuser");
    Route::put("userunit/notulen/hapus_notulen/{id_notulen}",[UNotulenController::class,'hapus_notulen'])->middleware("cekuser");
    Route::get("userunit/notulen/detail_notulen/{id_notulen}",[UNotulenController::class,'detail_notulen'])->middleware("cekuser");
    //Badan / Bidang Notulen

    //Badan / Bidang Ringkasan Kegiatan
    Route::get("userunit/ringkasan_kegiatan",[URingkasanKegiatanController::class,'index'])->middleware("cekuser");
    Route::get("userunit/ringkasan_kegiatan/ringkasan_tambah",[URingkasanKegiatanController::class,'tambah_ringkasan'])->middleware("cekuser");
    Route::post("userunit/ringkasan_kegiatan/tambah_ringkasan",[URingkasanKegiatanController::class,'ringkasan_tambah'])->middleware("cekuser");
    Route::get("userunit/ringkasan_kegiatan/ringkasan_ubah/{id_ringkasan_kegiatan}",[URingkasanKegiatanController::class,'ubah_ringkasan'])->middleware("cekuser");
    Route::put("userunit/ringkasan_kegiatan/ubah_ringkasan/{id_ringkasan_kegiatan}",[URingkasanKegiatanController::class,'ringkasan_ubah'])->middleware("cekuser");
    Route::put("userunit/ringkasan_kegiatan/hapus_ringkasan/{id_ringkasan_kegiatan}",[URingkasanKegiatanController::class,'hapus_ringkasan'])->middleware("cekuser");
    Route::get("userunit/ringkasan_kegiatan/detail_ringkasan/{id_ringkasan_kegiatan}",[URingkasanKegiatanController::class,'detail_ringkasan'])->middleware("cekuser");
    //Badan / Bidang Ringkasan Kegiatan

    //Badan / Bidang Surat Masuk
    Route::get("userunit/surat_masuk",[USuratMasukController::class,'index'])->middleware("cekuser");
    Route::get("userunit/surat_masuk/detail_surat_masuk/{id_surat_masuk}",[USuratMasukController::class,'detail_surat_masuk'])->middleware("cekuser");
    //Badan / Bidang Surat Masuk

    //Badan / Bidang Surat Keluar
    Route::get("userunit/surat_keluar",[USuratKeluarController::class,'index'])->middleware("cekuser");
    Route::get("userunit/surat_keluar/detail_surat_keluar/{no_surat}",[USuratKeluarController::class,'detail_surat_keluar'])->middleware("cekuser");
    //Badan / Bidang Surat Keluar

//hak akses badan / bidang


//hak akses pengirim surat

    Route::get("surat/validasi/{id_surat_masuk}",[SuratController::class,'validasi']);
//hak akses pengirim surat
