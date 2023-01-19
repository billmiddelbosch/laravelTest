<?php

namespace App\Http\Controllers;

use Aws\Crypto\MetadataStrategyInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Woning;

class woningdbController extends Controller
{
    public function getWoning($id = NUll)
    {
        if ($id) {
            $woning = DB::table('woning')->where('id', $id)->first();
            return view('enkeleWoning', compact('woning'));
        } else {
            $woning = DB::table('woning')->get();
            return view('woning', compact('woning'));
        }
    }

    public function addWoning()
    {
        return view('addwoning');
    }

    public function addWoningpost(Request $request)
    {
        $inputcheck = $request->validate(
            [
                'straat' => 'required',
                'plaats' => 'required'
            ]
        );
        DB::table('woning')->insert([
            'straat' => $request->straat,
            'plaats' => $request->plaats
        ]);
        return back()->with('woning-added', 'Woning is toegevoegd');
    }

    public function deleteWoning($id)
    {
        $woning = DB::table('woning')->where('id', $id)->delete();
        $woning = DB::table('woning')->get();
        return back()->with('woning-deleted', 'Woning is verwijderd');
    }

    public function updateWoning($id)
    {
        $woning = DB::table('woning')->where('id', $id)->first();
        return view('updatewoning', compact('woning'));
    }

    public function updateWoningPost(Request $request)
    {
        DB::table('woning')->where('id', $request->id)->update([
            'straat' => $request->straat,
            'plaats' => $request->plaats
        ]);
        return back()->with('woning-updated', 'Woning is aangepast');
    }

    public function getAllWoningen()
    {
        $woningen = Woning::all();
        return $woningen;
    }
}
