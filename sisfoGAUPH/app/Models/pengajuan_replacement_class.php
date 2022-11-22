<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengajuan_replacement_class extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pengajuan_replacement_classes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_lengkap', 'nama_mata_kuliah', 'kelas', 'jadwal_tanggal_replacement', 'jadwal_jam_kuliah', 'tanggal_replacement', 'jam_replacement', 'alasan_replacement'];

    
}
