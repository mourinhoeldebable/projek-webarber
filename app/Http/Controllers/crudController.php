<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\jammodel;
use App\Models\dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('info',[
            "title" => "About Us",
            "posts" => Post::all(),
           
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        
        $jamSekarang = Carbon::now('Asia/Jakarta')->hour; // Mendapatkan jam sekarang

        $nama = $request->input('check');
        $hasil = DB::table('jammodels')->where('jam_potong', '>', $jamSekarang)->get();
        // $hasilarray = $hasil->toArray();
        // dd($hasilarray);
        $dashboardDD = dashboard::where('nama', $nama)->pluck('jam')->toArray(); // Ambil ID jam potong rambut yang sudah diambil
        // $jam = jammodel::where('jam_potong', '<', Carbon::now())->get();
        return view('pesan',[
            "title" => "Order Now!",
            "posts" => Post::all(),
            // "dashboard" => dashboard::pluck('jam')->toArray(), // Ambil ID jam potong rambut yang sudah diambil
            "jam" => jammodel::all(),
            "dashboardDD" => $dashboardDD,
            "hasil" => $hasil,
            "nama" => $nama
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pelanggan' => 'required',
            'nama'=> 'required',
            'jam' => 'required',
            'email' => 'required|email',
            'telp' => 'required|min:9|max:15',
            'image' => 'required|image'


        ]);

        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('bukti-bayar');
        }
         //Simpan data ke database
        // $dashboard = new dashboard();
        // $dashboard->pelanggan = $request->input('pelanggan');
        // $dashboard->nama = $request->input('nama');
        // $dashboard->jam = $request->input('jam');
        // $dashboard->email = $request->input('email');
        // $dashboard->telp = $request->input('telp');
        // tambahkan field lainnya

    //     $barber = dashboard::find($dashboard);
    //     if ($barber->jam == $dashboard->jam) {
    //     return redirect('/info/create')->with('error', 'Maaf, waktu tersebut sudah terisi. Silakan pilih waktu lain.');
        

    // }

    // if ($barber->jam != null) {
    //     $jam = $dashboard->jam;
    // }

        // $dashboard->save();
        dashboard::create($validated);
        return redirect('/info/create')->with('sucess', 'Pemesanan Berhasil dilakukan, Jangan lupa datang yaa.. Happy Bear');
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ,Request $request)
    {
        $query = $request->input('radioNama');
        $dashboards = dashboard::find($id)
            ->where('id', $id)
            ->get();
        $dashboardDD =dashboard::where('nama',)->pluck('jam')->toArray();      // Ambil ID jam potong rambut yang sudah diambil
      
        return view('edit', compact('dashboardDD','dashboards','query'),[
            'title' => "Edit Pesananmu",
            // 'dashboards' => $dashboard,
            'posts' => Post::all(),
            'jam' => jammodel::all()                                                     
        ],
            response()->json(['jam' => $dashboardDD])); response()->json(['jam' => $dashboardDD]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'pelanggan' => 'required',
            'nama'=> 'required',
            'jam' => 'required',
            'email' => 'required|email',
            'telp' => 'required|min:9|max:15',
            'image' => 'required|image'

        ]);

        if($request->file('image')){
            if($request->oldImage){
                storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('bukti-bayar');
        }

        dashboard::where('id',$id)
                        ->update($validated);
        return redirect('hubungi')->with('sucess', 'Pesanan Berhasil diubah, Jangan lupa datang yaa.. Happy Bear');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
