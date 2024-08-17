<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // private $stds =[
    //     ['id' =>1, 'name' => 'Youssef' , 'salary' => 20000 , 'image' => "1.jpg" ],
    //     ['id' =>2, 'name' => 'Ahmed' , 'salary' => 10000 , 'image' => "2.jpg" ],
    //     ['id' =>3, 'name' => 'ALI' , 'salary' => 25000 , 'image' => "3.jpg" ],
    //     ['id' =>4, 'name' => 'Menna' , 'salary' => 40000 , 'image' => "4.png"  ],
    //     ['id' =>5, 'name' => 'Nada' , 'salary' => 35000 , 'image' => "5.jpg" ],
    // ];

    private function getStudents(){
        return session()->get('students', [
            ['id' => 1, 'name' => 'Youssef', 'salary' => 20000, 'image' => "1.jpg"],
            ['id' => 2, 'name' => 'Ahmed', 'salary' => 10000, 'image' => "2.jpg"],
            ['id' => 3, 'name' => 'ALI', 'salary' => 25000, 'image' => "3.jpg"],
            ['id' => 4, 'name' => 'Menna', 'salary' => 40000, 'image' => "4.png"],
            ['id' => 5, 'name' => 'Nada', 'salary' => 35000, 'image' => "5.jpg"],
        ]);
    }

    public function saveStudents($students){
        session()->put('students', $students);
    }

    function index(){
        $students = $this->getStudents();
        return view('itiDashboard' , ["students" =>$students]);
    }


    function show($id){
        $students = $this->getStudents();
        $showStd = $this->findStudent($students , $id );
        if($showStd){
            return  view('show', ["student" =>$showStd]);
        }

        // if ($id <= count($this->stds)){
        //     $std = $this->stds[$id-1];
        //     return  view('show', ["student" =>$std]);
        // }
        return abort(404);
    }


    function create(){
        return view('create');
    }

    function store(Request $request){
        $students = $this->getStudents();
        $newStudent = [
            'id' => count($students) + 1,
            'name' => $request->name,
            'salary' => $request->salary,
            'image' => $request->image ?? '1.jpg'
        ];
        $students[]= $newStudent;
        $this->saveStudents($students);
        return redirect()->route('students.index');
    }




    function edit($id){
        if ($id <= count($this->stds)){
            $std = $this->stds[$id-1];
            return  view('edit', ["student" =>$std]);
        }
        return abort(404);

    }

function update(){
    return redirect()->route('students.index');

}
    private function findStudent($students, $id) {
        foreach ($students as $student) {
            if ($student['id'] == $id) {
                return $student;
            }
        }
        return null;
    }


}
