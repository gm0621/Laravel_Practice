<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;

class AnswerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $this->validate($request, [
                'content'     => 'required|min:15',
                'question_id' => 'required|integer'
            ]);
            $answer = new Answer();
            $answer->content = $request->content;

            $question = Question::findOrFail($request->question_id);

            // if successful we want to redirect        
            if($question->answers()->save($answer)){
                return redirect()->route('questions.show', $question->id);
            }else{
                return "error";
            }
         }
         catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
