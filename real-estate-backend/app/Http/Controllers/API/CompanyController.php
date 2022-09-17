<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;


class CompanyController extends Controller 
{
    public function index(Request $request)
    {
        return response()->json(Company::all());
    }

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        $params = [
            'id', 'name', 'address1', 'address2', 'logo', 'city', 'state', 'zip', 'phone1', 'phone2', 'fax', 'email', 'description', 'about_us',
        ];
        $input = $request->only($params);
        $company;
        if (isset($input['id'])) {
            $company = Company::find($input['id']);
            if (!$company) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Company not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        } else {
            $company = new Company;
        }

        foreach ($params as $pname) {
            if (isset($input[$pname])) {
                $company->$pname = $input[$pname];
            }
        }
        
        $company->save();
        return response()->json(['success' => true, 'company' => $company]);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {
        $company = Company::find($id);
        if ($company == null) {
            return response(json_encode([
                'success' => false,
                'message' => 'Company not found'
            ]), 404)->header('Content-Type', 'text/json');
        }
        $company->delete();
        return response()->json(['success' => true]);
    }
}