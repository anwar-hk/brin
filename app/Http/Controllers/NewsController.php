<?php

namespace App\Http\Controllers;
use App\News;
use Image;
use Input;
// use Illuminate\Support\Facades\Input;


use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(Request $request)
    {
        // dd($request);
        if($request->isMethod('post')){ 
            $data = $request->all();
            if($data){
                // dd($data);
                $news = new News;
                $news->title = $data['titel'];
                $news->discription = $data['discription'];
                $news->url = $data['url'];
                $news->image = $data['image'];
                if($request->hasfile('image')){
                    $image_tmp = $request->file('image');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename = rand(111,99999).'.'.$extension;
                        $image = 'backend/backend_img/news/'.$filename;
                        Image::make($image_tmp)->save($image);
                        $news->image = $filename; 
                    }
                }
                $news->save();
                return redirect('/admin/view-news')->with('flash_message_success','News has been added Successfully');
            }
            return view('admin.news.view_news');
        }
        $news_dropdown = "<option value='' selected disabled>Select</option>";
        return view('admin.news.add_news')->with(compact('news_dropdown'));
    }

    public function viewNews(Request $request){
        $news = News::get();
        // dd($news);
        return view ('admin.news.view_news')->with(compact('news'));
    
    }

    public function editNews(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();
            //upload image code
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $image_path = 'backend/backend_img/news/'.$filename;
                Image::make($image_tmp)->save($image_path);
            }
            }else{
                $filename = $data['current_image']; 
            }if(empty($data['discription'])){
                    $data['discription'] = '';
            }if(empty($data['url'])){
                    $data['url'] = '';
            }
            News::where(['id'=>$id])->update([
            'title'=>$data['title'],
            'discription'=>$data['discription'],
            'url'=>$data['url'],
            'image'=>$filename]);
            return redirect('/admin/view-news')->with('flash_message_success','News has been Updated Successfully');
        }

        $newsDetails = News::where(['id'=>$id])->first();
        $news_dropdown = "<option value='' selected disabled>Select</option>"; 
        //news drop down end    
        return view('admin.news.edit_news')->with(compact('newsDetails','news_dropdown')); 
    }

    public function deleteNews($id=null){
        News::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','News has been deleted Successfully!!!');
    }
}
