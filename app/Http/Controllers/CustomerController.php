<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'                  => 'required|min:5|max:30',
            'phone'                 => 'required|min:10',
            'address'               => 'required',
            'electronic_appliance'  => 'required',
            'problem_description'   => 'required',
            'attach_image'          => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        dd($request->all());
    }
}
