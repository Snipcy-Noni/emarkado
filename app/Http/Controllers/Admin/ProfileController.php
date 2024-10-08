<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_Data\{AdminModel, VendorModel, MerchantModel};

class ProfileController extends Controller
{
    public function dashboard(){
        $admin = AdminModel::all();
        $vendors = VendorModel::all();
        $data=[
            'title'=>'Dashboard',
            'admin'=>$admin,
            'vendors'=>$vendors
        ];
        return view('admin.pages.dashboard',$data); //url path in folder resources/views/admin/dashboard.blade.php
    }
}
