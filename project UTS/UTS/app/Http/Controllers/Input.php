<!-- 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FoodCardController;

class Input extends Controller
{
    public function create()
        {
            return view('input');
        }

    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'foto_makanan' => 'required|image|mimes:jpg,jpeg,png'
        ]);

{
           $path = $request->file('foto_makanan')->store('foto_makanan', 'public');

        // Simpan ke database
        FoodCardController::create([
            'nama_makanan' => $request->nama_makanan,
            'foto_makanan' => $path
        ]);

        return redirect('/daftarmakanan')->with('success', 'Data berhasil ditambahkan!');
    }
}
} -->
