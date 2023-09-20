<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog; // 

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('viewAllBlogs', ['blogs' => $blogs]);
    }
    

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'blog' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Handle image upload if a file was provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new blog post
        Blog::create([
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'blog' => $request->input('blog'),
            'image' => $imagePath,
        ]);

        // Redirect to a success page or return a response
        // You can customize this based on your needs

        return redirect()->route('/'); // Assuming you have a route named 'blogs.index'
    }
}
