<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }

    public function storeData($request)
    {
        $request_data = $request->all();
        if($request->category_id == 0 ){
            $request_data['direct_parent_id'] = null;
        }else{
        $category = $this->model->findOrFail($request->category_id);
        $request_data['direct_parent_id'] = $category->id;
        $request_data['root_id'] = $category->root_id == null ? $category->id : $category->root_id;
        $request_data['level'] = $category->level + 1;
        }
        return $request_data;
    }

    public function getChild(Request $request)
    {
        $category = $this->model->findOrFail($request->id)->children;
        $category->pluck('id', 'title');
        return response()->json($category->pluck('title', 'id'));
    }

    protected function append()
    {
        return $this->model->mainParent()->pluck('title', 'id')->toArray();
    }

    public function deleteRelatedData($row){
        return $row->where('level', '>', $row->level)->where('root_id', $row->root_id)->delete();
    }
}
