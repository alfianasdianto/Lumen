<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller {

    public function getAlumni() {
        $alumni = Alumni::orderBy('id', 'desc')->get();
        return response()->json($alumni);
    }

    public function detailAlumni($id) {
        $alumni = Alumni::find($id);
        return response()->json($alumni);
    }

    public function saveAlumni(Request $request) {
        dd($request->all());
        $alumni = Alumni::create($request->all());
        return response()->json($alumni);
    }

    public function deleteAlumni($id) {
        $alumni = Alumni::find($id);
        $alumni->delete();
        return response()->json(array(
            'success' => true,
        ));
    }

    public function updateAlumni(Request $request, $id) {
        $alumni = Alumni::find($id);
        $input = $request->all();
        $alumni->update($input);
        return response()->json($alumni);
    }

}
?>