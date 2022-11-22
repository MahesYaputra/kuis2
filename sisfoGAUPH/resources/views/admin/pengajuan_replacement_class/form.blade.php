<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($pengajuan_replacement_class->nama_lengkap) ? $pengajuan_replacement_class->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_mata_kuliah') ? 'has-error' : ''}}">
    <label for="nama_mata_kuliah" class="control-label">{{ 'Nama Mata Kuliah' }}</label>
    <input class="form-control" name="nama_mata_kuliah" type="text" id="nama_mata_kuliah" value="{{ isset($pengajuan_replacement_class->nama_mata_kuliah) ? $pengajuan_replacement_class->nama_mata_kuliah : ''}}" >
    {!! $errors->first('nama_mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($pengajuan_replacement_class->kelas) ? $pengajuan_replacement_class->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_tanggal_replacement') ? 'has-error' : ''}}">
    <label for="jadwal_tanggal_replacement" class="control-label">{{ 'Jadwal Tanggal Replacement' }}</label>
    <input class="form-control" name="jadwal_tanggal_replacement" type="datetime-local" id="jadwal_tanggal_replacement" value="{{ isset($pengajuan_replacement_class->jadwal_tanggal_replacement) ? $pengajuan_replacement_class->jadwal_tanggal_replacement : ''}}" >
    {!! $errors->first('jadwal_tanggal_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_jam_kuliah') ? 'has-error' : ''}}">
    <label for="jadwal_jam_kuliah" class="control-label">{{ 'Jadwal Jam Kuliah' }}</label>
    <input class="form-control" name="jadwal_jam_kuliah" type="text" id="jadwal_jam_kuliah" value="{{ isset($pengajuan_replacement_class->jadwal_jam_kuliah) ? $pengajuan_replacement_class->jadwal_jam_kuliah : ''}}" >
    {!! $errors->first('jadwal_jam_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_replacement') ? 'has-error' : ''}}">
    <label for="tanggal_replacement" class="control-label">{{ 'Tanggal Replacement' }}</label>
    <input class="form-control" name="tanggal_replacement" type="datetime-local" id="tanggal_replacement" value="{{ isset($pengajuan_replacement_class->tanggal_replacement) ? $pengajuan_replacement_class->tanggal_replacement : ''}}" >
    {!! $errors->first('tanggal_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_replacement') ? 'has-error' : ''}}">
    <label for="jam_replacement" class="control-label">{{ 'Jam Replacement' }}</label>
    <input class="form-control" name="jam_replacement" type="text" id="jam_replacement" value="{{ isset($pengajuan_replacement_class->jam_replacement) ? $pengajuan_replacement_class->jam_replacement : ''}}" >
    {!! $errors->first('jam_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan_replacement') ? 'has-error' : ''}}">
    <label for="alasan_replacement" class="control-label">{{ 'Alasan Replacement' }}</label>
    <input class="form-control" name="alasan_replacement" type="text" id="alasan_replacement" value="{{ isset($pengajuan_replacement_class->alasan_replacement) ? $pengajuan_replacement_class->alasan_replacement : ''}}" >
    {!! $errors->first('alasan_replacement', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
