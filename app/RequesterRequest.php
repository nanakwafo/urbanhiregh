<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequesterRequest extends Model
{
      // Fillable fields for the 'first_table'

    protected $fillableFirstTable = [
       'requester_id',
        'request_date',
        'status',
        'property_selection',
        'description',
    ];

    // Fillable fields for the 'second_table'
    protected $fillableSecondTable = [
        'request_id',
        'looking_for',
    ];


     // Fillable fields for the 'third_table'
    protected $fillableThirdTable = [
         'request_id',
        'file_path',
    ];

    // Table name for this model
    // protected $table = 'request'; // Change this to the appropriate table

    // Default fillable fields (used for mass assignment)
    // protected $fillable = [];

    // Constructor to set the table name dynamically based on the scenario
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Example: Set the table name to 'first_table' by default
        // $this->setTable('first_table');
    }

 public function useThirdTable()
    {
        $this->fillable = $this->fillableThirdTable;
        $this->setTable('request_attachment');
    }


    // Method to switch to 'second_table' fields
    public function useSecondTable()
    {
        $this->fillable = $this->fillableSecondTable;
        $this->setTable('request_information');
    }

    // Method to switch back to 'first_table' fields
    public function useFirstTable()
    {
        $this->fillable = $this->fillableFirstTable;
        $this->setTable('request');
    }




}
