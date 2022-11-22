<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pengajuan_replacement_class;
use Illuminate\Http\Request;

class pengajuan_replacement_classController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pengajuan_replacement_class = pengajuan_replacement_class::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('nama_mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan_replacement', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pengajuan_replacement_class = pengajuan_replacement_class::latest()->paginate($perPage);
        }

        return view('admin.pengajuan_replacement_class.index', compact('pengajuan_replacement_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pengajuan_replacement_class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        pengajuan_replacement_class::create($requestData);

        return redirect('admin/pengajuan_replacement_class')->with('flash_message', 'pengajuan_replacement_class added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pengajuan_replacement_class = pengajuan_replacement_class::findOrFail($id);

        return view('admin.pengajuan_replacement_class.show', compact('pengajuan_replacement_class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pengajuan_replacement_class = pengajuan_replacement_class::findOrFail($id);

        return view('admin.pengajuan_replacement_class.edit', compact('pengajuan_replacement_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $pengajuan_replacement_class = pengajuan_replacement_class::findOrFail($id);
        $pengajuan_replacement_class->update($requestData);

        return redirect('admin/pengajuan_replacement_class')->with('flash_message', 'pengajuan_replacement_class updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        pengajuan_replacement_class::destroy($id);

        return redirect('admin/pengajuan_replacement_class')->with('flash_message', 'pengajuan_replacement_class deleted!');
    }
}
