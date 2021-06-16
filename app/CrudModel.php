<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $fillable = ['nama', 'jenis', 'deskripsi', 'created_at', 'updated_at'];
}
