<?php

<!--https://qiita.com/makies/items/0684dad04a6008891d0d-->
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['user' => User::find(Auth::id())]);
    }

    public function upload(Request $request)
    {
//        $this->validate($request, [
//            'file' => [
//                // 必須
//                'required',
//                // アップロードされたファイルであること
//                'file',
//                // 最小縦横120px 最大縦横400px
//                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
//            ]
//        ]);

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/avatar');
            $image = new UserImage();
            $image->url = basename($filename);
            $image->user_id = Auth::id();
            $image->save();

            return redirect('/home')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
