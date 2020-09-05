<?php

namespace App\Http\Controllers;
use App\News;
use Image;


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
}
