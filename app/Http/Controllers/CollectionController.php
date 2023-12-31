<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
/**
 * NIM: 6706220043
 * NAMA: Amri Elyasa
 * KELAS: 46-04
 */
class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        return view('koleksi.daftarKoleksi', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collections = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);
        return redirect('/koleksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        $jenisKoleksi = "";
        switch ($collection->jenisKoleksi) {
            case 1:
                $jenisKoleksi = "buku";
                break;
            case 2:
                $jenisKoleksi = "majalah";
                break;
            case 3:
                $jenisKoleksi = "cakram digital";
                break;
            
        }
        return view('koleksi.infoKoleksi', [
            "koleksi" => $collection,
            "jenisKoleksi" => $jenisKoleksi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        return view("koleksi.editKoleksi", compact("collection"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'namaKoleksi' => 'required',
            'jenisKoleksi' => 'required',
            'jumlahKoleksi' => 'required',
        ]);

        // Update the collection with the new data
        $collection->update($request->except(['token_']));

        // Redirect back to the collection view or any other desired page
        return redirect()->route('koleksi.infoKoleksi', $collection->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCollections()
    {
        $collections = Collection::select('namaKoleksi', 'jenisKoleksi', 'jumlahKoleksi')->orderBy('namaKoleksi', 'ASC')->get();

        return response()->json($collections, 200);
    }
}
