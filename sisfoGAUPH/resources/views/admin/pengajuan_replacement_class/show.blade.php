@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pengajuan_replacement_class {{ $pengajuan_replacement_class->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pengajuan_replacement_class') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pengajuan_replacement_class/' . $pengajuan_replacement_class->id . '/edit') }}" title="Edit pengajuan_replacement_class"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pengajuan_replacement_class' . '/' . $pengajuan_replacement_class->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pengajuan_replacement_class" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>

                        <a href ="{{ url('/admin/laporan/replacement/pdf') }}" target="=_blank">
                            <button class="btn btn-secondary btn-sm">Print</button></a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pengajuan_replacement_class->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nama Lengkap </th>
                                        <td> {{ $pengajuan_replacement_class->nama_lengkap }} </td>
                                    </tr>
                                    <tr>
                                    <th> Nama Mata Kuliah </th>
                                    <td> {{ $pengajuan_replacement_class->nama_mata_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Kelas </th>
                                        <td> {{ $pengajuan_replacement_class->kelas }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Tanggal yang akan di replace</th>
                                        <td> {{ $pengajuan_replacement_class->jadwal_tanggal_replacement }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Jam Kuliah </th>
                                        <td> {{ $pengajuan_replacement_class->jadwal_jam_kuliah }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Tanggal Replacement </th>
                                        <td> {{ $pengajuan_replacement_class->tanggal_replacement }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Jam Replacement </th>
                                        <td> {{ $pengajuan_replacement_class->jam_replacement }} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Alasan Replacement </th>
                                        <td> {{ $pengajuan_replacement_class->alasan_replacement }} 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
