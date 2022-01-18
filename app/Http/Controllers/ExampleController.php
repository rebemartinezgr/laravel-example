<?php
/*
 * @author Rebeca Martinez Garcia
 */

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $examples = Example::orderBy('id', 'desc')->get();

        return view('example.index', [
            'examples' => $examples
        ]);
    }

    public function detail($id)
    {
        $example = Example::find($id);

        return view('example.detail', [
            'example' => $example
        ]);
    }

    public function create()
    {
        return view('example.create');
    }

    public function save(Request $request)
    {
        $example = new Example;

        $example->name = $request->input('name');
        $example->description = $request->input('description');
        $example->created_at = date('Y-m-d H:i:s');

        $example->save();

        return redirect()->route('index')->with('status', 'Example has been created successfully');
    }

    public function delete($id)
    {
        Example::destroy($id);
        //Example::find($id)->delete();
        return redirect()->route('index')->with('status', 'Example has been deleted successfully');
    }

    public function edit($id)
    {
        $example = Example::find($id);

        return view('example.create', [
            'example' => $example
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $example = Example::find($id);
        $example->name = $request->input('name');
        $example->description = $request->input('description');
        $example->updated_at = date('Y-m-d H:i:s');
        $example->save();

        return redirect()->route('index')->with('status', 'Example has been updated successfully');
    }

}
