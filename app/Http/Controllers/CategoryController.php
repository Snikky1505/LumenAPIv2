<?php
/*
       _____       _ __   __        _____________  ______
      / ___/____  (_) /__/ /____  _<  / ____/ __ \/ ____/
      \__ \/ __ \/ / //_/ //_/ / / / /___ \/ / / /___ \  
     ___/ / / / / / ,< / ,< / /_/ / /___/ / /_/ /___/ /  
    /____/_/ /_/_/_/|_/_/|_|\__, /_/_____/\____/_____/   
                           /____/                        

    Licensed under GNU General Public License v3.0
    http://www.gnu.org/licenses/gpl-3.0.txt
    Written by Snikky1505. Email : hazinokaime@gmail.com
    Follow me on GithHub : https://github.com/Snikky1505
   
    For the brave souls who get this far: You are the chosen ones,
    the valiant knights of programming who toil away, without rest,
    fixing our most awful code. To you, true saviors, kings of men,
 
    I say this: never gonna give you up, never gonna let you down,
    never gonna run around and desert you. Never gonna make you cry,
    never gonna say goodbye. Never gonna tell a lie and hurt you.

*/
namespace App\Http\Controllers;

use App\Http\Models\Category;
use App\Http\Transformers\TransformerCat;
use Dingo\Api\Http\Request;
use Dingo\Api\Routing\Helpers;
use Mockery\Exception;

class CategoryController extends Controller {
    use Helpers;

    public function index () {
        $orm = Category::all();

        return $this->response->collection($orm, new TransformerCat);
    }

    public function show ($id) {
        try {

            $orm = Category::find($id);

        } catch ( Exception $e ) {
            return $e;
        }
        if ( $orm ) {
            return $this->response->item($orm, new TransformerCat);
        }

        return $this->response->errorNotFound('Data Tidak Ketemu');
    }

    public function destroy ($id) {
        $orm = Category::find($id);
        if ( $orm ) {
            try {
                $orm->delete();
            } catch ( Exception $e ) {
                return $e;
            }

            return response('Data Berhasil Dihapus');
        }

        return $this->response->errorNotFound('Data tidak ketemu');
    }

    public function store (Request $request) {
        $data = $request->only([
            'nmkategori',
        ]);

        $insert = new Category([
            'name' => $data['nmkategori']
        ]);

        try {
            $insert->save();
        } catch ( Exception $e ) {
            $this->response->error($e, 500);
        }

        $this->response->created();

        return response('Berhasil Tambah Data');
    }

    public function update($id,Request $request)
    {
        try{
            $update = Category::find($id);
        }catch(Exception $e){
            $this->response->error($e,500);
        }

        if($update){
            $data = $request->only([
                'nmkategori'
            ]);

            $update->fill([
                'name' => $data['nmkategori'],
            ]);

            try{
                $update->update();
            }catch (Exception $e){
                $this->response->error($e,500);
            }

            return response('Data Berhasil di Update');

        }else{
            $this->response->errorNotFound('data tidak berhasil di Update');
        }


    }
}