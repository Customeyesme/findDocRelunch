<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $appends = array('key','name','surname','specialties','city','institution');

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getKeyAttribute()
    {
        return (string) $this->id;
    }

    /**
     * Get the name for this doctor.
     */
    public function getNameAttribute()
    {
        return title_case($this->attributes['name']);
    }

    /**
     * Get the surname for this doctor.
     */
    public function getSurnameAttribute()
    {
        return title_case($this->attributes['surname']);
    }

    /**
     * Get the surname for this doctor.
     */
    public function getCityAttribute()
    {
        $city = $this->city()->first();
        return $city ? $city->name:null;
    }


    /**
     * Get the surname for this doctor.
     */
    public function getInstitutionAttribute()
    {
        $institution = $this->institution()->first();
        return $institution ? $institution->name:null;
    }

    /**
     * Get the surname for this doctor.
     */
    public function getSpecialtiesAttribute()
    {
        $specialties = '';
        foreach ($this->specialties()->get() as $specialty){
            $specialties = $specialties.','.$specialty->name;
        }

        return ltrim($specialties, ',');
    }

    /**
     * Get the specialties for this doctor.
     */
    public function specialties()
    {
        return $this->belongsToMany('App\Specialty', 'doctor_specialty');
    }

    /**
     * Get the specialties for this doctor.
     */
    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }

    /**
     * Get the specialties for this doctor.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

}
