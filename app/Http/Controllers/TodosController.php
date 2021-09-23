<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use App\Models\Status;


class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $List = Todos::paginate(5);

        return view('index', ['List' => $List]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ],
        [
        'name.required' => 'Поле ЗАДАЧА обязателна к заполнению!']
        );

        $todoList = Todos::create($request->all());

        return redirect('todos/')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todos = Todos::find($id);
        return view('edit', ['todos' => $todos]);
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

        $request->validate([
            'name' => 'required',
        ],
        [
            'name.required' => 'Поле ЗАДАЧА обязателна к заполнению!']
        );

        $todoList = Todos::where('id', $id)->update($request->except(['_method', '_token']));
        return redirect()->route('todos.index')->with('success', 'Запись добавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todoList = Todos::where('id', $id)->delete();

        return redirect()->route('todos.index')
            ->with('success', 'Запись удалена!');
    }
}
