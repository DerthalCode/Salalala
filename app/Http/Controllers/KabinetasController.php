<?php

namespace App\Http\Controllers;

use App\Models\Kabinetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class KabinetasController extends Controller
{

    public function index(){
        return view('pages.home');
    }
    public function birstonas(){
        $bir = Kabinetas::where('miestas', 'Birštonas')->get();
        // dump($bir);
        return view('pages.birstonas',compact('bir'));
    }
    public function druskininkai(){
        $dru = Kabinetas::where('miestas', 'Druskininkai')->get();
        // dump($dru);
        return view('pages.druskininkai', compact('dru'));
    }
    public function addEvent(){
        return view('pages.add-event');

    }
    public function adminview(){
        $kabinetas = Kabinetas::paginate(20);
        // dd($kabinetas);
        return view('pages.admin',compact('kabinetas'));

    }
    public function storeEvent(Request $request){

        //dd(request()->all());
        
        $validated = $request->validate([
            'kabinetas' => 'required|max:4',
            'telefonas'=>'required|max:6|numeric',
            'dirbanuo'=>'required|max:6|date_format:H:i',
            'dirbaiki'=>'required|max:6|date_format:H:i',
            'miestas'=>'required|max:20',
        ]);
        Kabinetas::create([
            'kabinetas'=>request('kabinetas'),
            'telefonas'=>request('telefonas'),
            'dirba_nuo'=>request('dirbanuo'),
            'dirba_iki'=>request('dirbaiki'),
            'miestas'=>request('miestas')
        ]);
        return redirect('/');
    }
    public function deleteEvent(Kabinetas $kabinetas){
        $kabinetas->delete();
        return redirect('/');
    }
    public function updateEvent(Kabinetas $kabinetas){
        return view('pages.update-event', compact('kabinetas'));
    }
    public function storeUpdate(Kabinetas $kabinetas, Request $request){
        //dd($request->all());
        Kabinetas::where('id', $kabinetas->id)->update($request->only(['kabinetas','telefonas','dirba_nuo','dirba_iki','miestas']));
        return redirect('/');
    }


}
