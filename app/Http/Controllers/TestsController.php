<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;

class TestsController extends Controller
{
    public function index(){

        $tests = DB::table('tests')->get();
        $simple_tests = DB::table('simple_tests')->get();

        return view('tests.index', compact('tests','simple_tests') );
    }

    public function new_test(){

        return view('tests.create_test');
    }


    // Новое создание тестов (под вертску)
    public function new_test_info(){

        return view('tests.create_test_info');
    }

    public function create_new_test_info(Request $request){

        $test_info_id = DB::table('tests_info')->insertGetId([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //dd($test_info_id);

        //return redirect('new_test_info_questions'); //->with('message_success', 'Описание теста успешно создано!');
        return \Redirect::route('new_test_questions', $test_info_id)->with('message', 'State saved correctly!!!');
    }

    public function new_test_questions($test_info_id){

        return view('tests.create_test_questions');
    }
    // Конец создания новых тестов



    public function create_test(Request $request){

        $all_info = $request->all();
        //dd($all_info);
        // Аррей для вопросов теста
        $data = [];

        // Нумерация
        $i = 0;
        foreach($all_info['question'] as $question){
            //Добавляем вопрос
            $data[$i]['id'] = $i;
            $data[$i]['question'] = $question;
            $data[$i]['question_end'] = $all_info['question_end'][$i];
            //Фикс для ответов
            $answer = 'answer';
            $answer .= $i;
            // Добавляем все ответы
            $data[$i]['answer'] = $all_info[$answer];

            $right_answer = 'right_answer';
            $right_answer .= $i;
            // Добавляем ответ
            //foreach($all_info['right_answer'] as $answer){
            $data[$i]['right_answer'] = $all_info[$right_answer];
           // }
            $i++;
        }
        //dd($data);
        //Формируем джсон
        $insert_data = json_encode($data);

        DB::table('tests')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'test_info' => $insert_data,
            'views' => '0',
            'finished_count' => '0',
            'creator_id' => Auth::user()->id,
        ]);
        
        return redirect('tests_controll')->with('message_success', 'Тест успешно создан!');
    }

    public function edit_test($test_id){

        //dd($test_id);

        $test_info = DB::table('tests')->where('id', $test_id)->first();

        return view('tests.edit_test', compact('test_id', 'test_info') );
    }

    public function edit_test_apply( $test_id, Request $request){

        //dd($request->all());
        
        DB::table('tests')->where('id', $test_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_enabled' => $request->is_enabled,
        ]);


        return redirect()->back()->with('message_success', 'Тест успешно обновлен!');
    }

    public function new_simple_test(){

        return view('tests.create_simple_test');
    }

    
    public function create_simple_test(Request $request){

        $all_info = $request->all();
        //dd($all_info);
        // Аррей для вопросов теста
        $data = [];

        // Нумерация
        $i = 0;
        foreach($all_info['question'] as $question){
            //Добавляем вопрос
            $data[$i]['question'] = $question;
            //Фикс для ответов
            $answer = 'answer';
            $answer .= $i;
            // Добавляем все ответы
            $data[$i]['answer'] = $all_info[$answer];

            $right_answer = 'right_answer';
            $right_answer .= $i;
            // Добавляем ответ
            //foreach($all_info['right_answer'] as $answer){
            $data[$i]['right_answer'] = $all_info[$right_answer];
           // }
            $i++;
        }
        //dd($data);
        //Формируем джсон
        $insert_data = json_encode($data);

        DB::table('simple_tests')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'test_info' => $insert_data,
            'views' => '0',
            'finished_count' => '0',
            'creator_id' => Auth::user()->id,
        ]);
        
        return redirect('tests_controll')->with('message_success', 'Тест успешно создан!');
    }

    function view_simple_test($test_id){

        $test_info = DB::table('simple_tests')->where('id', $test_id)->first();

        // Плюс к просмотру теста
        $views = $test_info->finished_count + 1;
        DB::table('simple_tests')->where('id', $test_id)->update([
            'views' => $views,
        ]);
        //

        $test_qa = json_decode($test_info->test_info);
        //dd($test_qa);

        return view('tests.view_test', compact('test_info', 'test_qa'));
    }

    function view_test($test_id){

        $test_info = DB::table('tests')->where('id', $test_id)->first();
        
        // Плюс к просмотру теста
        $views = $test_info->finished_count + 1;
        DB::table('tests')->where('id', $test_id)->update([
            'views' => $views,
        ]);
        //

        $test_qa = json_decode($test_info->test_info);
        //dd($test_qa);

        return view('tests.view_sort', compact('test_info', 'test_qa'));
    }

    function test_submit(Request $request, $test_id){

        // Получаем всю POST инфу
        $all_info = $request->all();
        //dd($all_info);

        $current_test = DB::table('tests')->where('id', $test_id)->first();
        $finished_count = $current_test->finished_count + 1;
        //dd($finished_count);

        // Обновляем кол-во сданных тестов
        DB::table('tests')->where('id', $test_id)->update([
            'finished_count' => $finished_count,
        ]);

        // Записываем в ЛОГ данные о сданном тесте
        DB::table('tests_log')->insert([
            'user_id' => Auth::user()->id,
            'test_id' => $test_id,
            'completed' => 'true',
        ]);

        return redirect('tests_controll')->with('message_success', 'Тест успешно сдан!');
    }

    function view_sort($test_id){

        $test_info = DB::table('tests')->where('id', $test_id)->first();
        
        // Плюс к просмотру теста
        $views = $test_info->finished_count + 1;
        DB::table('tests')->where('id', $test_id)->update([
            'views' => $views,
        ]);
        //

        $test_qa = json_decode($test_info->test_info);

        return view('tests.view_sort', compact('test_info', 'test_qa'));
    }
    // public function index_test(Request $request){
    //     $data = Menu::orderBy('sort_id','asc')->get();
    //     return view('menu',compact('data'));
    // }

    // public function updateOrder_test(Request $request){
    //     if($request->has('ids')){
    //         $arr = explode(',',$request->input('ids'));
            
    //         foreach($arr as $sortOrder => $id){
    //             $menu = Menu::find($id);
    //             $menu->sort_id = $sortOrder;
    //             $menu->save();
    //         }
    //         return ['success'=>true,'message'=>'Updated'];
    //     }
    // }

}
