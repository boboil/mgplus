<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Area;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Malls;
use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller
{
    public function index()
    {
        $malls = Malls::all();
        $areas = Area::all();
        $about = About::find(1);
        return view('index', compact('malls', 'areas', 'about'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        $portfolio = Portfolio::find(1);
        return view('portfolio', compact('portfolio'));
    }
    public function singleService($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if (empty($service)){
            abort(503);
        }
        return view('single-service', compact('service'));
    }

    public function about()
    {
        $about = About::find(1);
        return view('about', compact('about'));
    }

    public function news()
    {
        $about = About::find(1);
        return view('about', compact('about'));
    }

    public function form(Request $request)
    {
        $data = [
            'topic' => 'Консультация Маркетолога',
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ];
        $this->send($data);
        return redirect()->back();
    }

    public function contactForm(Request $request)
    {
        $data = [
            'topic' => 'Заявка со страницы контактов',
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'question' => $request->input('question'),
        ];
        $this->send($data);
        return redirect()->back();
    }
    public function send($data) {
        Mail::send('mail', $data, function($message) use ($data) {
            $message->to('boboilodarchenko@gmail.com', 'Заявка')->subject
            ($data['topic']);
            $message->from('no-reply@mgplus.az','Advertising agency');
        });
    }
}
