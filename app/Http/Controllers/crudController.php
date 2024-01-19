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
        $capster = Post::where('status', 'hadir')
        ->get();
        return view('info',[
            "title" => "About Us",
            "posts" => $capster
           
        ]);
      
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        
        $jamSekarang = Carbon::now('Asia/Jakarta')->hour; // Mendapatkan jam sekarang
        $capster = Post::where('status', 'hadir') ->get();
        $nama = $request->input('check');
        $currentDateTime = Carbon::now();
        $available = dashboard::where('created_at','<', $currentDateTime);
        $hasil = DB::table('jammodels')->where('jam_potong', '>', $jamSekarang)->get();
        $dashboardDD = dashboard::where('nama', $nama)
            ->pluck('jam')
            ->toArray(); // Ambil ID jam potong rambut yang sudah diambil
        return view('pesan',[
            "title" => "Order Now!",
            "posts" => $capster,
            "kuren" => $available,
            // "dashboard" => dashboard::pluck('jam')->toArray(), // Ambil ID jam potong rambut yang sudah diambil
            "dashboardDD" => $dashboardDD,
            "hasil" => $hasil,
            "nama" => $nama
        ]);
    }

    public function getData($nama)
    {
        // $jamSekarang = Carbon::now('Asia/Jakarta')->hour; // Mendapatkan jam sekarang
        $jamSekarang = Carbon::now('Asia/Jakarta')->hour; // Mendapatkan jam sekarang
        $hasil = DB::table('jammodels')->where('jam_potong', '>', $jamSekarang)->get();
        $data = dashboard::where('nama', $nama)
            ->whereDate('created_at', '>=', today())
            ->pluck('jam')
            ->toArray(); // Ubah sesuai dengan logika Anda
        // !in_array($data->jam_potong, $dashboardDD))
        $availableHour = array();

        foreach ($hasil as $key => $value) {
            if (in_array($value->jam_potong,$data)) {
                continue;
            }else{
                array_push($availableHour, $value);
            }
        }
                         
        return response()->json($availableHour);
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
        dashboard::create($validated);
        return redirect('/info/create')->with('sucess', 'Pemesanan Berhasil dilakukan, Jangan lupa datang yaa.. Happy Bear');
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ,Request $request)
    {
        $jamSekarang = Carbon::now('Asia/Jakarta')->hour; // Mendapatkan jam sekarang
        $capster = Post::where('status', 'hadir') ->get();
        $nama = $request->input('check');
        $dashboards = dashboard::find($id)
        ->where('id', $id)
        ->get();
        $hasil = DB::table('jammodels')->where('jam_potong', '>', $jamSekarang)->get();
        $dashboardDD = dashboard::where('nama', $nama)->pluck('jam')->toArray(); // Ambil ID jam potong rambut yang sudah diambil
        return view('edit',[
            "title" => "Edit ur order",
            "posts" => $capster,
            // "dashboard" => dashboard::pluck('jam')->toArray(), // Ambil ID jam potong rambut yang sudah diambil
            "data" => jammodel::all(),
            "dashboardDD" => $dashboardDD,
            "hasil" => $hasil,
            "nama" => $nama,
            "dashboards" => $dashboards
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'nama'=> 'required',
            'jam' => 'required',
            'email' => 'required|email',
            'telp' => 'required|min:9|max:15'

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
