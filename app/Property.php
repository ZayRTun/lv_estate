<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public $property_conditions = ['Average', 'Decent', 'Good', 'Great', 'Like New'];

    public $prop_for = ['For Rent', 'For Sale', 'For Rent or Sale'];
    public $prop_type = ['Condominium', 'Mini-Condominium', 'Apartment', 'Flat', 'Bungalow', 'Land'];
    public $township_names = ['Ahlon', 'Bahan', 'Dagon', 'Kyauktada', 'Kyimyindaing', 'Lanmadaw', 'Latha', 'Pabedan', 'Sanchaung', 'Dagon Seikkan', 'East Dagon', 'North Dagon', 'North Okkalapa', 'South Dagon', 'South Okkalapa', 'Thingangyun', 'Dala', 'Dawbon', 'Botataung', 'Mingala Taungnyunt', 'Seikkyi Kanaungto', 'Tamwe', 'Pazundaung', 'Thaketa', 'Yankin', 'Insein', 'Hlaing', 'Hlaingthaya', 'Kamayut', 'Mayangon', 'Mingaladon', 'Shwepyitha'];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getPropAreaAttribute()
    {
        return $this->width * $this->length;
    }

}


