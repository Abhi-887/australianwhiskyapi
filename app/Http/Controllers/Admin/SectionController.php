<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\SectionSubfield;
use App\Models\Button;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with(['subfields', 'buttons'])->get();
        return view('admin.sections.index', compact('sections'));
    }

    public function create()
    {
        return view('admin.sections.create');
    }

    public function store(Request $request)
    {
        $section = Section::create($request->all());

        foreach ($request->subfields as $subfield) {
            $section->subfields()->create($subfield);
        }

        foreach ($request->buttons as $button) {
            $section->buttons()->create($button);
        }

        return redirect()->route('admin.sections.index');
    }

    public function edit($id)
    {
        $section = Section::with(['subfields', 'buttons'])->findOrFail($id);
        return view('admin.sections.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->update($request->all());

        $section->subfields()->delete();
        foreach ($request->subfields as $subfield) {
            $section->subfields()->create($subfield);
        }

        $section->buttons()->delete();
        foreach ($request->buttons as $button) {
            $section->buttons()->create($button);
        }

        return redirect()->route('admin.sections.index');
    }

    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('admin.sections.index');
    }
}
