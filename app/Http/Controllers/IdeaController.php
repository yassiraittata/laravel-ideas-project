<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        return view('ideas.show', ['idea' => $idea]);
    }

    public function store()
    {
        // dump(request()->get('idea', null));
        $idea_content = request()->get('idea', null);

        // * validation
        request()->validate([
            "idea" => 'required|min:5|max:255'
        ]);

        // * first method to create an item
        // $idea = new Idea([
        //     "content" => $idea_content
        // ]);
        // $idea->save();

        // * second method to create an item
        $idea = Idea::create([
            "content" => $idea_content
        ]);

        //* redirect the use to the main page
        return redirect()->route('dashboard')->with('success', 'idea was created successfully!');
    }

    // public function destroy($id)
    // {
    //     $idea = Idea::where("id", $id)->firstOrFail();
    //     // dump($idea);

    //     $idea->delete();

    //     return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    // }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }
}
