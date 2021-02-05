<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\PostModel;
use App\TagModel;
use App\PostInformationModel;
use phpDocumentor\Reflection\DocBlock\Tag;

class BoolpressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PostModel::paginate(
            10
        );

        return view("main", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = TagModel::all();
        $categories = CategoryModel::all();
        return view("create", compact("tags", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validated = $request->validate([
            'title' => 'required|string|min:3',
            'author' => 'required|string|min:3',
        ]);

        $newPost = PostModel::create([
            "title" => $validated["title"],
            "author" => $validated["author"],
            "category_id" => $data["categories"]
        ]);


        $newPost->save();

        $postInfo = PostInformationModel::create([
            "post_id" => $newPost->id,
            "description" => $data["description"],
            "slug" => "prova_slug"
        ]);

        $postInfo->save();

        $newPost->getTags()->attach($data["tags"]);



        return redirect()->route('boolpress.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostModel::find($id);
        $tags = $post->getTags;
        $detail = $post->getInformation;
        $category = $post->getCategory;
        return view("details", compact("detail", "post", "category", "tags"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostModel::find($id);
        $tags = TagModel::all();
        $categories = CategoryModel::all();

        return view("edit", compact("post", "tags", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = PostModel::find($id);
        $data = $request->all();
        $post->getTags()->detach();
        $post->update($data);

        $post->getInformation->update($data);

        $post->getTags()->attach($data["tags"]);


        return redirect()->route('boolpress.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostModel::find($id);
        $post->getInformation->delete();

        foreach ($post->getTags as $tag) {

            $post->getTags()->detach($tag->id);
        }
        $post->delete();


        return redirect()->back();
    }
}
