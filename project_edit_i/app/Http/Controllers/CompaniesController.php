<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //ShowData
    function pullDataCompany()
    {
        $dataCompany = Company::all();
        $totalAssetsArray = [];
        $companies = Company::all();
        foreach ($companies as $company) {
            $totalAssetsArray[] = round(($company->total_assets / 10000000) * 100);
        }
        return view('home', compact('dataCompany', 'totalAssetsArray'));
    }
    
    function pullDataCompanyEdit()
    {
        $dataCompany = Company::all();
        $totalAssetsArray = [];
        $companies = Company::all();
        foreach ($companies as $company) {
            $totalAssetsArray[] = round(($company->total_assets / 10000000) * 100);
        }
        return view('editpage', compact('dataCompany', 'totalAssetsArray'));
    }


    //AddData
    function addData(Request $request)
    {
        $upLoadData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
            'description' => 'required',
            'income' => 'required',
            'total_assets' => 'required',
        ]);

        Company::create($upLoadData);

        $dataCompany = Company::all();
        $totalAssetsArray = [];
        $companies = Company::all();
        foreach ($companies as $company) {
            $totalAssetsArray[] = round(($company->total_assets / 10000000) * 100);
        }
        return view('home', compact('dataCompany', 'totalAssetsArray'));
    }


    //EditData
    function editPullDataToListEdit($id)
    {
        $dataEdit = Company::find($id);
        return view('listedit', compact('dataEdit'));
    }

    //Update
    function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
            'description' => 'required',
            'income' => 'required',
            'total_assets' => 'required',
        ]);

        $company = Company::findOrFail($id);
        $company->update($requestData);

        $dataCompany = Company::all();
        $totalAssetsArray = [];
        $companies = Company::all();
        foreach ($companies as $company) {
            $totalAssetsArray[] = round(($company->total_assets / 10000000) * 100);
        }
        return view('home', compact('dataCompany', 'totalAssetsArray'));
    }


    //Delete
    function delete($id) {
        $data = Company::find($id);
        $data->delete();

        $dataCompany = Company::all();
        $totalAssetsArray = [];
        $companies = Company::all();
        foreach ($companies as $company) {
            $totalAssetsArray[] = round(($company->total_assets / 10000000) * 100);
        }
        return view('home', compact('dataCompany', 'totalAssetsArray'));
    }
}
