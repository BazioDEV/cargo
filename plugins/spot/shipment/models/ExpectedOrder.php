<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class ExpectedOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_expectedOrder';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
