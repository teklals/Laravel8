<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Datatest;
class datatestController extends Controller
{   
	public function AddCompany(){
    	return view("/admin/addcompany");	
	}
	public function AddCompanyData(Request $req){
		$datatest = new Datatest;
		$datatest->name = $req->name;
		$datatest->email = $req->email;
		$datatest->country = $req->country;
		$datatest->subject = $req->subject;
		$datatest->save();
		return redirect('/admin/companymgmt');    		
	}	
	public function CompanyMgmt(){
		$data = Datatest::all();
		return view('/admin/companymgmt',['datatests'=>$data]);
	}
	public function DeleteCompany($id){
		$data= Datatest::find($id);
		$data->delete();
    	return redirect('/admin/companymgmt');
	}

	public function UpdateCompany($id){
		$data = Datatest::find($id);		
    	return view('/admin/editcompany',['data'=>$data]);
	}
	public function UpdateCompanyData(Request $req){
		$data = Datatest::find($req->id);
		$data->name = $req->name;
		$data->email = $req->email;
		$data->country = $req->country;
		$data->subject = $req->subject;
		$data->save();
		return redirect('/admin/companymgmt');
	}
}