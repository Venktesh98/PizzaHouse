<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
       
        // $pizzas = Pizza::all(); # retreives all the record from the db
        // $pizzas = Pizza::orderBy('name','desc')->get(); # returns by default in ascending order
        // $pizzas = Pizza::where('type','hawaiine')->get();
        $pizzas = Pizza::latest()->get(); # returns the most recent created data from database
        return view('pizzas.index',['pizzas'=> $pizzas]);  #i.e pizza = foldername and index = filename under views folder
    }  
    public function show($id){

        $pizza_id = Pizza::findOrFail($id);  # finds the specific id or fails.
        return view('pizzas.show',['pizza'=>$pizza_id]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
        # name attributes in html form i.e is used to print the specific attributes of user in the terminal
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        $pizza = new Pizza; // Pizza model gets the database from here

        $pizza->name =  request('name');  # gets the name attribute from the html form.
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save(); # saves directly to the database.

        // error_log(request('toppings')); #will return only last selected item that is checked for that the solution is to use array
        

        return redirect('/')->with('msg','Thanks for your order');
    }

    public function destroy($id){
        $pizza_delete= Pizza::findOrFail($id);
        $pizza_delete->delete();

        return redirect('/pizzas');
    }
}
