<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Sekretariat;
use App\Models\Sekretaris;
use App\Models\UserUnit;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view("login");
    }
    function dologin(Request $request)
    {
        //mengambil data yang di input di formurlir
        $username = $request->username_login;
        $password = sha1($request->password_login);

        //mengambil data di table admin untuk di cocokan dengan data di input formulir
        $cek_admin = Admin::where("username_admin",$username)->where("password_admin",$password)->where('status_admin','aktif')->first();

        //jika ada data $cek_admin maka masukkan data ke dalam session
        if(isset($cek_admin)){
            $request->session()->put("id_admin",$cek_admin->id_admin);
            $request->session()->put("uername_admin",$cek_admin->username_admin);
            $request->session()->put("password_admin",$cek_admin->password_admin);
            $request->session()->put("nama_admin",$cek_admin->nama_admin);
            $request->session()->put("status_admin",$cek_admin->status_admin);

            //setelah berhasil redirect ke halaman dashboard admin
            return redirect("admin/dashboard")->with("login_berhasil","Login Berhasil");
        }

        else{
            $cek_sekretariat = Sekretariat::where("username_sekretariat",$username)->where("password_sekretariat",$password)->where('status_sekretariat','aktif')->first();
            if(isset($cek_sekretariat)){
                $request->session()->put("id_sekretariat",$cek_sekretariat->id_sekretariat);
                $request->session()->put("uername_sekretariat",$cek_sekretariat->username_sekretariat);
                $request->session()->put("password_sekretariat",$cek_sekretariat->password_sekretariat);
                $request->session()->put("nama_sekretariat",$cek_sekretariat->nama_sekretariat);
                $request->session()->put("email_sekretariat",$cek_sekretariat->email_sekretariat);
                $request->session()->put("status_sekretariat",$cek_sekretariat->status_sekretariat);

                return redirect("sekretariat/dashboard")->with("login_berhasil","Login Berhasil");
            }
            else{
                $cek_sekretaris = Sekretaris::where("username_sekretaris",$username)->where("password_sekretaris",$password)->where('status_sekretaris','aktif')->first();
                if(isset($cek_sekretaris))
                {
                    $request->session()->put("id_sekretaris",$cek_sekretaris->id_sekretaris);
                    $request->session()->put("uername_sekretaris",$cek_sekretaris->username_sekretaris);
                    $request->session()->put("password_sekretaris",$cek_sekretaris->password_sekretaris);
                    $request->session()->put("nama_sekretaris",$cek_sekretaris->nama_sekretaris);
                    $request->session()->put("email_sekretaris",$cek_sekretaris->email_sekretaris);
                    $request->session()->put("status_sekretaris",$cek_sekretaris->status_sekretaris);

                    return redirect("sekretaris/dashboard")->with("login_berhasil","Login Berhasil");
                }
                else {
                    $cek_bb = UserUnit::where("username_user", $username)->where("password_user",$password)->where('status_user','aktif')->first();
                    if(isset($cek_bb))
                    {
                        $request->session()->put("id_user_unit",$cek_bb->id_user_unit);
                        $request->session()->put("id_unit",$cek_bb->id_unit);
                        $request->session()->put("username_user",$cek_bb->username_user);
                        $request->session()->put("password_user",$cek_bb->password_user);
                        $request->session()->put("nama_user",$cek_bb->nama_user); 
                        $request->session()->put("email_user",$cek_bb->email_user);
                        $request->session()->put("status_user",$cek_bb->status_user);      
                        
                        return redirect("userunit/dashboard")->with("login_berhasil","Login Berhasil");
                    }
                    else 
                    {
                        return redirect("login")->with("login_gagal","Username atau Password Salah!");
                    }
                }
            }
        }
    }
}
