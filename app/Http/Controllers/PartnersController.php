<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partners;
use Image;
use Input;

class PartnersController extends Controller
{
    public function addPartners(Request $request)
    {
        // dd($request);
        if($request->isMethod('post')){ 
            $data = $request->all();
            if($data){
                $partners = new Partners;
                $partners->name = $data['name'];
                if($request->hasfile('image')){
                    $image_tmp = $request->file('image');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename = rand(111,99999).'.'.$extension;
                        $image = 'backend/backend_img/partners/'.$filename;
                        Image::make($image_tmp)->save($image);
                        $partners->logo = $filename; 
                    }
                }
                $partners->save();
                return redirect('/admin/view-partners')->with('flash_message_success','News has been added Successfully');
            }
            return view('admin.partners.view_partners');
        }
        $partners_dropdown = "<option value='' selected disabled>Select</option>";
        return view('admin.partners.add_partners')->with(compact('partners_dropdown'));
    }

    public function viewPartners(Request $request){
        $partners = Partners::get();
        // dd($news);
        return view ('admin.partners.view_partners')->with(compact('partners'));
    
    }

    public function editPartners(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();
            //upload image code
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $image_path = 'backend/backend_img/partners/'.$filename;
                Image::make($image_tmp)->save($image_path);
            }
            }else{
                $filename = $data['current_image']; 
            }if(empty($data['name'])){
                    $data['name'] = '';
            }if(empty($data['logo'])){
                    $data['logo'] = '';
            }
            Partners::where(['id'=>$id])->update([
            'name'=>$data['name'],
            'logo'=>$filename]);
            return redirect('/admin/view-partners')->with('flash_message_success','News has been Updated Successfully');
        }

        $partners = Partners::where(['id'=>$id])->first();
        $news_dropdown = "<option value='' selected disabled>Select</option>"; 
        //news drop down end    
        return view('admin.partners.edit_partners')->with(compact('partners','news_dropdown')); 
    }

    public function deletePartners($id=null){
        Partners::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','News has been deleted Successfully!!!');
    }
}
