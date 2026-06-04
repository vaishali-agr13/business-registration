<?php 
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'publish_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        Blog::create($data);

        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'publish_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        $blog->update($data);

        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('blogs.index');
    }
     public function showBlog()
    { 
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    
}