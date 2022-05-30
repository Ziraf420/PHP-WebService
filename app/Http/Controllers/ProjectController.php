<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
   
        return ProjectResource::collection( resource: Project::all()); 
    }
    public function deskripsi($id){
   
        return ProjectResource::collection( resource: Project::query()->where('id', $id)->get()); 
    }
   
}
