<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BaseController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        //get all data of Model
        $rows = $this->model;
        $rows = $this->filter($rows);
        $rows = $rows->paginate(20);
        // return $rows;
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        return view('dashboard.' . $module_name_plural . '.index', compact('rows', 'module_name_singular', 'module_name_plural'));
    } //end of index


    public function create(Request $request)
    {
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        $append = $this->append();

        return view('dashboard.' . $this->getClassNameFromModel() . '.create', compact('module_name_singular', 'module_name_plural'))->with(['extraData' => $append]);
    } //end of create


    public function store( Request $request )
    {

        $data =  $this->storeData($request);
        $this->model->create($data);
        session()->flash('success', 'Added_successfully');
        return redirect()->back();
        // return redirect()->route('dashboard.' . $this->getClassNameFromModel() . '.index');
    }

    public function edit($id)
    {
        return $id;
    } //end of edit

    public function update(Request $request, $id)
    {
        return $id;
    } //end of edit

    public function destroy($id, Request $request)
    {

        $row = $this->model->findOrFail($id);
        $this->deleteRelatedData($row);
        $row->delete();
        session()->flash('success', 'Deleted_successfully');
        return redirect()->route('dashboard.' . $this->getClassNameFromModel() . '.index');
    } //end of destroy function

    protected function filter($rows)
    {
        return $rows;
    }
    public function getClassNameFromModel()
    {

        return Str::plural($this->getSingularModelName());
    } //end of get class name

    public function getSingularModelName()
    {

        return strtolower(class_basename($this->model));
    } //end of get singular model name

    protected function append()
    {
        return [];
    } //end of append

    public function storeData($row)
    {
        return [];
    }
    public function deleteRelatedData($row)
    {
        return [];
    }
}
