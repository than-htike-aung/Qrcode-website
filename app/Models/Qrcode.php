<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Qrcode
 * @package App\Models
 * @version January 10, 2021, 4:17 pm UTC
 *
 * @property integer $user_id
 * @property string $website
 * @property string $company_name
 * @property string $product_name
 * @property string $prodcut_url
 * @property string $callback_url
 * @property string $qrcode_path
 * @property number $amount
 * @property boolean $status
 */
class Qrcode extends Model
{
    use SoftDeletes;

    public $table = 'qrcodes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'website',
        'company_name',
        'product_name',
        'prodcut_url',
        'callback_url',
        'qrcode_path',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'website' => 'string',
        'company_name' => 'string',
        'product_name' => 'string',
        'prodcut_url' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'string',
        'amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'website' => 'nullable|string|max:255',
        'company_name' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'prodcut_url' => 'nullable|string|max:255',
        'callback_url' => 'required|string|max:255',
        'qrcode_path' => 'nullable|string|max:255',
        'amount' => 'required|numeric',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * Get the transactions for the qrcode
     */

    public function transactions(){
        return $this->hasMany('App\Models\Transaction');
    }


}
